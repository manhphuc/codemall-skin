<article id="post-{{ get_the_ID() }}" @php( post_class( 'post-card' ) )>
    <h2 class="post-card__title">
        <a href="{{ esc_url( get_permalink() ) }}" class="post-card__link">
            {{ esc_html( get_the_title() ) }}
        </a>
    </h2>

    <div class="post-card__content">
        {!! apply_filters('the_content', get_the_content()) !!}
    </div>
</article>
