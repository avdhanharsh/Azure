<?php
include '../components/connect.php';
session_start();
date_default_timezone_set("Asia/Calcutta");

$paymentid = isset($_POST['payment_id']) ? $_POST['payment_id'] : '';
$playlist_id = isset($_POST['product_id']) ? $_POST['product_id'] : '';  // Use product_id instead of id
$username = isset($_POST['username']) ? $_POST['username'] : ''; // Fetch the username
$dt = date('Y-m-d h:i:s');

// Using prepared statements to prevent SQL injection
$sql = "INSERT INTO orders (product_id, payment_id, added_date, username) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->execute([$playlist_id, $paymentid, $dt,$username]);

if ($stmt) {
    echo 'done';
    $_SESSION['paymentid'] = $paymentid;
} else {
    echo "Error: " . $sql . "<br>" . $stmt->errorInfo()[2];
}
?>
