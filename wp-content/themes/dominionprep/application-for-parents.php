<?php /* Template Name: application-for-parent*/ ?>
<?php get_header();  ?>
<?php $applicationForParentsimage = get_the_post_thumbnail_url();?>
<section class="banner inner_banner">
    <div class="banner-img-container" style="background:url('<?php echo $applicationForParentsimage; ?>')">
        <!-- <img src="images/Image-application-parents-banner.png" alt="" class="img-fluid"> -->
        <div class="banner-overlay"></div>
    </div>
</section>
<section class="application">
    <div class="container div-with-bar light-mode">
        <div class="submit-btn mrApply"><a href="<?php echo site_url('/parent-form'); ?>" target="_blank">Apply Now</a></div>
        <?php the_field('application_parents'); ?>
        <div class="table-responsive">
            <?php the_field('application_table'); ?>
        </div>
        <?php the_field('bottom_section'); ?>
        <div class="submit-btn"><a href="<?php echo site_url('/parent-form'); ?>" target="_blank">Apply Now</a></div>
    </div>
</section>
<?php  get_footer();  ?>
