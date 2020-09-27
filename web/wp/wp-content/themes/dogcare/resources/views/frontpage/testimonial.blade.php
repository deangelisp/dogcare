<section class="section-page section-testimonial colorful">
    <div class="slide-testimonial container">
        <ul class="slide-testimonial-list">
            
            @query([
                'post_type' => 'testimonial',
                'posts_per_page' => '3'
            ])

            @posts
            @include('frontpage.testimonial-item')
            @endposts
        </ul>
    </div>
</section>