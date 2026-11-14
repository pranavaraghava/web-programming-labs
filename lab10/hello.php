<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["name"] = $_POST["name"];
    $_SESSION["start_time"] = time();
}

if (!isset($_SESSION["name"])) {
    header("Location: index.php");
    exit();
}

$start = date("h:i:s A", $_SESSION["start_time"]);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Hello Page</title>
</head>
<body style="font-family:Arial;">

    <div style="text-align:right;">
        Start Time: <?php echo $start; ?>
    </div>

    <h1>
        Hello, <?php echo htmlspecialchars($_SESSION["name"]); ?>!
    </h1>

    <p>Welcome to our website.</p>

    <form action="logout.php" method="post">
        <button type="submit">Logout</button>
    </form>

</body>
</html>
