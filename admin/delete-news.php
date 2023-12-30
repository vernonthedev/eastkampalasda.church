<?php
include'config.php';

$my_id =  $_GET["id"];
$delete_news = "DELETE FROM news WHERE news_id=?";
$result = $conn->prepare($delete_news);
$result->execute([$my_id]);

if ($result->rowCount() > 0) {
    echo '<script>Swal("Completed","Devotion Deleted Successfully", "success");</script>';
    echo '<script> window.location.href = "news-list.php";</script>';
} else {
    echo '<script>Swal("Failed","Devotion Not Deleted", "success");</script>';
}
?>