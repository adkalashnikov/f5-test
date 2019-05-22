<!-- Our Services section -->
<section class="section" id="our-services">
  <div class="our-services">
    <h2 class="our-services__bg-text"><?php echo CFS()->get( 'os_background_text' ); ?></h2>

    <div class="container">
      <div class="our-services__title"><?php echo CFS()->get( 'os_title' ); ?></div>

      <div class="our-services__wrapper d-md-flex flex-md-wrap">
        <?php
        $loop = CFS()->get( 'os_services' );
        foreach ( $loop as $row ) { ?>
          <div class="service__item d-flex flex-column">
            <div class="service__item-img" style="background-image: url('<?php echo $row['os_service_image']; ?>')"></div>
            <div class="service__item-card">
              <i class="sprite sprite-substrate"></i>
              <div class="service__item-title"><?php echo $row['os_service_title']; ?></div>
              <div class="service__item-text"><?php echo $row['os_service_text']; ?></div>
            </div>
          </div>
        <?php } ?>
      </div>

      <a href="<?php echo CFS()->get( 'os_button_link' ); ?>" class="btn"><?php echo CFS()->get( 'os_button_text' ); ?></a>
    </div>
  </div>
</section>
<!-- End Our Services section -->
