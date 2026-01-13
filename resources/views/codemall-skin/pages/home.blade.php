@extends('codemall-skin::codemall-skin.layouts.app')

@section('content')
    @if (have_posts())
        @while (have_posts())
            @php(the_post())

            {{-- Post card/component --}}
            @include('codemall-skin::codemall-skin.components.post.card')

        @endwhile

        @include('codemall-skin::codemall-skin.components.ui.pagination')

    @else
        <p>This is the home page of <strong>codemall-skin</strong>.</p>
    @endif
@endsection
