<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil @yield('Namme')</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    @yield('styles')
</head>
<body>
<!-- ======= Mobile nav toggle button ======= -->
<i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
<header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="{{ URL('img/profile-img 2.jpg') }}" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">@yield('Namme')</a></h1>
        <div class="social-links mt-3 text-center">
          <!-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> -->
          <!-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a> -->
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          <a href="@yield('Em')" class="google"><i class="bx bxl-google"></i></a>
        
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#Pro" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
          <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li>
          <li><a href="#Application" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Application</span></a></li>
          <!-- <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li> -->
        </ul>
      </nav><!-- .nav-menu -->      
    </div>
    <footer class="footer text-center">
        <p class="text-muted" style="margin-top: 5rem;">
            <small>&copy; Created By Nassim With Laravel. </small>
        </p>
      </footer>
</header>

<section id="Pro" class="d-flex flex-column justify-content-center align-items-center">
    <div class="Pro-container" data-aos="fade-in">
      <h1>@yield('Namme')</h1>
      <p>I'm <span class="typed" data-typed-items="Designer, Developer, Freelancer"></span></p>
    </div>
</section>

<main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="img/profile-img 2.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>UI/UX Designer &amp; Web Developer.</h3>
            <!-- <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p> -->
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>25 December 1994</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>NassimBenSassi.github.io</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>@yield('Ph')</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>@yield('Ad')</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>26</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Master</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>@yield('Em')</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
                </ul>
              </div>
            </div>
            <!-- <p>
              Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
              Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.
            </p> -->
          </div>
        </div>
      </div>
    </section><!-- End About Section -->
    
    <!-- ======= Facts Section ======= -->
    <!-- <section id="facts" class="facts">
      <div class="container">

        <div class="section-title">
          <h2>Facts</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Happy Clients</strong> consequuntur quae</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Projects</strong> adipisci atque cum quia aut</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Hours Of Support</strong> aut commodi quaerat</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Hard Workers</strong> rerum asperiores dolor</p>
            </div>
          </div>

        </div>

      </div>
    </section> --><!-- End Facts Section -->
    
    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Skills</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <div class="row skills-content">

          <div class="col-lg-4" data-aos="fade-up">

            <div class="progress">
              <span class="skill">HTML, CSS<i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">JavaScript, PHP<i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
                        
            <div class="progress">
              <span class="skill">WordPress/CMS <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>
          
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="500">

            <div class="progress">
              <span class="skill">Unity, Android Studio<i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">WinDev, Flutter<i class="val">60%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            
            <div class="progress">
              <span class="skill">3DS Max, Blander<i class="val">70%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="1000">
            
            <div class="progress">
              <span class="skill">React, Laravel<i class="val">60%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Python <i class="val">55%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Photoshop, Illustrator<i class="val">70%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->
    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      @yield('Resume')      
    </section><!-- End Resume Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      @yield('Services')
    </section><!-- End Services Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="Application" class="portfolio section-bg">
          <div class="container">
    
            <div class="section-title">
              <h2>Application</h2>
              <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
            </div>
    
           {{--  <div class="row" data-aos="fade-up">
              <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters"><li data-filter=".filter-app">App</li>
                 
                 <li data-filter="*" class="filter-active">All</li>                  
                  <li data-filter=".filter-card">Card</li> 
                  <li data-filter=".filter-web">Web</li> 

                </ul>
              </div>
            </div>--}}
    
            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

              {{-- <div class="col-lg-3 col-md-6 portfolio-item filter-app"></div> --}}
    
              <div class="col-lg-6 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                  <img src="img\Projects\Cesim.png" class="img-fluid" alt="" style="width:30%;margin-left:30%;">
                  <div class="portfolio-links">
                    <a href="https://www.youtube.com/watch?v=Eshb1MVYcmI" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bx bx-plus"></i></a>
                    <a href="https://www.youtube.com/watch?v=Eshb1MVYcmI" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
                  
              <div class="col-lg-6 col-md-6 portfolio-item filter-app ">
                <div class="portfolio-wrap">
                  <img src="img\Projects\fmm.png" class="img-fluid" alt="">
                  <div class="portfolio-links">
                    <a href="img\Projects\fmm.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bx bx-plus"></i>
                    </a>
                    <a href="https://fmm.tn/" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>

              {{-- <div class="col-lg-3 col-md-6 portfolio-item filter-app"></div> --}}
    
              {{-- <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                  <img src="img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                  <div class="portfolio-links">
                    <a href="img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                  <img src="img\Projects\Cesim.png" class="img-fluid" alt="">
                  <div class="portfolio-links">
                    <a href="img\Projects\Cesim.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div> --}}
    
              {{-- <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                  <img src="img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                  <div class="portfolio-links">
                    <a href="img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div> 
    
              <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                  <img src="img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                  <div class="portfolio-links">
                    <a href="img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>--}}
              
              {{--<div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                  <img src="img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                  <div class="portfolio-links">
                    <a href="img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
    
               <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                  <img src="img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                  <div class="portfolio-links">
                    <a href="img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                  <img src="img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                  <div class="portfolio-links">
                    <a href="img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div> --}}
           
            </div>
    
          </div>
        </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Web</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Create website for Petroleum Projects Piloting.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="img\Projects\3p_Petroleum-Projects-Piloting.png" class="testimonial-img" alt="Petroleum Projects Piloting">
                <h3><a href="https://3p.com.tn/">3P Petroleum Projects Piloting</a></h3>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="100">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Update & Upgrade Website with WordPress.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="img\Projects\Logo-transparent3.png" class="testimonial-img" alt="Spirit Innovative">
                <h3><a href="https://www.spirit-innovative.com/">Spirit Innovative</a></h3>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="200">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Create website for Smarteo StartUp.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="img\Projects\Smarteo_logo.png" class="testimonial-img" alt="Smarteo">
                <h3><a href="https://smarteo.tn/">Smarteo</a></h3>                
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="300">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Create website for Taxiora Pub Website.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="img\Projects\logo_taxiora_pub.png" class="testimonial-img" alt="Taxiora">
                <h3><a href="https://taxiora.pub/">Taxiora</a></h3>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="400">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Create website for Foot Ball Website.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="img\Projects\101Pour100Foot.png" class="testimonial-img" alt="101/100 Foot">
                <h3><a href="https://101pour100foot.com/">101 Pour 100 Foot.</a></h3>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="500">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Update & Upgrade 1001 Robes Website.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="img\Projects\photprofil-social80.png" class="testimonial-img" alt="1001 Robes">
                <h3><a href="https://1001robes.tn/">1001 Robes</a></h3>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="600">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Update & Upgrade Lobna Ben Ammar Website.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="img\Projects\logo-lobna-ben-ammar.png" class="testimonial-img" alt="Lobna Ben Ammar">
                <h3><a href="https://www.lobna-ben-ammar.com/">Lobna Ben Ammar</a></h3>                
              </div>
            </div>
            
            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="700">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Update & Upgrade Mariage a Tout Prix Website.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="img\Projects\logo-mat.png" class="testimonial-img" alt="Mariage a Tout Prix">
                <h3><a href="https://www.mariageatoutprix.com/">Mariage a Tout Prix</a></h3>
                <h4>Update & Upgrade Mariage a Tout Prix Website.</h4>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="800">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Update & Upgrade Maison Lobna Ben Ammar Website.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="img\Projects\logo-lobna-ben-ammar.png" class="testimonial-img" alt="Lobna Ben Ammar">
                <h3><a href="https://lamaison-lobnabenammar.com/">Maison Lobna Ben Ammar</a></h3>
                <h4>Update & Upgrade Maison Lobna Ben Ammar Website.</h4>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="900">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Update & Upgrade Mille et Une Fleurs Website.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="img\Projects\logo-png.png" class="testimonial-img" alt="Mille et Une Fleurs">
                <h3><a href="https://www.milleetunefleurs.tn/">Mille et Une Fleurs</a></h3>
                <h4>Update & Upgrade Mille et Une Fleurs Website.</h4>
              </div>
            </div>
            
          </div>
          <div class="swiper-pagination"></div>
          <div class="">
            <button type="submit" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#staticBackdrop">More</button>
          </div>          
        </div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <!-- <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>@yield('Ad')</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>@yield('Em')</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>@yield('Ph')</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3232.3942950258465!2d10.534355542940455!3d35.88835764053529!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x83bf026e8e276b88!2zMzXCsDUzJzE4LjEiTiAxMMKwMzInMTAuMyJF!5e0!3m2!1sfr!2stn!4v1648122700294!5m2!1sfr!2stn" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section> --><!-- End Contact Section -->
<footer class="footer text-center">
  <p class="text-muted">
      <small>&copy; Created By Nassim With Laravel. </small>
  </p>
</footer>
</main>



@yield('scripts')

</body>
</html>