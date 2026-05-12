<?php /* Template Name: terms-condition*/ ?>
<?php get_header(); ?>
<?php $termsimage = get_the_post_thumbnail_url();?>
<section class="banner inner_banner">
   <div class="banner-img-container" style="background:url('<?php echo $termsimage; ?>')">
      <!-- <img src="images/Image-for-parents-banner.png" alt=""> -->
      <div class="banner-overlay"></div>
   </div>
</section>
<section class="no">
   <div class="container div-with-bar light-mode">
   <?php the_field('header_term_section'); ?>
      <!-- <p>
         Apply to become a nominator <a href="info/GRaduatereport9-28-2021.pdf" target="_blank" class="orange-text"><span>HERE.</span></a>  or Nominate a student <a href="" class="orange-text"><span>HERE.</span></a>
         </p> -->
   </div>
</section>

</div>
<?php get_footer(); ?>