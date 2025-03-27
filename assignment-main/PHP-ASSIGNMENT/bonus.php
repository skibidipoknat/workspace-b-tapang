<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bonus Payment Calculator</title>
    <link rel="stylesheet" href="bonus.css">

    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 350px;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        /* Form Styles */
        form {
            display: flex;
            flex-direction: column;
        }

        input {
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px;
            margin-top: 10px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }

        .result {
            margin-top: 15px;
            font-size: 18px;
            font-weight: bold;
            color: #28a745;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Bonus Payment Calculator</h1>
        <form method="post">
            <input type="text" name="name" placeholder="Enter Employee Name" required>
            <input type="number" name="overtime" placeholder="Overtime Hours" required>
            <input type="number" name="absent" placeholder="Absent Hours" required>
            <button type="submit" name="calculate">Calculate Bonus</button>
        </form>

        <?php
        function calculateBonus($overtime, $absent)
        {
            $bonus = ($overtime * 100) - ($absent * 50);
            return max($bonus, 0);
        }

        if (isset($_POST['calculate'])) {
            $name = htmlspecialchars($_POST['name']);
            $overtime = intval($_POST['overtime']);
            $absent = intval($_POST['absent']);

            $bonus = calculateBonus($overtime, $absent);

            echo "<p class='result'>$name's Bonus: ₱$bonus</p>";
        }
        ?>
    </div>
</body>

</html>