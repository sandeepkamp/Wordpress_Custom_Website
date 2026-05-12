<?php /* Template Name: application-for-student*/ ?>
<?php get_header();  ?>
<?php $applicationForStudentsimage = get_the_post_thumbnail_url();?>
<section class="banner inner_banner">
   <div class="banner-img-container" style="background:url('<?php echo $applicationForStudentsimage; ?>')">
      <!-- <img src="images/Image-application-parents-banner.png" alt="" class="img-fluid"> -->
      <div class="banner-overlay"></div>
   </div>
</section>
<section class="application">
   <div class="container div-with-bar light-mode">
      <?php the_field('for_students'); ?>
   </div>
</section>
<?php  get_footer();  ?>