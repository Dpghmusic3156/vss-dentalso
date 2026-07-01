@include('partials.page-header')

<style>
/* Tùy chỉnh giao diện bài viết Blog */
body.single-post .page-title {
    font-size: max(1.875rem, min(5vw, 3rem)) !important;
    font-weight: 500 !important;
}
.single-post .e-content.prose p,
.single-post .e-content.prose ul,
.single-post .e-content.prose ol,
.single-post .e-content.prose li {
    text-align: justify;
}
.single-post .e-content.prose p,
.single-post .e-content.prose ul,
.single-post .e-content.prose ol {
    margin-top: 0.75em !important;
    margin-bottom: 0.75em !important;
}
.single-post .e-content.prose li {
    margin-top: 0.25em !important;
    margin-bottom: 0.25em !important;
}
</style>

<article class="single-post container shadow-xl bg-white p-16 relative contents lg:block rounded-xl" style="margin-top: -100px">
<?php if (has_post_thumbnail( $post->ID ) ): ?>
  <?php $image = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ), 'thumbnail' ); ?>
<?php endif; ?>
  <div class="e-content prose max-w-none">
    @php(the_content())
  </div>
  <section class="container md:p-20 text-center rounded-3xl bg-primary-4/10 min-h-96 flex flex-col justify-center mt-6 mb-6" data-aos="fade-up" style="
    background-image: url(https://demo.awaikenthemes.com/seore/wp-content/uploads/2024/07/need-help-bg.svg);
    background-position: 371px -75px;
    background-repeat: no-repeat;
    background-size: auto;">
    <p class="mb-4 text-4xl" data-aos="fade-up">Sẵn sàng để bắt đầu?</p>
    <a href="<?php echo get_site_url(); ?>/yeu-cau-tu-van" class="flex items-center justify-center group relative h-12 w-48 
        rounded-3xl bg-primary-1 text-lg shadow mx-auto mt-10">
            <div class="absolute rounded-3xl inset-0 w-0 bg-white transition-all duration-[250ms] ease-out group-hover:w-full"></div>
            <span class="relative text-white group-hover:text-primary-1">Đăng ký Demo</span>
        </a>
</section>
  @if ($pagination)
  <footer>
    <nav class="page-nav" aria-label="Page">
      {!! $pagination !!}
    </nav>
  </footer>
  @endif
</article>