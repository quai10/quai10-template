<?php
/**
 * Footer
 *
 * @category Template
 * @package  Quai10
 * @author   Pierre Rudloff <contact@rudloff.pro>
 * @author   Damien Senger <hi@hiwelo.co>
 * @license  GPL http://www.gnu.org/licenses/gpl.html
 * @link     https://quai10.org/
 * */
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
        <?php endif; ?>
      </div><!-- .footer-col -->
      <div class="footer-col">
        <?php if (false) : ?>
          <h5 class="footer-title"><a class="no-style" href="#">Le coworking</a></h5>
          <ul class="footer-list">
            <li><a class="no-style" href="#">Formules</a></li>
            <li><a class="no-style" href="#">Services</a></li>
            <li><a class="no-style" href="#">FAQ</a></li>
          </ul><!-- .footer-list -->
        <?php endif; ?>
      </div><!-- .footer-col -->
      <div class="footer-col">
        <h5 class="footer-title">Devenir membre</h5>
        <?php
          wp_nav_menu(
            array(
              'theme_location' => 'footer3',
              'menu_class' => 'footer-list'
            )
          );
        ?>
      </div><!-- .footer-col -->
      <div class="footer-col footer-col-newsletter">
        <h5 class="footer-title">Newsletter</h5>
        <?php
        echo '<form action="https://quai10.us10.list-manage.com/subscribe/post?'.
          'u=699bad1c5b054cbdff43d84a8&amp;id=384dd5ed71" method="post">';
          ?>
          <div class="icon-email">
            <input name="EMAIL" type="email" placeholder="Renseigne ton email"
            required value="">
            <!-- real people should not fill this in and expect good things -
            do not remove this or risk form bot signups-->
            <div style="position: absolute; left: -5000px;">
              <input type="text" name="b_699bad1c5b054cbdff43d84a8_384dd5ed71"
              tabindex="-1" value="">
            </div>
            <input type="submit" value="OK" name="subscribe">
          </div><!-- .icon-email -->
        </form>
      </div><!-- .footer-col -->
    </div><!-- .footer-content -->
  </div><!-- .footer-container -->
</footer><!-- .footer-box -->
<?php wp_footer(); ?>
</body>
</html>
