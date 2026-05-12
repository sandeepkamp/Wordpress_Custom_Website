<?php /* Template Name: for-parents*/ ?>
<?php get_header(); ?>
<?php $forParentsimage = get_the_post_thumbnail_url();?>
<section class="banner inner_banner">
   <div class="banner-img-container" style="background:url('<?php echo $forParentsimage; ?>')">
      <!-- <img src="images/Image-for-parents-banner.png" alt=""> -->
      <div class="banner-overlay"></div>
   </div>
</section>
<div class="parent-div light-mode">
   <section class="inner-page-section">
      <div class="container-fluid ">
         <div class="row pr-lg-0">
            <div class="col-lg-6 div-with-bar light-mode">
               <?php the_field('header_section'); ?>
            </div>
            <div class="col-lg-5">
               <div class="section-img-container">
                  <img src="<?php echo get_template_directory_uri().'/assets/images/Image-parents-inner-img-1.png' ?>" alt="" class="img-fluid">
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="inner-page-section">
      <div class="container-fluid ">
         <div class="row pr-lg-0">
            <div class="col-lg-6 section-text div-with-bar light-mode">
               <?php the_field('confidence_in_education'); ?>
            </div>
            <div class="col-lg-5">
               <div class="section-img-container">
                  <img src="<?php echo get_template_directory_uri().'/assets/images/Image-parents-inner-img-2.png' ?>" alt="" class="img-fluid">
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="inner-page-section">
      <div class="container-fluid ">
         <div class="row pr-lg-0">
            <div class="col-lg-6 div-with-bar light-mode">
               <?php the_field('high_rewards'); ?>
            </div>
            <div class="col-lg-5">
               <div class="section-img-container">
                  <img src="<?php echo get_template_directory_uri().'/assets/images/Image-for-teachers-section-2.png' ?>" alt="" class="img-fluid">
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="inner-page-section">
      <div class="container-fluid ">
         <div class="row pr-lg-0">
            <div class="col-lg-6 div-with-bar light-mode">
               <?php the_field('low_risk'); ?>
            </div>
            <div class="col-lg-5 mb-25">
               <div class="section-img-container">
                  <img src="<?php echo get_template_directory_uri().'/assets/images/Image-parents-inner-img-4.png' ?>" alt="" class="img-fluid">
               </div>
            </div>
         </div>
      </div>
   </section>
</div>
<div class="parent-div dark-mode">
   <section class="inner-page-section">
      <div class="container-fluid ">
         <div class="row pr-lg-0">
            <div class="col-lg-6 div-with-bar dark-mode">
               <?php the_field('for_child'); ?>
            </div>
            <div class="col-lg-5">
               <div class="section-img-container">
                  <img src="<?php echo get_template_directory_uri().'/assets/images/Image-parents-inner-img-5.png' ?>" alt="" class="img-fluid">
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="inner-page-section">
      <div class="container-fluid ">
         <div class="row pr-lg-0">
            <div class="col-lg-6 section-text div-with-bar dark-mode">
               <?php the_field('engaging_learning'); ?>
            </div>
            <div class="col-lg-5">
               <div class="section-img-container">
                  <img src="<?php echo get_template_directory_uri().'/assets/images/Image-parents-inner-img-6.png' ?>" alt="" class="img-fluid">
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="inner-page-section">
      <div class="container-fluid ">
         <div class="row pr-lg-0">
            <div class="col-lg-6 section-text div-with-bar dark-mode">
               <?php the_field('scholarship'); ?>
            </div>
            <div class="col-lg-5">
               <div class="section-img-container">
                  <img src="<?php echo get_template_directory_uri().'/assets/images/Image-parents-inner-img-7.png' ?>" alt="" class="img-fluid">
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="inner-page-section">
      <div class="container-fluid ">
         <div class="row pr-lg-0">
            <div class="col-lg-6 div-with-bar dark-mode">
               <?php the_field('future_success'); ?>
            </div>
            <div class="col-lg-5">
               <div class="section-img-container">
                  <img src="<?php echo get_template_directory_uri().'/assets/images/Image-parents-inner-img-8.png' ?>" alt="" class="img-fluid">
               </div>
            </div>
         </div>
      </div>
   </section>
</div>
<?php get_footer(); ?>