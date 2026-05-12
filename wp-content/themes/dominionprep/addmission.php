
<?php /* Template Name: Addmission */ ?>
<?php get_header(); ?>
<?php $admissionimage = get_the_post_thumbnail_url();?>
<section class="banner inner_banner">
   <div class="banner-img-container" style="background:url('<?php echo $admissionimage; ?>')">
      <!-- <img src="images/admission-banner.png" alt=""> -->
      <div class="banner-overlay"></div>
   </div>
</section>
<div class="parent-div light-mode admission_one">
   <section class="inner-page-section">
      <div class="container ">
         <div class="row pr-lg-0">
            <div class="col-xl-12 col-lg-12 col-md-9 div-with-bar light-mode">
               <?php the_field('admission_process'); ?>
            </div>
         </div>
      </div>
   </section>
</div>
<section class="watch inner_watch">
   <div class="container div-with-bar light-mode">
      <div class="cascade-slider_container" id="cascade-slider">
         <?php
            $args = array( 'post_type' => 'Semester', 'posts_per_page' => 10 );
            $the_query = new WP_Query( $args );
            ?>
         <?php 
            if ( $the_query->have_posts() ) :
            while ( $the_query->have_posts() ) : $the_query->the_post(); 
            ?>
         <div class="cascade-slider_slides">
            <div class="cascade-slider_item">
               <div class="video-container">
                  <div class="image-container">
                  <?php $semesterimage = get_the_post_thumbnail_url();?>
                     <img class="img-fluid" src="<?php echo $semesterimage; ?>" alt=""> 
                  </div>
                  <div class="video-text">
                     <h6><?php the_title(); ?></h6>
                     <p><?php the_content(); ?></p>
                  </div>
               </div>
            </div>
         </div>
         <?php endwhile;
            wp_reset_postdata(); 
            ?>
         <?php else:  ?>
         <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
         <?php 
            endif; 
            ?>
         <span class="cascade-slider_arrow cascade-slider_arrow-left" data-action="prev"></span>
         <span class="cascade-slider_arrow cascade-slider_arrow-right" data-action="next" id="next"></span>
      </div>
   </div>
</section>
<div class="parent-div dark-mode admission_three">
   <section class="inner-page-section">
      <div class="container-fluid ">
         <div class="row">
            <div class="col-xl-6 col-lg-11 col-md-9 section-text div-with-bar dark-mode pdb-0">
               <?php the_field('application_process'); ?>
            </div>
            <div class="col-xl-5 col-lg-11 col-md-9">
               <div class="section-img-container">
                  <img src="<?php echo get_template_directory_uri().'/assets/images/application-process.png' ?>" alt="" class="img-fluid">
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-11">
               <?php the_field('inner_section'); ?>
            </div>
         </div>
         </div>
      </div>
      
         
           
         
      
   </section>
</div>
<section class="covid19">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <?php the_field('bottom_section'); ?>
         </div>
      </div>
   </div>
</section>
<section class="inner-page-section light-div admission_two">
   <div class="container-fluid">
      <div class="row ps-lg-0 align-items-center">
         <div class="col-xl-5 col-lg-11 col-md-9">
            <div class="section-img-container">
               <img src="<?php echo get_template_directory_uri().'/assets/images/admission-announcement.png' ?>" alt="" class="img-fluid">
            </div>
         </div>
         <div class="col-xl-6 col-lg-11 col-md-9 div-with-bar light-mode dominion_prep_text adPdl-25">
            <?php the_field('admission_announcement'); ?>
         </div>
      </div>
   </div>
</section>
<?php  get_footer();  ?>