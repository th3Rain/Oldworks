<?php
//session_start();
require ('include.php');
include ('sessions.php');
$mypics = $_FILES["UploadedFile"]["name"];
$target_dir = "uploads/";
$target_file = $target_dir . basename($mypics);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["UploadedFile"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["UploadedFile"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
/*if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}*/
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    $directory = "./Uploads/$email/images/";
    while (($view = opendir($directory)) != true){
       // while(readdir($view) != true){
    mkdir($directory, 0777, true);   
    }

   $file=$_FILES['UploadedFile']['tmp_name'];
    $image= addslashes(file_get_contents($_FILES['UploadedFile']['tmp_name']));
    $image_name= addslashes($_FILES['UploadedFile']['name']);
    
    if (move_uploaded_file($_FILES["UploadedFile"]["tmp_name"], "Uploads/$email/images/$mypics")) {
         $dir = "./Uploads/".$email."/images/";
         $optimize = $dir.$image_name;
         mysqli_query($connection, "UPDATE `documents` SET passport_photo = '$optimize' where id='$id'");
    
        header("location:photo.php");
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

   }

?>