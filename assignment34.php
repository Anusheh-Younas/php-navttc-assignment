<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>You need to write a program in PHP using for...each 
loop to remove specific elements by value from an array 
using PHP program.
Hint:
• Take an array with list of month names.
• Take a variable with the name of value to be deleted</h3>
<?php
//array_diff
$months=array("January", "February","March","April","May","June","July","August",
    "September","October","November","December"
);
foreach ($months as $value){
    echo "$value <br>";
}
$valueToDelete="June";
$array=array_diff($month, [$valueToDelete]);
print_r ($array);
//array_search
$delete_item='April';
$months=array("January", "February","March","April","May","June","July","August",
    "September","October","November","December"
);
$key=array_search($delete_item, $months);
unset($month[$key]);
var_dump($months);
//array_keys
$delete_item='April';
$months=array("January", "February","March","April","May","June","July","August",
    "September","October","November","December"
);
foreach(array_keys($months, $delete_item)as $key);
unset($months[$key]);
var_dump($months);


?>
</body>
</html>