<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbhotel";
$connect = mysqli_connect($servername, $username, $password, $dbname);
    if (!$connect) {
    die('connection Failed : '. mysqli_connect_error());
}

    $sql = 'SELECT id_rsv, name, nohp, address, email, datecheckin, datecheckout, typeroom FROM tblreservasi';
    $query= mysqli_query($connect, $sql);

if (!$query){
    die('SQL Error:'.mysqli_error($connect));
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
    <th>PhoneNumber</th>
    <th>Address</th>
    <th>Email</th>
    <th>Date Check In</th>
    <th>Date Check Out</th>
    <th>Type Room</th>
    </tr>
    <tbody>";
    while ($row = mysqli_fetch_array($query))
    {
    echo '<tr>
        <td>'.$row['id_rsv'].'</td>
        <td>'.$row['name'].'</td>
        <td>'.$row['nohp'].'</td>
        <td>'.$row['address'].'</td>
        <td>'.$row['email'].'</td>
        <td>'.$row['datecheckin'].'</td>
        <td>'.$row['datecheckout'].'</td>
        <td>'.$row['typeroom'].'</td>
        </tr>';
    }
    echo "
        </tbody>
        </table>";
        mysqli_free_result($query);
        mysqli_close($connect);
?>