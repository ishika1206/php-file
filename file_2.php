<?php
$myfile = fopen("ishka.txt", "w") or die("Unable to open file!");
$txt = "ishika\n";
fwrite($myfile, $txt);
$txt = "ishika\n";
fwrite($myfile, $txt);
fclose($myfile);
?>