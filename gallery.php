<!doctype html>
<html class="u-theme--denim" lang="en-US">
    <?php include "head.php"; ?>
    <?php include "config.php"; ?>
    <?php include "loading.php"; ?>
    <style>
        /* Base styles for larger screens */
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            grid-auto-rows: 200px; /* Set a fixed height for each row */
            grid-gap: 10px;
        }

        .gallery-item {
            position: relative;
            overflow: hidden; /* Ensure no extra space due to varying image sizes */
            border-radius: 8px;
            cursor: pointer;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Ensure images cover the entire area */
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

        .pagination li a {
            margin: 0 5px; /* Adjust the value as needed */
        }

        /* Responsive styles for smaller screens (less than 768px) */
        @media (max-width: 768px) {
            .gallery {
                grid-template-columns: repeat(auto-fill, minmax(40%, 1fr)); /* 2 images per row on smaller screens */
            }
        }
    </style>

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

    <section id="top" class="l-main__content">
        <div class="gallery">
            <?php
            // Pagination setup
            $itemsPerPage = 10;
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
        </div>
    </section>

    <!-- Lightbox -->
    <div class="lightbox">
        <img src="" alt="Lightbox Image" />
    </div>

    <ul class="pagination">
        <?php
        $total_records = $conn->query("SELECT COUNT(*) FROM image_gallery")->fetchColumn();
        $total_pages = ceil($total_records / $itemsPerPage);

        for ($page = 1; $page <= $total_pages; $page++) {
            echo "<li" . ($page == $current_page ? ' class="active"' : '') . ">";
            echo "<a href='gallery.php?page=" . $page . "'>" . $page . "</a>";
            echo "</li>";
        }
        ?>
    </ul>

    <div class="js-this c-inline-sidebar-block c-block u-background-color--gray--light u-border--left u-theme--border-color--darker--left can-be--dark-dark">
            <div class="c-inline-sidebar-block__header u-padding">
              <h2 class="c-inline-sidebar-block__title u-theme--color--darker">
                <span class="u-theme--color--base">Thank You For Visiting East Kampala SDA Church Website! You are warmly invited to come and Worship with us every Sabbath.</span>
              </h2>
            </div>
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
