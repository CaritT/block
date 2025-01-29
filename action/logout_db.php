<?php 
require_once('../server/server.php');

if(isset($_GET['logout'])){
     session_destroy();
     header('location: ../login.php');
}