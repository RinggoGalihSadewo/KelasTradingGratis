@extends('layout/layout')

@section('title','Kelas Trading Gratis')

@section('container')
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo d-flex align-items-center">
        <a href="{{url('/')}}"><img src="/img/logo.png" class="Logo my-3" alt="Kursus Trading Gratis"></a>
        <h1 style="margin-left: 10px"><a href="{{url('/')}}">Kelas Trading Gratis</a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#join">Join us</a></li>
          <li><a class="nav-link scrollto" href="#services">Fasilitas</a></li>
          <li><a class="nav-link scrollto " href="#testimonials">Testimonials</a></li>
          <li><a class="nav-link scrollto" href="#team">Mentor</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="#services">Get Started</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->

  <section class="wave1" style="height:270px">
    <div class="row">
      <div class="col-12">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e3c817" fill-opacity="1" d="M0,128L48,144C96,160,192,192,288,181.3C384,171,480,117,576,85.3C672,53,768,43,864,58.7C960,75,1056,117,1152,117.3C1248,117,1344,75,1392,53.3L1440,32L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
      </div>
    </div>
  </section>

  <!-- ======= Hero Section ======= -->
  
  <section id="hero" class="d-flex align-items-center">
  
    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          
          <h1 data-aos="fade-up">Marilah Trading dan Hasilkan Profit Konsisten Bersama Kami</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Jadilah trader profesional bersama kami <br> Klik tombol mulai dan hasilkan ribuan dollar bersama kami</h2>
          <!-- <h2>8.000+ Aktif</h2>
          <h2>20.000+ Orang telah mendaftar</h2> -->
          <div data-aos="fade-up" data-aos-delay="800">
            <a href="#join" class="btn-get-started scrollto">Mulai</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
          <img src="/img/hero-img3.png" class="img-fluid animated" alt="Mosa and Quotex">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <div data-aos="fade-up" data-aos-delay="200" id="join">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e3c817" fill-opacity="1" d="M0,224L48,224C96,224,192,224,288,218.7C384,213,480,203,576,165.3C672,128,768,64,864,74.7C960,85,1056,171,1152,197.3C1248,224,1344,192,1392,176L1440,160L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
  </div>
    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container">

        <div class="row">
            
          <div class="d-flex justify-content-center align-items-center" >
            <div class="joingrup">
              <div class="row">
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">       
                <h3>Daftar Quotex ? klik tombol dibawah ini</h3>
                <center>
                <a href="http://daftarquotexindonesia.com" target="_blank">
                <img src="/img/clients/btnQuotex.png" class="img-fluid d-flex justify-content-center mt-0" alt="" data-aos="zoom-in" data-aos-delay="200">
                </a>  
                </center>  
                </div>

                <div class="col-lg-4 mt-4 mt-sm-0" data-aos="fade-up" data-aos-delay="200">       
                <h3>Daftar Oxtrade ? klik tombol dibawah ini</h3>
                <center>
                <a href="http://kursustradingmosa.com" target="_blank">
                <img src="/img/clients/btnOxtrade.png" class="img-fluid d-flex justify-content-center mt-0" alt="" data-aos="zoom-in" data-aos-delay="200">
                </a>  
                </center>  
                </div>

                <div class="col-lg-4 mt-4 mt-sm-0" data-aos="fade-up" data-aos-delay="400">       
                <h3>Gabung grup telegram kami dibawah ini</h3>
                <center>
                <a href="https://t.me/quotexmosa" target="_blank">
                <img src="/img/clients/btnTele2.png" class="img-fluid d-flex justify-content-center mt-0" alt="" data-aos="zoom-in" data-aos-delay="200">
                </a>  
                </center>  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </section>
  

  </svg>
  

  <main id="main">
  <section>
    <div class="container d-flex align-items-center justify-content-center">
      <div class="join">
        <div class="row">
          <div class="col-lg-3" data-aos="fade-right" data-aos-delay="200">
            <h4>15.000+</h4>
            <p>Orang telah profit bersama kami</p>
          </div>
          <div class="col-lg-3" data-aos="fade-right" data-aos-delay="300">
            <h4>25.000+</h4>
            <p>Orang telah mendaftar</p>
          </div>
          <div class="col-lg-3" data-aos="fade-right" data-aos-delay="400">
            <h4>5.000+</h4>
            <p>Member aktif</p>
          </div>
          <div class="col-lg-3" data-aos="fade-right" data-aos-delay="500">
            <h4>Everyday</h4>
            <p>Materi pembelajan</p>
          </div>
        </div>
      </div>
    </div>
  </section>

      <div data-aos="fade-up" data-aos-delay="600">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e3c817" fill-opacity="1" d="M0,224L48,224C96,224,192,224,288,218.7C384,213,480,203,576,165.3C672,128,768,64,864,74.7C960,85,1056,171,1152,197.3C1248,224,1344,192,1392,176L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
      </div>

    <section id="youtube" class="container my-5">
      <div class="youtube">        
        <div class="row">
          <div class="col-lg-4 offset-lg-2 col-12" data-aos="fade-right" data-aos-delay="200">
            <div class="embed-responsive embed-responsive-21by9">
              <iframe width="100%" height="315" src="https://www.youtube.com/embed/K-cTggVYhxQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
          <div class="col-lg-4 col-12 mt-4" data-aos="fade-left" data-aos-delay="200" style="text-align: justify">
            <p>Kelas berbasis online yg bisa diakses Kapanpun Dimanapun.Temukan misteri sukses para trader berdasarkan nol sampai mahir disini. Buat uang Kalian berkembang menggunakan daftar & praktek secara eksklusif buat mencapai profit konsisten.
            <br><br>
            “<b>Trading hanya boleh dilakukan oleh umur 18 + dan trading memiliki resiko yang tinggi tetapi profit yang diberikan juga tinggi</b>”</p>
          </div>
      </div>   
    </section>

    <section class="container-fluid bioMosa" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-6 col-12" data-aos="fade-right" data-aos-delay="300">
          <img src="/img/clients/trader_mosa2_1.png" alt="">
        </div>
        <div class="col-lg-6 col-12 bioMosaBody" style="text-align: justify; padding: 0 auto;" data-aos="fade-right" data-aos-delay="600">
            <h2><b>The Founder</b></h2>
            <p><b>
            Hai, Saya Mosa biasa dipanggil Trader Mosa
            </b>
            </p>
            <p>
            Saya mengawali karir pertama saya sebagai Garnisher disuatu cafe ternama sejak usia saya 15 tahun dan itu saya masih duduk di bangku sekolah SMK kelas 1 lalu akhirnya saya resign. Kemudian saya bekerja disuatu konter HP dan setelah 1 tahun bekerja, saya mulai mencari penghasilan tambahan.
            </p>
            <p>
            Dan disini awal mula karir didunia Trading Binary Option, disini saya pun belajar dan banyak meriset banyak strategi berikut juga teknik trading di Binary Option. Dan akhirnya setelah 1 tahun belajar saya terjun langsung ke live account dan mendapatkan 2 milyar dalam waktu 9 bulan di usia saya sekarang ini 20 tahun dan ini menjadikan saya semangat untuk memotivasi anak - anak muda untuk bisa sukses dibawah 20 tahun. 
            </p>
            <p>
            Saya sangat senang karena pencapaian selama ini yang saya proses telah membuahkan hasil dan disini pun saya membuka kelas belajar trading gratis agar yang mau belajar dengan serius bisa belajar melalui website ini tanpa mengeluarkan biaya.
            </p>
            <p>
            Apabila Anda tertarik & ingin belajar trading, maka aku sangat siap buat sebagai mentor Anda. Saya akan membimbing & mentoring ilmu trading berdasarkan awal hingga Anda sahih-sahih paham & mahir pada global trading. Anda bisa belajar sepenuhnya secara online dimana saja memakai aneka macam pelaksanaan trading yg ada.
            </p>
    </div>
      </div>
    </section>

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Fasilitas</h2>
        </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= More Services Section ======= -->
    <section id="more-services" class="more-services">
      <div class="container">
        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card" style='background-image: url("/img/clients/kelas.PNG");' data-aos="fade-up" data-aos-delay="100">
              <div class="card-body">
                <h5 class="card-title"><a href="{{url('/kelas-private-berbayar')}}" target="_blank">Kelas privat berbayar</a></h5>
                <p class="card-text">Kelas Trading Gratis menyediakan fasilitas private berbayar selama 2 minggu full hanya dengan 1.5 juta dan langsung founder atau mentor utama yang memberi materi.</p>
                <div class="read-more"><a href="{{url('/kelas-private-berbayar')}}" target="_blank"><i class="bi bi-arrow-right"></i> Klik disini untuk baca selengkapnya</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="card" style='background-image: url("/img/youtube.png");' data-aos="fade-up" data-aos-delay="200">
              <div class="card-body">
                <h5 class="card-title"><a href="">Software trading</a></h5>
                <p class="card-text">Kelas Trading Gratis menyediakan alat bantu analisa untuk trading berupa software dengan harga 500.000,-</p>
                <div class="read-more"><a href="{{url('/software-trading')}}" target="_blank"><i class="bi bi-arrow-right"></i> Klik disini untuk baca selengkapnya</a></div>
              </div>
            </div>

          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4">
            <div class="card" style='background-image: url("/img/clients/videoBG.PNG");' data-aos="fade-up" data-aos-delay="100">
              <div class="card-body">
                <h5 class="card-title"><a href="https://www.youtube.com/channel/UCP4yIY56OTM1j51GuSCSDUA" target="_blank">Video Trading</a></h5>
                <p class="card-text">Memberikan video gratis edukasi ilmu tentang trading</p>
                <div class="read-more"><a href="https://www.youtube.com/channel/UCP4yIY56OTM1j51GuSCSDUA" target="_blank"><i class="bi bi-arrow-right"></i> Lihat video</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4">
            <div class="card" style='background-image: url("/img/allMentor.jpg");' data-aos="fade-up" data-aos-delay="200">
              <div class="card-body">
                <h5 class="card-title"><a href="#team">Meet our all mentor</a></h5>
                <p class="card-text">Disini founder atau mentor utama Kelas Trading Gratis, menyediakan pilihan mentor handal yang ada di Kelas Trading Gratis ini dan sudah terlatih.</p>
                <div class="read-more"><a href="#team"><i class="bi bi-arrow-right"></i> Klik disini untuk baca selengkapnya</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End More Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Testimonials</h2>
          <!-- <p>Magnam dolores commodi suscipit eum quidem consectetur velit</p> -->
        </div>
        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                  <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                  <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                  <h3>John Larson</h3>
                  <h4>Entrepreneur</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Mentor</h2>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="/img/team/ais1.png" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Frz Trader</h4>
                <span>Chief Executive Officer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="/img/team/fahri1.png" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Ryzen Trader</h4>
                <span>Product Manager</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="600">
              <div class="member-img">
                <img src="/img/team/panji.png" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Webster Trader</h4>
                <span>Accountant</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="400">
              <div class="member-img">
                <img src="/img/team/gusti1.png" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Bionic Trader</h4>
                <span>Accountant</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="500">
              <div class="member-img">
                <img src="/img/team/jibon.png" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Theo Trader</h4>
                <span>Accountant</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="/img/team/niko1.png" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Romans Trader</h4>
                <span>CTO</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Team Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Pertanyaan</h2>
        </div>

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-5">
            <i class="ri-question-line"></i>
            <h4>Apa itu kursus trading gratis ?</h4>
          </div>
          <div class="col-lg-7">
            <p>
              Kursus trading gratis adalah sebuah tempat edukasi belajar trading secara gratis bagi semua kalangan.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-5">
            <i class="ri-question-line"></i>
            <h4>Siapa saja mentor kursus trading gratis ?</h4>
          </div>
          <div class="col-lg-7">
            <p>
              Mentor pada kursus trading gratis adalah Mosa, Frz, Ryzen, Webster, Theo, Romans, Bionic.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
          <div class="col-lg-5">
            <i class="ri-question-line"></i>
            <h4>Layanan apa saja yang tersedia di kursus trading gratis ?</h4>
          </div>
          <div class="col-lg-7">
            <p>
              Layanan - layanan yang tersedia pada kursus trading gratis adalah kelas privat berbayar, software trading, video trading dan meet out all mentor.
            </p>
          </div>
        </div>
        
        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="600">
          <div class="col-lg-5">
            <i class="ri-question-line"></i>
            <h4>Syarat utama menjadi member kursus trading gratis ?</h4>
          </div>
          <div class="col-lg-7">
            <p>
              Minimal berusia 18 tahun, memiliki KTP dan memiliki rekening bank.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

      </div>
    </section><!-- End F.A.Q Section -->

    <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Contact Us</h2>
        </div>

        <div class="row">

          <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="contact-about">
              <h3>Kelas Trading Gratis</h3>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor veritatis suscipit corrupti culpa minima commodi odit vel explicabo quod voluptates optio laborum eos in cumque quasi, maiores ipsam! At, minus.</p>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 mt-4 mt-md-0 align-items-center justify-content-center d-lg-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="info">
              <div>
                <i class="ri-map-pin-line"></i>
                <p>Jalan Tirtayasa <br>Bandar Lampung</p>
              </div>

              <div>
                <a href="mailto:ypcteammosa@gmail.com" target="_blank">
                <i class="ri-mail-send-line"></i>
                <p style="color: #444444">ypcteammosa@gmail.com</p>
                </a>
              </div>

              <div>
                <a href="tel:+6281274421371" target="_blank">
                <i class="ri-phone-line"></i>
                <p style="color: #444444">+6281274421371</p>
                </a>
              </div>

            </div>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

@endsection