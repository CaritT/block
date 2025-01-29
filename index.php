<?php
     require_once('./server/server.php');
     if(empty($_SESSION['uid'])){
          header('location: ./login.php');
     }
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="./css/board.css">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Sarabun&display=swap" rel="stylesheet">
     <title>ClassroomBlog</title>
</head>

<body>

     <header class="head">
          <div class="header">
               <h1>Welcome <?php  echo $_SESSION["uname"] ?></h1>
               <form action="./action/logout_db.php" method="get">
                    <button type="summit" name="logout" class="but">Logout</button>
               </form>
          </div>
     </header>
     <div class="box">
          <div style="margin: 30px;">
               <h1>Classroom Post</h1>
               <div class="">
               <?php
                    $query = $obj->post_read_all_reverse();
                    //reversed the post
                    while($row = mysqli_fetch_assoc($query)){
               ?>
               <div class="content">
                    <img src="./upload/<?php echo $row["p_img"]  ?>">
                    <h1><?php echo $row["p_title"] ?></h1>
                    <p><?php echo $row["p_des"] ?></p>
                    <p><?php echo $row["p_time"] ?></p>
               </div>
               <?php }; ?>
          </div>


     </div>



</body>

</html>