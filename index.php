<?php include('./include/db.php'); 
$query = "SELECT * FROM basic_setup,personal_setup,aboutus_setup";
$runquery = mysqli_query($db,$query);
$data = mysqli_fetch_array($runquery);

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?=$data['title']?></title>
    <meta content="<?=$data['description']?>" name="description">
    <meta content="<?=$data['keyword']?>" name="keywords">

    <link href="assets/img/<?=$data['icon']?>" rel="icon">
    <link href="assets/img/<?=$data['icon']?>" rel="apple-touch-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: iPortfolio - v1.2.1
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

</head>

<body>
  
    <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    <header id="header">
        <div class="d-flex flex-column">

            <div class="profile">
                <img src="assets/img/<?=$data['profilepic']?>" alt="" class="img-fluid rounded-circle">
                <h1 class="text-light"><a href="#"><?=$data['name']?></a></h1>
                <div class="social-links mt-3 text-center">
                    <?php    
      if($data['linkedin']!=""){
            ?>
                    <a href="<?=$data['linkedin']?> " target="blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    <?php
        }
      if($data['github']!=""){
            ?>
                    <a href="<?=$data['github']?>" target="blank" class="github"><i class="bx bxl-github"></i></a>
                    <?php
        } 
        ?>
                </div>
            </div>

            <nav class="nav-menu">
                <ul>
                    <li class=""><a href="#about"><i class="bx bx-home"></i> <span>Inicio</span></a></li>
                    <li><a href="#resume"><i class="bx bx-file-blank"></i> <span>Currículum</span></a></li>
                    <li><a href="#portfolio"><i class="bx bx-book-content"></i> Portafolio</a></li>
                    <li><a href="#contact"><i class="bx bx-envelope"></i> Contacto</a></li>
                    <li class=""><a href="admin/login/index.php" target="_blank"><i class="bx bx-user"></i> <span>Panel del Administrador</span></a></li>

                </ul>
            </nav>
            <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

        </div>
    </header>

    <main id="main">

        <section id="about" class="about">
            <div class="container">

                <div class="section-title">
                    <h2><?=$data['name']?></h2>
                    <p><?=$data['shortdesc']?></p>
                </div>

                <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                        <img src="assets/img/<?=$data['profilepic']?>" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                        <h3><?=$data['heading']?></h3>
                        <p class="font-italic">
                            <?=$data['subheading']?>
                        </p>
                        <div>
                            <ul class="row">
                                <li class="col-lg-6"><i class="icofont-rounded-right"></i> <strong>Fecha de nacimiento:</strong> <?=$data['dob']?></li>
                                <li class="col-lg-6"><i class="icofont-rounded-right"></i> <strong>Correo:</strong> <?=$data['emailid']?></li>
                                <li class="col-lg-5"><i class="icofont-rounded-right"></i> <strong>Teléfono móvil:</strong> <?=$data['mobile']?></li>
                               
                                
                                


                            </ul>
                        </div>
                        <p>
                            <?=$data['longdesc']?>
                        </p>
                    </div>
                </div>

            </div>
        </section>


        <section id="skills" class="skills section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Competencias</h2>
                </div>

                <div class="row skills-content">

                    <div class="row col-lg-12" data-aos="fade-up">
<?php
                    $query3 = "SELECT * FROM skills";
$runquery3= mysqli_query($db,$query3);
while($data3=mysqli_fetch_array($runquery3)){
    ?>
                        <div class="progress col-lg-6">
                            <span class="skill"><?=$data3['skill']?> <i class="val"><?=$data3['score']?>%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="<?=$data3['score']?>" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                                <?php
}
                    ?>
                        

                        
                    </div>

                </div>

            </div>
        </section>

        <section id="resume" class="resume">
            <div class="container">

                <div class="section-title">
                    <h2>Currículum</h2>
                </div>

                <div class="row">
                    <div class="col-lg-6" data-aos="fade-up">
                        <h3 class="resume-title">Educación</h3>
                        <?php
                    $query4 = "SELECT * FROM resume WHERE category='e'";
$runquery4= mysqli_query($db,$query4);
while($data4=mysqli_fetch_array($runquery4)){
    ?>
                    <div class="resume-item">
                            <h4><?=$data4['title']?></h4>
                            <h5><?=$data4['year']?></h5>
                            <p><em><?=$data4['ogname']?></em></p>
                            <p><?=$data4['workdesc']?></p>
                        </div>
                                <?php
}
                    ?>
                        
                        
                        
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="resume-title">Experiencia Laboral</h3>
                        
                        <?php
                    $query4 = "SELECT * FROM resume WHERE category='pe'";
$runquery4= mysqli_query($db,$query4);
while($data4=mysqli_fetch_array($runquery4)){
    ?>
                    <div class="resume-item">
                            <h4><?=$data4['title']?></h4>
                            <h5><?=$data4['year']?></h5>
                            <p><em><?=$data4['ogname']?></em></p>
                            <p><?=$data4['workdesc']?></p>
                        </div>
                                <?php
}
                    ?>
                    </div>
                </div>

            </div>
        </section>

        <section id="portfolio" class="portfolio section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Listado de Proyectos</h2>
                </div>


                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

                   <?php
                    $query5 = "SELECT * FROM portfolio";
$runquery5= mysqli_query($db,$query5);
while($data5=mysqli_fetch_array($runquery5)){
    ?>
                  <div class="col-lg-4 col-md-6 portfolio-item">
                        <div class="portfolio-wrap">
                            <img src="assets/img/<?=$data5['projectpic']?>" class="img-fluid" alt="">
                            <div class="portfolio-links" title="<?=$data5['projectname']?>">
                                
                                <a href="assets/img/<?=$data5['projectpic']?>" data-gall="portfolioGallery" class="venobox" title="<?=$data5['projectname']?>"><i class="bx bx-plus"></i></a>
                                <a href="<?=$data5['projectlink']?>" target="_blank" title="Visit <?=$data5['projectname']?>"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                                <?php
}
                    ?>
                    

                    
                       

                </div>

            </div>
        </section>

        
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>Contacto</h2>
                </div>

                <div class="row" data-aos="fade-in">

                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                            <div class="email">
                                <i class="icofont-envelope"></i>
                                <h4>Correo eléctronico:</h4>
                                <p><a href="mailto:<?=$data['emailid']?>"><?=$data['emailid']?></a></p>
                            </div>

                            <div class="phone">
                                <i class="icofont-phone"></i>
                                <h4>Número de teléfono:</h4>
                                <p><?=$data['mobile']?></p>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <form action="include/message.php" method="post" role="form" class="php-email-form">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">Nombre</label>
                                    <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validate"></div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Correo eléctronico</label>
                                    <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name">Asunto</label>
                                <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <label for="name">Mensaje</label>
                                <textarea class="form-control" name="message" id="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="mb-3">
                                <div class="loading">Cargando</div>
                                <div class="bg-success error-message"></div>
                                <div class="sent-message"></div>
                            </div>
                            <div class="text-center"><button type="submit">Enviar Mensaje</button></div>
                        </form>
                    </div>


                </div>

            </div>
        </section>

    </main>

    <footer id="footer">
        <div class="container">
            <div class="credits">
            Desarrollado por <a href="https://github.com/SAmuelX100" target="_blank"> Carlos Saint Hilaire </a>
            </div>
        </div>
    </footer>

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/typed.js/typed.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <script src="assets/js/main.js"></script>

    <script>
        if (window.self == window.top) {
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o), m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '../../../../www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-55234356-4', 'auto');
            ga('send', 'pageview');
        }

    </script>
</body>

</html>