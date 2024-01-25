<!DOCTYPE html>
<html class="u-theme--denim" lang="en-US">
<?php include "head.php"; ?>
<?php include "loading.php"; ?>
<?php include "header.php"; ?>


<body>
<style>
  .c-card {
    margin-bottom: 20px;
    padding: 20px;
    background-color: #f8f8f8;
    border-radius: 8px;
  }

  .c-hero {

    margin-bottom: 40px;
  }

  img {
  max-width: 100%;
  border: 0;
  height: auto;
  vertical-align: middle;
}

.c-crd {
  float: left;
  display: inline-block;
  padding-left: 1em;
  padding-bottom: 1em;
  font-size: 16px;
  line-height: 24px;
  width: 100%;
  transition: transform 0.3s ease-in-out;
}

.c-crd:hover {
  transform: scale(1.05); 
}


.c-crds {
  margin-left: -1em;
}
.c-crds:before, .c-crds:after {
  display: table;
  content: "";
  line-height: 0;
}
.c-crds:after {
  clear: both;
}
@media screen and (min-width: 38em) {
  .c-crd {
    width: 50%;
  }
}
a.c-crd {
  color: black;
  text-decoration: none;
  color: rgba(0, 0, 0, 0.7); 
}

.c-crd__wrap {
  overflow: hidden;
  border-radius: 0.5em;
  background-color: white;
  box-shadow: -5px 5px 5px rgba(0, 0, 0, 0.05);
}
@media screen and (min-width: 38em) {
  .c-crd__wrap {
    height: 20em;
  }
}
.c-crd__img {
  -o-object-fit: cover;
     object-fit: cover;
  width: 100%;
  height: 14em;
}
.c-crd__btm {
  padding: 1em;
}

* {
  box-sizing: border-box;
}
*:before, *:after {
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
  height: 350px; /* Adjust the height as needed */
  background: url('assets/images/teachers.JPG') top/cover no-repeat; /* Add your image path and set background position to top */
  display: flex;
  align-items: center;
  justify-content: flex-start;
  color: #fff; 
  padding-left: 20px; /* Adjust as needed */
}

.c-hero-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.5); /* Adjust the opacity here */
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


</style>

<header class="c-hero c-page-header c-page-header__feature">
  <div class="c-page-header__content">
    <!-- Hero Section 1 -->
    <section class="c-hero-carousel">
      <div class="c-carousel c-carousel--inset u-position--relative">
        <div class="c-carousel__slides js-carousel__single-item">
          <div class="c-carousel__item--inset u-position--relative">
            <img src="assets/images/go.png" />
            <div class="c-carousel__item-text__wrap u-theme--background-color-trans--dark">
              <div class="l-container">
                <div class="c-carousel__item-text u-spacing--half">
                  <div class="c-carousel__item-text--inner">
                    <h2 class="u-font--primary--xl c-carousel__item-heading">
                      Our Mission
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

<!-- component -->
<script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>

<article x-data="slider" class="relative w-full flex flex-shrink-0 overflow-hidden shadow-2xl">
    <div class="rounded-full bg-gray-600 text-white absolute top-5 right-5 text-sm px-2 text-center z-10">
        <span x-text="currentIndex"></span>/
        <span x-text="images.length"></span>
    </div>

    <template x-for="(image, index) in images">
        <figure class="h-96" x-show="currentIndex == index + 1" x-transition:enter="transition transform duration-300"
        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
        x-transition:leave="transition transform duration-300" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0">
        <img :src="image" alt="Image" class="absolute inset-0 z-10 h-full w-full object-cover opacity-70" />
        <figcaption class="absolute inset-x-0 bottom-1 z-20 w-96 mx-auto p-4 font-light text-sm text-center tracking-widest leading-snug bg-gray-300 bg-opacity-25">
            Any kind of content here!
            Primum in nostrane potestate est, quid meminerimus? Nulla erit controversia. Vestri haec verecundius, illi fortasse constantius. 
        </figcaption>
        </figure>
    </template>

    <button @click="back()"
        class="absolute left-14 top-1/2 -translate-y-1/2 w-11 h-11 flex justify-center items-center rounded-full shadow-md z-10 bg-gray-100 hover:bg-gray-200">
        <svg class=" w-8 h-8 font-bold transition duration-500 ease-in-out transform motion-reduce:transform-none text-gray-500 hover:text-gray-600 hover:-translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7">
            </path>
        </svg>
    </button>

    <button @click="next()"
    class="absolute right-14 top-1/2 translate-y-1/2 w-11 h-11 flex justify-center items-center rounded-full shadow-md z-10 bg-gray-100 hover:bg-gray-200">
        <svg class=" w-8 h-8 font-bold transition duration-500 ease-in-out transform motion-reduce:transform-none text-gray-500 hover:text-gray-600 hover:translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
        xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path>
        </svg>
    </button>
