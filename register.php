<?php
session_start();
if(isset($_SESSION['username'])) {
header('location:index.php'); }
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
<h1><p><b><center>Hotel Room Reservation</p></h1></b></center>
<p><i><center>Booking Hotel Room</p></i></center>
</div>
<style>

</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="ignielPelangi">

<div align='center'>

  <form method="post" action="usersave.php" name="signup-form">
  <div class="form-element">
    <table>
      <tr>	
				<td>Name</td>
        <td>:</td>
				<td><input type="text" name="namapengguna"></td>
			</tr>
      <tr>	
				<td>Address</td>
        <td>:</td>
				<td><input type="text" name="alamat"></td>
			</tr>
      <tr>	
				<td>Email</td>
        <td>:</td>

				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>Phone Number</td>
        <td>:</td>
				<td><input type="int" name="nohp"></td>
			</tr>
			<tr>
        <td>Password</td>
				<td>:</td>
        <td><input type="password" name="katasandi"></td>
      </tr>
    </table>
        <tr><td colspan="2" align="center">Back to &nbsp&nbsp<a href="login.php"><b>Login</b></a></td></tr>
				<td><input type="submit" name="send" value="SignUp"></td>
        
  </form>
</div>
</body>
</html>
