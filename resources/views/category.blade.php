@extends('layouts.app')

@section('content')
{{-- Lấy thông tin category hiện tại --}}
@php
$category_id = get_queried_object_id(); // Lấy ID của category hiện tại
$category_image_id = get_term_meta($category_id, 'category_image', true); // Lấy ID hình ảnh từ custom field
$category_image_url = z_taxonomy_image_url() ? z_taxonomy_image_url() : ''; // Lấy URL của hình ảnh
@endphp

{{-- Kiểm tra nếu có hình ảnh thì hiển thị --}}
@if($category_image_url)
<section class="banner-section relative bg-cover bg-center"
  style="background-image: url('{{ $category_image_url }}');">
  <div class="container">
    <div class="banner-content h-96 flex items-center text-center mx-auto  text-4xl text-primary3-500 justify-center leading-normal">
      <p class="page-title z-10">
        {{ category_description() ? strip_tags(category_description()) : single_cat_title('', false) }}
      </p>
    </div>
  </div>
  <div class="absolute top-0 left-0 right-0 bottom-0 bg-black opacity-50 z-0"></div>
</section>
@else
<div class="bg-primary3-100 py-20 text-center text-2xl lg:text-4xl text-primary-800 mb-10">
  {{ category_description() ? category_description() : single_cat_title('', false) }}
</div>
@endif

<div class="container grid lg:grid-cols-3 gap-4 my-8">
  @while(have_posts()) @php(the_post())
  @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
  @endwhile
</div>

{!! get_the_posts_navigation() !!}
@endsection