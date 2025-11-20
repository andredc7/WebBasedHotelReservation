<?php
include 'connect.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $username = $_POST["username"];
  $nohp = $_POST["nohp"];
  $address = $_POST["address"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $duplicate = mysqli_query($conn, "SELECT * FROM tbluser WHERE username = '$username' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO tbluser VALUES('','$name','$username', '$nohp', '$address', '$email', '$password')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sign Up</title>
    <link href="style/style.css" rel="stylesheet">
  </head>
  <body background="hotel/img/putihkayu.jpg">
  <div id="wrapper">
          <div id="header">
              <h1><p><b><center>Hotel Room Reservation</p></h1></b></center>
          </div>
          <div align='center'>
    <h2>Sign Up</h2>
        <form class="" action="" method="post" autocomplete="off">
          <br>
              <label for="name">Name : </label>
              <input type="text" name="name" id = "name" required value=""> <br>
              <label for="username">Username : </label>
              <input type="text" name="username" id = "username" required value=""> <br>
              <label for="nohp">Phone Number : </label>
              <input type="nohp" name="nohp" id = "nohp" required value=""> <br>
              <label for="address">Address : </label>
              <input type="address" name="address" id = "address" required value=""> <br>
              <label for="email">Email : </label>
              <input type="email" name="email" id = "email" required value=""> <br>
              
              <label for="password">Password : </label>
              <input type="password" name="password" id = "password" required value=""> <br>
              <label for="confirmpassword">Confirm Password : </label>
              <input type="password" name="confirmpassword" id = "confirmpassword" required value=""> <br>
              <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>
              <button type="submit" name="submit">Register</button>
              </td>

        </form>
    <br>
    <a href="login.php">Login</a>
  </body>
</html>
