
Banner-Img
A STEP BY STEP WORDPRESS THEME DEVELOPMENT TUTORIAL FOR STARTERS

 Apr 10, 2017 Posted by: World Web Technology
When the time comes to build a blog or website, you have a lot of options to choose from. But a single solution can end up taking a lot of time. If you are just starting out, WordPress is the best platform that stands above the rest. Choosing the right CMS platform for your site is a major decision as it affects your website’s SEO.

WordPress is used CMS platform amongst the bloggers. There are many reasons that make it a popular content management system, such as, it includes user-friendliness, features, customizations, free open source, secure, modern, SEO friendly, existing support community, easy to manage, mobile-optimized, and much more.

It is easy to set-up and manages WordPress. Its management seems like a cakewalk. It has features, plug-ins, and themes for any occasion. Many WordPress users find it difficult to find the right there, and it leads to a long process. Many WordPress users consider learning what the basic steps to create a new theme is. If you are one of them, then this guide can be useful for you. This WordPress theme development tutorial step by step will help you to learn how to build your new theme.

A WP theme can change the design of your site or blog including its layout. If you change your theme, it changes the front-end (what visitors see when they browse your site on the web) of your site. There are many WP themes available in the theme directory of wordpress.org, but many sites use custom themes. When you create a theme, you decide how your site is displayed. There are many options available for you when you create your custom theme.

You can have a different layout (responsive/static, one/two-column).
You can display the site content wherever you want.
You can specify which actions or devices should make your content visible.
You can customize the typography and design of your theme using CSS.
You can include images and videos anywhere in your theme.
WordPress Theme is a collection of different files such as index.php and style.css. These files work together to create a display of your site and control the presentation of your site or blog’s content.

Getting Started – A Step By Step Guide for WordPress Theme Development
You might have understood what exactly the WP theme development is? Now it’s time to get started. You need to set up your local development environment. You need to check out some WordPress theme examples before start creating a new theme. So dive into creating a new theme.

First of all, you need to create a subfolder in WP-content/themes/directory in your WordPress folder. Before you start creating the theme, you should decide how the layout of your website will look like. In this tutorial, we will build a WordPress theme that consists of a header, sidebar, content area, and footer. Learn how you can create such a theme.

Your new WordPress theme that is going to be built in this guide would have:

1 stylesheet
1 functions file
1 comments file
Some template files (index, header, footer, sidebar, single and page)
These files make the outline of the website’s overall look. This is the main part of our WordPress theme customization tutorial.

DIV tags
These tags are used to format and define values of the template file (each template file like index, header, footer, sidebar, single, and page). The div tag is also used to define these values and structure its element and content.

DIV tags that will be used in this WordPress theme development are:

<div id=”header”></div>
<div id=”footer”></div>
<div class=”post”></div>
<div class=”navigation”></div>
<div class=”entry”></div>
<div class=”sidebar”></div>
<div id=”wrapper”></div>
<div id=”container”></div>
There is a difference between div id and div class. Div IDs are used to define unique site features while Div Class is used to define values that are used to define several elements. In the stylesheet, div id is identified with a # and div class with a . (dot).

Install WordPress and Create Template Files
You need to install WordPress on your local computer before you start creating your theme. You can save your changes on a local server rather than deal with uploading and remote server access. You can also install WordPress via your hosting provider. Many hosts offer WordPress hosting. Follow the given instructions:

Create theme folder under directory /wp-content/themes/your own theme
Create the template files (index, header, footer, sidebar, single and page)
Create function files
Save these files as.php in your theme folder
Index.php
Open this file and add the given code and save it again:

<?php get_header(); ?>

<div id="container">

  <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

     <div class="post" id="post-<?php the_ID(); ?>">

    <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
          <?php the_title(); ?></a></h2>

    <div class="entry">

             <?php the_content(); ?>

        <p class="postmetadata">
<?php _e('Filed under&#58;'); ?> <?php the_category(', ') ?> <?php _e('by'); ?> 
<?php  the_author(); ?><br />
<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?> 
<?php edit_post_link('Edit', ' &#124; ', ''); ?>
        </p>

      </div>

    </div>

  <?php endwhile; ?>

    <div class="navigation">
      <?php posts_nav_link(); ?>
    </div>


  <?php endif; ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
The code of the index file calls the footer, header, and sidebar template file. It is the web browser call when requesting your site.

The index file defines the FrontPage of your site. It includes DIV classes “entry” and “post,” and DIV tags “container.” If you want to display a short length of your front page post, you can insert a page break to display the ‘read more’ link.

Create Header.php
Add the given code to header.php and save this template file:

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">

     <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>

     <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; 
     charset=<?php bloginfo('charset'); ?>" />	
     <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> 
     <!-- leave this for stats please -->

     <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" 
     media="screen" />
     <link rel="alternate" type="application/rss+xml" title="RSS 2.0" 
     href="<?php bloginfo('rss2_url'); ?>" />
     <link rel="alternate" type="text/xml" title="RSS .92" 
     href="<?php bloginfo('rss_url'); ?>" />
     <link rel="alternate" type="application/atom+xml" title="Atom 0.3" 
     href="<?php bloginfo('atom_url'); ?>" />
     <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

     <?php wp_get_archives('type=monthly&format=link'); ?>
     <?php //comments_popup_script(); // off by default ?>
     <?php wp_head(); ?>
</head>
<body>

<div id="wrapper">

<div id="header">

<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
<?php bloginfo('description'); ?>

</div>
This file has an opening head and body tag. Included in the HTML tag is the head tag (holds stylesheet and Meta tags links). Div tags hold the header content and overall site position.

Footer.php
Add the below code to footer.php and save file:

<div id="footer">
  <p>
Copyright 2017 <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
</p>
</div>

</div></body>
</html>
The footer defines the bottom part of the site. This theme has a copyright announcement now. It adds a permalink of the blog. This is the last template file that is called for the site and it closes HTML and body tags.

Sidebar.php
Add the below code to sidebar.php and save the file:

<div class="sidebar">

<ul>

<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar() ) : else : ?>

  <?php wp_list_pages('depth=3&title_li=<h2>Pages</h2>'); ?>

  <li><h2><?php _e('Categories'); ?></h2>
    <ul>
      <?php get_links_list('sort_column=name&optioncount=1&hierarchical=0'); ?>
    </ul>
  </li>

  <li><h2><?php _e('Archives'); ?></h2>
    <ul>
      <?php wp_get_archives('type=monthly'); ?>
    </ul>
  </li>

  <?php get_links_list(); ?>

  

<?php endif; ?>

</ul>

</div>