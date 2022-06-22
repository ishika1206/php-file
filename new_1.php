<?php
echo "ishika<br>";
if(isset($_POST['submit'])){
   
    $file = $_FILES['file'];
    
    $fileName = $_FILES['file']['name'];
   
    $fileTempName = $_FILES['file']['tmp_name'];
    
    $fileSize = $_FILES['file']['size'];
    
    $fileError = $_FILES['file']['error'];
   
    $fileType = $_FILES['file']['type'];

   
    $fileExt = explode('.',$fileName);
    $fileActualExt = strtolower(end($fileExt));

    
    $allowedExt = array("jpg","jpeg","png","pdf");

    if(in_array($fileActualExt, $allowedExt)){
       
        if($fileError == 0){
           
            if($fileSize < 10000000){
                
                $fileNemeNew = uniqid('',true).".".$fileActualExt;
               
                $fileDestination = 'uploads/'.$fileNemeNew;
                
                move_uploaded_file($fileTempName, $fileDestination);
               
                echo "File Uploaded successfully";
            }else{
                
                echo "File Size Limit beyond acceptance";
            }
        }else{
            
            echo "Something Went Wrong Please try again!";
        }
    }else{
        echo "You can't upload this extention of file";
    }
}