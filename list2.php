<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbhotel";
$conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
    die('Connection Failed : '. mysqli_connect_error());
}

    $sql = 'SELECT id, name, origin, email, datecheckin, datecheckout, typeroom FROM tblpesan';
    $query= mysqli_query($conn, $sql);

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
    <th>Origin</th>
    <th>Email</th>
    <th>Date Check In</th>
    <th>Date Check Out</th>
    <th>Room</th>
    </tr>
    <tbody>";
    while ($row = mysqli_fetch_array($query))
    {
    echo '<tr>
        <td>'.$row['id'].'</td>
        <td>'.$row['name'].'</td>
        <td>'.$row['city'].'</td>
        <td>'.$row['email'].'</td>
        <td>'.$row['nohp'],'</td>
        <td>'.$row['person'],'</td>
        <td>'.$row['datecheckin'].'</td>
        <td>'.$row['datecheckout'].'</td>
        <td>'.$row['typeroom'].'</td>
        </tr>';
    }
    echo "
        </tbody>
        </table>";
        mysqli_free_result($query);
        mysqli_close($conn);
?>