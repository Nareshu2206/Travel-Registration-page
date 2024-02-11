<?php
$Username = $_POST['name'];
$Children = $_POST['children'];
$Email = $_POST['email'];
$Phonenumber = $_POST['Number'];
$Date = $_POST['date'];
$Message = $_POST['message'];

$conn = new mysqli('localhost', 'root', '', 'familytravel');
if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
} else {
    // Check if the email already exists
    $checkStmt = $conn->prepare("SELECT Email FROM couple WHERE Email = ?");
    $checkStmt->bind_param("s", $Email);
    $checkStmt->execute();
    $checkStmt->store_result();



    
    if ($checkStmt->num_rows > 0) {
        // Email already exists, notify the user
        echo '<p style="color: red;">Error: This email is already in use.</p>';
    } else {
        // Email is not in use, proceed with the insertion
        $stmt = $conn->prepare("INSERT INTO couple (Username, children, Email, Phonenumber, Date, Message) VALUES (?, ?, ?, ?, ?, ?)");

        // Check for bind_param success
        if (!$stmt) {
            die('Error in preparing statement: ' . $conn->error);
        }

        // Bind parameters
        $bindSuccess = $stmt->bind_param("ssssss", $Username, $Children, $Email, $Phonenumber, $Date, $Message);

        // Check for bind_param success
        if (!$bindSuccess) {
            die('Error in binding parameters: ' . $stmt->error);
        }

        // Execute the statement
        $executeSuccess = $stmt->execute();

        // Check for execute success
        if (!$executeSuccess) {
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
