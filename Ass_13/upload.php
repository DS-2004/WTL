<?php

if (isset($_FILES['fileup']) && $_FILES['fileup']['error'] === 0) {

    $path = $_FILES['fileup']['name'];
    $upload_path = "./uploads/" . $path;
    $uploadOk = 1; 

    
    if (file_exists($upload_path)) {
        echo "Sorry, file already exists.<br>";
        $uploadOk = 0;
    }

    
    if ($uploadOk == 1) {
       
        if (move_uploaded_file($_FILES['fileup']['tmp_name'], $upload_path)) {
            echo "File Uploaded Successfully!";
        } else {
            echo "Failed to move the uploaded file.";
        }
    } else {
        echo "File not uploaded because it already exists.";
    }


$imageFileType = strtolower(pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION));


if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

} else {
    echo "No file uploaded or an error occurred.";
}

?>
