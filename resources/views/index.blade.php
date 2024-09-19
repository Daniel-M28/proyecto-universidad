
@extends('layouts.app')
@section('content')

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif


<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="Tooplate">

        <title>Waso Strategy - Bootstrap 5 HTML Template</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

        <link href="../resources/css/bootstrap.min.css" rel="stylesheet">

        <link href="../resources/css/bootstrap-icons.css" rel="stylesheet">

        <link href="../resources/css/magnific-popup.css" rel="stylesheet">

        <link href="../resources/css/tooplate-waso-strategy.css" rel="stylesheet">
        
<!--

Tooplate 2130 Waso Strategy

https://www.tooplate.com/view/2130-waso-strategy

Free Bootstrap 5 HTML Template

-->   

    </head>
 
    <body id="section_1">


        <main>

            <section class="hero">
                <div class="container-fluid h-100">
                    <div class="row h-100">

                        <div id="carouselExampleCaptions" class="carousel carousel-fade hero-carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="container position-relative h-100">
                                        <div class="carousel-caption d-flex flex-column justify-content-center">
                                            <small class="small-title"> tu futuro comienza hoy </small>

                                            <h1>Impulsa <span class="text-warning"> tu carrera</span>  con el mejor aprendizaje</h1> 

                                            <div class="d-flex align-items-center mt-4">
                                                <a class="custom-btn btn custom-link" href="#section_2">Mira como</a>

                                                <a class="popup-youtube custom-icon d-flex ms-4" href="https://www.youtube.com/watch?v=AYaHuZ4BB6Y">
                                                    <i class="bi-play play-icon d-flex m-auto text-white"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-image-wrap">
                                        <img src="../resources/../resources/images/slide/christina-wocintechchat-com-NDoVgcS_lZM-unsplash.jpg" class="img-fluid carousel-image" alt="">
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="container position-relative h-100">
                                        <div class="carousel-caption d-flex flex-column justify-content-center">
                                            <small class="small-title">Aprende y crece</small>

                                            <h1>Construye tu futuro <span class="text-warning">con conocimiento y pasión</span></h1>

                                            <div class="d-flex align-items-center mt-4">
                                                <a class="custom-btn btn custom-link" href="#section_2">Mira como</a>

                                                <a class="popup-youtube custom-icon d-flex ms-4" href="https://www.youtube.com/watch?v=VStvZjykQ00">
                                                    <i class="bi-play play-icon d-flex m-auto text-white"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="carousel-image-wrap">
                                        <img src="../resources/images/slide/jason-goodman-0K7GgiA8lVE-unsplash.jpg" class="img-fluid carousel-image" alt="">
                                    </div>
                                </div>

                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>

                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="about section-padding" id="section_2">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                            <div class="about-image-wrap h-100">
                                <img src="../resources/images/peter-jones-WZROBIlY8Rg-unsplash.jpg" class="img-fluid about-image" alt="">

                                <div class="about-image-info">
                                    <h4 class="text-white">William Smith, CEO</h4>

                                    <p class="text-white mb-0">You can freely use Waso Strategy for your website project. Thank you for visiting Tooplate.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12 d-flex flex-column">
                            <div class="about-thumb bg-white shadow-lg">
                                
                                <div class="about-info">
                                    <small class="small-title">About <strong class="text-warning">02/05</strong></small>

                                    <h2 class="mb-3">Consulting Agency</h2>

                                    <h5 class="mb-3">Helping small businesses since 2001</h5>

                                    <p>Waso Strategy is a Bootstrap 5 HTML template for your business. You may use this template for any purpose. You may not redistribute the template ZIP file on any other website.</p>

                                    <p>You may support a little PayPal donation to Tooplate by visiting our <a href="https://www.tooplate.com/contact">contact page</a>. Thank you.</p>
                                </div>
                            </div>

                            <div class="row h-100">
                                <div class="col-lg-6 col-6">
                                    <div class="about-thumb d-flex flex-column justify-content-center bg-danger mb-lg-0 h-100">
                                        
                                        <div class="about-info">
                                            <h5 class="text-white mb-4">We're growing business dolor</h5>

                                            <a class="custom-btn btn custom-bg-primary" href="#section_3">Join us</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-6">
                                    <div class="about-thumb d-flex flex-column justify-content-center bg-warning mb-lg-0 h-100">
                                        
                                        <div class="about-info">
                                            <h5 class="text-white mb-4">How did you about us?</h5>

                                            <p class="text-white mb-0">Lorem ipsum dolor sit consectetur</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="services section-padding" id="section_3">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-10 col-12 text-center mx-auto mb-5">
                            <small class="small-title">Services <strong class="text-warning">03/05</strong></small>

                            <h2>How can we help you?</h2>

                        </div>

                        <div class="col-lg-6 col-12">
                            <nav>
                                <div class="nav nav-tabs flex-column align-items-baseline" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-business-tab" data-bs-toggle="tab" data-bs-target="#nav-business" type="button" role="tab" aria-controls="nav-business" aria-selected="true">
                                        <h3>Business Consulting</h3>

                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut dolore</span>
                                    </button>

                                    <button class="nav-link" id="nav-strategy-tab" data-bs-toggle="tab" data-bs-target="#nav-strategy" type="button" role="tab" aria-controls="nav-strategy" aria-selected="false">
                                        <h3>Strategy Planning</h3>
                                        
                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut dolore</span>
                                    </button>

                                    <button class="nav-link" id="nav-video-tab" data-bs-toggle="tab" data-bs-target="#nav-video" type="button" role="tab" aria-controls="nav-video" aria-selected="false">
                                        <h3>Video Content</h3>
                                        
                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut dolore</span>
                                    </button>
                                </div>
                            </nav>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-business" role="tabpanel" aria-labelledby="nav-intro-tab">
                                    <img src="../resources/images/services/young-entrepreneurs-mature-investor-watching-presentation-discussing-project.jpg" class="img-fluid" alt="">

                                    <h5 class="mt-4 mb-2">Introduction to Business Consulting</h5>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut dolore</p>

                                    <ul>
                                        <li>Helping small businesses</li>

                                        <li>Lorem ipsum dolor sit amet</li>

                                        <li>Business Strategy and Management</li>
                                    </ul>
                                </div>

                                <div class="tab-pane fade show" id="nav-strategy" role="tabpanel" aria-labelledby="nav-strategy-tab">
                                    <img src="../resources/images/services/startup-leader-drawing-flowchart-board-discussing-project.jpg" class="img-fluid" alt="">

                                    <h5 class="mt-4 mb-2">Strategy Planning</h5>

                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor dolore</p>
                                        </div>

                                        <div class="col-lg-6 col-12">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor dolore</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade show" id="nav-video" role="tabpanel" aria-labelledby="nav-video-tab">
                                    <img src="../resources/images/services/portrait-smiling-african-american-young-woman-holding-movie-production-blackboard.jpg" class="img-fluid" alt="">

                                    <h5 class="mt-4 mb-2">Video Content</h5>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut dolore</p>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="projects section-padding pb-0" id="section_4">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-10 col-12 text-center mx-auto mb-5">
                            <small class="small-title">Projects <strong class="text-warning">04/05</strong></small>

                            <h2>Brands we've crafted so far</h2>
                        </div>

                        <div class="col-lg-4 col-12">
                            <div class="projects-thumb projects-thumb-small">
                                <a href="project-detail.html">
                                    <img src="../resources/images/projects/pj-gal-szabo-CIXXIWxxec4-unsplash.jpg" class="img-fluid projects-image" alt="">
                                    
                                    <div class="projects-info">
                                        <div class="projects-title-wrap">
                                            <small class="projects-small-title">Business</small>

                                            <h2 class="projects-title">MCL Group</h2>
                                        </div>

                                        <div class="projects-btn-wrap mt-4">
                                            <span class="custom-btn btn">
                                                <i class="bi-arrow-right"></i>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12">
                            <div class="projects-thumb projects-thumb-small">
                                <a href="project-detail.html">
                                    <img src="../resources/images/projects/team-fredi-FN3vmVee2sI-unsplash.jpg" class="img-fluid projects-image" alt="">
                                    
                                    <div class="projects-info">
                                        <div class="projects-title-wrap">
                                            <small class="projects-small-title">Strategy Planning</small>

                                            <h2 class="projects-title">Fredi</h2>
                                        </div>

                                        <div class="projects-btn-wrap mt-4">
                                            <span class="custom-btn btn" href="project-detail.html">
                                                <i class="bi-arrow-right"></i>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12">
                            <div class="projects-thumb projects-thumb-small">
                                <a href="project-detail.html">
                                    <img src="../resources/images/projects/vmsign-x9yGe7wnvKQ-unsplash.jpg" class="img-fluid projects-image" alt="">
                                    
                                    <div class="projects-info">
                                        <div class="projects-title-wrap">
                                            <small class="projects-small-title">Video Content</small>

                                            <h2 class="projects-title">Banana</h2>
                                        </div>

                                        <div class="projects-btn-wrap mt-4">
                                            <span class="custom-btn btn" href="project-detail.html">
                                                <i class="bi-arrow-right"></i>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-8 col-12">
                            <div class="projects-thumb projects-thumb-large">
                                <a href="project-detail.html">
                                    <img src="../resources/images/projects/evangeline-shaw-nwLTVwb7DbU-unsplash.jpg" class="img-fluid projects-image" alt="">
                                    
                                    <div class="projects-info">
                                        <div class="projects-title-wrap">
                                            <small class="projects-small-title">Video Content</small>

                                            <h2 class="projects-title">Conference</h2>
                                        </div>

                                        <div class="projects-btn-wrap mt-4">
                                            <span class="custom-btn btn" href="project-detail.html">
                                                <i class="bi-arrow-right"></i>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12">
                            <div class="projects-thumb projects-thumb-small">
                                <a href="project-detail.html">
                                    <img src="../resources/images/projects/tangerine-newt-AKH4OVEmILc-unsplash.jpg" class="img-fluid projects-image" alt="">
                                    
                                    <div class="projects-info">
                                        <div class="projects-title-wrap">
                                            <small class="projects-small-title">Business</small>

                                            <h2 class="projects-title">Maldon</h2>
                                        </div>

                                        <div class="projects-btn-wrap mt-4">
                                            <span class="custom-btn btn" href="project-detail.html">
                                                <i class="bi-arrow-right"></i>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="contact" id="section_5">

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f9c10b" fill-opacity="1" d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>

                <div class="contact-container-wrap">
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-6 col-12">

                                <form class="custom-form contact-form" action="{{ route('contacto.store') }}" method="POST" role="form">
                                @csrf
                                    <small class="small-title">Contacto <strong class="text-white">Como podemos ayudarte</strong></small>

                                    <h2 class="mb-5">Contáctanos</h2>

                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12">                                    
                                            <input type="text" name="nombre" id="name" class="form-control" placeholder="Nombre" required="">
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-12">         
                                            <input type="email" name="correo_electronico" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Correo electronico" required="">
                                        </div>

                                        <div class="col-12">
                                            <textarea class="form-control" rows="7" id="message" name="mensaje" placeholder="Mensaje"></textarea>

                                            <button type="submit" class="form-control">Enviar</button>
                                        </div>

                                    </div>
                                </form>
                            </div>

                            <div class="col-lg-6 col-12">
                                <div class="contact-thumb">
                                    
                                    <div class="contact-info bg-white shadow-lg">
                                        <h4 class="mb-4">Carrera 87 #31-15 Belen los Alpes</h4>

                                        <h4 class="mb-2">
                                            <a href="tel: 240-480-9600">
                                                <i class="bi-telephone contact-icon me-2"></i>
                                                601-420-58-96
                                            </a>
                                        </h4>

                                        <h5>
                                            <a href="mailto:info@company.com" class="footer-link">
                                                <i class="bi-envelope-fill contact-icon me-2"></i>
                                               contacto@umedellin.com
                                            </a>
                                        </h5>
                                        
                                        <!-- Copy "embed a map" HTML code from any point on Google Maps -> Share Link  -->
                                        
                                        <iframe class="google-map mt-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1988.925914889027!2d-75.61176947905364!3d6.230278705167424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e44292d14b9b703%3A0x91674816e4f49e0e!2sUniversidad%20de%20Medell%C3%ADn!5e0!3m2!1sen!2sco!4v1695169139981!5m2!1sen!2sco" width="100%" height="300" allowfullscreen="" loading="lazy"></iframe>
                                        
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

        </main>

        <footer class="site-footer">
            <div class="container">
                <div class="row">
                        
                    <div class="col-lg-6 col-12">
                        <div class="site-footer-wrap d-flex align-items-center">
                            <p class="copyright-text mb-0 me-4">Copyright © 2036 Waso Strategy Co., Ltd.</p>

                            <ul class="social-icon">
                                <li><a href="https://facebook.com/tooplate" class="social-icon-link bi-facebook"></a></li>

                                <li><a href="https://pinterest.com/tooplate" class="social-icon-link bi-pinterest"></a></li>
    
                                <li><a href="https://twitter.com/minthu" class="social-icon-link bi-twitter"></a></li>
    
                                <li><a href="https://www.youtube.com/tooplate" class="social-icon-link bi-youtube"></a></li>
                            </ul>
                            
                        </div>
                    </div>
                    
                    <div class="col-lg-6 col-12">
                    	<p class="copyright-text mb-0 me-4">Waso HTML Template is designed by <a href="https://www.tooplate.com/" target="_blank">Tooplate</a></p>
                    </div>

                </div>
            </div>
        </footer>

        <!-- JAVASCRIPT FILES -->
        <script src="../resources/js/jquery.min.js"></script>
        <script src="../resources/js/bootstrap.min.js"></script>
        <script src="../resources/js/jquery.sticky.js"></script>
        <script src="../resources/js/jquery.magnific-popup.min.js"></script>
        <script src="../resources/js/magnific-popup-options.js"></script>
        <script src="../resources/js/click-scroll.js"></script>
        <script src="../resources/js/custom.js"></script>

    </body>
</html>

@endsection