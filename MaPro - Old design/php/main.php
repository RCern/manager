<?php   
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: index.php");
    }
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
      <li><a href="logout.php">Logout</a></li>
      
    </ul>
  </div>
</nav>


<div class="parallax-container">
      <div class="parallax"><img src="https://images.pexels.com/photos/416405/pexels-photo-416405.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"></div>
      <ul id="slide-out" class="sidenav">
    <li><div class="user-view">
      <div class="background blue lighten-4">
      </div>
      <a href="main.php"><img class="circle" src="https://scontent-cdg2-1.xx.fbcdn.net/v/t1.0-9/43271719_2132142217114823_4203525496647974912_n.jpg?_nc_cat=103&_nc_ht=scontent-cdg2-1.xx&oh=3e15e050f2f35e65eaeac7d063cb2f52&oe=5D4E432E"></a>
      <a href="main.php"><span class="white-text name"><?php echo $_SESSION['username']?></span></a>
     
    </div></li>
    <li><a href="main.php"><i class="material-icons">people</i>Employees</a></li>
    <li><a href="projects.php"><i class="material-icons">event_note</i>Projects</a></li>
  </ul>
  <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
      <h1 class ="center z-depth-5-text"> Employees </h1>
</div>

<?php
        require_once("login.php");
        $conn = connect();
      $sql = "SELECT * FROM employee";
      $result = $conn->query($sql);
      $i = 0;
      if ($result->num_rows > 0) {

        echo '<div class="container"> <table class="highlight"> <thead> <tr>';
        echo "<th>ID</th><th>Name</th><th>Type</th><th>Salary</th><th>Time Participation</th></tr><tr>";
        while($row[] = $result->fetch_assoc()) {
            echo "<td>".$row[$i]["employeeID"]."</td><td>".$row[$i]["name"]."</td><td>".$row[$i]["type"]."</td><td>".$row[$i]["salary"]."</td><td>".$row[$i]["timeParticipation"]."</td></tr>";
            $i++;
        }
        echo "</tr>" . "</thead>" . "</table>";
        echo "</div>";
    } else {
        echo "EMPTY DATABASE";
    }
    $conn->close();
?>


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