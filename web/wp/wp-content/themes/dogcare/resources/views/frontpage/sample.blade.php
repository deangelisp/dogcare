<section class="section-page section-sample">
    @query([
        'post_type' => 'page',
        'meta_query' => array(
            array(
                'key'     => 'featured_page_meta',
                'value'   => 1,
            ),
        ),
    ])

    @posts
    @include('frontpage.sample-item')
    @endposts
</section>