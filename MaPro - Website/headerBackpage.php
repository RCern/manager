<link rel="stylesheet" href="css/general.css"/>
<link rel="stylesheet" href="css/fontComfortaa.css"/>


<!-- HEADER -->
<div class="navbar-fixed">
    <nav class="darkBackground">
        <div class="nav-wrapper">
            <a href="homepage.php" class="brand-logo whiteToBlueLight zoom" style="font-weight: bold"><img style="height: 80%; top: 50%;transform: translateY(+14%); " src="pictures/LogoFull.png"></a>


            <!-- Links -->
            <ul class="right hide-on-med-and-down">
                <li><a class="whiteToBlueLight smallZoom" href="account.php"><i class="material-icons left">account_circle</i>My Profile</a></li>
                <li><a class="whiteToBlueLight smallZoom" href="projectNew.php"><i class="material-icons left">add_to_photos</i>New Project</a></li>
                <li><a class="whiteToBlueLight smallZoom" href="account.php"><i class="material-icons left">delete_sweep</i>Delete Project</a></li>
                <li><a class="whiteToBlueLight smallZoom" href="employees.php"><i class="material-icons left">face</i>Employees</a></li>
				<li><a class="whiteToBlueLight smallZoom" href="teams.php"><i class="material-icons left">groups</i>teams</a></li>
                <li>
                    <form>
                        <div class="input-field smallZoom">
                            <input id="search" type="search" required>
                            <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                            <i class="material-icons">close</i>
                        </div>
                    </form>
                </li>
            </ul>
    </nav>
</div>

<div class="">
    <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons small">menu</i></a>
</div>




<ul id="slide-out" class="sidenav">
    <li>
        <div class="user-view">      
            <img class="circle" src="pictures/logo.png">
            <span class="blueDeep name">   <?php echo getEmployeeValue($_SESSION["ID"], "name"); ?> </span>
            <span class="blueLight email"> <?php echo getEmployeeValue($_SESSION["ID"], "type"); ?> </span>
        </div>
    </li>

    <li><a class="blueLightToBlueDeep smallZoom" href="account.php">    <i class="material-icons left">account_circle </i>My Profile</a></li>
    <li><a class="blueLightToBlueDeep smallZoom" href="projectNew.php"> <i class="material-icons left">add_to_photos  </i>New Project</a></li>
    <li><a class="blueLightToBlueDeep smallZoom" href="account.php">    <i class="material-icons left">delete_sweep   </i>Delete Project</a></li>
    <li><a class="blueLightToBlueDeep smallZoom" href="employees.php">  <i class="material-icons left">face           </i>Employees</a></li>
    <li><a class="blueLightToBlueDeep smallZoom" href="teams.php">      <i class="material-icons left">groups         </i>teams</a></li>
    
    <li>
        <form>
            <div class="input-field smallZoom">
                <input id="search" type="search" required>
                <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                <i class="material-icons">close</i>
            </div>
        </form>
    </li>

    <li><a class=" btn waves-light red lighten-1 smallZoom" href='disconnect.php'><i class="material-icons left">exit_to_app</i>Log out</a></li>
</ul>




<!-- Compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
<script>
    $(document).ready(function()
    {
        $('.sidenav').sidenav();
    });
</script>