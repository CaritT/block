<?php 
require_once('../server/server.php');

if(isset($_POST["adduser"])){
     $name = $_POST['name'];
     $pass = $_POST['stdpass'];
     $rank = $_POST['rank'];

     $getname = $obj->user_read_name($name);
     $namerow = mysqli_num_rows($getname);

     if($namerow > 0){
          header("location: ../admin/adduser.php?error=nametaken");
          exit();
     }

     $getstdpass = $obj->user_read_stdpass($pass);
     $stdpassrow = mysqli_num_rows($getstdpass);

     if($stdpassrow > 0){
          header("location: ../admin/adduser.php?error=stdpasstaken");
          exit();
     }

     $obj->user_create($name, $pass, $rank);
     header("location: ../admin/viewuser.php");
}