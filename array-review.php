<?php

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