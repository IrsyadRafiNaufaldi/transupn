<?php
    include('KONEKSI.php');

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        if (isset($_GET['id'])) {
            $idTransUPN_update = $_GET['id'];
            $query = "SELECT * FROM trans_upn WHERE id_trans_upn = $idTransUPN_update";

            $result = mysqli_query($con,$query);
        }
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $idTransUPN = $_POST['id_trans_upn'];
        $idKondektur = $_POST['id_kondektur'];
        $idBus = $_POST['id_bus'];
        $idDriver = $_POST['id_driver'];
        $jumlahKM = $_POST['jumlah_km'];
        $tanggal = $_POST['tanggal'];

        $sql = "UPDATE trans_upn SET id_trans_upn='$idTransUPN', id_kondektur='$idKondektur', id_bus='$idBus', id_driver='$idDriver',jumlah_km='$jumlahKM', tanggal='$tanggal' WHERE id_trans_upn=$idTransUPN";

        $result = mysqli_query($con,$sql);
       
        header('Location: TRANS_UPN.php?status='.$status);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE TRANS UPN</title>
</head>
<body>
                <h2 style="margin: 30px 0 30px;">Update Data Trans Bus</h2>
                <form action="UpdateTRANS_UPN.php" method="POST">
                    <?php while($data = mysqli_fetch_array($result)): ?>
                    <div>
                        <label>ID Trans UPN</label>
                        <input type="text" placeholder="Intinya Angka" value="<?= $data['id_trans_upn'] ?>" name="id_trans_upn" required="required">
                    </div>
                    <div>
                        <label>ID Kondektur</label>    
                        <input type="text" placeholder="Angka Acak" value="<?= $data['id_kondektur'] ?>" name="id_kondektur" required="required">
                    </div>
                    <div>
                        <label>ID BUS</label>
                        <input type="text" placeholder="Angka Acak" value="<?= $data['id_bus'] ?>" name="id_bus" required="required">
                    </div>
                    <div>
                        <label>ID Driver</label>
                        <input type="text" placeholder="Acak Wes" value="<?= $data['id_driver'] ?>" name="id_driver" required="required">
                    </div>
                    <div>
                        <label>Jumlah KM</label>
                        <input type="text" placeholder="Angka KM" value="<?= $data['jumlah_km'] ?>" name="jumlah_km" required="required">
                    </div>
                    <div>
                        <label>Tanggal</label>
                        <input type="text" placeholder="2022-11-16" value="<?= $data['tanggal'] ?>" name="tanggal" required="required">
                    </div>
                    <?php endwhile ?>
                    <button type="submit">Save</button>
                </form>
            </main>
        </div>
    </div>
</body>
</html>