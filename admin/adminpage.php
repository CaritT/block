<?php
require_once('../server/server.php');
if (empty($_SESSION['uid'])) {
     header('location: ../login.php');
}

if ($_SESSION['rank'] !== 'admin') {
     header('location: ../index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../css/board.css">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Sarabun&display=swap" rel="stylesheet">
     <title>ClassroomBlog</title>
</head>

<body>

     <header class="head">
          <div class="header">
               <h1>Welcome <?php echo $_SESSION["uname"] ?></h1>
               <a href="./viewuser.php" class="btn">Viewuser</a>
               <a href="./adminpage.php" class="btn">Viewpost</a>
               <form action="../action/logout_db.php" method="get">
                    <button type="summit" name="logout" class="but">Logout</button>
               </form>
          </div>
     </header>
     <div class="box">
          <h1>Post list<a href="./addpost.php" class="btn5">+ add post</a></h1>
          <div style="margin: 30px;">
               <?php
               $query = $obj->post_read_all_reverse();
               //reversed the post
               while ($row = mysqli_fetch_assoc($query)) {
               ?>
                    <div class="content">
                         <img src="../upload/<?php echo $row["p_img"]  ?>">
                         <h1><?php echo $row["p_title"] ?></h1>
                         <p><?php echo $row["p_des"] ?></p>
                         <p><?php echo $row["p_time"] ?></p>
                         <!-- edit -->
                    </div>
                    <div class="controlpost">
                         <a href="../action/deletepost_db.php?id=<?php echo $row["p_id"] ?>" onclick="return confirm('ต้องการลบโพสนี้ใช้หรือไม่')" class="btn3">Delete</a>
                         <a href="./editpost.php?id=<?php echo $row["p_id"] ?>" class="btn4">Edit</a>
                    </div>
               <?php }; ?>
               <!-- <div class="content">
                    <img src="../asset/car.png">
                    <h1>Hi</h1>
                    <p>We are not the same, you are not like me (uh, uh)
                         I don't fuck with niggas, you can't walk by me (wow)
                         Niggas jackin' swag, you can't talk like me (huh)
                         Talk like me, you can't talk like
                         Now a nigga grown (grown)
                         Too lit, I can't go home (I can't go home)
                         She fine, told her, "Take my phone, take my phone, take my phone"
                         120, driving in the fast lane (vroom)
                         Told this lil' shorty she could break my bank (lil' bitch)
                         She don't fuck with niggas 'cause they so damn lame
                         You so damn lame, you so damn (so damn)</p>
               </div> -->



          </div>


     </div>



</body>

</html>