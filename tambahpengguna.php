<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pengguna</title>
</head>
<body>
    <form action="api/Pengguna/insertpengguna.php" method="post">
        <div class="card">
            <p class="judul">Form Tambah Pengguna</p>

            <input name="nama" class="inputuser" type="text" placeholder="Nama Pengguna" />
            <input name="username" class="inputuser" type="text" placeholder="Username" />
            <input name="password" class="inputuser" type="password" placeholder="Password" />
            <input name="alamat" class="inputuser" type="text" placeholder="Alamat" />
            <input name="nohp" class="inputuser" type="text" placeholder="Nomor HP" />
            <button type="submit" class="tombol">Tambah Pengguna</button>
        </div>
    </form>
</body>
</html>