</article>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('slider', () => ({
            currentIndex: 1,
            images: [
                'assets/images/go.png',
                'https://source.unsplash.com/1600x900/?cat',
                'https://source.unsplash.com/1600x900/?dog',
                'https://source.unsplash.com/1600x900/?lego',
                'https://source.unsplash.com/1600x900/?textures&patterns'
            ],
            back() {
                if (this.currentIndex > 1) {
                    this.currentIndex = this.currentIndex - 1;
                }
            },
            next() {
                if (this.currentIndex < this.images.length) {
                    this.currentIndex = this.currentIndex + 1;
                } else if (this.currentIndex <= this.images.length){
                    this.currentIndex = this.images.length - this.currentIndex + 1
                }
            },
        }))
    })
</script>

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
                            The East Kampala Seventh Day Adventist Church (EKC) is one the latest Adventist Churches
                            founded in Eastern part of Kampala District located in Kira Kimanyi EKC is a sub-entity of
                            the Central Uganda Conference, which coordinates the Church’s activities in the Eastern part
                            of Kampala
                        </p>
                        <a href="about-us.php" class="c-card__button o-button o-button--outline">Read More<span
                                class="u-icon u-icon--m u-path-fill--base u-space--half--left"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <title>Long right arrow</title>
                                    <path
                                        d="M18.29,8.59l-3.5-3.5L13.38,6.5,15.88,9H.29v2H15.88l-2.5,2.5,1.41,1.41,3.5-3.5L19.71,10Z"
                                        fill="#9b9b9b" />
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
                        The Seventh-day Adventist® Church was born out of the Millerite movement of the 1840s when
                            thousands of Christians searched for greater understanding of biblical prophecy. Among
                            these believers was a group in New England that rediscovered the seventh-day Sabbath.
                            And we started in 2017.
                        </p>
                        <a href="history.php" class="c-card__button o-button o-button--outline">Read More<span
                                class="u-icon u-icon--m u-path-fill--base u-space--half--left"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <title>Long right arrow</title>
                                    <path
                                        d="M18.29,8.59l-3.5-3.5L13.38,6.5,15.88,9H.29v2H15.88l-2.5,2.5,1.41,1.41,3.5-3.5L19.71,10Z"
                                        fill="#9b9b9b" />
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
      <img src="assets/images/sda logo white.png" width="10%" alt="Seventh Day Adventist Logo"/>
    </div>
      
    </div>
  </section>


<!-- Custom widgets -->
<div class='o-c'>
  <div class='c-crds'>

    <a class='c-crd' href='daily-devotion.php'>
      <div class='c-crd__wrap'>
        <img class="c-crd__img " src="https://st2.depositphotos.com/2021995/6621/i/450/depositphotos_66218195-stock-photo-sermon-concept-metal-letterpress-word.jpg" alt="Sermons from East Kampala Seventh-day Adventist Church">
        <div class='c-crd__btm'>
          <h3>Our Sermons</h3>
        </div>
      </div>
    </a>
    
    <a class='c-crd' href="audio-sermons.php">
      <div class='c-crd__wrap'>
        <img class="c-crd__img" src="https://www.brooklyntabernacle.org/wp-content/uploads/2020/08/Audio-Sermons-Online-Slide.jpg" alt="Audio Sermons from East Kampala Seventh-day Adventist Church">
        <div class='c-crd__btm'>
          <h3>Audio Sermons</h3>
        </div>
      </div>
    </a>
    <a class='c-crd' href="gallery.php">
      <div class='c-crd__wrap'>
        <img class="c-crd__img" src="assets/images/events.JPG" alt="Latest Events from East Kampala Seventh-day Adventist Church">
        <div class='c-crd__btm'>
          <h3>Image Archives</h3>
        </div>
      </div>
    </a>
    <a class='c-crd' href="announcements.php">
      <div class='c-crd__wrap'>
        <img class="c-crd__img" src="https://t3.ftcdn.net/jpg/03/13/59/86/360_F_313598699_jyO0OFvaccHWe9YsAY1s8Ycpf0qVPIVz.jpg" alt="Latest Announcements from East Kampala Seventh-day Adventist Church">
        <div class='c-crd__btm'>
          <h3>Latest Announcements</h3>
        </div>
      </div>
    </a>
  </div>
