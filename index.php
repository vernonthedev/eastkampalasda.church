<!DOCTYPE html>
<html class="u-theme--denim" lang="en-US">
<?php include "head.php"; ?>
<?php include "loading.php"; ?>
<?php include "header.php"; ?>

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

<main class="l-main">
  <section
    class="l-main__content l-grid l-grid--7-col u-shift--left--1-col--at-large l-grid-wrap--6-of-7 u-spacing--double--until-xxlarge u-padding--zero--sides">
    <!-- Card Section 1 -->
    <article class="c-article l-grid-item l-grid-item--l--4-col  post-1385 page type-page status-publish hentry">
      <div class="c-article__body">
        <div class="text u-spacing">
          <h2></h2>
          <div class="u-spacing--double u-space--double--top">
            <div class="c-card u-theme--border-color--darker u-border--left u-spacing--half">
              <h3 class="u-theme--color--darker u-font--primary--m">
                <a href="about-us.php" class="c-card__title-link u-theme--link-hover--dark">
                  <strong>Who we are</strong>
                </a>
              </h3>
              <p class="c-card__body text">
                The East Kampala Seventh Day Adventist Church (EKC) is one the latest Adventist Churches founded in
                Eastern part of Kampala District located in Kira Kimanyi
                EKC is a sub-entity of the General Conference of Seventh-day Adventists, which coordinates the Church’s
                activities in the Eastern part of Africa </p>
              <a href="about-us.php" class="c-card__button o-button o-button--outline">Read More<span
                  class="u-icon u-icon--m u-path-fill--base u-space--half--left"><svg xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20">
                    <title>Long right arrow</title>
                    <path d="M18.29,8.59l-3.5-3.5L13.38,6.5,15.88,9H.29v2H15.88l-2.5,2.5,1.41,1.41,3.5-3.5L19.71,10Z"
                      fill="#9b9b9b" />
                  </svg>
                </span></a>
            </div>



        
            <div class="c-card u-theme--border-color--darker u-border--left u-spacing--half">
              <h3 class="u-theme--color--darker u-font--primary--m">
                <a href="history.php" class="c-card__title-link u-theme--link-hover--dark">
                  <strong>History</strong>
                </a>
              </h3>
              <p class="c-card__body text">
                The Seventh-day Adventist® Church was born out of the Millerite movement of the 1840s when thousands of
                Christians searched for greater understanding of biblical prophecy. Among these believers was a group
                in New England that rediscovered the seventh-day Sabbath. </p>
              <a href="history.php" class="c-card__button o-button o-button--outline">Read More<span
                  class="u-icon u-icon--m u-path-fill--base u-space--half--left"><svg xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20">
                    <title>Long right arrow</title>
                    <path d="M18.29,8.59l-3.5-3.5L13.38,6.5,15.88,9H.29v2H15.88l-2.5,2.5,1.41,1.41,3.5-3.5L19.71,10Z"
                      fill="#9b9b9b" />
                  </svg>
                </span></a>
            </div>


          </div>
        </div>
      </div>
    </article>


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
        <img class="c-crd__img" src="https://st2.depositphotos.com/2021995/6621/i/450/depositphotos_66218195-stock-photo-sermon-concept-metal-letterpress-word.jpg" alt="Sermons from East Kampala Seventh-day Adventist Church">
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

<?php include "footer.php"; ?>
<?php include "scripts.php"; ?>
</body>

</html>

