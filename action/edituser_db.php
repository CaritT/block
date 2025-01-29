<?php 
require_once('../server/server.php');

if(isset($_POST["edituser"])){
     $name = $_POST['name'];
     $pass = $_POST['stdpass'];
     $rank = $_POST['rank'];
     $id = $_POST['id'];

     $obj->user_update($id,$name, $pass, $rank);
     header("location: ../admin/viewuser.php");
}