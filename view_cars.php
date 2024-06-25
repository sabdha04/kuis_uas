<?php include('db.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>View Cars</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="header">
        <h1>Car List</h1>
    </div>
    <table border="1">
        <tr>
            <th>Kode Mobil</th>
            <th>Merk</th>
            <th>Tahun Pembuatan</th>
            <th>Warna</th>
            <th>Harga</th>
            <th>Nomor Mesin</th>
            <th>Jenis Bensin</th>
            <th>Actions</th>
        </tr>
        <?php
        $sql = "SELECT * FROM cars";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>".$row["Kode_mobil"]."</td>
                        <td>".$row["merk"]."</td>
                        <td>".$row["Tahun_pembuatan"]."</td>
                        <td>".$row["warna"]."</td>
                        <td>".$row["harga"]."</td>
                        <td>".$row["Nomor_mesin"]."</td>
                        <td>".$row["Jenis_bensin"]."</td>
                        <td>
                            <a href='edit_car.php?Kode_mobil=".$row["Kode_mobil"]."'>Edit</a> |
                            <a href='delete_car.php?Kode_mobil=".$row["Kode_mobil"]."'>Delete</a>
                        </td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='8'>No cars found</td></tr>";
        }
        ?>
    </table>
    <br>
    <a href="./index.php">Kembali</a>
</body>
</html>
