<?php 
session_start();
include ("connect.php");

$name = $_POST["name"];
$nohp = $_POST["nohp"];
$address = $_POST["address"];
$email = $_POST["email"];
$datecheckin = $_POST["datecheckin"];
$datecheckout = $_POST["datecheckout"];
$typeroom = $_POST["typeroom"];
$result = mysqli_query($conn, "SELECT * FROM tblreservasi WHERE datecheckin = '$datecheckin' and typeroom = '$typeroom'");
  if(mysqli_num_rows($result) > 0){
    echo
    "<script> alert('Sorry this Room is Fully Booked'); </script>";
  }else{
    $result = "INSERT INTO tblreservasi VALUES('','$name', '$nohp', '$address','$email','$datecheckin', '$datecheckout', '$typeroom')";
    mysqli_query($conn, $result);
    echo
    "<script> alert('Data berhasil disimpan'); </script>";
  }
?>