<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Modification</title>
<link rel="stylesheet" href="stylee.css">
</head>
<body>
<?php
error_reporting();
/*$nom = $_SESSION['nom'];
$pass = $_SESSION['pass'];*/
$email = $_SESSION['email']; 


$host="localhost";
$user="root";
$password="";
$db="ensat";



if(isset($_POST['modifier'])){
$con=mysqli_connect($host,$user,$password,$db);
if($con){
	$sql = "UPDATE te SET  email = '$_POST[email]' WHERE email='$email'";
	mysqli_query($con, $sql);
	mysqli_close($con);
}

}

$con=mysqli_connect($host,$user,$password,$db);

if($con){
	$sql = "SELECT * FROM te WHERE te.email = '$email'";

		
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_assoc($result);//mysqli_fetch_array($result);
    echo"<div class='container'>";
	echo "<form method = 'POST'>";
	echo "<b>Code apoge</b> : $row[cod] <br>";
	echo "<b>Nom</b> : $row[nom]<br>";
	echo "<b>Prénom</> : $row[prenom]<br>";
	echo "<b>Email</b> : <input type = 'text' name ='email' value ='$email'>";
	echo "<input class='vv' type = 'submit' name ='modifier' value ='modifier'>";
	echo "</form>";
	echo"<a href='deconnection.php'>déconnection</a>";

    echo"</div>";
}
		
else
	echo "pas de connexion";

mysqli_close($con);
?>


</body>
</html>