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
