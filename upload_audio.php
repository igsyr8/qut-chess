<?php
$target_dir = "uploads/";
$audioFileType = strtolower(pathinfo($_FILES["audio"]["name"], PATHINFO_EXTENSION));

// Generate a unique file name using current timestamp
$target_file = $target_dir . time() . "." . $audioFileType;

// if everything is ok, try to upload file
if (move_uploaded_file($_FILES["audio"]["tmp_name"], $target_file)) {
    echo "The file has been uploaded.";
} else {
    // Output some more detailed error information:
    switch ($_FILES['audio']['error']) {
        case UPLOAD_ERR_NO_FILE:
            $message = 'No file sent.';
            break;
        case UPLOAD_ERR_INI_SIZE:
        case UPLOAD_ERR_FORM_SIZE:
            $message = 'Exceeded filesize limit.';
            break;
        default:
            $message = 'Unknown error.';
            break;
    }
    echo 'Sorry, there was an error uploading your file: ' . $message;
}
?>
