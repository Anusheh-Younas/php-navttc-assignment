<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Write a program to calculate factorial of a number using for
loop in PHP.</h3>
<?php
$num=3;
$factorial=1;
for($x=$num; $x>=1;$x--)
{
    $factorial= $factorail*$x;
}
echo "The factorial of $num is $factorial";
?>
</body>
</html>