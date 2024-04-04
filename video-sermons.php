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

        /* Base styles for larger screens */
        .video-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .video-item {
            flex: 0 1 calc(25% - 10px); /* Four videos per row with margin */
            margin: 10px;
        }

        .video-item video {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }

        /* Responsive styles for smaller screens (less than 768px) */
        @media (max-width: 768px) {
            .video-item {
                flex: 0 1 calc(100% - 10px); /* One video per row on smaller screens */
            }
        }
    </style>
</head>

<body>

    <header class="c-page-header c-page-header__long u-theme--background-color--dark  u-space--zero--top ">
        <div class="c-page-header__long--inner l-grid l-grid--7-col ">
            <div class="c-page-header__content c-page-header__long__content l-grid-wrap l-grid-wrap--5-of-7 u-shift--left--1-col--at-xxlarge">
                <h1 class="u-font--primary--xl u-color--white u-font-weight--bold">
                    Video Sermons
                </h1>
            </div>
        </div>
    </header>


    <div class="relative h-96 max-w-sm mx-auto mt-20 px-5 py-8 group rounded-3xl bg-gray-200 overflow-hidden shadow-xl">
         <img src="assets/youtube.jpg" alt="Youtube Image for East Kampala SDA Church" class="absolute w-full h-full inset-0 object-cover">
         <div class="absolute inset-0 w-full h-full rounded-3xl bg-black bg-opacity-0 transition duration-500 backdrop-filter group-hover:bg-opacity-20 group-hover:backdrop-blur">
         </div>
         <div class="absolute inset-x-5 text-white">
            <h2 class="text-4xl font-semibold mb-2">Our Youtube</h2>
            <p class="text-sm font-medium uppercase tracking-wider mb-6">Inspiring Videos</p>
            <p class="hidden group-hover:block">Don't miss out on any wonderful messages shared by East Kampala SDA Church by subscribing to our Youtube Channel.</p>
            <blockquote class="hidden group-hover:block font-italic">Share With Friends</blockquote>
         </div>
         <a href="https://www.youtube.com/@eastkampalasdachurch" target="_blank"><button class="absolute inset-x-5 bottom-8 py-3 rounded-2xl font-semibold bg-white shadow-lg hidden transition duration-200 hover:bg-gray-300 group-hover:block"><i class="bi bi-youtube"></i> Learn more</button></a>
      </div>

    <div class="video-container">
        <?php
        $itemsPerPage = 4; // Adjust the number of videos per row
        $current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $offset = ($current_page - 1) * $itemsPerPage;

        $sql = "SELECT * FROM video_gallery ORDER BY video_id DESC LIMIT $offset, $itemsPerPage";
        $run_query = $conn->prepare($sql);
        $run_query->execute();
        $rows = $run_query->fetchAll();
        foreach ($rows as $row) {
            ?>
            <div class="video-item">
                <video src="admin/videos-gallery/<?php echo $row->video_location; ?>" controls></video>
            </div>
        <?php
        }
        ?>
    </div>

    <ul class="pagination">
        <?php
        $total_records = $conn->query("SELECT COUNT(*) FROM video_gallery")->fetchColumn();
        $total_pages = ceil($total_records / $itemsPerPage);

        for ($page = 1; $page <= $total_pages; $page++) {
            echo "<li" . ($page == $current_page ? ' class="active"' : '') . ">";
            echo "<a href='video-sermons.php?page=" . $page . "'>" . $page . "</a>";
            echo "</li>";
        }
        ?>
    </ul>

    <?php include "footer.php"; ?>
    <?php include "scripts.php"; ?>
</body>

</html>
