
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
        <li class="breadcrumb-item active">CNC Bending</li>
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
                    <h5>CNC Bending</h5>
                    <p class="mt-3">
                        In addition to the Fiber Laser cutting machine, Accurics Laser  has latest CNC Bending Machine with high level of precision and accuracy.
                        Capacity of CNC Bending Machine is 160 ton. The maximum thicknesses for various size metal sheet that can be bend are:
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
                      <th>Size(Meters)</th>
                      <th>Maximum Sheet Thickness</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>3.2</td>
                      <td>06 mm</td>
                    </tr>
                    <tr>
                      <td>1.5</td>
                      <td>08 mm</td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>10 mm</td>
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
