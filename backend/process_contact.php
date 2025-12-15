<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Get data from the form and "sanitize" it (clean up bad characters)
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Prepare the SQL statement (This prevents hacking/SQL injection)
    $stmt = $conn->prepare("INSERT INTO contacts (name, email, subject, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $subject, $message);

    // Execute the query and check if it worked
    if ($stmt->execute()) {

        echo "<script>
                alert('Thank you! Your message has been sent successfully.');
                window.location.href='../contact.php';
              </script>";
    } else {

        echo "Error: " . $stmt->error;
    }

    // 4. Close the connection
    $stmt->close();
    $conn->close();
}
?>