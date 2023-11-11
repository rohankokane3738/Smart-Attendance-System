<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<center>
 
    <font color="red"><b><big><u><h2>Add Students  Here</h2></b></big></u></font>
</center>


<style>
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */


  min-height: 380px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Add styles to the form container */
.container {
  position: absolute;
  right: 0;
  margin: 20px;
  max-width: 300px;
  padding: 16px;
  background-color: white;
}

</style>
</head>
<body  style="background-image: url('img/3.jpg');">

<center>
<form method="POST">
</br></br/><br/><br/>

<label for="name"><b><font color=yellow>Student  Name:</b></font></label>
    <input type="text" placeholder="Student Name" name="student_name" requiredautofocus />


   
    </br></br/>
    <input type="submit" value="Add Student" name="submit">
</center>
</form>
<?php 

    if(isset($_POST['submit']))
    {
        require_once("config.php");
        $student_name = $_POST['student_name'];

        $query = "INSERT INTO attendance_students(student_name) VALUE('$student_name')";
        $execQuery = mysqli_query($db, $query) or die(mysqli_error($db));

        echo "Student has been added Successfully!";
        echo"<script>alert('Student Added Sucessful');window.location='addAttendance.php'</script>";
        
      
    }

?>
