@extends('layouts.app')

@section('content')
@while(have_posts())
@php the_post(); @endphp

@php
    $post_id      = get_the_ID();
    $author_id    = get_the_author_meta('ID');
    $author_name  = get_the_author();
    $author_bio   = get_the_author_meta('description');
    $author_avatar= get_avatar_url($author_id, ['size' => 80]);
    $cats         = get_the_category();
    $cat          = !empty($cats) ? $cats[0] : null;
    $read_time    = max(1, ceil(str_word_count(strip_tags(get_the_content())) / 200));
    $thumbnail    = has_post_thumbnail() ? get_the_post_thumbnail_url(null, 'full') : null;

    /* Bài viết liên quan */
    $related = get_posts([
        'posts_per_page'      => 3,
        'post__not_in'        => [$post_id],
        'category__in'        => wp_get_post_categories($post_id),
        'ignore_sticky_posts' => 1,
    ]);
@endphp

{{-- ============================================================
     HERO — Ảnh bìa toàn chiều rộng với tiêu đề phủ lên
     ============================================================ --}}
<section class="post-hero relative overflow-hidden {{ $thumbnail ? '' : 'post-hero--no-image' }}">
    @if($thumbnail)
        <div class="post-hero__bg" style="background-image: url('{{ $thumbnail }}')"></div>
        <div class="post-hero__overlay"></div>
    @else
        <div class="post-hero__bg-plain"></div>
    @endif

    <div class="apple-container relative z-10 post-hero__content">
        {{-- Breadcrumb --}}
        <nav class="post-breadcrumb" aria-label="Đường dẫn">
            <a href="{{ home_url('/') }}" class="post-breadcrumb__link">Trang chủ</a>
            <span class="post-breadcrumb__sep">›</span>
            <a href="{{ home_url('/blog/') }}" class="post-breadcrumb__link">Blog</a>
            @if($cat)
                <span class="post-breadcrumb__sep">›</span>
                <span class="post-breadcrumb__current">{{ $cat->name }}</span>
            @endif
        </nav>

        {{-- Category pill --}}
        @if($cat)
            <span class="post-cat-pill">{{ $cat->name }}</span>
        @endif

        {{-- Tiêu đề --}}
        <h1 class="post-title">{{ get_the_title() }}</h1>

        {{-- Thông tin bài viết --}}
        <div class="post-meta-row">
            <img src="{{ $author_avatar }}" alt="{{ $author_name }}" class="post-meta-avatar" loading="lazy">
            <div>
                <span class="post-meta-author">{{ $author_name }}</span>
                <span class="post-meta-dot">·</span>
                <span class="post-meta-date">{{ get_the_date('d/m/Y') }}</span>
                <span class="post-meta-dot">·</span>
                <span class="post-meta-read">{{ $read_time }} phút đọc</span>
            </div>
        </div>
    </div>
</section>

{{-- ============================================================
     NỘI DUNG — Hai cột: bài viết + sidebar cố định
     ============================================================ --}}
