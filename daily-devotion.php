<!doctype html>
<html class="u-theme--denim" lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<?php include "head.php"; ?>
<?php include "loading.php"; ?>
<?php include "header.php"; ?>
<?php include "config.php"; ?>





<header class="c-hero c-page-header c-page-header__feature  ">
  <div class="c-page-header__content">
    <section class="c-hero-carousel">
      <div class="c-carousel c-carousel--inset u-position--relative">
        <div class="c-carousel__slides js-carousel__single-item">
          <div class="c-carousel__item--inset u-position--relative">
            <picture class="picture">
              <!--[if IE 9]><video style="display: none;"><![endif]-->
              <source srcset="assets/daily-devotional-banner.jpg"
                media="(min-width: 1100px)">
              <source srcset="assets/daily-devotional-banner.jpg"
                media="(min-width: 800px)">
              <source srcset="assets/daily-devotional-banner.jpg"
                media="(min-width: 500px)">
              <!--[if IE 9]></video><![endif]-->
              <img itemprop="image"
                srcset="assets/daily-devotional-banner.jpg" alt>
            </picture>
            <div class="c-carousel__item-text__wrap u-theme--background-color-trans--dark">
              <div class="l-container">
                <div class="c-carousel__item-text u-spacing--half">
                  <div class="c-carousel__item-text--inner">
                    <h2 class="u-font--primary--xl c-carousel__item-heading">
                      Keep the morning watch
                    </h2>
                    <div
                      class="c-carousel__item-dek u-padding--half--bottom u-theme--primary-transparent-background-color">
                      <p></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</header>




<section>
  <!-- All the Devotions -->

<div class="relative flex min-h-screen flex-col  overflow-hidden bg-gray">
  <div class="mx-auto max-w-screen-xl px-4 w-full">
    <h2 class="mb-4 font-bold text-xl text-gray-600">Read the Morning Watch</h2>
    <div class="grid w-full sm:grid-cols-2 xl:grid-cols-4 gap-6">

    

        <!-- Sermons Listing -->
        <?php
        // Pagination setup
        $itemsPerPage = 7;
        $current_page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        $offset = ($current_page - 1) * $itemsPerPage;

        $sql = "SELECT * FROM news ORDER BY news_id DESC LIMIT $offset, $itemsPerPage";
        $run_query = $conn->prepare($sql);
        $run_query->execute();
        $rows = $run_query->fetchAll();
        foreach ($rows as $row) {
          // Formatting the date into a human-readable format
          $newsDate = date("l, F j, Y", strtotime($row->news_date));
          ?>

      <div class="relative flex flex-col shadow-md rounded-xl overflow-hidden hover:shadow-lg hover:-translate-y-1 transition-all duration-300 max-w-sm">
        <a href="sermon-details.php?id=<?php echo $row->news_id; ?>" class="hover:text-orange-600 absolute z-30 top-2 right-0 mt-2 mr-3">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
          </svg>
        </a>
        <a href="sermon-details.php?id=<?php echo $row->news_id; ?>" class="z-20 absolute h-full w-full top-0 left-0 ">&nbsp;</a>
        <div class="h-auto overflow-hidden">
          <div class="h-44 overflow-hidden relative">
            <img src="admin/news-images/<?php echo $row->news_img; ?>" alt="<?php echo $row->news_title; ?>">
          </div>
        </div>
        <div class="bg-white py-4 px-3">
          <h3 class="text-medium mb-2 font-medium"><?php echo $row->news_title; ?></h3>
          <div class="flex justify-between items-center">
            <p class="text-medium text-gray-400">
            <?php echo $newsDate ?> | <strong>Read More</strong>
          </p>
          <div class="relative z-40 flex items-center gap-2">
   
            <a class="text-orange-600 hover:text-blue-500" href="sermon-details.php?id=<?php echo $row->news_id; ?>">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
            </svg>
            </a>
          </div>
          </div>
        </div>
      </div>
      
      <?php
        }
        ?>
      
    </div>
  </div>
</div>
</section>

<ul class="pagination">
  <?php
  $total_records = $conn->query("SELECT COUNT(*) FROM news")->fetchColumn();
  $total_pages = ceil($total_records / $itemsPerPage);

  for ($page = 1; $page <= $total_pages; $page++) {
    echo "<li" . ($page == $current_page ? ' class="active"' : '') . ">";
    echo "<a href='daily-devotions.php?page=" . $page . "'>" . $page . "</a>";
    echo "</li>";
  }
  ?>
</ul>
</main>








<?php include "footer.php"; ?>


<?php include "scripts.php";?>