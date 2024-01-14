<?php
include 'config.php';

$sql = "SELECT * FROM ip_addresses";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ping App</title>
</head>
<body>
    <h2>IP Addresses to Ping</h2>
    <ul>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<li>{$row['ip']}</li>";
            }
        } else {
            echo "<li>No IP addresses found</li>";
        }
        ?>
    </ul>

    <form action="ping.php" method="post">
        <label for="ip">Enter IP to Ping: </label>
        <input type="text" name="ip" required>
        <button type="submit">Ping</button>
    </form>
</body>
</html>
