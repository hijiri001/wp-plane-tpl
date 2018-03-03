<article <?php post_class(); ?>>
    <div class="mb-5 position-relative">
        <?php if (wp_is_mobile()) :?>
        <?php if ( has_post_thumbnail()): ?>
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full', array( 'class' => 'img-fluid mb-1' )); ?></a>
        <?php endif; ?>
        <?php else: ?>
        <?php if ( has_post_thumbnail()): ?>
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full', array( 'class' => 'float-left mr-3 w-40 img-fluid' )); ?></a>
        <?php endif; ?>
        <?php endif; ?>
        <header>
            <h2 class="entry-title h4 m-0">
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h2>
            <?php get_template_part('partials/entry-meta'); ?>
        </header>
        <div class="entry-summary m-0 position-absolute"  style="bottom:0; right:0;">
            <a href="<?php the_permalink(); ?>">
                <p class="text-right"><small>Continued</small> <i class="fa fa-arrow-circle-right fa-2x" aria-hidden="true"></i></p>
                </a>            
            <!--<?php the_excerpt(); ?>-->
        </div>
        <div class="clearfix"></div>
    </div>
</article>
