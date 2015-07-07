<?php
/*
Template Name: Front Page
*/
?>

<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <script src="//use.typekit.net/vts8skf.js"></script>
    <script>try{Typekit.load();}catch(e){}</script>
    <link rel="stylesheet" type="text/css" href="//cloud.typography.com/7707954/783346/css/fonts.css" />
    <?php wp_head(); ?>
</head>

<section id="site-description" class="grid">
        <div class="masthead-description image-content-area nonscroll-fadeIn">
            <?php the_field('dp_site_description'); ?>

        </div>
</section>

<?php get_header(); ?>


<section id="site-description-2" class="grid row-tb-pad">
    <div class="text-content-area">
        <?php the_field('dp_site_description_2'); ?>
    </div>
</section>



<section id="skills-content" class="">


    <div class="skills-area">


        <div class="front-audit-care front-skills-1 front-skills-text-1">

            <div class="front-skills-text front-offerings text-content-area">




                <h2><?php the_field('skills_header_1'); ?></h2>



                <?php the_field('skills_text_1'); ?>



            </div>

        </div>


        <div class="front-audit-care front-skills-2 front-skills-text-2">


            <div class="front-skills-text front-offerings text-content-area">

                <h2>

                    <?php the_field('skills_header_2'); ?>
                </h2>


                <?php the_field('skills_text_2'); ?>

            </div>

        </div>

    </div>

</section>

<section id="site-description-image nonscroll-fadeIn-2">

    <?php if( get_field('dp_site_description_image') ): ?>
        <img src="<?php the_field('dp_site_description_image'); ?>" />
    <?php endif; ?>

</section>




<section id="site-description-3" class="grid row-tb-pad">
    <div class="text-content-area">
        <h1> <?php the_field('about_skills_header_2'); ?></h1>
        <?php the_field('about_skills_text_2'); ?>
    </div>
</section>


<section id="site-description-4" class="grid row-tb-pad">

    <div class="front-email-optin text-content-area">
        <h1>Subscribe:</h1>

        <p><input type="email" id="mc4wp_email" name="EMAIL" placeholder="Your email address" required /> <input type="submit" value="Sign up" /></p>
        <small>
            Receive tips & insights about WordPress, web design, content strategy, & usability to improve your site and achieve results.
        </small>

    </div>

</section>





<?php get_footer(); ?>
