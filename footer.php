<?php
/**
 * Footer For Deserve Theme.
 */
?>

<?php  $deserve_options = get_option( 'deserve_theme_options' ); ?>

<footer class="main_footer footer-menu">
 
<div class="col-md-12 footer">
<div class="container">
  <div class="col-md-6 rights">
      <p>All Rights Reserved.&copy; 2016 Saradeuz</p>
  </div>

  <div class="col-md-6 user">
      <p>User Experience by Rillusion</p>
  </div>
</div>
</div>
   
</footer>
</main>
<?php if ( has_nav_menu( 'primary' ) ) : ?>
  <nav id="site-navigation" class="cd-3d-nav-container" role="navigation"">
    <?php
      wp_nav_menu( array(
        'theme_location' => 'primary',
        'menu_class'     => 'cd-3d-nav',
       ) );
    ?>
<span class="cd-marker color-1"></span> 
  </nav><!-- .main-navigation -->
<?php endif; ?>
<!--
<nav class="cd-3d-nav-container">
    <ul class="cd-3d-nav">
      <li class="cd-selected home">
        <a href="<?php echo esc_url(home_url('')); ?>/home">
Home</a>
      </li>

      <li class="about">

        <a href="<?php echo esc_url(home_url('')); ?>/about">About US</a>
      </li>

      <li class="dropdown">
    <a href="#" class="dropbtn">Project&nbsp;&nbsp;&nbsp;&#9660;</a>
    <div class="dropdown-content">
      <a href="<?php echo esc_url(home_url('')); ?>/eden">EDEN</a>
      <a href="<?php echo esc_url(home_url('')); ?>/haven">Haven</a>
      <a href="<?php echo esc_url(home_url('')); ?>/paradise">Paradise</a>
      <a href="<?php echo esc_url(home_url('')); ?>/acropolis/">Acropolis</a>
      <a href="<?php echo esc_url(home_url('')); ?>/ecstasy">Ecstasy</a>


    </div>
  </li>

      <li class="dropdown">
    <a href="#" class="dropbtn">Tools&nbsp;&nbsp;&nbsp;&#9660;</a>
    <div class="dropdown-content">
      <a href="#">Buyer's Guide</a>
      <a href="#">Vasthu Tips</a>
      <a href="#">EMI Calculator</a>
    </div>
  </li>

      <li class="joint">
        <a href="#">Joint Venture</a>
      </li>

      <li class="contact">
        <a href="<?php echo esc_url(home_url('')); ?>/contact">Contact us</a>
      </li>

    </ul> 

    <span class="cd-marker color-1"></span> 
  </nav> -->
<!-- .cd-3d-nav-container -->
<!--paradise header fixer start here-->


<!--paradise header fixer end here-->

<?php wp_footer(); ?>



<script>
$('.counter').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});
</script>
</body>
</html>
