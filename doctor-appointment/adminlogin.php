<?php
 $email = $_POST['email'];
 $password = $_POST['password'];
 $num_rows = 0;
 $dbc = mysqli_connect('Localhost', 'root', '', 'doctor_appointment')
 or die('Error connecting to MySQL server.');
 
 $query = "SELECT email FROM admin WHERE email = '$email' AND password = '$password'";
 $result = mysqli_query($dbc, $query)
 or die('Error querying database.');
 
 $num_rows = mysqli_num_rows($result);
 
 if($num_rows > 0)
  echo '<html>
	
<head>
		
<title>home page</title>
		
<link rel="stylesheet" href="my.css">

	</head>

	<body>
	 
      <div class = "alignment">
	
	<h1><i>Online doctor appointment<br></i></h1>
		
	<a href = "adoctor.php" class="w3-btn w3-black">Doctors</a>&nbsp;

	<a href = "apatient.php" class="w3-btn w3-black">Patient</a>&nbsp; 

        <a href = "agetfeedback.php" class="w3-btn w3-black">Feedback</a>&nbsp;

	<a href = "logs.php" class="w3-btn w3-black">Doctor log</a>&nbsp;
        <a href = "admin.html" class="w3-btn w3-black">Sign out</a>&nbsp;
			</br>
	
	</br>
	
	<img src = "images/doctors.jpg" height= "250px" width ="500px" atl="image not found"/>
	
	<h2><i>Welcome to online doctor appointment</i></h2>
        <h2> you have logged in<h2>
        <a href = adminhome.html> ok </a>
	
	</div>
		
</body>

</html>';
 else  
   echo '<html>
	
<head>
		
<title>home page</title>
		
<link rel="stylesheet" href="my.css">

	</head>

	<body bgcolor = skyblue >
	 
      <div class = "alignment">
	
	<h1><i>Online doctor appointment<br></i></h1>
		
	<a href = "index.html" class="w3-btn w3-black">Home</a>&nbsp;

	<a href = "admin.html" class="w3-btn w3-black">Admin</a>&nbsp;

	<a href = "doctor.html" class="w3-btn w3-black">Doctor</a>&nbsp;
	
	<a href = "patient.html" class="w3-btn w3-black">Patient</a>&nbsp;
			</br>
	
	</br>
	
	<img src = "images/doctorts.jpg" height= "250px" width ="500px" atl="image not found"/>
	
	<h2><i>Welcome to online doctor appointment</i></h2>
        <h2>incorrect userid or password<h2>
        <a href = admin.html> ok </a>
	
	</div>
		
</body>

</html>';

  mysqli_close($dbc);
?>