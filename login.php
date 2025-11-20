<?php
error_reporting(0);
session_start();
if(isset($_SESSION['email'])) {
header('location:home.php'); }
require_once("connect.php");
  ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Hotel Reservation</title>
  <link href="css/style.css" rel="stylesheet">
</head>
<body>
<div id="wrapper">
<div id="header">

<div align='center'>
    <h1><center>Hotel Room Reservation</h1></center>
	<h3><i><center>Welcome to Hotel</h3></i></center>
  <form action="proseslogin.php"></form>
<h1>Login</h1>
      <table>
            <tbody>
                <tr><td>Username</td><td> : <input name="username" 
                type="text"></td></tr>
                <tr><td>Password</td><td> : <input name="password"
                type="password"></td></tr>
                <tr><td colspan="2" align="center"><input value="Login"
                type="submit">
                <tr><td colspan="2" align="center">Sign Up&nbsp&nbsp<a href="register.php"><b>Create Account</b></a></td></tr>
                  </tbody>
      </table>
    </form>
  </div>
</body>
