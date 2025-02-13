<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array</title>
</head>

<body>
    <form method="">
        <label>Enter a Country</label><br>
        <input type="text" name="country" required>
        <input type="submit" value="Submit">


    </form>
</body>

</html>
<?php


echo "Associative Array";
//Associative Array : a array which having a key-value pair

$exalters = array("Ikram" => "CEO", "Saqib" => "Acting CTO", "Sheraz" => "Adminstrative", "Sughra" => "Project Manager", "Sarran" => "AI Team Lead", "Mueen" => "Mobile Team", "Bilal" => "Design Team Lead",);
// $exalters["Sughra"] = "Ayesha";
// array_pop($exalters);
// array_shift($exalters);
// $keys = array_keys($exalters);
// $values = array_values($exalters);
// $exalter = array_flip($exalters);


foreach ($exalters as $key => $value) {
    echo "<br>";
    echo "{$key} = {$value}";
}
