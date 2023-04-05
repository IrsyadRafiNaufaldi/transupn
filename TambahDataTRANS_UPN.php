<?php
    include 'KONEKSI.php';
    if(isset($_POST['aksi'])){
        if($_POST['aksi'] == "add"){
            $id_trans_upn = $_POST['id_trans_upn'];
            $id_kondektur = $_POST['id_kondektur'];
            $id_bus = $_POST['id_bus'];
            $id_driver = $_POST['id_driver'];
            $jumlah_km = $_POST['jumlah_km'];
            $tanggal = $_POST['tanggal'];

            $query = "INSERT INTO trans_upn VALUES
            ('$id_trans_upn', '$id_kondektur', '$id_bus',
            '$id_driver', '$jumlah_km', '$tanggal')";
            $sql = mysqli_query($con, $query);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMBAH DATA TRANS UPN</title>
</head>
<body>
    <h1>TAMBAH DATA TRANS UPN</h1>

    <form action="TambahDataTRANS_UPN.php" method="POST">
        <table>
            <tr>
                <td>ID TRANS UPN</td>
                <td><input type="text" name="id_trans_upn"></td>
            </tr>
            <tr>
                <td>ID KONDEKTUR</td>
                <td><input type="text" name="id_kondektur"></td>
            </tr>
            <tr>
                <td>ID BUS</td>
                <td><input type="text" name="id_bus"></td>
            </tr>
            <tr>
                <td>ID DRIVER</td>
                <td><input type="text" name="id_driver"></td>
            </tr>
            <tr>
                <td>JUMLAH KM</td>
                <td><input type="text" name="jumlah_km"></td>
            </tr>
            <tr>
                <td>TANGGAL</td>
                <td><input type="text" name="tanggal"></td>
            </tr>
            <tr>
                <td><button type="submit" value="add" name="aksi">Tambahkan</button></td>
                <td><a href="TRANS_UPN.php">Kembali</a></td>
            </tr>
        </table>
    </form>
</body>
</html>