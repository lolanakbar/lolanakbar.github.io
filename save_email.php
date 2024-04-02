<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the email from the form
    $email = $_POST["email"];

    // File path to save the emails
    $file = "emails.txt";

    // Save the email to the file (append mode)
    file_put_contents($file, $email . PHP_EOL, FILE_APPEND);

    // Redirect back to the form after saving the email
    header("Location: index.html");
    exit;
} else {
    // Redirect to the form if accessed directly
    header("Location: index.html");
    exit;
}
?>