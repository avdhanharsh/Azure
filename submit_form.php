<?php
$serverName = "techeduca-server.database.windows.net";
$database = "techeduca-database";
$username = "azure";
$password = "Admin@123456";

// Create connection
$conn = new PDO("sqlsrv:server=$serverName;Database=$database", $username, $password);

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Prepare SQL statement
    $sql = "INSERT INTO ContactForm (name, email, message) VALUES (:name, :email, :message)";

    // Prepare and bind parameters
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':message', $message);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Form submitted successfully!";
    } else {
        echo "Error submitting form.";
    }
}
?>
