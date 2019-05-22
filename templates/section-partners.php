<!-- Partners section -->
<section class="partners" id="we-work-with">
  <h2 class="partners__bg-text">We work with</h2>

  <div class="container">
    <div class="partners__title">We work with</div>

    <div class="partners__wrapper d-flex flex-wrap align-items-center justify-content-center justify-content-lg-between">
      <?php
      $loop = CFS()->get( 'ww_partners' );
      foreach ( $loop as $row ) { ?>
        <div class="partners__item">
          <img src="<?php echo $row['image']; ?>" alt="logo">
        </div>
        <?php
      } ?>
    </div>
  </div>
</section>
<!-- End Partners section -->
