
<!DOCTYPE html>
<html>
<head>
    <title>Age Verification</title>

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
            width: 350px;
            margin: auto;
            border-radius: 10px;
            box-shadow: 0 0 10px gray;
        }

        input, button {
            padding: 10px;
            margin: 10px;
            width: 90%;
            box-sizing: border-box;
        }

        button {
            background: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>

<body>

<div class="container">

    <h2>Age Verification Form</h2>

    <form action="check.php" method="post">

        <input type="text" name="name"
               placeholder="Enter Your Name" required>

        <input type="number" name="age"
               placeholder="Enter Your Age"
               min="0" required>

        <button type="submit">Submit</button>

    </form>

</div>

</body>
</html>
