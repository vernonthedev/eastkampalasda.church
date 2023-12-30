<!doctype html>
<html class="u-theme--denim" lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<?php include "head.php"; ?>
<?php include "header.php"; ?>
<?php include "config.php"; ?>


<?php
$recv = $_GET['id'];

$sql = "SELECT * FROM event_list WHERE event_id = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$recv]);
$rows = $stmt->fetchAll();
foreach($rows as $row){
if($recv != $row->event_id){
    //show 404 page incase the user enters a value of page not available in the system
    http_response_code(404);
}else{
//formating the date into human-readable format
$eventDate = date("l, F j, Y", strtotime($row->event_date));
?>




<main role="main" class="l-main u-padding--double--bottom u-spacing--double"><header class="c-page-header c-page-header__feature"><div class="c-page-header__content"><div class="c-media-block c-block c-block__inline l-grid l-grid--7-col l-grid-wrap l-grid-wrap--6-of-7"><div class="c-block__image o-background-image u-background--cover u-padding--zero--sides l-grid-item l-grid-item--m--3-col">

    <style type="text/css">.o-background-image {
      background-image: url('admin/events/<?php echo $row->event_img; ?>');
    }
@media(min-width: 500px) {	.o-background-image {
      background-image: url('admin/events/<?php echo $row->event_img; ?>');
    }
}
@media(min-width: 1200px) {	.o-background-image {
      background-image: url('admin/events/<?php echo $row->event_img; ?>');
    }
}
@media(min-width: 1800px) {	.o-background-image {
      background-image: url('admin/events/<?php echo $row->event_img; ?>');
    }
}</style>

<div class="c-block__image-outer-wrap"><div class="c-block__image-wrap"><a title="Photo: EKC">

</a><div class="c-block__caption u-color--white-transparent u-padding--bottom u-padding--top u-padding--sides">Photo: EKC</div></div></div></div><div class="c-block__content u-padding--bottom u-padding--top u-spacing l-grid-item l-grid-item--m--3-col u-theme--border-color--darker--left u-theme--background-color--darker u-theme--color--lighter">
    <div class="c-block__group u-spacing">
        <div class="u-width--100p u-spacing">
            <h4 class="c-block__kicker u-space--quarter--bottom">New Event</h4>
            <h1 class="c-block__title u-color--white u-font--primary--l u-font-weight--bold u-space--zero u-theme--color--lighter">
                <a class="c-block__title-link u-theme--link-hover--light"><?php echo $row->event_title; ?></a></h1>
                <p class="c-block__description">Please Endeavour to attend in person and come along with a friend.</p></div>
                <div class="c-block__meta"><div class="c-block__category u-text-transform--upper"><?php echo $row->event_place; ?></div><time datetime="2023-12-07T12:00:00.290Z" class="c-block__date u-text-transform--upper"><?php echo $eventDate; ?></time></div>
            </div></div></div></div></header>

            <section class="u-padding--zero--sides u-spacing--double--until-large l-grid l-grid--7-col  l-grid-wrap--6-of-7 u-shift--left--1-col--at-large"><div class="c-article l-grid-item l-grid-item--l--3-col l-grid-item--xl--3-col">
                <article class="text has-drop-cap c-article__body u-spacing">
                <p><?php echo $row->event_content; ?></p></article>
            </div>


            <div class="c-sidebar l-grid-item l-grid-item--l--2-col l-grid-item--xl--2-col u-padding--zero--sides">
            <div class="u-spacing--double u-padding--right">
                <section
                    class="widget c-widget c-carbon_fields_alps_widget_text_with_link-2 c-carbon_fields_alps_widget_text_with_link o-link-wrapper--underline u-spacing u-background-color--gray--light u-padding u-theme--border-color--darker u-border--left can-be--dark-dark">
                    <div
                        class="c-block__breakout u-padding u-padding--double--bottom u-padding--double--top u-spacing u-theme--background-color--darker">
                        <h3 class="c-block__title u-color--white">Our Engagements</h3>
                        <p class="c-block__body u-theme--color--lighter">Seventh-day Adventist activities are meant to nourish our lives to live up to the expectations that our Lord Jesus Christ would desire us to have and manifest within our lives. Let us always participate and love one another.</p>
                        <a class="o-button o-button--lighter"
                            href="events.php">
                            View More </a>
                    </div>
                </section>
            </div>
        </div>
            </section>




        </main>






            <?php
}}
?>




