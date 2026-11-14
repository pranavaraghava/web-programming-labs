
<?php
$name = htmlspecialchars($_POST["name"]);
$age = (int)$_POST["age"];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Authorization Result</title>

    <style>
        body {
            font-family: Arial;
            background: #f0f2f5;
            text-align: center;
            padding: 50px;
        }

        .container {
            background: white;
            padding: 30px;
            width: 450px;
            margin: auto;
            border-radius: 10px;
            box-shadow: 0 0 10px gray;
        }
    </style>
</head>

<body>

<div class="container">

    <?php
        if ($age < 18) {
            echo "<h2>Hello " . $name .
                 ", you are not authorized to visit the site.</h2>";
        }
        else {
            echo "<h2>Welcome to this site, " .
                 $name . "!</h2>";
        }
    ?>

    <br>

    <a href="index.php">Go Back</a>

</div>

</body>
</html>
