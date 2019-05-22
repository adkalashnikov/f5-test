<footer class="footer">
  <div class="container">
    <div class="d-flex flex-wrap justify-content-center justify-content-lg-between">
      <div class="footer__logo-col col">
        <a href="<?php esc_url(home_url('/')); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo.png" alt="logo" class="footer__logo"/>
        </a>
        <?php echo CFS()->get( 'f_logo_text' ); ?>
      </div>

      <div class="w-100 d-md-none"></div>

      <div class="col">
        <div class="footer__title"><?php echo CFS()->get( 'f_col_2_title' ); ?></div>
        <div>
          <?php
          $loop = CFS()->get( 'f_contact_details' );
          foreach ( $loop as $row ) { ?>
            <div class="contact__item d-flex">
              <div>
                <img src="<?php echo $row['icon']; ?>" alt="icon">
              </div>
              <div>
                <?php echo $row['text']; ?>
              </div>
            </div>
            <?php
          } ?>
        </div>
      </div>

      <div class="col">
        <div class="footer__title"><?php echo CFS()->get( 'f_quick_links_title' ); ?></div>
        <div class="footer__nav">
          <?php
          $loop = CFS()->get( 'f_quick_links' );
          foreach ( $loop as $row ) { ?>
            <div class="link__item">
              <a href="<?php echo $row['link']; ?>"><?php echo $row['link_text']; ?></a>
            </div>
            <?php
          } ?>
        </div>
      </div>

      <div class="col connect__col">
        <div class="footer__title"><?php echo CFS()->get( 'f_conect_title' ); ?></div>
        <div class="d-flex flex-wrap">
          <?php
          $loop = CFS()->get( 'f_conect' );
          foreach ( $loop as $row ) { ?>
            <div class="connect__item">
              <a href="<?php echo $row['link']; ?>"><img src="<?php echo $row['icon']; ?>" alt="icon"></a>
            </div>
            <?php
          } ?>
        </div>
      </div>
    </div>
  </div>

  <div class="footer__bottom">
    <div class="container">
      © <?php echo date('Y'); ?> Lorem ipsum dolor sit amet, consectetur
    </div>
  </div>
</footer>