</div>





  
</main>



<!-- component -->
<link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css" />
<script src="https://cdn.tailwindcss.com"></script>

<!-- ====== Services Section Start -->
<section class="pt-20 lg:pt-[120px] pb-12 lg:pb-[90px]">
   <div class="container">
      <div class="flex flex-wrap -mx-4">
         <div class="w-full px-4">
            <div class="text-center mx-auto mb-12 lg:mb-20 max-w-[510px]">
               <span class="font-semibold text-lg text-primary mb-2 block">
               Our Services
               </span>
               <h2
                  class="
                  font-bold
                  text-3xl
                  sm:text-4xl
                  md:text-[40px]
                  text-dark
                  mb-4
                  "
                  >
                  What We Offer
               </h2>
               <p class="text-base text-body-color">
                  There are many variations of passages of Lorem Ipsum available
                  but the majority have suffered alteration in some form.
               </p>
            </div>
         </div>
      </div>
      <div class="flex flex-wrap -mx-4">
         <div class="w-full md:w-1/2 lg:w-1/3 px-4">
          
            <div
               class="
               p-10
               md:px-7
               xl:px-10
               rounded-[20px]
               bg-white
               shadow-md
               hover:shadow-lg
               mb-8
               "
               >
               <!-- header image -->
               <img width="100%" height="100%" src="https://images.squarespace-cdn.com/content/v1/557f823ce4b090a9ff784885/1557100346878-ZOVL199GT6JPWQBQXEUD/new+sermons.jpg?format=1500w" alt="Video Sermons from East Kampala Seventh-day Adventist Church">
               <div
                  class="
                  w-[70px]
                  h-[70px]
                  flex
                  items-center
                  justify-center
                  bg-primary
                  rounded-2xl
                  mb-8
                  "
                  >
                  <!-- icon -->
                  <img width="40" height="40" src="https://svg-files.pixelied.com/d4032437-d43d-4ade-a7d0-2180a7ddf0a3/thumb-256px.png" alt="Daily Devotions from East Kampala Seventh-day Adventist Church">
               </div>
               <h4 class="font-semibold text-xl text-dark mb-3">
                  Daily Devotions
               </h4>
               <p class="text-body-color">
                  Get blessed by our audio sermons from our respective preachers.
               </p>
            </div>
         </div>


         <div class="w-full md:w-1/2 lg:w-1/3 px-4">
            <div
               class="
               p-10
               md:px-7
               xl:px-10
               rounded-[20px]
               bg-white
               shadow-md
               hover:shadow-lg
               mb-8
               "
               >
               <img width="100%" height="100%" src="https://www.brooklyntabernacle.org/wp-content/uploads/2020/08/Audio-Sermons-Online-Slide.jpg" alt="Audio Sermons from East Kampala Seventh-day Adventist Church">
               <div
                  class="
                  w-[70px]
                  h-[70px]
                  flex
                  items-center
                  justify-center
                  bg-primary
                  rounded-2xl
                  mb-8
                  "
                  >
                  <img width="40" height="40" src="https://svg-files.pixelied.com/6fc442b3-1667-42c9-9af7-0a05cf4ef1fe/thumb-256px.png" alt="Audio Sermons from East Kampala Seventh-day Adventist Church">
               </div>
               <h4 class="font-semibold text-xl text-dark mb-3">
                Audio Sermons
               </h4>
               <p class="text-body-color">
                Get Blessed by our weekly audio sermons by our different wonderful speakers.
               </p>
            </div>
         </div>
         <div class="w-full md:w-1/2 lg:w-1/3 px-4">
            <div
               class="
               p-10
               md:px-7
               xl:px-10
               rounded-[20px]
               bg-white
               shadow-md
               hover:shadow-lg
               mb-8
               "
               >
               <!-- the header image -->
               <img width="100%" height="100%" src="https://o.b5z.net/i/u/10173510/i/sermon_videos.jpg" alt="Video Sermons from East Kampala Seventh-day Adventist Church">
               <div
                  class="
                  w-[70px]
                  h-[70px]
                  flex
                  items-center
                  justify-center
                  bg-primary
                  rounded-2xl
                  mb-8
                  "
                  >
              <!-- the icon -->
              <img width="40" height="40" src="https://svg-files.pixelied.com/b6e43a46-58bd-4526-bd04-68cc661b314b/thumb-256px.png" alt="Audio Sermons from East Kampala Seventh-day Adventist Church">
               </div>
               <h4 class="font-semibold text-xl text-dark mb-3">
                  Video Sermons
               </h4>
               <p class="text-body-color">
                  Watch and Download our latest and soul nourishing sermons recorded from East Kampala SDA Church
               </p>
            </div>
         </div>



         <div class="w-full md:w-1/2 lg:w-1/3 px-4">
            <div
               class="
               p-10
               md:px-7
               xl:px-10
               rounded-[20px]
               bg-white
               shadow-md
               hover:shadow-lg
               mb-8
               rotate[32]
               "
               >
               <div
                  class="
                  w-[70px]
                  h-[70px]
                  flex
                  items-center
                  justify-center
                  bg-primary
                  rounded-2xl
                  mb-8
                  "
                  >
                  <svg
                     width="35"
                     height="35"
                     viewBox="0 0 35 35"
                     fill="none"
                     xmlns="http://www.w3.org/2000/svg"
                     >
                     <path
                        d="M17.5 7.875C8.20312 7.875 0.65625 16.0781 0.65625 26.1406C0.65625 26.6875 1.09375 27.125 1.64062 27.125H33.3594C33.9062 27.125 34.3438 26.6875 34.3438 26.1406C34.3438 16.0781 26.7969 7.875 17.5 7.875ZM19.4687 25.2109L17.9922 20.5078C17.8281 20.0156 17.1719 20.0156 17.0078 20.5078L15.5312 25.2109H2.625C3.0625 16.625 9.57031 9.78906 17.5 9.78906C25.4297 9.78906 31.9375 16.625 32.375 25.2109H19.4687Z"
                        fill="white"
                        />
                     <path
                        d="M17.5 13.7812C16.9531 13.7812 16.5156 14.2187 16.5156 14.7656V16.1875C16.5156 16.7344 16.9531 17.1719 17.5 17.1719C18.0469 17.1719 18.4844 16.7344 18.4844 16.1875V14.7656C18.4844 14.2187 18.0469 13.7812 17.5 13.7812Z"
                        fill="white"
                        />
                     <path
                        d="M25.8672 17.8828L24.9922 18.8125C24.6094 19.1953 24.6094 19.7969 24.9922 20.1797C25.1563 20.3438 25.4297 20.4531 25.6484 20.4531C25.9219 20.4531 26.1406 20.3438 26.3594 20.1797L27.2344 19.25C27.6172 18.8672 27.6172 18.2656 27.2344 17.8828C26.8516 17.5 26.25 17.5 25.8672 17.8828Z"
                        fill="white"
                        />
                     <path
                        d="M9.13281 17.8828C8.80468 17.5 8.14843 17.4453 7.76562 17.8281C7.38281 18.1562 7.32812 18.8125 7.71093 19.1953L8.53125 20.125C8.69531 20.3437 8.96874 20.4531 9.24218 20.4531C9.46093 20.4531 9.67968 20.3984 9.89843 20.2344C10.2812 19.9062 10.3359 19.25 9.95312 18.8672L9.13281 17.8828Z"
                        fill="white"
                        />
                  </svg>
               </div>
               <h4 class="font-semibold text-xl text-dark mb-3">
                  Speed Optimized
               </h4>
               <p class="text-body-color">
                  We dejoy working with discerning clients, people for whom
                  qualuty, service, integrity & aesthetics.
               </p>
            </div>
         </div>
         <div class="w-full md:w-1/2 lg:w-1/3 px-4">
            <div
               class="
               p-10
               md:px-7
               xl:px-10
               rounded-[20px]
               bg-white
               shadow-md
               hover:shadow-lg
               mb-8
               "
               >
               <div
                  class="
                  w-[70px]
                  h-[70px]
                  flex
                  items-center
                  justify-center
                  bg-primary
                  rounded-2xl
                  mb-8
                  "
                  >
                  <svg
                     width="35"
                     height="35"
                     viewBox="0 0 35 35"
                     fill="none"
                     xmlns="http://www.w3.org/2000/svg"
                     >
                     <path
                        d="M29.5312 21.6562L28.6563 21.1641L29.6953 20.5625C30.7344 19.9062 31.3359 18.8125 31.2812 17.6094C31.2266 16.4063 30.625 15.3125 29.5312 14.7109L27.8906 13.7813L29.6406 12.6875C30.6797 12.0313 31.2812 10.9375 31.2266 9.73438C31.1719 8.53125 30.5703 7.4375 29.4766 6.83594L19.25 1.09375C18.2109 0.492187 16.9531 0.546875 15.9141 1.09375L5.41406 7.21875C4.375 7.82031 3.71875 8.91406 3.71875 10.1172C3.71875 11.3203 4.375 12.4141 5.41406 13.0156L7.10938 14L5.41406 14.9844C4.375 15.5859 3.71875 16.6797 3.71875 17.8828C3.71875 19.0859 4.32031 20.1797 5.41406 20.7812L6.39844 21.3281L5.46875 21.875C4.42969 22.4766 3.77344 23.5703 3.77344 24.7734C3.77344 25.9766 4.375 27.0703 5.46875 27.6719L15.9141 33.6875C16.4609 34.0156 17.0078 34.125 17.6094 34.125C18.2109 34.125 18.8125 33.9609 19.3594 33.6328L29.6953 27.2891C30.7344 26.6328 31.3359 25.5391 31.2812 24.3359C31.2266 23.2969 30.625 22.2031 29.5312 21.6562ZM5.63281 10.1172C5.63281 9.57031 5.90625 9.13281 6.34375 8.85938L16.8438 2.78906C17.0625 2.67969 17.3359 2.57031 17.5547 2.57031C17.7734 2.57031 18.0469 2.625 18.2656 2.73437L28.5469 8.47656C28.9844 8.75 29.2578 9.1875 29.3125 9.73438C29.3125 10.2812 29.0391 10.7188 28.6016 10.9922L18.3203 17.3906C17.8828 17.6641 17.2812 17.6641 16.8438 17.3906L6.39844 11.375C5.90625 11.1562 5.63281 10.6641 5.63281 10.1172ZM5.63281 17.9375C5.63281 17.3906 5.90625 16.9531 6.34375 16.6797L9.02344 15.1484L15.8594 19.0859C16.4062 19.4141 16.9531 19.5234 17.5547 19.5234C18.1562 19.5234 18.7578 19.3594 19.3047 19.0312L26.0312 14.875L28.6016 16.2969C29.0391 16.5703 29.3125 17.0078 29.3672 17.5547C29.3672 18.1016 29.0938 18.5391 28.6563 18.8125L18.3203 25.2656C17.8828 25.5391 17.2812 25.5391 16.8438 25.2656L6.39844 19.25C5.90625 18.9766 5.63281 18.4844 5.63281 17.9375ZM28.6563 25.8125L18.3203 32.2109C17.8828 32.4844 17.2812 32.4844 16.8438 32.2109L6.39844 26.1953C5.96094 25.9219 5.6875 25.4844 5.6875 24.9375C5.6875 24.3906 5.96094 23.9531 6.39844 23.6797L8.3125 22.5859L15.8594 26.9609C16.4062 27.2891 16.9531 27.3984 17.5547 27.3984C18.1562 27.3984 18.7578 27.2344 19.3047 26.9062L26.7969 22.2578L28.6563 23.2969C29.0938 23.5703 29.3672 24.0078 29.4219 24.5547C29.3672 25.0469 29.0938 25.5391 28.6563 25.8125Z"
                        fill="white"
                        />
                  </svg>
               </div>
               <h4 class="font-semibold text-xl text-dark mb-3">
                  Fully Customizable
               </h4>
               <p class="text-body-color">
                  We dejoy working with discerning clients, people for whom
                  qualuty, service, integrity & aesthetics.
               </p>
            </div>
         </div>
         <div class="w-full md:w-1/2 lg:w-1/3 px-4">
            <div
               class="
               p-10
               md:px-7
               xl:px-10
               rounded-[20px]
               bg-white
               shadow-md
               hover:shadow-lg
               mb-8
               "
               >
               <div
                  class="
                  w-[70px]
                  h-[70px]
                  flex
                  items-center
                  justify-center
                  bg-primary
                  rounded-2xl
                  mb-8
                  "
                  >
                  <svg
                     width="35"
                     height="35"
                     viewBox="0 0 35 35"
                     fill="none"
                     xmlns="http://www.w3.org/2000/svg"
                     >
                     <path
                        d="M4.04684 15.5859C4.2109 15.5859 4.37497 15.5859 4.48434 15.5313L10.5547 13.3984C11.0468 13.2344 11.3203 12.6875 11.1562 12.1953C10.9922 11.7031 10.4453 11.4297 9.95309 11.5938L6.28903 12.9063C8.09372 7.92969 12.8515 4.53906 18.375 4.53906C24.2265 4.53906 29.3672 8.42188 30.789 14.0547C30.8984 14.5469 31.4453 14.875 31.9375 14.7656C32.4297 14.6563 32.7578 14.1094 32.6484 13.6172C31.0078 7.16406 25.1015 2.67969 18.375 2.67969C11.8125 2.67969 6.12497 6.89063 4.26559 13.0156L2.57028 8.25781C2.40622 7.76563 1.85934 7.49219 1.36715 7.65625C0.874967 7.82031 0.60153 8.36719 0.765592 8.85938L2.84372 14.8203C3.00778 15.2578 3.55465 15.5859 4.04684 15.5859Z"
                        fill="white"
                        />
                     <path
                        d="M34.2343 27.2891L31.9922 21.3828C31.8828 21.0547 31.6093 20.7812 31.2812 20.6719C30.9531 20.5625 30.625 20.5078 30.2968 20.6719L24.2812 22.9687C23.789 23.1328 23.5156 23.7344 23.7343 24.2266C23.8984 24.7187 24.5 24.9922 24.9922 24.7734L28.7109 23.3516C26.6328 27.6719 22.2031 30.5156 17.1718 30.5156C11.6484 30.5156 6.78122 27.0703 5.0859 21.9297C4.86715 21.4375 4.32028 21.1641 3.82809 21.3281C3.3359 21.4922 3.06247 22.0391 3.22653 22.5312C5.19528 28.4375 10.7734 32.4297 17.1172 32.4297C23.1328 32.4297 28.4922 28.875 30.6797 23.4609L32.4297 28C32.5937 28.3828 32.9218 28.6016 33.3047 28.6016C33.414 28.6016 33.5234 28.6016 33.6328 28.5469C34.1797 28.3281 34.4531 27.7813 34.2343 27.2891Z"
                        fill="white"
                        />
                  </svg>
               </div>
               <h4 class="font-semibold text-xl text-dark mb-3">
                  Regular Updates
               </h4>
               <p class="text-body-color">
                  We dejoy working with discerning clients, people for whom
                  qualuty, service, integrity & aesthetics.
               </p>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- ====== Services Section End -->




