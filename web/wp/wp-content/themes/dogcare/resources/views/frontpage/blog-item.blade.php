<div class="col-4 col-md-4 col-sm-12 blog-item">
    <a class="post-thumbnail" href="@permalink" alt="@title" title="Read about: @title" style="background-image: url(@thumbnail('full', false));" ></a>

    <h3 class="post-title"><a href="@permalink">@title</a></h3>
    <p class="paragraph"><?php echo get_the_excerpt(); ?></p>
    <a class="button" href="@permalink">Read more</a>
</div>