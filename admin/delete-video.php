<?php
include'config.php';

$my_id =  $_GET["id"];
$delete_video = "DELETE FROM video_gallery WHERE video_id=?";
$result = $conn->prepare($delete_video);
$result->execute([$my_id]);

if ($result->rowCount() > 0) {
    echo '<script>swal("Completed","Video Deleted Successfully", "success");</script>';
    echo '<script> window.location.href = "video-list.php";</script>';
} else {
    echo '<script>swal("Failed","Video Not Deleted", "error");</script>';
}
?>