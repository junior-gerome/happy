<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
            padding-top: 15%;
        }
        .new-year-message {
            font-size: 3em;
            color: #333;
        }
    </style>
</head>
<body>
    <div id="message" class="new-year-message"></div>

    <script>
        var year = new Date().getFullYear() + 1;  // Obtenez l'année suivante
        var message = document.getElementById('message');

        function updateMessage() {
            var now = new Date();
            if (now.getFullYear() === year) {
                message.innerHTML = "junior gerome: je vous souhaite a tous un Happy New Year  " + year + "!";
            } else {
                var timeLeft = new Date(year, 0, 1) - now;
                var secondsLeft = Math.floor(timeLeft / 1000);
                message.innerHTML = "Il reste " + secondsLeft + " secondes jusqu'à " + year + "!";
            }
        }

        setInterval(updateMessage, 1000);
        updateMessage();
    </script>
</body>
</html>
