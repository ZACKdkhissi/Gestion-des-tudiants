<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href=" stylee.css">
<title>table des etudiants</title>
</head>
<body>
<a href="deconnection.php">déconnection</a>

<?php
$email = $_SESSION['email']; 

$host="localhost";
$user="root";
$password="";
$db="ensat";

$con=mysqli_connect($host,$user,$password,$db);
if($con){
	$sql = "SELECT * FROM te";
	$result = mysqli_query($con, $sql);
	
	if (mysqli_num_rows($result) > 0) {
	echo '<table class="table table-dark">  <thead>
    <tr><th scope="col">Nom</th><th scope="col">Prénom</th><th scope="col">email</th><th scope="col">code apogée</th></tr>  </thead>';
	while($row = mysqli_fetch_assoc($result))
		  echo"<tr><td>$row[nom]</td><td>$row[prenom]</td><td>$row[email]</td><td>$row[cod]</td></tr>";
		  
	echo '</table>';
	 
	}
	else
		echo "pas d'enregistrements";
} 
	  		
else
	echo "pas de connexion";
	mysqli_close($con);

?>
<center><a href="modification.php">modifier</a></center>

</body>
</html>
