<link rel="stylesheet" href="css/general.css"/>
<link rel="stylesheet" href="css/headerFooter.css"/>
<link rel="stylesheet" href="css/frontpageH.css"/>
<link rel="stylesheet" href="css/fontComfortaa.css"/>


<!-- HEADER -->
<div class="navbar-fixed">
    <nav class="darkBackground">
        <div class="nav-wrapper">
            <a href="homepage.php" class="brand-logo whiteToBlueLight zoom" style="font-weight: bold">MaPro</a>


            <!-- Component that calls the side-menu when the window is reduced -->
            <a href="#" class="sidenav-trigger hide-on-large-only zoom whiteToBlueLight" data-target="mobile-links">
                <i class="material-icons">menu</i>
            </a>

            <!-- Links -->
            <ul class="right hide-on-med-and-down">
                <li><a class="aBig whiteToBlueLight smallZoom" href="connexion_Login.php"><i class="material-icons left">account_circle</i>Login</a></li>
                <li><a class="aBig whiteToBlueLight smallZoom" href="connexion_Sign_Up.php"><i class="material-icons left">person_add</i>Sign up</a></li>
                <li>
                    <a class="smallZoom btn waves-effect waves-light pulse" href="/pictures/logo.png" download="MaPro">
                        <i class="material-icons left">get_app</i> Download the App' !
                    </a>
                </li>
            </ul>


            <!-- Side-menu for when the window is reduced -->
            <ul class="sidenav" id="mobile-links">
                <li><a class="aBig whiteToBlueLight smallZoom" href="connexion_Login.php"><i class="material-icons left">account_circle</i>Login</a></li>
                <li><a class="aBig whiteToBlueLight smallZoom" href="connexion_Sign_Up.php"><i class="material-icons left">person_add</i>Sign up</a></li>
                <li>
                    <form>
                        <a class="smallZoom btn waves-effect waves-light pulse" href="/pictures/logo.png" download="MaPro">
                            <i class="material-icons left">get_app</i> Download the App' !
                        </a>
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