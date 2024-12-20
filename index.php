<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab5</title>
</head>
<body>

<h2>Task 1: Display the phrase "You are welcome!" n times</h2>
<form method="POST">
    <label>Enter the number n:</label>
    <input type="number" name="n1">
    <input type="submit" name="task1" value="Result">
</form>

<?php include 'functions.php'; displayTask1(); ?>

<h2>Task 2: Find the sum of 1 + 4 + 7 + 10 + ... + 112</h2>
<form method="POST">
    <input type="submit" name="task2" value="Result">
</form>
<?php displayTask2(); ?>

<h2>Task 3: Find the sum of natural numbers from a to b</h2>
<form method="POST">
    <label>Enter the number a:</label>
    <input type="number" name="a">
    <label>Enter the number b:</label>
    <input type="number" name="b">
    <input type="submit" name="task3" value="Result">
</form>
<?php displayTask3(); ?>

<h2>Task 4: Display all numbers less than 10000 that have at least one digit "3" and are not divisible by 5</h2>
<form method="POST">
    <input type="submit" name="task4" value="Result">
</form>
<?php displayTask4(); ?>

<h2>Task 5: Display an N x N grid of colored squares</h2>
<form method="POST">
    <label>Enter N:</label>
    <input type="number" name="n5">
    <input type="submit" name="task5" value="Result">
</form>
<?php displayTask5(); ?>

<h2>Task 6: Display 3 random numbers from 0 to 100 without repetitions</h2>
<form method="POST">
    <input type="submit" name="task6" value="Result">
</form>
<?php displayTask6(); ?>

<h2>Task 7: Find the number of right-angled triangles with sides less than 100</h2>
<form method="POST">
    <input type="submit" name="task7" value="Result">
</form>
<?php displayTask7(); ?>

<h2>Task 8: Display n red squares of random size in random positions on a black background</h2>
<form method="POST">
    <label>Enter the number of squares n:</label>
    <input type="number" name="n8">
    <input type="submit" name="task8" value="Result">
</form>
<div style="position: relative; width: 100%; height: 400px; background-color: black;">
    <?php displayTask8(); ?>
</div>

<h2>Task 9: Display N random sequences of numbers 0, 1, and 2 such that their sum equals s</h2>
<form method="POST">
    <label>Enter N:</label>
    <input type="number" name="n9">
    <label>Enter the sum s:</label>
    <input type="number" name="s9">
    <input type="submit" name="task9" value="Result">
</form>
<?php displayTask9(); ?>

<h2>Task 10: Generate an HTML table of colors (at least 150 colors)</h2>
<form method="POST">
    <input type="submit" name="task10" value="Result">
</form>
<?php displayTask10(); ?>

<h2>Task 11: Given a number, increase by 100 if greater than 10, otherwise decrease by 30</h2>
<form method="POST">
    <label>Enter a number:</label>
    <input type="number" name="n11">
    <input type="submit" name="task11" value="Result">
</form>
<?php displayTask11(); ?>

<h2>Task 12: If the number is even, halve it, otherwise triple it</h2>
<form method="POST">
    <label>Enter a natural number:</label>
    <input type="number" name="n12">
    <input type="submit" name="task12" value="Result">
</form>
<?php displayTask12(); ?>

<h2>Task 13: Process a number with conditions</h2>
<form method="POST">
    <label>Enter a number:</label>
    <input type="number" name="n13">
    <input type="submit" name="task13" value="Result">
</form>
<?php displayTask13(); ?>

<h2>Task 14: Display the largest of three numbers</h2>
<form method="POST">
    <label>Number 1:</label>
    <input type="number" name="num1_14">
    <label>Number 2:</label>
    <input type="number" name="num2_14">
    <label>Number 3:</label>
    <input type="number" name="num3_14">
    <input type="submit" name="task14" value="Result">
</form>
<?php displayTask14(); ?>

<h2>Task 15: Display "Yes" if two numbers differ by 100, otherwise "No"</h2>
<form method="POST">
    <label>Enter number a:</label>
    <input type="number" name="a15">
    <label>Enter number b:</label>
    <input type="number" name="b15">
    <input type="submit" name="task15" value="Result">
</form>
<?php displayTask15(); ?>

<h2>Task 16: Display "Yes" if two numbers differ by no more than 20, otherwise "No"</h2>
<form method="POST">
    <label>Enter number a:</label>
    <input type="number" name="a16">
    <label>Enter number b:</label>
    <input type="number" name="b16">
    <input type="submit" name="task16" value="Result">
</form>
<?php displayTask16(); ?>

<h2>Task 17: Display the season based on the month number, or "Error" for invalid numbers</h2>
<form method="POST">
    <label>Enter the month number:</label>
    <input type="number" name="month17">
    <input type="submit" name="task17" value="Result">
</form>
<?php displayTask17(); ?>

<h2>Task 18: Rearrange the digits of a three-digit number to get the largest possible number</h2>
<form method="POST">
    <label>Enter a three-digit number:</label>
    <input type="number" name="num18" min="100" max="999">
    <input type="submit" name="task18" value="Result">
</form>
<?php displayTask18(); ?>

<h2>Task 19: Solve the quadratic equation ax^2 + bx + c = 0</h2>
<form method="POST">
    <label>Enter a:</label>
    <input type="number" name="a19" step="any">
    <label>Enter b:</label>
    <input type="number" name="b19" step="any">
    <label>Enter c:</label>
    <input type="number" name="c19" step="any">
    <input type="submit" name="task19" value="Result">
</form>
<?php displayTask19(); ?>

<h2>Task 20: Calculate the expression max2(a, b, c) − 3 * min(a, b, c) + max(a, b − c) / min(b, c)</h2>
<form method="POST">
    <label>Enter a:</label>
    <input type="number" name="a20" step="any">
    <label>Enter b:</label>
    <input type="number" name="b20" step="any">
    <label>Enter c:</label>
    <input type="number" name="c20" step="any">
    <input type="submit" name="task20" value="Result">
</form>
<?php displayTask20(); ?>

<h2>Task 21: Change the order of the buttons</h2>
<form method="POST">
    <button type="submit" name="task21" value="1"><?= displayTask21()[0] ?></button>
    <button type="submit" name="task21" value="2"><?= displayTask21()[1] ?></button>
    <button type="submit" name="task21" value="3"><?= displayTask21()[2] ?></button>
</form>
<?php displayTask21(); ?>

<h2>Task 22: Calculation of Function Values</h2>
<form method="POST"> <label>Enter the value of a:</label> <input type="number" name="a"><br> <label>Enter the value of b:</label> <input type="number" name="b"><br> <label>Enter the value of c:</label> <input type="number" name="c"><br> <label>Enter the initial value of x:</label> <input type="number" name="x_start"><br> <label>Enter the final value of x:</label> <input type="number" name="x_end"><br> <label>Enter the step:</label> <input type="number" name="dx"><br> <input type="submit" value="Calculate"> </form>
<?php displayTask22(); ?>

</body>
</html>
