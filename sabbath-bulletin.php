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
                This Sabbath's Bulletin
            </h1>

            <?php


            // Fetch file details from the database
            $sql = "SELECT * FROM uploaded_files ORDER BY time_stamp DESC LIMIT 1"; // Assuming you want the latest uploaded file
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $file = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($file) {
                $fileName = $file['filename'];
                $filePath = $file['folder_path'] . $fileName; // Adjust the folder path as needed
            ?>
                <a href="download.php?file=<?php echo urlencode($fileName); ?>" class="text-white font-semibold hover:shadow-xl duration-200 c-card__button o-button o-button--outline">
                    Download <?php echo $fileName; ?>
                    <span class="u-icon u-icon--m u-path-fill--base u-space--half--left"><i class="bi bi-cloud-download-fill"></i></span>
                </a>
            <?php
            } else {
                echo "No files found.";
            }
            ?>
        </div>
    </div>
</header>




<!-- component -->
<section class="py-4">
    <div class="min-h-screen  bg-gray-200  flex flex-wrap items-center  justify-center  ">

        <div class="flex flex-col sm:flex-col lg:flex-row xl:flex-row md:flex-row justify-center items center  container   ">
            <div class="py-12 sm:py-12 md:py-6 lg:py-6 xl:py-6 px-8 w-full md:max-w-min sm:w-full bg-white z-30">
                <h1 class="text-gray-500 font-semibold text-xl ">Seventh-day Adventist Church</h1>
                <div class="text-center py-4 px-7">
                    <h1 class="text-gray-700 text-4xl font-black">EastKampala</h1>
                    <p class="text-gray-500  mt-2">Kira-Kimwanyi</p>

                </div>
                <div class="h-px bg-gray-200"></div>
                <div class="text-center mt-3">
                    <p class="text-sm text-gray-400">
                        O worship the Lord in the beauty of holiness: Fear before Him, all the earth. Psalms:96:9
                        <img src="assets/images/church.jpg" alt="East Kampala Seventh Day Adventist Church Picture" />
                    </p>
                </div>
                <button class="w-full mt-6 mb-3 py-2 text-white font-semibold bg-gray-700 hover:shadow-xl duration-200 hover:bg-gray-800" style="border-radius: 0px;">HAPPY SABBATH</button>
                <div class="h-px bg-gray-200"></div>
                <?php

                // get all the theme content from the db and display them 
                $sql = "SELECT * FROM theme ORDER BY theme_id DESC LIMIT 1";
                $run_query = $conn->prepare($sql);
                $run_query->execute();
                $rows = $run_query->fetchAll();
                foreach ($rows as $row) {
                ?>
                    <div class="text-left mt-3">
                        <p class="text-m text-dark-400">
                            <b>THEME:</b> <?php echo $row->theme_title; ?>
                        </p>
                        <p class="text-m text-dark-400">
                            <b>SERMON:</b> <?php echo $row->theme_sermon; ?>
                        </p>
                        <p class="text-sm text-dark-400">
                            <b>PREACHER: </b> <?php echo $row->theme_preacher; ?>
                        </p>
                        <p class="text-m text-dark-400">
                            <b>KEY TEXT:</b> <?php echo $row->theme_text; ?>
                        </p>
                        <p class="text-m text-dark-400">
                            <b>SPECIAL MUSIC:</b> <?php echo $row->theme_music; ?>
                        </p>
                    </div>
            </div>
        <?php
                }
        ?>

        <div class="py-12 sm:py-12 md:py-6 lg:py-6 xl:py-6 px-8 w-full md:max-w-min sm:w-full z-30  transform scale-1 sm:scale-1 md:scale-105 lg:scale-105 xl:scale-105 z-40  shadow-none sm:shadow-none md:shadow-xl lg:shadow-xl xl:shadow-xl" style="background-color: #2f557f;">
            <h1 class="text-purple-200 font-semibold text-xl ">EKC</h1>
            <div class="text-center py-4 px-7">
                <h1 class="text-gray-700 text-4xl font-black ">OrderOf SabbathWorship</h1>
                <div class="h-px bg-gray-200"></div>
                <p class="text-white text-opacity-100 mt-2 font-semibold">Song Service ==>8:00am - 9:00am</p>
                <div class="text-center mt-3">
                    <p class="text-sm text-white text-opacity-80">
                        Hymns of praise to our God through music - Choristers
                    </p>
                </div>
                <p class="text-white text-opacity-100 mt-2 font-semibold">Sabbath School ==> 8:00am - 9:00am</p>
                <p class="text-white text-opacity-100 mt-2 font-semibold">The Church At Study ==> 8:00am - 9:00am</p>
                <p class="text-white text-opacity-100 mt-2 font-semibold">Song Service & Prayer Session ==> 8:00am - 9:00am</p>
                <p class="text-white text-opacity-100 mt-2 font-semibold">Divine Service ==> 8:00am - 9:00am</p>

            </div>
            <div class="h-px bg-white-400"></div>
            <div class="text-center mt-3">
                <p class="text-sm text-white text-opacity-80">
                    God is present let us worship Him.
                </p>
            </div>
            <button class="w-full mt-6 mb-3 py-2 text-white font-semibold bg-purple-800 hover:shadow-xl duration-200 hover:bg-purple-800" style="border-radius: 0px; background-color: grey">BE BLESSED</button>
        </div>
        <div class="py-12 sm:py-12 md:py-6 lg:py-6 xl:py-6 px-8 w-full md:max-w-min sm:w-full bg-white z-30">
            <h1 class="text-gray-500 font-semibold text-xl ">EKC </h1>

            <div class="text-center py-4 px-7">
                <h1 class="text-gray-700 text-4xl font-black">Afternoon Program</h1>
                <div class="h-px bg-gray-200"></div>
                <p class="text-gray-500  mt-2">Fellowship Lunch ==> 12:30-2:00pm</p>
                <p class="text-gray-500  mt-2">Caring And Sharing ==> 2:00-4:00pm</p>
                <p class="text-gray-500  mt-2">Outreach ==> 4:00-5:00pm</p>
                <p class="text-gray-500  mt-2">Sundown, Tea and Departure ==> 5:00-6:00pm</p>

            </div>
            <div class="h-px bg-gray-200"></div>
            <div class="text-center mt-3">
                <h1 class="text-gray-500 font-semibold text-xl ">Healthy Tip</h1>
                <p class="text-sm text-gray-400">
                    Start your day with a glass of water.
                    Your body does quite a few hours without hydration as you sleep. Drinking a full glass of water in the morning can aid digestion, flush out toxins, enhance skin health and give you an energy boost.
                </p>
            </div>
            <button class="w-full mt-6 mb-3 py-2 text-white font-semibold bg-gray-700 hover:shadow-xl duration-200 hover:bg-gray-800" style="border-radius: 0px;">HEALTHY LIVING</button>
        </div>
        </div>

    </div>

    <br>
    <br>
    <hr>
    <br>
    <br>

    <!-- component -->
    <div class="min-h-screen  bg-gray-200  flex flex-wrap items-center  justify-center  ">

        <div class="flex flex-col sm:flex-col lg:flex-row xl:flex-row md:flex-row justify-center items center  container   ">

            <div class="py-12 sm:py-12 md:py-6 lg:py-6 xl:py-6 px-8 w-full md:max-w-min sm:w-full bg-white z-30">
                <h1 class="text-gray-500 font-semibold text-xl ">EKC </h1>
                <div class="text-center py-4 px-7">
                    <h1 class="text-gray-700 text-4xl font-black">DivineWorship Service</h1>
                    <p class="text-gray-500  mt-2">God is present: Let us Worship Him.</p>

                </div>
                <div class="h-px bg-gray-200"></div>

                <?php

                // get all the serving team content from the db and display them 
                $sql = "SELECT * FROM serving_team ORDER BY id DESC LIMIT 1";
                $run_query = $conn->prepare($sql);
                $run_query->execute();
                $rows = $run_query->fetchAll();
                foreach ($rows as $row) {
                ?>
                    <div class="text-center mt-3">
                        <p class="text-m text-gray"><b>INTROIT</b>: "Surely the presence of the Lord is in this place(Genesis:28:16)"</p>
                        <p class="text-m text-dark-400"><b>Congregation stands as pulpit team enters.</b></p>
                        <p class="text-m text-dark-400"><b>CALL TO WORSHIP: </b><?php echo $row->call_to_worship; ?></p>
                        <p class="text-m text-dark-400"><b>DOXOLOGY:</b> "Glory be to the Father"</p>
                        <p class="text-m text-dark-400"><b>INVOCATION: </b><?php echo $row->invocation; ?></p>
                        <p class="text-m text-dark-400"><b>WELCOME AND INTRODUCTION:</b> <?php echo $row->welcome; ?></p>
                        <p class="text-m text-dark-400"><b>WELCOME SONG:</b> "Family of God(Psalms:34:3)"</p>
                        <p class="text-m text-dark-400"><b>OPENING SONG:</b> </p>
                        <p class="text-m text-dark-400"><b>PASTORAL PRAYER:</b> <?php echo $row->pastoral; ?></p>
                        <p class="text-m text-dark-400"><b>PRAYER SONG:</b> "Blessed be the name of the Lord(Psalms:72:19)"</p>
                        <p class="text-m text-dark-400"><b>WORSHIP IN GIVING:</b> <?php echo $row->worship; ?></p>
                        <p class="text-m text-dark-400"><b>SPECIAL MUSIC:</b><?php echo $row->collection_music; ?> </p>
                        <p class="text-m text-dark-400"><b>Congregation stands as deacons bring offerings</b></p>
                        <p class="text-m text-dark-400"><b>SCRIPTURE:</b> <?php echo $row->scripture; ?></p>
                        <p class="text-m text-dark-400"><b>SPECIAL MUSIC:</b> <?php echo $row->special_music; ?></p>
                        <p class="text-m text-dark-400"><b>SERMON:</b> <?php echo $row->sermon; ?></p>
                        <p class="text-m text-dark-400"><b>CLOSING HYMN:</b> <?php echo $row->closing; ?></p>
                        <p class="text-m text-dark-400"><b>BENEDICTION:</b> <?php echo $row->sermon; ?></p>
                        <p class="text-m text-dark-400"><b>SONG OF AFFIRMATION:</b> "Be Exalted O God(Psalms:57:11-20)"</p>
                        <p class="text-m text-dark-400"><b>RECESSIONAL:</b> Hmyn selected by Choristers </p>
                    </div>
                <?php
                }
                ?>
                <button class="w-full mt-6 mb-3 py-2 text-white font-semibold bg-gray-700 hover:shadow-xl duration-200 hover:bg-gray-800" style="border-radius: 0px;">HAPPY SABBATH</button>

                <div class="h-px bg-gray-200"></div>
                <p class="text-m text-dark-400">Please exit the sanctuary quietly and with reverence.</p>
            </div>

            <div class="py-12 sm:py-12 md:py-6 lg:py-6 xl:py-6 px-8 w-full md:max-w-min sm:w-full z-30 transform scale-1 sm:scale-1 md:scale-105 lg:scale-105 xl:scale-105 z-40  shadow-none sm:shadow-none md:shadow-xl lg:shadow-xl xl:shadow-xl" style="background-color: #2f557f;">
                <h1 class="text-purple-200 font-semibold text-xl ">EKC</h1>
                <div class="h-px bg-purple-400"></div>
                <?php

                // get all the theme content from the db and display them 
                $sql = "SELECT * FROM songs ORDER BY id DESC LIMIT 1";
                $run_query = $conn->prepare($sql);
                $run_query->execute();
                $rows = $run_query->fetchAll();
                foreach ($rows as $row) {
                ?>
                    <div class="text-center mt-3">
                        <h1 class="text-gray-700 text-4xl font-black">WorshipService</h1>

                        Introit:
                        <p class="text-sm text-white "><?php echo $row->introit; ?></p>

                        Call to Worship: <p class="text-sm text-white "><?php echo $row->call_to_worship; ?>
                        </p>

                        Doxology: <p class="text-sm text-white "><?php echo $row->doxology; ?>
                        </p>

                        Welcome Song: <p class="text-sm text-white "><?php echo $row->welcome; ?>
                        </p>

                        Prayer Song: <p class="text-sm text-white "><?php echo $row->prayer_song; ?>
                        </p>

                        Affirmation: <p class="text-sm text-white "><?php echo $row->affirmation; ?>
                        </p>
                    </div>

            </div>
            <div class="py-12 sm:py-12 md:py-6 lg:py-6 xl:py-6 px-8 w-full md:max-w-min sm:w-full bg-white z-30">
                <h1 class="text-gray-500 font-semibold text-xl ">EKC </h1>
                <div class="text-center py-4 px-7">
                    <h1 class="text-gray-700 text-4xl font-black">OpeningSong</h1>
                    <div class="h-px bg-gray-200"></div>
                    <p class="text-gray-500  mt-2"><?php echo $row->opening; ?></p>

                </div>
                <div class="text-center py-4 px-7">
                    <h1 class="text-gray-700 text-4xl font-black">ClosingSong</h1>
                    <div class="h-px bg-gray-200"></div>
                    <p class="text-gray-500  mt-2"><?php echo $row->closing; ?></p>
                </div>
            <?php
                }
            ?>
            </div>
        </div>

    </div>

</section>


<?php include "footer.php"; ?>
<?php include "scripts.php"; ?>