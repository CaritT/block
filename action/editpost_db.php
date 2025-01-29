<?php 
require_once('../server/server.php');

if(isset($_POST["editpost"])){
     $title = $_POST['title'];
     $des = $_POST['des'];
     $img = $_FILES['img'];

     if($img['name'] == ''){
          $obj->post_update($id, $title, $des, $row['p_img']);
          header("location: ../admin/adminpage.php");
          exit();
     }

     $ext = pathinfo($img['name'], PATHINFO_EXTENSION);
     $newname = date('YmdHis')."_".rand(1000,9999).".".$ext;
     move_uploaded_file($img['tmp_name'], '../upload/'.$newname);

     $id = $_POST['id'];
     $getpost = $obj->post_read($id);
     $row = mysqli_fetch_assoc($getpost);
     $oldimg = $row['p_img'];
     unlink('../upload/'.$oldimg);

     $obj->post_update($id, $title, $des, $newname);
     header("location: ../admin/adminpage.php");
}