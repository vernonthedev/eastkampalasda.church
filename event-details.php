<!doctype html>
<html class="u-theme--denim" lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<?php include "head.php"; ?>
<?php include "loading.php"; ?>
<?php include "header.php"; ?>
<?php include "config.php"; ?>


<?php
$recv = $_GET['id'];

$sql = "SELECT * FROM event_list WHERE event_id = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$recv]);
$rows = $stmt->fetchAll();
foreach ($rows as $row) {
  if ($recv != $row->event_id) {
    //show 404 page incase the user enters a value of page not available in the system
    http_response_code(404);
  } else {
    //formating the date into human-readable format
    $eventDate = date("l, F j, Y", strtotime($row->event_date));
?>




    <main role="main" class="l-main u-padding--double--bottom u-spacing--double">
      <header class="c-page-header c-page-header__feature">
        <div class="c-page-header__content">
          <div class="c-media-block c-block c-block__inline l-grid l-grid--7-col l-grid-wrap l-grid-wrap--6-of-7">
            <div class="c-block__image o-background-image u-background--cover u-padding--zero--sides l-grid-item l-grid-item--m--3-col">

              <style type="text/css">
                .o-background-image {
                  background-image: url('admin/events/<?php echo $row->event_img; ?>');
                }

                @media(min-width: 500px) {
                  .o-background-image {
                    background-image: url('admin/events/<?php echo $row->event_img; ?>');
                  }
                }

                @media(min-width: 1200px) {
                  .o-background-image {
                    background-image: url('admin/events/<?php echo $row->event_img; ?>');
                  }
                }

                @media(min-width: 1800px) {
                  .o-background-image {
                    background-image: url('admin/events/<?php echo $row->event_img; ?>');
                  }
                }
              </style>

              <div class="c-block__image-outer-wrap">
                <div class="c-block__image-wrap"><a title="Photo: EKC">

                  </a>
                  <div class="c-block__caption u-color--white-transparent u-padding--bottom u-padding--top u-padding--sides">Photo: East Kampala SDA Church</div>
                </div>
              </div>
            </div>
            <div class="c-block__content u-padding--bottom u-padding--top u-spacing l-grid-item l-grid-item--m--3-col u-theme--border-color--darker--left u-theme--background-color--darker u-theme--color--lighter">
              <div class="c-block__group u-spacing">
                <div class="u-width--100p u-spacing">
                  <h4 class="c-block__kicker u-space--quarter--bottom">New Event</h4>
                  <h1 class="c-block__title u-color--white u-font--primary--l u-font-weight--bold u-space--zero u-theme--color--lighter">
                    <a class="c-block__title-link u-theme--link-hover--light"><?php echo $row->event_title; ?></a>
                  </h1>
                  <p class="c-block__description">Please Endeavour to attend in person and come along with a friend.</p>
                </div>
                <div class="c-block__meta">
                  <div class="c-block__category u-text-transform--upper"><?php echo $row->event_place; ?></div><time datetime="2023-12-07T12:00:00.290Z" class="c-block__date u-text-transform--upper"><?php echo $eventDate; ?></time>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>

      <section class="u-padding--zero--sides u-spacing--double--until-large l-grid l-grid--7-col  l-grid-wrap--6-of-7 u-shift--left--1-col--at-large">
        <div class="c-article l-grid-item l-grid-item--l--3-col l-grid-item--xl--3-col">
          <article class="text has-drop-cap c-article__body u-spacing">
            <p><?php echo $row->event_content; ?></p>
          </article>
        </div>


        <div class="c-sidebar l-grid-item l-grid-item--l--2-col l-grid-item--xl--2-col u-padding--zero--sides">
          <div class="u-spacing--double u-padding--right">
            <section class="widget c-widget c-carbon_fields_alps_widget_text_with_link-2 c-carbon_fields_alps_widget_text_with_link o-link-wrapper--underline u-spacing u-background-color--gray--light u-padding u-theme--border-color--darker u-border--left can-be--dark-dark">
              <div class="c-block__breakout u-padding u-padding--double--bottom u-padding--double--top u-spacing u-theme--background-color--darker">
                <h3 class="c-block__title u-color--white">Our Engagements</h3>
                <p class="c-block__body u-theme--color--lighter">Seventh-day Adventist activities are meant to nourish our lives to live up to the expectations that our Lord Jesus Christ would desire us to have and manifest within our lives. Let us always participate and love one another.</p>
                <a class="o-button o-button--lighter" href="events.php">
                  View More </a>
              </div>
            </section>
          </div>
        </div>
      </section>




    </main>






<?php
  }
}
?>




<?php include "footer.php"; ?>
<?php include "scripts.php"; ?>