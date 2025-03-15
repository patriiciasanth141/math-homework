  <?php
$mathHomework = array(
"1 + 1",
"2 + 2",
"3 + 3",
"4 + 4",
"5 + 5");

$randomMathHomework = $mathHomework[array_rand($mathHomework)];
echo $randomMathHomework;
?>