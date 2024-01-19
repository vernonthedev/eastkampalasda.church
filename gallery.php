<!doctype html>
<html class="u-theme--denim" lang="en-US">

<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <?php include "head.php"; ?>
    <?php include "config.php"; ?>
    <?php include "loading.php"; ?>
    <style>
        /* Inline CSS for gallery cards */
        .gallery-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .gallery-item {
            flex: 0 1 calc(25% - 10px); /* 4 items per row with margin */
            margin: 10px;
            cursor: pointer;
        }

        .gallery-item img {
            width: 200px; /* Set your preferred width */
            height: 150px; /* Set your preferred height */
            border-radius: 8px;
            transition: transform 0.3s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        /* Lightbox styles */
        .lightbox {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.8);
    justify-content: center;
    align-items: center;
    z-index: 9999; /* Set a high z-index value */
}

        .lightbox img {
            max-width: 80%;
            max-height: 80%;
            border-radius: 8px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
</head>

<body>
    <?php include "header.php"; ?>

    <header class="c-page-header c-page-header__long u-theme--background-color--dark  u-space--zero--top ">
        <div class="c-page-header__long--inner l-grid l-grid--7-col ">
            <div class="c-page-header__content c-page-header__long__content l-grid-wrap l-grid-wrap--5-of-7 u-shift--left--1-col--at-xxlarge">
                <h1 class="u-font--primary--xl u-color--white u-font-weight--bold">
                    Gallery
                </h1>
            </div>
        </div>
    </header>

    <section id="top" class="l-main__content l-grid l-grid--7-col u-shift--left--1-col--at-large l-grid-wrap--6-of-7 u-spacing--double--until-xxlarge u-padding--zero--sides">
        <?php
        // Pagination setup
        $itemsPerPage = 7;
        $current_page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        $offset = ($current_page - 1) * $itemsPerPage;

        $sql = "SELECT * FROM image_gallery ORDER BY gallery_id DESC LIMIT $offset, $itemsPerPage";
        $run_query = $conn->prepare($sql);
        $run_query->execute();
        $rows = $run_query->fetchAll();
        foreach ($rows as $row) {
        ?>
            <div class="gallery-item" data-image="admin/images-gallery/<?php echo $row->gallery_img; ?>" data-title="<?php echo $row->gallery_title; ?>">
                <img src="admin/images-gallery/<?php echo $row->gallery_img; ?>" alt="<?php echo $row->gallery_title; ?>" />
            </div>
        <?php
        }
        ?>
    </section>

    <!-- Lightbox -->
    <div class="lightbox">
        <img src="" alt="Lightbox Image" />
    </div>

    <?php include "footer.php"; ?>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const galleryItems = document.querySelectorAll(".gallery-item");
            const lightbox = document.querySelector(".lightbox");

            galleryItems.forEach(item => {
                item.addEventListener("click", function () {
                    const imageSrc = this.getAttribute("data-image");
                    const imageAlt = this.getAttribute("data-title");

                    lightbox.innerHTML = `<img src="${imageSrc}" alt="${imageAlt}"/>`;
                    lightbox.style.display = "flex";
                });
            });

            lightbox.addEventListener("click", function () {
                lightbox.style.display = "none";
                lightbox.innerHTML = "";
            });
        });
    </script>

    <?php include 'scripts.php'; ?>
</body>

</html>
