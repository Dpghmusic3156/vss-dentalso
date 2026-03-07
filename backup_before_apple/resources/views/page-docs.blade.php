@extends('layouts.app')

@section('page-header')
@include('partials.page-header')
@endsection

@section('content')
<main class="relative min-h-screen flex flex-col justify-center overflow-hidden bg-gray-100">
     <div class="w-full max-w-6xl mx-auto px-4 md:px-6 pt-24">
       {!! apply_shortcodes('[betterdocs_search_form]') !!}
     </div>
  <div class="w-full max-w-6xl mx-auto px-4 md:px-6 py-24">
      <div class="flex flex-col justify-center divide-y divide-slate-200">  
               {!! apply_shortcodes('[betterdocs_category_box]') !!}
        </div>
      </div>
    </main>
        @endsection