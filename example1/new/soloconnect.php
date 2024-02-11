<?php
$Username = $_POST['name'];
$Email = $_POST['email'];
$Phonenumber = $_POST['Number'];
$Message = $_POST['message'];
$Date = $_POST['date'];

$conn = new mysqli('localhost', 'root', '', 'solotravel');
if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
} else {
    // Check if the email already exists
    $checkStmt = $conn->prepare("SELECT Email FROM solodata WHERE Email = ?");
    $checkStmt->bind_param("s", $Email);
    $checkStmt->execute();
    $checkStmt->store_result();

    if ($checkStmt->num_rows > 0) {
        // Email already exists, notify the user
        echo '<p style="color: red;">Error: This email is already in use.</p>';
    } else {
        // Email is not in use, proceed with the insertion
        $stmt = $conn->prepare("INSERT INTO solodata (Username, Email, Phonenumber, Date, Message) VALUES (?, ?, ?, ?, ?)");

        // Check for bind_param success
        if (!$stmt) {
            die('Error in preparing statement: ' . $conn->error);
        }

        $stmt->bind_param("sssss", $Username, $Email, $Phonenumber, $Date, $Message);
        $stmt->execute();

        // Check for execute success
        if ($stmt->error) {
            die('Error in execution: ' . $stmt->error);
        }

        echo '<p style="color: green;">Your data has been successfully submitted.</p>';

        // Close the statement
        $stmt->close();
    }

    // Close the check statement and connection
    $checkStmt->close();
    $conn->close();
}
?>
