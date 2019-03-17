<?php
  session_start();
  $GLOBALS['errorMsg'] = ' ';
?>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Starter Template - Materialize</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<div class="parallax-container">
      <div class="parallax"><img src="https://scontent-cdg2-1.xx.fbcdn.net/v/t1.0-9/43271719_2132142217114823_4203525496647974912_n.jpg?_nc_cat=103&_nc_ht=scontent-cdg2-1.xx&oh=3e15e050f2f35e65eaeac7d063cb2f52&oe=5D4E432E"></div>
   <!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">one</a></li>
  <li><a href="#!">two</a></li>
  <li class="divider"></li>
  <li><a href="#!">three</a></li>
</ul>
<nav>
  <div class="nav-wrapper blue lighten-4">
    <a href="http://localhost/materialize/" class="brand-logo"><img style="height: 100%" src="https://cdn.discordapp.com/attachments/537347312133865493/552111286197026836/Logo_Full.png"></a>
    <ul class="right hide-on-med-and-down">
      
    </ul>
  </div>
</nav>


<?php
    require_once("login.php");
    if(isset($_POST['login']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password'])){

      $name = $_POST['email'];
      $password = $_POST['password'];
  
      $conn = connect();
      $sql = "SELECT * FROM account WHERE username='$name' AND password='$password'";
      $result = $conn->query($sql);
     
      if ($result->num_rows == 1) {
          $_SESSION['username'] = $name;
          $conn->close();
          header('Location: main.php ');
      } 
       else
      {
          $conn->close();
          $GLOBALS['errorMsg'] = 'Wrong Username or password';
      }
    
    }
    else if(isset($_POST['login'])){
          $GLOBALS['errorMsg'] = 'Enter Username and Password';
    }
    ?>

<div class="container">
  
  <div class="row ">
    <form class="col s4 push-s4" id="login" action="" method="post">
        <img class="responsive-img" src="https://cdn.discordapp.com/attachments/537347312133865493/552111286197026836/Logo_Full.png">
        <div class="section red-text"> <?php echo $GLOBALS['errorMsg']?></div>
      <div class="section">
      <div class="row">
        <div class="input-field  ">
          <input placeholder="Username" id="email" name="email" type="text" class="validate">
          <label for="email">Username</label>
        </div>
      </div>
      <div class="section">
      <div class="row">
        <div class="input-field  ">
          
          <input placeholder="Password" id="password" name="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
    </div>
    
    </form>
    <div class="section center">
        <button class="btn waves-effect waves-light " type="submit" form="login" name="login" >Login </button>    
    </div>
    
    </div>
</div>
  </div>
  </div>
  </div>
  <footer class="page-footer blue darken-3 bottom-fixed">
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
  </div>
  </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script src="js/read.js"></script>

  </body>
</html>
