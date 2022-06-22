<!DOCTYPE html>
<html>
    <head>
        <title>
            Download File Using Php
        </title>
    </head>
    <body>
        <h2>Download File from HERE:</h2>
        <a href="download.php?file=Screenshot.png">Click here</a>
    </body>
</html>

<?php

if(!empty($_GET['file']))
{
    $filename = basename($_GET['file']);
    $filepath = 'uploads/' . $filename;
    if(!empty($filename) && file_exists($filepath))
    {
        header("Cache-control: public");
        header("Content-Deescription: File Transfer");
        header("Content-Disposition: attachment; filename=$filename");
        header("Content-Type: application/zip");
        header("Content-Transfer-Emcoding: binary");

        readfile($filepath);
        exit;
    }else{
        echo "This file Does not exist.";
    }
}
?>