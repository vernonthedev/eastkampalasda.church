<?php
include'config.php';
// Make sure you start session for the administrator before displaying any view to the user
session_start();

$recieved = $_GET["id"];
$delete_gallery = "DELETE FROM image_gallery WHERE gallery_id= ? ";
$results = $conn->prepare($delete_gallery);
$results->execute([$recieved]);

if($results->rowCount() > 0){
    echo '<script>swal("Success","Gallery Image Deleted Successfully", "success");</script>';
    echo '<script> window.location.href = "image-gallery.php";</script>';
} else {
    echo '<script>swal("Error", "Error Deleting Record...", "error");</script>';
}
?>