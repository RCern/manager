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
                <li><a class="blueLightToBlueDeep" href="employees.php"><i class="material-icons left">face</i>Employees</a></li>
				<li><a class="blueLightToBlueDeep" href="teams.php"><i class="material-icons left">groups</i>teams</a></li>
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


        <main>


        <br>


        
            
        
            <!-- DISPLAY THE EMPLOYEE'S DATA -->
            <?php  addEmployeeCard( $_SESSION['ID'] ); ?>


            <br><br>


            <!-- Dropdowns  -->
            <div class="container row center">
                <div class="col s2"></div>

                <div class="col s4">
                    <a class='zoom dropdown-trigger btn-large' href='#' data-target='dropdownDisplay'><i class="material-icons left">view_list</i>Display</a>

                    <!-- Dropdown Display -->
                    <ul id='dropdownDisplay' class='dropdown-content'>
                        <li><a href="#!" id="bigCard" onclick="bigCards();"><i class="material-icons">sim_card_alert</i> Big Cards</a></li>
                        <li><a href="#!" id="smallCard" onclick="smallCards();"><i class="material-icons">sim_card_alert</i> Small Cards</a></li>
                        <li class="divider" tabindex="-1"></li>
                        <li><a href="#!" id="listShow" onclick="listShow()"><i class="material-icons">view_list</i> List</a></li>
                    </ul>
                </div>

                <script src="js/account.js"></script>

                <div class="col s4">
                    <a class='zoom dropdown-trigger btn-large' href='#' data-target='dropdownSearch'><i class="material-icons left">search</i>Search by</a>

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
               <?php
                    require_once('connectdb.php');
                    $conn = connect();

                    $sql = "SELECT P.projectID, P.name ,T.Tname, P.deadline, P.percentageDone,P.priority from project as P JOIN project_team as PT ON P.projectID = PT.projectID JOIN team as T ON T.teamID = PT.teamID";
                    $result = $conn->query($sql);


                    if ($result->num_rows > 0)
                    {
                        $i = 0;
                        while($row[] = $result->fetch_assoc())
                        {                  
                            addProjectCard($row[$i]["projectID"], $row[$i]["name"], $row[$i]["Tname"], $row[$i]["deadline"], $row[$i]["percentageDone"], $row[$i]["priority"]);
                            $i++;
                        }
                    }
                    else
                    {
                        echo "<h1 class='center blueDeep'>No Project for the moment !</h1>";
                    }
                    $conn->close();
                ?>


                </div>
            </div>
            <br><br>
        </main>
    </body>

</html>



<?php
    function addEmployeeCard($ID)
    {
        // We initialize all values
        $nom = "John Doe";
        $role = "Employee";
        $description = "Hello there !";

        
        // We search in the database the data of the employee whose ID has been given by argument
        include "connectdb.php";
        $conn = connect();
        $sql = "SELECT name, type, employeeID from employee where accountID = '$ID'";
        $result = $conn->query($sql);
        
        if($result->num_rows == 1)
        {
            $row = $result->fetch_assoc();
            $nom =  $row["name"];
            $role =  $row["type"];
            $description =  $row["name"] . " - " . $row["type"];
        }


        // We display all our values
        echo '
            <div class="container">
                <div class="card-panel grey lighten-3">
                    <div class="row valign-wrapper">
                        <div class="col s3">
                            <img src="pictures/logo.png" alt="" class="circle responsive-img">
                        </div>

                        <div class="col s9 center" style="font-family: Comfortaa">
                            <h1 class="blueDeep"> ' . $nom . ' </h1>
                            <h3 class="blueLight"> ' .  $role . ' </h3>
                            <br>
                            <h5 class="black-text"> ' . $description . ' </h5>
                        </div>
                    </div>
                </div>
            </div>
        ';
        $conn->close(); // Connection Closed.
    }

    function addProjectCard($ID, $title, $leader, $date, $percentage, $priority)
    {
        // We verify if we need to end the Row
        if($_SESSION['length'] >= $_SESSION['MAX'])
        {
            $_SESSION['length'] = 0;
            echo '</div>';
        }

        
        // We verify if we need to create a new Row (IN THIS ORDER !!!)
        if($_SESSION['length'] == 0)
        {
            echo '<div class="row">';
        }

        
        // Now we add the column space where we'll create the card
        $_SESSION['length'] += $_SESSION['size'];
        echo '<div class="col s'. $_SESSION['size'] .'">
                <a href="project.php?ID='. $ID .'">';


        // According to the priority, we create a card of a given color
        switch($priority)
        {
            case 1:
                echo '<div class="card smallZoom whiteToBlueDeep red lighten-1">';
            break;

            case 2:
                echo '<div class="card smallZoom whiteToBlueDeep blue lighten-1">';
            break;

            case 3:
                echo '<div class="card smallZoom whiteToBlueDeep green lighten-1">';
            break;

            default:
                echo '<div class="card smallZoom whiteToBlueDeep pink darken-1">';
            break;
        }

        /*
        if($priority == 1) echo '<div class="card smallZoom blue darken-3">';
        if($priority == 2) echo '<div class="card smallZoom blue">';
        if($priority == 3) echo '<div class="card smallZoom blue lighten-3">';
        */

        echo '
                            <div class="card-content">

                                <div class="card-title" style="font-weight: bold;color: inherit;">' . $title . '</div>
                                <br><br>
                                <h5>Directed by :<br></h5>
                                <div class="whiteToBlueDeep>' . $leader . '</div>

                                <br><br>
                                <h5 style="color: inherit">Due for :<br>' . $date . '</h5>
                                
                            </div>



                            <div class="card-action">
                                <h5 style="color: inherit"> ' . $percentage . ' % <h5>

                                <div class="container progress grey darken-4">
                                    <div class="determinate white" style="width: ' . $percentage . '%"></div>
                                </div>
                            </div>
                            
                            <br>

                        </div>
                    </div>
                </a>
            </div>
        ';
    }
?>


<!-- Compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
<script>
    $(document).ready(function()
    {
        $('.dropdown-trigger').dropdown();
    });
</script>




<style>
    .aCard:link
    {
        background-color: transparent;
        text-decoration: none;
    }
    .aCard:visited
    {
        background-color: transparent;
        text-decoration: none;
    }
    .aCard:hover,.aCard:hover
    {
        background-color: transparent;
    }
    .aCard:active
    {
        background-color: transparent;
    }
</style>