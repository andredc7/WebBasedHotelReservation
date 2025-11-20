<? php
$servername = "localhost";
$dbname = "dbhotelandre";
$username = "root";
$password = "";

$conn = mysql_connect ($servername, $username, $password, $dbname);

if(!$conn){
  die ("Connection Failed : " . mysql_connect_error());
}

$sql= 'SELECT * no, namatamu, nohp, asal, tglcheckin, tanggal checkout, kamar from tblPesanKamar';
  else
{
  echo "Connect Successful";
}
