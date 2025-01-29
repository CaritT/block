<?php
require_once('../server/server.php');

if (isset($_POST['login'])) {
     $name = $_POST['sname'];
     $pass = $_POST['spass'];

     $getstdpass = $obj->user_read_stdpass($pass);
     $stdpassrow = mysqli_num_rows($getstdpass);

     if ($stdpassrow <= 0) {

          header("location: ../login.php?error=noaccount");
          exit();
     }

     $getname = $obj->user_read_name($name);
     $namerow = mysqli_num_rows($getname);

     if ($namerow <= 0) {

          header("location: ../login.php?error=noaccount");
          exit();
     }

     $res = mysqli_fetch_assoc($getname);
     $_SESSION['uid'] = $res['u_id'];
     $_SESSION['uname'] = $res['u_name'];
     $_SESSION['ustdpass'] = $res['u_stdpass'];
     $_SESSION['rank'] = $res['u_rank'];
     if ($res['u_rank'] == 'admin') {
          header("location: ../admin/adminpage.php");
     } else {
          header("location: ../index.php");
     }
}
