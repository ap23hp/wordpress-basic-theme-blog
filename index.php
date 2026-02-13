<?php get_header(); ?>

<div class="content">
    <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post();
            ?>
            <article class="post">
                <h2>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h2>
                <div class="post-content">
                    <?php the_content(); ?>
                </div>
            </article>
            <?php
        endwhile;
    else :
        ?>
        <p>No posts found.</p>
        <?php
    endif;
    ?>
</div>

<?php get_footer(); ?>
