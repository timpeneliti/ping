<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ip = $_POST['ip'];

    // Perform ping (adjust the command based on your system)
    exec("ping $ip", $output, $result);

    // Insert ping result into database
    $resultText = implode("\n", $output);
    $insertSql = "INSERT INTO ping_results (ip, result) VALUES ('$ip', '$resultText')";
    $conn->query($insertSql);

    // Display result
    echo "<h2>Ping Result for $ip</h2>";
    echo "<pre>$resultText</pre>";
} else {
    header("Location: index.php");
}
?>
