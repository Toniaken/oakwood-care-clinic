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

require "db.php";

$result = pg_query($conn, "SELECT * FROM appointments ORDER BY created_at DESC");
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
    <p class="section-intro">Below are appointment requests submitted through the website.</p>

    <table class="admin-table">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Appointment Type</th>
            <th>Doctor</th>
            <th>Date</th>
            <th>Time</th>
            <th>Message</th>
            <th>Created At</th>
        </tr>

        <?php while ($row = pg_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo htmlspecialchars($row["full_name"]); ?></td>
                <td><?php echo htmlspecialchars($row["email"]); ?></td>
                <td><?php echo htmlspecialchars($row["phone"]); ?></td>
                <td><?php echo htmlspecialchars($row["appointment_type"]); ?></td>
                <td><?php echo htmlspecialchars($row["doctor"]); ?></td>
                <td><?php echo htmlspecialchars($row["preferred_date"]); ?></td>
                <td><?php echo htmlspecialchars($row["preferred_time"]); ?></td>
                <td><?php echo htmlspecialchars($row["message"]); ?></td>
                <td><?php echo htmlspecialchars($row["created_at"]); ?></td>
            </tr>
        <?php } ?>
    </table>
</section>

</body>
</html>

<?php
pg_close($conn);
?>