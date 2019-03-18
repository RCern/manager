<?php   
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: index.php");
    }else{
      require_once("login.php");
      $conn = connect();
      $sql = "SELECT * FROM account WHERE username='$name' AND password='$password'";
      $result = $conn->query($sql);
    }
?>
