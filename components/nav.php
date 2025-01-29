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