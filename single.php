<?php 

/* 
    Template Name: Single Project Template
*/
get_header(); 
?>

<section id="portfolio-projects">
    <div class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <div class="project-image">
            <div class="img" style="background: url('<?php the_post_thumbnail_url('medium'); ?>'); background-size: cover !important; background-position: center !important;"></div>
        </div>
        <?php the_content(); ?>
    </div>
    <?php endwhile; ?>
    <?php else : ?>
        <div>
            <h1>Blogs Coming Soon</h1>
        </div>
    <?php endif; ?>  
</section>
<?php get_footer(); ?>