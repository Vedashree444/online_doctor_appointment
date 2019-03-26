<!DOCTYPE html>
<html>
  <head>
    <title>table with db</title>
    
    <link rel="stylesheet" href="my.css">
    <style type = "text/css">
     table{
       border-collapapse : collapse;
       width : 100%;
       color : #d96459;
       font-family : monospace;
       font-size : 25px;
       text-align : left; 
      }
   th{
      background-color: #d96459;
      color : white; 
     }
   tr : nth-child(even){background-color: #f2f2f2}

  </style>
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

	<img src = "images/doctors.jpg" height= "150px" width ="500px" atl="image not found"/>
			
	<h2>Register details</h2>
	
	</div>


  <table>
   <tr>
    <th>email</th>
    <th>date</th>
  </tr>

<?php
  
  $dbc = mysqli_connect('Localhost', 'root', '', 'doctor_appointment')
   
   or die('Error connecting to MySQL server.');

  $query = "SELECT email, cdate FROM logs";

  $result = mysqli_query($dbc, $query)
   or die('Error querying database.');
  
  $num_rows = mysqli_num_rows($result);
 
  if($num_rows > 0){
    while($row = $result->fetch_assoc()){
    echo "<tr><td>". $row["email"]. "</td><td>". $row["cdate"]. "</td></tr>";
 
  }
  echo "</table>";
 }
 else{
  echo " 0 result";
}

mysqli_close($dbc);
?>

</table>
</body>
</html>