<!doctype html>
<html class="u-theme--denim" lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<?php include "head.php"; ?>
<?php include "loading.php"; ?>
<?php include "header.php"; ?>
<?php include "config.php"; ?>

<?php

$page_size = 10; // Number of events per page
$current_page = isset($_GET['page']) ? intval($_GET['page']) : 1; // Get current page from URL parameter
// Calculate offset for pagination
$offset = ($current_page - 1) * $page_size;


// Fetching all the events from the database
$sql = "SELECT * FROM event_list ORDER BY event_id  DESC LIMIT :limit OFFSET :offset";
$run_query = $conn->prepare($sql);
$run_query->bindValue(':limit', $page_size, PDO::PARAM_INT);
$run_query->bindValue(':offset', $offset, PDO::PARAM_INT);
$run_query->execute();
$rows = $run_query->fetchAll();
?>


<main class="l-main u-spacing--double u-padding--double--bottom" role="main">
  <style type="text/css">
    .o-background-image {
      background-image: url();
    }

    @media (min-width: 900px) {
      .o-background-image {
        background-image: url();
      }
    }

    @media (min-width: 1100px) {
      .o-background-image {
        background-image: url();
      }
    }
  </style>
  <header class="c-page-header c-page-header__long u-theme--background-color--dark u-space--zero--top o-background-image u-background--cover has-background">
    <div class="c-page-header__long--inner l-grid l-grid--7-col u-gradient--bottom">
      <div class="c-page-header__content c-page-header__long__content l-grid-wrap l-grid-wrap--5-of-7 u-shift--left--1-col--at-xxlarge u-border-left--white--at-large">
        <span class="o-kicker u-color--white"></span>
        <h1 class="u-font--primary--xl u-color--white u-font-weight--bold">
          Upcoming Events
        </h1>
      </div>
    </div>
  </header>
  <section id="top" class="l-main__content l-grid l-grid--7-col l-grid-wrap--6-of-7 u-spacing--double--until-xxlarge u-padding--zero--sides u-shift--left--1-col--at-large">
    <article class="c-article l-grid-item l-grid-item--l--4-col  post-1104 page type-page status-publish hentry">
      <div class="c-article__body">
        <div class="text u-spacing--double u-space--double--top">
          <div class="l-grid l-grid--7-col l-grid-item--6-col l-grid-item--m--4-col u-no-gutters">
            <?php
            //loop through the retrieved programs
            foreach ($rows as $row) {
              //formating the date into human-readable format
              $eventDate = date("l, F j, Y", strtotime($row->event_date));
            ?>

              <div class="l-grid-item l-grid-item--xs--3-col l-grid-item--m--2-col">
                <div class="c-media-block c-block c-media-block__stacked c-block__stacked u-space--right u-space--double--bottom">
                  <div class="c-media-block__image c-block__image   ">
                    <div class="c-block__image-wrap ">
                      <a href="event-details.php?id=<?php echo $row->event_id; ?>"> <img src="admin/events/<?php echo $row->event_img; ?>" width="600" height="600" alt="<?php echo $row->event_title; ?>"> </a>
                    </div>
                  </div>
                  <div class="c-media-block__content c-block__content u-spacing u-border--left u-theme--border-color--darker--left">
                    <div class="u-spacing c-block__group c-media-block__group ">
                      <div class="u-spacing u-width--100p">
                        <h3 class="c-media-block__title c-block__title u-theme--color--darker u-font--primary--m ">
                          <a href="event-details.php?id=<?php echo $row->event_id; ?>" class="c-block__title-link u-theme--link-hover--dark">
                            <?php echo $row->event_title; ?>
                          </a>
                        </h3>
                        <p class="c-media-block__description c-block__description">
                          <?php echo $eventDate ?> | <?php echo $row->event_place ?> </p>
                      </div>
                      <a href="event-details.php?id=<?php echo $row->event_id; ?>" class="c-block__button o-button o-button--outline"><span class="u-icon u-icon--m u-path-fill--base u-space--half--right"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <title>Long right arrow</title>
                            <path d="M18.29,8.59l-3.5-3.5L13.38,6.5,15.88,9H.29v2H15.88l-2.5,2.5,1.41,1.41,3.5-3.5L19.71,10Z" fill="#9b9b9b" />
                          </svg>
                        </span>Read More</a>
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
    </article>
  </section>




<!-- Pagination Links -->
<div class="pagination">
  <?php if ($current_page > 1) { ?>
    <a href="?page=<?php echo $current_page - 1; ?>">Previous</a>
  <?php } ?>
  
  <?php // Display page numbers or links ?>
  <?php for ($i = 1; $i <= ceil(count($rows) / $page_size); $i++) { ?>
    <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
  <?php } ?>

  <?php if ($current_page < ceil(count($rows) / $page_size)) { ?>
    <a href="?page=<?php echo $current_page + 1; ?>">Next</a>
  <?php } ?>
</div>
</main>

<div class="js-this c-inline-sidebar-block c-block u-background-color--gray--light u-border--left u-theme--border-color--darker--left can-be--dark-dark">
            <div class="c-inline-sidebar-block__header u-padding">
              <h2 class="c-inline-sidebar-block__title u-theme--color--darker">
                <span class="u-theme--color--base">Thank You For Visiting East Kampala SDA Church Website! You are warmly invited to come and Worship with us every Sabbath.</span>
              </h2>
            </div>
          </div>

<?php include "footer.php"; ?>
<?php include "scripts.php"; ?>