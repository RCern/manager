<link rel="stylesheet" href="css/general.css"/>
<link rel="stylesheet" href="css/fontComfortaa.css"/>


<!-- HEADER -->
<div class="navbar-fixed">
    <nav class="darkBackground">
        <div class="nav-wrapper">
            <a href="homepage.php" class="brand-logo whiteToBlueLight zoom" style="font-weight: bold"><img style="height: 80%; top: 50%;transform: translateY(+14%); " src="https://cdn.discordapp.com/attachments/537347312133865493/552111286197026836/Logo_Full.png"></a>


            <!-- Component that calls the side-menu when the window is reduced -->
            <a href="#" class="sidenav-trigger hide-on-large-only zoom whiteToBlueLight" data-target="mobile-links">
                <i class="material-icons">menu</i>
            </a>

            <!-- Links -->
            <ul class="right hide-on-med-and-down">
                <li><a class="whiteToBlueLight smallZoom" href="account.php"><i class="material-icons left">account_circle</i>My Profile</a></li>
                <li><a class="whiteToBlueLight smallZoom" href="projectNew.php"><i class="material-icons left">add_to_photos</i>New Project</a></li>
                <li><a class="whiteToBlueLight smallZoom" href="account.php"><i class="material-icons left">delete_sweep</i>Delete Project</a></li>
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


            <!-- Side-menu for when the window is reduced -->
            <ul class="sidenav" id="mobile-links">
                <li><a class="blueLightToBlueDeep" href="account.php"><i class="material-icons left">account_circle</i>My Profile</a></li>
                <li><a class="blueLightToBlueDeep" href="projetNew.php"><i class="material-icons left">add_to_photos</i>New Project</a></li>
                <li><a class="blueLightToBlueDeep" href="account.php"><i class="material-icons left">delete_sweep</i>Delete Project</a></li>
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


<!-- Compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
<script>
    $(document).ready(function()
    {
        $('.sidenav').sidenav();
    });
</script>