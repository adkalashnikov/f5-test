<!-- About Us section -->
<section class="about-us" id="about-us">
  <h2 class="about-us__bg-text"><?php echo CFS()->get( 'au_background_text' ); ?></h2>

  <div class="container">
    <div class="align-items-center d-xl-flex">
      <div class="about-us__card">
        <div class="about-us__card-title">
          <?php echo CFS()->get( 'au_card_title' ); ?>
        </div>

        <div class="about-us__card-text">
          <?php echo CFS()->get( 'au_card_text' ); ?>
        </div>
      </div>

      <div class="about-us__img">
        <div class="about-us__bg" style="background-image: url('<?php echo CFS()->get( 'au_image' ); ?>')"></div>
      </div>
    </div>
  </div>
</section>
<!-- End About Us section -->
