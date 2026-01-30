{{--
  Template Name: Dental Lab Template
--}}

@extends('layouts.app')

@section('header')
@include('sections.header', ['menu' => "dentallab_navigation"])
@endsection

@section('content')
@while(have_posts()) @php(the_post())
<?php
$post = get_post();
$slug = $post->post_name;
?>
@include('partials.quan-ly-dental-lab.' . $slug)
@endwhile
@endsection