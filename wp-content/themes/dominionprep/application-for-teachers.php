<?php /* Template Name: application-for-teacher*/ ?>

<?php get_header();  ?>
<?php $applicationForTeachersimage = get_the_post_thumbnail_url();?>
<section class="banner inner_banner">
    <div class="banner-img-container" style="background:url('<?php echo $applicationForTeachersimage; ?>')">
        <!-- <img src="images/Image-application-teachers-banner.png" alt="" class="img-fluid"> -->
        <div class="banner-overlay"></div>
    </div>
</section>
<section class="application">
    <div class="container div-with-bar light-mode">
        <div class="submit-btn mrApply"><a href="<?php echo site_url('/teachers-application'); ?>" target="_blank">Apply Now</a></div>
        <?php the_field('head_section'); ?>
        <div class="table-responsive">
            <?php the_field('table_section'); ?>
        </div>
        <?php the_field('bottom_section'); ?>
        <div class="submit-btn"><a href="<?php echo site_url('/teachers-application'); ?>" target="_blank">Apply Now</a></div>
    </div>
</section>

<?php  get_footer();  ?>
