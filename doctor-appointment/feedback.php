<?php

 $doctorname = $_POST['doctorname'];

 $email = $_POST['email'];
 
 $sat = $_POST["sat"];
  
 $feedback = $_POST['feedback'];
 
 $dbc = mysqli_connect('Localhost', 'root', '', 'doctor_appointment')
   
 or die('Error connecting to MySQL server.');

 
 $sql = "INSERT INTO feedback(doctorname, email, sat, feedback) VALUES('$doctorname', '$email',  '$sat', '$feedback')";

if (mysqli_query($dbc, $sql)) {
 echo '<html>
	
<head>
		
<title>home page</title>
		
<link rel="stylesheet" href="my.css">

	</head>

	<body >
	 
      <div class = "alignment">
	
	<h1><i>Online doctor appointment<br></i></h1>
		
	<a href = "viewdoctor.php" class="w3-btn w3-black">Doctors</a>&nbsp;

	<a href = "book.html" class="w3-btn w3-black">Book appointment</a>&nbsp;

	<a href = "feedback.html" class="w3-btn w3-black">Feedback</a>&nbsp;
	
	<a href = "patient.html" class="w3-btn w3-black">Sign out</a>&nbsp;
        </br>
	
	</br>
	
	<img src = "images/doctors.jpg" height= "250px" width ="500px" atl="image not found"/>
	
	<h2>Your feedback is saved</h2>
          <a href=feedback.html>ok</a>
	
	</div>
		
</body>

</html>';
} else {
      echo '<!DOCTYPE html>

<html>
	
<head>
		
<title>home page</title>
		
<link rel="stylesheet" href="my.css">

	</head>

	<body>
	 
      <div class = "alignment">
	
	<h1><i>Online doctor appointment<br></i></h1>
		
	<a href = "viewdoctor.php" class="w3-btn w3-black">Doctors</a>&nbsp;

	<a href = "book.html" class="w3-btn w3-black">Book appointment</a>&nbsp;

	<a href = "feedback.html" class="w3-btn w3-black">Feedback</a>&nbsp;
	
	<a href = "patient.html" class="w3-btn w3-black">Sign out</a>&nbsp;
			</br>
	
	</br>
	
	<img src = "images/doctors.jpg" height= "250px" width ="500px" atl="image not found"/>
	
	<h2>Your feedback not saved</h2>
          <a href=patienthome.html>ok</a>
	
	</div>
		
</body>

</html>';
}

    

  mysqli_close($dbc);
?>