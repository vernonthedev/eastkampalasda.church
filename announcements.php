<!doctype html>
<html class="u-theme--denim" lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<?php include "head.php"; ?>
<?php include "loading.php"; ?>
<?php include "header.php"; ?>
<?php include "config.php"; ?>

<link rel="stylesheet" type="text/css" href="mycss/announcements.css">


<div class='container'>

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
        <div class='column'>
            <div class='demo-title'>Announcements</div>
            <div class='post-module hover'>
                <div class='thumbnail'>
                    <img src='https://media.istockphoto.com/id/1313654813/vector/megaphone-with-exciting-news-speech-bubble-banner-loudspeaker-label-for-business-marketing.jpg?s=612x612&w=0&k=20&c=0Gm0WhT6uMnzhvElm3OB5hu8_Dsn5SvfXfkMNuA_UAw='
                        alt="East Kampala Announcement image" />
                </div>
                <div class='post-content'>
                    <div class='category'>Info</div>
                    <h1 class='title'><?php echo $row->ann_title; ?></h1>
                    <h2 class='sub_title'>Take Note!</h2>
                    <p class='description'><?php echo $row->ann_content; ?></p>
                    <div class='post-meta'>
                        <span class='timestamp'>
                            <i class='fa fa-clock-o'></i>
                            Admin | EKC
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
    ?>



</div>











<?php include "footer.php"; ?>


<script>
    $(window).load(function () {
        $('.post-module').hover(function () {
            $(this).find('.description').stop().animate({ height: "toggle", opacity: "toggle" }, 300);
        });
    });
</script>



<script src="assets/cdn.adventist.org/alps/3/3.12.2/js/script.min.js" type="text/javascript" async></script>
<script type="text/javascript"
    src="/wp-content/plugins/jetpack/jetpack_vendor/automattic/jetpack-image-cdn/dist/image-cdndca9.js?minify=false&amp;ver=132249e245926ae3e188"
    id="jetpack-photon-js"></script>
<script type="text/javascript"
    src="/wp-content/plugins/cookie-notice-and-consent-banner/js/cookiebanner41a5.js?ver=1.7.6"
    id="cncb_banner-js"></script>
<script type="text/javascript" id="cncb_banner_init-js-extra">
    /* <![CDATA[ */
    var cncb_plugin_object = { "theme": "CodGrayWhite", "type": "confirm", "bannerBlockType": "line", "position": "bottom", "corner": "rectangle", "buttonType": "blank-round", "blind": { "visible": 0 }, "message": { "html": "We use cookies to personalize content and ads, to provide social media features, and to analyze our traffic. We also share information about your use of our site with our social media, advertising, and analytics partners.", "styles": [] }, "link": { "html": "POPI Act", "href": "https:\/\/eastkampalasda.church\/cookie-policy\/", "styles": { "display": "none" }, "stylesHover": [] }, "buttonDirection": "row", "buttonAllow": { "html": "Accept", "styles": { "border-style": "solid" }, "stylesHover": { "border-style": "solid" } }, "buttonDismiss": { "html": "OK", "styles": { "border-style": "solid" }, "stylesHover": { "border-style": "solid" } }, "buttonDecline": { "html": "Decline", "styles": { "border-style": "solid" }, "stylesHover": { "border-style": "solid" } }, "animationType": "no", "animationDelay": "0ms", "animationDuration": "600ms", "popupStyles": { "border-style": "solid", "margin-top": "auto", "margin-right": "auto", "margin-bottom": "auto", "margin-left": "auto" }, "accept": [], "refreshonallow": "1" };
    /* ]]> */
</script>
<script type="text/javascript"
    src="/wp-content/plugins/cookie-notice-and-consent-banner/js/cookiebanner-init41a5.js?ver=1.7.6"
    id="cncb_banner_init-js"></script>
<script type="text/javascript" src="/wp-content/themes/alps-wordpress-v3/dist/scripts/main20aa.js?ver=1670005090"
    id="alps/main.js-js"></script>
