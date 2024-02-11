<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$Username = $_POST['name'];
$Couplename = $_POST['couplename'];
$Email = $_POST['email'];
$Phonenumber = $_POST['Number'];
$Date = $_POST['date'];
$Message = $_POST['message'];

$conn = new mysqli('localhost', 'root', '', 'coupletravel');

if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
} else {
    $checkStmt = $conn->prepare("SELECT Email FROM coupledata WHERE Email = ?");
    $checkStmt->bind_param("s", $Email);
    $checkStmt->execute();
    $checkStmt->store_result();

    if ($checkStmt->num_rows > 0) {
        // Email already exists, notify the user
        echo '<p style="color: red;">Error: This email is already in use.</p>';
    } else {
        $stmt = $conn->prepare("INSERT INTO coupledata (Username, Couplename, Email, Phonenumber, Date, Message) VALUES (?, ?, ?, ?, ?, ?)");

        // Check for prepare success
        if ($stmt !== false) {
            $bindSuccess = $stmt->bind_param("ssssss", $Username, $Couplename, $Email, $Phonenumber, $Date, $Message);

            // Check for bind_param success
            if ($bindSuccess) {
                $executeSuccess = $stmt->execute();

                // Check for execute success
                if ($executeSuccess) {
                    echo '<p style="color: green;">Your data has been successfully submitted.</p>';
                } else {
                    die('Error in execution: ' . $stmt->error);
                }

                $stmt->close();
            } else {
                die('Error in binding parameters: ' . $stmt->error);
            }
        } else {
            die('Error in preparing statement: ' . $conn->error);
        }
    }

    $checkStmt->close();
    $conn->close();
}
?>
