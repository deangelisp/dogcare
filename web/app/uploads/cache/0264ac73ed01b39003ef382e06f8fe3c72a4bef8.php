<section class="section-page section-sample">
    <?php global $query; ?><?php $query = new WP_Query([
        'post_type' => 'page',
        'meta_query' => array(
            array(
                'key'     => 'featured_page_meta',
                'value'   => 1,
            ),
        ),
    ]); ?>

    <?php if (empty($query)) : ?><?php global $wp_query; ?><?php $query = $wp_query; ?><?php endif; ?><?php if ($query->have_posts()) : ?><?php while ($query->have_posts()) : $query->the_post(); ?>
    <?php echo $__env->make('frontpage.sample-item', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endwhile; wp_reset_postdata(); endif; ?>
</section>