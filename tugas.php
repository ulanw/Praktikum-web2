<?php
    echo "<h3>Soal No 1 Looping I Love PHP</h3>";

        echo "LOOPING PERTAMA<br>";
        // Looping pertama (ascending) untuk angka genap
        for ($i = 2; $i <= 20; $i += 2) {
            echo "$i - I Love PHP<br>";
        }

        echo "<br>LOOPING KEDUA<br>";
        // Looping kedua (descending) untuk angka genap
        for ($i = 20; $i >= 2; $i -= 2) {
            echo "$i - I Love PHP<br>";
        }


    echo "<h3>Soal No 2 Function Tentukan Nilai</h3>";
?>

<?php
// Function untuk menentukan nilai
function tentukan_nilai($nilai) {
    if ($nilai >= 85 && $nilai <= 100) {
        return "Sangat Baik";
    } elseif ($nilai >= 70 && $nilai < 85) {
        return "Baik";
    } elseif ($nilai >= 60 && $nilai < 70) {
        return "Cukup";
    } else {
        return "Kurang";
    }
}

// Proses form jika nilai sudah dimasukkan
if (isset($_POST['submit'])) {
    $nilai = $_POST['nilai'];
    $evaluasi = tentukan_nilai($nilai);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penilaian</title>
</head>
<body>
    <h2>Penilaian</h2>
    <form method="post" action="">
        <label for="nilai">Masukkan nilai:</label>
        <input type="number" id="nilai" name="nilai" min="0" max="100" required>
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php if (isset($evaluasi)): ?>
        <p>Hasil nilai <?php echo $nilai; ?> adalah: <?php echo $evaluasi; ?></p>
    <?php endif; ?>
</body>
</html>

