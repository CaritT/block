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
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Sarabun&display=swap" rel="stylesheet">
     <title>ClassroomBlog</title>
</head>

<body>

     <header class="head">
          <div class="header">
               <h1>Welcome <?php  echo $_SESSION["uname"] ?></h1>
               <a href="./viewuser.php" class="btn">Viewuser</a>
               <a href="./adminpage.php" class="btn">Viewpost</a>
               <form action="../action/logout_db.php" method="get">
                    <button type="summit" name="logout" class="but">Logout</button>
               </form>
          </div>
     </header>
     <div class="box">

     <h1>User List <a href="./adduser.php" class="btn2">+ adduser</a></h1>
         
     <table>
          <thead>
               <tr>
                    <th>Id</th>
                    <th>Username</th>
                    <th>Student Pass</th>
                    <th>Rank</th>
                    <th>Control</th>
               </tr>
          </thead>
          <tbody>
               <?php
                    $query = $obj->user_read_all();
                    $i = 0;
                    while($row = mysqli_fetch_assoc($query)){
                         $i++;
               ?>
               <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row['u_name'] ?></td>
                    <td><?php echo $row['u_stdpass'] ?></td>
                    <td><?php echo $row['u_rank'] ?></td>
                    <td>
                         <a href="../action/deleteuser_db.php?id=<?php echo $row['u_id'] ?>" class="btn3" onclick="return confirm('Delete this student id?')">Delete</a>
                         <a href="./edituser.php?id=<?php echo $row['u_id'] ?>" class="btn4">Edit</a>
                    </td>
               </tr>
               <?php
                    }
               ?>
     </table>


     </div>



</body>

</html>