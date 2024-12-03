<html>
<head>
    <title>Odd or Even</title>
</head>
<body>
    <form method="post" action="">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required>
        <button type="submit">Check</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST['number'];

        if ($number % 2 == 0) {
            echo "<p>$number is Even.</p>";
        } else {
            echo "<p>$number is Odd.</p>";
        }
    }
    ?>
</body>
</html>

