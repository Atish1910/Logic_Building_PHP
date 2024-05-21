<?php
// convert the string to reverse without in built
$string = "AtishAnushka";
$lenght = strlen($string);

// echo strrev($string);

for($i=($lenght-1); $i >= 0; $i--)
{
    echo $string[$i];
}

?>