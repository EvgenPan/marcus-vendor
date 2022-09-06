<?php get_header();
/*Hero fields*/
$title = get_field('title') ?: '';
$description = get_field('subtitle') ?: '';
$video = get_field('video_hero') ?: '';
$image_size = 'large'; $image = get_field('image_hero') ?: ''; ?>
<section class="hero hero_top">
    <div class="wrapper_top container">
        <h1 class="hero_title title"><?php echo $title ?></h1>
        <div class="subtitle_hero"><?php echo $description ?></div>
    </div>
    <div class="video-wrap">
        <div class="d_main">
        <?php if($video):
            ?>
            <video playsinline autoplay loop muted class="media js-video" poster="<?=$image['url']?>">
                <source data-src="<?=$video['url']?>" type="video/mp4" src="<?=$video['url']?>">
            </video><!-- hero video -->
        <?php else: ?>
            <img class="media" src="<?=$image['url']?>" alt="<?=strip_tags($title); ?>">
        <?php endif; ?>
    </div>
    </div>
</section>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php the_content(); ?>
<?php endwhile;
endif; ?>
<?php get_footer(); ?>