<?php get_header(); ?>
<div class="container">
    <h1>Salut</h1>
    <main class="main">
        <div class="sticky">
            <img src="" alt="">
        </div>
        <div class="content">
            <div class="row">
                <?php if(have_posts()) : ?>
                    <?php while (have_posts())  : the_post(); ?>
                        <div class="col-4">
                            <div class="card">
                                <div class="card-title">
                                    <?php the_title(); ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </main>
</div>

<?php get_footer(); ?>