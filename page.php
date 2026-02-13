<?php get_header(); ?>

<div class="content page-content">
    <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post();
            ?>
            
            <article class="page">
                <h1 class="page-title">
                    <?php the_title(); ?>
                </h1>
                
                <div class="page-content-text">
                    <?php the_content(); ?>
                </div>
            </article>
            
            <?php
        endwhile;
    endif;
    ?>
</div>

<?php get_footer(); ?>
