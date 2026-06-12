<?php
require "db.php";

$full_name = $_POST["full_name"] ?? "";
$email = $_POST["email"] ?? "";
$phone = $_POST["phone"] ?? "";
$appointment_type = $_POST["appointment_type"] ?? "";
$doctor = $_POST["doctor"] ?? "";
$preferred_date = $_POST["preferred_date"] ?? "";
$preferred_time = $_POST["preferred_time"] ?? "";
$message = $_POST["message"] ?? "";
$consent = isset($_POST["consent"]) ? "true" : "false";

if (
    empty($full_name) ||
    empty($email) ||
    empty($phone) ||
    empty($appointment_type) ||
    empty($doctor) ||
    empty($preferred_date) ||
    empty($preferred_time) ||
    $consent !== "true"
) {
    echo "<link rel='stylesheet' href='css/style.css'>";
    echo "<div class='message error'>";
    echo "<h2>Please complete all required fields.</h2>";
    echo "<a class='btn' href='index.php#booking'>Go Back</a>";
    echo "</div>";
    exit;
}

$query = "INSERT INTO appointments
(full_name, email, phone, appointment_type, doctor, preferred_date, preferred_time, message, consent)
VALUES ($1, $2, $3, $4, $5, $6, $7, $8, $9)";

$result = pg_query_params($conn, $query, [
    $full_name,
    $email,
    $phone,
    $appointment_type,
    $doctor,
    $preferred_date,
    $preferred_time,
    $message,
    $consent
]);

echo "<link rel='stylesheet' href='css/style.css'>";

if ($result) {
    echo "<div class='message success'>";
    echo "<h2>Thank you, " . htmlspecialchars($full_name) . ".</h2>";
    echo "<p>Your appointment request has been received by Oakwood Care Clinic.</p>";
    echo "<a class='btn' href='index.php'>Back to Home</a>";
    echo "</div>";
} else {
    echo "<div class='message error'>";
    echo "<h2>Something went wrong.</h2>";
    echo "<p>Please try again later.</p>";
    echo "<a class='btn' href='index.php#booking'>Go Back</a>";
    echo "</div>";
}

pg_close($conn);
?>