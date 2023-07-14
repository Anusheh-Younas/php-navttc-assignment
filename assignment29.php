<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Use the If...else statement of PHP to write a code to Display
“Good Morning” or “Good Afternoon” according to current 
time.</h3>
<?php
$x=date(H);
if ($x<=9){
    echo "Good Morning";
}else {
        echo "Good Afternoon";
    }

?>
</body>
</html>