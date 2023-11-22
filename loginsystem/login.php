<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="test.css">
    <title>Login Form </title>
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

    <div class="login-container">
        <h2>Login Form</h2>
        <form action="login.inc.php" method="post">
            <input type="text" name="username" placeholder="Email" required>
            <br>
            <input type="password" name="password" placeholder="Password" required>
            <br>
            <button type="submit" name="submit">Login</button>
        </form>
    </div>
    <?php
if(isset($_GET["error"])){
if($_GET["error"] == "wronglogin"){
  echo"<p>Incorrect login details</p>";  
}
else if($_GET["error"] == "wrongpassword"){
    echo"<p>incorrect password</p>";  
  }
}

?>


</body>
</html>
