<?php /* Template Name: Home*/ ?>
<?php get_header(); ?>


<?php
$logo = get_theme_mod('hyggelodge_logo');
$logo_white = get_theme_mod('hyggelodge_logo_white');
?>
<div class="medium-menu medium-menu-home transparent top-bar">
    <div class="top-bar-left">
        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
            <img class="logo logo-home" src="<?php echo $logo_white; ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
        </a>
    </div>
    <div class="top-bar-right ">
        <ul class="menu menu-hover-lines transparent">
            <li><a href="<?php echo get_permalink(get_page_by_path('prestations')); ?>" class="nav-link">Nos prestations</a></li>
            <li><a href="#" class="nav-button">Réserver</a></li>
        </ul>

    </div>

</div>

<?php
$image = get_field('image');
if (!empty($image)) : ?>
    <header class="image_header" style="background: url('<?php echo esc_url($image['url']); ?>') center center no-repeat; background-size: cover;">
        <h1 class="title"><?php echo get_the_title(); ?></h1>
    </header>
<?php endif; ?>



<?php the_content(); ?>

<?php get_footer(); ?>