<script defer type="text/javascript" src="assets/stats.wp.com/e-202345.js" id="jetpack-stats-js"></script>
<script type="text/javascript" id="jetpack-stats-js-after">
    /* <![CDATA[ */
    _stq = window._stq || [];
    _stq.push(["view", { v: 'ext', blog: '110147893', post: '1385', tz: '2', srv: 'eastkampalasda.church', j: '1:12.8' }]);
    _stq.push(["clickTrackerInit", "110147893", "1385"]);
    /* ]]> */
</script>
<script type="text/javascript" id="pt-cv-content-views-script-js-extra">
    /* <![CDATA[ */
    var PT_CV_PUBLIC = { "_prefix": "pt-cv-", "page_to_show": "5", "_nonce": "a0486971de", "is_admin": "", "is_mobile": "", "ajaxurl": "https:\/\/eastkampalasda.church\/wp-admin\/admin-ajax.php", "lang": "", "loading_image_src": "data:image\/gif;base64,R0lGODlhDwAPALMPAMrKygwMDJOTkz09PZWVla+vr3p6euTk5M7OzuXl5TMzMwAAAJmZmWZmZszMzP\/\/\/yH\/C05FVFNDQVBFMi4wAwEAAAAh+QQFCgAPACwAAAAADwAPAAAEQvDJaZaZOIcV8iQK8VRX4iTYoAwZ4iCYoAjZ4RxejhVNoT+mRGP4cyF4Pp0N98sBGIBMEMOotl6YZ3S61Bmbkm4mAgAh+QQFCgAPACwAAAAADQANAAAENPDJSRSZeA418itN8QiK8BiLITVsFiyBBIoYqnoewAD4xPw9iY4XLGYSjkQR4UAUD45DLwIAIfkEBQoADwAsAAAAAA8ACQAABC\/wyVlamTi3nSdgwFNdhEJgTJoNyoB9ISYoQmdjiZPcj7EYCAeCF1gEDo4Dz2eIAAAh+QQFCgAPACwCAAAADQANAAAEM\/DJBxiYeLKdX3IJZT1FU0iIg2RNKx3OkZVnZ98ToRD4MyiDnkAh6BkNC0MvsAj0kMpHBAAh+QQFCgAPACwGAAAACQAPAAAEMDC59KpFDll73HkAA2wVY5KgiK5b0RRoI6MuzG6EQqCDMlSGheEhUAgqgUUAFRySIgAh+QQFCgAPACwCAAIADQANAAAEM\/DJKZNLND\/kkKaHc3xk+QAMYDKsiaqmZCxGVjSFFCxB1vwy2oOgIDxuucxAMTAJFAJNBAAh+QQFCgAPACwAAAYADwAJAAAEMNAs86q1yaWwwv2Ig0jUZx3OYa4XoRAfwADXoAwfo1+CIjyFRuEho60aSNYlOPxEAAAh+QQFCgAPACwAAAIADQANAAAENPA9s4y8+IUVcqaWJ4qEQozSoAzoIyhCK2NFU2SJk0hNnyEOhKR2AzAAj4Pj4GE4W0bkJQIAOw==" };
    var PT_CV_PAGINATION = { "first": "\u00ab", "prev": "\u2039", "next": "\u203a", "last": "\u00bb", "goto_first": "Go to first page", "goto_prev": "Go to previous page", "goto_next": "Go to next page", "goto_last": "Go to last page", "current_page": "Current page is", "goto_page": "Go to page" };
    /* ]]> */
</script>
<script type="text/javascript"
    src="/wp-content/plugins/content-views-query-and-display-post-page/public/assets/js/cva7a0.js?ver=3.6.1"
    id="pt-cv-content-views-script-js"></script>
<script type="text/javascript" src="assets/c0.wp.com/c/6.4.1/wp-includes/js/comment-reply.min.js" id="comment-reply-js"
    async="async" data-wp-strategy="async"></script>
