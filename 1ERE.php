
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="stylee.css">
    <title>Document</title>
</head>
<body>
    

    <div class="container">
        <div class="brand-logo">
            <img src="">
        </div>
        <div class="brand-title">ENSAT</div>
     <form method="post" action="connexion.php" >
        <div class="inputs">
          <label>EMAIL</label>
          <input type="email" name="email" placeholder="example@test.com" >
          <label>PASSWORD</label>
          <input type="password" name="pass" placeholder="password" >
          <input class="vv" type="submit" name="connexion" value="Se connecter">
         <a href="sinscrir.php">Inscription</a>
          
        </div>
     </form>
        
    </div>;
      
</body>
</html>
