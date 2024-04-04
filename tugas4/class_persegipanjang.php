<?php
// Include file yang berisi definisi class persegipanjang
require_once 'persegipanjang.php';

$luas = $keliling = null;

if (isset($_POST['submit'])) {
    // Tangkap data dari form dan pastikan bahwa input adalah angka
    $panjang = isset($_POST['panjang']) ? floatval($_POST['panjang']) : null;
    $lebar = isset($_POST['lebar']) ? floatval($_POST['lebar']) : null;

    if ($panjang !== null && $lebar !== null) {
        // Buat objek persegipanjang
        $persegipanjang = new persegipanjang($panjang, $lebar);

        // Hitung luas dan keliling
        $luas = $persegipanjang->hitungLuas();
        $keliling = $persegipanjang->hitungKeliling();
    } else {
        // Pesan kesalahan jika input tidak valid atau tidak lengkap
        echo "<script>alert('Masukkan panjang dan lebar yang valid!')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Luas dan Keliling persegi panjang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Menghitung Luas dan Keliling Persegi Panjang</h1>
        <form method="POST">
            <div class="form-group row">
                <label for="panjang" class="col-sm-2 col-form-label">Panjang</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="panjang" name="panjang" placeholder="Masukkan panjang">
                </div>
            </div>
            <div class="form-group row">
                <label for="lebar" class="col-sm-2 col-form-label">Lebar</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="lebar" name="lebar" placeholder="Masukkan lebar">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" name="submit" class="btn btn-primary">Hitung</button>
                </div>
            </div>
        </form>

        <?php if ($luas !== null && $keliling !== null): ?>
        <div class="mt-4">
            <h3>Hasil Perhitungan</h3>
            <p>Luas Persegi Panjang: <?php echo $luas; ?></p>
            <p>Keliling Persegi Panjang: <?php echo $keliling; ?></p>
        </div>
        <?php endif; ?>
    </div>
</body>
</html>
