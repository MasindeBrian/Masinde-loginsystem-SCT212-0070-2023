<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
    <title>Signup Form</title>
</head>
<body>

    <header>
        <nav class="navbar">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="signup.php">Signup</a></li>
            </ul>
        </nav>
    </header>

    <div class="signup-container">
        <h2>Signup Form</h2>
        <form action="signup.inc.php" method="post">
            <input type="text" name="name" placeholder="name">
            <br>
            <input type="text" name="username" placeholder="Username">
            <br>
            <input type="email" name="email" placeholder="Email" >
            <br>
            <input type="password" name="password" placeholder="Password" >
            <br>
            <input type="password" name="confirm_password" placeholder="confirm password" >
            <br>
            <button type="submit" name="submit">Sign Up</button>
        </form>
    </div>
    
<?php
if(isset($_GET["error"])){
if($_GET["error"] == "emptyinput"){
  echo"<p>fill in all fields</p>";  
}
else if($_GET["error"] == "none"){
    echo"<p>Sign up successful,proceed to login</p>";  
  }
  else if($_GET["error"] == "invalidemail"){
    echo"<p >choose a proper email</p>";  
  }
  else if($_GET["error"] == "usernameexists!"){
    echo"<p >account already exist login instead</p>";  
  }
  else if($_GET["error"] == "passwordsdontmatch"){
    echo"<p>passwords do not match!</p>";  
  }

}

?>

</body>
</html>