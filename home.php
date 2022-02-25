<?php /* Template Name: Home*/ ?>
<?php get_header(); ?>


<?php
$image = get_field('image');
if (!empty($image)) : ?>
    <header class="image_header" style="background: url('<?php echo esc_url($image['url']); ?>') center center no-repeat; background-size: cover;">
        <h1 class="title"><?php echo get_the_title(); ?></h1>
    </header>
<?php endif; ?>


<div class="grid-container">
    <h2 class="gallery_subject"><?php the_field('title'); ?></h2>
    <div class="grid-x grid-margin-x grid-margin-y">
        <?php for ($i = 1; $i <= 12; $i++) : ?>
            <div class="gallery_card cell medium-3 small-6">
                <?php
                $image = get_field('image-' . $i);
                if (!empty($image)) : ?>
                    <img class="gallery_image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
                <p class="gallery_title"><?php the_field('title-' . $i); ?></p>
            </div>

        <?php endfor ?>


    </div>

    <div class="content grid-x grid-margin-x grid-margin-y">
        <div class="cell medium-8 small-12">
            <?php the_field('content'); ?>
        </div>
        <div class="cell medium-auto small-12">
            <p>Image à mettre ici</p>
        </div>
    </div>
</div>
<?php get_footer(); ?>