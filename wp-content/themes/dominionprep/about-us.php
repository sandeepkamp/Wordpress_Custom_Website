<?php /* Template Name: Aboutus */ ?>

<?php get_header(); ?>


<section class="curriculum-know-more">
        <div class="container-fluid">
            <section class="about-us-section">
                <div class="row ">
                    <div class="col-lg-6 order-lg-2 order-2 about-us-top">
                        <?php the_field('heading'); ?>   
                           <?php the_field('aboutdescription'); ?>   
                    </div>
                    <div
                        class="col-lg-6 d-flex align-items-center justify-content-center order-lg-1 order-1 about-us-top-img">
                        <div class="orange-stroke-img">
                            <img class="img-fluid" src="<?php echo get_template_directory_uri().'/assets/images/Image-president-greetings.png' ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="features">
                    <h2 class="bottom-heading"><?php the_field('ourapproach'); ?></h2>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="semester-div">
                                <?php the_field('whatwedo'); ?>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="semester-div">
                                  <?php the_field('why'); ?>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="semester-div">
                                  <?php the_field('how'); ?>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div>
    </section>
    <section class="differences">
        <div class="container-fluid">
            <div class="top row">
                <div class="col-lg-4 d-flex justify-content-center order-1">
                    <div class="differences-img">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri().'/assets/images/Image-differences-img.png' ?>" alt="">
                    </div>
                </div>
                <div class="col-lg-8 top-right order-2 ">
                    <?php the_field('diffrences'); ?>
                    <!-- <div class="custom-heading">
                    </div> -->  
                </div>
            </div>
        </div>
    </section>
    <section class="vision-and-mission">
        <div class="container-fluid">
            <div class="features">
                <h2 class="bottom-heading">Vission and Mission</h2>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="semester-div">
                            <?php the_field('vission'); ?>  
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="semester-div">
                            <?php the_field('mission'); ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="brand-personality">
        <div class="container-fluid">
            <div class="team-heading">
               <?php the_field('bottom_section'); ?>
            </div>
        </div>
    </section>

    <?php  get_footer();  ?>