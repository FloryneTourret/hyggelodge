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
            <li><a href="<?php echo esc_url(home_url('/prestations/')); ?>" class="nav-link">Nos prestations</a></li>
            <li><a href="<?php echo esc_url(home_url('/reserver/')); ?>" class="nav-button">Réserver</a></li>
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


<div class="grid-container">
    <h2 class="gallery_subject"><?php the_field('title'); ?></h2>
    <div class="grid-x grid-margin-x">
        <?php for ($i = 1; $i <= 12; $i++) : ?>
            <div class="gallery_card cell medium-3 small-6">
                <?php
                $image = get_field('image-' . $i);
                if (!empty($image)) : ?>
                    <a href="<?php the_field('link-' . $i); ?>"><img class="gallery_image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></a>
                <?php endif; ?>
                <p class="gallery_title"><?php the_field('title-' . $i); ?></p>
            </div>

        <?php endfor ?>


    </div>

    <div class="content grid-x grid-margin-x">
        <div class="cell medium-7 small-12">
            <?php the_field('content'); ?>
        </div>
        <div class="cell medium-auto small-12 grid-y">
            <div class="cell">
                <?php
                $image = get_field('image-room');
                if (!empty($image)) : ?>
                    <img class="room_picture" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
                <?php
                $image = get_field('image-trip');
                if (!empty($image)) : ?>
                    <img class="trip_picture" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
            </div>
        </div>

        <div class="cell button-center">
            <a class="button" href="<?php echo esc_url(home_url('/reserver/')); ?>">Réserver</a>
        </div>
    </div>
</div>
<?php get_footer(); ?>