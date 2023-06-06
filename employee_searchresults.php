<!DOCTYPE html>
<html lange="en">
    <head>
        <meta charset="UTF_8">
        <link rel="stylesheet" href="employeesstyle.css" />
    </head>
    <body>
    <title>Search Results</title>
        <header>
        <h1 id="title">The Football Managers you looked for were:</h1>
        </header>
        <?php
        $db = new mysqli("localhost", "root", "", "employees");
        $searchtype=$_POST['searchtype'];
        $searchterm=trim($_POST['searchterm']);
        if (!$searchtype || !$searchterm) {
        echo '<p>You have not entered anything to search for.<br/>
        Please go back and try again.</p>';
        exit;
        }
        $query = "SELECT  Name,ID_Number, Grade, Date_Joined,Salary,Email FROM details WHERE $searchtype = ?";
        $stmt = $db->prepare($query);
        $stmt->bind_param('s', $searchterm);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($name,$id, $grade,$dj,$salary,$email );
        echo "<p>Records found: ".$stmt->num_rows."</p>";
        while($stmt->fetch()) {
        echo "<p><strong>Name:</strong> ".$name;
        echo "<p><strong>ID_Number:</strong>".$id."";
        echo "<br /><strong>Grade:</strong> ".$grade;
        echo "<br /><strong>Date_Joined:</strong> ".$dj;
        echo "<br /><strong>Salary($):</strong>".$salary;
        echo "<br /><strong>Email:</strong> ".$email;
        
        
        }
        $stmt->free_result();
        $db->close();
        ?>
    </body>
</html>