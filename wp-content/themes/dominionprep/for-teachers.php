<?php /* Template Name: for-teachers*/ ?>
<?php get_header(); ?>
<?php $forTeacherimage = get_the_post_thumbnail_url();?>
<section class="banner">
   <div class="banner-img-container" style="background:url('<?php echo $forTeacherimage; ?>') no-repeat">
      <!-- <img src="images/teachers-banner.png" alt="">       -->
      <div class="banner-overlay"></div>
   </div>
</section>
<div class="parent-div light-mode">
   <section class="inner-page-section">
      <div class="container-fluid ">
         <div class="row pr-lg-0">
            <div class="col-lg-12 col-xl-6 section-text div-with-bar light-mode">
               <?php the_field('header_section'); ?>
            </div>
            <div class="col-lg-12 col-xl-5">
               <div class="section-img-container">
                  <img src="<?php echo get_template_directory_uri().'/assets/images/Image-for-teachers-section-1.png' ?>" alt="" class="img-fluid">
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="inner-page-section">
      <div class="container-fluid ">
         <div class="row pl-lg-0">
            <div class="col-lg-12 col-xl-6 section-text div-with-bar light-mode">
               <?php the_field('financial_section'); ?>
            </div>
            <div class="col-lg-12 col-xl-5">
               <div class="section-img-container">
                  <img src="<?php echo get_template_directory_uri().'/assets/images/Image-for-teachers-section-6.png' ?>" alt="" class="img-fluid">
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="inner-page-section">
      <div class="container-fluid ">
         <div class="row pr-lg-0">
            <div class="col-lg-12 col-xl-6 section-text div-with-bar light-mode ">
               <?php the_field('motivated_students'); ?>
            </div>
            <div class="col-lg-12 col-xl-5">
               <div class="section-img-container">
                  <img src="<?php echo get_template_directory_uri().'/assets/images/Image-for-teachers-section-3.png' ?>" alt="" class="img-fluid">
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="inner-page-section">
      <div class="container-fluid ">
         <div class="row pl-lg-0">
            <div class="col-lg-12 col-xl-6 section-text div-with-bar light-mode">
               <?php the_field('job_freedom'); ?>
            </div>
            <div class="col-lg-12 col-xl-5">
               <div class="section-img-container">
                  <img src="<?php echo get_template_directory_uri().'/assets/images/Image-for-teachers-section-4.png' ?>" alt="" class="img-fluid">
               </div>
            </div>
         </div>
      </div>
   </section>
</div>
<?php get_footer(); ?>