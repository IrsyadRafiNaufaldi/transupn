<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRANS UPN</title>
    <link rel="stylesheet" href="beauty.css">
</head>
<body>
    <?php
        include 'KONEKSI.php';
        $datatransupn = "SELECT * FROM trans_upn";
        $sql_transupn = mysqli_query($con, $datatransupn);
    ?>

    <div class="head">
        <h1>DATA TRANS UPN</h1>
    </div>

    <a href="TambahDataTRANS_UPN.php"><button class="tambahdata">Tambah Data</button></a>
    
    <table>
        <thead>
            <tr>
                <th>ID TRANS UPN</th>
                <th>ID KONDEKTUR</th>
                <th>ID BUS</th>
                <th>ID DRIVER</th>
                <th>JUMLAH KM</th>
                <th>TANGGAL</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $query = "SELECT * FROM trans_upn";
                $result = mysqli_query($con ,$query);
            ?>

            <?php while($data = mysqli_fetch_array($result)): ?>
                <tr>
                    <td><?php echo $data['id_trans_upn'];  ?></td>
                    <td><?php echo $data['id_kondektur'];  ?></td>
                    <td><?php echo $data['id_bus'];  ?></td>
                    <td><?php echo $data['id_driver'];  ?></td>
                    <td><?php echo $data['jumlah_km'];  ?></td>
                    <td><?php echo $data['tanggal'];  ?></td>
                    <td>
                      <a href="<?php echo "DeleteTRANS_UPN.php?id=".$data['id_trans_upn']; ?>"> Delete</a>
                      
                      <a href="<?php echo "UpdateTRANS_UPN.php?id=".$data['id_trans_upn']; ?>"> Update</a>
                    </td>
                </tr>
            <?php endwhile ?>
        </tbody>
    </table>

    <a href="AWAL.php"><button class="tambahdata">Kembali</button></a>
</body>
</html