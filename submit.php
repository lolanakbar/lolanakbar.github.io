<?php

// **WARNING: Insecure way to store data!**
$email = $_POST['email'];
$message = $_POST['message'];

$data = $email . "\n" . $message . "\n\n"; // Separate emails with line breaks

$filename = "emails.txt"; // This file needs server-side write permissions

// **WARNING: Insecure way to write data!**
// **Additional Note:** Never store passwords or other sensitive data in plain text.
file_put_contents($filename, $data, FILE_APPEND); // Append data to the file

echo "Email sent successfully (Insecure Example)"; // Confirmation message

?>
