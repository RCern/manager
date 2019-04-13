<link rel="stylesheet" href="css/headerFooter.css"/>
<link rel="stylesheet" href="css/frontpageH.css"/>



<div class="row rowHeader valign-wrapper foreground">

    <div class="col s1"></div>

<!-- Logo (image + text) on the left -->

    <a href="homepage.php" data-target="mobile-demo">
        <img class="zoom" src="pictures/logo.png" alt="MaPro's logo" height="80%">
    </a>
    <div class="col s19 zoom"> <a class="aTitle" href="homepage.php">MaPro</a></div>



<!--useless line that helps to separate left part (logo) and right part (links) -->
    <div class="col s6"></div>



<!-- Links on the right -->
    <?php addHeaderLink("account_circle", "Login", "connexion_Login.php"); ?>


    <!-- Component that calls the side-menu when the window is reduced -->
    <a href="#" class="sidenav-trigger hide-on-large-only zoom whiteToBlueLight" data-target="mobile-links">
        <i class="material-icons">menu</i>
    </a>


    <?php addHeaderLink("person_add", "Sign-up", "connexion_Sign_Up.php"); ?>


    <div class="col s4 hide-on-med-and-down">
        <a class="zoom btn waves-effect waves-light pulse" href="/pictures/logo.png" download="MaPro">
            <i class="material-icons left">get_app</i> Download the App' !
        </a>
    </div>

    <!--useless line that adds some space to the right -->
    <div class="col s1"></div>
</div>


<!-- Side-menu for when the window is reduced -->
<ul class="sidenav" id="mobile-links">
        <li><a href=""><i class="material-icons left">home</i>Login</a></li>
        <li><a href=""><i class="material-icons left">search</i>About Us</a></li>
        <li><a href="">
            <button class="btn waves-effect waves-light" type="submit" name="action">
            <i class="material-icons left">get_app</i> Download the App' !</button></a>
        </li>
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


<?php
  function addHeaderLink($icon, $text, $direction)
  {
    echo '
        <a href="  ' . $direction . ' " class="aBig col s3 hide-on-med-and-down zoom whiteToBlueLight">
            <i class="material-icons left">  ' . $icon . ' </i>
            ' . $text . ' 
        </a>
    ';
  }
?>