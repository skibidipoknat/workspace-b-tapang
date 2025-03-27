<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Activity.css">
    <title>Document</title>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #ff9a9e, #fad0c4);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: rgba(255, 255, 255, 0.9);
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
            text-align: center;
            width: 380px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        h1 {
            color: #333;
            font-size: 26px;
            margin-bottom: 20px;
            font-weight: 700;
        }

        p {
            font-size: 18px;
            color: #fff;
            background: linear-gradient(135deg, #ff758c, #ff7eb3);
            padding: 12px;
            border-radius: 8px;
            margin: 10px 0;
            font-weight: 600;
            transition: transform 0.3s ease-in-out;
        }

        p:hover {
            transform: scale(1.05);
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Function Outputs</h1>
        <?php
        include("functions.php");

        echo "<p>" . posNegChecker(1) . "</p>";
        echo "<p>" . tempConverter(15) . "</p>";
        echo "<p>" . evenOrOdd(21) . "</p>";
        echo "<p>" . findingBiggestNum(45, 65, 55) . "</p>";
        echo "<p>" . checkGrade(51) . "</p>";
        echo "<p>" . findLargestNum(50, 60) . "</p>";
        ?>
    </div>
</body>

</html>