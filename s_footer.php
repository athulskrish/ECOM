

<!-- footer-28 block -->
  <footer class="footer-28 position-relative py-5">
    <div class="container">
      <div class="row footer-top-28">
        <div class="col-lg-5 footer-list-28 pr-lg-5 mt-5">
          <h6 class="footer-title-28">Quick Contact</h6>
          <p class="pr-lg-5">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo, ultrices in ligula. Semper at
            tempufddfel. Learn more about our work! Lorem ipsum viverra feugiat.</p>

          <div class="main-social-footer-28 mt-4">
            <ul class="social-icons">
              <li class="facebook">
                <a href="#link" title="Facebook">
                  <span class="fa fa-facebook" aria-hidden="true"></span>
                </a>
              </li>
              <li class="twitter">
                <a href="#link" title="Twitter">
                  <span class="fa fa-twitter" aria-hidden="true"></span>
                </a>
              </li>
              <li class="dribbble">
                <a href="#link" title="Dribbble">
                  <span class="fa fa-dribbble" aria-hidden="true"></span>
                </a>
              </li>
              <li class="google">
                <a href="#link" title="Google">
                  <span class="fa fa-google" aria-hidden="true"></span>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="row">
            <div class="col-md-3 col-sm-6 footer-list-28 mt-5">
              <h6 class="footer-title-28">Quick Links</h6>
              <ul>
                <li><a href="index.html"><span class="fa fa-angle-double-right mr-2" aria-hidden="true"></span> Home</a>
                </li>
                <li><a href="about.html"><span class="fa fa-angle-double-right mr-2" aria-hidden="true"></span> About
                    us</a></li>
                <li><a href="services.html"><span class="fa fa-angle-double-right mr-2" aria-hidden="true"></span>
                    Services</a></li>
                <li><a href="blog.html"><span class="fa fa-angle-double-right mr-2" aria-hidden="true"></span> Blog
                    Posts</a></li>
                <li><a href="contact.html"><span class="fa fa-angle-double-right mr-2" aria-hidden="true"></span>
                    Contact</a></li>
              </ul>
            </div>
            <div class="col-md-5 col-sm-6 footer-list-28 mt-5">
              <h6 class="footer-title-28">Our Services</h6>
              <ul>
                <li><a href="#reserch"><span class="fa fa-angle-double-right mr-2" aria-hidden="true"></span> Chemical
                    Reserch</a></li>
                <li><a href="#construction"><span class="fa fa-angle-double-right mr-2" aria-hidden="true"></span>
                    Construction Materials</a></li>
                <li><a href="#agricultural"><span class="fa fa-angle-double-right mr-2" aria-hidden="true"></span>
                    Agricultural Engineering</a></li>
                <li><a href="#bridge"><span class="fa fa-angle-double-right mr-2" aria-hidden="true"></span> Bridge
                    Engineering</a></li>
                <li><a href="#automotive"><span class="fa fa-angle-double-right mr-2" aria-hidden="true"></span>
                    Automotive & System</a></li>
              </ul>
            </div>
            <div class="col-md-4 col-sm-6 footer-list-28 mt-sm-5 mt-4">
              <h6 class="footer-title-28">Help</h6>
              <ul>
                <li><a href="#privacy"><span class="fa fa-angle-double-right mr-2" aria-hidden="true"></span> Privacy
                    policy</a></li>
                <li><a href="#support"><span class="fa fa-angle-double-right mr-2" aria-hidden="true"></span>
                    Support</a></li>
                <li><a href="#terms"><span class="fa fa-angle-double-right mr-2" aria-hidden="true"></span> Terms &
                    conditions</a></li>
                <li><a href="#license"><span class="fa fa-angle-double-right mr-2" aria-hidden="true"></span> License
                    and uses</a></li>
              </ul>
            </div>

          </div>
        </div>
      </div>
      <div class="midd-footer-28 align-center py-2 mt-5">
        <p class="copy-footer-28 text-center">© 2021 Induz. All rights reserved. Design by <a
            href="https://w3layouts.com/" target="_blank">
            W3layouts</a></p>
      </div>
    </div>


    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
      &#10548;
    </button>
    <script>
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function () {
        scrollFunction()
      };

      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("movetop").style.display = "block";
        } else {
          document.getElementById("movetop").style.display = "none";
        }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>
    <!-- /move top -->
    <!-- //footer-28 block -->
  </footer>
  <!--//footer-->
  <!-- Template JavaScript -->
  <script src="shop/assets/js/jquery-3.3.1.min.js"></script>
  <script src="shop/assets/js/theme-change.js"></script>
  <!-- owl carousel -->
  <script src="shop/assets/js/owl.carousel.js"></script>
  <!-- script for tesimonials carousel slider -->
  <!-- script for owlcarousel -->
  <script>
    $(document).ready(function () {
      $('.owl-testimonial').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        responsiveClass: true,
        autoplay: false,
        autoplayTimeout: 5000,
        autoplaySpeed: 1000,
        autoplayHoverPause: false,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          480: {
            items: 1,
            nav: false
          },
          667: {
            items: 1,
            nav: false
          },
          1000: {
            items: 1,
            nav: false
          }
        }
      })
    })
  </script>
  <!-- //script for tesimonials carousel slider -->
  <!-- stats number counter-->
  <script src="shop/assets/js/jquery.waypoints.min.js"></script>
  <script src="shop/assets/js/jquery.countup.js"></script>
  <script>
    $('.counter').countUp();
  </script>
  <!-- //stats number counter -->
  <!-- disable body scroll which navbar is in active -->
  <script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- disable body scroll which navbar is in active -->

  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <!--//MENU-JS-->


<!-- nav element hover effect-->
 <script>
document.addEventListener("DOMContentLoaded", function(){
// make it as accordion for smaller screens
if (window.innerWidth > 992) {
document.querySelectorAll('.navbar .nav-item').forEach(function(everyitem){
everyitem.addEventListener('mouseover', function(e){
let el_link = this.querySelector('a[data-bs-toggle]');
if(el_link != null){
let nextEl = el_link.nextElementSibling;
el_link.classList.add('show');
nextEl.classList.add('show');
}
});
everyitem.addEventListener('mouseleave', function(e){
let el_link = this.querySelector('a[data-bs-toggle]');
if(el_link != null){
let nextEl = el_link.nextElementSibling;
el_link.classList.remove('show');
nextEl.classList.remove('show');
}
})
});
}
// end if innerWidth
});
 </script>

<!-- end hover -->




  <script src="shop/assets/js/bootstrap.min.js"></script>

</body>

</html>