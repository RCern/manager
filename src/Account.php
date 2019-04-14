<?php
    // On démarre la session AVANT d'écrire du code HTML
session_start();

    if(!isset($_SESSION['username'])){
        header("Location: index.php");
    }
    // length currently occupied by the last row of cards
    $_SESSION['length'] = 0;

    // size taken by a card
    $_SESSION['size'] = 3;
    
    // Max length for a row of cards
    $_SESSION['MAX'] = 12;
?>


<html lang="en">
  <link rel="icon" type="image/png" href="./pictures/logo.png"/>


    <link rel="stylesheet" href="css/general.css"/>
    <link rel="stylesheet" href="css/fontComfortaa.css"/>
    <link rel="stylesheet" href="css/projetCard.css"/>
    <link rel="stylesheet" href="css/tooltip.css"/>
    <link rel="stylesheet" href="css/backpage.css"/>

  <style>
      #page
      {
          margin:0px;
      }
  </style>


  <title>MaPro - Homepage</title>


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
    

      <!-- CARD TEST -->
       <div class="container center grey darken-3">
                <br>
                <h1 class="whiteToBlueLight"> White To Blue Light !</h1>
                <br><br>
                <h1 class="whiteToBlueDeep"> White To Blue Deep !</h1>
                <br><br>
                <h1 class="BlueLightToBlueDeep"> Blue Light To Blue Deep !</h1>
                <br>
        </div>

        <div class="container">
            <?php


            require_once('connectdb.php');
            $conn = connect();

            $sql = "SELECT P.name ,T.Tname, P.deadline, P.percentageDone,P.priority from project as P JOIN project_team as PT ON P.projectID = PT.projectID JOIN team as T ON T.teamID = PT.teamID";
            $result = $conn->query($sql);
            $i = 0;
            if ($result->num_rows > 0) {
              while($row[] = $result->fetch_assoc()) {
                  
                  addProjectCard($row[$i]["name"],$row[$i]["Tname"],$row[$i]["deadline"],$row[$i]["percentageDone"],$row[$i]["priority"]);
                  $i++;
        }
          
    } else {
        echo "EMPTY DATABASE";
    }
    $conn->close();
 ?>
           

    </body>

   
</html>

<?php
  function addProjectCard($title, $leader, $date, $percentage, $priority)
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

      
      // Now we add the card
      $_SESSION['length'] += 4;

      echo '<div class="col s4">';

    if($priority == 1) echo '<div class="card red   lighten-1">';
    if($priority == 2) echo '<div class="card blue  lighten-1">';
    if($priority == 3) echo '<div class="card green lighten-1">';

      echo '
                    <div class="card-content white-text">
                        <p class="whiteToBlueDeep card-title" style="font-weight: bold">' . $title . '</p>
                        <br><br>
                        <h5 class="white-text">Directed by :<br></h5>
                        <a class="whiteToBlueDeep tooltip" href="#">' . $leader . '
                            <span class="tooltiptext">' . $leader . ' + insert content</span>
                        </a>

                        <br><br>
                        <h5 class="white-text">Due for :<br>' . $date . '</h5>
                    </div>

                    <div class="card-action">
                        <h5 class="white-text"> ' . $percentage . ' % <h5>

                        <div class="container progress">
                            <div class="determinate" style="width: ' . $percentage . '%"></div>
                        </div>
                    </div>
                    <br>

                </div>
            </div>
      ';
  }
?>