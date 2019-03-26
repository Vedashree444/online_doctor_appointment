<?php
 
 $dbc = mysqli_connect('Localhost', 'root', '', 'doctor_appointment')
   
 or die('Error connecting to MySQL server.');

 
 $patientname = $_POST['patientname'];

 $email = $_POST['email'];

 $doctorname = $_POST['doctorname'];

 $demail = $_POST['demail'];

 $date = $_POST['date'];
 
 $time = $_POST['time'];
 
 $meet = $_POST['meet'];

  
 $query = "update patientdetails SET doctorname = '$doctorname', demail = '$demail' , date = '$date', time = '$time', meet = '$meet' where email = '$email'";

mysqli_query($dbc, $query)

    or die('Error querying database.');

  echo '<!DOCTYPE html>
<html>
	<head>
		<title>Doctor login</title>
	
<link rel="stylesheet" href="my.css">	</head>
	<body>
	    <div class = "alignment">
		<h1><i>Online doctor appointment<br></i></h1>
		<a href = "viewdoctor.php" class="w3-btn w3-black">Doctors</a>&nbsp;

	<a href = "book.html" class="w3-btn w3-black">Book appointment</a>&nbsp;

	<a href = "feedback.html" class="w3-btn w3-black">Feedback</a>&nbsp;
	
	<a href = "patient.html" class="w3-btn w3-black">Sign out</a>&nbsp;
		</br>
		</br>
		<img src = "images/doctors.jpg" height= "150px" width ="500px" atl="image not found"/>
		<h2><i>Welcome to online doctor appointment</i></h2>
		<h2> Appointment conformed</h2>
		
       <a href = "patienthome.html">OK</a>&nbsp;
		
	</div>	
	</body>
</html>';

  mysqli_close($dbc);
?>