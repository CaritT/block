<?php 
require_once('../server/server.php');

if(isset($_POST["addpost"])){
     $title = $_POST['title'];
     $des = $_POST['des'];
     $img = $_FILES['img'];

     $ext = pathinfo($img['name'], PATHINFO_EXTENSION);
     $newname = date('YmdHis')."_".rand(1000,9999).".".$ext;
     move_uploaded_file($img['tmp_name'], '../upload/'.$newname);

     $obj->post_create($title, $des, $newname);
     header("location: ../admin/adminpage.php");
}