<?php

//PART 1
echo "<h3>Part 1</h3>h3>";
function sortAndPrint ()
{
    $animals = array('panda', 'alpaca', 'boa');
    sort($animals);

    for ($i = 0; $i <= sizeof($animals); $i++ )
    {
        echo ($animals[$i]." ");
    }
    echo "<br>";
}

function addAnimal ($str)
{
    $animals = array('Panda', 'alpaca', 'boa');
    echo "adding " . $str . ". . .<br>";

    $animals = array_map('strtolower', $animals);
    $str = strtolower($str);

    if (!in_array($str, $animals))
    {
        array_push($animals, $str);
    }
    else
    {
        echo "Array element is already present;";
        echo "<br>";

    }
    for ($i = 0; $i <= sizeof($animals); $i++ )
    {
        echo $animals[$i].' ';
    }
}

sortAndPrint();
addAnimal('Alpaca');

//PART 2

$flavors = array("grasshoper"=>"The Grasshopper", "maple"=>"Whiskey Maple Bacon", "carrot"=>"Carrot Walnut", "caramel"=>"Salted Caramel Cupcake", "velvet"=>"Red Velvet", "lemon"=>"Lemon Drop", "tiramisu"=>"Tiramisu");
echo "<br>";
