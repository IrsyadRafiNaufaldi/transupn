<?php
    include 'KONEKSI.php';
    if(isset($_POST['aksi'])){
        if($_POST['aksi'] == "add"){
            $id_bus = $_POST['id_bus'];
            $plat = $_POST['plat'];
            $status = $_POST['status'];

            $query = "INSERT INTO bus VALUES
            ('$id_bus', '$plat', '$status')";
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
    <title>TAMBAH DATA BUS</title>
</head>
<body>
    <h1>TAMBAH DATA BUS</h1>

    <form action="TambahDataBus.php" method="POST">
        <table>
            <tr>
                <td>ID BUS</td>
                <td><input type="text" name="id_bus"></td>
            </tr>
            <tr>
                <td>PLAT</td>
                <td><input type="text" name="plat"></td>
            </tr>
            <tr>
                <td>STATUS</td>
                <td><input type="text" name="status"></td>
            </tr>
            <tr>
                <td><button type="submit" value="add" name="aksi">Tambahkan</button></td>
                <td><a href="BUS.php">Kembali</a></td>
            </tr>
        </table>
    </form>
</body>
</html>