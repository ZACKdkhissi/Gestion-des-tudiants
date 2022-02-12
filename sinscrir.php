<?php
session_start();
?>

<?php

$host="localhost";
$user="root";
$password="";
$db="ensat";
$con=mysqli_connect($host,$user,$password,$db);
if(isset($_POST['submit'])){
   $nom=htmlspecialchars(trim($_POST['nom']));
   $prenom=htmlspecialchars(trim($_POST['pre']));
   $cod=htmlspecialchars(trim($_POST['cod']));
   $email=htmlspecialchars(trim($_POST['email']));
   $pass=htmlspecialchars(trim($_POST['pass']));
   $query="INSERT INTO te(nom,prenom,email,cod,pass) VALUES('$nom','$prenom','$email','$cod','$pass')";
   mysqli_query($con,$query);
   header('location:1ERE.php');
}

?>

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylee.css">
    <title>Inscription</title>
</head>
<body>


  
</div>
    <div class="container">
        <div class="brand-logo">
            <img src="">
        </div>
        <div class="brand-title">Ensat</div>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <div class="inputs">
          <label>Nom</label>
          <input type="text" name="nom" placeholder="votre nom" />
          <label>Prénom</label>
          <input type="text" name="pre" placeholder="votre prenom" />
          <label>EMAIL</label>
          <input type="email" name="email" placeholder="example@test.com" />
          <label>PASSWORD</label>
          <input type="password" name="pass" placeholder="password" />
          <label>code apogée</label>
          <input type="text" name="cod" placeholder="votre code apogée" />
         <input class="vv" type="submit" name="submit" value="s'inscrir">
         <a href="deconnection.php">déconnection</a>

        </div>
    </form>
        
      </div>

</body>
</html>