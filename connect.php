<?php
$conn = mysql_connect("localhost", "root", "", "dbhotel");

if($conn){
    echo "Connect Successful";
}
  else
    {
        die(mysql_error($conn));
    }

?>