</div> <!-- /.l-content -->
<aside class="l-wrap__sabbath l-sabbath js-sticky-parent js-toggle-menu ">
    <div class="l-sabbath__logo js-sticky">
        <div class="l-sabbath__logo--inner ">
            <div class="l-sabbath__logo-light u-path-fill--white">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 253.71 227.63">
                    <title>Seventh-day Adventist logo mark</title>
                    <path
                        d="M67.68,120.38c-.1-9.91,2.8-18.41,20.8-36.41l39-39c10.4-10.4,19.1-19.29,19.1-29V.67c0-.89-1.1-.89-1.2,0-2.6,12.4-7.5,17.3-17.8,27.61L82.28,73.47c-17.1,17-19.5,35.1-15.8,46.91C66.78,121.38,67.68,121.47,67.68,120.38Zm64.2,38.9c0,.89,1,.89,1.2,0,2.6-12.5,7.6-17.4,17.8-27.61L166,116.78c19.8-19.9,10.7-39-.9-44.31-1-.5-1.4.31-.6,1,9.3,8,6.5,21.5-5.2,33.2L151,115c-10.4,10.31-19.1,19.2-19.1,29Zm81.8,26.6L168,178.17l-17.1,17.11c-10.4,10.39-19,19.3-19,29V227c0,.7.9.9,1.2.11,3.2-8.7,13.9-18.11,33.5-14.8,0,0,85.4,14.8,86.1,14.8a.9.9,0,0,0,1-.61.79.79,0,0,0-.2-.8c-.3-.39-39.8-39.8-39.8-39.8Zm-107.5,1h15a.66.66,0,0,0,.6-.6c0-7.9-6-13.31-30-9.2L40,186S.58,225.37.28,225.78a.79.79,0,0,0-.1,1.1.81.81,0,0,0,.8.2c.7-.11,86.1-14.8,86.1-14.8,19.6-3.31,30.3,6,33.5,14.8.3.8,1.2.7,1.2-.11v-29.5a.66.66,0,0,0-.6-.6l-15,.1a.64.64,0,0,1-.6-.6v-8.9a.65.65,0,0,1,.6-.6Zm26.8,25.9a36.3,36.3,0,0,1,6.9-15.81h-7.5a.65.65,0,0,0-.6.61v15.2c0,.89,1.1.89,1.2,0Zm13.6-158.6c0-.91-1.1-.91-1.2,0-2.6,12.39-7.5,17.29-17.8,27.6l-39.8,39.69c-19.8,19.81-10.7,39,.9,44.31,1,.5,1.4-.4.6-1-9.3-8-6.5-21.61,5.2-33.2l33-33c10.4-10.4,19.1-19.3,19.1-29Zm-19.1,17.49c10.4-10.3,19-19.2,19.1-29V27.27c0-.9-1.1-.9-1.2,0-2.6,12.4-7.5,17.4-17.8,27.7L86.68,95.78c-19.8,19.8-23.3,39-13.2,51.4.7.8,1.4.3,1-.7-6.7-15.1,9.3-31.1,16.9-38.7Zm37.6,82.5-14.3,14.2c-6.5,6.5-12.3,12.4-15.8,18.4h14.1l1.7-1.7,20.5-20.5c17.1-16.9,19.5-35,15.8-46.8-.3-1-1.2-1.1-1.2,0,.1,9.9-2.8,18.4-20.8,36.4Zm-2.8-24-11.4,11.5c-10.4,10.4-19.1,19.4-19.1,29.11v15.3c0,.89,1.1.89,1.2,0,2.6-12.4,7.5-17.4,17.8-27.7L167,142.17c19.8-19.8,23.3-39,13.2-51.4-.7-.8-1.4-.3-1,.7C185.88,106.57,169.88,122.57,162.28,130.17Zm83.5,68.2h1.1l1.7,3h1.5l-2-3.3a2,2,0,0,0,1.3-2c0-1.5-.8-2.2-2.7-2.2h-2.2v7.5h1.3v-3Zm0-3.5h.8c1,0,1.4.3,1.4,1.2,0,.7-.5,1.2-1.4,1.2h-.9v-2.4Zm1,9a6.3,6.3,0,1,0-6.3-6.3,6.08,6.08,0,0,0,5.87,6.3Zm0-11.7a5.4,5.4,0,1,1,0,10.8,5.31,5.31,0,0,1-5.4-5.23h0v-.16a5.24,5.24,0,0,1,5.11-5.39h.29Z" />
                </svg>
            </div>
            <div class="l-sabbath__logo-dark u-theme--path-fill--base">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 253.71 227.63">
                    <title>Seventh-day Adventist logo mark</title>
                    <path
                        d="M67.68,120.38c-.1-9.91,2.8-18.41,20.8-36.41l39-39c10.4-10.4,19.1-19.29,19.1-29V.67c0-.89-1.1-.89-1.2,0-2.6,12.4-7.5,17.3-17.8,27.61L82.28,73.47c-17.1,17-19.5,35.1-15.8,46.91C66.78,121.38,67.68,121.47,67.68,120.38Zm64.2,38.9c0,.89,1,.89,1.2,0,2.6-12.5,7.6-17.4,17.8-27.61L166,116.78c19.8-19.9,10.7-39-.9-44.31-1-.5-1.4.31-.6,1,9.3,8,6.5,21.5-5.2,33.2L151,115c-10.4,10.31-19.1,19.2-19.1,29Zm81.8,26.6L168,178.17l-17.1,17.11c-10.4,10.39-19,19.3-19,29V227c0,.7.9.9,1.2.11,3.2-8.7,13.9-18.11,33.5-14.8,0,0,85.4,14.8,86.1,14.8a.9.9,0,0,0,1-.61.79.79,0,0,0-.2-.8c-.3-.39-39.8-39.8-39.8-39.8Zm-107.5,1h15a.66.66,0,0,0,.6-.6c0-7.9-6-13.31-30-9.2L40,186S.58,225.37.28,225.78a.79.79,0,0,0-.1,1.1.81.81,0,0,0,.8.2c.7-.11,86.1-14.8,86.1-14.8,19.6-3.31,30.3,6,33.5,14.8.3.8,1.2.7,1.2-.11v-29.5a.66.66,0,0,0-.6-.6l-15,.1a.64.64,0,0,1-.6-.6v-8.9a.65.65,0,0,1,.6-.6Zm26.8,25.9a36.3,36.3,0,0,1,6.9-15.81h-7.5a.65.65,0,0,0-.6.61v15.2c0,.89,1.1.89,1.2,0Zm13.6-158.6c0-.91-1.1-.91-1.2,0-2.6,12.39-7.5,17.29-17.8,27.6l-39.8,39.69c-19.8,19.81-10.7,39,.9,44.31,1,.5,1.4-.4.6-1-9.3-8-6.5-21.61,5.2-33.2l33-33c10.4-10.4,19.1-19.3,19.1-29Zm-19.1,17.49c10.4-10.3,19-19.2,19.1-29V27.27c0-.9-1.1-.9-1.2,0-2.6,12.4-7.5,17.4-17.8,27.7L86.68,95.78c-19.8,19.8-23.3,39-13.2,51.4.7.8,1.4.3,1-.7-6.7-15.1,9.3-31.1,16.9-38.7Zm37.6,82.5-14.3,14.2c-6.5,6.5-12.3,12.4-15.8,18.4h14.1l1.7-1.7,20.5-20.5c17.1-16.9,19.5-35,15.8-46.8-.3-1-1.2-1.1-1.2,0,.1,9.9-2.8,18.4-20.8,36.4Zm-2.8-24-11.4,11.5c-10.4,10.4-19.1,19.4-19.1,29.11v15.3c0,.89,1.1.89,1.2,0,2.6-12.4,7.5-17.4,17.8-27.7L167,142.17c19.8-19.8,23.3-39,13.2-51.4-.7-.8-1.4-.3-1,.7C185.88,106.57,169.88,122.57,162.28,130.17Zm83.5,68.2h1.1l1.7,3h1.5l-2-3.3a2,2,0,0,0,1.3-2c0-1.5-.8-2.2-2.7-2.2h-2.2v7.5h1.3v-3Zm0-3.5h.8c1,0,1.4.3,1.4,1.2,0,.7-.5,1.2-1.4,1.2h-.9v-2.4Zm1,9a6.3,6.3,0,1,0-6.3-6.3,6.08,6.08,0,0,0,5.87,6.3Zm0-11.7a5.4,5.4,0,1,1,0,10.8,5.31,5.31,0,0,1-5.4-5.23h0v-.16a5.24,5.24,0,0,1,5.11-5.39h.29Z" />
                </svg>
            </div>
        </div>
    </div>
    <div class="l-sabbath__overlay u-theme--background-color--base"></div>
</aside>
</div><!-- ./l-wrap -->
</body>

</html>