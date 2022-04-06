<?php /* Template Name: Prestations */ ?>
<?php get_header(); ?>

<?php
$logo = get_theme_mod('hyggelodge_logo');
$logo_white = get_theme_mod('hyggelodge_logo_white');
?>
<div class="medium-menu top-bar">
    <div class="top-bar-left">
        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
            <img class="logo" src="<?php echo $logo; ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
        </a>
    </div>
    <div class="top-bar-right ">
        <ul class="menu menu-hover-lines transparent">
            <li><a href="<?php echo esc_url(home_url('/prestations/')); ?>" class="nav-link">Nos prestations</a></li>
            <li><a href="<?php echo esc_url(home_url('/reserver/')); ?>" class="nav-button">Réserver</a></li>
        </ul>

    </div>

</div>

<div class="grid-container presta">
    <?php the_content(); ?>
</div>

<?php get_footer(); ?>