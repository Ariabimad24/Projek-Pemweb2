<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Faskes Nurul Fikri</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('frontend/assets/img/faskes.png') }}" rel="icon">
  <link href="{{ asset('frontend/assets/img/faskes.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('frontend/assets/css/main.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Updated: Apr 30 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{ asset('frontend/assets/img/faskes.png') }}" alt="" width="60px" height="80px">
        <h1 class="sitename" style="text-shadow: black 1px 1px 3px;">Faskes <span style="display: block; font-family: arial; font-size: 13px; color: greenyellow; text-shadow: black 1px 1px 3px;">Nurul Fikri</span></h1>
        
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.html#hero" class="">Home</a></li>
          <li><a href="index.html#about">Tentang Kami</a></li>
          <li class="nav-item dropdown">
            <button class="btn btn-dark dropdown-toggle" style="border:none; background-color: transparent;" data-bs-toggle="dropdown" aria-expanded="false">
              Faskes
            </button>
            <ul class="dropdown-menu dropdown-menu-dark ">
              <li><a class="dropdown-item" href="#faskesumum">Faskes Umum</a></li>
              <li><a class="dropdown-item" href="#faskeskhusus">Faskes Khusus</a></li>
            </ul>
          </li>
          <li><a href="index.html#team">Team</a></li>
          <li><a href="index.html#testimonials">Testimonials</a></li>
          <li><a href="index.html#contact">Daftar Faskes</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="{{ route('login') }}" >Login</a>


    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h1 class="" style="text-shadow: black 3px 3px 5px;">Faskes Nurul Fikri</h1>
            <p class="">"Mengabdi dengan Cinta, Mengurus dengan Perhatian"</p>
            <div class="d-flex">
              <a href="#about" class="btn-get-started" style="text-shadow: black 2px 2px 3px;">Get Started</a>
              <a href="https://www.youtube.com/watch?v=ZFyoBp9Cqvk" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle" style="text-shadow: black 3px 3px 3px;"></i><span style="text-shadow: black 3px 3px 3px;">Watch Video</span></a>
            </div>
          </div>
          
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- Clients 2 Section -->
    <section id="clients-2" class="clients-2 section">

      <div class="container">

        <div class="swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 5,
                  "spaceBetween": 120
                },
                "1200": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="{{ asset('frontend/assets/img/clients/client-1.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('frontend/assets/img/clients/client-2.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('frontend/assets/img/clients/client-3.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('frontend/assets/img/clients/client-4.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('frontend/assets/img/clients/client-5.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('frontend/assets/img/clients/client-6.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('frontend/assets/img/clients/client-7.png') }}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('frontend/assets/img/clients/client-8.png') }}" class="img-fluid" alt=""></div>
          </div>
        </div>

      </div>

    </section><!-- /Clients 2 Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2 class="">Tentang Kami</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <p>
              <b>"Selamat Datang di Nurul Fikri Faskes".</b><br>
              Di Nurul Fikri Faskes, kesehatan Anda adalah prioritas utama kami. Sebagai fasilitas kesehatan terpercaya, kami berkomitmen untuk memberikan pelayanan medis terbaik dengan standar profesional tinggi. 
            </p>
            
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <p>Di Rumah Nurul Fikri Faskes, setiap pasien dianggap sebagai anggota keluarga, dan kami berusaha untuk memberikan perawatan yang penuh kasih dan kepedulian. Bersama-sama, kami berupaya menjadi mitra kesehatan Anda dalam perjalanan menuju kehidupan yang lebih sehat dan bahagia." </p>
          </div>

        </div>
        <ul class="offset-3">
          <li><i class="bi bi-check2-circle"></i> <span>Memiliki Dokter, Suster dan Staff yang profesional</span></li>
          <li><i class="bi bi-check2-circle"></i> <span>Memiliki pelayanan yang sangat ramah dan baik kepada semua pasien</span></li>
          <li><i class="bi bi-check2-circle"></i> <span>Fasilitas Modern yang mana dengan peralatan medis terkini, kami memastikan diagnosa dan pengobatan yang akurat dan efektif.</span></li>
          <li><i class="bi bi-check2-circle"></i> <span>Sudah berdiri sejak 2012 dan diakui oleh semua orang di Indonesia</span></li>
        </ul>

      </div>

    </section><!-- /About Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up" id="faskesumum">
        <h2 >Faskes Umum</h2>
        <p>"Mengabdi dengan Cinta, Mengurus dengan Perhatian: Nurul Fikri Faskes"</p>
      </div><!-- End Section Title -->

      <div class="container offset-2">

        <div class="row gy-4 ">

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <img src="{{ asset('frontend/assets/img/rs1.jpg') }}" alt="" width="200px" height="200px">
              <h4><a href="" class="stretched-link">RS. Sehat Selalu</a></h4>
              <p>Menyediakan pelayanan medis lengkap, mulai dari rawat jalan hingga rawat inap, bedah umum, dan layanan gawat darurat.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <img src="{{ asset('frontend/assets/img/rs2.jpg') }}" alt="" width="200px" height="200px">
              <h4><a href="" class="stretched-link">Puskesmas Cemerlang</a></h4>
              <p>Menyediakan layanan kesehatan dasar seperti pemeriksaan umum, imunisasi, konsultasi kesehatan, dan layanan gawat darurat.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <img src="{{ asset('frontend/assets/img/rs3.jpg') }}" alt="" width="200px" height="200px">
              <h4><a href="" class="stretched-link">RS. Kasih Ibu</a></h4>
              <p>Memberikan pelayanan kesehatan primer, termasuk konsultasi dokter umum, perawatan luka ringan, dan pemeriksaan kesehatan rutin.</p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
      <!-- Section Title -->
      <div class="container section-title mt-4" data-aos="fade-up" >
        <h2 id="faskeskhusus">Faskes Khusus</h2>
        <p>"Mengabdi dengan Cinta, Mengurus dengan Perhatian: Nurul Fikri Faskes"</p>
      </div><!-- End Section Title -->

      <div class="container offset-2">

        <div class="row gy-4 ">

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <img src="{{ asset('frontend/assets/img/rs1.jpg') }}" alt="" width="200px" height="200px">
              <h4><a href="" class="stretched-link">RS. Harapan Bunda</a></h4>
              <p><strong>Sakit Khusus Jantung:</strong> Fokus pada diagnosa, perawatan, dan pembedahan penyakit jantung serta pembuluh darah.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <img src="{{ asset('frontend/assets/img/rs5.jpg') }}" alt="" width="200px" height="200px">
              <h4><a href="" class="stretched-link">Klinik Medika</a></h4>
              <p><strong> Spesialis:</strong> Menyediakan layanan dari spesialis seperti kardiologi, neurologi, pediatri, ortopedi, ginekologi, dan lainnya.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <img src="{{ asset('frontend/assets/img/rs6.jpg') }}" alt="" width="200px" height="200px">
              <h4><a href="" class="stretched-link">RS. Bahagia</a></h4>
              <p><strong>Pusat Rehabilitasi:</strong> Menawarkan program rehabilitasi untuk pemulihan pasca operasi, cedera, atau kondisi medis kronis. </p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section">

      <img src="{{ asset('frontend/assets/img/cta-rs.jpg') }}" alt="">

      <div class="container">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-9 text-center text-xl-start">
            <h3>Nurul Fikri Faskes</h3>
            <p>"Temukan Layanan Kesehatan yang Anda Butuhkan dan Jadwalkan Pemeriksaan Online Sekarang."</p>
          </div>
          <div class="col-xl-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="https://wa.me/628877008377"><i class="bi bi-telephone-fill"></i> Telpon</a>
          </div>
        </div>

      </div>

    </section><!-- /Call To Action Section -->

    <!-- Team Section -->
    <section id="team" class="team section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Team</h2>
        <p>"Tersedia untuk Anda. Tim kami siap memberikan perawatan terbaik. Bersama, kita menciptakan perubahan positif."</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="{{ asset('frontend/assets/img/team/afif.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Muhammad Umam Afif</h4>
                <span>Ketua</span>
                <p>Hidup akan lebih indah jika bisa membantu banyak orang</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div>
          <!-- End Team Member -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="{{ asset('frontend/assets/img/team/el.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Muhammad Fikrie El Muqoffa</h4>
                <span>Anggota</span>
                <p>Menebar kebaikan dan kasih kepada manusia di muka bumi</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div>
          <!-- End Team Member -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="{{ asset('frontend/assets/img/team/aria.jpg') }}" width="440px" height="440px" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Aria Bima Darmawan</h4>
                <span>Anggota</span>
                <p>Hidup ini tidak akan berarti jika hanya mementingkan diri sendiri</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="{{ asset('frontend/assets/img/team/rifqi.jpg') }}" width="440px" height="420px" class="img-fluid" alt=""></div>

              <div class="member-info">
                <h4>Rifqi Abiyu Fahlevi</h4>
                <span>Anggota</span>
                <p>Menjadi Pelayan Umat Demi Kesehatan dan Kemakmuran Dunia</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>

    </section><!-- /Team Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section" >

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up" >
        <h2>Testimoni</h2>
        <p>Pelayanan terbaik ialah Pokok dan Tujuan utama Nurul Fikri Faskes</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset('frontend/assets/img/testimonials/testimonials-1.jpg') }}" class="testimonial-img" alt="">
                <h3>Fatehh</h3>
                <h4>Ceo &amp; Founder</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>"Pelayanan yang diberikan oleh rumah sakit ini sungguh luar biasa. Saya sangat terkesan dengan perhatian dan kepedulian tim medis terhadap kondisi saya. Terima kasih atas bantuan dan dukungannya selama proses pemulihan saya."</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset('frontend/assets/img/testimonials/testimonials-2.jpg') }}" class="testimonial-img" alt="">
                <h3>Prilly Latuconsina</h3>
                <h4>Designer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>"Tidak ada kata yang bisa saya ungkapkan untuk menggambarkan betapa terbantu dan terkesan saya dengan pelayanan dari rumah sakit ini. Tim medisnya luar biasa dan selalu siap membantu dengan penuh perhatian. Saya sangat berterima kasih atas perawatan yang saya terima selama berada di sini."</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset('frontend/assets/img/testimonials/testimonials-3.jpg') }}" class="testimonial-img" alt="">
                <h3></h3>
                <h4>Luis citata</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>"Saya ingin berterima kasih kepada tim medis yang luar biasa di rumah sakit ini. Mereka tidak hanya memberikan perawatan medis yang berkualitas, tetapi juga memberikan dukungan emosional yang sangat dibutuhkan selama masa pemulihan saya. Saya sangat beruntung bisa mendapat perawatan di sini."</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset('frontend/assets/img/testimonials/testimonials-4.jpg') }}" class="testimonial-img" alt="">
                <h3>Rafeael Struick</h3>
                <h4>Athlate</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>"Pengalaman saya di rumah sakit ini sangat memuaskan. Dari penerimaan hingga pemulangan, semua prosesnya sangat lancar dan profesional. Tim medisnya sangat peduli dan responsif terhadap setiap kebutuhan saya. Saya tidak ragu merekomendasikan rumah sakit ini kepada siapa pun."</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{ asset('frontend/assets/img/testimonials/testimonials-5.jpg') }}" class="testimonial-img" alt="">
                <h3>Witan Sulaiman</h3>
                <h4>Entrepreneur</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>"Rumah sakit ini benar-benar luar biasa. Saya merasa nyaman dan aman selama menjalani perawatan di sini. Tim medisnya sangat terampil dan berpengalaman, dan mereka benar-benar memperhatikan setiap detail. Terima kasih atas semua yang telah dilakukan untuk saya dan keluarga saya."</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Daftar Faskes</h2>
        <p>"Selamat datang di Nurul Fikri Faskes, tempat Anda mendapatkan pelayanan kesehatan terbaik. Isi formulir pendaftaran singkat kami dan dapatkan akses ke layanan medis yang berkualitas."</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-5">

            <div class="info-wrap">
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Alamat</h3>
                  <p>A108 pasirah Mastanum, Gelumbang, Muara Enim 535022</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Telpon</h3>
                  <p>+62 5589 5488 655</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Email</h3>
                  <p>NurulFikriFaskes@gmail.com</p>
                </div>
              </div><!-- End Info Item -->

              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>

          <div class="col-lg-7">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <label for="name-field" class="pb-2">Nama Lengkap</label>
                  <input type="text" name="name" id="name-field" class="form-control" required="">
                </div>

                <div class="col-md-6">
                  <label for="email-field" class="pb-2">Email</label>
                  <input type="email" class="form-control" name="email" id="email-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="alamat" class="pb-2">Alamat</label>
                  <input type="text" class="form-control" name="alamat" id="alamat" required="">
                </div>

                <div class="btn-group col-md-6">
                  <select name="jenisfaskes" id="jenisfakes" class="btn btn-success">
                    <option value="umum">Faskes Umum</option>
                    <option value="Khusus">Faskes Khusus</option>
                  </select>
                </div>

                <div class="col-md-6">
                  <input type="text" name="name" placeholder="Masukkan No HP" id="name-field" class="form-control" required="">
                </div>


                <div class="col-md-12">
                  <label for="message-field" class="pb-2">Deskripsi Faskes</label>
                  <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Harap tunggu</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Pesanmu telah terkirim. Terima kasih!</div>

                  <button type="submit">Kirim</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="d-flex align-items-center">
            <span class="sitename">Nurul Fikri Faskes</span>
          </a>
          <div class="footer-contact pt-3">
            <p>A108 pasirah Mastanum</p>
            <p>Gelumbang, Muara Enim 535022</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+62 5589 5488 4455</span></p>
            <p><strong>Email:</strong> <span>NurulFikriFaskes@gmail.com</span></p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Tautan langsung</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="index.html#hero">Home</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="index.html#tentangkami">Tentang Kami</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="index.html#faskesumum">Faskes</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="index.html#team">Team</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="index.html#testimonials">Testimonials</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Layanan Kami</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i>Laboratorium</li>
            <li><i class="bi bi-chevron-right"></i>Rawap Inap </li>
            <li><i class="bi bi-chevron-right"></i>Layanan 24 jam</li>
            <li><i class="bi bi-chevron-right"></i>Konsultasi Gratis</li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12">
          <h4>Ikuti kami</h4>
          <p>"Mengabdi dengan Cinta, Mengurus dengan Perhatian"</p>
          <a class="btn-getstarted" href="login/login.php" style="padding: 7px; padding-left: 20px; padding-right: 20px; border-radius: 10px;color: white; background-color: rgb(96, 164, 231);">Login</a>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Nurul Fikri Faskes</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

</body>

</html>