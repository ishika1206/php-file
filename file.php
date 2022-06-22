<?php
echo "ishika<br>";
echo readfile ("file.txt");
?>

<?php
$file="file.txt";
if (file_exists($file))
{
    echo"file exists";
}
else{
    echo"file does not exists";
}
?>

<?php
$file="file.txt";
if (file_exists($file))
{
    echo readfile ("file.txt");
    unlink ("old.txt");
}
 else
 {
    echo"file does not exists";
}
?>