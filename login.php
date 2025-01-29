<?php

require_once('./server/server.php');

?>
<!DOCTYPE html>
<html lang="en">
<header>
     <link rel="stylesheet" href="./css/style.css">
</header>

<body>
     <form class="flexbox" method="post" action="./action/login_db.php">
          <div class="block">
               <p class="text">Login</p>
               <div>
                    <label for="name">Student name</label><br>
                    <input class="input" name="sname" type="Username" id="name" required>
               </div>
               <div>
                    <label for="pass">Student ID</label><br>
                    <input class="password" type="password" name="spass" id="pass" maxlength="5" required>
                    <div class="mb-3 form-check">
                         <input type="checkbox" class="form-check-input" id="check1" onclick="showPass()" />
                         <label class="form-check-label" for="check1">Show Student ID</label>
                    </div>

               </div>
               <div class="sign">
                    <!-- <p>Don't have an accout?</p>
                <a class="up" href="dsda">Sign up</a> -->
               </div>
               <button type="submit" name="login" class="button">Login</button>

          </div>



     </form>
</body>
<script>
     function showPass() {
          var x = document.getElementById("pass");
          if (x.type === "password") {
               x.type = "text";
          } else {
               x.type = "password";
          }
     }
</script>

</html>