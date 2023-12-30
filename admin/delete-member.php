<?php
include'config.php';

$my_id =  $_GET["id"];
$delete_member = "DELETE FROM member_list WHERE member_id=?";
$result = $conn->prepare($delete_member);
$result->execute([$my_id]);

if ($result->rowCount() >0) {
    echo '<script>swal("Completed","Member Deleted Successfully", "success");</script>';
    echo '<script> window.location.href = "member-list.php";</script>';
} else {
    echo '<script>swal("Failed","Operation Failed...", "error");</script>';
}
?>