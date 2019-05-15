<?php
    // On démarre la session AVANT d'écrire du code HTML
    session_start();

    // length currently occupied by the last row of cards
    $_SESSION['length'] = 0;
 
    // size taken by a card (its initial value is 3)
    if(!isset($_SESSION['size'])) $_SESSION['size'] = 3;
    
    // Max length for a row of cards
    $_SESSION['MAX'] = 12;
    
    // Name of the logged in client
 
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


    <title>MaPro - My Account <?php echo $_SESSION["nom"]; ?> </title>


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

        <!-- Add tabulator -->
        <link href="dist/css/tabulator.min.css" rel="stylesheet">
        <link href="css/tabOver.css" rel="stylesheet">
        <script type="text/javascript" src="dist/js/tabulator.min.js"></script>
        <script type="text/javascript" src="js/moment.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    </head>


    <body>
  <!-- adding the header -->
        <?php include 'headerBackpage.php'; ?>



  <ul id="slide-out" class="sidenav">
    <li><div class="user-view">
      
      <img class="circle" src="pictures/logo.png">
      <span class="blueDeep name"> <?php echo $_SESSION['nom'] ?> </span>

      <span class="blueLight email"><?php echo $_SESSION['role'] ?> </span>
    </div></li>
    <li><a class="blueLightToBlueDeep" href="account.php"><i class="material-icons left">account_circle</i>My Profile</a></li>
                <li><a class="blueLightToBlueDeep" href="projectNew.php"><i class="material-icons left">add_to_photos</i>New Project</a></li>
                <li><a class="blueLightToBlueDeep" href="account.php"><i class="material-icons left">delete_sweep</i>Delete Project</a></li>
                <li>
                    <form>
                        <div class="input-field">
                            <input id="search" type="search" required>
                            <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                            <i class="material-icons">close</i>
                        </div>
                    </form>
                </li>
                <li><a class=" btn waves-light red lighten-1" href='disconnect.php'><i class="material-icons left">exit_to_app</i>Log out</a></li>
  </ul>
  <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons small">menu</i></a>


        
            
            
            <div id="example" class="container">
            </div>
            <script type="text/javascript" src="js/employees.js"></script>

    </body>

</html>






<!-- Compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
<script>
    $(document).ready(function()
    {
        $('.dropdown-trigger').dropdown();
    });
</script>

