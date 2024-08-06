<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fantasy Character Name</title>
</head>
<body>
<?php
$names = "Gandalf Aragorn Legolas";

$array = explode(" ", $names);

$lowercase = array_map('strtolower', $array);

$join = implode("*", $lowercase);
echo"Joint By *:\n";

echo $join;
?>
    
</body>
</html>