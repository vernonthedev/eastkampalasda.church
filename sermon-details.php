<!doctype html>
<html class="u-theme--denim" lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<?php include "head.php"; ?>
<?php include "loading.php"; ?>
<?php include "header.php"; ?>
<?php include "config.php"; ?>



<?php
$recv = $_GET['id'];

$sql = "SELECT * FROM news WHERE news_id = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$recv]);
$rows = $stmt->fetchAll();
foreach ($rows as $row) {
  if ($recv != $row->news_id) {
    //show 404 page incase the user enters a value of page not available in the system
    http_response_code(404);
  } else {
?>
    <header class="c-page-header c-page-header__long u-theme--background-color--dark  u-space--zero--top ">
      <div class="c-page-header__long--inner l-grid l-grid--7-col ">
        <div class="c-page-header__content c-page-header__long__content l-grid-wrap l-grid-wrap--5-of-7 u-shift--left--1-col--at-xxlarge">
          <h1 class="u-font--primary--xl u-color--white u-font-weight--bold">
            <?php echo $row->news_title; ?>
          </h1>
        </div>
      </div>
    </header>
    <section id="top" class="l-main__content l-grid l-grid--7-col u-shift--left--1-col--at-large l-grid-wrap--6-of-7 u-spacing--double--until-large">
      <div class="c-article l-grid-item l-grid-item--l--3-col l-grid-item--xl--3-col">
        <article class="text c-article__body u-spacing @isset($GLOBALS[&quot;classes&quot;]) post-7233 morning_watch type-morning_watch status-publish hentry category-morning-watch">
          <div class="c-media-block c-block c-block__inline c-block__hero c-block--reversed l-grid--5-col l-grid-wrap l-grid-wrap--6-of-7">
            <div class="c-block__image l-grid-item l-grid-item--m--2-col u-padding--zero--sides">
              <div class="c-block__image-outer-wrap">
                <div class="c-block__image-wrap ">
                  <picture class="picture">
                    <video style="display: none;">
                      <source srcset="admin/news-images/<?php echo $row->news_img; ?>" media="(min-width: 500px)">
                      <source srcset="admin/news-images/<?php echo $row->news_img; ?>" media="(min-width: 300px)">
                    </video>
                    <img itemprop="image" srcset="admin/news-images/<?php echo $row->news_img; ?>" alt="Alt Text">
                  </picture>
                </div>
              </div>
            </div>
            <div class="c-block__content u-spacing l-grid-item l-grid-item--m--3-col u-border-left--black--at-large u-theme--border-color--darker--left u-theme--color--lighter u-theme--background-color--darker u-padding--top u-padding--bottom u-flex--align-end">
              <div class="u-spacing c-block__group ">
                <div class="u-width--100p u-spacing">
                  <h4 class="c-block__kicker u-space--quarter--bottom ">Memory Verse</h4>
                  <h4 class="c-block__kicker u-space--quarter--bottom ">Devotion</h4>
                  <h1 class="c-block__title u-color--white u-font--primary--l u-space--zero">
                    <a href="/" class="c-block__title-link u-theme--link-hover--light">
                      <?php echo $row->news_title; ?></a>
                  </h1>
                  <p class="c-block__description">
                  <p><?php echo $row->news_content; ?></p>
                  </p>
                </div>
                <div class="c-block__meta ">
                  <span class="c-block__category u-text-transform--upper"><?php echo $row->news_type; ?></span></br>
                  <time class="c-block__date u-text-transform--upper"> <?php echo $row->news_place; ?></time>
                </div>
              </div>
            </div>
          </div>
          
          
          <div class="u-padding  ">

          <div class="js-this c-inline-sidebar-block c-block u-background-color--gray--light u-border--left u-theme--border-color--darker--left can-be--dark-dark">
            <div class="c-inline-sidebar-block__header u-padding">
              <h2 class="c-inline-sidebar-block__title u-theme--color--darker">
                <span class="u-theme--color--base">Thank You For Visiting East Kampala SDA Church Website! You are warmly invited to come and Worship with us every Sabbath.</span>
              </h2>
            </div>
          </div>
          </div>
          
        </article>
        <section class="c-comments u-spacing--double">
        </section>
      </div>
      <div class="c-sidebar l-grid-item l-grid-item--l--2-col l-grid-item--xl--2-col u-padding--zero--sides">

        </main>

    <?php
  }
}
    ?>


    <?php include "footer.php"; ?>

    <?php include "scripts.php"; ?>