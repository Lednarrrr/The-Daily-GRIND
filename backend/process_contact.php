<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // 1. Get data from the form and "sanitize" it (clean up bad characters)
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // 2. Prepare the SQL statement (This prevents hacking/SQL injection)
    $stmt = $conn->prepare("INSERT INTO contacts (name, email, subject, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $subject, $message);

    // 3. Execute the query and check if it worked
    if ($stmt->execute()) {
        // Success! Alert the user and go back to the contact page
        echo "<script>
                alert('Thank you! Your message has been sent successfully.');
                window.location.href='../contact.php';
              </script>";
    } else {
        // Error
        echo "Error: " . $stmt->error;
    }

    // 4. Close the connection
    $stmt->close();
    $conn->close();
}
?>