<?php
include('db.php');

$Kode_mobil = $_GET['Kode_mobil'];
$sql = "DELETE FROM cars WHERE Kode_mobil='$Kode_mobil'";

if ($conn->query($sql) === TRUE) {
    echo "Car deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

header("Location: view_cars.php");
?>
