<html lang="en">
  <link rel="icon" type="image/png" href="./pictures/logo.png"/>

  <link rel="stylesheet" href="css/homepage.css"/>
  <link rel="stylesheet" href="css/general.css"/>
  <link rel="stylesheet" href="css/fontComfortaa.css"/>
  <link rel="stylesheet" href="css/frontpageH.css"/>

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
    <?php include 'header.php'; ?>
    

    <main>

      
    <!-- Main Image + Informative text -->
      <div id="index-banner" class="parallax-container" style="height: 90%">
        <div class="overlay">
          <div class="parallax"><img src="pictures/jean.jpg" alt="Unsplashed background img 1"></div>

            <h1 class="blueLight" style="font-weight:bold;">Professional Management Website</h1>
            <h3>An Enterprise Resource Planning for the general public</h3>

          </div>
        </div>
      </div>


  <br><br><br>


  <!--   Icon Section   -->
      <div class="container">
        <div class="section">
          <div class="row">

            <?php
              addIconRow("attach_money", "Affordable Software", "One of the cheapest yet performing ERP tool on the market");
              addIconRow("thumb_up", "Intuitive Design", "We put an emphasis on having an intuitive design to ensure you will go through all our features with ease ");
              addIconRow("desktop_windows", "Web App", "We are currently working on accessing MaPro on other devices.");
            ?>

          </div>
        </div>
      </div>


    <br><br><br>


  <!--   Photo + Description   -->
    <div class="row">
      
    <div class="col s1"></div>

      <div class="col s5">
        <div class="card">
          <div class="card-image">
            <img src="pictures/planning.jpg">
          </div>
        </div>
      </div>

      <div class="col s5">
        <h1 class="center blueDeep">In-depth Presentation</h1>
        <h2 class="center blueLight">MaPro, an ERP tool</h2>
        <h5>MaPro is a project manager used for business or personal purposes. It is an easy-to-handle tool to help plan out your team's projects inside a company. It follows the progression of the project as well as its participants, leader, costs and revenues.</h5>

      </div>

      
      <div class="col s1"></div>

    </div>


    <br><br><br>


  <!--   Information Collapsible (Accordeon)   -->

      <div class="container center">
        <h1 class="blueDeep">Our most asked questions :</h1><br>
        <ul class="collapsible">
          <?php
            addCollapsible("Can I use MaPro personally ?", "MaPro can indeed be used personally. You can easily create and manage your own projects for personal purposes.");
            addCollapsible("How can MaPro help my team ?", "MaPro is made to ensure the best experience for its users. It has an understandable interface with multiple features for your team's projects.");
            addCollapsible("How was MaPro created ?", "MaPro is a L3 digital student's project. The core idea was to create an affordable ERP tool as we believe main leaders on the market offer overpriced experiences.");
          ?>
        </ul>
      </div>


  <br><br><br>


  <!--   Team Presentation   -->
      <div class="container center">

        <h1 class="blueDeep">Introducing our team</h1>
        <h4 class="blueLight">5 wonderful lovely people</h4><br>

        <?php
          echo '<div class="row">';
            addTeamCard('Hugues', 'Begeot',    'Designer',    'armRight.jpg', 'https://github.com/opsilonn', 'https://www.linkedin.com/in/hugues-begeot-a66b9213b/');
            addTeamCard('Radu',   'Cernaianu', 'Team Leader', 'head.jpg',     'https://github.com/RCern',    'https://www.linkedin.com/in/radu-cernaianu-a6088514b/');
            addTeamCard('Louis',  'Potron',    'Marketing',   'armLeft.jpg',  'https://github.com/Llouis5',  'https://www.linkedin.com/in/louis-potron-43158b151/');
          echo '</div>';

          echo '<div class="row">';
            echo '<div class="col s1 m1 l1"></div>';
            addTeamCard('Clément', 'Lambling', 'Developer', 'legRight.jpg', 'https://github.com/Ricainz', 'https://www.linkedin.com/in/cl%C3%A9ment-lambling-a54a93183/');
            echo '<div class="col s2 m2 l2"></div>';
            addTeamCard('Charles', 'Robichon', 'Developer', 'legLeft.jpg', 'https://github.com/CharlesRobichon', 'https://www.linkedin.com/in/charles-robichon-668957152/');
            echo '<div class="col s1 m1 l1"></div>';
          echo '</div>';
        ?>
        <br><br>
      </div>

    </main>
  <!-- adding the header -->
    <?php include 'footer.php'; ?>

  </body>


  <script>
        $(document).ready(function()
        {
          $('.parallax').parallax();
          $('.collapsible').collapsible();
        });
    </script>
</html>



                    <!-- PHP functions -->



<?php
  function blablabla($index)
  {
    for($i = 0; $i < $index; $i++)
      echo "<h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at lacus congue, suscipit elit nec, tincidunt orci.</h6>";
  }


  function addIconRow($icon, $title, $description)
  {
    echo '
      <div class="col s12 m4">
        <div class="icon-block center smallZoom">
          <h1><i class="large material-icons zoom blueDeep">' . $icon . '</i></h1>
          <h4 class="blueLight">' . $title . '</h4>
          <h6 class="flow-text homepageIconRow">' . $description . '</h6>
        </div>
      </div>
    ';
  }


  function addCollapsible($title, $description)
  {
    echo '
      <li>
        <div class="collapsible-header text-center" style="background-color: #ebebeb"><h3 class="blueLight">' . $title . '</h3></div>
        <div class="collapsible-body"><h5>' . $description . '</h5></div>
      </li>
    ';
  }


  function addTeamCard($nameFirst, $nameLast, $job, $picture, $linkGithub, $linkLinkedin)
  {
    echo '
        <div class="col s4 m4 l4">
          <div class="card hoverable">

            <div class="card-image">
              <img src="pictures/'. $picture .'">
            </div>

            <div class="card-content">
              <h4 style="color:#232323">' . $nameFirst . '<br>' . $nameLast . '</h4><br>
              <h5>' . $job . '</h5>
            </div>

            <div class="card-action social flow-text">
              <i id="github" class="icon-github"></i>
              <a href="' . $linkGithub . '">  <i class="fa fa-lg fa-github zoom"></i></a>
              <a href="' . $linkLinkedin . '"><i class="fa fa-lg fa-linkedin zoom"></i></a>
            </div>

          </div>
        </div>
    ';
  }
?>
