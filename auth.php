<?php
session_start();

function isAdminLoggedIn() {
    return isset($_SESSION["admin_logged_in"]) && $_SESSION["admin_logged_in"] === true;
}

function handleAdminLogin() {
    $error = "";

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $username = trim($_POST["username"] ?? "");
        $password = $_POST["password"] ?? "";

        $admin_username = getenv("ADMIN_USERNAME") ?: "admin";
        $admin_password = getenv("ADMIN_PASSWORD") ?: "Oakwood@2026";

        if ($username === $admin_username && $password === $admin_password) {
            $_SESSION["admin_logged_in"] = true;
            header("Location: admin.php");
            exit;
        } else {
            $error = "Invalid username or password.";
        }
    }

    return $error;
}
?>