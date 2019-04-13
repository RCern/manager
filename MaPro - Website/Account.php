<?php
    // On démarre la session AVANT d'écrire du code HTML
    session_start();

    // length currently occupied by the last row of cards
    $_SESSION['length'] = 0;
    
    // Max length for a row of cards
    $_SESSION['MAX'] = 12;
?>


<html lang="en">
  <link rel="icon" type="image/png" href="./pictures/logo.png"/>

  <link rel="stylesheet" href="css/homepage.css"/>
  <link rel="stylesheet" href="css/general.css"/>
  <link rel="stylesheet" href="css/fontComfortaa.css"/>
  <link rel="stylesheet" href="css/projetCard.css"/>

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

      <!-- HEADER -->
        <div class="navbar-fixed darkBackground">
            <nav>
                <div class="nav-wrapper">
                    <a href="homepage.php" class="brand-logo">Logo</a>

                    <ul class="right hide-on-med-and-down">
                        <li><a href="#"><i class="material-icons left">add_to_photos</i>New Project</a></li>
                        <li><a href="#"><i class="material-icons left">delete_sweep</i>Delete Project</a></li>
                        <li>
                            <form>
                                <div class="input-field">
                                    <input id="search" type="search" required>
                                    <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                                    <i class="material-icons">close</i>
                                </div>
                            </form>
                        </li>
                    </ul>

                    
                </div>

            </nav>
        </div>

      <!-- CARD TEST -->
        <div class="container" style="background:#222222">
            <h1 class="whiteToBlueLight"> White To Blue Light !</h1>
            <br><br>
            <h1 class="whiteToBlueDeep"> White To Blue Deep !</h1>
            <br><br>
            <h1 class="BlueLightToBlueDeep"> Blue Light To Blue Deep !</h1>
        </div>

        <div class="container">
            <?php
            for($i = 0; $i < 40; $i++)
            {
                switch(rand(1, 8))
                {
                    case 1:
                        addProjectCard("Apex Legend", "John Doe", "10 Novembre 2019", rand(1, 100), rand(1, 3));
                    break;

                    case 2:
                        addProjectCard("Fortnite", "Jane Sim", "15 Février 2019", rand(1, 100), rand(1, 3));
                    break;

                    case 3:
                        addProjectCard("Yo mama so fat", "Johnny Sins", "14 Juin 2019", rand(1, 100), rand(1, 3));
                    break;

                    case 4:
                        addProjectCard("Pikmin 4", "Nintendo", "Lol mdr jamais", rand(1, 100), rand(1, 3));
                    break;

                    case 5:
                        addProjectCard("Diablo Immortal", "Blizzard", "Coming soon", rand(1, 100), rand(1, 3));
                    break;

                    case 6:
                        addProjectCard("League of Dotas", "China", "06 Décembre 2021", rand(1, 100), rand(1, 3));
                    break;

                    case 7:
                        addProjectCard("Death Stranding", "Hideo Kojima", "To be announced", rand(1, 100), rand(1, 3));
                    break;

                    case 8:
                        addProjectCard("Pokemon Sword and Shield", "Nintendo", "15 Novembre 2019", rand(1, 100), rand(1, 3));
                    break;
                }
            }
            ?>
            <div class="progress">
                <div class="determinate" style="width: 70%"></div>
            </div>
        </div>

    </body>

    <script>
        $(".navbar-fixed").css("background-color", #333333);
    </script>
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