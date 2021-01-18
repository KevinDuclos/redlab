<?php get_header(); ?>
<main>
<div class="container">
<div class="liste">
    <div class="row">
    <?php if(have_posts()): ?>
        <?php while (have_posts())  : the_post(); ?>
            <?php if(!is_sticky()) : ?>
                <div class="col-3">
                    <div class="card">
                    <h2 class="card-title"><?php the_title() ?></h2>
                    <?php if (has_post_thumbnail()): ?>
                        <div class="card-image">
                            <?php the_post_thumbnail(); ?>
                        </div>
                           <?php else: ?>
                            <div class="no-thumbnail">
                                <img src="<?php bloginfo('template_url') ?>/images/placeholder-image.png" alt="no thumbnail">
                            </div>
                           <?php endif; ?>
                        <div class="card-text">
                        <?php the_excerpt() ?>
                        <a class="btn btn-primary" href="<?php the_permalink() ?>">Voir L'article </a>
                        </div>
                    </div>
                </div>
                <?php endif ?>a
            <?php endwhile; ?>
        <?php endif ?>
    </div>
</div>
</div>
</div>
</main>
<?php get_footer(); ?>