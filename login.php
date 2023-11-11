<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<center>
    <font color="red"><b><big><h1>Student Data Management System</h1>
    <p>
      <font color=white>
    Schools and Universities are the foundation of knowledge and an educational body on which students rely upon. Therefore, they need to maintain a proper database of its students to keep all the updated records and easily share information with students.

Most schools and Universities count on an advanced software tool knows as 'Student Information System (SIS)' to keep all their student records and administrative operations including, examinations, attendance, and other activities.</font>
    </p><h2>LOGIN  HERE</h2></big></u></font>
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

<label for="name"><b><font color=yellow><big>Email:</big></b></font></label>
    <input type="text" placeholder="Email" name="email" requiredautofocus />


   
    </br></br/>
    <input type="submit" value="Add Email" name="submit">
</center>
</form>
<?php 

    if(isset($_POST['submit']))
    {
        require_once("config.php");
        $email = $_POST['email'];

        $query = "INSERT INTO login1(email) VALUE('$email')";
        $execQuery = mysqli_query($db, $query) or die(mysqli_error($db));

        echo "Email has been added Successfully!";
        echo"<script>alert('Login Sucessful');window.location='addingStudents.php'</script>";
      
    }

?>
