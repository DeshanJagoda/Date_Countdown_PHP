<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Countdown Timer with Animation (PHP)</title>
    <style>
        /* Page styling */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: linear-gradient(to right, #ff7e5f, #feb47b);
            font-family: 'Roboto', sans-serif;
            color: #fff;
        }

        /* Countdown styling */
        #countdown {
            font-size: 3rem;
            text-align: center;
            padding: 20px;
            border: 5px solid #fff;
            border-radius: 10px;
            background: rgba(0, 0, 0, 0.5);
        }

        /* Celebration animation */
        @keyframes celebrate {
            0% { transform: scale(1); }
            50% { transform: scale(1.2); }
            100% { transform: scale(1); }
        }

        .celebration {
            animation: celebrate 1s infinite;
        }
    </style>
    <script>
        const targetDate = new Date('2024-12-31T23:59:59').getTime();
        let timer;
        let celebrationTimeout;

        function updateCountdown() {
            const now = new Date().getTime();
            const timeRemaining = targetDate - now;

            if (timeRemaining < 0) {
                clearInterval(timer);
                const countdownElement = document.getElementById('countdown');
                countdownElement.textContent = '🎉 Happy Celebration! 🎉';
                countdownElement.classList.add('celebration'); // Add celebration class

                // Set timeout to stop celebration after 30 seconds
                celebrationTimeout = setTimeout(() => {
                    countdownElement.classList.remove('celebration');
                }, 30000);
                
                return;
            }

            const days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
            const hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

            document.getElementById('countdown').textContent = `${days}d ${hours}h ${minutes}m ${seconds}s`;
        }

        window.onload = function() {
            timer = setInterval(updateCountdown, 1000);
        };
    </script>
</head>
<body>
    <div id="countdown"></div>
</body>
</html>

