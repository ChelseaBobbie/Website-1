<!DOCTYPE html>
<html lange="en">
  <head>
    <link rel="stylesheet" href="employeesstyle.css">
    </head>
    </html>


<?php
$db=new mysqli('localhost','root','','employees');
$name=$_POST['Name'];
$id=$_POST['ID_number'];
$grade=$_POST['Grade'];
$dj=$_POST['Date_Joined'];
$salary=$_POST['Salary'];
$email=$_POST['Email'];


if(mysqli_connect_error())
{
    echo"Error,could not connect";
    exit;
}
echo"";




if(isset($_POST["Update"]))
{$query = "UPDATE details set Name='".$name."' where ID_number=?";
$stnt = $db->prepare($query);
$stnt->bind_param('s',$id);
$stnt->execute();


$query = "UPDATE details set Grade='".$grade."' where ID_number=?";
$stnt = $db->prepare($query);
$stnt->bind_param('s',$id);
$stnt->execute();


$query = "UPDATE details set Date_Joined='".$dj."' where ID_number=?";
$stnt = $db->prepare($query);
$stnt->bind_param('s',$id);
$stnt->execute();

$query = "UPDATE details set Salary='".$salary."' where ID_number=?";
$stnt = $db->prepare($query);
$stnt->bind_param('s',$id);
$stnt->execute();


$query = "UPDATE details set Email='".$email."' where ID_number=?";
$stnt = $db->prepare($query);
$stnt->bind_param('s',$id);
$stnt->execute();

$db->close();
if($stnt->affected_rows>0)
{
    echo"<p4>Record Updated succesfully. Please go back and select Display All Information to view the updated table.</p4>";
}
else
{
    echo"<p>Could not update record";
}
}


if(isset($_POST["Delete"]))
{
    $query = "DELETE FROM details WHERE ID_number=?";
    $stnt = $db->prepare($query);
    $stnt->bind_param('s',$id);
    $stnt->execute();
    $db->close();
    if($stnt->affected_rows>0)
    {
        echo"<p4>Record Deleted succesfully.Please go back and select Display All Information to view the updated table</p4>";
    }
    else
    {
        echo"Could not deleted record";
    }
    }

    if(isset($_POST['search']))
    {
    echo "It worked";
    $db = new mysqli('localhost','root','','employees');
    $searchtype=$_POST['ID_number'];
    $searchterm=trim($_POST['ID_number']);
    $query = "SELECT Name , Email, Date_Joined, Salary FROM details WHERE $ID_number=?";
    $stmt = $db->prepare($query);
    $stmt->bind_param('s', $id);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($name,$id,$grade,$dj,$salary,$email);
    echo "<p4>the_number of managers found: ".$stmt->num_rows."</p4>";
    while($stmt->fetch()) {
        echo "<p><strong>the_name: ".$name."</strong>";
        echo "<br />the_number: ".$id;
        echo "<br />the_grade: ".$grade;
        echo "<br />the_datejoined: ".$dj;
        echo "<br />the_salary: ".$salary;
        echo "<br />the_email: ".$email;
           
        
    }

}
    

if(isset($_POST["Save"]))
{
 
$query = "Insert into details VALUES(?,?,?,?,?,?)";
$stnt = $db->prepare($query);
$stnt->bind_param('ssssss',$name,$id,$grade,$dj,$salary,$email);
$stnt->execute();
$db->close();
if($stnt->affected_rows>0)
{
    echo"<p4>Record saved succesfully.Please go back and select Display All Information to view the updated table.</p4>";
}
else
{
    echo"Could not insert record";
}
}
?>