@if (function_exists('the_posts_pagination'))
    <div class="pagination">
        @php(the_posts_pagination())
    </div>
@endif
