<?php
 if (isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $passwordrepeat = $_POST["confirm_password"];

  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';

if (emptyinputsignup($name ,$email,$username,$password,$passwordrepeat) !==false)
{header("location: signup.php?error=emptyinput");
    exit(); }

if (pwdMatch($password,$passwordrepeat) !==false)
    {header("location: signup.php?error=passwordsdontmatch");
        exit(); }

if (uidexists($conn,$username,$email) !==false)
{header("location: signup.php?error=usernameexists!");
    exit(); }

    createuser($conn,$name,$email,$username,$password);
 }

 else{
    header("location: signup.php");
    exit();
 }