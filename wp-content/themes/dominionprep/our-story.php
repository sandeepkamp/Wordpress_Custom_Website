<?php /* Template Name: our-story*/ ?>
<?php get_header(); ?>
<?php $ourStoryimage = get_the_post_thumbnail_url();?>
<div class="ourStory">
<section class="banner inner_banner">
   <div class="banner-img-container" style="background:url('<?php echo $ourStoryimage; ?>') ">
      <!-- <img src="images/Image-our-methods-banner.png" alt=""> -->
      <div class="banner-overlay"></div>
   </div>
</section>
<div class="parent-div light-mode">
   <section class="inner-page-section">
      <div class="container-fluid ">
         <div class="row pr-lg-0">
            <div class="col-xl-6 col-lg-11 col-md-9 div-with-bar light-mode">
               <?php the_field('header_section'); ?>
            </div>
            <div class="col-xl-5 col-lg-11 col-md-9">
               <div class="section-img-container">
                  <img src="<?php echo get_template_directory_uri().'/assets/images/Image-our-methods-inner-img-1.png' ?>" alt="" class="img-fluid">
               </div>
            </div>
         </div>
         <div class="container">
         <div class="row pr-lg-0">
            <div class="col-xl-12 col-lg-12 col-md-12">
               <?php the_field('center_section'); ?>
            </div>
         </div>
      </div>
</div>
   </section>
</div>
<section class="our-approach grey-background">
   <div class="container div-with-bar light-mode">
      <h2 class="section-heading">Our <br><span>Approach</span>
      </h2>
      <div class="row benefits-inner-div">
         <div class="col-lg-4 col-md-12 col-sm-12 semester-div">
            <img class="semester-icon" src="<?php echo get_template_directory_uri().'/assets/images/Icon-what-we-do.svg' ?>" alt="">
            <?php the_field('what_we_do'); ?>
         </div>
         <div class="col-lg-4 col-md-12 col-sm-12 semester-div">
            <img class="semester-icon" src="<?php echo get_template_directory_uri().'/assets/images/Icon-how-we-do.svg' ?>" alt="">
            <?php the_field('how_we_do'); ?>
         </div>
         <div class="col-lg-4 col-sm-12 semester-div">
            <img class="semester-icon" src="<?php echo get_template_directory_uri().'/assets/images/Icon-why-we-do.svg'?>" alt="">
            <?php the_field('why_we_do'); ?>
         </div>
      </div>
   </div>
</section>
<section class="inner-page-section dark-div curriculum-offer">
   <div class="container-fluid ">
      <div class="row ps-lg-0">
         <div class="col-xl-5 col-lg-11 col-md-9">
            <div class="section-img-container">
               <img src="<?php echo get_template_directory_uri().'/assets/images/Image-our-methods-inner-img-2.png' ?>" alt="" class="img-fluid">
            </div>
         </div>
         <div class="col-xl-6 col-lg-11 col-md-9 div-with-bar dark-mode">
            <?php the_field('why_different'); ?>
         </div>
      </div>
   </div>
</section>
<section class="value-propositions our-approach grey-background">
   <div class="container div-with-bar light-mode">
      <?php the_field('value_preposition'); ?>
      <div class="row benefits-inner-div">
         <div class="col-lg-4 col-md-12 col-sm-12 semester-div">
            <img class="semester-icon" src="<?php echo get_template_directory_uri().'/assets/images/Icon-for-students.svg' ?>" alt="">
            <?php the_field('for_student'); ?>
         </div>
         <div class="col-lg-4 col-md-12 col-sm-12 semester-div">
            <img class="semester-icon" src="<?php echo get_template_directory_uri().'/assets/images/Icon-for-teachers.svg' ?>" alt="">
            <?php the_field('for_teachers'); ?>
         </div>
         <div class="col-lg-4 col-sm-12 semester-div">
            <img class="semester-icon" src="<?php echo get_template_directory_uri().'/assets/images/Icon-for-parents.svg'?>" alt="">
            <?php the_field('for_parents'); ?>
         </div>
      </div>
   </div>
</section>
<section class="brand-personality">
   <div class="container">
      <?php the_field('brand_personality'); ?>
   </div>
</section>
<section class="vision-and-mission grey-background">
   <div class="container div-with-bar light-mode">
   <?php the_field('vision_and_mission'); ?>
   <div class="row benefits-inner-div">
      <div class="col-lg-6 col-md-6 col-sm-12">
         <div class="semester-div">
            <img class="semester-icon" src="<?php echo get_template_directory_uri().'/assets/images/Icon-vission.svg'?>" alt="">
            <?php the_field('vision'); ?>
         </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
         <div class="semester-div">
            <img class="semester-icon" src="<?php echo get_template_directory_uri().'/assets/images/Icon-mission.svg'?>" alt="">
            <?php the_field('mission'); ?>
         </div>
      </div>
   </div>
</section>
</div>
<?php get_footer(); ?>