<!-- Message from Pastors Section -->
<!-- component -->
<section class="bg-white dark:bg-gray-900">
    <div class="container px-6 py-10 mx-auto">
        <div class="xl:flex xl:items-center xL:-mx-4">
            <div class="xl:w-1/2 xl:mx-4">
                <h1 class="text-3xl font-semibold text-gray-800 capitalize lg:text-4xl dark:text-white">Message From Our Pastors</h1>
                
                <p class="max-w-2xl mt-4 text-gray-500 dark:text-gray-300">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo incidunt ex placeat modi magni quia error alias, adipisci rem similique, at omnis eligendi optio eos harum.
                </p>
            </div>
            
            <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-0 xl:mx-4 xl:w-1/2 md:grid-cols-2">
                <div>
                    <img class="object-cover rounded-xl h-64 w-full" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="">
                    
                    <h1 class="mt-4 text-2xl font-semibold text-gray-700 capitalize dark:text-white">John Doe</h1>
                    
                    <p class="mt-2 text-gray-500 capitalize dark:text-gray-300">Full stack developer</p>
                </div>

                <div>
                    <img class="object-cover rounded-xl h-64 w-full" src="https://images.unsplash.com/photo-1499470932971-a90681ce8530?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="">
                    
                    <h1 class="mt-4 text-2xl font-semibold text-gray-700 capitalize dark:text-white">Mia</h1>
                    
                    <p class="mt-2 text-gray-500 capitalize dark:text-gray-300">Graphic Designer</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "footer.php"; ?>
<?php include "scripts.php"; ?>
</body>

</html>

