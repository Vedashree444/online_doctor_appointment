<?php
$doctorname = $_POST['doctorname'];

$password = $_POST['password'];

  $email = $_POST['email'];
 
 $location = $_POST['location'];
 
 $category = $_POST['category'];
 
 $gender = $_POST['gender'];

  $timing = $_POST['timing'];
 
 $phoneno = $_POST['phone'];
 
 $age = $_POST['age'];
  
$fees = $_POST['fees'];
  
$experience = $_POST['experience']; 
 $dbc = mysqli_connect('Localhost', 'root', '', 'doctor_appointment')
   
 or die('Error connecting to MySQL server.');

 
 $sql = "INSERT INTO doctor_details(doctorname, password, email, location, catagory, phoneno, timing, age, fees, experience, gender) VALUES('$doctorname','$password', '$email', '$location', '$category', '$phoneno','$timing', '$age', '$fees', '$experience','$gender')";

if (mysqli_query($dbc, $sql)) {
 echo 'you have resgistered
    <a href=index.html>ok</a>';
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($dbc);
}

    

  mysqli_close($dbc);
?>