<?php include "footer.php"; ?>





<script src="https://gc.adventist.org/wp-content/themes/alps-wordpress-v3/app/local/alps/js/script.min.js" type="text/javascript" async></script>
<script>requestAnimationFrame(() => document.body.classList.add( "stk--anim-init" ))</script>


<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5S9TDVF" height="0" width="0" style="display:none;visibility:hidden" aria-hidden="true"></iframe></noscript>
<script src="https://gc.adventist.org/wp-content/plugins/advanced-responsive-video-embedder/build/main.js?ver=b087dd41bba279baeb77" id="arve-main-js"></script>
<script id="jquery-widgetopts-js-extra">
var varWidgetOpts = {"shallNotFixed":".site-footer","margin_top":"0","disable_width":"768","disable_height":"200"};
</script>
<script src="https://gc.adventist.org/wp-content/plugins/extended-widget-options/assets/js/jquery.widgetopts.min.js?ver=6.4.1" id="jquery-widgetopts-js"></script>
<script src="https://gc.adventist.org/wp-content/plugins/duracelltomi-google-tag-manager/js/gtm4wp-contact-form-7-tracker.js?ver=1.18.1" id="gtm4wp-contact-form-7-tracker-js"></script>
<script src="https://gc.adventist.org/wp-content/plugins/duracelltomi-google-tag-manager/js/gtm4wp-form-move-tracker.js?ver=1.18.1" id="gtm4wp-form-move-tracker-js"></script>
<script src="https://gc.adventist.org/wp-content/plugins/spectra-pro/assets/js/loop-builder.js?ver=1.1.1" id="uagb-loop-builder-js"></script>
<script id="app/0-js-before">
!function(){"use strict";var r,n={},e={};function t(r){var o=e[r];if(void 0!==o)return o.exports;var u=e[r]={exports:{}};return n[r](u,u.exports,t),u.exports}t.m=n,r=[],t.O=function(n,e,o,u){if(!e){var f=1/0;for(c=0;c<r.length;c++){e=r[c][0],o=r[c][1],u=r[c][2];for(var i=!0,s=0;s<e.length;s++)(!1&u||f>=u)&&Object.keys(t.O).every((function(r){return t.O[r](e[s])}))?e.splice(s--,1):(i=!1,u<f&&(f=u));if(i){r.splice(c--,1);var a=o();void 0!==a&&(n=a)}}return n}u=u||0;for(var c=r.length;c>0&&r[c-1][2]>u;c--)r[c]=r[c-1];r[c]=[e,o,u]},t.n=function(r){var n=r&&r.__esModule?function(){return r.default}:function(){return r};return t.d(n,{a:n}),n},t.d=function(r,n){for(var e in n)t.o(n,e)&&!t.o(r,e)&&Object.defineProperty(r,e,{enumerable:!0,get:n[e]})},t.o=function(r,n){return Object.prototype.hasOwnProperty.call(r,n)},function(){var r={666:0};t.O.j=function(n){return 0===r[n]};var n=function(n,e){var o,u,f=e[0],i=e[1],s=e[2],a=0;if(f.some((function(n){return 0!==r[n]}))){for(o in i)t.o(i,o)&&(t.m[o]=i[o]);if(s)var c=s(t)}for(n&&n(e);a<f.length;a++)u=f[a],t.o(r,u)&&r[u]&&r[u][0](),r[u]=0;return t.O(c)},e=self.webpackChunk_roots_bud_sage_alps_wordpress_v3=self.webpackChunk_roots_bud_sage_alps_wordpress_v3||[];e.forEach(n.bind(null,0)),e.push=n.bind(null,e.push.bind(e))}()}();
</script>
<script src="https://gc.adventist.org/wp-content/themes/alps-wordpress-v3/public/js/app.81f8c1.js" id="app/0-js"></script>
<script src="https://gc.adventist.org/wp-content/plugins/youtube-embed-plus/scripts/fitvids.min.js?ver=14.2" id="__ytprefsfitvids__-js"></script>
<script type="text/javascript">
                        if (jQuery('nav.c-footer__secondary-nav__list').length == 0) {
                  var parent = jQuery('.c-footer__secondary-nav');
                  if (parent.length > 0) {
                    parent.append(jQuery('<nav class=\"c-footer__secondary-nav__list u-spacing--half\"></nav>'));
                  } else {
                    console.log('ERROR: failed to find preparation selector for cookie settings button, ignoring');
                  }
                }
                            var parent = jQuery('nav.c-footer__secondary-nav__list');
              if (parent.length > 0) {
                parent.append(jQuery('<a href=\"javascript:void(0);\" class=\"c-footer__secondary-nav__link u-theme--link-hover--light u-link--white ot-sdk-show-settings\"></a>'));
              } else {
                console.log('ERROR: failed to find placement selector for cookie settings button, inserting alternate');
                document.write('<button id=\"ot-sdk-btn\" class=\"ot-sdk-show-settings\"></button>');
              }
                  </script>
