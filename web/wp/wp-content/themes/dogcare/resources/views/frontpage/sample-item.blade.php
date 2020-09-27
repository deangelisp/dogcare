<div class="flex align-items-center ">
    <figure class="sample-thumbnail col-6 col-md-6 col-sm-12">
        <img class="image-center" src="@thumbnail(get_the_ID(), 'full', false)">
    </figure>
    <div class="sample-content col-6 col-md-6 col-sm-12 text-center flex justify-content-center">
        <div class="col-8 col-xl-8 col-md-10 col-sm-12  ">
            <h3 class="title">@title</h3>
            <p class="paragraph">{!! get_the_excerpt() !!}</p>
            <a class="button" href="@permalink">Read more</a>
        </div>
    </div>
</div>