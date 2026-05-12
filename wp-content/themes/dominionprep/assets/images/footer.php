<footer>
   <div class="newslatter">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 d-flex align-items-center flex-wrap">
               <h2>Notify Me</h2>
               <form method="post" action="https://dominionprep.org/?na=s" target="_blank">
                  <input type="hidden" name="nlang" value="">
                  <input class="form-control" type="email" name="ne" id="tnp-1" placeholder="Enter your email address" required>
                  <button class="white-button" type="submit">Submit</button>
                  <!-- <?php echo do_shortcode( ' [email-subscribers-form id="1"] ')?> -->
                  <!-- <?php echo do_shortcode( '[acymailing_form_shortcode id="1"] ')?> -->
                  <!-- <div class="tnp-field tnp-field-button"><input class="tnp-submit" type="submit" value="Submit" ></div> -->
               </form>
            </div>
         </div>
      </div>
   </div>
   <div class="container">
      <div class="d-flex justify-content-between footer-top">
         <a class="navbar-brand" href="https://dominionprep.org/">
            <div class="logo d-md-block d-none">
               <img src="<?php echo get_template_directory_uri().'/assets/images/Logo-Taglinescroll.svg' ?>" alt="" class="img-fluid">
            </div>
            <div class="logo d-md-none d-block" >
               <img src="<?php echo get_template_directory_uri().'/assets/images/logo-horizontal.png' ?>" alt="" class="img-fluid">
            </div>
         </a>
         <ul class="d-flex align-items-lg-center align-items-sm-center footer-right">
             <!-- <?php wp_nav_menu( array( 'theme_location' => 'max_mega_menu_2' ) ); ?> -->
             <?php
                  wp_nav_menu( array( 
                  'theme_location' => 'my-custom-menu', 
                  'container_class' => 'custom-menu-class' ) ); 
                  ?>
                   <!-- <li><a href="faq.php"><span class="">FAQ</span></a></li>
                    <li><a href="privacy-policy.php"><span class="">Privacy Policy</span></a></li>
                    <li><a href="terms-and-conditions.php"><span class="">Terms & Conditions</span></a></li> -->
         </ul>
      </div>
   </div>
   <div class="d-flex justify-content-between footer-bottom">
       <div class="container">
           <div class="row">
               <div class="col-lg-12">
                   <div class="d-flex justify-content-between align-items-center">
                   <ul class="d-flex align-items-center social-icons">
                        <li>
                            <p>Follow us</p>
                        </li>
                        <li>
                            <a href="<?php echo html_entity_decode( get_option( 'facebook' ) ); ?>"><img src="<?php echo get_template_directory_uri().'/assets/images/Icon-Facebook.svg'; ?>" alt=""></a>
                        </li>
                        <li>
                            <a href="<?php echo html_entity_decode( get_option( 'linkedin' ) ); ?>"><img src="<?php echo get_template_directory_uri().'/assets/images/Icon-linkdin.svg'; ?>" alt=""></a>
                        </li>
                        <!-- <li>
                            <a href=""><img src="<?php echo get_template_directory_uri().'/assets/images/Icon-Twitter.svg'; ?>" alt=""></a>
                        </li> -->
                        <!-- <li>
                            <a href=""><img src="<?php echo get_template_directory_uri().'/assets/images/Icon-Google plus.svg'; ?>" alt=""></a>
                        </li> -->
                        <li>
                            <a href="<?php echo html_entity_decode( get_option( 'instagram' ) ); ?>"><img src="<?php echo get_template_directory_uri().'/assets/images/Icon-Instagram.svg'; ?>" alt=""></a>
                        </li>
                    </ul>
                    <p class="copyright-text">Copyright 2022 @Dominion Prep</p>
                   </div>
               </div>
           </div>
       </div>
   </div>
</footer>
<!-- <script src="js/jquery-1.12.3.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/assets/js/jquery-1.12.3.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/assets/js/owl.carousel.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>//assets/js/cascade-slider.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/assets/js/jquery.themepunch.plugins.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/assets/js/jquery.themepunch.revolution.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/assets/js/custom.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/assets/js/lightcase.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/assets/js/slick.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/assets/js/utils.js"></script>
<?php wp_footer(); ?>
</body>
</html>
