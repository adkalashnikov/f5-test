<!-- Our promise section -->
<section class="our-promise section">
  <div id="carouselOurPromise" class="carousel slide our-promise__slider" data-ride="carousel">
    <ol class="carousel-indicators align-items-center">
      <?php
      $loop = CFS()->get( 'op_slider' );
      $li = 0;

      foreach ( $loop as $row ) {?>
        <li data-target="#carouselOurPromise" data-slide-to="<?php echo $li; ?>" <?php if ($li < 1) echo 'class="active"'; ?>></li>
        <?php
        $li++;
      }
      ?>
    </ol>

    <div class="carousel-inner">
      <?php
      $loop = CFS()->get( 'op_slider' );
      $i = 1;

      foreach ( $loop as $row ) {?>
        <div class="carousel-item <?php if ($i < 2) echo 'active'; ?>">
          <img class="d-block w-100" src="<?php echo $row['slide']; ?>" alt="slide">
        </div>
        <?php
        $i++;
      }
      ?>
    </div>
  </div>

  <div class="our-promise__bottom" id="our-promise">
    <h2 class="our-promise__bg-text"><?php echo CFS()->get( 'op_background_text' ); ?></h2>
    <div class="our-promise__text-1"><?php echo CFS()->get( 'op_text_1' ); ?></div>
    <div class="our-promise__text-2"><?php echo CFS()->get( 'op_text_2' ); ?></div>
    <div class="our-promise__text-3"><?php echo CFS()->get( 'op_text_3' ); ?></div>
  </div>
</section>
<!-- End Our promise section -->
