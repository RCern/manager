<div>
    <a class="sidenav-trigger blueLightToBlueDeep" href="#" data-target="slide-out"><i class="material-icons small">menu</i></a>
</div>



<ul id="slide-out" class="sidenav">
    <li>
        <div class="user-view">      
            <img class="circle" src="pictures/logo.png">
            <span class="blueDeep name">   <?php echo getEmployeeValue($_SESSION["ID"], "name"); ?> </span>
            <span class="blueLight email"> <?php echo getEmployeeValue($_SESSION["ID"], "type"); ?> </span>
        </div>
    </li>

    <li><a class="blueLightToBlueDeep smallZoom" href="account.php">           <i class="material-icons left">account_circle </i>My Profile</a></li>
    <li><a class="blueLightToBlueDeep smallZoom" href="projectNew.php">        <i class="material-icons left">add_to_photos  </i>New Project</a></li>
    <li><a class="blueLightToBlueDeep smallZoom" href="account.php">           <i class="material-icons left">delete_sweep   </i>Delete Project</a></li>
    <li><a class="blueLightToBlueDeep smallZoom" href="backpageEmployees.php"> <i class="material-icons left">face           </i>Employees</a></li>
    <li><a class="blueLightToBlueDeep smallZoom" href="backpageTeams.php">     <i class="material-icons left">groups         </i>Teams</a></li>
    
    <li>
        <form>
            <div class="input-field smallZoom">
                <input id="search" type="search" required>
                <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                <i class="material-icons">close</i>
            </div>
        </form>
    </li>

    <li class="smallZoom">
        <a class=" btn waves-light red lighten-1" href='disconnect.php'>
            <i class="material-icons left">exit_to_app</i>Log out
        </a>
    </li>
</ul>