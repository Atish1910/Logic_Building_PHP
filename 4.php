<?php
// print all even numbers
$num = 100;
for($i=1; $i<=$num; $i++){

    if($i%2 == 0)
    {
        print_r($i);
    }
}
die();
?>