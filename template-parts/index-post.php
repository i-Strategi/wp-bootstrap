<div class="row">
    <?php if (has_post_thumbnail()):?>
    <div class="col-3">	
        <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail(); ?></a>
    </div>
    <?php endif; ?>
    <div class="col">
        <header class="post-header">
            <h1 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
            <p class="post-meta list-inline">
                <span class="list-inline-item post-date">
                    <?php _e("Posted", "wpbs"); ?> <time datetime="<?php echo the_time('G:i'); ?>" pubdate="<?php echo get_the_date('Y-m-j'); ?>"><?php echo get_the_date(); ?> <?php echo get_the_time(); ?></time>
                </span>
                <span class="list-inline-item post-author">
                    <?php _e("By", "wpbs"); ?> <?php the_author_posts_link(); ?> 
                </span>
                <span class="list-inline-item post-category">
                    <?php _e("In category", "wpbs"); ?> <?php the_category(', '); ?>
                </span>
            </p>
        </header>
        <section class="post-content">
            <?php the_excerpt(); ?>
        </section>
        <footer>
            <p class="post-footer tags"><?php the_tags('<span class="tags-title">' . __("Tags","wpbs") . ':</span> ', ' ', ''); ?></p>
        </footer>
    </div>
</div>