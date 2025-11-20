<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbhotelandre";
$conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
    die('connection Failed : '. mysqli_connect_error());
}

    $sql = 'SELECT no, namatamu, nohp, berasal, tglcheckin, tglcheckout, jam, jeniskamar 
    FROM tblpesankamar';
    $query= mysqli_query($conn, $sql);

if (!$query){
    die('SQL Error:'.mysqli_error($conn));
    }
    echo "<table>
    <center><h2>Room Reservation Data</h2></center><hr/></table>";
    echo "<table width='100%' border='1' cellspacing='0' 
    cellpadding='3'>
    <tr style='text-transform:uppercase; background:#e3e3e3; 
    color:#000;'>
    <tr>
    <th>No</th>
    <th>Name</th>
    <th>Number Phone</th>
    <th>Origin</th>
    <th>Date Check In</th>
    <th>Date Check Out</th>
    <th>Time</th>
    <th>Room</th>
    </tr>
    <tbody>";
    while ($row = mysqli_fetch_array($query))
    {
    echo '<tr>
        <td>'.$row['no'].'</td>
        <td>'.$row['namatamu'].'</td>
        <td>'.$row['nohp'].'</td>
        <td>'.$row['berasal'].'</td>
        <td>'.$row['tglcheckin'].'</td>
        <td>'.$row['tglcheckout'].'</td>
        <td>'.$row['jam'].'</td>
        <td>'.$row['jeniskamar'].'</td>
        </tr>';
    }
    echo "
        </tbody>
        </table>";
        mysqli_free_result($query);
        mysqli_close($conn);
?>