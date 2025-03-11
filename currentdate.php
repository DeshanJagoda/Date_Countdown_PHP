<!-- JS -->


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Clock</title>
    <style>
        /* Optional: Customize clock styling */
        #clock {
            font-size: 24px;
            font-family: Arial, sans-serif;
            text-align: center;
        }
    </style>
    <script>
        function updateClock() {
            const now = new Date();
            const hours = now.getHours();
            const minutes = now.getMinutes();
            const seconds = now.getSeconds();

            // Format the time
            const formattedTime = `${hours}:${minutes}:${seconds}`;

            // Update the clock display
            document.getElementById('clock').textContent = formattedTime;
        }

        // Call the updateClock function every second
        setInterval(updateClock, 1000);
    </script>
</head>
<body>
    <p id="clock"></p>
</body>
</html> -->





<!-- php -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Clock (PHP)</title>
    <style>
        /* Page styling */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: linear-gradient(to right, #00c6ff, #0072ff);
            font-family: 'Roboto', sans-serif;
            color: #fff;
        }

        /* Clock styling */
        #clock {
            font-size: 4rem;
            text-align: center;
            padding: 20px;
            border: 5px solid #fff;
            border-radius: 10px;
            background: rgba(0, 0, 0, 0.5);
        }

        /* Responsive styling */
        @media (max-width: 768px) {
            #clock {
                font-size: 3rem;
                padding: 15px;
            }
        }

        @media (max-width: 480px) {
            #clock {
                font-size: 2rem;
                padding: 10px;
            }
        }
    </style>
    <script>
        function updateClock() {
            const now = new Date();
            let hours = now.getHours();
            let minutes = now.getMinutes();
            let seconds = now.getSeconds();

            // Format the time to include leading zeros
            hours = hours < 10 ? '0' + hours : hours;
            minutes = minutes < 10 ? '0' + minutes : minutes;
            seconds = seconds < 10 ? '0' + seconds : seconds;

            // Format the time
            const formattedTime = `${hours}:${minutes}:${seconds}`;

            // Update the clock display
            document.getElementById('clock').textContent = formattedTime;
        }

        // Call the updateClock function every second
        setInterval(updateClock, 1000);
    </script>
</head>
<body>
    <div id="clock">
        <?php
        // Get the current time using PHP
        date_default_timezone_set('YOUR_TIMEZONE'); // Set your timezone
        $currentTime = date("H:i:s");
        echo $currentTime;
        ?>
    </div>
</body>
</html>
