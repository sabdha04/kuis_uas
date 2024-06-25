<?php include('db.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Car</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="header">
        <h1>Edit Car</h1>
    </div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $Kode_mobil = $_GET['Kode_mobil'];
        $sql = "SELECT * FROM cars WHERE Kode_mobil='$Kode_mobil'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
        } else {
            echo "No car found";
            exit;
        }
    } elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Kode_mobil = $_POST['Kode_mobil'];
        $merk = $_POST['merk'];
        $Tahun_pembuatan = $_POST['Tahun_pembuatan'];
        $warna = $_POST['warna'];
        $harga = $_POST['harga'];
        $Nomor_mesin = $_POST['Nomor_mesin'];
        $Jenis_bensin = $_POST['Jenis_bensin'];

        $sql = "UPDATE cars SET merk='$merk', Tahun_pembuatan='$Tahun_pembuatan', warna='$warna', harga='$harga', Nomor_mesin='$Nomor_mesin', Jenis_bensin='$Jenis_bensin' WHERE Kode_mobil='$Kode_mobil'";

        if ($conn->query($sql) === TRUE) {
            echo "Car updated successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    ?>
    <form action="edit_car.php" method="post">
        <input type="hidden" name="Kode_mobil" value="<?php echo $row['Kode_mobil']; ?>">
        <label for="merk">Merk:</label><br>
        <input type="text" id="merk" name="merk" value="<?php echo $row['merk']; ?>"><br>
        <label for="Tahun_pembuatan">Tahun Pembuatan:</label><br>
        <input type="text" id="Tahun_pembuatan" name="Tahun_pembuatan" value="<?php echo $row['Tahun_pembuatan']; ?>"><br>
        <label for="warna">Warna:</label><br>
        <input type="text" id="warna" name="warna" value="<?php echo $row['warna']; ?>"><br>
        <label for="harga">Harga:</label><br>
        <input type="text" id="harga" name="harga" value="<?php echo $row['harga']; ?>"><br>
        <label for="Nomor_mesin">Nomor Mesin:</label><br>
        <input type="text" id="Nomor_mesin" name="Nomor_mesin" value="<?php echo $row['Nomor_mesin']; ?>"><br>
        <label for="Jenis_bensin">Jenis Bensin:</label><br>
        <input type="text" id="Jenis_bensin" name="Jenis_bensin" value="<?php echo $row['Jenis_bensin']; ?>"><br><br>
        <input type="submit" value="Update Car">
    </form>
    <br>
    <a href="./index.php">Kembali</a>
</body>
</html>
