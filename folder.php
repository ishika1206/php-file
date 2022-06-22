<?php
echo "ishika<br>";
mkdir("file");

if(file_exists("file"))
{
	echo "file is exist";
}
else
{
	echo "file does not exist";
}
echo filesize("file")
?>
