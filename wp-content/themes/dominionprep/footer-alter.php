<footer>
    <div class="container">
        <div class="d-flex justify-content-between align-items-center footr-multi">
            <div class="footr-logo"><img src="<?php echo get_stylesheet_directory_uri();?>/asset/Images/Logo.png" alt="logo" class="img-fluid"></div>
            <div class="footr-txt">
                <p>Copyright 2022 @Dominion Prep</p>
            </div>
        </div>
    </div>
</footer>
<!-- <script src="js/jquery-1.12.3.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<!-- <script src="<?php echo get_stylesheet_directory_uri();?>/assets/js/jquery-1.12.3.min.js"></script> -->
<script src="<?php echo get_stylesheet_directory_uri();?>/assets/js/owl.carousel.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/assets/js/cascade-slider.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/assets/js/jquery.themepunch.plugins.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/assets/js/jquery.themepunch.revolution.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/assets/js/custom.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/assets/js/lightcase.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/assets/js/slick.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/assets/js/utils.js"></script>
<script>
jQuery(document).on('click', '.wpcf7-submit', function(e) {
    if (jQuery('.ajax-loader').hasClass('is-active')) {
        e.preventDefault();
        return false;
    }
});
</script>
<?php wp_footer(); ?>
</body>

</html>
