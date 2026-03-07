{{--
  Template Name: Warranty Template
--}}

@extends('layouts.app')

@section('header')
@include('sections.header', ['menu' => "warranty_navigation"])
@endsection

@section('content')
@while(have_posts()) @php(the_post())
<?php
$post = get_post();
$slug = $post->post_name;
?>
@include('partials.quan-ly-bao-hanh.' . $slug)
@endwhile
@endsection