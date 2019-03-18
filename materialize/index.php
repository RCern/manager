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
<div class="slider">
    <ul class="slides">
      <li>
        <img src="login_par.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3 class="blue-text text-darken-3">Welcome to MaPro!</h3>
          <h5 class=" blue-text" >Version 1.1 (Prototype phase 1)</h5>
        </div>
      </li>
      <li>
        <img src="login_parr.jpg"> <!-- random image -->
        <div class="caption left-align">
          <h3 class="blue-text text-darken-3">Mangement made easy.</h3>
        </div>
      </li>
      <li>
        <div class="red">
        <div class="caption right-align">
          <h3>Visit our presentation site.</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
        </div>
      </li>
    </ul>
  
      
  <div class="parallax-container">
      <div class="parallax"><img src="login_p.jpg"></div>
     
  <div class=" blue darken-3">
  <br>
  </div>
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
    <br>
        <img class="responsive-img" src="https://cdn.discordapp.com/attachments/537347312133865493/552111286197026836/Logo_Full.png">
        <div class="section red-text"> <?php echo $GLOBALS['errorMsg']?></div>
      <div class="section">
      <div class="row">
        <div class="input-field  ">
          <input placeholder="Username" id="email" name="email" type="text" class="validate">
          <label for="email" class="blue-text text-darken-3">Username</label>
        </div>
      </div>
      <div class="section">
      <div class="row">
        <div class="input-field  ">
          
          <input placeholder="Password" id="password" name="password" type="password" class="validate">
          <label for="password" class="blue-text text-darken-3">Password</label>
        </div>
      </div>
    </div>
    
    </form>
    <div class="section center">
        <button class="btn waves-effect waves-light blue darken-3" type="submit" form="login" name="login" >Login </button>    
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
