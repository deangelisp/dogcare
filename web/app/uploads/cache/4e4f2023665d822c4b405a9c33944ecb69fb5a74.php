<section class="section-page section-introduction">
    <div class="container text-center">
        <h3 class="title"><?php echo get_post_meta( get_the_ID(), 'introduction_title', true );; ?></h3>
        <p class="paragraph m-auto"><?php echo get_post_meta( get_the_ID(), 'introduction_description', true );; ?></p>
    </div>
</section>