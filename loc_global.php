<?php
$x=10;
echo "ishika"."\n";
function myfun()
{
	$y=20;
	echo"$y<br>";
	echo $GLOBALS['x']."<br>";
}
myfun();
?>