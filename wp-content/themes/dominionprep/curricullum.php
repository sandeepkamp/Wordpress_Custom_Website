<?php /* Template Name: Curriculum */ ?>

<?php get_header(); ?>
<?php $curricullumimage = get_the_post_thumbnail_url();?>
<section class="banner">
<div class="banner-img-container" style="background:url('<?php echo $curricullumimage; ?>')">
      <!-- <img src="images/curriculum-banner.png" alt=""> -->
      <div class="banner-overlay"></div>
   </div>
</section>
<div class="parent-div light-mode curriculum-one">
   <section class="inner-page-section carculRow">
      <div class="container-fluid ">
         <div class="row pr-lg-0">
            <div class="col-lg-6 section-text div-with-bar light-mode">
               <?php the_field('header_section'); ?>
            </div>
            <div class="col-lg-5">
               <div class="section-img-container">
                  <a href="https://dominionprep.org/wp-content/uploads/2022/07/latest-DP_C.pdf" target="_blank"><img src="<?php echo get_template_directory_uri().'/assets/images/curriculum01.jpg' ?>" alt="" class="img-fluid"></a>
               </div>
            </div>
         </div>
      </div>
      <div class="container-fluid">
         <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-11 col-md-12 section-text our-curriculum-text">
               <?php the_field('inner_section'); ?>
            </div>
         </div>
      </div>
   </section>
</div>
<section class="our-team light-mode">
   <div class="container">
      <div class="row curriculum">
         <?php
            $args = array( 'post_type' => 'Curriculum', 'posts_per_page' => 3 );
            $the_query = new WP_Query( $args );
            ?>
         <?php 
            if ( $the_query->have_posts() ) :
            while ( $the_query->have_posts() ) : $the_query->the_post(); 
            ?>
         <div class="item col-lg-4 col-md-12 col-sm-12">
            <div class="team-cards">
               <div class="card-img">
                  <div class="image-wrap">
                     <?php $curriculluminideimage = get_the_post_thumbnail_url();?>
                     <img class="img-fluid" src="<?php echo $curriculluminideimage; ?>" alt=""> 
                  </div>
               </div>
               <div class="card-text">
                  <?php the_content(); ?>
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
      </div>
   </div>
</section>
<section class="inner-page-section dark-div enquery_faq curriculum-offer">
   <div class="container-fluid ">
      <div class="row ps-lg-0">
         <div class="col-xl-5 col-lg-11 col-md-9">
            <div class="section-img-container">
               <img src="<?php echo get_template_directory_uri().'/assets/images/college-freshman.png' ?>" alt="" class="img-fluid">
            </div>
         </div>
         <div class="col-xl-6 col-lg-11 col-md-9 div-with-bar dark-mode dominion_prep_text">
            <?php the_field('bottom_section'); ?>
         </div>
      </div>
   </div>
</section>

<?php  get_footer();  ?>