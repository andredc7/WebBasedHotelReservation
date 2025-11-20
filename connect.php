<?php
$conn = mysql_connect("localhost", "root", "", "dbhotelandre");

if($conn){
    echo "Connect Successful";
}
  else
    {
        die(mysql_error($conn));
    }
?>