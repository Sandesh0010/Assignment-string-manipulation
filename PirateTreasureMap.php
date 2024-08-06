<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tresure Map</title>
</head>
<body>
<?php
$clue = "find the hidden treasure at the golden island";

$modify = str_replace("golden", "mystic", $clue);

$finalclue = strtoupper($modify);
echo " Final clue in Uppercase:\n";

echo $finalclue;
?>
</body>
</html>
