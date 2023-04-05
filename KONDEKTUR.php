<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KONDEKTUR</title>
    <link rel="stylesheet" href="beauty.css">
</head>
<body>
    <?php
        include 'KONEKSI.php';
        $datakondektur = "SELECT * FROM kondektur";
        $sql_kondektur = mysqli_query($con, $datakondektur);
    ?>

    <div class="head">
        <h1>DATA KONDEKTUR</h1>
    </div>

    <a href="TambahDataKONDEKTUR.php"><button class="tambahdata">Tambah Data</button></a>
    <a href="PendapatanKONDEKTUR.php"><button class="tambahdata">Pendapatan</button></a>
    
    <table>
        <thead>
            <tr>
                <th>ID KONDEKTUR</th>
                <th>NAMA</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $query = "SELECT * FROM kondektur";
                $result = mysqli_query($con ,$query);
            ?>

            <?php while($data = mysqli_fetch_array($result)): ?>
                <tr>
                    <td><?php echo $data['id_kondektur'];  ?></td>
                    <td><?php echo $data['nama'];  ?></td>
                    <td>
                      <a href="<?php echo "DeleteKONDEKTUR.php?id=".$data['id_kondektur']; ?>"> Delete</a>
                      
                      <a href="<?php echo "UpdateKONDEKTUR.php?id=".$data['id_kondektur']; ?>"> Update</a>
                    </td>
                </tr>
            <?php endwhile ?>
        </tbody>
    </table>

    <a href="AWAL.php"><button class="tambahdata">Kembali</button></a>
</body>
</html