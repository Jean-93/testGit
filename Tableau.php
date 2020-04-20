<?php
/*
$result = 1/2;

$array = [    
    "a",
    true,
    42,
    $result
    
];

var_dump($array);
echo $array;
/*
?>

<?php
$legumes = array("tomates","navets","carrottes","oignons");
echo $legumes[1];

$legumes2 = [
    "tomates" => 3,
    "navets" => 4,
    "carrottes" => 4,
    "oignons" => 5
];

echo $legumes2["navets"];
?>



<?php

$saisons = [
    "été" => [
        "navet" => [
            "quantité" => 12,
            "prix" => 5
            
        ],
        "panais"
    ],
    "printemps",
    "automne",

];
$saisons [] = "hiver";
$saisons ["hiver"] = "harricot";
$saisons ["harricot"] ["quantité"] ["harricot"] = "prix";

var_dump($saisons);


?>*/


$saisons1 =["été", "automne", "printemps", "hiver"];
echo "<ul>";
foreach ($saisons1 as $saison) {

    echo "<li>" . $saison . "</li>";

}

echo "</ul>";