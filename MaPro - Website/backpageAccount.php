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
    include "card.php";
?>


<html lang="en">
    <link rel="icon" type="image/png" href="./pictures/logo.png"/>

    <link rel="stylesheet" href="css/general.css"/>
    <link rel="stylesheet" href="css/fontComfortaa.css"/>
    <link rel="stylesheet" href="css/backpage.css"/>
    <script src="js/account.js"></script>


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
            <div class="container row center">
                <div class="col s2"></div>


                <div class="col s3 zoom">
                    <a class='dropdown-trigger btn-large blueDeepBackground' href='#' data-target='dropdownDisplay' style="background:#213B6B">
                        <i class="material-icons left">view_list</i>Display
                    </a>

                    <!-- Dropdown Display -->
                    <ul id='dropdownDisplay' class='dropdown-content'>
                        <li><a href="#!" id="bigCard" onclick="bigCards()"><i class="material-icons">sim_card_alert</i> Big Cards</a></li>
                        <li><a href="#!" id="smallCard" onclick="smallCards()"><i class="material-icons">sim_card_alert</i> Small Cards</a></li>
                        <li class="divider" tabindex="-1"></li>
                        <li><a href="#!" id="listShow" onclick="listShow()"><i class="material-icons">view_list</i> List</a></li>
                    </ul>
                </div>


                <div class="col s2"></div>


                <div class="col s3 zoom">
                    <a class='dropdown-trigger btn-large blueLightBackground' href='#' data-target='dropdownSearch' style="background:#213B6B">
                        <i class="material-icons left">search</i>Search by
                    </a>

                    <!-- Dropdown Search -->
                    <ul id='dropdownSearch' class='dropdown-content'>
                        <li><a href="#!"><i class="material-icons">title</i>Title</a></li>
                        <li><a href="#!"><i class="material-icons">report</i>Priority</a></li>
                        <li><a href="#!"><i class="material-icons">timeline</i>Completion</a></li>
                        <li><a href="#!"><i class="material-icons">supervisor_account</i>Leader</a></li>
                    </ul>
                </div>
                

                <div class="col s2"></div>
            </div>


            <br><br>


            <!-- DISPLAY ALL PROJECTS -->
            <div class="container">
                <div id="tabs">
                    <?php addProjectCardEmployee($_SESSION["ID"]); ?>
                    <?php addProjectCardFake(15); ?>
                </div>
            </div>


            <br><br>
        </main>
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