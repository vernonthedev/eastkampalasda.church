<!DOCTYPE html>
<html class="u-theme--denim" lang="en-US">
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <?php include "head.php"; ?>
    <?php include "loading.php"; ?>
    <?php include "header.php"; ?>
    <?php include "config.php"; ?>


    <style>
        .pagination li a {
            margin: 0 5px; /* Adjust the value as needed */
        }

        .audio-card {
            background-color: #fff; 
            border: 1px solid #ddd; 
            border-radius: 8px;
            overflow: hidden;
            transition: transform 0.3s ease;
            margin-bottom: 1rem;
            width:100%
        }

        .audio-card:hover {
            transform: scale(1.05);
        }

        .card-body {
            padding: 1rem;
        }

        .audio-title {
            font-size: 1.25rem;
            margin-bottom: 0.5rem;
        }

        .audio-player {
            width: 100%;
        }

        @media (min-width: 640px) {
            /* Three items per row on larger screens */
            .audio-card {
                width: calc(33.3333% - 1rem);
                margin-right: 1rem;
            }

            /* Remove margin from the last item in the row */
            .audio-card:nth-child(3n) {
                margin-right: 0;
            }
        }
    </style>
</head>

<body>

<header class="c-page-header c-page-header__long u-theme--background-color--dark u-space--zero--top ">
    <div class="c-page-header__long--inner l-grid l-grid--7-col ">
        <div class="c-page-header__content c-page-header__long__content l-grid-wrap l-grid-wrap--5-of-7 u-shift--left--1-col--at-xxlarge">
            <h1 class="u-font--primary--xl u-color--white u-font-weight--bold">
                Audio Sermons
            </h1>
        </div>
    </div>
</header>

<div class="container mx-auto flex flex-wrap">
    <?php
    $itemsPerPage = 6; // Adjust the number of audios per page
    $current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    $offset = ($current_page - 1) * $itemsPerPage;

    $sql = "SELECT * FROM audio_uploads ORDER BY id DESC LIMIT $offset, $itemsPerPage";
    $run_query = $conn->prepare($sql);
    $run_query->execute();
    $rows = $run_query->fetchAll();
    foreach ($rows as $row) {
        ?>
        <div class="audio-card mb-4 sm:w-full md:w-1/2 lg:w-1/3 xl:w-1/3">
            <div class="card-body">
                <h3 class="audio-title"><?php echo $row->audio_name?></h3>
                <audio controls class="audio-player">
                    <source src="admin/uploads/audios/<?php echo $row->audio_name?>" type="audio/mp3">
                    Your browser does not support the audio element.
                </audio>
            </div>
        </div>
        <?php
    }
    ?>
</div>

<ul class="pagination">
    <?php
    $total_records = $conn->query("SELECT COUNT(*) FROM audio_uploads")->fetchColumn();
    $total_pages = ceil($total_records / $itemsPerPage);

    for ($page = 1; $page <= $total_pages; $page++) {
        echo "<li" . ($page == $current_page ? ' class="active"' : '') . ">";
        echo "<a href='audio-sermons.php?page=" . $page . "'>" . $page . "</a>";
        echo "</li>";
    }
    ?>
</ul>

<?php include "footer.php"; ?>
<?php include "scripts.php"; ?>
</body>

</html>
