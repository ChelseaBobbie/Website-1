<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="employeesstyle.css" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Records</title>
    <style>
        
        table{
            width: 100%;
            align:center;
            margin:auto;
            font-family: Arial;
            bottom:0px;
            
            
        }
        
        table, tr, th, td{
            border: 2px solid burlywood;
            border-collapse: collapse;
            padding: 15px;
        }
        th, td{
            text-align: center;
            vertical-align: top;
        }
        tr{
            background-color: rgba(0,0,0,0.5);
        }
    </style>
    <table class="center">
<body>
<h4 id="heading">LIST OF ALL MANAGERS.</h4>

<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "employees";

    
    $con = mysqli_connect($hostname, $username, $password, $dbname);
    
    if(!$con)
    {
        die("Could not connect" . mysqli_connect_error());
    }
    else 
    {
        echo "<br>";
    }

    $sql = "SELECT ID_Number, Name, Email, Grade, Date_Joined, Salary FROM details";

    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result) > 0)
    {
       echo '<table> <tr> <th> ID_Number </th> <th> Name </th> <th> Email </th><th> Date_Joined </th><th>  Grade</th> <th>Salary($) </th> </tr>';
       while($row = mysqli_fetch_assoc($result)){
      
           echo '<tr > <td>' . $row["ID_Number"] . '</td>
           <td>' . $row["Name"] . '</td>
           <td> ' . $row["Email"] . '</td>
           <td>' . $row["Date_Joined"] . '</td>
           <td>' . $row["Grade"] . '</td>
           <td>' . $row["Salary"] . '</td> </tr>';
       }
       echo '</table>';
    }
    else
    {
        echo "0 results";
    }
    
    mysqli_close($con);
?>
</body>
</html>