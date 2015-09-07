<?php
/**
 * Footer
 *
 * PHP version 5
 *
 * @category Template
 * @package  Quai10
 * @author   Pierre Rudloff <contact@rudloff.pro>
 * @author   Damien Senger <hi@hiwelo.co>
 * @license  GPL http://www.gnu.org/licenses/gpl.html
 * @link     https://quai10.org/
 */
?>
  <footer class="footer-box">
    <div class="footer-container grid-1-4 container">
      <div class="footer-logo">
        <svg role="img" aria-labelledby="title-logo-quai10">
          <use xlink:href="#icon-logo-quai10"></use>
        </svg>
      </div><!-- .footer-logo -->
      <div class="footer-content grid-5">
        <div class="footer-col">
            <?php if (false) : ?>
          <h5 class="footer-title"><a class="no-style" href="#">À propos</a></h5>
          <ul class="footer-list">
            <li><a class="no-style" href="#">L'association</a></li>
            <li><a class="no-style" href="#">Les lieux</a></li>
            <li><a class="no-style" href="#">Horaires et prix</a></li>
          </ul><!-- .footer-list -->
            <?php
endif; ?>
        </div><!-- .footer-col -->
        <div class="footer-col">
            <?php if (false) : ?>
          <h5 class="footer-title"><a class="no-style" href="#">Le coworking</a></h5>
          <ul class="footer-list">
            <li><a class="no-style" href="#">Formules</a></li>
            <li><a class="no-style" href="#">Services</a></li>
            <li><a class="no-style" href="#">FAQ</a></li>
          </ul><!-- .footer-list -->
            <?php
endif; ?>
        </div><!-- .footer-col -->
        <div class="footer-col">
          <h5 class="footer-title">
              <a class="no-style" href="#">Devenir membre</a>
          </h5>
            <?php
            wp_nav_menu(
                array(
                    'menu'=>'Devenir membre',
                    'items_wrap'=>'<ul id="%1$s" class="footer-list %2$s">%3$s</ul>'
                )
            );
        ?>
        </div><!-- .footer-col -->
        <div class="footer-col footer-col-newsletter">
          <h5 class="footer-title"><a class="no-style" href="#">Newsletter</a></h5>
          <form action="#" method="post">
            <div class="icon-email">
              <input type="email" placeholder="Renseigne ton email"
                required value="">
              <input type="submit" value="OK">
            </div><!-- .icon-email -->
          </form>
        </div><!-- .footer-col -->
      </div><!-- .footer-content -->
    </div><!-- .footer-container -->
  </footer><!-- .footer-box -->
    <?php wp_footer(); ?>
</body>
</html>
