<!DOCTYPE html>
<html lange="en">
    <head>
        <meta charset="UTF_8">
        
        <link rel="stylesheet" href="employeesstyle.css" />
    </head>
    <body>
        <title> SEARCH FOR A MANAGER</title>
        <form action="employee_searchresults.php" method="POST">
            <p2><strong>Select a Search criteria:</strong><br />
            <select name="searchtype">
                <option value="ID_Number">ID Number</option>
                <option value="Name">Name</option>
                <option value="Email">Email</option>
                <option value="Date_Joined">Date Joined</option>
                <option value="Grade">Grade</option>
                <option value="Salary">Salary</option>
            </select>
            </p2>
            <p3><strong>Enter Search Term:</strong><br />
                <input id="searchterm" name="searchterm" type="text" size="40"></p3>
            <p><button class="button" id="submit" name="Search">Search</button></p>
        </form>
    </body>
</html>