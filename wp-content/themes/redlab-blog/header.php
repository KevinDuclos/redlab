<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <?php wp_head(); ?>
</head>
<body>
<nav class="nav">
<div class="container-logo">
            <?php the_custom_logo(); ?>
        </div>
    <?php wp_nav_menu( array(
        'theme_location' => 'main',
        'container' => 'ul',
        'menu_class' => 'navbar-brand',
        'menu_id' => 'main-navbar',
        )
        );
    ?>
    <div class="search">
        <?php get_search_form(); ?>
    </div>
</nav>
    
