<?php
     require_once('../server/server.php');
     if(empty($_SESSION['uid'])){
          header('location: ../login.php');
     }

     if($_SESSION['rank'] !== 'admin'){
          header('location: ../index.php');
     }

     $id = $_GET['id'];
     $getpost = $obj->post_read($id);
     $row = mysqli_fetch_assoc($getpost);
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
     <h1>Edit post</h1>
         
      <form class="" method="post" action="../action/editpost_db.php" enctype="multipart/form-data">
          <div class="">
               <input type="text" name="id" value="<?php echo $row['p_id'] ?>" hidden>
               <div>
                    <label for="title">Title</label><br>
                    <input class="input" name="title" type="text" id="title" required value="<?php echo $row['p_title'] ?>">
               </div>
               <div>
                    <label for="pass">Description</label><br>
                    <input class="password" type="text" name="des" id="pass" required value="<?php echo $row['p_des'] ?>">
               </div>
               <div></br>
                    <label for="img">Image</label><br>
                    <input class="" name="img" type="file" id="img">
               </div>
               <div class="sign">
                    <!-- <p>Don't have an accout?</p>
                <a class="up" href="dsda">Sign up</a> -->
               </div>
               <button type="submit" name="editpost" class="button">Summit</button>

          </div>



     </form>


     </div>



</body>

</html>