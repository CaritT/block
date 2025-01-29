<?php
     require_once('../server/server.php');
     if(empty($_SESSION['uid'])){
          header('location: ../login.php');
     }

     if($_SESSION['rank'] !== 'admin'){
          header('location: ../index.php');
     }

     $id = $_GET['id'];
     $query = $obj->user_read_id($id);
     $row = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../css/board.css">
     <link rel="stylesheet" href="../css/style.css">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Sarabun&display=swap" rel="stylesheet">
     <title>ClassroomBlog</title>
</head>

<body>

     <?php require_once("../components/nav.php") ?>
     <a href="./viewuser.php" class="btn2">< back</a>
     <div class="box">
     <h1>Edit user</h1>
         
      <form class="" method="post" action="../action/edituser_db.php">
          <input type="hidden" name="id" value="<?php echo $row['u_id'] ?>">
          <div class="">
               <div>
                    <label for="name">Student name</label><br>
                    <input class="input" name="name" type="Username" id="name" required value="<?php echo $row['u_name'] ?>">
               </div>
               <div>
                    <label for="pass">Student ID</label><br>
                    <input class="password" type="text" name="stdpass" id="pass" maxlength="5" required value="<?php echo $row['u_stdpass'] ?>">
               </div>

               <div><br>
                    <label for="rank">Rank</label><br>
                    <select name="rank" id="rank" class="password" required>
                         <option value="<?php echo $row['u_rank'] ?>" hidden selected><?php echo $row['u_rank'] ?> (Default)</option>
                         <option value="admin">Admin</option>
                         <option value="student">Student</option>
                    </select>
               </div>
               <div class="sign">
                    <!-- <p>Don't have an accout?</p>
                <a class="up" href="dsda">Sign up</a> -->
               </div>
               <button type="submit" name="edituser" class="button">Summit</button>

          </div>



     </form>


     </div>



</body>

</html>