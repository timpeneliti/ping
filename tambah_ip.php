<?php
include 'koneksi.php';

$ipToInsert = "8.8.8.8";

$checkQuery = "SELECT * FROM ping_data WHERE ip_address = '$ipToInsert'";
$checkResult = $conn->query($checkQuery);

if ($checkResult->num_rows == 0) {
    $insertQuery = "INSERT INTO ping_data (ip_address, status, response_time) VALUES ('$ipToInsert', 'Pending', NULL)";
    $conn->query($insertQuery);

    echo "Alamat IP $ipToInsert berhasil ditambahkan ke dalam database.";
} else {
    echo "Alamat IP $ipToInsert sudah ada dalam database.";
}

$conn->close();
?>
