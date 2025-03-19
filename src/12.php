  <?php
$math_problem = '12 + 35';
$user_input = readline("Enter your answer: ");
if ($user_input === $math_problem) {
echo "Your answer is correct!";
} else {
echo "Your answer is incorrect. The correct answer is: $math_problem";
}
?>