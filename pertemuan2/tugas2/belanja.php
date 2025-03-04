<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja Online</title>
</head>
<body class="container mt-4">
    <h2>Belanja Online</h2>
    
    <form method="POST" action="">
        <div class="mb-3">
            <label class="form-label">Customer</label>
            <input type="text" class="form-control" name="customer" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Pilih Produk</label><br>
            <input type="radio" name="produk" value="TV" required> TV
            <input type="radio" name="produk" value="Kulkas"> Kulkas
            <input type="radio" name="produk" value="Mesin Cuci"> Mesin Cuci
        </div>

        <div class="mb-3">
            <label class="form-label">Jumlah</label>
            <input type="number" class="form-control" name="jumlah" required>
        </div>

        <button type="submit" class="btn btn-primary" name="proses">Kirim</button>
    </form>

    <hr>

    <?php

    if (isset($_POST['proses'])) {
        // Validasi apakah semua input telah diisi
        if (!empty($_POST["customer"]) && !empty($_POST["produk"]) && !empty($_POST["jumlah"])) {
            $customer = htmlspecialchars($_POST["customer"]);
            $produk = $_POST["produk"];
            $jumlah = intval($_POST["jumlah"]);

            // Daftar harga produk
            $harga_produk = [
                "TV" => 5000000,
                "Kulkas" => 8000000,
                "Mesin Cuci" => 10000000
            ];

            // Periksa apakah produk ada dalam daftar harga
            if (array_key_exists($produk, $harga_produk)) {
                $total_belanja = $harga_produk[$produk] * $jumlah;

                // Tampilkan hasil belanja
                echo "<h4>Hasil Belanja</h4>";
                echo "Nama Customer: <strong>$customer</strong><br>";
                echo "Produk Pilihan: <strong>$produk</strong><br>";
                echo "Jumlah Beli: <strong>$jumlah</strong><br>";
                echo "Total Belanja: <strong>Rp " . number_format($total_belanja, 0, ',', '.') . "</strong><br>";
            } else {
                echo "<div class='alert alert-danger'>Produk tidak ditemukan!</div>";
            }
        } else {
            echo "<div class='alert alert-danger'>Semua field harus diisi!</div>";
        }
    }
    ?>
</body>
</html>
