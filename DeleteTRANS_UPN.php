<?php
    include('KONEKSI.php');

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        if (isset($_GET['id'])) {
            $idTransUPN = $_GET['id'];
            $query = "DELETE FROM trans_upn WHERE id_trans_upn = '$idTransUPN'";

            $result = mysqli_query($con, $query);

            header('Location: TRANS_UPN.php?status='.$status);
        }
    }
?>