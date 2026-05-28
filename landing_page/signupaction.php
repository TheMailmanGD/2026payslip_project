<?php
include_once "connect.php";
?>
<?php

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
$query1 = "SELECT * FROM users";
$conn = new mysqli($host, $user, $pass, $db);
$result = mysqli_query($conn, $query1);

$row = mysqli_fetch_array($result);
$i = 0;
while ($i < 100) {
    echo ($row["last_name"] . "<br>");
    $sql = "UPDATE users SET code = '". generateCode($row["last_name"]) ."' WHERE id = " . $row["id"];
    mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $i += 1;
}
$conn->close();

//create loginID here
//split last name into first 3 letters
//search database for how many users have the same first 3 letters in their last name
//add 1 to that number, and add 0s until the number is 4 digits long, 
// then add the first 3 letters of the last name to the front of the number
//$loginID = "";
//^^^placeholder
//$sql = "INSERT INTO users (id, code, pass, first_name, last_name, email, status) VALUES (NULL, '$loginID', '{$_POST['password']}', '{$_POST['first_name']}', '{$_POST['last_name']}', '{$_POST['email']}', '1')";
//echo ("Your login ID is: " . $loginID . "Remember it for login!");
?>