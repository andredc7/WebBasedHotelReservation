<?php
include("connect.php");
session_start();
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  $result = $conn->prepare("SELECT * FROM tbluser WHERE username= :n2 and password= :c");
  $result->bindParam(':n2', $username);
  $result->bindParam(':c', $password);
  $result->execute();
  $rows = $result->fetch(PDO::FETCH_NUM);
if ($rows > 0) {
      $sql = $conn->prepare("SELECT * FROM tbluser WHERE username= :n2 and password= :c");
    $sql->bindParam(':n2', $username);
    $sql->bindParam(':c', $password);
    $sql->execute();
while($q=$sql->fetch()){
    $_SESSION['email']=$q['email'];
    $_SESSION['nohp']=$q['nohp'];
    $_SESSION['alamat']=$q['alamat'];

    ?><script type="text/javascript">
    window.location="/andredc/home.php";
    </script> <?php
    }
    else
    {
    ?><script type="text/javascript">
    alert("Username or Password Incorrect!")
    window.location="/andredc/login.php";
    </script> <?php
    }
    ?>