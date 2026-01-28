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
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background: linear-gradient(135deg, #e8f0ff, #ffffff);
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        .card {
            width: 320px;
            margin: auto;
            padding: 25px 20px;
            background-color: #ffffff;
            border-radius: 14px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            text-align: center;
        }

        h1 {
            font-size: 20px;
            margin-bottom: 10px;
            color: #2c3e50;
        }

        h4 {
            margin-bottom: 6px;
            color: #555;
            font-weight: normal;
        }

        p {
            margin-bottom: 15px;
            color: #666;
            font-size: 14px;
        }

        h3 {
            margin: 15px 0 8px;
            font-size: 16px;
            color: #34495e;
        }

        .tech-stack {
            font-size: 14px;
            color: #444;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        button {
            width: 100%;
            height: 36px;
            border-radius: 6px;
            background: linear-gradient(135deg, #9acd32, #7cbf00);
            border: none;
            font-weight: bold;
            cursor: pointer;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
            background: linear-gradient(135deg, #7fffd4, #5fdac6);
        }

        .system-info {
            width: 320px;
            margin: 20px auto 0;
            padding: 15px;
            background-color: #ffffff;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            font-size: 14px;
        }

        .system-info h3 {
            margin-bottom: 8px;
            color: #27ae60;
        }
    </style>
</head>

<body>

    <div class="card">
        <h1>Junior Software Engineer</h1>
        <h4>Name: Jefferson Tresvalles</h4>
        <p>"ALL IS WELL"</p>

        <h3>Current Tech Stacks</h3>
        <div class="tech-stack">
            • HTML & CSS <br>
            • JavaScript <br>
            • Java
        </div>

        <button onclick="alert('System Initialized! Welcome aboard, Jefferson!')">
            Initialize System
        </button>
    </div>

    <div class="system-info">
        <h3>Server Status: Online</h3>
        <p><strong>Date & Time:</strong> <?php echo date('F j, Y, g:i a'); ?></p>
        <p><strong>PHP Version:</strong> <?php echo phpversion(); ?></p>
    </div>

</body>
</html>
