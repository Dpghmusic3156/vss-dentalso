{{-- Gắng lệnh điều hướng tức thì 301 về trang chủ --}}
@php
    wp_redirect(home_url('/'), 301);
    exit;
@endphp
