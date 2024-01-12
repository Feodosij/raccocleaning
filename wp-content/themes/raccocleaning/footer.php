<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package raccocleaning
 */

?>

	<footer class="footer" id="contact">
        <div class="container">
          <div class="footer__container">
            <a href="" class="footer__logo header__logo">
              <img src="<?php echo get_template_directory_uri(); ?>/src/static/app/img/logo-hover.svg" class="header__logo-hover" alt="RaccoCleaning">
              <img src="<?php echo get_template_directory_uri(); ?>/src/static/app/img/logo-white.svg" alt="RaccoCleaning">
            </a>
            <div class="footer__block">
              <nav class="footer__nav">
                <ul>
                  <li><a href="#services">Our Services</a></li>
                  <li><a href="#faq">FAQ</a></li>
                </ul>
              </nav>
            </div>
            <div class="footer__block">
              <div class="footer__title">
                <h2>Our in social media</h2>
              </div>
              <div class="socials">
                <a href="">
                  <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.46395 8.83197C6.41595 8.83197 5.35995 8.83197 4.87995 8.83197C4.62395 8.83197 4.54395 8.73597 4.54395 8.49597C4.54395 7.85597 4.54395 7.19997 4.54395 6.55997C4.54395 6.30397 4.63995 6.22397 4.87995 6.22397H6.46395C6.46395 6.17597 6.46395 5.24797 6.46395 4.81597C6.46395 4.17597 6.57595 3.56797 6.89595 3.00797C7.23195 2.43197 7.71195 2.04797 8.31995 1.82397C8.71995 1.67997 9.11995 1.61597 9.55195 1.61597H11.1199C11.3439 1.61597 11.4399 1.71197 11.4399 1.93597V3.75997C11.4399 3.98397 11.3439 4.07997 11.1199 4.07997C10.6879 4.07997 10.2559 4.07997 9.82395 4.09597C9.39195 4.09597 9.16795 4.30397 9.16795 4.75197C9.15195 5.23197 9.16795 5.69597 9.16795 6.19197H11.0239C11.2799 6.19197 11.3759 6.28797 11.3759 6.54397V8.47997C11.3759 8.73597 11.2959 8.81597 11.0239 8.81597C10.4479 8.81597 9.21595 8.81597 9.16795 8.81597V14.032C9.16795 14.304 9.08795 14.4 8.79995 14.4C8.12795 14.4 7.47195 14.4 6.79995 14.4C6.55995 14.4 6.46395 14.304 6.46395 14.064C6.46395 12.384 6.46395 8.87997 6.46395 8.83197Z" fill="white" />
                  </svg>
                </a>
                <a href="">
                  <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 0H3C1.35015 0 0 1.34956 0 3V9C0 10.6499 1.35015 12 3 12H9C10.6499 12 12 10.6499 12 9V3C12 1.34956 10.6499 0 9 0ZM6 8.4999C4.61909 8.4999 3.49995 7.38029 3.49995 6C3.49995 4.61909 4.61909 3.49995 6 3.49995C7.38029 3.49995 8.50005 4.61909 8.50005 6C8.50005 7.38029 7.38029 8.4999 6 8.4999ZM9.25005 3.49995C8.83544 3.49995 8.50005 3.16409 8.50005 2.74995C8.50005 2.33581 8.83544 1.99995 9.25005 1.99995C9.66466 1.99995 10 2.33581 10 2.74995C10 3.16409 9.66466 3.49995 9.25005 3.49995Z" fill="white" />
                  </svg>
                </a>
                <a href="">
                  <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.384 4.03205C13.904 4.24005 13.408 4.38405 12.88 4.44805C13.424 4.12805 13.84 3.61605 14.032 2.99205C13.52 3.29605 12.96 3.50405 12.368 3.63205C11.888 3.12005 11.2 2.80005 10.448 2.80005C8.99198 2.80005 7.82398 3.98405 7.82398 5.42405C7.82398 5.63205 7.83998 5.82405 7.88798 6.01605C5.71198 5.92005 3.79198 4.86405 2.49598 3.28005C1.56798 4.94405 2.60798 6.32005 3.29598 6.78405C2.87998 6.78405 2.46398 6.65605 2.11198 6.46405C2.11198 7.76005 3.02398 8.83205 4.20798 9.07205C3.95198 9.15205 3.37598 9.20005 3.02398 9.12005C3.35998 10.16 4.33598 10.928 5.47198 10.944C4.57598 11.648 3.26398 12.208 1.58398 12.032C2.75198 12.784 4.12798 13.216 5.61598 13.216C10.448 13.216 13.072 9.21605 13.072 5.76005C13.072 5.64805 13.072 5.53605 13.056 5.42405C13.6 5.02405 14.048 4.56005 14.384 4.03205Z" fill="white" />
                  </svg>
                </a>
              </div>
            </div>
            <div class="footer__block">
              <div class="footer__title">
                <h2>Contact</h2>
              </div>
              <address>Racon cleaning.<br> 1330 W Irving Park Rd, Bensenville IL</address>
              <p class="developed-by">Development and support <a href="https://sheep.fish/en/" target="_blank">SheepFish</a></p>
            </div>
          </div>
        </div>
      </footer>
	<!-- <footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'raccocleaning' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'raccocleaning' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'raccocleaning' ), 'raccocleaning', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div>
	</footer> -->
</div>

<?php wp_footer(); ?>

</body>
</html>
