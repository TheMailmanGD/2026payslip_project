<?php
include_once "connect.php";
$code_counter = [];
$codes = [];
function generateCode(string $last_name, int $id): string {
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
$sql = "UPDATE users SET code = '" . generateCode($last_name, $id) . "' WHERE id = 1";
?>
<?php
//only get users with status 1
$query1 = "SELECT * FROM users WHERE status = '1'";
//echo('<br>' . $query1 . '<br>');
$conn = new mysqli($host, $user, $pass, $db);
$result = mysqli_query($conn, $query1);
$conn->close();

//var_dump($result);

if($result){ // querry runs
    if(mysqli_num_rows($result) > 0){
        $output = '<table class="table">';
        $output .=  '<tr>
                            <th>ID</th>
                            <th>Code</th>
                            <th>First name</th>
                            <th>Last name</th>
                            <th>Email</th>
                            <th>Status</th>
                        </tr>';
        while($row = mysqli_fetch_array($result)){
            $output .=  '<tr>
                            <td>'. $row["id"] .'</td>
                            <td>'. $row["code"] .'</td>
                            <td>'. $row["first_name"] .'</td>
                            <td>'. $row["last_name"] .'</td>
                            <td>'. $row["email"] .'</td>
                            <td>'. $row["status"] .'</td>
                        </tr>';
        }
    } else {
        echo ("No Records found");
    }
}else {
    echo ("Query returned FALSE");
}
$output .=  "</table>";
echo ($output);
?>