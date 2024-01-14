<?php
include 'koneksi.php';

$query = "SELECT * FROM ping_data ORDER BY timestamp DESC";
$result = $conn->query($query);

while ($row = $result->fetch_assoc()) {
    echo "IP Address: " . $row['ip_address'] . "<br>";
    echo "Status: " . $row['status'] . "<br>";
    echo "Response Time: " . $row['response_time'] . " ms<br>";
    echo "Timestamp: " . $row['timestamp'] . "<br>";
    echo "<hr>";
}

$conn->close();
?>
