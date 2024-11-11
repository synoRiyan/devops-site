<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars($_POST['name']);
    $message = htmlspecialchars($_POST['message']);
    echo "Thank you, $name. Your message has been received: $message";
}


if (getenv('FEATURE_NEW_CONTACT_FORM') === 'true') {
    // New contact form feature is enabled
    echo "New Contact Form!";
} else {
    // Old contact form feature
    echo "Old Contact Form!";
}


?>
