<div class="col-4 col-md-4 col-sm-12 blog-item">
    <a class="post-thumbnail" href="<?= get_permalink(); ?>" alt="<?= get_the_title(); ?>" title="Read about: <?= get_the_title(); ?>" style="background-image: url(<?= get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>);" ></a>

    <h3 class="post-title"><a href="<?= get_permalink(); ?>"><?= get_the_title(); ?></a></h3>
    <p class="paragraph"><?php echo get_the_excerpt(); ?></p>
    <a class="button" href="<?= get_permalink(); ?>">Read more</a>
</div>