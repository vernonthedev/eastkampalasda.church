<?php
include 'config.php';
// Make sure you start session for the administrator before displaying any view to the user
session_start();

// Number of images per page
$imagesPerPage = 20;

// Determine the current page number
$page = isset($_GET['page']) ? $_GET['page'] : 1;

// Calculate the OFFSET for the SQL query
$offset = ($page - 1) * $imagesPerPage;

$view_gallery = "SELECT * FROM image_gallery LIMIT :limit OFFSET :offset";
$run_query = $conn->prepare($view_gallery);
$run_query->bindParam(':limit', $imagesPerPage, PDO::PARAM_INT);
$run_query->bindParam(':offset', $offset, PDO::PARAM_INT);
$run_query->execute();
$rows = $run_query->fetchAll();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Admin, Image Gallery | East Kampala SDA Church</title>
    <?php include 'style.php'; ?>
</head>
<body>
<!-- Begin page -->
<div id="layout-wrapper">
    <?php include 'header.php'; ?>
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content mt-3 pt-3">
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Image Gallery</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Admin</a></li>
                                    <li class="breadcrumb-item active">Image Gallery</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card bg-soft-warning">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class='table table-borderless table-dark table-editable table-nowrap align-middle table-edits'>
                                        <thead>
                                        <tr>
                                            <th>Gallery ID</th>
                                            <th>Gallery Title</th>
                                            <th>Gallery Image</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        foreach ($rows as $row) {
                                            $g_id = $row->gallery_id;
                                            $g_title = $row->gallery_title;
                                            $g_img = $row->gallery_img;


                                            echo "<tr data-id='1'>
                                                        <td data-field='banner_id' style='width: 80px'> " . $g_id . ".</td>
                                                        <td data-field='banner_title' class='banner_title'>" . $g_title . "</td>
                                                        <td data-field='banner_img' class='banner_img'>
                                                            <img src='./images-gallery/" . $g_img . "' alt='.$g_title.'>
                                                        </td>
                                                        <td style='width: 100px'>
                                                            <a href='edit-gallery.php?id=$g_id' class='btn btn-outline-secondary btn-sm edit' title='Edit'>
                                                                <i class='fas fa-pencil-alt'></i>
                                                            </a>
                                                            <a href='delete-gallery.php?id=$g_id'  class='btn btn-outline-secondary btn-sm edit' title='Delete'>
                                                                <i class='fas fa-trash-alt'></i>
                                                            </a>
                                                        </td>
                                                    </tr>";
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                                <?php
// Calculate the total number of rows in the table
$totalRows = $run_query->rowCount();

// Calculate the total number of pages
$totalPages = ceil($totalRows / $imagesPerPage);

// Pagination links
if ($totalPages > 1) {
    echo "<ul class='pagination pagination-rounded justify-content-center mt-3'>";
    for ($i = 1; $i <= $totalPages; $i++) {
        echo "<li class='page-item " . ($page == $i ? 'active' : '') . "'><a class='page-link' href='?page=$i'>$i</a></li>";
    }
    echo "</ul>";
}
?>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

            </div> <!-- container-fluid -->
        </div>

        <?php include 'right-sidebar.php'; ?>

        <?php include 'script.php'; ?>

</body>
</html>
