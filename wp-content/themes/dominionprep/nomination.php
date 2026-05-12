<?php /* Template Name: Nomination */ ?>
<?php get_header(); ?>
<?php $nominationimage = get_the_post_thumbnail_url();?>
<section class="banner">
   <div class="banner-img-container" style="background:url('<?php echo $nominationimage; ?>') ">
      <!-- <img src="images/Image-nomination-banner-img.png" alt=""> -->
      <div class="banner-overlay"></div>
   </div>
</section>
<section class="nomination">
   <div class="container div-with-bar light-mode">
      <?php the_field('nomination_process'); ?>
      <!-- <p>
         Apply to become a nominator <a href="info/GRaduatereport9-28-2021.pdf" target="_blank" class="orange-text"><span>HERE.</span></a>  or Nominate a student <a href="" class="orange-text"><span>HERE.</span></a>
         </p> -->
   </div>
</section>
<?php get_footer(); ?>