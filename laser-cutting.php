
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
    <div class="banner-inner">
    </div>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Fiber Laser Cutting</li>
    </ol>

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

                <div class="col-lg-5 bt-bottom-info" data-aos="fade-right">
                    <h5>Fiber Laser Cutting</h5>
                    <p class="mt-3">
                        Accurics Laser specialize in precise Laser Cutting of a wide variety of Metal
                        Sheets. A laser works well for cutting: Mild Steel, Aluminium, Stainless Steel,
                        and more. Tight tolerances enable us to meet the toughest standards. Accurics
                        Lase has a large table size to accommodate metal sheet size of up to1500 mm
                        by 3000 mm. The maximum thicknesses for various materials are as under
                    </p>

                </div>
                <div class="col-lg-7 bt-bottom-info" data-aos="fade-left">
                    <img src="images/banner1.jpg" class="img-fluid" alt=" ">


                </div>
            </div>
            <div class="row table-container">
              <div class="col-10 table-container-inner">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Material Grade</th>
                      <th>Maximum Sheet Thickness</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Mild Steel</td>
                      <td>12 mm</td>
                    </tr>
                    <tr>
                      <td>Stainless Steel</td>
                      <td>06 mm</td>
                    </tr>
                    <tr>
                      <td>Aluminium</td>
                      <td>04 mm</td>
                    </tr>
                    <tr>
                      <td>Copper</td>
                      <td>03 mm</td>
                    </tr>
                    <tr>
                      <td>Brass</td>
                      <td>03 mm</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            </section>
        </div>
    </section>
    <!---->
    <!--footer-->
    <?php include_once("footer.php");
    ?>
</body>

</html>
