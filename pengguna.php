<?php 
    include('./api/koneksi.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pengguna</title>
</head>
<body>
    <div class="main">
        <p class="judultabel">Daftar Pengguna</p>
        <a href="tambahpengguna.php">Tambah Pengguna</a>
        <?php
            include("api/Pengguna/selectpengguna.php")
        ?>
        <table class="tabel">
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Alamat</th>
                <th>No HP</th>
                <th>Aksi</th>
            </tr>

            <?php
                for ($i=0; $i < count($datas); $i++) {
                    ?>
                    <tr>
                        <td><?php echo $i + 1; ?></td>
                        <td><?php echo $datas[$i]['nama'] ?></td>
                        <td><?php echo $datas[$i]['username'] ?></td>
                        <td><?php echo $datas[$i]['alamat'] ?></td>
                        <td><?php echo $datas[$i]['nohp'] ?></td>
                    </tr>
                    <?php
                }
            ?>
        </table>
    </div>
</body>
</html>