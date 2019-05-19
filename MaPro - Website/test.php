
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript"></script>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <script>
      

var projectId = 1;


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
    <title>Insert title </title>
  </head>
  <body>


    <main>
      <div id="chart_div" style="width: 100%; height: 500px;"></div>
    </main>

  </body>
</html>
