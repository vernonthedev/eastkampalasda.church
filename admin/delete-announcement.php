
<?php
include'config.php';
// Make sure you start session for the administrator before displaying any view to the user
session_start();

$recieved_id = $_GET["id"];
$delete_event = "DELETE FROM announcements WHERE ann_id= ?";
$results = $conn->prepare($delete_event);
$results->execute([$recieved_id]);

if ($results->rowCount() > 0) {
    echo '<script>swal("Complete", "Announcement Deleted Successfully", "success");</script>';
    echo '<script> window.location.href = "all-announcements.php";</script>';
} else {
    echo '<script>swal("Failed", "Error Deleting Record", "error");</script>';
}
?>