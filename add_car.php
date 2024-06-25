<?php include('db.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Car</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="header">
        <h1>Add New Car</h1>
    </div>
    <form action="add_car.php" method="post">
        <label for="Kode_mobil">Kode Mobil:</label><br>
        <input type="text" id="Kode_mobil" name="Kode_mobil"><br>
        <label for="merk">Merk:</label><br>
        <input type="text" id="merk" name="merk"><br>
        <label for="Tahun_pembuatan">Tahun Pembuatan:</label><br>
        <input type="text" id="Tahun_pembuatan" name="Tahun_pembuatan"><br>
        <label for="warna">Warna:</label><br>
        <input type="text" id="warna" name="warna"><br>
        <label for="harga">Harga:</label><br>
        <input type="text" id="harga" name="harga"><br>
        <label for="Nomor_mesin">Nomor Mesin:</label><br>
        <input type="text" id="Nomor_mesin" name="Nomor_mesin"><br>
        <label for="Jenis_bensin">Jenis Bensin:</label><br>
        <input type="text" id="Jenis_bensin" name="Jenis_bensin"><br><br>
        <input type="submit" value="Add Car">
    </form>
    <br>
    <a href="./index.php">Kembali</a>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Kode_mobil = $_POST['Kode_mobil'];
        $merk = $_POST['merk'];
        $Tahun_pembuatan = $_POST['Tahun_pembuatan'];
        $warna = $_POST['warna'];
        $harga = $_POST['harga'];
        $Nomor_mesin = $_POST['Nomor_mesin'];
        $Jenis_bensin = $_POST['Jenis_bensin'];

        $sql = "INSERT INTO cars (Kode_mobil, merk, Tahun_pembuatan, warna, harga, Nomor_mesin, Jenis_bensin) VALUES ('$Kode_mobil', '$merk', '$Tahun_pembuatan', '$warna', '$harga', '$Nomor_mesin', '$Jenis_bensin')";

        if ($conn->query($sql) === TRUE) {
            echo "New car added successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    ?>
</body>
</html>
