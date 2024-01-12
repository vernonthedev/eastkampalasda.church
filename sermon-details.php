<!doctype html>
<html class="u-theme--denim" lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<?php include "head.php"; ?>
<?php include "loading.php"; ?>
<?php include "header.php";?>
<?php include "config.php";?>



<?php
$recv = $_GET['id'];

$sql = "SELECT * FROM news WHERE news_id = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$recv]);
$rows = $stmt->fetchAll();
foreach($rows as $row){
    if($recv != $row->news_id){
        //show 404 page incase the user enters a value of page not available in the system
        http_response_code(404);
    }else{
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
<h4 class="c-block__kicker u-space--quarter--bottom ">Summary</h4>
<h1 class="c-block__title u-color--white u-font--primary--l u-space--zero">
<a href="/" class="c-block__title-link u-theme--link-hover--light">
<?php echo $row->news_title; ?></a>
</h1>
<p class="c-block__description"><p>Jesus referred to this parable in Mark 12. Then He added some chapters to it. His additions tell the story of this time we’re reading about, when prophets such as Isaiah tried to turn people’s attention to God but they killed them. God’s anguish is shown in the rest of this chapter. You can hear the tears in His cries as He foretells the ruin of those people who refuse Him.</p>
</p>
</div>
<div class="c-block__meta ">
<span class="c-block__category u-text-transform--upper"><?php echo $row->news_type; ?></span></br>
<time class="c-block__date u-text-transform--upper"> <?php echo $row->news_place; ?></time>
</div>
</div>
</div>
</div>
<div class="js-this c-inline-sidebar-block c-block u-background-color--gray--light u-border--left u-theme--border-color--darker--left can-be--dark-dark">
<div class="c-inline-sidebar-block__header u-padding">
<h2 class="c-inline-sidebar-block__title u-theme--color--darker">
<span class="u-theme--color--base">O Lord, plant Your vineyard in me. Keep me walled and watched and watered, and let me produce good fruit for You.</span>
</h2>
</div> </div>
<div class="u-padding ">
<h4><strong>Today's Study Verses</strong></h4> Isaiah 5:1
</div>
<div class="u-padding  ">

<p><?php echo $row->news_content; ?></p>
</p>
</div>
<footer class="c-article__footer u-spacing">
<div class="u-padding--left">
<div class="c-share-tools js-hover">
<a href class="c-share-tools__toggle can-be--white o-kicker u-theme--color--base"><span class="u-icon u-icon--xs u-theme--path-fill--base u-space--quarter--right"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Share Icon</title><path d="M14.21,6.21,7,9.8c0,.06,0,.13,0,.2s0,.13,0,.2l7.17,3.58a3.46,3.46,0,0,1,2.26-.84,3.53,3.53,0,1,1-3.53,3.53c0-.07,0-.14,0-.2L5.8,12.68a3.53,3.53,0,1,1,0-5.37L13,3.73c0-.07,0-.13,0-.2a3.53,3.53,0,1,1,3.53,3.53A3.47,3.47,0,0,1,14.21,6.21Z" /></svg></span>Share</a>
<ul class="c-share-tools__list u-background-color--gray--light can-be--dark-dark u-theme--border-color--darker--left u-spacing--half u-padding--half">
<li class="c-share-tools__list-item">
<a class="c-share-tools__link u-theme--color--base" href="#" target="_blank">Facebook</a>
</li>
<li class="c-share-tools__list-item">
<a class="c-share-tools__link u-theme--color--base" href="#" target="_blank">Twitter</a>
</li>
<li class="c-share-tools__list-item">
<a class="c-share-tools__link u-theme--color--base" href="/cdn-cgi/l/email-protection#d5eaa6a0b7bfb0b6a1e881bdb0f5a3bcbbb0acb4a7b1eef5a1bdb0f5b7b0b2bcbbbbbcbbb2f5bab3f5a2bab0a6" target="_self">Email</a>
</li>
</ul>
</div>
</div>
</footer>
</article>
<section class="c-comments u-spacing--double">
</section>
</div>
<div class="c-sidebar l-grid-item l-grid-item--l--2-col l-grid-item--xl--2-col u-padding--zero--sides">

</main>

<?php
}}
?>


<?php include "footer.php";?>

<script src="assets/cdn.adventist.org/alps/3/3.12.2/js/script.min.js" type="text/javascript" async></script>
        <script type="text/javascript" src="/wp-content/plugins/jetpack/jetpack_vendor/automattic/jetpack-image-cdn/dist/image-cdndca9.js?minify=false&amp;ver=132249e245926ae3e188" id="jetpack-photon-js"></script>
