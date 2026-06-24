<?php
include_once "indexHeader.php";
?>
<h1>CRUD Update With Modal</h1>
<form action="updateWithModal.php" method="post">
  <input type="text" name="id" placeholder="id">
  <input type="submit" value="Read">
</form>
<!-- Button trigger modal -->
<script>
    // var update = "id to update";
    // var id = "id";
    // var code = "code";
    // var first_name = "first_name";
    // var last_name = "last_name";
    // var email = "email";
    // var status = "status";

    // function updateModal(update, id, code, first_name, last_name, email, status){
    //     document.getElementsByName("update").placeholder = update;
    //     document.getElementsByName("id").placeholder = id;
    //     document.getElementsByName("code").placeholder = code;
    //     document.getElementsByName("first_name").placeholder = first_name;
    //     document.getElementsByName("last_name").placeholder = last_name;
    //     document.getElementsByName("email").placeholder = email;
    //     document.getElementsByName("status").placeholder = status;
    // }
</script>
<?php
// if(isset($_POST['update'])){
//     $update = $_POST['update'];
//     $id = $_POST['id'];
//     $code = $_POST['code'];
//     $first_name = $_POST['first_name'];
//     $last_name = $_POST['last_name'];
//     $email = $_POST['email'];
//     $status = $_POST['status'];
// }
// echo '<input type="text" name="update" placeholder="' . $update . '" disabled>';
?>
<!-- <form action="update.php" method="post">
    <input type="text" name="update" placeholder="id to update" disabled>
    <input type="text" name="id" placeholder="id" disabled>
    <input type="text" name="code" placeholder="code" disabled>
    <input type="text" name="first_name" placeholder="first_name" disabled>
    <input type="text" name="last_name" placeholder="last_name" disabled>
    <input type="text" name="email" placeholder="email" disabled>
    <input type="text" name="status" placeholder="status" disabled>
</form> -->
<?php
//include_once "modal.php";
include_once "indexFooter.php";
?>