<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $dob = htmlspecialchars($_POST['dob']);
    $gender = htmlspecialchars($_POST['gender']);

    echo "<!DOCTYPE html>";
    echo "<html lang='en'>";
    echo "<head><title>Form Submission</title>";
    echo "<link rel='stylesheet' href='style.css'></head>";
    echo "<body>";
    echo "<div class='form-container'>";
    echo "<h1>Submitted Information</h1>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Phone:</strong> $phone</p>";
    echo "<p><strong>Date of Birth:</strong> $dob</p>";
    echo "<p><strong>Gender:</strong> $gender</p>";
    echo "<a href='index.html'>Back to Form</a>";
    echo "</div>";
    echo "</body>";
    echo "</html>";
}
?>
