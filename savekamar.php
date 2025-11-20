<?php 
session_start();
include ("connect.php");

$typeroom = $_POST["typeroom"];
$facilities = $_POST["facilities"];
$result = mysqli_query($conn, "SELECT * FROM tblkamar WHERE typeroom = '$typeroom' and facilities = '$facilities'");
  if(mysqli_num_rows($result) > 0){
    echo
    "<script> alert('Type Room and Facilities already taken'); </script>";
  }else{
    $result = "INSERT INTO tblkamar VALUES('',  '$typeroom', '$facilities')";
    mysqli_query($conn, $result);
    echo
    "<script> alert('Data berhasil disimpan'); </script>";
  }
?>