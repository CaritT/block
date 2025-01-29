<?php 
require_once('../server/server.php');

if(isset($_GET["id"])){
     $id = $_GET['id'];

     
     $getimg = $obj->post_read($id);
     $row = mysqli_fetch_assoc($getimg);
     $img = $row['p_img'];

     unlink('../upload/'.$img);


     $obj->post_delete($id);
     header("location: ../admin/adminpage.php");
     exit();
}