<?php
$num1 = rand(0, 10);
$num2 = rand(0, 10);
$operation = rand(0, 1) ? "+" : "-";
$result = $operation === "+" ? $num1 + $num2 : $num1 - $num2;
echo "$num1 $operation $num2 = $result";
?>