<?php get_header(); ?>

<div class="content single-post-content">
    <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post();
            ?>
            
            <article class="single-post">
                <h1 class="post-title">
                    <?php the_title(); ?>
                </h1>
                
                <div class="post-meta">
                    <span class="post-date">
                        <?php the_date('F j, Y'); ?>
                    </span>
                    <span class="post-author">
                        by <?php the_author(); ?>
                    </span>
                </div>
                
                <div class="post-content">
                    <?php the_content(); ?>
                </div>
                
                <div class="post-footer">
                    <div class="post-categories">
                        <strong>Categories:</strong> <?php the_category(', '); ?>
                    </div>
                    <?php if (has_tag()) : ?>
                    <div class="post-tags">
                        <?php the_tags('Tags: ', ', '); ?>
                    </div>
                    <?php endif; ?>
                </div>
            </article>
            
            <?php
        endwhile;
    endif;
    ?>
    
    <div class="back-to-blog">
        <a href="<?php echo home_url(); ?>">← Back to Blog</a>
    </div>
</div>

<?php get_footer(); ?>
