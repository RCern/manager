<?php
    function connect()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "manager";

        // Create connection
        $conn = new mysqli($servername, $username, $password,$dbname);

        // Check connection
        if ($conn->connect_error) 
            die("Connection failed: " . $conn->connect_error);  
        else
            return $conn;
    }


    function getEmployeeValue($ID, $value)
    {
        // We initialize the return value
        $return = "";


        // We search in the database the data of the employee whose ID has been given by argument
        $conn = connect();
        $sql = "SELECT  " . $value . " from employee where accountID = '$ID'";

        $result = $conn->query($sql);
        
        if($result->num_rows == 1)
        {
            $row = $result->fetch_assoc();
            $return =  $row["" . $value . ""];
        }
        

        // Connection Closed.
        $conn->close();
        
        
        // Return the found value
        return $return;
    }



    function getTeamValue($ID, $value)
    {
        // We initialize the return value
        $return = "";


        // We search in the database the data of the employee whose ID has been given by argument
        $conn = connect();
        $sql = "SELECT  " . $value . " from team where teamID = '$ID'";

        $result = $conn->query($sql);
        
        if($result->num_rows == 1)
        {
            $row = $result->fetch_assoc();
            $return =  $row["" . $value . ""];
        }
        

        // Connection Closed.
        $conn->close();
        
        
        // Return the found value
        return $return;
    } 
?>