<script type="text/javascript">
        window.optanon_class_fix_attempts = 0;
        window.optanonClassFixer = function() {
          var button = jQuery('.ot-sdk-show-settings').filter(function() { return jQuery(this).text().trim() != '' });
          if (button.length > 0) {
                          button.addClass('replaced');
                                      button.html('<span class=\"u-icon u-icon--xs u-path-fill--white u-space--half--right\"><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 10.01 10\"><title>Three horizontal bars</title><path d=\"M10,2.31H0V0H10ZM6.36,3.85H0v2.3H6.36ZM8.22,7.7H0V10H8.22Z\" fill=\"#231f20\"></path></svg></span><font>Cookie Settings</font>');
                      } else if (window.optanon_class_fix_attempts < 60) {
            window.optanon_class_fix_attempts++;
            setTimeout(window.optanonClassFixer, 250);
          } else {
            console.log('ERROR: timeout fixing cookie settings button (is OneTrust enabled & is button configured correctly?)');
          }
        }
        jQuery(window).on('load', window.optanonClassFixer);
      </script>
<style>
        .ot-sdk-show-settings {
  display: none;
}
.ot-sdk-show-settings.replaced {
  display: inline;
}      </style>
</div>
<aside class="l-wrap__sabbath l-sabbath js-sticky-parent js-toggle-menu ">
<div class="l-sabbath__logo js-sticky">
<div class="l-sabbath__logo--inner ">
<div class="l-sabbath__logo-light u-path-fill--white">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 253.71 227.63"><title>Seventh-day Adventist logo mark</title><path d="M67.68,120.38c-.1-9.91,2.8-18.41,20.8-36.41l39-39c10.4-10.4,19.1-19.29,19.1-29V.67c0-.89-1.1-.89-1.2,0-2.6,12.4-7.5,17.3-17.8,27.61L82.28,73.47c-17.1,17-19.5,35.1-15.8,46.91C66.78,121.38,67.68,121.47,67.68,120.38Zm64.2,38.9c0,.89,1,.89,1.2,0,2.6-12.5,7.6-17.4,17.8-27.61L166,116.78c19.8-19.9,10.7-39-.9-44.31-1-.5-1.4.31-.6,1,9.3,8,6.5,21.5-5.2,33.2L151,115c-10.4,10.31-19.1,19.2-19.1,29Zm81.8,26.6L168,178.17l-17.1,17.11c-10.4,10.39-19,19.3-19,29V227c0,.7.9.9,1.2.11,3.2-8.7,13.9-18.11,33.5-14.8,0,0,85.4,14.8,86.1,14.8a.9.9,0,0,0,1-.61.79.79,0,0,0-.2-.8c-.3-.39-39.8-39.8-39.8-39.8Zm-107.5,1h15a.66.66,0,0,0,.6-.6c0-7.9-6-13.31-30-9.2L40,186S.58,225.37.28,225.78a.79.79,0,0,0-.1,1.1.81.81,0,0,0,.8.2c.7-.11,86.1-14.8,86.1-14.8,19.6-3.31,30.3,6,33.5,14.8.3.8,1.2.7,1.2-.11v-29.5a.66.66,0,0,0-.6-.6l-15,.1a.64.64,0,0,1-.6-.6v-8.9a.65.65,0,0,1,.6-.6Zm26.8,25.9a36.3,36.3,0,0,1,6.9-15.81h-7.5a.65.65,0,0,0-.6.61v15.2c0,.89,1.1.89,1.2,0Zm13.6-158.6c0-.91-1.1-.91-1.2,0-2.6,12.39-7.5,17.29-17.8,27.6l-39.8,39.69c-19.8,19.81-10.7,39,.9,44.31,1,.5,1.4-.4.6-1-9.3-8-6.5-21.61,5.2-33.2l33-33c10.4-10.4,19.1-19.3,19.1-29Zm-19.1,17.49c10.4-10.3,19-19.2,19.1-29V27.27c0-.9-1.1-.9-1.2,0-2.6,12.4-7.5,17.4-17.8,27.7L86.68,95.78c-19.8,19.8-23.3,39-13.2,51.4.7.8,1.4.3,1-.7-6.7-15.1,9.3-31.1,16.9-38.7Zm37.6,82.5-14.3,14.2c-6.5,6.5-12.3,12.4-15.8,18.4h14.1l1.7-1.7,20.5-20.5c17.1-16.9,19.5-35,15.8-46.8-.3-1-1.2-1.1-1.2,0,.1,9.9-2.8,18.4-20.8,36.4Zm-2.8-24-11.4,11.5c-10.4,10.4-19.1,19.4-19.1,29.11v15.3c0,.89,1.1.89,1.2,0,2.6-12.4,7.5-17.4,17.8-27.7L167,142.17c19.8-19.8,23.3-39,13.2-51.4-.7-.8-1.4-.3-1,.7C185.88,106.57,169.88,122.57,162.28,130.17Zm83.5,68.2h1.1l1.7,3h1.5l-2-3.3a2,2,0,0,0,1.3-2c0-1.5-.8-2.2-2.7-2.2h-2.2v7.5h1.3v-3Zm0-3.5h.8c1,0,1.4.3,1.4,1.2,0,.7-.5,1.2-1.4,1.2h-.9v-2.4Zm1,9a6.3,6.3,0,1,0-6.3-6.3,6.08,6.08,0,0,0,5.87,6.3Zm0-11.7a5.4,5.4,0,1,1,0,10.8,5.31,5.31,0,0,1-5.4-5.23h0v-.16a5.24,5.24,0,0,1,5.11-5.39h.29Z" /></svg>
</div>
<div class="l-sabbath__logo-dark u-theme--path-fill--base">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 253.71 227.63"><title>Seventh-day Adventist logo mark</title><path d="M67.68,120.38c-.1-9.91,2.8-18.41,20.8-36.41l39-39c10.4-10.4,19.1-19.29,19.1-29V.67c0-.89-1.1-.89-1.2,0-2.6,12.4-7.5,17.3-17.8,27.61L82.28,73.47c-17.1,17-19.5,35.1-15.8,46.91C66.78,121.38,67.68,121.47,67.68,120.38Zm64.2,38.9c0,.89,1,.89,1.2,0,2.6-12.5,7.6-17.4,17.8-27.61L166,116.78c19.8-19.9,10.7-39-.9-44.31-1-.5-1.4.31-.6,1,9.3,8,6.5,21.5-5.2,33.2L151,115c-10.4,10.31-19.1,19.2-19.1,29Zm81.8,26.6L168,178.17l-17.1,17.11c-10.4,10.39-19,19.3-19,29V227c0,.7.9.9,1.2.11,3.2-8.7,13.9-18.11,33.5-14.8,0,0,85.4,14.8,86.1,14.8a.9.9,0,0,0,1-.61.79.79,0,0,0-.2-.8c-.3-.39-39.8-39.8-39.8-39.8Zm-107.5,1h15a.66.66,0,0,0,.6-.6c0-7.9-6-13.31-30-9.2L40,186S.58,225.37.28,225.78a.79.79,0,0,0-.1,1.1.81.81,0,0,0,.8.2c.7-.11,86.1-14.8,86.1-14.8,19.6-3.31,30.3,6,33.5,14.8.3.8,1.2.7,1.2-.11v-29.5a.66.66,0,0,0-.6-.6l-15,.1a.64.64,0,0,1-.6-.6v-8.9a.65.65,0,0,1,.6-.6Zm26.8,25.9a36.3,36.3,0,0,1,6.9-15.81h-7.5a.65.65,0,0,0-.6.61v15.2c0,.89,1.1.89,1.2,0Zm13.6-158.6c0-.91-1.1-.91-1.2,0-2.6,12.39-7.5,17.29-17.8,27.6l-39.8,39.69c-19.8,19.81-10.7,39,.9,44.31,1,.5,1.4-.4.6-1-9.3-8-6.5-21.61,5.2-33.2l33-33c10.4-10.4,19.1-19.3,19.1-29Zm-19.1,17.49c10.4-10.3,19-19.2,19.1-29V27.27c0-.9-1.1-.9-1.2,0-2.6,12.4-7.5,17.4-17.8,27.7L86.68,95.78c-19.8,19.8-23.3,39-13.2,51.4.7.8,1.4.3,1-.7-6.7-15.1,9.3-31.1,16.9-38.7Zm37.6,82.5-14.3,14.2c-6.5,6.5-12.3,12.4-15.8,18.4h14.1l1.7-1.7,20.5-20.5c17.1-16.9,19.5-35,15.8-46.8-.3-1-1.2-1.1-1.2,0,.1,9.9-2.8,18.4-20.8,36.4Zm-2.8-24-11.4,11.5c-10.4,10.4-19.1,19.4-19.1,29.11v15.3c0,.89,1.1.89,1.2,0,2.6-12.4,7.5-17.4,17.8-27.7L167,142.17c19.8-19.8,23.3-39,13.2-51.4-.7-.8-1.4-.3-1,.7C185.88,106.57,169.88,122.57,162.28,130.17Zm83.5,68.2h1.1l1.7,3h1.5l-2-3.3a2,2,0,0,0,1.3-2c0-1.5-.8-2.2-2.7-2.2h-2.2v7.5h1.3v-3Zm0-3.5h.8c1,0,1.4.3,1.4,1.2,0,.7-.5,1.2-1.4,1.2h-.9v-2.4Zm1,9a6.3,6.3,0,1,0-6.3-6.3,6.08,6.08,0,0,0,5.87,6.3Zm0-11.7a5.4,5.4,0,1,1,0,10.8,5.31,5.31,0,0,1-5.4-5.23h0v-.16a5.24,5.24,0,0,1,5.11-5.39h.29Z" /></svg>
</div>
</div>
</div>
<div class="l-sabbath__overlay u-theme--background-color--base"></div>
</aside>
</div>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"83206e6369ea73ed","version":"2023.10.0","token":"92eb3caf157c45b89fff4e25cd751c6d"}' crossorigin="anonymous"></script>
</body>
</html>

