<footer role="contentinfo" class="footer">
  <div class="footer-Widgets">
    <div class="container-fluid">
      <div class="row">
        <?php if (is_active_sidebar('footer-widget-area')) : ?>
          <div class="col-md-4">
            <?php dynamic_sidebar('footer-widget-area'); ?>
          </div>
        <?php endif; ?>
        <div class="col-md-4">
          <?php if (is_active_sidebar('footer-widget-area-2')) : ?>
            <?php dynamic_sidebar('footer-widget-area-2'); ?>
          <?php endif; ?>
        </div>
        <div class="col-md-4">
          <?php if (is_active_sidebar('footer-widget-area-3')) : ?>
            <?php dynamic_sidebar('footer-widget-area-3'); ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  <p class="footer-Copyright">
    <small>&copy; 2021 Kuroneko Hair Sample </small>
  </p>
</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>