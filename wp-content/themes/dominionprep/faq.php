<?php /* Template Name: Faq */ ?>

<?php get_header(); ?>

<?php $faqimage = get_the_post_thumbnail_url();?>
<section class="banner">
   <div class="banner-img-container" style="background:url('<?php echo $faqimage; ?>'); ?>)">
      <div class="banner-overlay"></div>
   </div>
</section>
<section class="faq">
   <div class="container">
      <div class="text-lg-left text-sm-left team-heading">
         <?php the_field('head_section'); ?>
      </div>
      <div id="accordion" class="faq_accordion">
         <?php
            $c = 0; 
            $post_args = array( 'post_type' => 'faq');
            $post_query = new WP_Query( $post_args );
            if ( $post_query->have_posts() ) :
            while ( $post_query->have_posts() ) : $post_query->the_post(); $c++; ?>
         <div class="card">
            <?php if($c == 1){ ?>
            <div class="card-header" id="headingOne<?php the_ID() ?>">
               <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne<?php the_ID() ?>"
                  aria-expanded="true" aria-controls="collapseOne<?php the_ID() ?>">
                  <h5><?php the_title(); ?></h5>
               </button>
            </div>
            <div id="collapseOne<?php the_ID() ?>" class="collapse <?php if( $c == 1 ) echo 'show'; ?>" aria-labelledby="headingOne<?php the_ID() ?>" data-parent="#accordion">
               <div class="card-body">
                  <?php the_content(); ?>
               </div>
            </div>
         </div><?php }
          else { ?>
                 <div class="card-header" id="headingOne<?php the_ID() ?>">
                 <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne<?php the_ID() ?>"
                    aria-expanded="true" aria-controls="collapseOne<?php the_ID() ?>">
                    <h5><?php the_title(); ?></h5>
                 </button>
              </div>
              <div id="collapseOne<?php the_ID() ?>" class="collapse <?php if( $c == 1 ) echo 'show'; ?>" aria-labelledby="headingOne<?php the_ID() ?>" data-parent="#accordion">
                 <div class="card-body">
                    <?php the_content(); ?>
                 </div>
              </div>
           </div>
         <?php }?>
         <?php wp_reset_postdata();
           // $i++;
            endwhile; else: ?>
         <p><?php _e( 'Sorry, no team found.' ); ?></p>
         <?php endif; // ending condition 
            ?>     
      </div>
   </div>
</section>
<section class="inner-page-section dark-div enquery_faq enquery_faq_from_gap">
        <div class="container-fluid ">
            <div class="row ps-lg-0">
                <div class="col-xl-5 col-lg-11 col-md-9">
                    <div class="section-img-container">
                        <img src="<?php echo get_template_directory_uri().'/assets/images/did-you-miss-image.png' ?>" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-11 col-md-9 div-with-bar dark-mode">
                    <h2 class="section-heading dark-mode">Did we miss <br><span>ANYTHING?</span>
                    </h2>
                    <div class="enquery_faq_form">
                        <p>If you have any other questions, write to us!</p>
                        <?php echo apply_shortcodes('[contact-form-7 id="0" title="Contact form 1"]' ); ?>
                       
                    </div>
                </div>                
            </div>

        </div>
    </section>

<?php  get_footer();  ?>