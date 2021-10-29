<!....sign up done-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="sign-in.css">
<body>
    <!---SIGN UP HTML AND PHP-->
  <form action="register.php" method="POST">
  <h2>Welcome !</h2>
      <!---CHECKING WHEN THERE'S AN ERROR 'check register.php for more info'-->
    <?php if (isset($_GET['error'])) { ?>
      <p class="error"><?php echo $_GET['error'];?></p>
    <?php } ?>
      <!---DISPLAYING INPUTS AND BUTTONS-->
  <label class="lb">User Name</label>
    <input type="text" name="username" placeholder="username">
  <label class="lb">Email</label>
    <input type="email" name="email" placeholder="Your Email">
  <label class="lb">Password</label>
    <input type="password" name="password" placeholder="password">
  <label class="lb">Confirm Password</label>
    <input type="password" name="password2" placeholder="Confirmation password">
  <button type="submit" name="sign_up" >Sign up</button>
</form>
</body>
</html>

<?php
  $name=$_POST["username"];
  $email=$_POST["email"];
  $password=$_POST["password"];
  $password2=$_POST["password2"];
  $date=date('d/m/Y');
  


  if(!empty($name) AND !empty($email) AND !empty($password) AND !empty($password2)){
      if(filter_var($email, FILTER_VALIDATE_EMAIL)){
          if($password==$password2){
             if(strlen($name)<=50){
                $TestEmail=$bdd->query("SELECT id FROM users WHERE email='$email'");

                if($TestEmail->rowCount()<1){
                    
                    $bdd->query("INSERT INTO users (username, email, password, admin) VALUES ('$name ' , '$email' , '$password' ,0)");
                    
                    header("Location: index.php");
                    exit();
                    
                   } 
                     else {header("Location: interface_register.php?error=This Email has already been used");
                        exit();}
                 } 
                 else 
                  {header("Location: interface_register.php?error=Your name has over than 50 characters");
                    exit();}
             }
             else {header("Location: interface_register.php?error=your two password doesn't correspond");
                exit();}
         }
         else  {header("Location: interface_register.php?error=Your Email is invalid");
            exit();}
     }
     else {header("Location: interface_register.php?error=One or more field is/are empty");
        exit();}
    ?>
