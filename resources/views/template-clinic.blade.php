{{--
  Template Name: Clinic Template
--}}

@extends('layouts.app')

@section('header')
@include('sections.header', ['menu' => "dentalclinic_navigation"])
@endsection

@section('content')
@while(have_posts()) @php(the_post())
<?php
$post = get_post($post);
$slug = $post->post_name;
?>
@include('partials.quan-ly-nha-khoa.' . $slug)
@endwhile
@endsection