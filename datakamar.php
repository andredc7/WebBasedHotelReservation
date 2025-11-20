<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbhotel";
$conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
    die('Connection Failed : '. mysqli_connect_error());
}

    $sql = 'SELECT idroom, typeroom, facilities FROM tblkamar';
    $query= mysqli_query($conn, $sql);

if (!$query){
    die('SQL Error:'.mysqli_error($connect));
    }   
    echo "<table>
    <center><h2> Type Room Data</h2></center><hr/></table>";
    echo "<table width='100%' border='1' cellspacing='0' 
    cellpadding='3'>
    <tr style='text-transform:uppercase; background:#e3e3e3; 
    color:#000;'>
    <p>Type Room Total : <b><?php echo $jumlah_kamar; ?></b></p>
    <tr>
    <th>No</th>
    <th>Type Room</th>
    <th>Facilities</th>
    </tr>
    <tbody>";
    while ($row = mysqli_fetch_array($query))
    {
    echo '<tr>
        <td>'.$row['idroom'].'</td>
        <td>'.$row['typeroom'].'</td>
        <td>',$row['facilities'],'</td>
        </tr>';
    }
    echo "
        </tbody>
        </table>";
        mysqli_free_result($query);
        mysqli_close($conn);
?>