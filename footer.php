<footer>
    <div class="container">
        <div class="row footer-top-w3layouts">
            <div class="col-lg-3 footer-grid-w3ls" data-aos="zoom-in">
                <div class="footer-title">
                    <h2>About Us</h2>
                </div>
                <div class="footer-text">
                    <p>Accurics Laser is proud to be engineered, designed and manufactured in the Pune. From our high-tech manufacturing facility located in Bhosari Pune, OUR laser machine delivers our fastest speeds, largest work area, and highest engraving quality.</p>

                </div>
            </div>
            <div class="col-lg-3 footer-grid-w3ls" data-aos="zoom-in">
                <div class="footer-title">
                    <h3>Contact Us</h3>
                </div>
                <div class="footer-office-hour">
                    <ul>
                        <li class="hd">Address :</li>
                        <li>B 5, Opposite Philps India, MIDC, Bhosari, Pune - 411026</li>

                    </ul>
                    <ul>
                        <li class="hd">Phone:+91 9922910563</li>
                        <li class="hd">Email:
                            <a href="mailto:accuricslaser@gmail.com">accuricslaser@gmail.com</a>
                        </li>
                        <!-- <li class="hd">Fax: 1(234) 567 8901</li> -->
                    </ul>
                </div>
            </div>
            <!-- <div class="col-lg-3 footer-grid-w3ls" data-aos="zoom-in">
                <div class="footer-title">
                    <h3>Recent Works</h3>
                </div>
                <div class="footer-list">
                    <div class="flickr-grid">
                        <a href="single.html">
            <img src="images/g1.jpg" class="img-fluid" alt=" ">
          </a>
                    </div>
                    <div class="flickr-grid">
                        <a href="#">
            <img src="images/g2.jpg" class="img-fluid" alt=" ">
          </a>
                    </div>
                    <div class="flickr-grid">
                        <a href="#">
            <img src="images/g3.jpg" class="img-fluid" alt=" ">
          </a>
                    </div>
                    <div class="flickr-grid">
                        <a href="#">
            <img src="images/g4.jpg" class="img-fluid" alt=" ">
          </a>
                    </div>
                    <div class="flickr-grid">
                        <a href="#">
            <img src="images/g9.jpg" class="img-fluid" alt=" ">
          </a>
                    </div>
                    <div class="flickr-grid">
                        <a href="#">
            <img src="images/g5.jpg" class="img-fluid" alt=" ">
          </a>
                    </div>
                    <div class="flickr-grid">
                        <a href="single.html">
            <img src="images/g6.jpg" class="img-fluid" alt=" ">
          </a>
                    </div>
                    <div class="flickr-grid">
                        <a href="#">
            <img src="images/g7.jpg" class="img-fluid" alt=" ">
          </a>
                    </div>
                    <div class="flickr-grid">
                        <a href="#">
            <img src="images/g8.jpg" class="img-fluid" alt=" ">
          </a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-lg-3 footer-grid-w3ls" data-aos="zoom-in">
                <div class="footer-title">
                    <h3>Subscribe</h3>
                </div>
                <p>Vivamus magna justo, lacinia eget consectetur sed.</p>
                <form action="#" method="post" class="newsletter">
                    <input class="email" type="email" placeholder="Your email..." required="">
                    <button class="btn1">
          <i class="far fa-envelope"></i>
        </button>
                </form>
                <div class="clearfix"></div>
            </div> -->

        </div>

    </div>
</footer>
<!---->
<div class="copyright">
    <div class="container">
        <div class="copyrighttop" data-aos="fade-left">
            <ul>
                <li>
                    <h4>Follow us on:</h4>
                </li>
                <li>
                    <a class="facebook" href="#">
          <i class="fab fa-facebook-f"></i>
        </a>
                </li>
                <li>
                    <a class="facebook" href="#">
          <i class="fab fa-twitter"></i>
        </a>
                </li>
                <li>
                    <a class="facebook" href="#">
          <i class="fab fa-google-plus-g"></i>
        </a>
                </li>
                <li>
                    <a class="facebook" href="#">
          <i class="fab fa-pinterest-p"></i>
        </a>
                </li>
            </ul>
        </div>
        <div class="copyrightbottom" data-aos="fade-right">
            <p>© 2018 Accurics. All Rights Reserved
            </p>

        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>
<!-- //js -->
<!-- simpleLightbox -->
<script src="js/simpleLightbox.js"></script>
<script>
    $('.proj_gallery_grid a').simpleLightbox();

</script>
<!-- //simpleLightbox -->
<!-- /js files -->
<link href='css/aos.css' rel='stylesheet prefetch' type="text/css" media="all" />
<link href='css/aos-animation.css' rel='stylesheet prefetch' type="text/css" media="all" />
<script src='js/aos.js'></script>
<script src="js/aosindex.js"></script>
<!-- //js files -->
<!-- flexSlider -->
<script defer src="js/jquery.flexslider.js"></script>
<script>
    $(window).load(function() {
        $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider) {
                $('body').removeClass('loading');
            }
        });
    });

</script>

<!-- //flexSlider -->

<!-- stats -->
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.countup.js"></script>
<script>
    $('.counter').countUp();

</script>
<!-- //stats -->

<!-- start-smoth-scrolling -->
<script src="js/move-top.js"></script>
<script src="js/easing.js"></script>
<script>
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 900);
        });
    });

</script>
<!-- start-smoth-scrolling -->

<script>
    $(document).ready(function() {
        /*
                    var defaults = {
                        containerID: 'toTop', // fading element id
                      containerHoverID: 'toTopHover', // fading element hover id
                      scrollSpeed: 1200,
                      easingType: 'linear'
                    };
                    */

        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });

</script>

<!-- /js -->
<script src="js/bootstrap.js"></script>
<!-- //js -->
