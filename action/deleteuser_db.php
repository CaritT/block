<?php 
require_once('../server/server.php');

if(isset($_GET["id"])){
     $id = $_GET['id'];

     $obj->user_delete($id);
     header("location: ../admin/viewuser.php");
     exit();
}