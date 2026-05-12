<?php /* Template Name: main-page*/ ?>

<?php get_header();  ?>
<?php $Mainimage = get_the_post_thumbnail_url();?>

 <section class="banner">
        <div class="banner-img-container" style="background-image: url('<?php echo $Mainimage; ?>');?>);">
            <div class="banner-overlay"></div>
        </div>
        <div class="container">
            <div class="align-items-center flex-wrap justify-content-evenly banner-text-container">
               <?php the_field('top_heading'); ?>
            </div>
            <div class="align-items-center justify-content-start banner-list-container">
               <?php the_field('method_list_section'); ?>
            </div>
        </div>
    </section>
    <section class="key-benefits">
        <div class="container div-with-bar light-mode">
        <?php the_field('key_benefit_section'); ?>
            <div class="row benefits-inner-div">
                <div class="col-lg-4 col-md-12 col-sm-12 semester-div">
                    <img class="semester-icon" src="<?php echo get_template_directory_uri().'/assets/images/Icon-accl-learning.svg' ?>" alt="">
                    <?php the_field('accelerate_learning'); ?>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 semester-div">
                    <img class="semester-icon" src="<?php echo get_template_directory_uri().'/assets/images/Icon-high-achvmnt.svg' ?>" alt="">
                    <?php the_field('better_quality_learning'); ?>
                </div>
                <div class="col-lg-4 col-sm-12 semester-div">
                    <img class="semester-icon" src="<?php echo get_template_directory_uri().'/assets/images/Icon-xetraordinary.svg' ?>" alt="">
                    <?php the_field('extraordinary_opportunities'); ?>
                </div>
                <div class="col-lg-12">
                   <?php the_field('report'); ?>
                </div>
            </div>
      </div>
    </section>
    <div class="parent-div dark-mode home-about-dominionprep">
        <section class="inner-page-section">
            <div class="container-fluid ">
                <div class="row">
                    <div class="col-xl-6 col-lg-11 col-md-9 section-text div-with-bar dark-mode">
                    <?php the_field('about_dominion'); ?>
 
                    </div>
                    <div class="col-xl-5 col-lg-11 col-md-9">
                        <div class="section-img-container">
                            <img src="<?php echo get_template_directory_uri().'/assets/images/Image-about-dominion-img.png' ?>" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="inner-page-section">
            <div class="container-fluid ">
                <div class="row">
                    <div class="col-xl-6 col-lg-11 col-md-9 section-text div-with-bar dark-mode">
                    <?php the_field('our_methods'); ?>
                    </div>
                    <div class="col-xl-5 col-lg-11 col-md-9 pl-lg-0">
                        <div class="section-img-container">
                            <img src="<?php echo get_template_directory_uri().'/assets/images/Image-our-methods.png' ?>" alt="" class="img-fluid">

                        </div>
                    </div>
                   </div>
                <div class="row justify-content-center">
                    <div class="col-xl-10 col-lg-11 col-md-9 div-with-bar dark-mode homepage-list">
                    <?php the_field('method_list'); ?>
                        <div class="highlighter-text">
                            Accelerated Results, Extraordinary Opportunities
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <section class="watch">
   <div class="container div-with-bar light-mode">
      <h2 class="section-heading light-mode">Watch <br><span>Videos</span>
      </h2>
      <div class="cascade-slider_container" id="cascade-slider">
         <?php
            $args = array( 'post_type' => 'Video', 'posts_per_page' => 10 );
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
                     <?php $video1umimage = get_the_post_thumbnail_url();?>
                     <img class="img-fluid" src="" alt=""> 
                     <?php the_content(); ?>
                     <!-- <a href="" class="youtube-icon" target="blank">
                        <img class="img-fluid" src="images/Youtube-video-youtube-icon.svg" alt="">
                        </a>  -->
                  </div>
                  <div class="video-text">
                     <h6><?php the_title(); ?></h6>
                     <p>
                        <?php the_field('video_description'); ?>
                     </p>
                     <div class="d-flex ml-2 mr-2 justify-content-end align-items-center">                                   
                        <span class="date"><?php the_date(); ?>-<?php the_time(); ?></span>
                     </div>
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
 
<?php  get_footer();  ?>
