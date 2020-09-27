@php

$thumbnail = get_post_meta( get_the_ID(), 'slide_image', true );
@endphp

<section class="section-spotlight" style="background-image: url({!! wp_get_attachment_image_src($thumbnail, 'full', false)[0] !!})">
    <div class="container">
        <div class="block-paralax-text">
            <h3 class="headline">{!! get_post_meta( get_the_ID(), 'slide_title', true ); !!}</h3>
        </div>
    </div>
    <footer class="sp-footer row">
        <div class="col-6 col-sm-12 col-lg-6 flex align-items-center justify-content-center">
            <img src="@asset('images/icon-calender.png')">
            <span class="in-text">Don’t forget to book now for xmas holidays!</span>
        </div>
        <div class="col-6 col-sm-12 col-lg-6 flex align-items-center justify-content-center last">
            <img src="@asset('images/icon-eclipse.png')">
            <span class="in-text">Need a pickup/drop-off? Book now</span>
        </div>
    </footer>
</section>

<!--get_post_meta( get_the_ID(), 'slide_image', true ), 'full', false-->