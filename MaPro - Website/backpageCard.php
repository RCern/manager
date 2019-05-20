<?php
    // MAKE SURE TO CALL THIS FILE IN A PAGE CONTAINING THE "connectdb.php"



    /** Displays all informations concerning a given employee
     * @param $ID Identifier of the employee
     */
    function addEmployeeCard($ID)
    {
        // We initialize all values
        $nom = getEmployeeValue($ID, "name");
        $role = getEmployeeValue($ID, "type");
        $description = "Hello there !";


        // We display all our values
        echo '
            <div class="container smallZoom">
                <div class="card-panel grey lighten-3">
                    <div class="row valign-wrapper">
                        <div class="col s3">
                            <img src="pictures/logo.png" alt="" class="circle responsive-img">
                        </div>

                        <div class="col s9 center" style="font-family: Comfortaa">
                            <h1 class="blueDeep"> ' . $nom . ' </h1>
                            <h3 class="blueLight"> ' .  $role . ' </h3>
                            <br>
                            <h5 class="black-text"> ' . $description . ' </h5>
                        </div>
                    </div>
                </div>
            </div>
        ';
    }



    
    /** Displays all informations concerning a given team
     * @param $ID Identifier of the team
     */
    function addTeamCard($teamID)
    {
        // We initialize all values
        $nom = getTeamValue($teamID, "Tname");
        $description = "Hello there !";


        // We display all our values
        echo '
            <div class="container smallZoom">
                <div class="card-panel grey lighten-3">
                    <div class="row valign-wrapper">
                        <div class="col s3">
                            <img src="pictures/logo.png" alt="" class="circle responsive-img">
                        </div>

                        <div class="col s9 center" style="font-family: Comfortaa">
                            <h1 class="blueDeep"> ' . $nom . ' </h1>
                            <h3 class="blueLight"> ID : ' . $teamID . ' </h3>
                            <br>
                            <h5 class="black-text"> ' . $description . ' </h5>
                        </div>
                    </div>
                </div>
            </div>
        ';
    }

    


    /** Displays all informations on the project(s) a given employee is working on
     * @param $ID Identifier of the employee
     */
    function addProjectCardsEmployee($ID)
    {
        require_once('connectdb.php');
        $conn = connect();
        

        $sql =
        "SELECT * FROM team_employee, team, project_team, project " .
        "WHERE team_employee.employeeID = ". $ID . " " .
        "AND team_employee.teamID = team.teamID ". " " .
        "AND team.teamID = project_team.teamID ". " " .
        "AND project_team.projectID = project.projectID";
        $result = $conn->query($sql);


        if ($result->num_rows > 0)
        {
            $i = 0;
            while($row[] = $result->fetch_assoc())
            {                  
                $projectID = $row[$i]["projectID"];
                $name = $row[$i]["name"];
                $nameTeam = $row[$i]["Tname"];
                $deadline = $row[$i]["deadline"];
                $percentage = $row[$i]["percentageDone"];
                $priority = $row[$i]["priority"];
                $i++;

                addProjectCard($projectID, $name, $nameTeam, $deadline, $percentage, $priority);
            }
        }
        else
        {
            echo "<h1 class='center blueDeep'>No Project for the moment !</h1>";
        }
        $conn->close();
    }




    /** Displays all informations on the project(s) a given team is working on
     * @param $ID Identifier of the team
     */
    function addProjectCardsTeam($teamID)
    {
        require_once('connectdb.php');
        $conn = connect();
        
        $sql =
        "SELECT * FROM team, project_team, project " .
        "WHERE team.teamID = ". $teamID . " " .
        "AND project_team.teamID = ". $teamID . " " .
        "AND project_team.projectID = project.projectID";
        $result = $conn->query($sql);


        if ($result->num_rows > 0)
        {
            $i = 0;
            while($row[] = $result->fetch_assoc())
            {                  
                $projectID = $row[$i]["projectID"];
                $name = $row[$i]["name"];
                $nameTeam = $row[$i]["Tname"];
                $deadline = $row[$i]["deadline"];
                $percentage = $row[$i]["percentageDone"];
                $priority = $row[$i]["priority"];
                $i++;

                addProjectCard($projectID, $name, $nameTeam, $deadline, $percentage, $priority);
            }
        }
        else
        {
            echo "<h1 class='center blueDeep'>No Project for the moment !</h1>";
        }
        $conn->close();
    }



    /** Displays all informations of a given project
     * @param $ID Identifier of the project
     * @param $title name of the project
     * @param $team team working on the project
     * @param $date end-date of the project
     * @param $percentage % of completion of the project
     * @param $priority rank of priority of the project (on a decreasing scale of 1 to 3)
     */
    function addProjectCard($ID, $title, $team, $date, $percentage, $priority)
    {
        // We make the title smaller accordingly to the maximum size of the box
        $MAX_CARD_SMALL = 15;
        $MAX_CARD_BIG = 30;

        if( $_SESSION['size'] == 3 && strlen($title) > $MAX_CARD_SMALL)
            $title = substr($title, 0, $MAX_CARD_SMALL) . '...';

        if( $_SESSION['size'] == 6 && strlen($title) > $MAX_CARD_BIG)
            $title = substr($title, 0, $MAX_CARD_BIG) . '...';



        // We verify if we need to create a new Row
        if($_SESSION['length'] == 0)
            echo '<div class="row">';
        

        
        // Now we add the column space where we'll create the card
        $_SESSION['length'] += $_SESSION['size'];
        
        echo '<div class="col s'. $_SESSION['size'] .' m'. $_SESSION['size'] .' l'. $_SESSION['size'] .' smallZoom">
                <a href="project.php?ID='. $ID .'">';


        // According to the priority, we create a card of a given color
        switch($priority)
        {
            case 1:
                echo '<div class="card whiteToBlueDeep red lighten-1">';
            break;

            case 2:
                echo '<div class="card whiteToBlueDeep blue lighten-1">';
            break;

            case 3:
                echo '<div class="card whiteToBlueDeep green lighten-1">';
            break;

            default:
                echo '<div class="card whiteToBlueDeep pink darken-3">';
            break;
        }

        
        // if($priority == 1) echo '<div class="card smallZoom blue darken-3">';
        // if($priority == 2) echo '<div class="card smallZoom blue">';
        // if($priority == 3) echo '<div class="card smallZoom blue lighten-3">';
        

        echo '
                        <div class="card-content">

                            <div class="card-title" style="font-weight: bold;color: inherit;">' . $title . '</div>
                            <br><br>
                            <h5>Directed by :</h5>
                            <br>
                            <h6>' . $team . '</h6>

                            <br><br>
                            <h5 style="color: inherit">Due for :<br>' . $date . '</h5>
                            
                        </div>



                        <div class="card-action">
                            <h5 style="color: inherit"> ' . $percentage . ' % <h5>

                            <div class="container progress grey darken-4">
                                <div class="determinate white" style="width: ' . $percentage . '%"></div>
                            </div>
                        </div>
                        <br>
                    </div>
                </a>
            </div>
        ';

        // We verify if we need to end the Row
        if($_SESSION['length'] >= $_SESSION['MAX'])
        {
            $_SESSION['length'] = 0;
            echo '</div>';
        }
    }



    /** Creates a number of fake project cards
     * @param $i number of fake project cards to create
     */
    function addProjectCardsFake($i)
    {
        for($index=0; $index < $i ; $index++)
            addProjectCard(rand(1,100), "John DOE", "TEAM T", "01 jan. 2019", rand(0,100), rand(1,3));
    }
?>




<style>
        /* Project Card */
    .card
    {
        text-align: center;
        z-index: -1;
    }

    .card-title
    {
        font-weight: bold;
    }

    .aCard:link
    {
        background-color: transparent;
        text-decoration: none;
    }
    .aCard:visited
    {
        background-color: transparent;
        text-decoration: none;
    }
    .aCard:hover
    {
        background-color: transparent;
    }
    .aCard:active
    {
        background-color: transparent;
    }
</style>