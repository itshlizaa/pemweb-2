<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $nim = isset($_POST['nim']) ? $_POST['nim'] : '';
    $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
    $jk = isset($_POST['jk']) ? $_POST['jk'] : '';
    $studi = isset($_POST['studi']) ? $_POST['studi'] : '';
    $skill = isset($_POST['skill']) ? $_POST['skill'] : [];
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $domisili = isset($_POST['domisili']) ? $_POST['domisili'] : '';

    $nilai = 0;
    foreach ($skill as $value) {
        switch ($value) {
            case 'html':
            case 'css':
                $nilai += 10;
                break;
            case 'javascript':
            case 'bootstrap':
                $nilai += 20;
                break;
            case 'php':
            case 'python':
                $nilai += 30;
                break;
            case 'java':
                $nilai += 50;
                break;
            default:
                $nilai += 0;
                break;
        }
    }

    function kategori_skill($_nilai)
    {
        if ($_nilai >= 100 && $_nilai <= 170) {
            return "Sangat Baik";
        } elseif ($_nilai >= 60 && $_nilai < 100) {
            return "Baik";
        } elseif ($_nilai >= 40 && $_nilai < 60) {
            return "Cukup";
        } elseif ($_nilai >= 0 && $_nilai < 40) {
            return "Kurang";
        } else {
            return "Tidak Memadai";
        }
    }

    $kategori_skill = kategori_skill($nilai);

    // Output the registration result
    echo "<h4>Hasil : </h4>";
    echo "<p>Nama : $nama </p>";
    echo "<p>NIM : $nim </p>";
    echo "<p>Jenis Kelamin : $jk </p>";
    echo "<p>Domisili : $domisili </p>";
    echo "<p>Program Studi : $studi </p>";
    echo "<p>Email : $email </p>";
    echo "<p>Skill: " . implode(", ", $skill) . "</p>";
    echo "<p>Skor Nilai : $nilai </p>";
    echo "<p>Kategori Skill : $kategori_skill </p>";
}
?>