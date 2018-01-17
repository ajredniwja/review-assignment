<?php

//PART 1
echo "<h3>Part 1</h3>";
$animals = array('panda', 'alpaca', 'boa'); //defined array


//function to sort and print the array
function sortAndPrint ($animals)
{

    sort($animals);

    for ($i = 0; $i <= sizeof($animals); $i++ )
    {
        echo ($animals[$i]." ");
    }
}

//funtion to add an element
function addAnimal ($animals, $str)
{
    echo "<br>adding " . $str . ". . .<br>";

    $animals = array_map('strtolower', $animals);
    $str = strtolower($str);
    if (!in_array($str,$animals))
    {
        array_push($animals, $str);
    }
    sort($animals);

    return $animals;
}

sortAndPrint ($animals);

$animals = addAnimal($animals, 'goat');
sortAndPrint($animals);
$animals = addAnimal($animals, 'Boa');
sortAndPrint($animals);

//part 2
echo "<h3>Part 2 </h3>";
$flavors = array("grasshoper"=>"The Grasshopper", "maple"=>"Whiskey Maple Bacon", "carrot"=>"Carrot Walnut", "caramel"=>"Salted Caramel Cupcake", "velvet"=>"Red Velvet", "lemon"=>"Lemon Drop", "tiramisu"=>"Tiramisu");
echo "<br>";
foreach ($flavors as $x => $x_value)
{
    echo "<input type='checkbox' name='flavors[]' value='".$x."'> ". $x_value . "<br>";
}
