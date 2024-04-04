<!doctype html>
<html class="u-theme--denim" lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<?php include "head.php"; ?>
<?php include "loading.php"; ?>
<?php include "header.php"; ?>
<?php include "config.php"; ?>



<header class="c-page-header c-page-header__long u-theme--background-color--dark  u-space--zero--top ">
  <div class="c-page-header__long--inner l-grid l-grid--7-col ">
    <div class="c-page-header__content c-page-header__long__content l-grid-wrap l-grid-wrap--5-of-7 u-shift--left--1-col--at-xxlarge">
            <h1 class="u-font--primary--xl u-color--white u-font-weight--bold">
        Announcements
      </h1>
    </div>
  </div>
</header>

<div class="relative flex min-h-screen flex-col  overflow-hidden bg-gray">
  <div class="mx-auto max-w-screen-xl px-4 w-full">
    <h2 class="mb-4 font-bold text-xl text-gray-600">Take Note!</h2>
    <div class="grid w-full sm:grid-cols-2 xl:grid-cols-3 gap-6">
<?php
    // Pagination setup
    $itemsPerPage = 7;
    $current_page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
    $offset = ($current_page - 1) * $itemsPerPage;
    // get all the announcements from the db and display them 
    $sql = "SELECT * FROM announcements ORDER BY ann_id DESC LIMIT $offset, $itemsPerPage";
    $run_query = $conn->prepare($sql);
    $run_query->execute();
    $rows = $run_query->fetchAll();
    foreach ($rows as $row) {
        ?>

<div class="flex justify-center">
    <a class="rounded-3xl inline-block overflow-hidden shadow-xl max-w-xs cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-102 duration-300">
        <div class="relative group w-full overflow-hidden bg-black h-32 rounded-t-3xl">
            <img
            src="https://media.istockphoto.com/id/1313654813/vector/megaphone-with-exciting-news-speech-bubble-banner-loudspeaker-label-for-business-marketing.jpg?s=612x612&w=0&k=20&c=0Gm0WhT6uMnzhvElm3OB5hu8_Dsn5SvfXfkMNuA_UAw="
            class="object-cover w-full h-full transform duration-700 backdrop-opacity-100"
            alt="Speaker Annoucement Image"
            />
            <div class="absolute bg-gradient-to-t from-black w-full h-full flex items-end justify-center -inset-y-0"><h1 class="font-bold text-2xl text-white mb-2"><?php echo $row->ann_title; ?></h1></div>
        </div>
        <div class="bg-white">
            <div class="text-center px-3 pb-6 pt-2">
                <p class="mt-2 font-light text-slate-700">
                <?php echo $row->ann_content; ?>
                </p>
            </div>
  
        </div>
    </a>

</div>


<?php
    }
    ?>

</div>
</div>
</div>




<?php include "footer.php"; ?>
<?php include "scripts.php";?>