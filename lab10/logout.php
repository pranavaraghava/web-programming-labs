
<?php
session_start();

$name = $_SESSION["name"] ?? "User";
$duration = time() - ($_SESSION["start_time"] ?? time());

$minutes = floor($duration / 60);
$seconds = $duration % 60;

session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Logout Page</title>
</head>
<body style="text-align:center; font-family:Arial;">

    <h1>Thank You, <?php echo htmlspecialchars($name); ?>!</h1>

    <h3>You have successfully logged out.</h3>

    <p>
        Your usage duration:
        <?php echo $minutes; ?> minutes
        <?php echo $seconds; ?> seconds
    </p>

    <a href="index.php">Login Again</a>

</body>
</html>
