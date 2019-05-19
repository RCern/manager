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


  <style>
      #page
      {
          margin:0px;
      }
  </style>


  <title>MaPro - Project n° <?php echo $_SESSION['idPRJ']; ?> </title>


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
        <link href="dist/css/tabulator.min.css" rel="stylesheet">
        <link href="css/tabOver.css" rel="stylesheet">
        <script type="text/javascript" src="dist/js/tabulator.min.js"></script>
        <script type="text/javascript" src="js/moment.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    </head>


    <body>
         <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
         <script type="text/javascript"></script>

      <script>
      

var projectId = <?php echo $_SESSION['idPRJ']; ?>;


$.post("getProfiData.php",{ projectId1: projectId},
function(data) {
  let a = data;
  $.post("getProfiAssets.php",{ projectId1: projectId},
function(data) {
  console.log(data);
  let b =data;
  $.post("getProfiLiabilites.php",{ projectId1: projectId},
function(data) {
  console.log(data);
  let c = data;
  console.log(a);
  console.log(b);
  console.log(c);

  google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {

        //query assets
        //query liabilities

  let obj = JSON.parse(a);
    let deadline=parseInt(pickDeadline(obj[0].deadline));
          function pickDeadline(deadline){
              var date=deadline.split('-');
              deadline=date[1];
              return deadline;
          };
          let obj_a=JSON.parse(b);
          let obj_l=JSON.parse(c);

        var y=new Array(deadline)
        {
          for(i=0;i<=deadline;i++)
          {
            y[i]=new Array(3);
            for(let j=0;j<=3;j++)
            {
                y[i][j]=0;
            }
              y[i][0]=String(i);
          }
          y[0][0]='Months';
          y[0][1]='Assets';
          y[0][2]='Liabilities';
          y[0][3]='Variation';

            let it=0;

          while(obj_a[it])
          {
              y[obj_a[it].month][1]+=parseInt(obj_a[it].Revenue);
              y[obj_a[it].month][3]+=parseInt(obj_a[it].Revenue);
              it++;
          }
          it=0;
          while(obj_l[it])
          {
              y[obj_l[it].month][2]+=parseInt(obj_l[it].price);
              y[obj_l[it].month][3]-=parseInt(obj_l[it].price);
              it++;
          }
            for(i=2;i<=deadline;i++)
            {
                y[i][1]+=parseInt(y[i-1][1]);
                y[i][2]+=parseInt(y[i-1][2]);
                y[i][3]+=parseInt(y[i-1][3]);
            }

            y[deadline][0]='Deadline';
        }
        var data = google.visualization.arrayToDataTable(y);

        var options = {
          title: 'Budget Project',
          hAxis: {title: 'Months',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
}

);
}

);

}

);





    </script>
  <!-- adding the header -->
        <?php include 'headerBackpage.php'; ?>

        <main>

        <div class="container">

          <?php
                    require_once('connectdb.php');
                    $conn = connect();

                    $sql = "SELECT P.projectID, P.name ,T.Tname, P.deadline, P.percentageDone,P.priority from project as P JOIN project_team as PT ON P.projectID = PT.projectID JOIN team as T ON T.teamID = PT.teamID WHERE P.projectID=". $_SESSION['idPRJ'];
                    $result = $conn->query($sql);


                    if ($result->num_rows > 0)
                    {
                        $i = 0;
                        while($row[] = $result->fetch_assoc())
                        {                  
                           echo ' <h1 class="center blueDeep">'.$row[$i]["name"].'</h1>
                            <h3 class="center">Team assigned: '.$row[$i]["Tname"].'</h3>


                            <h4 class="center"> Priority: '.$row[$i]["priority"].'</h4>


                           <div class="row" style="vertical-align: middle">
                            <div class="progress col s8">
                               <div class="determinate" style="width: ' .$row[$i]["percentageDone"]. '%"></div>
                            </div>
                            <h3 class="col s4">'.$row[$i]["percentageDone"].' %</h3>
                        </div>

                        <div id="chart_div" style="width: 100%; height: 500px;"></div>

                        ';
                        }
                    }
                    $conn->close();
                ?>

            <h3>Assets:</h3>
           <div id="tabsAssets"></div>
           <br>
           <br>
           <h3>Liabilities:</h3>
           <div id="tabsLiabilities"></div>
           <script type="text/javascript" src="js/project.js">
             
           </script>

        </div>

        <br>
           <br><br>
           <br>

        </main>
    </body>

</html>