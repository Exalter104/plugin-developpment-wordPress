<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salary Calculation</title>
    <style>
    body {
        text-align: center;
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 20px;
    }

    form {
        display: inline-block;
        background: #f4f4f4;
        padding: 20px;
        border-radius: 8px;
    }

    input[type="text"],
    input[type="number"] {
        width: 80%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    input[type="submit"] {
        background-color: #28a745;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #218838;
    }

    .result {
        margin-top: 20px;
        font-weight: bold;
        color: #333;
    }
    </style>
</head>

<body>
    <h2>Team Salary Calculator</h2>
    <form action="" method="post">
        <label>Enter your name:</label><br>
        <input type="text" name="name" required><br>

        <label>Enter your working hours:</label><br>
        <input type="number" name="hours" required><br>

        <input type="submit" value="Calculate Salary">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $bonus_threshold = 200;
        $bonus_amount = 5000;
        $hourly_rate = 220;

        $name = htmlspecialchars($_POST["name"]);
        $hours = (int) $_POST["hours"];

        $salary = $hours * $hourly_rate;

        echo "<div class='result'>";
        if ($hours > $bonus_threshold) {
            $total_salary = $salary + $bonus_amount;
            echo "Congratulations, $name! You have earned a bonus.<br>";
            echo "Your base salary is $salary, and with the bonus, your total salary is: $total_salary.";
        } else {
            echo "$name, your salary is $salary.";
        }
        echo "</div>";
    }
    ?>
</body>

</html>