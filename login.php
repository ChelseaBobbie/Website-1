<!DOCTYPE html>
<html lange="en">
  <head>
    <title>Login</title>
    <link rel="stylesheet" href="employeesstyle.css">
</head>
<body>
  <div class="login">
     <form action="employees.php" method="POST">
        <h2>Login</h2>
        <fieldset>
            <label>User Name</label>
            <input type="text" name="name" placeholder="User Name"><br>
            <label>Password</label>
            <input type="password" name="password" placeholder="Password"><br> 
            <button class="button" type="submit">Login</button>
        </fieldset>
     </form>
</div>
</body>
</html>