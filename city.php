<?php

$city1 = 5;
$city1_radius = 3;

$city2 = 20;
$city2_radius = 5;

for ($i = 1; $i <=10; $i++)
{
    $position = rand(1,30);
    $cyty = "drives outside the city for";
    $speed = " at a speed of 90.";
    if ((($position > ($city1 - $city1_radius)) && ($position < ($city1 + $city1_radius))) || (($position > ($city2 - $city2_radius)) && ($position < ($city2 + $city2_radius))) )
    {
        $cyty = "drives through the city for ";
        $speed = " at a speed of 70.";
    }
    print ("<p>Car, namber: " . $i . ", " . $cyty . $position . $speed . "</p>");
}

?>