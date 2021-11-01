<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Estudia Conmigo</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/logo.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Menu-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href=""><img src="" alt="" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#letras">Letras</a></li>
                        <li class="nav-item"><a class="nav-link" href="#Numeros">N&uacute;meros</a></li>
                        <li class="nav-item"><a class="nav-link" href="#Cuentos">Cuentos</a></li>
                        <li class="nav-item"><a class="nav-link" href="#equipo">Equipo</a></li>
                        <li class="nav-item"><a class="nav-link" href="login.html">Config</a></li>

                    </ul>
                    
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">¡Bienvenido!</div>
                <div class="masthead-heading text-uppercase">Estudia Conmigo</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#letras">Continuemos</a>
            </div>
        </header>
      
     

        <!-- Letras-->

        <?php 
        require("video.php");

  $sqlVideo   = ("SELECT * FROM video ORDER BY id DESC LIMIT 1");
  $queryVideo = mysqli_query($conn, $sqlVideo);
  $totalVideo = mysqli_num_rows($queryVideo);
  $DataVideo  = mysqli_fetch_array($queryVideo);
?>
        <section class="page-section" id="letras">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Vocales</h2>
                    
                </div>
                <div class="row text-center">
                    <div class="">
                        <img class="img-fluid" src="assets/img/vocales.jpg" alt="" />
                    </div>
                    <br />

                    <div class="row text-center">
                        <?php 
                            if( $totalVideo >0){ ?>
                            <h2><?php echo $DataVideo['titulo']; ?></h2>

                            <div class="video-responsive">
                                <iframe width="560" height="315" src="<?php echo $DataVideo['url']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                          
                            </div>
                        <?php }else{ ?>
                            <h2>No hay Video</h2>
                        <?php } ?>
                    </div>                   
              
                    <div class=" text-center">
                        <h2>Aprendamos m&aacute;s</h2>
                        <img class="img-fluid" src="assets/img/3.jpeg" alt="" />
                    </div>

                    <div class="row text-center">
                        <h2>La Cancion de las Vocales</h2>
                        <br />
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/DDg0cHSR1wY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                    </div>

                    <div class="row text-center">
                        <h2>Vocales con el Perro Chocolo</h2>
                        <br />
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/etLrs8qrNNo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                    </div>



                </div>
                
                </div>
            </div>
        </section>
        <!-- Numeros-->
        <section class="page-section bg-light" id="Numeros">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">N&uacute;meros</h2>
                    <h3 class="section-subheading text-muted">Contemos</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Numeros item 1-->
                        <div class="Numeros-item">
                            <a class="Numeros-link" data-bs-toggle="modal" href="#NumerosModal1">
                                <div class="Numeros-hover">
                                    <div class="Numeros-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/1.jpg" alt="..." />
                            </a>
                            <div class="Numeros-caption">
                                <div class="Numeros-caption-heading">El Robot</div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Numeros item 2-->
                        <div class="Numeros-item">
                            <a class="Numeros-link" data-bs-toggle="modal" href="#NumerosModal2">
                                <div class="Numeros-hover">
                                    <div class="Numeros-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/2.jpg" alt="..." />
                            </a>
                            <div class="Numeros-caption">
                                <div class="Numeros-caption-heading">La Granja</div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Numeros item 3-->
                        <div class="Numeros-item">
                            <a class="Numeros-link" data-bs-toggle="modal" href="#NumerosModal3">
                                <div class="Numeros-hover">
                                    <div class="Numeros-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/3.jpg" alt="..." />
                            </a>
                            <div class="Numeros-caption">
                                <div class="Numeros-caption-heading">Zool&oacute;gico</div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Numeros item 4-->
                        <div class="Numeros-item">
                            <a class="Numeros-link" data-bs-toggle="modal" href="#NumerosModal4">
                                <div class="Numeros-hover">
                                    <div class="Numeros-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/4.jpg" alt="..." />
                            </a>
                            <div class="Numeros-caption">
                                <div class="Numeros-caption-heading">La Feria</div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Numeros item 5-->
                        <div class="Numeros-item">
                            <a class="Numeros-link" data-bs-toggle="modal" href="#NumerosModal5">
                                <div class="Numeros-hover">
                                    <div class="Numeros-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/5.jpg" alt="..." />
                            </a>
                            <div class="Numeros-caption">
                                <div class="Numeros-caption-heading">Secuencia de N&uacute;meros</div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Numeros item 6-->
                        <div class="Numeros-item">
                            <a class="Numeros-link" data-bs-toggle="modal" href="#NumerosModal6">
                                <div class="Numeros-hover">
                                    <div class="Numeros-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/6.jpg" alt="..." />
                            </a>
                            <div class="Numeros-caption">
                                <div class="Numeros-caption-heading">Hasta 20</div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Cuentos-->
        <section class="page-section" id="Cuentos">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Cuentos</h2>
                    
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="..." /></div>
                        <br />
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Hansel y Gretel</h4>                               
                            </div>
                            <br />
                            <div class="timeline-body"><iframe width="560" height="315" src="https://www.youtube.com/embed/UQscsCBnk-g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg" alt="..." /></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Los tres Cerditos</h4>
                                
                                </div>
                                <div class="timeline-body"><iframe width="560" height="315" src="https://www.youtube.com/embed/3I6yh2r_9EU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                            </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>La liebre y la tortuga</h4>
                                
                            </div>
                            <div class="timeline-body"><iframe width="560" height="315" src="https://www.youtube.com/embed/js1lKmt-Mag" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>La Caperucita Roja</h4>                               
                            </div>
                            <div class="timeline-body"><iframe width="560" height="315" src="https://www.youtube.com/embed/ZKWX9qAS-Bg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/5.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Blanca nieves y los 7 enanitos</h4>
                                
                            </div>
                            <div class="timeline-body"><iframe width="560" height="315" src="https://www.youtube.com/embed/LIaJWBp5feo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Equipo-->
        <section class="page-section bg-light" id="equipo">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Equipo de Trabajo</h2>
                    <h3 class="section-subheading text-muted">Integrantes</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        
                    </div>
                    <div class="col-lg-4">
                        <div class="equipo-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/2.jpg" alt="..." />
                            <h4>Alvaro Antonio Troncoso Cabello</h4>
                            <p class="text-muted">Estudiante de la Universidad Aut&oacute;noma de Chile.</p>                           
                        </div>
                    </div>
                    <div class="col-lg-4">                      
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Troncoso.alvaro.c&#64;gmail.com</p></div>
                </div>
            </div>
        </section>
        
        
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2021</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="Numeros-modal modal fade" id="NumerosModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">El robot</h2>
                                    <p class="item-intro text-muted">Contruyamos 1</p>
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/5XtADH0EooU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <br />
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Cerrar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="Numeros-modal modal fade" id="NumerosModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">La Granja</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/kegJnbcBEgM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <br />
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Cerrar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="Numeros-modal modal fade" id="NumerosModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Zool&oacute;gico</h2>
                                    <p class="item-intro text-muted">A Contar</p>
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/DxQIjXQU0LQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <br />
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Cerrar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <div class="Numeros-modal modal fade" id="NumerosModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">La Feria</h2>
                                    <p class="item-intro text-muted">Pensemos</p>
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/TOw8ZXTcgAY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <br />
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Cerrar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 5 modal popup-->
        <div class="Numeros-modal modal fade" id="NumerosModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Secuencia</h2>
                                    <p class="item-intro text-muted">N&uacute;meros</p>
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/q1aqWMablqg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <br />
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Cerrar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 6 modal popup-->
        <div class="Numeros-modal modal fade" id="NumerosModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Cuenta hasta 20 </h2>
                                    <p class="item-intro text-muted">El Perro Chocolo</p>
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/9xhu6cMhq-Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <br />
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Cerrar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