<div class="post-layout apple-container">

    {{-- ---- NỘI DUNG CHÍNH ---- --}}
    <main class="post-main" id="post-content">
        <article class="post-prose">
            {!! apply_filters('the_content', get_the_content()) !!}
        </article>

        {{-- Thẻ tag --}}
        @php $tags = get_the_tags(); @endphp
        @if($tags)
        <div class="post-tags">
            @foreach($tags as $tag)
                <a href="{{ get_tag_link($tag) }}" class="post-tag">{{ $tag->name }}</a>
            @endforeach
        </div>
        @endif

        {{-- Hộp tác giả --}}
        <div class="post-author-box">
            <img src="{{ $author_avatar }}" alt="{{ $author_name }}" class="post-author-box__avatar" loading="lazy">
            <div>
                <p class="post-author-box__label">Tác giả</p>
                <p class="post-author-box__name">{{ $author_name }}</p>
                @if($author_bio)
                    <p class="post-author-box__bio">{{ $author_bio }}</p>
                @endif
            </div>
        </div>

        {{-- Mobile Share --}}
        <div class="post-mobile-share lg:hidden">
            @include('partials.share-buttons')
        </div>

        {{-- Phân trang --}}
        @if ($pagination)
        <nav class="post-pagination" aria-label="Điều hướng trang">
            {!! $pagination !!}
        </nav>
        @endif
    </main>

    {{-- ---- SIDEBAR ---- --}}
    <aside class="post-sidebar">
        <div class="post-sidebar__sticky">
            {{-- Mục lục (tự động tạo bằng JS) --}}
            <div class="post-toc" id="post-toc">
                <p class="post-toc__heading">Trong bài viết này</p>
                <ul class="post-toc__list" id="toc-list"></ul>
            </div>

            {{-- Đọc tiếp --}}
            @if(count($related) > 0)
            <div class="post-sidebar-related">
                <p class="post-toc__heading">Đọc tiếp</p>
                <div class="post-sidebar-related__list">
                    @foreach($related as $rp)
                    @php $rp_thumb = has_post_thumbnail($rp->ID) ? get_the_post_thumbnail_url($rp->ID, 'thumbnail') : null; @endphp
                    <a href="{{ get_permalink($rp) }}" class="post-sidebar-related__item group">
                        @if($rp_thumb)
                            <img src="{{ $rp_thumb }}" alt="{{ $rp->post_title }}" class="post-sidebar-related__thumb" loading="lazy">
                        @else
                            <div class="post-sidebar-related__thumb post-sidebar-related__thumb--placeholder">
                                <span class="material-symbols-outlined">article</span>
                            </div>
                        @endif
                        <div class="post-sidebar-related__text">
                            <span class="post-sidebar-related__date">{{ get_the_date('d/m/Y', $rp) }}</span>
                            <p class="post-sidebar-related__title">{{ $rp->post_title }}</p>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
            @endif

            {{-- CTA card --}}
            <div class="post-sidebar-cta">
                <span class="material-symbols-outlined post-sidebar-cta__icon">rocket_launch</span>
                <p class="post-sidebar-cta__title">Sẵn sàng tối ưu hoá Labo?</p>
                <p class="post-sidebar-cta__body">Đặt lịch demo miễn phí và trải nghiệm DentalSO ngay.</p>
                <a href="{{ home_url('yeu-cau-tu-van/') }}" class="apple-cta-primary !text-sm !py-2.5 !px-5">Đặt lịch Demo</a>
            </div>

            {{-- Share buttons --}}
            @include('partials.share-buttons')
        </div>
    </aside>
</div>



@endwhile

{{-- Thanh tiến trình đọc --}}
<div class="post-progress" id="post-progress" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>

<script>
/* ---- Thanh tiến trình đọc ---- */
const progressBar = document.getElementById('post-progress');
window.addEventListener('scroll', () => {
    const doc = document.documentElement;
    const scrolled = doc.scrollTop;
    const total = doc.scrollHeight - doc.clientHeight;
    const pct = total > 0 ? (scrolled / total) * 100 : 0;
    if (progressBar) {
        progressBar.style.width = pct + '%';
        progressBar.setAttribute('aria-valuenow', Math.round(pct));
    }
});

/* ---- Mục lục tự động ---- */
document.addEventListener('DOMContentLoaded', () => {
    const content  = document.getElementById('post-content');
    const tocList  = document.getElementById('toc-list');
    const tocWrap  = document.getElementById('post-toc');
    if (!content || !tocList) return;

    const headings = content.querySelectorAll('h2, h3');
    if (headings.length < 2) { if (tocWrap) tocWrap.style.display = 'none'; return; }

    headings.forEach((h, i) => {
        if (!h.id) h.id = 'heading-' + i;
        const li = document.createElement('li');
        li.className = 'post-toc__item post-toc__item--' + h.tagName.toLowerCase();
        const a = document.createElement('a');
        a.href = '#' + h.id;
        a.textContent = h.textContent;
        a.className = 'post-toc__link';
        a.addEventListener('click', e => {
            e.preventDefault();
            document.getElementById(h.id)?.scrollIntoView({ behavior: 'smooth', block: 'start' });
        });
        li.appendChild(a);
        tocList.appendChild(li);
    });

    /* Highlight mục đang xem */
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            const link = tocList.querySelector(`a[href="#${entry.target.id}"]`);
            if (link) link.classList.toggle('is-active', entry.isIntersecting);
        });
    }, { rootMargin: '-10% 0% -80% 0%' });
    headings.forEach(h => observer.observe(h));
});
</script>

@endsection