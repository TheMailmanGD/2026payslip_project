<?php
include_once "indexHeader.php";
?>
<h1>CRUD Read</h1>
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
<?php
include_once "indexFooter.php";
?>