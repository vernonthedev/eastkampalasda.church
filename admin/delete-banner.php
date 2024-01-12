<?php
include'config.php';
// Make sure you start session for the administrator before displaying any view to the user
session_start();

$recieved = $_GET["id"];

$delete_banner = "DELETE FROM banner_slider WHERE id = ? ";
$result = $conn->prepare($delete_banner);
$result->execute([$recieved]);

if ($result->rowCount() > 0) {
    echo '<script>swal("Complete", "Banner Deleted Successfully", "success");</script>';
    echo '<script> window.location.href = "banner-list.php";</script>';
} else {
    echo '<script>swal("Failure", "Banner Not Deleted", "success");</script>';
}
?>