<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<title></title>
</head>
<body>

<?php

if (isset($_POST['connexion'])) {
    session_start();
$email = $_POST ['email']; 
$pass = $_POST ['pass'];

$_SESSION['email'] = $email;

$host="localhost";
$user="root";
$password="";
$db="ensat";

$con=mysqli_connect($host,$user,$password,$db);


if($con){
	$sql = "SELECT * FROM te";
	$result = mysqli_query($con, $sql);
	
	if (mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)){
		  if ($row["email"] == $email and $row["pass"] == $pass){
		  	header('location:home.php');
		  	break;
		  }
          else{
    echo '<div class="alert alert-danger" role="alert">
    email ou mot de pass est incorrect
  </div>'; 
  header('location:1ERE.php');

  
	 
	  	}
	}

	  		

	mysqli_close($con);
	    
}
}

else
    echo "not connected";


}

?>

</body>
</html>