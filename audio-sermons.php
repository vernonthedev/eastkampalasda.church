<!DOCTYPE html>
<html class="u-theme--denim" lang="en-US">
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <?php include "head.php"; ?>
    <?php include "loading.php"; ?>
    <?php include "header.php"; ?>
    <?php include "config.php"; ?>


    <style>
         body {
         /* font-size: 16px; */
         background-color: #ECECEC;

      }
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


<div class="relative h-96 max-w-sm mx-auto mt-20 px-5 py-8 group rounded-3xl bg-gray-200 overflow-hidden shadow-xl">
         <img src="assets/audio.jpg" alt="Audio Image for East Kampala SDA Church" class="absolute w-full h-full inset-0 object-cover">
         <div class="absolute inset-0 w-full h-full rounded-3xl bg-black bg-opacity-0 transition duration-500 backdrop-filter group-hover:bg-opacity-20 group-hover:backdrop-blur">
         </div>
         <div class="absolute inset-x-5 text-white">
            <h2 class="text-4xl font-semibold mb-2">Listen To Our Audios</h2>
            <p class="text-sm font-medium uppercase tracking-wider mb-6">Inspiring Messages</p>
            <p class="hidden group-hover:block">Don't miss out on any wonderful messages shared by East Kampala SDA Church through our Audio Podcast.</p>
            <blockquote class="hidden group-hover:block font-italic">Share With Friends</blockquote>
         </div>
         <a href="#" target="_blank"><button class="absolute inset-x-5 bottom-8 py-3 rounded-2xl font-semibold bg-white shadow-lg hidden transition duration-200 hover:bg-gray-300 group-hover:block"><i class="bi bi-mic-fill"></i> Learn more</button></a>
      </div>

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
