
<!DOCTYPE html>
<html>
<head>
    <title>Current Date and Time</title>

    <style>
        body {
            font-family: Arial;
            background-color: #f0f2f5;
            text-align: center;
            padding: 50px;
        }

        .container {
            background: white;
            padding: 30px;
            width: 400px;
            margin: auto;
            border-radius: 10px;
            box-shadow: 0 0 10px gray;
        }
    </style>
</head>

<body>

<div class="container">

    <h2>Current Date, Time and Day</h2>

    <?php
        date_default_timezone_set("Asia/Kolkata");

        echo "<h3>Current Date: " . date("d-m-Y") . "</h3>";

        echo "<h3>Current Time: " . date("h:i:s A") . "</h3>";

        echo "<h3>Current Day: " . date("l") . "</h3>";
    ?>

</div>

</body>
</html>
