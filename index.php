<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Card</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #ffffff;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        .card {
            display: grid;
            place-items: center;
            width: 300px;
            height: 50vh;
            margin: 40px auto;
            background-color: whitesmoke;
            border-radius: 12px;
            box-shadow: 5px 5px 10px gray;
            text-align: center;
        }

        h1 {
            font-size: 18px;
            margin-top: 20px;
        }

        button {
            margin: 10px 0 15px;
            width: 200px;
            height: 30px;
            border-radius: 5px;
            background-color: greenyellow;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: aquamarine;
        }

        .system-info {
            width: 300px;
            margin: 20px auto;
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="card">
        <h1>Junior Software Engineer</h1>

        <h4>Name: Jefferson Tresvalles</h4>
        <p>"ALL IS WELL"</p>

        <h3>Current Tech Stacks</h3>
        <p>
            • HTML & CSS <br>
            • JavaScript <br>
            • Java
        </p>

        <button onclick="alert('System Initialized! Welcome aboard, Jefferson!')">Initialize System</button>
    </div>

    <div class="system-info">
        <h3>Server Status: Online</h3>
        <p><strong>Date & Time:</strong> <?php echo date('F j, Y, g:i a'); ?></p>
        <p><strong>PHP Version:</strong> <?php echo phpversion(); ?></p>
    </div>

</body>
</html>
