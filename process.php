<?php
if (isset($_POST['submit'])) {

// Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];


    if (empty($name) || empty($email) || empty($subject) || empty($message)) {

        echo "Error: Please fill in all required fields.";
    } else {

        $to = "ekramarafabdullah@gmail.com";
        $headers = "From: " . $name . " <" . $email . ">\r\n";
        $headers .= "Reply-To: " . $email . "\r\n";
        $headers .= "Content-type: text/html\r\n";
        $subject = "New message from your website: " . $subject;
        $message = "<p>Name: " . $name . "</p>" . "<p>Email: " . $email . "</p>" . "<p>Message: " . $message . "</p>";
        if (mail($to, $subject, $message, $headers)) {

            echo "Thank you for contacting us. We will get back to you soon!";
        } else {

            echo "Error: Something went wrong. Please try again later.";
        }
    }

} else {
    header("Location: contact.php");
    exit;
}
