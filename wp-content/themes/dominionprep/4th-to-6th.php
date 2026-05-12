<?php /* Template Name: 4-to-6*/ ?>

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
                            <img src="<?php echo get_template_directory_uri().'/assets/images/Image-4th-to-6th-img.png' ?>" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<section class="dark-div features gapping curriculum_pricing">
    <div class="container div-with-bar dark-mode crPdb-0">
    <?php the_field('middle_section'); ?>
    </div>
</section>
<section class="nomination">
    <div class="container  div-with-bar light-mode">
    <?php the_field('bottom_section'); ?>
    </div>
</section>

<?php get_footer(); ?>