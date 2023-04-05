<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DRIVER</title>
    <link rel="stylesheet" href="beauty.css">
</head>
<body>
    <?php
        include 'KONEKSI.php';
        $datadriver = "SELECT * FROM driver";
        $sql_driver = mysqli_query($con, $datadriver);
    ?>

    <div class="head">
        <h1>DATA DRIVER</h1>
    </div>

    <a href="TambahDataDRIVER.php"><button class="tambahdata">Tambah Data</button></a>
    <a href="PendapatanDRIVER.php"><button class="tambahdata">Pendapatan</button></a>
    
    <table>
        <thead>
            <tr>
                <th>ID DRIVER</th>
                <th>NAMA</th>
                <th>NO SIM</th>
                <th>ALAMAT</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $query = "SELECT * FROM driver";
                $result = mysqli_query($con ,$query);
            ?>

            <?php while($data = mysqli_fetch_array($result)): ?>
                <tr>
                    <td><?php echo $data['id_driver'];  ?></td>
                    <td><?php echo $data['nama'];  ?></td>
                    <td><?php echo $data['no_sim'];  ?></td>
                    <td><?php echo $data['alamat'];  ?></td>
                    <td>
                      <a href="<?php echo "DeleteDRIVER.php?id=".$data['id_driver']; ?>"> Delete</a>
                      
                      <a href="<?php echo "UpdateDRIVER.php?id=".$data['id_driver']; ?>"> Update</a>
                    </td>
                </tr>
            <?php endwhile ?>
        </tbody>
    </table>

    <a href="AWAL.php"><button class="tambahdata">Kembali</button></a>
</body>
</html