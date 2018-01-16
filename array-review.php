<?php

//PART 1
echo "<h3>Part 1</h3>";
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
        for ($i = 0; $i <= sizeof($animals); $i++ )
        {
            echo $animals[$i].' ';
        }
    }
    else
    {
        echo "Element is already present in the array;";
        echo "<br>";

    }
}

sortAndPrint();
addAnimal('Alpaca');


echo "<h3>Part 2 </h3>";
$flavors = array("grasshoper"=>"The Grasshopper", "maple"=>"Whiskey Maple Bacon", "carrot"=>"Carrot Walnut", "caramel"=>"Salted Caramel Cupcake", "velvet"=>"Red Velvet", "lemon"=>"Lemon Drop", "tiramisu"=>"Tiramisu");
echo "<br>";
foreach ($flavors as $x => $x_value)
{
    echo "<input type='checkbox' name='flavors[]' value='".$x."'> ". $x_value . "<br>";
}
