<?php get_header(); ?>
<div class="container">
    <h1>Salut</h1>
    <main class="main">
        <div class="sticky">
            <img src="" alt="">
        </div>
        <div class="content">
            <?php if(have_posts()) : ?>
                <?php while (have_posts())  : the_post(); ?>
                    <div class="card">
                        <div class="card-title">
                            <?php the_title(); ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </main>
</div>

<?php get_footer(); ?>