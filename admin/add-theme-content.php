<?php
include'config.php';
// Make sure you start session for the administrator before displaying any view to the user
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Admin, Add Theme | East Kampala SDA Church</title>
    <?php include'style.php'; ?>
</head>

<body>
<!-- Begin page -->
<div id="layout-wrapper">
    <?php include'header.php'; ?>
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Add Theme Content</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="./">Admin</a></li>
                                    <li class="breadcrumb-item active">Add Theme Content</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Add Theme content</h4>
                            </div>
                            <div class="card-body p-4">

                                <div class="row">
                                    <div class="col-lg-6">
                                        <form action="" method="POST" enctype="multipart/form-data" >

                                            <div class="mb-3">
                                                <label for="theme" class="form-label">Theme Title:</label>
                                                <input required class="form-control" rows="8" type="text"  id="theme"
                                                           name="theme" placeholder="Theme Title"></input>
                                            </div>

                                            <div class="mb-3">
                                                <label for="sermon" class="form-label">Theme Sermon:</label>
                                                <input required class="form-control" rows="8" type="text"  id="sermon"
                                                           name="sermon" placeholder="Theme Sermon"></input>
                                            </div>

                                            <div class="mb-3">
                                                <label for="preacher" class="form-label">Preacher:</label>
                                                <input required class="form-control" rows="8" type="text"  id="preacher"
                                                           name="preacher" placeholder="Theme Preacher"></input>
                                            </div>

                                            <div class="mb-3">
                                                <label for="themetxt" class="form-label">Key Text: </label>
                                                <input required class="form-control" rows="8" type="text"  id="themetxt"
                                                           name="themetxt" placeholder="Memory Text"></input>
                                            </div>

                                            <div class="mb-3">
                                                <label for="music" class="form-label">Music:</label>
                                                <input required class="form-control" rows="8" type="text"  id="music"
                                                           name="music" placeholder="Music by"></input>
                                            </div>
                                            <div class="mt-4">
                                                <button type="submit" name="submit" class="btn btn-primary w-md"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-upload" viewBox="0 0 16 16">
                                                        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                                        <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z"/>
                                                    </svg> Upload Theme Content</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div> <!-- container-fluid -->
        </div>
	    <?php include'right-sidebar.php'; ?>
        <?php include'script.php'; ?>

</body>
</html>

<?php

if (isset($_POST['submit'])) {
    $theme = $_POST['theme'];
    $sermon = $_POST['sermon'];
    $preacher = $_POST['preacher'];
    $themetxt = $_POST['themetxt'];
    $music = $_POST['music'];


    try{
        $insert_event = "INSERT INTO theme(theme_title, theme_sermon, theme_preacher, theme_text, theme_music) VALUES(?, ?, ?, ?, ?)";
        $run_query = $conn->prepare($insert_event);
        $run_query->execute([$theme,$sermon,$preacher,$themetxt,$music]);

        if ($run_query->rowCount() > 0){
            echo '<script>swal("Compelete", "Songs Uploaded Successfully", "success");</script>';
        }
        else{
            echo '<script>swal("Failed", "Songs Not Uploaded Successfully", "error");</script>';
        }
    } catch (PDOException $e) {
        echo '<script>swal("Error", "Database Error: ' . $e->getMessage() . '", "error");</script>';
    }
    

}


?>