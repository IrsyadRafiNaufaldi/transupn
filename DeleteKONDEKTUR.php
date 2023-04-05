<?php
    include('KONEKSI.php');

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        if (isset($_GET['id'])) {
            $idKondektur = $_GET['id'];
            $query = "DELETE FROM kondektur WHERE id_kondektur = '$idKondektur'";

            $result = mysqli_query($con, $query);

            header('Location: KONDEKTUR.php?status='.$status);
        }
    }
?>