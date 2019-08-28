<?php $this->load->view('component/nav')?>
<link rel="stylesheet" href="<?= base_url()?>assets/app/css/stepper.css" />
<div class="container">
  <div class="columns">
    <div class="column is-4">
      <?php $this->load->view('component/stepper')?>
    </div>
    <!-- pilih lomba -->
    <div class="column is-8">
    <h1 class="title">Kategori Lomba</h1>
    <h2 class="subtitle">Silakan pilih kategori lomba mana yang ingin Anda ikuti.</h2>
    <div id="warnings" class=""></div>
    <div class="columns">
        <!-- Feature -->
        <?php foreach ($listlomba as $u) { ?>
            <div class="column is-4">
                <a href="<?= base_url()?>user/pilihlomba?l=<?= $u['id'] ?>">
                    <div class="feature">
                        <img src="<?= base_url()?>assets/app/images/rangkaian-kegiatan/lomba.svg" alt="" data-aos="fade-up" data-aos-delay="300" data-aos-offset="200" data-aos-easing="ease-out-quart">
                        <h4 class="title is-6 is-tight "><?= $u['namalomba']; ?></h4>
                        <h6 class="subtitle is-6 "><br>Kategori: <?= $u['kategori']; ?></h6>
                        <h6 class="subtitle is-6 ">Rp<?= number_format($u['harga'], 0, ',', '.'); ?>,-</h6>
                        
                    </div>
                </a>
            </div>
        <?php } ?>
    </div>
    </div>
  </div>
</div>
