<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>challenge10</title>
</head>
<body>
<form method="POST" action="challenge10.php">
        Masukkan Nama Anda = <input type="text" name="namaku" id="nama" required><br>
        Masukkan Angka Pertama (1-10) = <input type="number" name="angka_pertama" id="angka1" min="1" max="10" required><br>
        Masukkan Angka Kedua (1-10) = <input name="number" name="angka_kedua" id="angka2 " min="1" max="10" required></input><br>
        <input type="submit" value="hitung">
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nama = htmlspecialchars($_POST['nama'])
    $angka1 = (int)$_POST['angka1'];
    $angka2 = (int)$_POST['angka2'];

    $tambah = $angka1 + $angka2;
    $kurang = $angka1 - $angka2;
    $perkalian = $angka1 * $angka2;
    $pembagian = $angka1 / $angka2;
    $modulus = $angka1 % $angka2;

    echo "<h2>pehitungan aritmtika</h2>";
    echo "<br>$tambah = $angka1 + $angka2";
    echo "<br>$kurang = $angka1 - $angka2";
    echo "<br>$perkalian = $angka1 * $angka2";
    echo "<br>$pembagian = $angka1 / $angka2";
    echo "<br>$modulus = $angka1 % $angka2";
}
    
?>