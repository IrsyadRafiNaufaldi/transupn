<?php
    include 'KONEKSI.php';
    if(isset($_POST['aksi'])){
        if($_POST['aksi'] == "add"){
            $id_driver = $_POST['id_driver'];
            $nama = $_POST['nama'];
            $no_sim = $_POST['no_sim'];
            $alamat = $_POST['alamat'];

            $query = "INSERT INTO driver VALUES
            ('$id_driver', '$nama', '$no_sim', '$alamat')";
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
    <title>TAMBAH DATA DRIVER</title>
</head>
<body>
    <h1>TAMBAH DATA DRIVER</h1>

    <form action="TambahDataDRIVER.php" method="POST">
        <table>
            <tr>
                <td>ID DRIVER</td>
                <td><input type="text" name="id_driver"></td>
            </tr>
            <tr>
                <td>NAMA</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>NO SIM</td>
                <td><input type="text" name="no_sim"></td>
            </tr>
            <tr>
                <td>ALAMAT</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td><button type="submit" value="add" name="aksi">Tambahkan</button></td>
                <td><a href="DRIVER.php">Kembali</a></td>
            </tr>
        </table>
    </form>
</body>
</html>