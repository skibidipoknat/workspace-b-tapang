<!DOCTYPE html>
<html>
<link rel="stylesheet" href="fibonacci.css">

<head>
    <title>Fibonacci Sequence Generator</title>
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

        h2 {
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
        <h2>Fibonacci Sequence Generator</h2>
        <form method="post">
            <input type="number" name="num" placeholder="Enter number of terms" required min="1">
            <button type="submit">Generate</button>
        </form>

        <?php
        function fibonacciSequence($n)
        {
            $fib = [0, 1];

            for ($i = 2; $i < $n; $i++) {
                $fib[] = $fib[$i - 1] + $fib[$i - 2];
            }

            return $fib;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $n = $_POST["num"];

            if ($n > 0) {
                $fibonacciNumbers = fibonacciSequence($n);
                echo "<h3>Fibonacci sequence up to $n terms:</h3>";
                echo implode(", ", $fibonacciNumbers);
            } else {
                echo "<h3>Please enter a positive number.</h3>";
            }
        }
        ?>
    </div>
</body>

</html>