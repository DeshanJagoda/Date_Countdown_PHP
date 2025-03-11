<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Today's Date</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .date-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .date-container h1 {
            margin: 0 0 20px;
            font-size: 24px;
            color: #333;
        }
        .date-container p {
            margin: 0;
            font-size: 18px;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="date-container">
        <h1>Today's Date</h1>
        <?php
        $date = getdate();
        echo "<p>Today's date is: " . $date['mday'] . "-" . $date['month'] . "-" . $date['year'] . "</p>";
        echo "<p>Today is: " . $date["weekday"] . "</p>";
        ?>
    </div>
</body>
</html>