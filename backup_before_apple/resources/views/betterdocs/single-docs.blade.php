@extends('layouts.app')

@section('page-header')
  {{-- Include the page header partial if your layout uses it --}}
  @include('partials.page-header')
@endsection

@section('content')
  <main class="relative min-h-screen">
    <div class="w-full max-w-6xl mx-auto px-4 md:px-6 py-24">
      <div class="betterdocs-wrapper betterdocs-single-wrapper betterdocs-single-layout-1 betterdocs-single-classic-layout betterdocs-single-wraper">

        {{-- Use the @php directive to call the search template helper --}}
        @php(betterdocs()->template_helper->search())

        <div class="betterdocs-content-wrapper betterdocs-display-flex">

          {{-- Load the sidebar using the main plugin views object --}}
          @php
            betterdocs()->views->get(
                'templates/sidebars/sidebar-1',
                [
                    'layout_type' => 'template'
                ]
            );
          @endphp

          <div id="betterdocs-single-main" class="betterdocs-content-area">
            {{-- Use Blade's native @while directive for the WordPress loop --}}
            @while(have_posts())
              @php(the_post())

              {{--
                FIX: The main error was here. `$view_object` was undefined.
                We must use the globally available `betterdocs()->views` object instead
                to correctly render the template parts.
              --}}
              @php
                $views = betterdocs()->views; // Get the correct views object

                $views->get(
                    'templates/parts/mobile-nav',
                    [
                        'mobile_sidebar' => true,
                        'mobile_toc'     => false
                    ]
                );
                $views->get('templates/parts/breadcrumbs');
                $views->get('templates/headers/layout-1');

                // Check settings for author and date display
                $is_author_enabled = betterdocs()->customizer->defaults->get('betterdocs_doc_author_enable');
                $is_date_enabled = betterdocs()->customizer->defaults->get('betterdocs_doc_author_date');
              @endphp

              {{-- Use Blade's @if directive for cleaner conditional logic --}}
              @if ($is_author_enabled)
                @php($views->get('templates/parts/author', ['updated_date' => $is_date_enabled]))
              @endif

              @php
                // Render the main content and footer parts
                $views->get('templates/contents/layout-1');
                $views->get('templates/footer');
              @endphp

            @endwhile {{-- End of the have_posts() loop --}}

            {{-- These parts are typically outside the main post loop --}}
            @php
              betterdocs()->views->get('templates/parts/navigation');
              betterdocs()->views->get('templates/parts/credit');
              betterdocs()->views->get('templates/parts/comment');
            @endphp

          </div> <!-- #betterdocs-single-main -->
        </div> <!-- .betterdocs-content-wrapper -->
      </div> <!-- .betterdocs-wrapper -->
    </div>
  </main>
@endsection
