@extends('layouts.app')

@section('content')
<!-- @include('partials.page-header') -->

<div class="lg:bg-orange-50 p-4 lg:p-10">
    @while(have_posts()) @php(the_post())
    @includeFirst(['partials.content-single-' . get_post_type(), 'partials.content-single'])
    @endwhile
</div>

@endsection