<?php
require "auth.php";

$error = handleAdminLogin();

if (!isAdminLoggedIn()) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login - Oakwood Care Clinic</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<section class="booking-section">
    <h2>Admin Login</h2>
    <p class="section-intro">Only authorised clinic staff can access appointment records.</p>

    <form method="POST">
        <?php if (!empty($error)) { ?>
            <p class="error"><?php echo htmlspecialchars($error); ?></p>
        <?php } ?>

        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>

        <button type="submit" class="btn">Login</button>
    </form>
</section>

</body>
</html>

<?php
exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard - Oakwood Care Clinic</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header class="header">
    <div class="logo">Oakwood Admin</div>
    <nav>
        <a href="index.php">Home</a>
        <a href="logout.php">Logout</a>
    </nav>
</header>

<section class="booking-section">
    <h2>Appointment Requests</h2>
    <p class="section-intro">Appointment records will appear here after the database is connected.</p>
</section>

</body>
</html>