

<?php

$uploadOk = 1; 
$fileType = strtolower(pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION));
$target_dir = "./uploads/"; 
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); 


if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}


if ($fileType != "docx" && $fileType != "ppt" && $fileType != "txt") {
    echo "Sorry, only DOC, PPT, and TXT files are allowed.";
    $uploadOk = 0;
}


if ($uploadOk == 1) {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
} else {
    echo "Sorry, your file was not uploaded due to the above issues.";
}

?>


