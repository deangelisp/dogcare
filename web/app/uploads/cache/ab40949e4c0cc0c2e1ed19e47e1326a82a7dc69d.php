<div class="flex align-items-center ">
    <figure class="sample-thumbnail col-6 col-md-6 col-sm-12">
        <img class="image-center" src="<?= get_the_post_thumbnail_url(get_the_ID(), is_numeric('full') ? ['full', 'full'] : 'full'); ?>">
    </figure>
    <div class="sample-content col-6 col-md-6 col-sm-12 text-center flex justify-content-center">
        <div class="col-8 col-xl-8 col-md-10 col-sm-12  ">
            <h3 class="title"><?= get_the_title(); ?></h3>
            <p class="paragraph"><?php echo get_the_excerpt(); ?></p>
            <a class="button" href="<?= get_permalink(); ?>">Read more</a>
        </div>
    </div>
</div>