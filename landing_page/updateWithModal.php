<?php
include_once "indexHeader.php";
?>
<h1>CRUD Update With Modal</h1>     
<!-- Code for Middle Part -->
<?php 
$id = htmlspecialchars($_POST['id']);
//echo $id;
$query1 = "SELECT * FROM users WHERE id=$id";
//echo ('<br>' . $query1 . '<br>');
$conn = new mysqli($host, $user, $pass, $db);
$result = mysqli_query($conn, $query1);
$conn->close();
//var_dump($result); // very useful for debugging
$output = "";
if($result){ // querry runs
    if(mysqli_num_rows($result) > 0){
        $output .= '<table class="table">';
        $output .=  '<tr>
                            <th>ID</th>
                            <th>Code</th>
                            <th>First name</th>
                            <th>Last name</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Operations</th>
                        </tr>';
        while($row = mysqli_fetch_array($result)){
            $output .=  '<tr>
                            <td>'. $row["id"] .'</td>
                            <td>'. $row["code"] .'</td>
                            <td>'. $row["first_name"] .'</td>
                            <td>'. $row["last_name"] .'</td>
                            <td>'. $row["email"] .'</td>
                            <td>'. $row["status"] .'</td>
                            <td>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                              Edit
                            </button>
                            </td>
                        </tr>';
        }
        $output .=  "</table>";
    } else {
        echo ("No Records found");
    }
}else {
    echo ("Query returned FALSE");
}
echo ($output);
?>
<?php
include_once "modal.php";
include_once "indexFooter.php";
?>