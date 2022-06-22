<?php
echo "ishika<br>";
function add(&$n)
{
    return $n = $n*2;

}
$n = 10;
echo add($n)."\n";
echo $n;
 ?>