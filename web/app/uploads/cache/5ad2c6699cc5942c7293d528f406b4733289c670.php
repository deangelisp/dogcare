<section class="section-page section-blog">
    <div class="container ">
        <h3 class="title text-center">Blog Section title</h3>
        <nav class="row">
            <?php global $query; ?><?php $query = new WP_Query([
                'post_type' => 'post',
                'posts_per_page' => '3'
            ]); ?>

            <?php if (empty($query)) : ?><?php global $wp_query; ?><?php $query = $wp_query; ?><?php endif; ?><?php if ($query->have_posts()) : ?><?php while ($query->have_posts()) : $query->the_post(); ?>
            <?php echo $__env->make('frontpage.blog-item', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php endwhile; wp_reset_postdata(); endif; ?>
        </nav>
    </div>
</section>