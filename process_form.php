<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $data = "Name: " . $name . "\nEmail: " . $email . "\nMessage: " . $message . "\n\n";

    // Specify the file where you want to store the data
    $file = 'user_responses.txt';

    // Write the data to the file
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

    echo "Your response has been recorded. Thank you!";
}
?>

