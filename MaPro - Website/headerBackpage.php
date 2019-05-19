<!-- HEADER -->
<div class="navbar-fixed">
    <nav class="darkBackground">
        <div class="nav-wrapper">
            <a href="homepage.php" class="brand-logo whiteToBlueLight zoom" style="font-weight: bold"><img style="height: 80%; top: 50%;transform: translateY(+14%); " src="pictures/LogoFull.png"></a>


            <!-- Links -->
            <ul class="right hide-on-med-and-down">
                <li><a class="whiteToBlueLight smallZoom" href="backpageAccount.php">   <i class="material-icons left">account_circle</i>My Profile</a></li>
                <li><a class="whiteToBlueLight smallZoom" href="projectNew.php">        <i class="material-icons left">add_to_photos</i>New Project</a></li>
                <li><a class="whiteToBlueLight smallZoom" href="account.php">           <i class="material-icons left">delete_sweep</i>Delete Project</a></li>
                <li><a class="whiteToBlueLight smallZoom" href="backpageEmployees.php"> <i class="material-icons left">face</i>Employees</a></li>
				<li><a class="whiteToBlueLight smallZoom" href="backpageTeams.php">     <i class="material-icons left">groups</i>Teams</a></li>
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




<!-- Compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
<script>
    $(document).ready(function()
    {
        $('.sidenav').sidenav();
    });
</script>