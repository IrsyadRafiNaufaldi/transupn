<?php
    include('KONEKSI.php');

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        if (isset($_GET['id'])) {
            $idDriver = $_GET['id'];
            $query = "DELETE FROM driver WHERE id_driver = '$idDriver'";

            $result = mysqli_query($con, $query);

            header('Location: DRIVER.php?status='.$status);
        }
    }
?>