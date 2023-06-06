<!DOCTYPE html>
<html lange="en">
  <head>
    <meta charset="UTF_8">
    <body>
    <title>The Football Manager Employee Records System</title>
     <link rel="stylesheet" href="employeesstyle.css" />
  </head>
  <body>
    <div class="fixed">
    <div class="form">
     <div id="description">
          <h1 id="description">Welcome to the Football Manager Employee Records System.</h1>
             <p>Edit and View Information on any Manager in the System</p>
     </div>
    <form id="edit-form" action="employee_details.php" method="POST">
      <fieldset>
        <label id="ID_number" for="ID_number">ID number <input id="ID_number" type="text" name="ID_number" placeholder="Enter ID number" /></label>
        <label id="Name" for="Name">Name <input id="Name" type="text" name="Name" placeholder="Enter Name" /></label>
        <label id="Grade" for="Grade">Grade <input id="Grade" type="Grade" name="Grade" placeholder="Enter Grade" /></label>
        <label id="Date_Joined" for="Date_Joined">Date Joined <input id="Date_Joined" type="text" name="Date_Joined" placeholder="Enter Date Joined" /></label>
        <label id="Salary" for="Salary">Salary <input id="Salary" type="text" name="Salary" placeholder="Enter Salary " /></label>
        <label id="Email" for="Email">Email <input id="Email" type="email" name="Email" placeholder="Enter Email" /></label>
      <button class="button" id="submit" name="Save">Save </button>
      <button class="button" id="submit" name="Delete">Delete </button>
      <button class="button" id="submit" name="Update">Update </button>
      <button class="button" id="submit" name="Display"><a class="link" href="display_table.php" target="_blank" >Display All Information</a></button>
      <button class="button" id="submit" name="Search"><a class="link" href="employee_search.php" target="_blank" >Search</a></button>
      </fieldset>
    </form>
        </ul>
     </div>
    </div>
  </body>
</html>