<?php
    include('KONEKSI.php');

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        if (isset($_GET['id'])) {
            $idBus = $_GET['id'];
            $query = "DELETE FROM bus WHERE id_bus = '$idBus'";

            $result = mysqli_query($con, $query);

            header('Location: BUS.php?status='.$status);
        }
    }
?>