<script type="text/javascript" src="/wp-content/plugins/cookie-notice-and-consent-banner/js/cookiebanner41a5.js?ver=1.7.6" id="cncb_banner-js"></script>
<script type="text/javascript" id="cncb_banner_init-js-extra">
/* <![CDATA[ */
var cncb_plugin_object = {"theme":"CodGrayWhite","type":"confirm","bannerBlockType":"line","position":"bottom","corner":"rectangle","buttonType":"blank-round","blind":{"visible":0},"message":{"html":"We use cookies to personalize content and ads, to provide social media features, and to analyze our traffic. We also share information about your use of our site with our social media, advertising, and analytics partners.","styles":[]},"link":{"html":"POPI Act","href":"https:\/\/eastkampalasda.church\/cookie-policy\/","styles":{"display":"none"},"stylesHover":[]},"buttonDirection":"row","buttonAllow":{"html":"Accept","styles":{"border-style":"solid"},"stylesHover":{"border-style":"solid"}},"buttonDismiss":{"html":"OK","styles":{"border-style":"solid"},"stylesHover":{"border-style":"solid"}},"buttonDecline":{"html":"Decline","styles":{"border-style":"solid"},"stylesHover":{"border-style":"solid"}},"animationType":"no","animationDelay":"0ms","animationDuration":"600ms","popupStyles":{"border-style":"solid","margin-top":"auto","margin-right":"auto","margin-bottom":"auto","margin-left":"auto"},"accept":[],"refreshonallow":"1"};
/* ]]> */
</script>
<script type="text/javascript" src="/wp-content/plugins/cookie-notice-and-consent-banner/js/cookiebanner-init41a5.js?ver=1.7.6" id="cncb_banner_init-js"></script>
<script type="text/javascript" src="/wp-content/themes/alps-wordpress-v3/dist/scripts/main20aa.js?ver=1670005090" id="alps/main.js-js"></script>
<script defer type="text/javascript" src="assets/stats.wp.com/e-202345.js" id="jetpack-stats-js"></script>
<script type="text/javascript" id="jetpack-stats-js-after">
/* <![CDATA[ */
_stq = window._stq || [];
_stq.push([ "view", {v:'ext',blog:'110147893',post:'1385',tz:'2',srv:'eastkampalasda.church',j:'1:12.8'} ]);
_stq.push([ "clickTrackerInit", "110147893", "1385" ]);
/* ]]> */
</script>
<script type="text/javascript" id="pt-cv-content-views-script-js-extra">
/* <![CDATA[ */
var PT_CV_PUBLIC = {"_prefix":"pt-cv-","page_to_show":"5","_nonce":"a0486971de","is_admin":"","is_mobile":"","ajaxurl":"https:\/\/eastkampalasda.church\/wp-admin\/admin-ajax.php","lang":"","loading_image_src":"data:image\/gif;base64,R0lGODlhDwAPALMPAMrKygwMDJOTkz09PZWVla+vr3p6euTk5M7OzuXl5TMzMwAAAJmZmWZmZszMzP\/\/\/yH\/C05FVFNDQVBFMi4wAwEAAAAh+QQFCgAPACwAAAAADwAPAAAEQvDJaZaZOIcV8iQK8VRX4iTYoAwZ4iCYoAjZ4RxejhVNoT+mRGP4cyF4Pp0N98sBGIBMEMOotl6YZ3S61Bmbkm4mAgAh+QQFCgAPACwAAAAADQANAAAENPDJSRSZeA418itN8QiK8BiLITVsFiyBBIoYqnoewAD4xPw9iY4XLGYSjkQR4UAUD45DLwIAIfkEBQoADwAsAAAAAA8ACQAABC\/wyVlamTi3nSdgwFNdhEJgTJoNyoB9ISYoQmdjiZPcj7EYCAeCF1gEDo4Dz2eIAAAh+QQFCgAPACwCAAAADQANAAAEM\/DJBxiYeLKdX3IJZT1FU0iIg2RNKx3OkZVnZ98ToRD4MyiDnkAh6BkNC0MvsAj0kMpHBAAh+QQFCgAPACwGAAAACQAPAAAEMDC59KpFDll73HkAA2wVY5KgiK5b0RRoI6MuzG6EQqCDMlSGheEhUAgqgUUAFRySIgAh+QQFCgAPACwCAAIADQANAAAEM\/DJKZNLND\/kkKaHc3xk+QAMYDKsiaqmZCxGVjSFFCxB1vwy2oOgIDxuucxAMTAJFAJNBAAh+QQFCgAPACwAAAYADwAJAAAEMNAs86q1yaWwwv2Ig0jUZx3OYa4XoRAfwADXoAwfo1+CIjyFRuEho60aSNYlOPxEAAAh+QQFCgAPACwAAAIADQANAAAENPA9s4y8+IUVcqaWJ4qEQozSoAzoIyhCK2NFU2SJk0hNnyEOhKR2AzAAj4Pj4GE4W0bkJQIAOw=="};
var PT_CV_PAGINATION = {"first":"\u00ab","prev":"\u2039","next":"\u203a","last":"\u00bb","goto_first":"Go to first page","goto_prev":"Go to previous page","goto_next":"Go to next page","goto_last":"Go to last page","current_page":"Current page is","goto_page":"Go to page"};
/* ]]> */
</script>
<script type="text/javascript" src="/wp-content/plugins/content-views-query-and-display-post-page/public/assets/js/cva7a0.js?ver=3.6.1" id="pt-cv-content-views-script-js"></script>
<script type="text/javascript" src="assets/c0.wp.com/c/6.4.1/wp-includes/js/comment-reply.min.js" id="comment-reply-js" async="async" data-wp-strategy="async"></script>
      </div> <!-- /.l-content -->
      <aside class="l-wrap__sabbath l-sabbath js-sticky-parent js-toggle-menu ">
      <div class="l-sabbath__logo js-sticky">
      <div class="l-sabbath__logo--inner ">
        <div class="l-sabbath__logo-light u-path-fill--white">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 253.71 227.63"><title>Seventh-day Adventist logo mark</title><path d="M67.68,120.38c-.1-9.91,2.8-18.41,20.8-36.41l39-39c10.4-10.4,19.1-19.29,19.1-29V.67c0-.89-1.1-.89-1.2,0-2.6,12.4-7.5,17.3-17.8,27.61L82.28,73.47c-17.1,17-19.5,35.1-15.8,46.91C66.78,121.38,67.68,121.47,67.68,120.38Zm64.2,38.9c0,.89,1,.89,1.2,0,2.6-12.5,7.6-17.4,17.8-27.61L166,116.78c19.8-19.9,10.7-39-.9-44.31-1-.5-1.4.31-.6,1,9.3,8,6.5,21.5-5.2,33.2L151,115c-10.4,10.31-19.1,19.2-19.1,29Zm81.8,26.6L168,178.17l-17.1,17.11c-10.4,10.39-19,19.3-19,29V227c0,.7.9.9,1.2.11,3.2-8.7,13.9-18.11,33.5-14.8,0,0,85.4,14.8,86.1,14.8a.9.9,0,0,0,1-.61.79.79,0,0,0-.2-.8c-.3-.39-39.8-39.8-39.8-39.8Zm-107.5,1h15a.66.66,0,0,0,.6-.6c0-7.9-6-13.31-30-9.2L40,186S.58,225.37.28,225.78a.79.79,0,0,0-.1,1.1.81.81,0,0,0,.8.2c.7-.11,86.1-14.8,86.1-14.8,19.6-3.31,30.3,6,33.5,14.8.3.8,1.2.7,1.2-.11v-29.5a.66.66,0,0,0-.6-.6l-15,.1a.64.64,0,0,1-.6-.6v-8.9a.65.65,0,0,1,.6-.6Zm26.8,25.9a36.3,36.3,0,0,1,6.9-15.81h-7.5a.65.65,0,0,0-.6.61v15.2c0,.89,1.1.89,1.2,0Zm13.6-158.6c0-.91-1.1-.91-1.2,0-2.6,12.39-7.5,17.29-17.8,27.6l-39.8,39.69c-19.8,19.81-10.7,39,.9,44.31,1,.5,1.4-.4.6-1-9.3-8-6.5-21.61,5.2-33.2l33-33c10.4-10.4,19.1-19.3,19.1-29Zm-19.1,17.49c10.4-10.3,19-19.2,19.1-29V27.27c0-.9-1.1-.9-1.2,0-2.6,12.4-7.5,17.4-17.8,27.7L86.68,95.78c-19.8,19.8-23.3,39-13.2,51.4.7.8,1.4.3,1-.7-6.7-15.1,9.3-31.1,16.9-38.7Zm37.6,82.5-14.3,14.2c-6.5,6.5-12.3,12.4-15.8,18.4h14.1l1.7-1.7,20.5-20.5c17.1-16.9,19.5-35,15.8-46.8-.3-1-1.2-1.1-1.2,0,.1,9.9-2.8,18.4-20.8,36.4Zm-2.8-24-11.4,11.5c-10.4,10.4-19.1,19.4-19.1,29.11v15.3c0,.89,1.1.89,1.2,0,2.6-12.4,7.5-17.4,17.8-27.7L167,142.17c19.8-19.8,23.3-39,13.2-51.4-.7-.8-1.4-.3-1,.7C185.88,106.57,169.88,122.57,162.28,130.17Zm83.5,68.2h1.1l1.7,3h1.5l-2-3.3a2,2,0,0,0,1.3-2c0-1.5-.8-2.2-2.7-2.2h-2.2v7.5h1.3v-3Zm0-3.5h.8c1,0,1.4.3,1.4,1.2,0,.7-.5,1.2-1.4,1.2h-.9v-2.4Zm1,9a6.3,6.3,0,1,0-6.3-6.3,6.08,6.08,0,0,0,5.87,6.3Zm0-11.7a5.4,5.4,0,1,1,0,10.8,5.31,5.31,0,0,1-5.4-5.23h0v-.16a5.24,5.24,0,0,1,5.11-5.39h.29Z"/></svg>
                  </div>
        <div class="l-sabbath__logo-dark u-theme--path-fill--base">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 253.71 227.63"><title>Seventh-day Adventist logo mark</title><path d="M67.68,120.38c-.1-9.91,2.8-18.41,20.8-36.41l39-39c10.4-10.4,19.1-19.29,19.1-29V.67c0-.89-1.1-.89-1.2,0-2.6,12.4-7.5,17.3-17.8,27.61L82.28,73.47c-17.1,17-19.5,35.1-15.8,46.91C66.78,121.38,67.68,121.47,67.68,120.38Zm64.2,38.9c0,.89,1,.89,1.2,0,2.6-12.5,7.6-17.4,17.8-27.61L166,116.78c19.8-19.9,10.7-39-.9-44.31-1-.5-1.4.31-.6,1,9.3,8,6.5,21.5-5.2,33.2L151,115c-10.4,10.31-19.1,19.2-19.1,29Zm81.8,26.6L168,178.17l-17.1,17.11c-10.4,10.39-19,19.3-19,29V227c0,.7.9.9,1.2.11,3.2-8.7,13.9-18.11,33.5-14.8,0,0,85.4,14.8,86.1,14.8a.9.9,0,0,0,1-.61.79.79,0,0,0-.2-.8c-.3-.39-39.8-39.8-39.8-39.8Zm-107.5,1h15a.66.66,0,0,0,.6-.6c0-7.9-6-13.31-30-9.2L40,186S.58,225.37.28,225.78a.79.79,0,0,0-.1,1.1.81.81,0,0,0,.8.2c.7-.11,86.1-14.8,86.1-14.8,19.6-3.31,30.3,6,33.5,14.8.3.8,1.2.7,1.2-.11v-29.5a.66.66,0,0,0-.6-.6l-15,.1a.64.64,0,0,1-.6-.6v-8.9a.65.65,0,0,1,.6-.6Zm26.8,25.9a36.3,36.3,0,0,1,6.9-15.81h-7.5a.65.65,0,0,0-.6.61v15.2c0,.89,1.1.89,1.2,0Zm13.6-158.6c0-.91-1.1-.91-1.2,0-2.6,12.39-7.5,17.29-17.8,27.6l-39.8,39.69c-19.8,19.81-10.7,39,.9,44.31,1,.5,1.4-.4.6-1-9.3-8-6.5-21.61,5.2-33.2l33-33c10.4-10.4,19.1-19.3,19.1-29Zm-19.1,17.49c10.4-10.3,19-19.2,19.1-29V27.27c0-.9-1.1-.9-1.2,0-2.6,12.4-7.5,17.4-17.8,27.7L86.68,95.78c-19.8,19.8-23.3,39-13.2,51.4.7.8,1.4.3,1-.7-6.7-15.1,9.3-31.1,16.9-38.7Zm37.6,82.5-14.3,14.2c-6.5,6.5-12.3,12.4-15.8,18.4h14.1l1.7-1.7,20.5-20.5c17.1-16.9,19.5-35,15.8-46.8-.3-1-1.2-1.1-1.2,0,.1,9.9-2.8,18.4-20.8,36.4Zm-2.8-24-11.4,11.5c-10.4,10.4-19.1,19.4-19.1,29.11v15.3c0,.89,1.1.89,1.2,0,2.6-12.4,7.5-17.4,17.8-27.7L167,142.17c19.8-19.8,23.3-39,13.2-51.4-.7-.8-1.4-.3-1,.7C185.88,106.57,169.88,122.57,162.28,130.17Zm83.5,68.2h1.1l1.7,3h1.5l-2-3.3a2,2,0,0,0,1.3-2c0-1.5-.8-2.2-2.7-2.2h-2.2v7.5h1.3v-3Zm0-3.5h.8c1,0,1.4.3,1.4,1.2,0,.7-.5,1.2-1.4,1.2h-.9v-2.4Zm1,9a6.3,6.3,0,1,0-6.3-6.3,6.08,6.08,0,0,0,5.87,6.3Zm0-11.7a5.4,5.4,0,1,1,0,10.8,5.31,5.31,0,0,1-5.4-5.23h0v-.16a5.24,5.24,0,0,1,5.11-5.39h.29Z"/></svg>
                  </div>
      </div>
    </div>
    <div class="l-sabbath__overlay u-theme--background-color--base"></div>
  </aside>
    </div><!-- ./l-wrap -->
  </body>

</html>

