<!DOCTYPE html>
<html class="u-theme--denim" lang="en-US">
<?php include "head.php"; ?>
<?php include "loading.php"; ?>
<?php include "header.php"; ?>
<?php include "config.php"; ?>




<body>
   <style>
      .c-card {
         margin-bottom: 20px;
         padding: 20px;
         background-color: #f8f8f8;
         border-radius: 8px;
      }


      img {
         max-width: 100%;
         border: 0;
         height: auto;
         vertical-align: middle;
      }



      * {
         box-sizing: border-box;
      }

      *:before,
      *:after {
         box-sizing: border-box;
      }

      body {
         font-size: 16px;
         background-color: #ECECEC;

      }

      .o-c {
         margin-right: auto;
         margin-left: auto;
         max-width: 58em;
         padding: 1em;
      }

      .c-hero-section {
         position: relative;
         overflow: hidden;
         height: 350px;
         /* Adjust the height as needed */
         background: url('assets/images/teachers.jpg') top/cover no-repeat;
         /* Add your image path and set background position to top */
         display: flex;
         align-items: center;
         justify-content: flex-start;
         color: #fff;
         padding-left: 20px;
         /* Adjust as needed */
      }

      .c-hero-overlay {
         position: absolute;
         top: 0;
         left: 0;
         width: 100%;
         height: 100%;
         background: rgba(0, 0, 0, 0.5);
         /* Adjust the opacity here */
         z-index: 1;
      }



      .c-hero-section .clearer-text {
         z-index: 2;
         color: #fff;
         font-size: 20px;
         font-weight: normal;
         font-family: "noto serif", Georgia, Times, times new roman, serif;
      }

      h3 {
         font-family: "noto serif", Georgia, Times, times new roman, serif;
      }

      .custom-slide-transition {
         opacity: 0;
         transform: translateY(50px);
         transition: opacity 0.5s, transform 0.5s;
      }
   </style>

   <header class="c-hero c-page-header c-page-header__feature" style="margin-top: 0px;">
      <div class="c-page-header__content">
         <!-- Hero Section 1 -->
         <section class="c-hero-carousel">
            <div class="c-carousel c-carousel--inset u-position--relative">
               <div class="c-carousel__slides js-carousel__single-item">

                  <?php
                  // Fetching all the banner from the database
                  $sql = "SELECT * FROM banner_slider ORDER BY id DESC";
                  $run_query = $conn->prepare($sql);
                  $run_query->execute();
                  $rows = $run_query->fetchAll();
                  foreach ($rows as $row) {
                  ?>

                     <div class="c-carousel__item--inset u-position--relative">
                        <img src="admin/banner/<?php echo $row->banner_img; ?>" />
                        <div class="c-carousel__item-text__wrap u-theme--background-color-trans--dark">
                           <div class="l-container">
                              <div class="c-carousel__item-text u-spacing--half">
                                 <div class="c-carousel__item-text--inner">
                                    <h2 class="u-font--primary--xl c-carousel__item-heading">
                                       <?php echo $row->banner_title; ?>
                                    </h2>
                                    <p><?php echo $row->banner_content; ?></p>
                                    <div class="c-carousel__item-dek u-padding--half--bottom u-theme--primary-transparent-background-color">
                                       <p></p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  <?php
                  }
                  ?>


               </div>
            </div>
         </section>
      </div>
   </header>



   <main class="l-main">
      <section class="l-main__content l-grid l-grid--7-col u-shift--left--1-col--at-large l-grid-wrap--6-of-7 u-spacing--double--until-xxlarge u-padding--zero--sides">
         <!-- Card Section 1 -->
         <article class="c-article l-grid-item l-grid-item--l--4-col post-1385 page type-page status-publish hentry lg:w-1/2">
            <div class="c-article__body">
               <div class="text u-spacing">
                  <h2></h2>
                  <div class="u-spacing--double u-space--double--top">
                     <!-- "Who We Are" Section -->
                     <div class="c-card u-theme--border-color--darker u-border--left u-spacing--half">
                        <h3 class="u-theme--color--darker u-font--primary--m">
                           <a href="about-us.php" class="c-card__title-link u-theme--link-hover--dark">
                              <strong>Who we are</strong>
                           </a>
                        </h3>
                        <p class="c-card__body text">
                           Welcome to East Kampala Seventh Day Adventist Church (EKC), one of three Adventist churches in the Eastern part of Kampala District. As part of the Central Uganda Conference, we align with the Seventh-day Adventist Church's mission. Through vibrant worship, engaging Sabbath School, and outreach, we aim to foster spiritual growth and community impact. Join us as we journey together in faith and service.
                        </p>
                        <a href="about-us.php" class="c-card__button o-button o-button--outline">Read More<span class="u-icon u-icon--m u-path-fill--base u-space--half--left"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                 <title>Long right arrow</title>
                                 <path d="M18.29,8.59l-3.5-3.5L13.38,6.5,15.88,9H.29v2H15.88l-2.5,2.5,1.41,1.41,3.5-3.5L19.71,10Z" fill="#9b9b9b" />
                              </svg>
                           </span></a>
                     </div>
                  </div>
               </div>
            </div>
         </article>

         <!-- "History" Section -->
         <article class="c-article l-grid-item l-grid-item--l--4-col post-1385 page type-page status-publish hentry lg:w-1/2">
            <div class="c-article__body">
               <div class="text u-spacing">
                  <h2></h2>
                  <div class="u-spacing--double u-space--double--top">
                     <!-- "Who We Are" Section -->
                     <div class="c-card u-theme--border-color--darker u-border--left u-spacing--half">
                        <h3 class="u-theme--color--darker u-font--primary--m">
                           <a href="history.php" class="c-card__title-link u-theme--link-hover--dark">
                              <strong>History</strong>
                           </a>
                        </h3>
                        <p class="c-card__body text">

                           The Seventh-day Adventist Church originated from the Millerite movement in the 19th century, evolving after the Great Disappointment of 1844. Led by figures like Ellen G. White and Joseph Bates, it reinterpreted the event as the beginning of Christ's heavenly ministry. Founded officially in 1863, the church emphasizes Sabbath observance, health, education, and the imminent return of Christ. With millions of members globally, it's known for its humanitarian and missionary work, guided by the writings of Ellen G. White.
                        </p>
                        <a href="history.php" class="c-card__button o-button o-button--outline">Read More<span class="u-icon u-icon--m u-path-fill--base u-space--half--left"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                 <title>Long right arrow</title>
                                 <path d="M18.29,8.59l-3.5-3.5L13.38,6.5,15.88,9H.29v2H15.88l-2.5,2.5,1.41,1.41,3.5-3.5L19.71,10Z" fill="#9b9b9b" />
                              </svg>
                           </span></a>
                     </div>
                  </div>
               </div>
            </div>
         </article>

         <!-- More sections or content here... -->
      </section>

      <section class="c-hero-section">
         <div>
            <div class="c-hero-overlay"></div>
            <div class="hero">
               <h2 class="clearer-text"><strong>Great Mentorship At EKC</strong></h2>
               <blockquote class="clearer-text"><i>"The best leaders are those who understand the power of collaboration and uplift others along the way."</i> </blockquote>
               <img src="assets/images/sda logo white.png" width="10%" alt="Seventh Day Adventist Logo" />
            </div>

         </div>
      </section>







   </main>

   <section>
      <div class="container">
         <div class="flex flex-wrap -mx-4">
            <div class="w-full px-4">
               <div class="text-center mx-auto mb-12 lg:mb-20 max-w-[510px]">
                  <span class="font-semibold text-lg text-primary mb-2 block">
                     Join Us At East Kampala SDA Church For A
                  </span>
                  <h2 class="
                  font-bold
                  text-3xl
                  sm:text-4xl
                  md:text-[40px]
                  text-dark
                  mb-4
                  ">
                     Deeper Understanding of God with
                  </h2>
                  <p class="text-base text-body-color">
                     Resources about how the Bible can help you find love, freedom, hope in your life with Jesus Christ at the center.
                  </p>
               </div>
            </div>
         </div>
         <div class="flex flex-wrap -mx-4">
            <div class="w-full md:w-1/2 lg:w-1/3 px-4">

               <div class="
               p-10
               md:px-7
               xl:px-10
               rounded-[20px]
               bg-white
               shadow-md
               hover:shadow-lg
               mb-8
               ">
                  <!-- header image -->
                  <img width="100%" height="100%" src="assets/images/sermons.jpg" alt="Daily Devotional Sermons from East Kampala Seventh-day Adventist Church">

                  <h4 class="font-semibold text-xl text-dark mb-3">
                     Daily Devotions
                  </h4>
                  <p class="text-body-color">

                     Engage in our daily devotions through uplifting texts filled with inspiration and wisdom. Join our community as we explore faith together, discovering the beauty of spiritual growth and connection.
                  </p>
                  <a href="daily-devotion.php" class="c-card__button o-button o-button--outline">View Devotions<span class="u-icon u-icon--m u-path-fill--base u-space--half--left"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                           <title>Long right arrow</title>
                           <path d="M18.29,8.59l-3.5-3.5L13.38,6.5,15.88,9H.29v2H15.88l-2.5,2.5,1.41,1.41,3.5-3.5L19.71,10Z" fill="#9b9b9b" />
                        </svg>
                     </span></a>
               </div>
            </div>


            <div class="w-full md:w-1/2 lg:w-1/3 px-4">
               <div class="
               p-10
               md:px-7
               xl:px-10
               rounded-[20px]
               bg-white
               shadow-md
               hover:shadow-lg
               mb-8
               ">
                  <img width="100%" height="100%" src="assets/images/audios.jpg" alt="Audio Sermons from East Kampala Seventh-day Adventist Church">

                  <h4 class="font-semibold text-xl text-dark mb-3">
                     Audio Sermons
                  </h4>
                  <p class="text-body-color">
                     Get Blessed by our weekly audio sermons by our different wonderful speakers.Get blessed by our audio sermons from our respective preachers.Immerse yourself in our daily devotions featuring powerful audio sermons from our dedicated preachers. Join us as we journey together in faith, finding inspiration and blessings in our shared spiritual community.
                  </p>
                  <a href="audio-sermons.php" class="c-card__button o-button o-button--outline">Listen<span class="u-icon u-icon--m u-path-fill--base u-space--half--left"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                           <title>Long right arrow</title>
                           <path d="M18.29,8.59l-3.5-3.5L13.38,6.5,15.88,9H.29v2H15.88l-2.5,2.5,1.41,1.41,3.5-3.5L19.71,10Z" fill="#9b9b9b" />
                        </svg>
                     </span></a>
               </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/3 px-4">
               <div class="
               p-10
               md:px-7
               xl:px-10
               rounded-[20px]
               bg-white
               shadow-md
               hover:shadow-lg
               mb-8
               ">
                  <!-- the header image -->
                  <img width="100%" height="100%" src="assets/images/videos.jpg" alt="Video Sermons from East Kampala Seventh-day Adventist Church">

                  <h4 class="font-semibold text-xl text-dark mb-3">
                     Video Sermons
                  </h4>
                  <p class="text-body-color">

                     Embark on a journey of spiritual enlightenment with our daily video sermons. Let our dynamic preachers guide you through moments of reflection, inspiration, and deeper understanding of faith. Join our community as we explore the profound teachings that enrich our lives and strengthen our connection to God.
                  </p>
                  <a href="video-sermons.php" class="c-card__button o-button o-button--outline">Watch Sermons <span class="u-icon u-icon--m u-path-fill--base u-space--half--left"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                           <title>Long right arrow</title>
                           <path d="M18.29,8.59l-3.5-3.5L13.38,6.5,15.88,9H.29v2H15.88l-2.5,2.5,1.41,1.41,3.5-3.5L19.71,10Z" fill="#9b9b9b" />
                        </svg>
                     </span></a>
               </div>
            </div>



            <div class="w-full md:w-1/2 lg:w-1/3 px-4">
               <div class="
               p-10
               md:px-7
               xl:px-10
               rounded-[20px]
               bg-white
               shadow-md
               hover:shadow-lg
               mb-8
               rotate[32]
               ">

                  <h4 class="font-semibold text-xl text-dark mb-3">
                     Counselling & Guidance
                  </h4>
                  <p class="text-body-color">
                     Discover guidance and support through our pastor counseling services. Our compassionate and experienced pastors are here to provide a listening ear, wise counsel, and spiritual guidance tailored to your unique needs. Whether you're facing challenges, seeking clarity, or simply in need of encouragement, our pastors are dedicated to walking alongside you on your journey of faith. Reach out today to experience the comfort and assistance of our pastor counseling services.
                  </p>
                  <a href="contact-us.php" class="c-card__button o-button o-button--outline">Seek Help<span class="u-icon u-icon--m u-path-fill--base u-space--half--left"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                           <title>Long right arrow</title>
                           <path d="M18.29,8.59l-3.5-3.5L13.38,6.5,15.88,9H.29v2H15.88l-2.5,2.5,1.41,1.41,3.5-3.5L19.71,10Z" fill="#9b9b9b" />
                        </svg>
                     </span></a>
               </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/3 px-4">
               <div class="
               p-10
               md:px-7
               xl:px-10
               rounded-[20px]
               bg-white
               shadow-md
               hover:shadow-lg
               mb-8
               ">

                  <h4 class="font-semibold text-xl text-dark mb-3">

                     Empowering Youth: Thriving Through Faith and Fun!
                  </h4>
                  <p class="text-body-color">

                     Elevate your youth experience with our exciting array of activities! From dynamic workshops to engaging events, we offer a vibrant space for young minds to connect, grow, and thrive. Join us for enriching experiences that blend fun, friendship, and faith, empowering youth to explore their passions and deepen their spiritual journey. Unleash your potential and make lasting memories with our youth activities today!We dejoy working with discerning clients, people for whom
                     qualuty, service, integrity & aesthetics.
                  </p>
                  <a href="events.php" class="c-card__button o-button o-button--outline">Read More<span class="u-icon u-icon--m u-path-fill--base u-space--half--left"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                           <title>Long right arrow</title>
                           <path d="M18.29,8.59l-3.5-3.5L13.38,6.5,15.88,9H.29v2H15.88l-2.5,2.5,1.41,1.41,3.5-3.5L19.71,10Z" fill="#9b9b9b" />
                        </svg>
                     </span></a>
               </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/3 px-4">
               <div class="
               p-10
               md:px-7
               xl:px-10
               rounded-[20px]
               bg-white
               shadow-md
               hover:shadow-lg
               mb-8
               ">

                  <h4 class="font-semibold text-xl text-dark mb-3">
                     Embark on Your Baptism Journey: Guiding You Toward Spiritual Renewal
                  </h4>
                  <p class="text-body-color">

                     In our Baptism Pathway program, we offer a transformative journey towards spiritual renewal and commitment. Through a series of engaging sessions, personalized guidance, and reflective exercises, participants explore the significance of baptism and deepen their understanding of faith. Our experienced mentors provide support every step of the way, helping individuals discern their readiness for baptism and cultivate a deeper relationship with God. Whether you're exploring the Christian faith for the first time or seeking to reaffirm your commitment, our Baptism Pathway is designed to empower and inspire you on your spiritual journey. Join us as we embark together on this meaningful road to renewal and transformation.We dejoy working with discerning clients, people for whom
                     qualuty, service, integrity & aesthetics.
                  </p>
                  <a href="contact-us.php" class="c-card__button o-button o-button--outline">Get in Touch<span class="u-icon u-icon--m u-path-fill--base u-space--half--left"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                           <title>Long right arrow</title>
                           <path d="M18.29,8.59l-3.5-3.5L13.38,6.5,15.88,9H.29v2H15.88l-2.5,2.5,1.41,1.41,3.5-3.5L19.71,10Z" fill="#9b9b9b" />
                        </svg>
                     </span></a>
               </div>
            </div>
         </div>
      </div>
   </section>




   <!-- Message from Pastors Section -->

   <section class="bg-white dark:bg-gray-900">
      <div class="container px-6 py-10 mx-auto">
         <div class="xl:flex xl:items-center xL:-mx-4">
            <div class="xl:w-1/2 xl:mx-4">
               <h1 class="text-3xl font-semibold text-gray-800 capitalize lg:text-4xl dark:text-white">Message From Our Leaders</h1>

               <p class="max-w-2xl mt-4 text-gray-500 dark:text-gray-300">
                  Dear Family and Friends,

                  In these challenging times, we stand together in faith, drawing strength from our shared commitment to God and one another. Let us cling to the timeless truths of Scripture and support each other with love and compassion. As a community, may we continue to reflect Christ's light and bring hope to the world around us.

                  With prayers and blessings.
               </p>
               <blockquote>East Kampala Seventh Day Adventist Church</blockquote>
            </div>

            <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-0 xl:mx-4 xl:w-1/2 md:grid-cols-2">
               <div>
                  <img class="object-cover rounded-xl h-64 w-full" src="assets/images/mutakoha.jpg" alt="Pastor Denis Mutakoha East Kampala SDA Church">

                  <h1 class="mt-4 text-2xl font-semibold text-gray-700 capitalize dark:text-white">Pr. Mutakoha Denis</h1>

                  <p class="mt-2 text-gray-500 capitalize dark:text-gray-300">Church Pastor</p>
               </div>

               <div>
                  <img class="object-cover rounded-xl h-64 w-full" src="assets/images/prayer.jpg" alt="People praying at East Kampala Seventh Day Adventist Church Uganda">

                  <h1 class="mt-4 text-2xl font-semibold text-gray-700 capitalize dark:text-white">Pray Without Seizing</h1>

                  <p class="mt-2 text-gray-500 capitalize dark:text-gray-300">1 Thessalonians 5:16-18</p>
               </div>
            </div>
         </div>
      </div>
   </section>

   <div class="text-center mx-auto mb-12 lg:mb-20 max-w-[510px]">
      <h2 class="
                  font-bold
                  text-3xl
                  sm:text-4xl
                  md:text-[40px]
                  text-dark
                  mb-4
                  ">
         This Sabbath's Theme!
      </h2>

   </div>

   <?php

   // get all the theme content from the db and display them 
   $sql = "SELECT * FROM theme ORDER BY theme_id DESC LIMIT 1";
   $run_query = $conn->prepare($sql);
   $run_query->execute();
   $rows = $run_query->fetchAll();
   foreach ($rows as $row) {
   ?>


      <div class="relative h-96 max-w-sm mx-auto mt-20 px-5 py-8 group rounded-3xl bg-gray-200 overflow-hidden shadow-xl">
         <img src="assets/images/prayer.jpg" alt="" class="absolute w-full h-full inset-0 object-cover">
         <div class="absolute inset-0 w-full h-full rounded-3xl bg-black bg-opacity-0 transition duration-500 backdrop-filter group-hover:bg-opacity-20 group-hover:backdrop-blur">
         </div>
         <div class="absolute inset-x-5 text-white">
            <h2 class="text-4xl font-semibold mb-2"><?php echo $row->theme_sermon; ?></h2>
            <p class="text-sm font-medium uppercase tracking-wider mb-6"><?php echo $row->theme_sermon; ?></p>
            <p class="hidden group-hover:block">Key Text : <?php echo $row->theme_text; ?> | Music By : <?php echo $row->theme_music; ?></p>
            <blockquote class="hidden group-hover:block font-italic">By <?php echo $row->theme_preacher; ?> </blockquote>
         </div>
         <a href="sabbath-bulletin.php"><button class="absolute inset-x-5 bottom-8 py-3 rounded-2xl font-semibold bg-white shadow-lg hidden transition duration-200 hover:bg-gray-300 group-hover:block">Learn more</button></a>
      </div>






   <?php
   }
   ?>

   <div class="text-center mx-auto mb-12 lg:mb-20 max-w-[510px]">
      <span class="font-semibold text-lg text-primary mb-2 block">
         Thanks For Visiting East Kampala SDA Church Website! God Bless You.
      </span>
   </div>




   <?php include "footer.php"; ?>

   <script>
      $(document).ready(function() {
         // Set the interval for sliding every 2 seconds (2000 milliseconds)
         setInterval(function() {
            // Trigger the next slide
            $(".js-carousel__single-item").slick("slickNext");
         }, 3000);

         // Initialize the Slick carousel with custom options
         $(".js-carousel__single-item").slick({
            dots: true,
            cssEase: 'linear', // Ensure a linear transition between slides
            customPaging: function(slider, i) {
               return '<a class="slick-dot"></a>';
            },
            appendDots: $(".c-carousel__slides"), // Append dots to your custom container
            slidesToShow: 1,
            slidesToScroll: 1,
            adaptiveHeight: true,
            // Use the custom slide transition
            css: 'custom-slide-transition',
            // Other options as needed
         });
      });
   </script>
   <?php include "scripts.php"; ?>
</body>

</html>