<?php

session_start();

class DB_conn{
     
     protected $host = 'localhost';
     protected $user = 'root';
     protected $pass = '';
     protected $name = 'classroomBlog';

     public $conn;

     function __construct()
     {
          try{

               $this -> conn = new mysqli($this->host,$this->user,$this->pass,$this->name);
          
          }catch(Exception $e){
               echo('Error : ' . $e->getMessage());
          }
     }

     public function user_read_stdpass($stdpass){
          $sql = "SELECT * FROM users WHERE u_stdpass = '$stdpass' ";
          $query = mysqli_query($this->conn, $sql);
          return $query;
     }
     
     public function user_read_name($name){
          $sql = "SELECT * FROM users WHERE u_name = '$name' ";
          $query = mysqli_query($this->conn, $sql);
          return $query;
     }

     public function user_read_id($id){
          $sql = "SELECT * FROM users WHERE u_id = '$id' ";
          $query = mysqli_query($this->conn, $sql);
          return $query;
     }

     public function user_read_all(){
          $sql = "SELECT * FROM users";
          $query = mysqli_query($this->conn, $sql);
          return $query;
     }

     public function user_create($name, $pass, $rank){
          $sql = "INSERT INTO users(u_name, u_stdpass, u_rank) VALUES('$name', '$pass', '$rank')";
          $query = mysqli_query($this->conn, $sql);
          return $query;
     }

     public function user_delete($id){
          $sql = "DELETE FROM users WHERE u_id = '$id'";
          $query = mysqli_query($this->conn, $sql);
          return $query;
     }

     public function user_update($id, $name, $pass, $rank){
          $sql = "UPDATE users SET u_name = '$name', u_stdpass = '$pass', u_rank = '$rank' WHERE u_id = '$id'";
          $query = mysqli_query($this->conn, $sql);
          return $query;
     }

     public function post_read_all(){
          $sql = "SELECT * FROM post";
          $query = mysqli_query($this->conn, $sql);
          return $query;
     }

     public function post_read($id){
          $sql = "SELECT * FROM post WHERE p_id = '$id'";
          $query = mysqli_query($this->conn, $sql);
          return $query;
     }

     // readrerverse
     public function post_read_all_reverse(){
          $sql = "SELECT * FROM post ORDER BY p_id DESC";
          $query = mysqli_query($this->conn, $sql);
          return $query;
     }

     public function post_create($title, $des, $img){
          $sql = "INSERT INTO post(p_title, p_des, p_img) VALUES('$title', '$des', '$img')";
          $query = mysqli_query($this->conn, $sql);
          return $query;
     }

     public function post_delete($id){
          $sql = "DELETE FROM post WHERE p_id = '$id'";
          $query = mysqli_query($this->conn, $sql);
          return $query;
     }

     public function post_update($id, $title, $des, $img){
          $sql = "UPDATE post SET p_title = '$title', p_des = '$des', p_img = '$img' WHERE p_id = '$id'";
          $query = mysqli_query($this->conn, $sql);
          return $query;
     }  

}

$obj = new DB_conn();

?>