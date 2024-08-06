<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enchanted Spell Check</title>
</head>
<body>
    <?php

$spell = "   ABRACADABRA   ";

$trimmed = trim($spell);

$lowercase = strtolower($trimmed);

if ($lowercase == "abracadabra") {
    echo"The spell is correct";
}
 else {
    echo "The wizarding world is still at risk!";
}

    ?>


</body>
</html>