<?php
// Function to calculate factorial
function factorial($number) {
    $result = 1;
    for ($i = 1; $i <= $number; $i++) {
        $result *= $i;
    }
    return $result;
}

// Check if the form is submitted and calculate factorial
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the user input
    $number = $_POST['number'];

    // Check if the input is a valid number
    if (is_numeric($number) && $number >= 0) {
        $factorialResult = factorial($number);
    } else {
        $errorMessage = "Please enter a valid non-negative integer.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Calculator</title>
</head>
<body>
    <h1>Factorial Calculator</h1>

    <!-- Form to input number -->
    <form method="post">
        <label for="number">Enter a number:</label>
        <input type="text" id="number" name="number" required>
        <input type="submit" value="Calculate Factorial">
    </form>

    <?php
    // Display result or error message
    if (isset($factorialResult)) {
        echo "<h2>Factorial of $number is: $factorialResult</h2>";
    } elseif (isset($errorMessage)) {
        echo "<h2 style='color: red;'>$errorMessage</h2>";
    }
    ?>
</body>
</html>

~             
