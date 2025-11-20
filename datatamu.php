
<h3><center> Data Tamu Hotel </h3></center>

<table border="1">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Origin</th>
        <th>Email</th>
        <th>Check In Date</th>
        <th>Check Out Date</th>
        <th>Type Room</th>
        <th colspan="2">Action</th>
    </tr>

    <?php
    include "connect.php";

    $no=1;
    $ambildata = mysqli_query($conn,"select * from tblpesan");
    while($tampil = mysqli_fetch_array($ambildata)){
        echo '<tr>
            <td>$no</td>
            <td>$tampil[Name]</td>
            <td>$tampil[Origin]</td>
            <td>$tampil[Email]</td>
            <td>$tampil[Check In Date]</td>
            <td>$tampil[Check Out Date]</td>
            <td>$tampil[Type Room]</td>
        <tr>';
        $no++;
    }
    ?>
    </table>

    <?php
    include "connect.php";

    if(isset($_GET['kode'])){
    mysqli_query($conn,"delete from tblpesan where kode_barang='$_GET[kode]'");
    
    echo "Data berhasil dihapus";
    echo "<meta http-equiv=refresh content=2;URL='datatamu.php'>";

    }
    ?>