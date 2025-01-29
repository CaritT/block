<?php
     require_once('../server/server.php');
     if(empty($_SESSION['uid'])){
          header('location: ../login.php');
     }

     if($_SESSION['rank'] !== 'admin'){
          header('location: ../index.php');
     }
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
     <a href="./adminpage.php" class="btn2">< back</a>
     <div class="box">
     <h1>Add post</h1>
         
      <form class="" method="post" action="../action/createpost_db.php" enctype="multipart/form-data">
          <div class="">
               <div>
                    <label for="title">Title</label><br>
                    <input class="input" name="title" type="text" id="title" required>
               </div>
               <div>
                    <label for="pass">Description</label><br>
                    <input class="password" type="text" name="des" id="pass" required>
               </div>
               <div></br>
                    <label for="img">Image</label><br>
                    <input class="" name="img" type="file" id="img" required>
               </div>
               <div class="sign">
                    <!-- <p>Don't have an accout?</p>
                <a class="up" href="dsda">Sign up</a> -->
               </div>
               <button type="submit" name="addpost" class="button">Summit</button>

          </div>



     </form>


     </div>



</body>

</html>