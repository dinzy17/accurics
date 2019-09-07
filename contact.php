<?php error_reporting(0); ?>
<!DOCTYPE html>
<html>

<head>
  <title>Accurics Laser cutting | Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <meta name="keywords" content="cnc lasercutting services, lasercutting services, laser cutting, lasercutting jobwork in pune,lasercut in pune,lasercut box cutting, lasercut panel, laser cut acylic,lasercut aluminium, laser cut artwork, a laser cutting service, laser cutting service, trumpf laser cutting machine in pune" />

    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/contact.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=M+PLUS+Rounded+1c:100,300,400,500,700,800" rel="stylesheet">
</head>

<body>
    <?php
      use PHPMailer\PHPMailer\PHPMailer;
      use PHPMailer\PHPMailer\Exception;

      require 'vendor/phpmailer/phpmailer/src/Exception.php';
      require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
      require 'vendor/phpmailer/phpmailer/src/SMTP.php';
      include_once("header.php")
    ?>
    <!--//header-->
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
          }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <div class="banner-inner">
    </div>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">Contact Us</li>
    </ol>
    <!--//banner-->
    <!--/Contact-->
    <section class="services">
        <div class="container">
            <h3 class="tittle">Contact Us</h3>

            <div class="row inner-sec-wthree">
                <div class="contact-map">

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d945.2378962826194!2d73.83486182916887!3d18.62124727010762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTjCsDM3JzE2LjUiTiA3M8KwNTAnMDcuNSJF!5e0!3m2!1sen!2sin!4v1563726350070!5m2!1sen!2sin" class="map" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="address row">
                    <div class="col-md-4 address-grid-inf-w3layouts" data-aos="zoom-out">
                        <div class="address-info">
                            <div class="address-left">
                                <span class="fas fa-phone-volume" aria-hidden="true"></span>
                            </div>
                            <div class="address-right">
                                <h6>Phone Number</h6>
                                <p>+91 9922910563<br>+91 9881298216</p>

                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 address-grid-inf-w3layouts" data-aos="zoom-out">
                        <div class="address-info">
                            <div class="address-left">
                                <span class="far fa-envelope" aria-hidden="true"></span>
                            </div>
                            <div class="address-right">
                                <h6>Email Address</h6>
                                <p>Email :
                                    <a href="mailto:accuricslaser@gmail.com"> accuricslaser@gmail.com</a>
                                </p>
                            </div>
                          </div>

                    </div>
                    <div class="col-md-4 address-grid-inf-w3layouts" data-aos="zoom-out">
                        <div class="address-info">
                            <div class="address-left">
                                <span class="fas fa-map-marker-alt" aria-hidden="true"></span>
                            </div>
                            <div class="address-right">
                                <h6>Location</h6>
                                <p>Bhosari, Pune

                                </p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="contact_grid_right">
                  <?php
                    if(isset($_POST['Name']) && isset($_POST['Email'])) {
                      // Load Composer's autoloader
                      require 'vendor/autoload.php';

                      // Instantiation and passing `true` enables exceptions
                      $mail = new PHPMailer(true);

                      try {
                          //Server settings
                          $mail->SMTPDebug = 0;                                       // Enable verbose debug output
                          $mail->isSMTP();                                            // Set mailer to use SMTP
                          $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                          $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                          $mail->Username   = 'accuricslaser@gmail.com';                     // SMTP username
                          $mail->Password   = 'Accurics2444';                               // SMTP password
                          $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
                          $mail->Port       = 587;                                    // TCP port to connect to

                          //Recipients
                          $mail->setFrom('accuricslaser@gmail.com', 'Accurics Website');
                          $mail->addAddress('accuricslaser@gmail.com');

                          // Content
                          $mail->isHTML(true);                                  // Set email format to HTML
                          $mail->Subject = 'New enquiry from '.$_POST['Name'];
                          $mail->Body    = '<p>New user tried to contact us. Please connect using following details: </p><br>
                                            <p><b>Name: </b> '.$_POST['Name'].'</p>
                                            <p><b>Email: </b> '.$_POST['Email'].'</p>
                                            <p><b>Contact Number: </b> '.$_POST['Number'].'</p>
                                            <p><b>Message: </b> '.$_POST['Message'].'';

                          $mail->send();
                      } catch (Exception $e) {
                          // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                      }
                    ?>
                    <div class="alert alert-success" id="alertDiv">
                      Thank you for contacting us. Our support will contact you soon.
                    </div>
                  <?php
                    } else {
                  ?>
                  <h6>Please fill this form to contact with us.</h6>
                  <form action="#" method="post">
                      <div class="contact_left_grid">
                          <input type="text" name="Name" placeholder="Name" required="">
                          <input type="email" name="Email" placeholder="Email" required="">
                          <input type="number" name="Number" placeholder="Contact Number" required="">
                          <textarea name="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
                          <input type="submit" value="Submit">
                          <input type="reset" value="Clear">
                          <div class="clearfix"> </div>
                      </div>
                  </form>
                  <?php
                    }
                   ?>

                </div>
            </div>
        </div>
    </section>

    <!--//Contact-->
    <!--footer-->
    <?php include_once("footer.php");
      if(isset($_POST['Name'])) {
    ?>
    <script>
    window.scrollTo(0,document.body.scrollHeight);
    $('html,body').animate({
        scrollTop: $("#alertDiv").offset().top - 100
    }, 2000, 'swing');
    </script>
    <?php
      }
    ?>
</body>

</html>
