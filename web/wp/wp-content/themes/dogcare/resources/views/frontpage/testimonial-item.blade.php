
<li>
    <div class="flex slide-testimonail-item row align-items-center">
        <figure class="slide-thumbnail col-6 col-md-6 col-sm-12 flex justify-content-center">
            <div class="flex ">
                <img src="@thumbnail('full', false)" />
            </div>
        </figure>
        <div class="slide-content col-6 col-md-6 col-sm-12 text-center ">
            <h3 class="title">@title</h3>
            <p class="paragraph">“<?php echo get_the_excerpt(); ?>”</p>
            <p class="author">{!! get_post_meta( get_the_ID(), 'customer_name', true ); !!}</p>
        </div>
    </div>
</li>