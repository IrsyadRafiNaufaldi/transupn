<?php
    include 'KONEKSI.php';
    if(isset($_POST['aksi'])){
        if($_POST['aksi'] == "add"){
            $id_kondektur = $_POST['id_kondektur'];
            $nama = $_POST['nama'];

            $query = "INSERT INTO kondektur VALUES
            ('$id_kondektur', '$nama')";
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
    <title>TAMBAH DATA KONDEKTUR</title>
</head>
<body>
    <h1>TAMBAH DATA KONDEKTUR</h1>

    <form action="TambahDataKONDEKTUR.php" method="POST">
        <table>
            <tr>
                <td>ID DRIVER</td>
                <td><input type="text" name="id_kondektur"></td>
            </tr>
            <tr>
                <td>NAMA</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td><button type="submit" value="add" name="aksi">Tambahkan</button></td>
                <td><a href="KONDEKTUR.php">Kembali</a></td>
            </tr>
        </table>
    </form>
</body>
</html>