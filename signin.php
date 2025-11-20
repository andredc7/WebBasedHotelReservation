<?php
require 'connect.php';
if(!empty($_SESSION["id"])){
  header("Location: home.php");
}
if(isset($_POST["submit"])){
  $usernameemail = $_POST["usernameemail"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM tbluser WHERE username = '$usernameemail' OR email = '$usernameemail'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: home.php");
    }
    else{
      echo
      "<script> alert('Password Incorrect'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Hotel</title>
    <link href="style/style.css" rel="stylesheet">
</head>
<body>
  <div id="wrapper">
  <div id="header">
      <h1><p><b><center>Hotel Room Reservation</p></h1></b></center>
    </div>

  <div align='center'>
  </head>
  <body background="../img/oyo.jpg">
    <h2>Login</h2>
    <form class="" action="" method="post" autocomplete="off">
      <table border=0 align="center">
      <label for="usernameemail">Username or Email : </label>
      <input type="text" name="usernameemail" id = "usernameemail" required value=""> <br>
      <label for="password">Password : </label>
      <input type="password" name="password" id = "password" required value=""> <br>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <button type="submit" name="submit">Login</button>
      </table>
    </form>
    <br>
    <a href="signup.php">Signup</a>
  </body>
</html>
