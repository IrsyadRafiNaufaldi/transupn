<?php
include('KONEKSI.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>GAJI KONDEKTUR</title>
</head>

<body>
    <div class="container">
        <h2 align="center">DATA GAJI KONDEKTUR</h2>
        <table style="width:100%" cellspacing="0">
    
            <tr class="akhir">
                <td colspan="6">
                    <table border="1" align="center">
                        <thead>
                            <form action="" method="post">
                                <label for="bulan">Pilih Bulan:</label>
                                <select name="bulan" id="bulan">
                                    <option value="01">Januari</option>
                                    <option value="02">Februari</option>
                                    <option value="03">Maret</option>
                                    <option value="04">April</option>
                                    <option value="05">Mei</option>
                                    <option value="06">Juni</option>
                                    <option value="07">Juli</option>
                                    <option value="08">Agustus</option>
                                    <option value="09">September</option>
                                    <option value="10">Oktober</option>
                                    <option value="11">November</option>
                                    <option value="12">Desember</option>
                                </select>
                                <button type="submit">Tampilkan</button>
                            </form>
                            <tr bgcolor="tan">
                                <th>ID Kondektur</th>
                                <th>Nama</th>
                                <th>Total KM</th>
                                <th>Gaji</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['bulan'])) {
                                $bulan = $_POST['bulan'];
                                //...
                            } else {
                                $bulan = "01";
                            }
                            ?>

                            <h2 style="text-align:center">PENDAPATAN KONDEKTUR BULAN KE-
                                <?php echo $bulan ?>
                            </h2>
                            <?php
                            $query = "SELECT kondektur.id_kondektur, kondektur.nama, SUM(trans_upn.jumlah_km) as total_km
                                            FROM kondektur
                                            JOIN trans_upn ON kondektur.id_kondektur = trans_upn.id_kondektur
                                            WHERE MONTH(trans_upn.tanggal) = '$bulan' AND YEAR(trans_upn.tanggal) = YEAR(CURRENT_DATE())
                                            GROUP BY kondektur.id_kondektur";

                            $result = mysqli_query($con, $query);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <tr>
                                        <td>
                                            <?php
                                            echo $row['id_kondektur'];
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            echo $row['nama'];
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            echo $row['total_km'];
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            echo "Rp." . $row['total_km'] * 1500;
                                            ?>
                                        </td>
                                    </tr>

                                    <?php
                                }
                                mysqli_free_result($result);
                            } else {
                                ?>
                            </tbody>

                    </td>

                </tr>
            </table>
            <?php
            echo "<i style='margin-left:70px'>Tidak ada data.<i/>";
                            }
                            mysqli_close($con);
                            ?>
        <a href="KONDEKTUR.php"><button style="margin-top:700px; float:left;" class="tambahdata">Kembali</button></a>
</body>

</html>