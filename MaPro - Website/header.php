<link rel="stylesheet" href="css/general.css"/>
<link rel="stylesheet" href="css/headerFooter.css"/>
<link rel="stylesheet" href="css/frontpageH.css"/>
<link rel="stylesheet" href="css/fontComfortaa.css"/>


<!-- HEADER -->
<div class="navbar-fixed">
    <nav class="darkBackground">
        <div class="nav-wrapper">
            <a href="homepage.php" class="brand-logo whiteToBlueLight zoom" style="font-weight: bold"><img style="height: 80%; top: 50%;transform: translateY(+14%); " src="pictures/LogoFull.png"></a>


            <!-- Component that calls the side-menu when the window is reduced -->
            <a href="#" class="sidenav-trigger hide-on-large-only zoom whiteToBlueLight" data-target="mobile-links">
                <i class="material-icons">menu</i>
            </a>

            <!-- Links -->
            <ul class="right hide-on-med-and-down">
                <?php addCorrectLinks(); ?>
                <li>
                    <a class="smallZoom btn waves-effect waves-light pulse" href="/pictures/logo.png" download="MaPro">
                        <i class="material-icons left">get_app</i> Download the App' !
                    </a>
                </li>
            </ul>


            <!-- Side-menu for when the window is reduced -->
            <ul class="sidenav" id="mobile-links">
                <?php addCorrectLinks(); ?>
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



<?php

    function addCorrectLinks()
    {
        if( !isset($_SESSION['username']) )
        {
            addLink("connexion_Login.php", "account_circle", "Login");
            addLink("connexion_Sign_Up.php", "person_add", "Sign up");
        }
        else
        {
            addLink("account.php", "account_circle", "My Account");
            addLink("disconnect.php", "exit_to_app", "Log out");
        }
    }


    function addLink($link, $icon, $text)
    {
        echo '
        <li>
            <a class="aBig whiteToBlueLight smallZoom" href="' . $link . '">
                <i class="material-icons left">' . $icon . '</i>' . $text . '
            </a>
        </li>';
    }

?>