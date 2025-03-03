<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: index.html');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Success - HINTechnologies</title>
</head>
<body>
    <h1>Payment Successful!</h1>
    <p>Thank you for enrolling in our DevOps Training program.</p>
    <a href="index.html">Back to Home</a>
</body>
</html>