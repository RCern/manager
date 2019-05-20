<?php
    // On démarre la session AVANT d'écrire du code HTML
    session_start();

    // length currently occupied by the last row of cards
    $_SESSION['length'] = 0;
 
    // size taken by a card (its initial value is 4)
    if(!isset($_SESSION['size'])) $_SESSION['size'] = 4;
    
    // Max length for a row of cards
    $_SESSION['MAX'] = 12;

    
    include "connectdb.php";
    include "backpageCard.php";
?>


<html lang="en">
    <link rel="icon" type="image/png" href="./pictures/logo.png"/>

    <link rel="stylesheet" href="css/general.css"/>
    <link rel="stylesheet" href="css/fontComfortaa.css"/>
    <link rel="stylesheet" href="css/backpage.css"/>


    <style>
        #page
        {
            margin:0px;
        }
        .dropdown-content
        {
            z-index:3;
        }
    </style>

    <title> <?php echo "MaPro - My Account - " . getEmployeeValue($_SESSION["ID"], "name"); ?> </title>


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


        <main>
            <!-- adding the Sidenav -->
            <?php include 'headerBackpageSidenav.php'; ?>

            <br>
            <!-- DISPLAY THE EMPLOYEE'S DATA -->
            <?php  addEmployeeCard( $_SESSION['ID'] ); ?>


            <br><br>


            <!-- Dropdowns  -->
            <?php include "backpageDropdowns.php"; ?>


            <br><br>


            <!-- DISPLAY ALL PROJECTS -->
            <div class="container">
                <div id="tabs">
                    <?php addProjectCardsEmployee($_SESSION["ID"]); ?>
                </div>
            </div>


            <br><br>


        </main>
    </body>
</html>