<?php
require ('include.php');
include ('sessions.php');
$doc_id = $_POST['DocId'];
//upload.php
$output_dir = "uploads/";
 
if(isset($_FILES["myfile"]))
{
    //Filter the file types , if you want.
    if ($_FILES["myfile"]["error"] > 0)
    {
      echo "Error: " . $_FILES["file"]["error"] . "<br>";
    }
    else
    {
        //move the uploaded file to uploads folder;
        $docName = $_FILES["myfile"]["name"];
        $directory = "./Uploads/$email/documents/";
    while (($view = opendir($directory)) != true){
       // while(readdir($view) != true){
    mkdir($directory, 0777, true);   
    }
    $doc_name= addslashes($_FILES['UploadedFile']['name']);

        move_uploaded_file($_FILES["myfile"]["tmp_name"], "Uploads/$email/documents/$docName");
        $dir = "./Uploads/".$email."/documents/";
         $optimize = $dir.$doc_name;
         mysqli_query($connection, "UPDATE `documents` SET '$doc_id' = '$optimize' where id='$id'");
 
     echo "Uploaded File :". $docName;
    }
 
}
?>