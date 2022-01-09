<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: http://localhost/UASERP/web/");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style1.css">
    <title>Welcome</title>
</head>
<body>
    <div class="container">
    <?php echo "<h1>Welcome, Kalbiser " . $_SESSION['username'] . "</h1>"; ?>
    <p class="logout-text">
    <a href="logout.php">Logout</a>
    </p>
</div>
</body>
</html>