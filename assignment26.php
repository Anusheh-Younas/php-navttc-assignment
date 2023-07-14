<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Use the Switch statement of PHP to display the current day 
of the week</h3>

<? php 
$today = date("D");
switch ($today){
    case "Mon":
    echo "today is monday";
    break;
    case "Tue":
    echo "today is tuesday";
    break;
    case "Wed":
    echo "today is wednesday";
    break;
    case "Thu":
    echo "today is thursday";
    break;
     case "Fri":
    echo "today is friday";
    break;
     case "Sat":
    echo "today is saturday";
    break;
    case "sun":
    echo "today is sunday";
    break;
    default:
    echo "There is no information about day";
    break;
}


?>
</body>
</html>