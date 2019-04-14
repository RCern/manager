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


  <title>MaPro - New Project</title>


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

            <h1 class="center blueDeep">Create a new Project !</h1>

            <br>

            <div class="container row" style="background-color: #ebebeb">
                <form class="col s12">

                    <br>

                    <!-- Title -->
                    <div class="row">
                        <div class="col s3"></div>

                        <div class="input-field col s6">
                            <i class="material-icons prefix blueDeep">title</i>
                            <input id="name_prefix" type="text" class="validate" required>
                            <label for="name_prefix">Project's title</label>
                        </div>

                        <div class="col s3"></div>
                    </div>

                            
                    <br><br>


                    <!-- Priority -->
                    <div class="row">
                        <div class="col s4"></div>

                        <div class="input-field col s4">

                            <select id="priority_prefix" required>
                                <option value="" disabled selected>From 1 to 3</option>
                                <option value="1">Rank 1 - Core project</option>
                                <option value="2">Rank 2 - Will be needed</option>
                                <option value="3">Rank 3 - Less important</option>
                            </select>
                            <label for="priority_prefix">Priority's level</label>
                            
                        </div>

                        <div class="col s4"></div>
                    </div>
                    

                    <br><br>


                    <!-- Leader -->
                    <div class="row">
                        <div class="col s4"></div>

                        <div class="input-field col s4">
                            <select class="icons">
                                <option value="" disabled selected>Please choose a Team Leader</option>
                                <option value="" data-icon="pictures/logo.png">John Doe</option>
                                <option value="" data-icon="pictures/logo.png">Jane Doe</option>
                                <option value="" data-icon="pictures/logo.png">Warren DJ edir</option>
                            </select>
                            <label>Team Leader</label>
                        </div>

                        <div class="col s4"></div>
                    </div>
                    

                    <br><br>


                    <!-- Time -->
                    <div class="row">
                        <div class="col s2"></div>

                        <!-- Deadline -->
                        <div class="input-field col s4">
                            <i class="material-icons prefix blueDeep">today</i>
                            <input id="date" type="text" class="datepicker" required>
                            <label for="date">Project's deadline</label>
                        </div>

                        <!-- Hours allocated -->
                        <div class="input-field col s4">
                            <i class="material-icons prefix blueDeep">hourglass_empty</i>
                            <input id="hour_prefix" type="number" class="validate" required>
                            <label for="hour_prefix">Hours allocated</label>
                        </div>

                        <div class="col s2"></div>
                    </div>

                    
                    <br><br>

                    
                    <!-- Money -->
                    <div class="row">
                        <div class="col s2"></div>

                        <!-- Costs -->
                        <div class="input-field col s4">
                            <i class="material-icons prefix blueDeep">money_off</i>
                            <input id="cost_prefix" type="number" class="validate" required>
                            <label for="cost_prefix">Costs</label>
                        </div>
                        
                        <!-- Revenues -->
                        <div class="input-field col s4">
                            <i class="material-icons prefix blueDeep">attach_money</i>
                            <input id="revenues_prefix" type="number" class="validate" required>
                            <label for="revenues_prefix">Revenues</label>
                        </div>

                        <div class="col s2"></div>
                    </div>
                    

                    <br><br>


                    <!-- Submit button -->
                    <div class="row">
                        <div class="col s5"></div>
                        <div class="input-field col s2">
                            <button class="btn waves-effect waves-light zoom center" style="height:10%" type="submit" name="action">
                            <i class="material-icons center">get_app</i> Sign-up !
                            </button>
                        </div>
                        <div class="col s5"></div>
                    </div>

                </form>
            </div>

        </main>
    </body>

    

    <!-- Compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <script>
        $(document).ready(function()
        {
            $('select').formSelect();
            $('.datepicker').datepicker();
        });
    </script>
</html>