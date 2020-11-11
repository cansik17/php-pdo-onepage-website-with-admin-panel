

<?php

require_once 'configs/config.php';

if ($settingsQuery['durum']==0) {
    header("Location:bakimda.php");
} else {
    






?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>NewBiz Bootstrap Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="assets/https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <!-- Main Stylesheet File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
    Theme Name: NewBiz
    Theme URL: https://bootstrapmade.com/newbiz-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

    <!--==========================
  Header
  ============================-->
    <header id="header" class="fixed-top">
        <div class="container">

            <div class="logo float-left">
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
                <a href="#intro" class="scrollto"><img src="<?php echo $settingsQuery['sitelogo']; ?>" alt="" class="img-fluid"></a>
            </div>

            <nav class="main-nav float-right d-none d-lg-block">
                <ul>
                    <li class="active"><a href="#intro">Anasayfa</a></li>
                    <li><a href="#about">Biz Kimiz</a></li>
                    <li><a href="#services">Neler Yaparız</a></li>
                    <li><a href="#portfolio">Referanslarımız</a></li>
                    <li><a href="#contact">Bize Ulaşın</a></li>
                </ul>
            </nav><!-- .main-nav -->

        </div>
    </header><!-- #header -->

    <!--==========================
    Intro Section
  ============================-->
    <section id="intro" class="clearfix">
        <div class="container">

            <div class="intro-img">
                <img src="<?php echo $introQuery['image']; ?>" alt="" class="img-fluid">
            </div>

            <div class="intro-info">
                <h2><?php echo $introQuery['text']; ?> </h2>
                <div>
                    <a href="#about" class="btn-get-started scrollto">Hakkımızda</a>
                    <a href="#services" class="btn-services scrollto">Hizmetlerimiz</a>
                </div>
            </div>

        </div>
    </section><!-- #intro -->

    <main id="main">

        <!--==========================
      About Us Section
    ============================-->
        <section id="about">
            <div class="container">

                <header class="section-header">
                    <h3>Hakkımızda <?php echo session_status(); ?></h3>
                    <p><?php echo $aboutQuery['SmallText']; ?></p>
                </header>

                <div class="row about-container">

                    <div class="col-lg-6 content order-lg-1 order-2">
                        <p>
                            <?php echo $aboutQuery['text']; ?>
                        </p>

                        <div class="icon-box wow fadeInUp">
                            <div class="icon"><i class="fa fa-shopping-bag"></i></div>
                            <h4 class="title"><a href=""><?php echo $aboutQuery['header1']; ?></a></h4>
                            <p class="description"><?php echo $aboutQuery['text1']; ?></p>
                        </div>

                        <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon"><i class="fa fa-photo"></i></div>
                            <h4 class="title"><a href=""><?php echo $aboutQuery['header2']; ?></a></h4>
                            <p class="description"><?php echo $aboutQuery['text2']; ?></p>
                        </div>

                        <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon"><i class="fa fa-bar-chart"></i></div>
                            <h4 class="title"><a href=""><?php echo $aboutQuery['header3']; ?></a></h4>
                            <p class="description"><?php echo $aboutQuery['text3']; ?></p>
                        </div>

                    </div>

                    <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
                        <img src="<?php echo $aboutQuery['image']; ?>" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section><!-- #about -->

        <!--==========================
      Services Section
    ============================-->
        <section id="services" class="section-bg">
            <div class="container">

                <header class="section-header">
                    <h3>Hizmetlerimiz</h3>
                    <p><?php echo $servicesQuery['SmallText']; ?></p>
                </header>

                <div class="row">

                    <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="icon"><i class="ion-ios-analytics-outline" style="color: #ff689b;"></i></div>
                            <h4 class="title"><a href="#contact"><?php echo $servicesQuery['header1']; ?></a></h4>
                            <p class="description"><?php echo $servicesQuery['text1']; ?></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="icon"><i class="ion-ios-bookmarks-outline" style="color: #e9bf06;"></i></div>
                            <h4 class="title"><a href="#contact"><?php echo $servicesQuery['header2']; ?></a></h4>
                            <p class="description"><?php echo $servicesQuery['text2']; ?></p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="icon"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>
                            <h4 class="title"><a href="#contact"><?php echo $servicesQuery['header3']; ?></a></h4>
                            <p class="description"><?php echo $servicesQuery['text3']; ?></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="icon"><i class="ion-ios-speedometer-outline" style="color:#41cf2e;"></i></div>
                            <h4 class="title"><a href="#contact"><?php echo $servicesQuery['header4']; ?></a></h4>
                            <p class="description"><?php echo $servicesQuery['text4']; ?></p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="icon"><i class="ion-ios-world-outline" style="color: #d6ff22;"></i></div>
                            <h4 class="title"><a href="#contact"><?php echo $servicesQuery['header5']; ?></a></h4>
                            <p class="description"><?php echo $servicesQuery['text5']; ?></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="icon"><i class="ion-ios-clock-outline" style="color: #4680ff;"></i></div>
                            <h4 class="title"><a href="#contact"><?php echo $servicesQuery['header6']; ?></a></h4>
                            <p class="description"><?php echo $servicesQuery['text6']; ?></p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- #services -->

        <!--==========================
      Portfolio Section
    ============================-->
        <section id="portfolio" class="clearfix">
            <div class="container">

                <header class="section-header">
                    <h3 class="section-title">Referanslarımız</h3>
                </header>

                <div class="row">
                    <div class="col-lg-12">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-web">Web</li>
                            <li data-filter=".filter-eticaret">E-ticaret</li>
                            <li data-filter=".filter-mobile">Mobil</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container">
                    <?php foreach ($projectsQuery as $row) {
                        # code...
                    ?>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-<?php echo $row['filter']; ?>">
                            <div class="portfolio-wrap">
                                <img src="<?php echo $row['image']; ?>" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4><a target="_blank" href="<?php echo $row['link']; ?>"><?php echo $row['title']; ?></a></h4>
                                    <p><?php echo $row['text']; ?></p>
                                    <div>
                                        <a href=" <?php echo $row['image']; ?>" data-lightbox="portfolio" data-title="<?php echo $row['title']; ?>" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                                        <a href="<?php echo $row['link']; ?> " target="_blank" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                </div>

            </div>
        </section><!-- #portfolio -->

        <!--==========================

        <!--==========================
      Clients Section
    ============================-->
        <section id="clients" class="section-bg">

            <div class="container">

                <div class="section-header">
                    <h3>Hizmet Verdiklerimiz</h3>
                    <p>Her ölçekten firmalara hizmetler vermekteyiz.</p>
                </div>

                <div class="row no-gutters clients-wrap clearfix wow fadeInUp">
                    <?php foreach ($clientsQuery as $row) {
                        # code...
                    ?>
                        <div class="col-lg-3 col-md-4 col-xs-6">
                            <div class="client-logo">
                                <img src="<?php echo $row['image']; ?>" class="img-fluid" alt="<?php echo $row['alt']; ?>">
                            </div>
                        </div>

                    <?php } ?>

                </div>

            </div>

        </section>

        <!--==========================
      Contact Section
    ============================-->
        <section id="contact">
            <div class="container-fluid">

                <div class="section-header">
                    <h3>Bize Ulaşın</h3>
                </div>

                <div class="row wow fadeInUp">

                    <div class="col-lg-6">
                        <div class="map mb-4 mb-lg-0">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d894.7600821862226!2d28.861619367893194!3d41.033958612980314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e2!4m0!4m5!1s0x14cabad2f1c7ea41%3A0x6d7a80dcd38cd390!2zTU9EQSBDTFVCIEfEsFnEsE0gTUFHQVpBU0ksIMOHxLFuYXIsIElzdGFuYnVsIENkIE5vOjQ3IEQ6Tm86NDUsIDM0MjAwIEJhxJ9jxLFsYXIvxLBzdGFuYnVs!3m2!1d41.0339446!2d28.8619532!5e0!3m2!1str!2str!4v1597586194800!5m2!1str!2str" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-md-5 info">
                                <i class="ion-ios-location-outline"></i>
                                <p><?php echo $settingsQuery['address']; ?></p>
                            </div>
                            <div class="col-md-4 info">
                                <i class="ion-ios-email-outline"></i>
                                <p><?php echo $settingsQuery['mail']; ?></p>
                            </div>
                            <div class="col-md-3 info">
                                <i class="ion-ios-telephone-outline"></i>
                                <p><?php echo $settingsQuery['phone']; ?></p>
                            </div>
                        </div>

                        <div class="form">
                            <?php
                            if (isset($_GET['durum'])) {
                                if ($_GET['durum'] == 'ok') { ?>

                                    <script>
                                        Swal.fire(
                                            'Tebrikler!',
                                            'Mesajınız Alınmıştır. Teşekkür Ederiz...',
                                            'success'
                                        )
                                    </script>

                                <?php } elseif ($_GET['durum'] == 'no') { ?>

                                    <script>
                                        Swal.fire(
                                            'Ooops!',
                                            'Bir hata oluştu...',
                                            'error'
                                        )
                                    </script>
                            <?php }
                            } ?>
                            <div id="sendmessage">Your message has been sent. Thank you!</div>
                            <div id="errormessage"></div>
                            <form action="configs/mail.php" method="post" role="form">
                                <div class="form-row">
                                    <div class="form-group col-lg-6">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="İsminiz" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                        <div class="validation"></div>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <input type="email" class="form-control" name="mail" id="email" placeholder="Email Adresiniz" data-rule="email" data-msg="Please enter a valid email" />
                                        <div class="validation"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="title" id="subject" placeholder="Başlık" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="text" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Mesaj"></textarea>
                                    <div class="validation"></div>
                                </div>
                                <div class="text-center"><button type="submit" name="messages" title="Send Message">Mesajı Gönder</button></div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- #contact -->

    </main>

    <!--==========================
    Footer
  ============================-->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-5 col-md-6 footer-info">
                        <h3><?php echo $settingsQuery['sitename']; ?></h3>
                        <p><?php echo $aboutQuery['text']; ?></p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><a href="#intro">Anasayfa</a></li>
                            <li><a href="#about">Hakkımızda</a></li>
                            <li><a href="#services">Hizmetlerimiz</a></li>
                            <li><a href="#contact">Bize Ulaşın</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-contact">
                        <h4>Bize Ulaşın</h4>
                        <p>
                            <?php echo $settingsQuery['address']; ?> <br><br>
                            <strong>Phone:</strong> <?php echo $settingsQuery['phone']; ?><br>
                            <strong>Email:</strong> <?php echo $settingsQuery['mail']; ?><br>
                        </p>

                        <div class="social-links">
                            <a href="<?php echo $settingsQuery['twitter']; ?>" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="<?php echo $settingsQuery['facebook']; ?>" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="<?php echo $settingsQuery['instagram']; ?>" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><?php echo $settingsQuery['sitename']; ?></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=NewBiz
        -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- #footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <!-- Uncomment below i you want to use a preloader -->
    <!-- <div id="preloader"></div> -->


    <!-- JavaScript Libraries -->
    <script src="assets/lib/jquery/jquery.min.js"></script>
    <script src="assets/lib/jquery/jquery-migrate.min.js"></script>
    <script src="assets/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/lib/easing/easing.min.js"></script>
    <script src="assets/lib/mobile-nav/mobile-nav.js"></script>
    <script src="assets/lib/wow/wow.min.js"></script>
    <script src="assets/lib/waypoints/waypoints.min.js"></script>
    <script src="assets/lib/counterup/counterup.min.js"></script>
    <script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="assets/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="assets/lib/lightbox/js/lightbox.min.js"></script>
    <!-- Contact Form JavaScript File -->
    <script src="assets/contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="assets/js/main.js"></script>
</body>

</html>

<?php
$db = null;
}
?>