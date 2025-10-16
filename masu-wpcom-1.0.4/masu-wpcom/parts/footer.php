<footer>
  <div class="container">
    <div class="footer-widgets">
      <?php
      if (has_nav_menu('footer')) {
        wp_nav_menu(array(
          'theme_location' => 'footer',
          'menu_class' => 'footer-menu'
        ));
      }
      ?>
    </div>
    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Të gjitha të drejtat e rezervuara.</p>
  </div>
  <?php wp_footer(); ?>
</footer>
</body>
</html>
