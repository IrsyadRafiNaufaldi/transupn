<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUS</title>
    <link rel="stylesheet" href="beauty.css">
    <style>
            .status_operation {
                background-color: green;
                color: white;
            }
            .status_cadangan {
                background-color: yellow;
            }
            .status_broken {
                background-color: red;
            }
        </style>
</head>
<body>
    <?php
        include 'KONEKSI.php';
        $query = "SELECT * FROM bus";
        $result = mysqli_query($con, $query);
        ?>
 <div class="head">
        <h1>DATA BUS</h1>
    </div>

    <a href="TambahDataBUS.php"><button class="tambahdata">Tambah Data</button></a>

    <form method = "GET">
        <label for="status"><br>Filter berdasarkan status : </label>
        <select class="select_filter" id="status_id" name="status" required>
            <option value="all">-- Pilih status --</option>
            <option value="1" <?php if (isset($_GET['status']) && $_GET['status'] == 1) {
                echo " selected";
            } ?>>
                Beroperasi / Aktif</option>
            <option value="2" <?php if (isset($_GET['status']) && $_GET['status'] == 2) {
                echo " selected";
            } ?>>
                Cadangan</option>
            <option value="0" <?php if (isset($_GET['status']) && $_GET['status'] == 0) {
                echo " selected";
            } ?>>
                Dalam Perbaikan / Rusak</option>
        </select>
        <input type="submit" value="Filter">
    </form>
    <?php 
        //proses menampilkan data dari database:
        //siapkan query SQL
        if (isset($_GET['status'])) {
            $status = $_GET['status'];
            // $query = "SELECT * FROM bus WHERE status = $status";
            $query = "select bus.id_bus,bus.plat,bus.status,trans_upn.jumlah_km from bus join trans_upn on bus.id_bus = trans_upn.id_trans_upn WHERE status = '$status'";
        } else {
            // $query = "SELECT * FROM bus";
            $query = "select bus.id_bus,bus.plat,bus.status,trans_upn.jumlah_km from bus join trans_upn on bus.id_bus = trans_upn.id_trans_upn";
        }
        $result = mysqli_query($con,$query);
    ?>

        <table>
        <thead>
            <tr>
                <th>ID BUS</th>
                <th>PLAT</th>
                <th>STATUS</th>
            </tr>
        </thead>
        <tbody>

            <?php while($data = mysqli_fetch_array($result)): ?>
                <tr>
                    <td><?php echo $data['id_bus'];  ?></td>
                    <td><?php echo $data['plat'];  ?></td>
                    <td class="status_<?php if($data['status'] == 1){echo 'operation';} elseif ($data['status'] == 2){echo 'cadangan';} elseif ($data['status'] == 0){echo 'broken';} ?>">
                    <?php echo $data['status'];  ?></td>
                    <td>
                      <a href="<?php echo "DeleteBUS.php?id=".$data['id_bus']; ?>"> Delete</a>
                      
                      <a href="<?php echo "UpdateBUS.php?id=".$data['id_bus']; ?>"> Update</a>
                    </td>
                </tr>
            <?php endwhile ?>
        </tbody>
    </table>

    <a href="AWAL.php"><button class="tambahdata">Kembali</button></a>
</body>
</html