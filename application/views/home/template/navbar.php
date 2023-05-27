<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
  <div class="container d-flex align-items-center">

    <div class="logo mr-auto">
      <h1><a href="<?= base_url('home/index') ?>">DiengWisata</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
    </div>

    <nav class="nav-menu d-none d-lg-block">
      <ul>
        <li class="active"><a href="<?= base_url('home/index') ?>">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#portfolio">Galeri</a></li>
        <li><a href="#contact">Contact Us</a></li>
        <li><a href="#our team">Our Team</a></li>
        <?php if ($this->session->userdata('email')) : ?>
          <li class="drop-down"><a href=""></a>
            <ul>
              <li><a href="<?= base_url('home/profile') ?>">Profile</a></li>
              <li><a href="<?= base_url('home/pesan') ?>">Pilih Paket</a></li>
              <li><a href="<?= base_url('home/detail_pesanan') ?>">Pesanan <?= $this->cart->total_items(); ?></a></li>
              <li><a href="<?= base_url('home/pembayaran') ?>">Pembayaran</a></li>
              <hr>
              <li><a href="<?= base_url('home/logout') ?>">Logout</a></li>

            </ul>
          </li>
        <?php else : ?>
          <li><a href="<?= base_url('home/login') ?>">Login</a></li>
        <?php endif; ?>

      </ul>
    </nav><!-- .nav-menu -->

  </div>
</header><!-- End Header -->