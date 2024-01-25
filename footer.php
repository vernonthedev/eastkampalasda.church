<style>
  .footer-text , h4{
    font-family: "noto serif", Georgia, Times, times new roman, serif;
  }
  li, strong{
    font-family: "noto serif", Georgia, Times, times new roman, serif;
  }
</style>

<footer class="c-footer u-theme--background-color--primary u-theme--background-color--darker" role="contentinfo">
  <div class="c-footer--inner u-color--white l-grid l-grid--7-col l-grid-wrap l-grid-wrap--6-of-7">
    <div class="l-grid-item l-grid-item--m--3-col c-footer__description">
      <p class="c-footer__description-text u-font--secondary--m footer-text" style="font-size:20px;">
        A vibrant Seventh-day Adventist congregation in the heart of Kampala, dedicated to worship, community, and
        spiritual growth. Join us on a path to faith and fellowship.<br>

        <img src="assets/images/sda logo white.png" width="20%" alt="Seventh Day Adventist Logo" style="padding-top:10px;"/>
        <br>
        SEVENTH-DAY<br>
        ADVENTIST
          CHURCH<br>
        EASTKAMPALA

      <p style="text-align: right;"></p>
      </p>
    </div> <!-- /.c-footer__description -->
    <div class="l-grid-item l-grid-item--m--3-col l-grid-item--l--1-col c-footer__primary-nav">
      <nav class="c-footer__primary-nav__list u-spacing--half">
        <a href="https://www.facebook.com/eastkampalasdachurch/"
          class="c-footer__primary-nav__link u-theme--link-hover--light u-link--white "
          target="_blank"><i class="bi bi-facebook"></i><strong> Facebook</strong></a>
        <a href="https://www.instagram.com/eastkampalasdachurch/"
          class="c-footer__primary-nav__link u-theme--link-hover--light u-link--white "
          target="_blank"><i class="bi bi-instagram"></i><strong> Instagram</strong></a>
        <a href="https://twitter.com/eastkampalasdachurch"
          class="c-footer__primary-nav__link u-theme--link-hover--light u-link--white "
          target="_blank"><i class="bi bi-twitter-x"></i><strong> Twitter</strong></a>
        <a href="https://www.youtube.com/@eastkampalasdachurch"
          class="c-footer__primary-nav__link u-theme--link-hover--light u-link--white "
          target="_blank"><i class="bi bi-youtube"></i><strong> Youtube</strong></a>
<br>
          <strong>Website Links</strong>
          <li><i class="bi bi-house-fill"><a href="daily-devotion.php"> Sermons</a> </i></li>
          <li><i class="bi bi-house-gear-fill"><a href="family-ministries.php"> Departments</a></i> </li>
          <li><i class="bi bi-calendar-check-fill"><a href="events.php"> Events</a></i> </li>
          <li><i class="bi bi-images"><a href="gallery.php"> Image Gallery</a></i></li>
          <li><i class="bi bi-person-lines-fill"><a href="about-us.php"> About Us</a></i>  </li>
          <li><i class="bi bi-camera-video-fill"><a href="live.php"> Livestream</a></i> </li>
          <li><i class="bi bi-telephone-forward-fill"></i><a href="contact-us.php"> Contact Us</a></i></li>
          <li><i class="bi bi-file-earmark-medical"><a href="privacy-policy.php"> Privacy Policy</a></i></li>
          
      </nav> 
    </div> 
    <div class="l-grid-item l-grid-item--m--3-col l-grid-item--l--2-col c-footer__secondary-nav">
      <nav class="c-footer__secondary-nav__list u-spacing--half">
        <h4>Subscribe to Our Newsletters.</h4>
        <form class="flex items-center">
    <div class="relative">
        <input style="border-radius: 25px; width: 350px; color:black;"id="subscribe" name="subscribe" type="email" placeholder="Your email address"
            class="pr-12 rounded-full py-2 px-4 border border-gray-300 focus:outline-none focus:border-blue-500 focus:ring focus:ring-blue-200 transition-all duration-300 w-64" />
        <button type="submit"
            class="absolute right-0 top-0 h-full bg-blue-500 text-white rounded-full px-4 hover:bg-blue-700 focus:outline-none focus:bg-blue-700 transition-all duration-300">
            Subscribe
        </button>
    </div>
</form>

        <h4 style="padding-top: 20px;">
          Mid-Week Fellowship
        </h4>
        <p>
          Join Us Every Wednesday and Friday for fellowship from 8:15pm - 9:00pm via our church platform:<br>
          Meeting ID: <strong>271 489 0869</strong><br>
          Password: <strong>202112</strong>
        </p><br>
        <img src="assets/images/ekc-qrcode.svg" width="45%" alt="QRCODE for East Kampala SDA Daily Devotions" style="padding-top:10px;"/>


      </nav> <!-- /.c-footer__secondary-nav -->
    </div> <!-- /.c-footer__secondary-nav -->
    <div class="l-grid-item l-grid-item--m--8-col c-footer__legal">
      <p class="c-footer__copyright">©
        <script>document.write(new Date().getFullYear())</script> East Kampala Seventh Day Adventist Church
      </p>
      <address class="c-footer__address" itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
        <span itemprop="streetAddress">Kira Kimwanyi</span> <span itemprop="addressLocality"> Kampala</span> <span
          itemprop="addressRegion">, Uganda</span>
        <a itemprop="telephone" href="tel:(+256) 772 485 289"
          class="c-footer__phone u-link--white u-theme--link-hover--light">(+256) 772 485 289</a>
      </address>
    </div> 
  </div>
</footer> 


<!-- Back to Top Button -->
<button id="backToTopBtn" onclick="scrollToTop()">
        &uarr;
    </button>

    <script>
         // Hide the loader when the page has finished loading
         window.onload = function () {
            document.getElementById("loader").style.display = "none";
        };

        // Function to scroll to the top of the page
        function scrollToTop() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }

        // Show/hide the back to top button based on scroll position
        window.onscroll = function() {
            showBackToTopButton();
        };

        function showBackToTopButton() {
            var btn = document.getElementById("backToTopBtn");
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                btn.style.display = "block";
            } else {
                btn.style.display = "none";
            }
        }
    </script>