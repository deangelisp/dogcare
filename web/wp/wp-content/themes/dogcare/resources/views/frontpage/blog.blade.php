<section class="section-page section-blog">
    <div class="container ">
        <h3 class="title text-center">Blog Section title</h3>
        <nav class="row">
            @query([
                'post_type' => 'post',
                'posts_per_page' => '3'
            ])

            @posts
            @include('frontpage.blog-item')
            @endposts
        </nav>
    </div>
</section>