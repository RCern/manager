<?php
    // On démarre la session AVANT d'écrire du code HTML
    session_start();
    
    // Name of the logged in client
    $_SESSION['leader'] = "Jean Michel POKER";
    $_SESSION['percentage'] = rand(1, 100);
    $_SESSION['title'] = "Heaven and Hell";
?>

<html lang="en">
  <link rel="icon" type="image/png" href="./pictures/logo.png"/>

  <link rel="stylesheet" href="css/general.css"/>
  <link rel="stylesheet" href="css/fontComfortaa.css"/>
  <link rel="stylesheet" href="css/projetCard.css"/>
  <link rel="stylesheet" href="css/backpage.css"/>


  <style>
      #page
      {
          margin:0px;
      }
  </style>


  <title>MaPro - Project n° <?php echo $_GET['ID']; ?> </title>


    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
        <!--Import Google Icon Font-->
        <link  rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>


    <body>
  <!-- adding the header -->
        <?php include 'headerBackpage.php'; ?>

        <main>

        <div class="container">

            <h1 class="center">Bienvenue sur la page du projet n°  <?php echo $_GET['ID']; ?> !</h1>
            <h1 class="center blueDeep"><?php echo $_SESSION['title']; ?></h1>

            <div class="row" style="vertical-align: middle">
                <div class="progress col s8">
                    <?php echo '<div class="determinate" style="width: ' . $_SESSION['percentage'] . '%"></div>"'; ?>
                </div>
                <h3 class="col s4"><?php echo $_SESSION['percentage'];?> %</h3>
            </div>

        </div>

        </main>
    </body>

</html>