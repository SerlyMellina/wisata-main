<main id="main" class="mt-4">

  <!-- ======= What We Do Section ======= -->
  <section id="what-we-do" class="what-we-do" style="margin-top: 100px;">
    <div class="container">

      <div class="section-title">
        <h2>Pesanan Paket</h2>
        <div class="row">
          <div class="col-md-12">
            <?= $this->session->flashdata('message'); ?>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md  align-items-stretch mt-4 mt-md-0">
          <form id="payment-form" method="post" action="<?= site_url() ?>/snap/finish">
            <input type="hidden" name="result_type" id="result-type" value="">
        </div>
        <input type="hidden" name="result_data" id="result-data" value="">
      </div>
      <input type="hidden" name="total" id="total" value="<?= $this->cart->total(); ?>">
    </div>
    <input type="hidden" name="nama" id="nama" value="<?= $user['nama_pelanggan']; ?>"></div>
    <input type="hidden" name="email" id="email" value="<?= $user['email']; ?>"></div>
    <input type="hidden" name="no_hp" id="no_hp" value="<?= $user['no_hp']; ?>"></div>

    </form>
    <table class="table table-hover table-striped table-bordered">
      <tr>
        <th>NO</th>
        <th>Nama Menu</th>
        <th>Jumlah</th>
        <th>Harga</th>
        <th>Sub-Total Harga</th>
      </tr>

      <?php
      $no = 1;
      foreach ($this->cart->contents() as $item) : ?>
        <tr>
          <td><?= $no++; ?></td>
          <td><?= $item['name']; ?></td>
          <td><?= $item['qty']; ?></td>
          <td align="right"><?= 'Rp. ' . number_format($item['price'], 0, ',', '.');  ?></td>
          <td align="right"><?= 'Rp. ' . number_format($item['subtotal'], 0, ',', '.'); ?></td>
        </tr>

      <?php endforeach; ?>
      <tr>
        <td colspan="4"></td>
        <td align="right"> Rp. <?= number_format($this->cart->total(), 0, ',', '.') ?> </td>
      </tr>

    </table>
    <div class="" align="right">
      <a href="<?= base_url('home/hapus_cart') ?>" class="btn btn-danger">Batalkan Pesanan</a>
      <?php if (!$this->cart->contents()) : ?>
        <a href="#" id="pay-button" class="btn btn-primary" disabled>Lanjutkan Pembayaran</a>
      <?php else : ?>
        <a href="#" id="pay-button" class="btn btn-primary ">Lanjutkan Pembayaran</a>
      <?php endif; ?>
    </div>

    </div>

    </div>

    </div>
  </section><!-- End What We Do Section -->