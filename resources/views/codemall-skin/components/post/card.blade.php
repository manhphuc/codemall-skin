<article class="post-card" id="post-@php(the_ID())" @php(post_class())>
    <h2 class="post-card__title">
        <a class="post-card__link" href="@php echo esc_url(get_permalink()); @endphp">
            @php the_title(); @endphp
        </a>
    </h2>

    <div class="post-card__content">
        @php the_content(); @endphp
    </div>
</article>
