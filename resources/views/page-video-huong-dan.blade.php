@extends('layouts.app')

@section('content')

{{-- Hero --}}
<section class="apple-section apple-hero bg-white">
    <div class="apple-container text-center">
        <div class="fade-in-up">
            <span class="apple-eyebrow">Tài liệu</span>
            <h1 class="apple-headline mb-6">Video Hướng Dẫn</h1>
            <p class="apple-hero-copy">
                Tổng hợp các video hướng dẫn sử dụng DentalSO — từ cài đặt ban đầu đến vận hành nâng cao.
            </p>
            <div class="apple-cta-group mt-10">
                <a href="https://www.youtube.com/@DentalSO?sub_confirmation=1" target="_blank" rel="noopener" class="apple-cta-primary inline-flex items-center gap-2">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814z"/><polygon fill="#fff" points="9.545,15.568 15.818,12 9.545,8.432"/></svg>
                    Đăng ký kênh
                </a>
                <a href="{{ home_url('yeu-cau-tu-van/') }}" class="apple-cta-secondary">Đăng ký Demo<span class="apple-chevron material-symbols-outlined">chevron_right</span></a>
            </div>
        </div>
    </div>
</section>

{{-- Category Filter --}}
<section class="apple-section--sm bg-[#f5f5f7]" id="video-list">
    <div class="apple-container">
        <div class="text-center mb-10 fade-in-up">
            <span class="apple-eyebrow">Danh mục</span>
            <h2 class="apple-headline-sm">Chọn chủ đề bạn quan tâm</h2>
        </div>
        <div class="flex flex-wrap justify-center gap-3 mb-12 fade-in-up" id="video-filters">
            <button class="video-filter-btn active" data-filter="all">Tất cả</button>
            <button class="video-filter-btn" data-filter="gioi-thieu">Giới thiệu</button>
            <button class="video-filter-btn" data-filter="phien-ban-linh-hoat">Phiên bản linh hoạt</button>
            <button class="video-filter-btn" data-filter="don-hang">Đơn hàng & Sản xuất</button>
            <button class="video-filter-btn" data-filter="hoa-don">Hóa đơn & Công nợ</button>
            <button class="video-filter-btn" data-filter="bao-hanh">Bảo hành</button>
            <button class="video-filter-btn" data-filter="quan-ly-chung">Quản lý chung</button>
        </div>

        @php
        /**
         * Danh sách video YouTube - tổng hợp từ 4 playlist:
         * 1. PLtGly8_RzMfs5LkZ8hlukNhqwkKMy3cuC (Hướng dẫn chung)
         * 2. PLtGly8_RzMfu7L8ybbN5h3DLFMKn5JNSo (Phiên bản linh hoạt)
         * 3. PLtGly8_RzMfvekuRCIRpr5YKCN3HFWtOB (Thủ thuật)
         * 4. PLtGly8_RzMfvXUOf3yohM2biNaQYN9qjF (Hướng dẫn Labo)
         */
        $videos = [
            // === GIỚI THIỆU ===
            [
                'id' => 'tlw25BpD77M',
                'title' => 'Giới thiệu DentalSO',
                'desc' => 'Tổng quan về phần mềm quản lý Labo nha khoa DentalSO và các tính năng chính',
                'category' => 'gioi-thieu',
            ],
            [
                'id' => 'gyeXaXoxltA',
                'title' => 'Phần mềm quản lý Labo Nha khoa - Phiên bản dành cho Labo nhỏ',
                'desc' => 'Giới thiệu phiên bản DentalSO tối ưu cho các Labo quy mô nhỏ',
                'category' => 'gioi-thieu',
            ],
            // === PHIÊN BẢN LINH HOẠT ===
            [
                'id' => 'HsqAd8dvQWY',
                'title' => 'Hướng dẫn tạo đơn hàng',
                'desc' => 'Hướng dẫn tạo đơn hàng trên phiên bản linh hoạt DentalSO',
                'category' => 'phien-ban-linh-hoat',
            ],
            [
                'id' => 'Tb-peLSI0PA',
                'title' => 'Hướng dẫn in phiếu chỉ định',
                'desc' => 'Cách in phiếu chỉ định sản xuất trên phiên bản linh hoạt',
                'category' => 'phien-ban-linh-hoat',
            ],
            [
                'id' => 'EeE_MUlhsos',
                'title' => 'Hướng dẫn sửa đơn hàng',
                'desc' => 'Cách chỉnh sửa thông tin đơn hàng đã tạo trên hệ thống',
                'category' => 'phien-ban-linh-hoat',
            ],
            [
                'id' => 'NYrd3atyVJo',
                'title' => 'Hướng dẫn chọn đơn hàng trước khi xuất hóa đơn',
                'desc' => 'Cách chọn đơn hàng hoàn thành để xuất hóa đơn trên phiên bản linh hoạt',
                'category' => 'phien-ban-linh-hoat',
            ],
            [
                'id' => 'UKyG7uziVmg',
                'title' => 'Hướng dẫn thêm ứng dụng DentalSO vào màn hình chính cho iOS',
                'desc' => 'Cách thêm shortcut DentalSO lên màn hình chính iPhone / iPad',
                'category' => 'phien-ban-linh-hoat',
            ],
            // === ĐƠN HÀNG & SẢN XUẤT ===
            [
                'id' => 'Xjw7YmIy-O8',
                'title' => 'Hướng dẫn quản lý đơn hàng sản xuất',
                'desc' => 'Cách tạo, theo dõi và quản lý đơn hàng sản xuất trên hệ thống DentalSO',
                'category' => 'don-hang',
            ],
            [
                'id' => '8-v535pFNYU',
                'title' => 'Hướng dẫn quản lý đơn hàng sản xuất (Cập nhật)',
                'desc' => 'Phiên bản cập nhật hướng dẫn quản lý đơn hàng sản xuất trên DentalSO',
                'category' => 'don-hang',
            ],
            [
                'id' => 'h1TVk4mkXa4',
                'title' => 'Hướng dẫn cho sản xuất | DentalSO',
                'desc' => 'Hướng dẫn quy trình sản xuất và cập nhật công đoạn trên DentalSO',
                'category' => 'don-hang',
            ],
            [
                'id' => 'MwmSX2xpiLY',
                'title' => 'Hướng dẫn cập nhật công đoạn trong đơn hàng',
                'desc' => 'Cách cập nhật tiến độ công đoạn sản xuất trong từng đơn hàng',
                'category' => 'don-hang',
            ],
            [
                'id' => 'pR5skyAPQZE',
                'title' => 'DentalSO - Hướng Dẫn Nhập Đơn Hàng Tháo Lắp',
                'desc' => 'Hướng dẫn chi tiết cách nhập đơn hàng tháo lắp trên hệ thống',
                'category' => 'don-hang',
            ],
            [
                'id' => '5pebBX1ZBnA',
                'title' => 'DentalSO Hướng dẫn quản lý hàng gửi thử',
                'desc' => 'Cách quản lý quy trình hàng gửi thử trên phần mềm DentalSO',
                'category' => 'don-hang',
            ],
            [
                'id' => 'hddVfQrfIBE',
                'title' => 'Hướng dẫn quản lý hàng thử - Phần mềm Quản lý Labo DentalSO',
                'desc' => 'Chi tiết cách quản lý hàng thử từ tiếp nhận đến hoàn thành',
                'category' => 'don-hang',
            ],
            [
                'id' => 'aCbTgpMw_xk',
                'title' => 'Hướng dẫn quản lý hình ảnh theo đơn hàng',
                'desc' => 'Cách tải lên và quản lý hình ảnh gắn liền với từng đơn hàng',
                'category' => 'don-hang',
            ],
            // === HÓA ĐƠN & CÔNG NỢ ===
            [
                'id' => 'W4eW-YuOoi8',
                'title' => 'Hướng dẫn quản lý hóa đơn và công nợ',
                'desc' => 'Cách tạo hóa đơn, theo dõi công nợ và đối soát thanh toán',
                'category' => 'hoa-don',
            ],
            [
                'id' => 'eJUYaaZG864',
                'title' => 'Hướng dẫn chiết khấu hoá đơn theo nhóm sản phẩm',
                'desc' => 'Cách thiết lập chiết khấu hóa đơn theo từng nhóm sản phẩm',
                'category' => 'hoa-don',
            ],
            [
                'id' => 'YbdgRwob3d0',
                'title' => 'Hướng dẫn nhập chiết khấu hóa đơn',
                'desc' => 'Chi tiết cách nhập và áp dụng chiết khấu trên hóa đơn',
                'category' => 'hoa-don',
            ],
            [
                'id' => 'sug84WWNG6k',
                'title' => 'Hướng dẫn chọn đơn hàng để xuất hóa đơn',
                'desc' => 'Cách chọn các đơn hàng hoàn thành để xuất hóa đơn thanh toán',
                'category' => 'hoa-don',
            ],
            // === BẢO HÀNH ===
            [
                'id' => 'aUUPumcSv0o',
                'title' => 'Hướng dẫn quản lý mẫu thẻ bảo hành',
                'desc' => 'Cách tạo và tùy chỉnh mẫu thẻ bảo hành điện tử trên DentalSO',
                'category' => 'bao-hanh',
            ],
            [
                'id' => 'BcXhVJo2WsI',
                'title' => 'Hướng dẫn in thẻ bảo hành',
                'desc' => 'Cách in thẻ bảo hành QR Code cho phục hình nha khoa',
                'category' => 'bao-hanh',
            ],
            // === QUẢN LÝ CHUNG ===
            [
                'id' => 'Qc9nLVEdolc',
                'title' => 'Hướng dẫn quản lý Nha khoa và Bảng giá',
                'desc' => 'Cách quản lý danh sách nha khoa đối tác và thiết lập bảng giá',
                'category' => 'quan-ly-chung',
            ],
            [
                'id' => 'PkhZH1zxtY4',
                'title' => 'Hướng dẫn quản lý người dùng và phân quyền',
                'desc' => 'Cách tạo tài khoản nhân viên và phân quyền truy cập hệ thống',
                'category' => 'quan-ly-chung',
            ],
        ];
        @endphp

        {{-- Video Grid --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6" id="video-grid">
            @foreach($videos as $index => $video)
            <div class="video-card fade-in-up group" data-category="{{ $video['category'] }}" style="animation-delay: {{ ($index % 6) * 0.08 }}s;">
                <div class="relative rounded-2xl overflow-hidden bg-white shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100">
                    {{-- Thumbnail with play overlay --}}
                    <div class="video-thumb relative cursor-pointer aspect-video overflow-hidden" data-video-id="{{ $video['id'] }}">
                        <img
                            src="https://img.youtube.com/vi/{{ $video['id'] }}/hqdefault.jpg"
                            alt="{{ $video['title'] }}"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                            loading="lazy"
                        >
                        <div class="absolute inset-0 bg-black/20 group-hover:bg-black/40 transition-colors duration-300 flex items-center justify-center">
                            <div class="w-16 h-16 rounded-full bg-red-600 shadow-lg flex items-center justify-center transform group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-7 h-7 text-white ml-1" viewBox="0 0 24 24" fill="currentColor"><polygon points="8,5 19,12 8,19"/></svg>
                            </div>
                        </div>
                        @if(!empty($video['duration']))
                        <span class="absolute bottom-2 right-2 bg-black/80 text-white text-xs font-medium px-2 py-0.5 rounded">{{ $video['duration'] }}</span>
                        @endif
                    </div>
                    {{-- Info --}}
                    <div class="p-5">
                        <h3 class="font-semibold text-[#1d1d1f] text-base leading-snug mb-2 line-clamp-2 group-hover:text-[#0071e3] transition-colors">{{ $video['title'] }}</h3>
                        <p class="text-[#86868b] text-sm leading-relaxed line-clamp-2">{{ $video['desc'] }}</p>
                        <div class="mt-3 flex items-center gap-2">
                            <span class="inline-block text-xs font-medium px-2.5 py-1 rounded-full
                                @switch($video['category'])
                                    @case('gioi-thieu') bg-blue-50 text-blue-600 @break
                                    @case('phien-ban-linh-hoat') bg-cyan-50 text-cyan-600 @break
                                    @case('don-hang') bg-emerald-50 text-emerald-600 @break
                                    @case('hoa-don') bg-amber-50 text-amber-600 @break
                                    @case('bao-hanh') bg-purple-50 text-purple-600 @break
                                    @default bg-gray-100 text-gray-600
                                @endswitch
                            ">
                                @switch($video['category'])
                                    @case('gioi-thieu') Giới thiệu @break
                                    @case('phien-ban-linh-hoat') Phiên bản linh hoạt @break
                                    @case('don-hang') Đơn hàng & Sản xuất @break
                                    @case('hoa-don') Hóa đơn & Công nợ @break
                                    @case('bao-hanh') Bảo hành @break
                                    @default Quản lý chung @break
                                @endswitch
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        {{-- Empty state --}}
        <div class="hidden text-center py-16" id="no-videos">
            <span class="material-symbols-outlined text-6xl text-[#d2d2d7] mb-4">videocam_off</span>
            <p class="text-[#86868b] text-lg">Không có video nào trong danh mục này.</p>
        </div>
    </div>
</section>

{{-- YouTube Channel CTA --}}
<section class="apple-section bg-white">
    <div class="apple-container">
        <div class="max-w-4xl mx-auto fade-in-up">
            <div class="relative rounded-3xl overflow-hidden bg-gradient-to-br from-[#1d1d1f] to-[#2d2d30] p-10 md:p-16 text-center">
                {{-- Decorative elements --}}
                <div class="absolute top-0 right-0 w-64 h-64 bg-red-600/10 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2"></div>
                <div class="absolute bottom-0 left-0 w-48 h-48 bg-blue-600/10 rounded-full blur-3xl translate-y-1/2 -translate-x-1/2"></div>

                <div class="relative z-10">
                    <div class="inline-flex items-center gap-2 bg-red-600 text-white text-sm font-semibold px-4 py-2 rounded-full mb-6">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814z"/><polygon fill="#fff" points="9.545,15.568 15.818,12 9.545,8.432"/></svg>
                        DentalSO Vietnam
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Xem thêm video<br>trên kênh DentalSO</h2>
                    <p class="text-white/60 text-lg mb-8 max-w-lg mx-auto">Đăng ký kênh để nhận thông báo khi có video hướng dẫn mới. Cập nhật liên tục các tính năng và mẹo sử dụng.</p>
                    <a href="https://www.youtube.com/@DentalSO?sub_confirmation=1" target="_blank" rel="noopener" class="inline-flex items-center gap-2 bg-red-600 hover:bg-red-700 text-white font-semibold px-8 py-3.5 rounded-full transition-colors duration-300 shadow-lg shadow-red-600/25">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814z"/><polygon fill="#fff" points="9.545,15.568 15.818,12 9.545,8.432"/></svg>
                        Đăng ký kênh ngay
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="apple-section apple-section--cta">
    <div class="apple-container text-center">
        <div class="fade-in-up">
            <h2 class="apple-headline text-white mb-4">Cần hỗ trợ thêm?</h2>
            <p class="text-white/70 text-lg mb-8 max-w-lg mx-auto">Đội ngũ DentalSO luôn sẵn sàng hỗ trợ bạn. Đặt lịch demo hoặc liên hệ trực tiếp để được tư vấn.</p>
            <div class="apple-cta-group">
                <a href="{{ home_url('yeu-cau-tu-van/') }}" class="apple-cta-primary apple-cta-primary--light">Đăng ký Demo</a>
                <a href="{{ home_url('lien-he/') }}" class="apple-cta-secondary apple-cta-secondary--light">Liên hệ<span class="apple-chevron material-symbols-outlined">chevron_right</span></a>
            </div>
        </div>
    </div>
</section>

{{-- Video Modal --}}
<div id="video-modal" class="fixed inset-0 z-[9999] hidden items-center justify-center p-4 bg-black/80 backdrop-blur-sm" style="display:none;">
    <div class="relative w-full max-w-4xl mx-auto">
        <button id="modal-close" class="absolute -top-12 right-0 text-white/80 hover:text-white transition-colors">
            <span class="material-symbols-outlined text-3xl">close</span>
        </button>
        <div class="relative rounded-2xl overflow-hidden bg-black shadow-2xl aspect-video">
            <iframe id="modal-iframe" class="absolute inset-0 w-full h-full" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </div>
</div>

<style>
    /* Filter buttons */
    .video-filter-btn {
        padding: 0.5rem 1.25rem;
        border-radius: 9999px;
        font-size: 0.875rem;
        font-weight: 500;
        color: #86868b;
        background: white;
        border: 1px solid #e5e5ea;
        cursor: pointer;
        transition: all 0.25s ease;
    }
    .video-filter-btn:hover {
        color: #1d1d1f;
        border-color: #d1d1d6;
        box-shadow: 0 2px 8px rgba(0,0,0,0.06);
    }
    .video-filter-btn.active {
        background: #1d1d1f;
        color: white;
        border-color: #1d1d1f;
    }

    /* Video card show/hide */
    .video-card {
        transition: opacity 0.35s ease, transform 0.35s ease;
    }
    .video-card.is-hidden {
        display: none;
    }

    /* line-clamp */
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    /* Fade in animation */
    .fade-in-up {
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 0.7s ease, transform 0.7s ease;
    }
    .fade-in-up.is-visible {
        opacity: 1;
        transform: translateY(0);
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', () => {
    // Intersection Observer for fade-in
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });
    document.querySelectorAll('.fade-in-up').forEach(el => observer.observe(el));

    // Category filter
    const filterBtns = document.querySelectorAll('.video-filter-btn');
    const videoCards = document.querySelectorAll('.video-card');
    const noVideos = document.getElementById('no-videos');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const filter = btn.dataset.filter;

            filterBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            let visibleCount = 0;
            videoCards.forEach(card => {
                if (filter === 'all' || card.dataset.category === filter) {
                    card.classList.remove('is-hidden');
                    visibleCount++;
                } else {
                    card.classList.add('is-hidden');
                }
            });

            noVideos.style.display = visibleCount === 0 ? 'block' : 'none';
        });
    });

    // Video modal
    const modal = document.getElementById('video-modal');
    const modalIframe = document.getElementById('modal-iframe');
    const modalClose = document.getElementById('modal-close');

    document.querySelectorAll('.video-thumb').forEach(thumb => {
        thumb.addEventListener('click', () => {
            const videoId = thumb.dataset.videoId;
            modalIframe.src = `https://www.youtube.com/embed/${videoId}?autoplay=1&rel=0`;
            modal.style.display = 'flex';
            document.body.style.overflow = 'hidden';
        });
    });

    function closeModal() {
        modal.style.display = 'none';
        modalIframe.src = '';
        document.body.style.overflow = '';
    }

    modalClose.addEventListener('click', closeModal);
    modal.addEventListener('click', (e) => {
        if (e.target === modal) closeModal();
    });
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') closeModal();
    });
});
</script>

@endsection
