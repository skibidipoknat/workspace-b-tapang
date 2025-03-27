<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
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
            width: 400px;
        }

        h1 {
            font-size: 22px;
            margin-bottom: 20px;
            color: #333;
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
            text-align: center;
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

        h3 {
            margin-top: 15px;
            font-size: 18px;
            font-weight: bold;
            color: #28a745;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Enter Numbers (Stop at a Negative Number)</h1>
        <form method="post">
            <input type="text" name="numbers" placeholder="Enter numbers separated by ," required>
            <button type="submit">Calculate</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $input = $_POST["numbers"];
            $numbers = explode(",", str_replace(" ", "", $input));

            function runningSumWithArray($numbers)
            {
                $sum = 0;

                foreach ($numbers as $number) {
                    $num = (int)$number;
                    if ($num < 0) {
                        break;
                    }
                    $sum += $num;
                }
                return $sum;
            }
            $result = runningSumWithArray($numbers);
            echo "<h3>Final Sum: $result</h3>";
        }
        ?>
    </div>
</body>

</html>