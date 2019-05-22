<!-- Testimonials section -->
<section class="testimonials" id="testimonials">
  <h2 class="testimonials__bg-text">Our clients say</h2>

  <div class="container">
    <div class="testimonials__title">Testimonials</div>

    <div class="testimonials__wrapper">
      <div id="testimonialsCarousel" class="carousel slide" data-ride="carousel">
        <?php
        $args = array(
          'numberposts' => -1,
          'orderby'     => 'date',
          'order'       => 'DESC',
          'post_type'   => 'testimonials',
          'suppress_filters' => true,
        );

        $posts = get_posts( $args );
        $counter = 0;
        $slide = 0;
        ?>
        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
          <?php
          foreach($posts as $post){ setup_postdata($post);
            if ($counter % 3 == 0 || $counter < 1) {
              if($counter > 1) {
                $slide++;
              } ?>
              <li data-target="#testimonialsCarousel" data-slide-to="<?php echo $slide; ?>" <?php if ($counter < 1){ echo 'class="active"'; }?>></li>
            <?php }
            $counter++;
          }
          ?>
        </ol>

        <!-- Wrapper for carousel items -->
        <div class="carousel-inner">
        <?php
          $counter2 = 0;
          foreach($posts as $post) {
            setup_postdata($post);

            // Wrap every third testimonial
            if ($counter2 % 3 == 0) {
              if ($counter2 > 1) { ?>
                </div>
              </div>
              <?php
              }
              ?>
              <div class="item carousel-item <?php if ($counter2 < 1) { ?>active<?php } ?>">
                <div class="row">
            <?php
            }
            ?>
                  <?php // single testimonial ?>
                  <div class="col-lg-4">
                    <div class="testimonial__item">
                      <div class="testimonial__card">
                        <div>
                          <?php
                          $values = CFS()->get( 'rating' );
                          foreach ( $values as $key => $label ) {
                            switch ($label) {
                              case 1:
                                echo "<i class=\"icon icon-star\"></i>
                                      <i class=\"icon icon-star-o\"></i>
                                      <i class=\"icon icon-star-o\"></i>
                                      <i class=\"icon icon-star-o\"></i>
                                      <i class=\"icon icon-star-o\"></i>";
                                break;
                              case 2:
                                echo "<i class=\"icon icon-star\"></i>
                                      <i class=\"icon icon-star\"></i>
                                      <i class=\"icon icon-star-o\"></i>
                                      <i class=\"icon icon-star-o\"></i>
                                      <i class=\"icon icon-star-o\"></i>";
                                break;
                              case 3:
                                echo "<i class=\"icon icon-star\"></i>
                                      <i class=\"icon icon-star\"></i>
                                      <i class=\"icon icon-star\"></i>
                                      <i class=\"icon icon-star-o\"></i>
                                      <i class=\"icon icon-star-o\"></i>";
                                break;
                              case 4:
                                echo "<i class=\"icon icon-star\"></i>
                                      <i class=\"icon icon-star\"></i>
                                      <i class=\"icon icon-star\"></i>
                                      <i class=\"icon icon-star\"></i>
                                      <i class=\"icon icon-star-o\"></i>";
                                break;
                              case 5:
                                echo "<i class=\"icon icon-star\"></i>
                                      <i class=\"icon icon-star\"></i>
                                      <i class=\"icon icon-star\"></i>
                                      <i class=\"icon icon-star\"></i>
                                      <i class=\"icon icon-star\"></i>";
                                break;
                            }
                          }
                          ?>
                          <?php echo CFS()->get( 'review' ); ?>
                        </div>
                        <div class="text-right">
                          <a href="<?php echo CFS()->get( 'social_link' ); ?>" target="_blank" rel="nofollow">
                            <i class="icon icon-google-plus"></i>
                          </a>
                        </div>
                      </div>

                      <div class="testimonial__bottom d-flex align-items-center">
                        <div class="testimonial__avatar" style="background-image: url('<?php echo CFS()->get( 'foto' ); ?>')"></div>
                        <div class="testimonial__info">
                          <div class="testimonial__name"><?php echo CFS()->get( 'name' ); ?></div>
                          <div class="testimonial__date">a year ago</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php // End single testimonial ?>
          <?php
          $counter2++;
          } ?>
                </div>
              </div>
          <?php // End Wrap every third testimonial ?>
        </div>

        <!-- Carousel controls -->
        <a class="carousel-control carousel-control-prev" href="#testimonialsCarousel" role="button" data-slide="prev">
          &lt;
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control carousel-control-next" href="#testimonialsCarousel" role="button" data-slide="next">
          &gt;
          <span class="sr-only">Next</span>
        </a>
        <?php wp_reset_postdata(); ?>
      </div>
    </div>
  </div>
</section>
<!-- End Testimonials section -->
