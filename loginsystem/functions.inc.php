<?php
function emptyinputsignup($name ,$email,$username,$password,$passwordrepeat) 
{
   $result; 
   if(empty($name)||empty($email)||empty($username)||empty($password)||empty($passwordrepeat)){
   $result = true;
   }
   else{
    $result = false;
   }
   return $result; 
}
function pwdMatch($password,$passwordrepeat) 
{
   $result; 
   if($password !== $passwordrepeat){
   $result = true;
   }
   else{
    $result = false;
   }
   return $result; 
}
function uidexists($conn,$username,$email){
 $sql = "SELECT * FROM users WHERE username = ? OR email = ?;";
 $stmt = mysqli_stmt_init($conn);
 if(!mysqli_stmt_prepare($stmt,$sql))
 {
    header("location: signup.php?error=usernameexists!");
    exit();
}
mysqli_stmt_bind_param($stmt,"ss",$username,$email);
mysqli_stmt_execute($stmt);

$resultData = mysqli_stmt_get_result($stmt);

if($row = mysqli_fetch_assoc($resultData)){
  return $row;
}
else{
  $result = false;  
  return $result;
}
mysqli_stmt_close($stmt);
}
function createuser($conn,$name,$email,$username,$password){
    $sql = "INSERT INTO users (user_UID,email,username,password) VALUES (?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql))
    {
       header("location: signup.php?error=usernameexists!");
       exit();
   }

   $hashedpassword = password_hash($password,PASSWORD_DEFAULT);

   mysqli_stmt_bind_param($stmt,"ssss",$username,$email,$name,$hashedpassword);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_close($stmt);
   header("location: signup.php?error=none");
   exit();
   
  
   }

   function emptyinputlogin($username,$password) 
{
   $result; 
   if(empty($username)||empty($password)){
   $result = true;
   }
   else{
    $result = false;
   }
   return $result; 
}
function loginuser($conn,$username,$password){
 $uidexists = uidexists($conn,$username,$username);

 if($uidexists === false){
   header("location: login.php?error=wronglogin");
   exit();

 }
$passwordhashed = $uidexists["password"];
$checkpassword  = password_verify($password,$passwordhashed);

if($checkpassword === false){
   header("location: login.php?error=wrongpassword");
   exit();

}
else if ($checkpassword === true){
session_start();
$_SESSION["user_UID"] = $uidexists["user_UID"];
$_SESSION["username"] = $uidexists["username"];

header("location: home.php");
exit();

}
}

