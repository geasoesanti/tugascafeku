<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Panggil File CSS Eksternal -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="dashboard-container">
        <!-- Kartu 1: Atur Pengguna -->
        <div class="card">
            <div class="card-icon">
                <i class="fa-solid fa-user-group"></i>
            </div>
            <a href="pengguna.php" class="card-link">
            <h2 class="card-title"><strong>PENGGUNA</strong></h2>
            </a>
            
        </div>

        <!-- Kartu 2: Atur Produk -->
        <div class="card">
            <div class="card-icon">
                <i class="fa-solid fa-box-open"></i>
            </div>
              <a href="produk.php" class="card-link">  
            <h2 class="card-title"><strong>PRODUK</strong></h2>
            
            </a>
        </div>
    </div>

</body>
</html>