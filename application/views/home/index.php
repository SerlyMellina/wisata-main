<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center align-items-center">
  <div class="container text-center text-md-left" data-aos="fade-up">
    <h1>Welcome to <span>Bumi Wonosobo</span></h1>
    <h2>Wisata Hitz & Kekinian</h2>

    <?php if (!$this->session->userdata('email')) : ?>
      <a href="<?= base_url('home/login'); ?>" class="btn-get-started scrollto">Order Paket</a>
    <?php else : ?>
      <a href="<?= base_url('home/pesan'); ?>" class="btn-get-started scrollto">Order Paket</a>
    <?php endif; ?>
  </div>
</section><!-- End Hero -->

<main id="main">

  <!-- ======= What We Do Section ======= -->
  <section id="what-we-do" class="what-we-do">
    <div class="container">

      <div class="section-title">
        <h2>Paket Bumi Wonosobo</h2>

      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="icon-box">
            <div class="icon"><i class="icofont-tree"></i></div>
            <h4><a href="">Bumi Perhutanan</a></h4>
            <p>" Tempat nya bagus, fasilitas lengkap, colokan listrik banyak,di pinjamkan alat BBQ. "</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
          <div class="icon-box">
            <div class="icon"><i class="icofont-users"></i></div>
            <h4><a href="">Family Gathering</a></h4>
            <p>" serangkaian kegiatan yang diadakan oleh sebuah perusahaan dalam rangka mempererat hubungan antara karyawan dengan karyawan beserta seluruh keluarganya. "</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
          <div class="icon-box">
            <div class="icon"><i class="icofont-home"></i></div>
            <h4><a href="">Paket Keluarga</a></h4>
            <p>" Wisata yang memberikan nuansa liburan sekeluarga yang bertujuan untuk menjalin hubungan antar keluarga ataupun kerabat. "</p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End What We Do Section -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container">

      <div class="row">
        <div class="col-lg-6">
          <img src="<?= base_url() ?>/assets/img/waru/wonosobo.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0">
          <h3>About</h3>
          <p>
          Dataran Tinggi Dieng atau Plato Dieng adalah sebuah wilayah
          di pusat Jawa Tengah yang memiliki ciri geologi, sejarah, dan pertanian yang dinilai khas.[oleh siapa?] Dataran ini diapit oleh jajaran perbukitan di sisi utara dan selatannya, yang berasal dari aktivitas vulkanik yang sama dan disebut Pegunungan Dieng. Pegunungan Dieng sendiri secara geografis berada di antara kompleks Puncak Rogojembangan di sebelah barat dan pasangan Gunung Sindoro dan Gunung Sumbing di sisi timurnya. Hal yang ada di dataran tinggi dieng sebagai berikut ini :
          </p>
          <ul>
            <li><i class="bx bx-check-double"></i> Camping </li>
            <li><i class="bx bx-check-double"></i> Pemandian Air Panas </li>
            <li><i class="bx bx-check-double"></i> Tempat Nongkrong </li>
            <li><i class="bx bx-check-double"></i> Agrowisata Perkebunan Teh</li>
            <li><i class="bx bx-check-double"></i> Spot Photo Instagramable</li>


          </ul>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->


  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title">
        <h2>Galeri</h2>

      </div>


      <div class="row portfolio-container">

        <div class="col-lg-4 col-md-3 portfolio-item filter-app wow fadeInUp">
          <div class="portfolio-wrap">
            <figure>
              <img src="<?= base_url() ?>/assets/img/waru/kebun teh2.jpg" class="img-fluid" alt="">
              <a href="<?= base_url() ?>/assets/img/waru/kebun teh2.jpg" data-gall="portfolioGallery" class="link-preview venobox" title="Preview"><i class="bx bx-plus text-center"></i></a>

            </figure>

            <div class="portfolio-info">
              <h5>Agrowisata Perkebunan Teh Tambi</h5>
            </div>
          </div>
        </div>



        <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
          <div class="portfolio-wrap">
            <figure>
              <img src="<?= base_url() ?>/assets/img/waru/pemandian.jpg" class="img-fluid" alt="">
              <a href="<?= base_url() ?>/assets/img/waru/pemandian.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>

            </figure>

            <div class="portfolio-info">
              <h5> Pemandian Air Panas Bira Bitingan</h5>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
          <div class="portfolio-wrap">
            <figure>
              <img src="<?= base_url() ?>assets/img/waru/gardu.jpg" class="img-fluid" alt="">
              <a href="<?= base_url() ?>assets/img/waru/gardu.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
            </figure>
            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Gardu Pandang Tieng</a></h4>
            </div>
          </div>
        </div>


        <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
          <div class="portfolio-wrap">
            <figure>
              <img src="<?= base_url() ?>assets/img/waru/kawah3.jpg" class="img-fluid" alt="">
              <a href="<?= base_url() ?>assets/img/waru/kawah3.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>

            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Kawah Candradimuka</a></h4>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
          <div class="portfolio-wrap">
            <figure>
              <img src="<?= base_url() ?>assets/img/waru/bukit.jpg" class="img-fluid" alt="">
              <a href="<?= base_url() ?>assets/img/waru/bukit.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>

            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Bukit Sikunir</a></h4>
            </div>
          </div>
        </div>


        <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
          <div class="portfolio-wrap">
            <figure>
              <img src="<?= base_url() ?>assets/img/waru/talaga.jpg" class="img-fluid" alt="">
              <a href="<?= base_url() ?>assets/img/waru/talaga.jpg" class="link-preview venobox" data-gall="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>

            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Telaga Warna</a></h4>
            </div>
          </div>
        </div>



      </div>

    </div>
  </section><!-- End Portfolio Section -->


  <!--- Anggota Team Kelompok 3 --->
  <section id="our team" class="portfolio">
    <div class="container">

      <div class="section-title">
        <h2>Our Team</h2>

      </div>


      <div class="row portfolio-container">

        <div class="col-lg-3 col-md-3 portfolio-item filter-app wow fadeInUp">
          <div class="portfolio-wrap">
            <figure>
              <img src="<?= base_url() ?>/assets/anggota1.jpg" class="img-fluid" alt="">
            </figure>
            <div class="portfolio-info">
              <h4>Anita Permatasari</h4>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
          <div class="portfolio-wrap">
            <figure>
              <img src="<?= base_url() ?>/assets/anggota2.jpg" class="img-fluid" alt="">
            </figure>
            <div class="portfolio-info">
              <h4>Iqbal Romadhon</h4>
            </div>
          </div>
        </div>


        <div class="col-lg-3 col-md-3 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
          <div class="portfolio-wrap">
            <figure>
              <img src="<?= base_url() ?>/assets/anggota3.jpg" class="img-fluid" alt="">
            </figure>
            <div class="portfolio-info">
              <h4>Serly Mellina</h4>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
          <div class="portfolio-wrap">
            <figure>
              <img src="<?= base_url() ?>/assets/anggota4.jpg" class="img-fluid" alt="">
            </figure>

            <div class="portfolio-info">
              <h4>Ahmad Wahyudin</h4>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
          <div class="portfolio-wrap">
            <figure>
              <img src="<?= base_url() ?>/assets/anggota5.jpg" class="img-fluid" alt="">
            </figure>

            <div class="portfolio-info">
              <h5>Salsabila Immur Sulirin</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>





  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact section-bg">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>

      </div>

      <div class="row mt-5 justify-content-center">

        <div class="col-lg-10">

          <div class="info-wrap">
            <div class="row">
              <div class="col-lg-4 info">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>Dieng<br> Wonosobo - Jawa Tengah, 56354</p>
              </div>

              <div class="col-lg-4 info mt-4 mt-lg-0">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>diengwisata@gmail.com</p>
              </div>

              <div class="col-lg-4 info mt-4 mt-lg-0">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>085883658453</p>
              </div>
            </div>
          </div>

        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->