<?php
include_once "connect.php";
?>
<?php
$conn = new mysqli($host, $user, $pass, $db);

$sql = "INSERT INTO users (id, code, pass, first_name, last_name, email, status) VALUES (NULL, '', '{$_POST['password']}', '{$_POST['first_name']}', '{$_POST['last_name']}', '{$_POST['email']}', '1')";
mysqli_query($conn, $sql);

$new = mysqli_insert_id($conn);

function generateCode(string $last_name): string {
    static $code_counter = [];
    $list_lastname = str_split($last_name);
    $letters = "";
    for ($i = 0; $i < 3; $i++) {
        $letters = $letters . strtoupper($list_lastname[$i]);
    };
    $code_counter[$letters] = ($code_counter[$letters] ?? 0) + 1;
    $n = 0;
    $code = "$letters";
    while ($n + strlen($code_counter[$letters]) < 4) {
        $code = $code . "0";
        $n += 1;
    };
    $code = $code . $code_counter[$letters];
    return $code;
};

$query1 = "SELECT * FROM users ORDER BY id";
$result = mysqli_query($conn, $query1);

while ($row = mysqli_fetch_array($result)) {
    $code = generateCode($row["last_name"]);
    $sql = "UPDATE users SET code = '". $code ."' WHERE id = " . $row["id"];
    mysqli_query($conn, $sql);
    
    if ($row["id"] == $new) {
        $loginID = $code;
    }
}

$conn->close();

echo ("Your login ID is: " . $loginID . " Remember it for login!");
?>