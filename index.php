<!DOCTYPE html>
<html>
<?php
  include_once("head.php")
?>

<body>
  <?php
    include_once("header.php")
  ?>
    <!--//header-->
    <!--/banner-->
    <div class="banner">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="carousel-caption">
                        <h3>We Are More Than Industrial Company</h3>

                        <div class="bnr-button">
                            <button type="button" class="btn btn-primary play" data-toggle="modal" data-target="#exampleModal">
								<i class="fas fa-play"></i>
							</button>
                        </div>

                    </div>
                </div>
                <div class="carousel-item item2">
                    <div class="carousel-caption">
                        <h3>Turning big ideas into great products</h3>

                        <div class="bnr-button">
                            <button type="button" class="btn btn-primary play" data-toggle="modal" data-target="#exampleModal">
								<i class="fas fa-play"></i>
							</button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item item3">
                    <div class="carousel-caption">
                        <h3>We Are More Than Industrial Company</h3>

                        <div class="bnr-button">
                            <button type="button" class="btn btn-primary play" data-toggle="modal" data-target="#exampleModal">
								<i class="fas fa-play"></i>
							</button>
                        </div>

                    </div>
                </div>
                <div class="carousel-item item4">
                    <div class="carousel-caption">
                        <h3>Turning big ideas into great products</h3>

                        <div class="bnr-button">
                            <button type="button" class="btn btn-primary play" data-toggle="modal" data-target="#exampleModal">
								<i class="fas fa-play"></i>
							</button>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
        </div>
    </div>
    <!--/model-->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ADH HYDRAULIC PRESS BRAKE</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
                </div>
                <div class="modal-body video">
                    <iframe src="https://www.youtube.com/embed/VAYGosLEaCU" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div> -->
            </div>
        </div>
    </div>
    <!--//model-->
    <!--//banner-->
    <section class="banner-bottom">
        <div class="container">

            <!-- Three columns of text below the carousel -->
            <div class="row inner-sec-wthree">

                <div class="col-lg-4 bt-bottom-info" data-aos="fade-right">
                    <h5>Welcome to Accurics</h5>

                </div>
                <div class="col-lg-8 bt-bottom-info indent-p-inside" data-aos="fade-left">
                    <p>
                      Founded in 2019, ACCURICS LASERS. We offers precision and productive laser cutting resources
                      that delivers high quality products. We are committed to providing world class customer service
                      and solutions in the field of fully integrated bespoke metal work and precision sheet metal
                      fabrication.
                    </p>
                    <p>
                      Our highly skilled workforces have over 20 years’ experience in metal fabrication. With on-site
                      facilities for TIG and MIG welding in both stainless steel & aluminum, a CNC Fabrication shop,
                      we are able to offer a comprehensive service to all our customers.
                    </p>
                </div>
            </div>
            <!-- <div class="row inner-sec-wthree">
                <div class="col-lg-4 bottom-sub-grid text-center aos-init aos-animate" data-aos="zoom-in">
                    <div class="bt-icon">

                        <span class="fas fa-trophy"></span>
                    </div>

                    <h4 class="sub-tittle">Humility</h4>
                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
                    <p>
                        <a class="btn btn-secondary view" href="details.php" role="button">View details</a>
                    </p>
                </div>
                <div class="col-lg-4 bottom-sub-grid text-center aos-init aos-animate" data-aos="zoom-in">
                    <div class="bt-icon">
                        <span class="far fa-thumbs-up"></span>
                    </div>

                    <h4 class="sub-tittle">Passion</h4>
                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
                    <p>
                        <a class="btn btn-secondary view" href="details.php" role="button">View details</a>
                    </p>
                </div>
                <div class="col-lg-4 bottom-sub-grid text-center aos-init aos-animate" data-aos="zoom-in">
                    <div class="bt-icon">
                        <span class="fas fa-tv"></span>
                    </div>

                    <h4 class="sub-tittle">Honesty</h4>
                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
                    <p>
                        <a class="btn btn-secondary view" href="details.php" role="button">View details</a>
                    </p>
                </div>
            </div> -->
        </div>
        <!-- /.row -->
    </section>
    <!---->
    <!-- /stats -->
    <!-- <section class="stats_test container-fluid">

        <div class="row inner_stat">
            <div class="col-lg-6 stats-left-info">
                <div class="row">
                    <div class="col-md-6 stats_left counter_grid">
                        <i class="far fa-building"></i>
                        <p class="counter">145</p>
                        <h4>Factories</h4>
                    </div>
                    <div class="col-md-6 stats_left counter_grid1">
                        <i class="fas fa-users"></i>
                        <p class="counter">165</p>
                        <h4>Workers</h4>
                    </div>
                    <div class="col-md-6 stats_left counter_grid2">
                        <i class="far fa-edit"></i>
                        <p class="counter">563</p>
                        <h4>Pojects</h4>
                    </div>
                    <div class="col-md-6 stats_left counter_grid3">
                        <i class="far fa-smile"></i>
                        <p class="counter">1045</p>
                        <h4>Happy Clients</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 stats-right-img">

            </div>
        </div>
    </section> -->
    <!-- //stats -->
    <!--/services-->
    <section class="services">
        <div class="container">
            <h3 class="tittle">Our Services</h3>
            <div class="row inner-sec-wthree">
                <div class="col-lg-4 grid_info_main" data-aos="flip-left">
                    <div class="grid_info">
                        <div class="icon_info">
                            <span class="icon">
              								<i class="fas fa-laptop"></i>
              							</span>
                            <h5>Fiber Laser Cutting</h5>
                            <p> Accurics Laser specialize in precise Laser Cutting of a wide variety of Metal
                                Sheets. A laser works well for cutting: Mild Steel, Aluminium, Stainless Steel,
                                and more. Tight tolerances enable us to meet the toughest standards.
                            </p>
                            <a  href="laser-cutting.php">Read more ...</a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 grid_info_main mid" data-aos="flip-down">
                    <img src="images/ab.jpg" class="img-fluid" alt=" ">
                </div>
                <div class="col-lg-4 grid_info_main" data-aos="flip-right">
                    <!-- <div class="grid_info">
                        <div class="icon_info">
                            <span class="icon">
								<i class="fas fa-sitemap"></i>
							</span>
                            <h5>Fabricating</h5>
                            <p>Laser cut acrylic (Plexiglass) sheet can be heat bent or folded to your specs. Acrylic sheet parts can also be glued, milled or routed. We offer a full-service plastic fabrication department.</p>
                        </div>
                    </div>
                    <div class="grid_info second">
                        <div class="icon_info">
                            <span class="icon">
								<i class="fab fa-android"></i>
							</span>
                            <h5>CNC Routing & Milling</h5>
                            <p>Precision CNC Milling is up our alley at LCI. With Haas Automation on board, we provide fast setups and efficient turnaround time on large quantities of parts at a fair price.</p>
                        </div>
                    </div> -->
                    <div class="grid_info second">
                        <div class="icon_info">
                            <span class="icon"><i class="far fa-clone"></i></span>
                            <h5>CNC Bending</h5>
                            <p>In addition to the Fiber Laser cutting machine, Accurics Laser has latest CNC Bending Machine with
                                high level of precision and accuracy. Capacity of CNC Bending Machine is 160 ton.
                            </p>
                            <a  href="cnc-bending.php">Read more ...</a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!--//services-->
    <!---->
    <section class="grids_sec_2">
        <div class="row style-grids_main">
            <div class="col-md-6 grid_sec_info">
                <div class="style-grid-2-text_info" data-aos="fade-right">
                    <h3>
                        Turning big ideas into great products.</h3>
                    <p>Large format prints can be mounted to expanded PVC (Sintra) sheet material and then laminated for protection. Mounted images can then be laser cut to just about any contour or die-line. Prints can also be mounted to the 2nd surface (backside) of clear acrylic for a rich protected look.</p>
                    <div class="bnr-button">
                        <button type="button" class="btn btn-primary play" data-toggle="modal" data-target="#exampleModal">
							<i class="fas fa-play"></i>
						</button>
                    </div>

                </div>
            </div>
            <div class="col-md-6 style-image-2">
            </div>
            <div class="col-md-6 style-image-2 second">
            </div>
            <div class="col-md-6 grid_sec_info">
                <div class="style-grid-2-text_info" data-aos="fade-right">
                    <h3>
                        Get a quote</h3>
                    <p>Need a Quote on a project? Either give us a call or e-mail us at the address listed below. We understand that our customers need quick turnaround times and our team responds quickly to quote requests to help you with a solution. From pencil sketch to cad file, we can work with just about any file format to make your request into a finished success.</p>
                    <div class="bnr-button">
                        <!-- <button type="button" class="btn btn-primary play" data-toggle="modal" data-target="#exampleModal">
							<i class="fas fa-play"></i>
						</button> -->
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!--/Projects-->
    <!-- <section class="services">
        <div class="container">
            <h3 class="tittle">Our Latest Projects
            </h3>
            <div class="row inner-sec-wthree">

                <div class="col-md-4 proj_gallery_grid" data-aos="zoom-in">
                    <div class="section_1_gallery_grid">
                        <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g1.jpg">
                            <div class="section_1_gallery_grid1">
                                <img src="images/g1.jpg" alt=" " class="img-fluid" />
                                <div class="proj_gallery_grid1_pos">
                                    <h3>Smelter</h3>
                                    <p>Add some text</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="section_1_gallery_grid" data-aos="zoom-in">
                        <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g2.jpg">
                            <div class="section_1_gallery_grid1">
                                <img src="images/g2.jpg" alt=" " class="img-fluid" />
                                <div class="proj_gallery_grid1_pos">
                                    <h3>Smelter</h3>
                                    <p>Add some text</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="section_1_gallery_grid" data-aos="zoom-in">
                        <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g3.jpg">
                            <div class="section_1_gallery_grid1">
                                <img src="images/g3.jpg" alt=" " class="img-fluid" />
                                <div class="proj_gallery_grid1_pos">
                                    <h3>Smelter</h3>
                                    <p>Add some text</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 proj_gallery_grid" data-aos="zoom-in">
                    <div class="section_1_gallery_grid">
                        <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g4.jpg">
                            <div class="section_1_gallery_grid1">
                                <img src="images/g4.jpg" alt=" " class="img-fluid" />
                                <div class="proj_gallery_grid1_pos">
                                    <h3>Smelter</h3>
                                    <p>Add some text</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="section_1_gallery_grid" data-aos="zoom-in">
                        <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g5.jpg">
                            <div class="section_1_gallery_grid1">
                                <img src="images/g5.jpg" alt=" " class="img-fluid" />
                                <div class="proj_gallery_grid1_pos">
                                    <h3>Smelter</h3>
                                    <p>Add some text</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="section_1_gallery_grid" data-aos="zoom-in">
                        <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g6.jpg">
                            <div class="section_1_gallery_grid1">
                                <img src="images/g6.jpg" alt=" " class="img-fluid" />
                                <div class="proj_gallery_grid1_pos">
                                    <h3>Smelter</h3>
                                    <p>Add some text</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 proj_gallery_grid" data-aos="zoom-in">
                    <div class="section_1_gallery_grid">
                        <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g7.jpg">
                            <div class="section_1_gallery_grid1">
                                <img src="images/g7.jpg" alt=" " class="img-fluid" />
                                <div class="proj_gallery_grid1_pos">
                                    <h3>Smelter</h3>
                                    <p>Add some text</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="section_1_gallery_grid" data-aos="zoom-in">
                        <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g8.jpg">
                            <div class="section_1_gallery_grid1">
                                <img src="images/g8.jpg" alt=" " class="img-fluid" />
                                <div class="proj_gallery_grid1_pos">
                                    <h3>Smelter</h3>
                                    <p>Add some text</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="section_1_gallery_grid" data-aos="zoom-in">
                        <a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g9.jpg">
                            <div class="section_1_gallery_grid1">
                                <img src="images/g9.jpg" alt=" " class="img-fluid" />
                                <div class="proj_gallery_grid1_pos">
                                    <h3>Smelter</h3>
                                    <p>Add some text</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>



            </div>
        </div>
    </section> -->
    <!--//Projects-->
    <!--reviews_sec-->
    <!-- <section class="reviews_sec pad-100" id="testimonials">
        <h3 class="tittle cen">Testimonial</h3>
        <div class="inner-sec-wthree">
            <section class="slider">
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <div class="testimonials_grid">
                                <div class="testimonials_grid-inn">
                                    <img src="images/t3.jpg" alt=" " class="img-fluid" />
                                    <div class="test_social_pos">
                                        <ul class="social_list1">
                                            <li>
                                                <a href="#" class="facebook1"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" class="twitter2"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" class="dribble3"><i class="fab fa-dribbble"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <h3>Abhinav Kumar
                                    <span>Customer</span>
                                </h3>
                                <i>Ahmedabad</i>
                                <p>I could not believe it can be done in such low prices and at such good quality. Excellent work from the team.</p>
                            </div>
                        </li>

                    </ul>
                </div>
            </section>
        </div>
    </section> -->
    <!---->
    <!--footer-->
    <?php include_once("footer.php");
    ?>


</body>

</html>
