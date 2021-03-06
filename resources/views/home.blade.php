<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Benbazide</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/../img/favicon.png" rel="icon">
  <link href="/../img/apple-touch-icon.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,100&family=Montserrat:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/brands.min.css" integrity="sha512-lCU0XyQA8yobR7ychVxEOU5rcxs0+aYh/9gNDLaybsgW9hdrtqczjfKVNIS5doY0Y5627/+3UVuoGv7p8QsUFw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 
  <!-- Vendor CSS Files -->
  <link href="/../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/../vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/../vendor/aos/aos.css" rel="stylesheet">
  <link href="/../vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/../vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="/../vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('style/frontend/front.css') }}" rel="stylesheet">

 
</head>

<body>

  <!-- ========================================================== Header ========================================================== -->

    <header id="header" class="header fixed-top ">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{url('/')}}" class="logo d-flex align-items-center">
        <img src="/../img/logo.png">
        <span>Ben-Bazide</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Accueil</a></li>
          <li><a class="nav-link scrollto" href="#about">?? propos de nous</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">Produits</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a href="{{url('/panier')}}" class="mb-1"><i class="bi bi-cart" style="font-size: 25px"></i></a></li>
          {{-- <span style="background-color: #ff901c; color: white; width: 20px; border-radius: 60px; height: 20px; line-height:1; display: flex; font-size: 12px; position: absolute; align-items: center; right: -10px ; justify-content: center; top: 0;">{{$countCmd}}</span>  --}}
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ========================================================== Hero Section ========================================================== -->
 
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center" >
          <h1 data-aos="fade-up" style="color: #f3ab71">Lorem ipsum dolor sit</h1>
          <p data-aos="fade-up" data-aos-delay="400" class="mt-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe minus voluptate doloribus blanditiis dolor magnam, ipsam tenetur qui voluptates distinctio? In, iure. Quas maxime ipsum magni vel velit officia perferendis.</p>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>?? propos de nous</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="/../img/hero-img.jpg" class="img-fluid" style="border-radius: 7px" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    
  <!-- ========================================================== About Section ========================================================== -->
    
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3>QUI NOUS SOMMES</h3>
              <h2>Expedita voluptas omnis cupiditate totam eveniet nobis sint iste. Dolores est repellat corrupti reprehenderit.</h2>
              <p>
                Quisquam vel ut sint cum eos hic dolores aperiam. Sed deserunt et. Inventore et et dolor consequatur itaque ut voluptate sed et. Magnam nam ipsum tenetur suscipit voluptatum nam et est corrupti.
              </p>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="/../img/about.jpeg" class="img-fluid" alt="" style="border-radius: 7px">
          </div>

        </div>
      </div>

    </section><!-- End About Section -->

  <!-- ========================================================== Counts Section ========================================================== -->
    
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                <p>Clients Satisfaits</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 ">
            <div class="count-box">
              <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                <p>Projets</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-12">
            <div class="count-box">
              <i class="bi bi-headset" style="color: #15be56;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                <p>Hours Of Support</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

  <!-- ======================================== Services Section ======================================== -->

    <section id="services" class="services">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Services</h2>
          <p>Nos Services</p>
        </header>

        <div class="row gy-4">

          @foreach ($serv as $item)

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="service-box orange">
                <img src="{{asset($item->pic)}}" width="70px" height="70px" style="border-radius: 7px" class="mb-2">
                <h3>{{$item->titre}}</h3>
                <p style="text-overflow: ellipsis; overflow: hidden; white-space: nowrap;">{{$item->description}}</p>
                <a href="{{url('/services/show/'.$item->id)}}" class="read-more"><span>Lire la suite</span> <i class="bi bi-arrow-right"></i></a>
              </div>
            </div> 

          @endforeach

          <div class="d-flex justify-content-center">
            <span class="mt-4">{{$serv->links("pagination::bootstrap-4")}}</span>
          </div>

        </div>

      </div>

    </section><!-- End Services Section -->

  <!-- ========================================================== Produits Section ========================================================== -->
    
    <section id="portfolio" class="portfolio">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Produits</h2>
          <p>Consultez nos produits</p>
        </header>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">

              <li onclick='allProds()'>Tous les produits</li>
              @foreach ($cat as $item)
                <li data-filter=".filter-app" onclick='select("{{$item->id}}")'>{{$item->type}}</li> 
              @endforeach

            </ul>
          </div>
        </div>
      
        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

          @foreach ($prod as $item)
          <form action="{{ url('/panier/add/'.$item->id) }}" method="POST">
            @csrf
            <div  class="col-lg-4 col-md-6 portfolio-item filter-app toutimg   a{{$item->categorie_id}}" style="display: block">
              <div class="portfolio-wrap">
                <img src="{{asset($item->pic)}}" class="img-fluid" alt="" style="height: 276px; width: 443px">
                <div class="portfolio-info">
                  <h3 style="font-size: 40px; font-weight: 700;">{{$item->name}}</h3>
                  <h4>{{$item->prix}} DH</h4>
                  <p style="text-overflow: ellipsis; overflow: hidden; white-space: nowrap;">{{$item->description}}</p>
                  <div class="portfolio-links">
                    <p><a href="{{url('/produit/show/'.$item->id)}}" title="Suite"><i class="bi bi-arrow-right"></i></a></p>
                    <button style="border: none; background-color: #ff901c; border-radius: 20px" title="Ajouter au panier" class="mt-4"><i class="bi bi-cart" style="font-size: larger; color: white; padding: 10px"></i></button>
                  </div>
                </div>
              </div>
            </div>
          </form>
          @endforeach

        </div>

        <div class="d-flex justify-content-center mt-5">
          <span class="mt-4">{{$prod->links("pagination::bootstrap-4")}}</span>
        </div>
      
          
    </section><!-- End Produits Section -->  


  <!-- ========================================================== Clients Section ========================================================== -->
   
    <section id="clients" class="clients">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          {{-- <h2></h2> --}}
          <p>Nos Clients</p>
        </header>

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="/../img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/../img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/../img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/../img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/../img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/../img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/../img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/../img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

    </section><!-- End Clients Section -->

  <!-- ========================================================== Contact Section ========================================================== -->
  
    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Contact</h2>
          <p>Contactez-Nous</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Adresse</h3>
                  <p>33 Rue el Ouifaq Qu Salam, Safi, Maroc</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-telephone"></i>
                  <h3>Appelez-nous</h3>
                  <p>+212 635051819<br>+212 524666403</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Envoyez-nous un email</h3>
                  <p>benbazide.guvenlik.@gmail.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-clock"></i>
                  <h3>Heures d'ouverture</h3>
                  <p>Lundi-vendredi  9:00AM-05:00PM</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6 p-4" style="background-color: whitesmoke">
            <form action="{{url('/contact/store')}}" method="post">
              @csrf
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Entrez vous nom" required>
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Entrez vous email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="sujet" placeholder="Sujet" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <button class="btn btn-outline-dark">Envoyer le message</button>
                </div>

              </div>
            </form>

          </div>

        </div>

      </div>

    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ========================================================== Footer ========================================================== -->
  
  <footer id="footer" class="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <img src="/../img/logo.png" alt="">
              <span>Ben-Bazide</span>
            </a>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
          </div>
          <div class="col-lg-1"></div>
          <div class="col-lg-3 col-12 footer-links text-center">
            <h4>Navigation</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#hero">Accueil</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#about">?? propos de nous</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#services">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#portfolio">Produits</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              33 Rue el Ouifaq Qu Salam <br> Safi, Maroc<br><br>
              <strong>Phone:</strong> <p>+212 524666403<br>+212 635051819<br></p>
              <strong>Email:</strong> benbazide.guvenlik.@gmail.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="credits">
        Designed and Developed by <b>BOUMLIK Mohamed</b>  
      </div>
    </div>

  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/../vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="/../vendor/aos/aos.js"></script>
  <script src="/../vendor/php-email-form/validate.js"></script>
  <script src="/../vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/../vendor/purecounter/purecounter.js"></script>
  <script src="/../vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/../vendor/glightbox/js/glightbox.min.js"></script>

  
<!-- ========================================================== category filter script ========================================================== -->

  <script>
    function select(e){

      var allImg = document.querySelectorAll('.toutimg');
      
      for(var i = 0; i<allImg.length; i++){
        allImg[i].style.display= 'none';
      }

      var allImg1 = document.querySelectorAll('.a'+e);

      for(var j = 0; j<allImg1.length; j++){
        allImg1[j].style.display= 'block';

      }
      
    }

    function allProds(){

      var allImg = document.querySelectorAll('.toutimg');

      for(var i = 0; i<allImg.length; i++){
        allImg[i].style.display= 'block';
      }

    }
  </script>

  <!-- Template Main JS File -->
  <script src="/../js/main.js"></script>

</body>

</html>