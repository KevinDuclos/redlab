<?php get_header(); ?>
<div class="container">
    <h1>Salut</h1>
    <main class="main">
        <div class="sticky">
            <img src="" alt="">
        </div>
        <div class="content">
            <div class="row">
            <div class="col-8">
                <?php if(have_posts()) : ?>
                    <?php while (have_posts())  : the_post(); ?>
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="cardHead">
                                    <span>Publié le <?php the_date() ?></span>
                                    <span>par <?php the_author(); ?></span>
                                    <div class="card-title">
                                        <?php the_title(); ?>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                </div>
                <div class="col-1">
                <?php get_sidebar(); ?>

                </div>
            </div>
        </div>
    </main>
</div>

<?php get_footer(); ?>