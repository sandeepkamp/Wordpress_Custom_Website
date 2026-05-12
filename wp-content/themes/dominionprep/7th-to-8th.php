<?php /* Template Name: 7-to-8*/ ?>

<?php get_header('alternative'); ?>
<div class="sub_pages">
<div class="parent-div light-mode curriculum-know-more">
    <section class="inner-page-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 col-lg-11 col-md-9 div-with-bar light-mode">
                <?php the_field('head_section'); ?>            
                </div>
                <div class="col-xl-5 col-lg-11 col-md-9">
                    <div class="section-img-container">
                        <img src="<?php echo get_template_directory_uri().'/assets/images/Image-7th-to-8th-img.png' ?>" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="row justify-content-center div-with-bar light-mode">
                <div class="col-xl-10 col-lg-11 col-md-9">
                <?php the_field('middle_section'); ?>           
                </div>
            </div>
        </div>
    </section>
</div>
</div>
<section class="dark-div features curriculum_pricing gapping">
    <div class="container div-with-bar dark-mode">
    <?php the_field('bottom_section'); ?>           
    </div>
</section>

<?php get_footer(); ?>