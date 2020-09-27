<section class="section-page section-testimonial colorful">
    <div class="slide-testimonial container">
        <ul class="slide-testimonial-list">
            
            <?php global $query; ?><?php $query = new WP_Query([
                'post_type' => 'testimonial',
                'posts_per_page' => '3'
            ]); ?>

            <?php if (empty($query)) : ?><?php global $wp_query; ?><?php $query = $wp_query; ?><?php endif; ?><?php if ($query->have_posts()) : ?><?php while ($query->have_posts()) : $query->the_post(); ?>
            <?php echo $__env->make('frontpage.testimonial-item', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php endwhile; wp_reset_postdata(); endif; ?>
        </ul>
    </div>
</section>