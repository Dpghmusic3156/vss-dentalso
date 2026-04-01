{{-- Template Name: Solution: Labo Vừa & Nhỏ --}}
@extends('layouts.app')

@section('content')

{{-- Hero --}}
<section class="apple-section apple-hero bg-white">
    <div class="apple-container text-center">
        <div class="fade-in-up">
            <span class="apple-eyebrow">Giải pháp cho Labo</span>
            <h1 class="apple-headline mb-6">Giải pháp Phần mềm cho<br>Labo Nha khoa Vừa & Nhỏ</h1>
            <p class="text-[1.125rem] md:text-[1.375rem] font-medium text-[#1d1d1f] leading-snug max-w-3xl mx-auto mb-4">
                Đơn giản hóa Vận hành. Tổ chức Khoa học. Giao hàng Đúng hạn.
            </p>
            <p class="apple-hero-copy">
                Thay thế các bảng tính Excel dễ mắc lỗi và việc theo dõi thủ công bằng một nền tảng đơn giản, có cấu trúc. Trọn quyền kiểm soát vận hành khi labo ngày một phát triển mà không hề phức tạp.
            </p>
            <div class="apple-cta-group mt-10">
                <a href="{{ home_url('yeu-cau-tu-van/') }}" class="apple-cta-primary">Đặt Lịch Demo</a>
                <a href="{{ home_url('lien-he/') }}" class="apple-cta-secondary">Liên hệ Kinh doanh<span class="apple-chevron material-symbols-outlined">chevron_right</span></a>
            </div>
        </div>
    </div>
</section>

{{-- What You Get --}}
<section class="apple-section bg-[#f5f5f7]">
    <div class="apple-container">
        <div class="text-center max-w-3xl mx-auto mb-16 fade-in-up">
            <span class="apple-eyebrow">Tính năng</span>
            <h2 class="apple-headline-sm">Bạn Nhận Được Gì</h2>
        </div>
        <div class="grid sm:grid-cols-3 gap-6 max-w-6xl mx-auto">
            <div class="apple-card apple-card--white fade-in-up" style="animation-delay: 0.05s;">
                <div class="apple-card-inner">
                    <div class="apple-card-icon bg-[#e3f0fc]">
                        <span class="material-symbols-outlined text-[#0071e3]">folder_open</span>
                    </div>
                    <h3 class="apple-card-title">Quản lý Ca Tập trung</h3>
                    <ul class="apple-card-desc space-y-2 mt-4 text-[#86868b] text-[0.9375rem] mb-4">
                        <li class="flex items-start leading-[1.4]"><span class="material-symbols-outlined text-base mr-2 text-[#0071e3] mt-0.5">check</span> Tiếp nhận ca kỹ thuật số</li>
                        <li class="flex items-start leading-[1.4]"><span class="material-symbols-outlined text-base mr-2 text-[#0071e3] mt-0.5">check</span> Theo dõi ca theo trạng thái</li>
                        <li class="flex items-start leading-[1.4]"><span class="material-symbols-outlined text-base mr-2 text-[#0071e3] mt-0.5">check</span> Phân công kỹ thuật viên</li>
                        <li class="flex items-start leading-[1.4]"><span class="material-symbols-outlined text-base mr-2 text-[#0071e3] mt-0.5">check</span> Lịch sử ca & bảo hành</li>
                    </ul>
                    <p class="apple-card-desc italic mt-auto">Mọi thứ được sắp xếp gọn gàng trong một hệ thống.</p>
                </div>
            </div>
            
            <div class="apple-card apple-card--white fade-in-up" style="animation-delay: 0.1s;">
                <div class="apple-card-inner">
                    <div class="apple-card-icon bg-[#fef3e2]">
                        <span class="material-symbols-outlined text-[#ff9f0a]">account_tree</span>
                    </div>
                    <h3 class="apple-card-title">Chuẩn hóa Quy trình</h3>
                    <ul class="apple-card-desc space-y-2 mt-4 text-[#86868b] text-[0.9375rem] mb-4">
                        <li class="flex items-start leading-[1.4]"><span class="material-symbols-outlined text-base mr-2 text-[#ff9f0a] mt-0.5">check</span> Công đoạn sản xuất rõ ràng</li>
                        <li class="flex items-start leading-[1.4]"><span class="material-symbols-outlined text-base mr-2 text-[#ff9f0a] mt-0.5">check</span> Giảm thiểu sai lệch thông tin</li>
                        <li class="flex items-start leading-[1.4]"><span class="material-symbols-outlined text-base mr-2 text-[#ff9f0a] mt-0.5">check</span> Thời gian xử lý nhất quán</li>
                    </ul>
                    <p class="apple-card-desc italic mt-auto">Thay thế điều phối thủ công bằng quy trình có cấu trúc.</p>
                </div>
            </div>

            <div class="apple-card apple-card--white fade-in-up" style="animation-delay: 0.15s;">
                <div class="apple-card-inner">
                    <div class="apple-card-icon bg-[#e2f5e9]">
                        <span class="material-symbols-outlined text-[#30d158]">verified</span>
                    </div>
                    <h3 class="apple-card-title">Bảo hành & Hậu mãi</h3>
                    <ul class="apple-card-desc space-y-2 mt-4 text-[#86868b] text-[0.9375rem] mb-4">
                        <li class="flex items-start leading-[1.4]"><span class="material-symbols-outlined text-base mr-2 text-[#30d158] mt-0.5">check</span> Theo dõi bảo hành từng ca</li>
                        <li class="flex items-start leading-[1.4]"><span class="material-symbols-outlined text-base mr-2 text-[#30d158] mt-0.5">check</span> Quản lý làm lại hiệu quả</li>
                        <li class="flex items-start leading-[1.4]"><span class="material-symbols-outlined text-base mr-2 text-[#30d158] mt-0.5">check</span> Duy trì niềm tin khách hàng</li>
                    </ul>
                    <p class="apple-card-desc italic mt-auto">Không còn mất mát hay mập mờ hồ sơ bảo hành.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Designed for Growing Labs --}}
<section class="apple-section bg-white">
    <div class="apple-container">
        <div class="apple-split">
            <div class="apple-split-text fade-in-up">
                <span class="apple-eyebrow">Nền tảng</span>
                <h2 class="apple-headline-sm mb-4">Thiết kế cho Labo Đang Phát triển</h2>
                <p class="apple-body mb-6">DentalSO giúp bạn xây dựng nền tảng vững chắc để mở rộng quy mô mà không gặp phải sự hỗn loạn trong vận hành.</p>
                <ul class="space-y-3">
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#bf5af2] text-xl mt-0.5">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Giảm thiểu sự hỗn loạn vận hành</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#bf5af2] text-xl mt-0.5">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Nâng cao khả năng theo dõi ca</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#bf5af2] text-xl mt-0.5">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Giao hàng đúng hạn liên tục</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#bf5af2] text-xl mt-0.5">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Xây dựng nền tảng dễ dàng mở rộng quy mô</span>
                    </li>
                </ul>
            </div>
            <div class="apple-split-media fade-in-up" style="animation-delay: 0.15s;">
                <div class="bg-[#f5f5f7] rounded-2xl shadow-lg overflow-hidden p-1">
                    <img src="{{ get_site_url() }}/wp-content/uploads/2022/12/dental-online-lab-dashboard.png" alt="DentalSO Platform Dashboard" class="apple-split-img rounded-xl" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- When Is This Right — Dark Section --}}
<section class="apple-section apple-section--dark">
    <div class="apple-container">
        <div class="text-center max-w-3xl mx-auto mb-16 fade-in-up">
            <span class="apple-eyebrow apple-eyebrow--light">Phù hợp với ai?</span>
            <h2 class="apple-headline text-white">Giải pháp Này Phù hợp<br>Với Bạn Khi Nào?</h2>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5 max-w-4xl mx-auto">
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.05s;">
                <span class="material-symbols-outlined text-4xl text-[#ff453a] mb-4">table_view</span>
                <p class="text-white font-semibold text-sm mb-1">Theo dõi Thủ công</p>
                <p class="text-[#86868b] text-xs leading-relaxed">Bạn quản lý ca làm bằng Excel hay giấy tờ.</p>
            </div>
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.1s;">
                <span class="material-symbols-outlined text-4xl text-[#ff9f0a] mb-4">search_off</span>
                <p class="text-white font-semibold text-sm mb-1">Thiếu Tầm nhìn</p>
                <p class="text-[#86868b] text-xs leading-relaxed">Bạn gặp khó khăn loay hoay khi theo dõi vị trí ca.</p>
            </div>
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.15s;">
                <span class="material-symbols-outlined text-4xl text-[#0a84ff] mb-4">account_tree</span>
                <p class="text-white font-semibold text-sm mb-1">Cần Khắc phục Rối ren</p>
                <p class="text-[#86868b] text-xs leading-relaxed">Bạn muốn sắp xếp khoa học nhưng sợ phần mềm quá phức tạp.</p>
            </div>
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.2s;">
                <span class="material-symbols-outlined text-4xl text-[#30d158] mb-4">rocket_launch</span>
                <p class="text-white font-semibold text-sm mb-1">Đang Mở rộng</p>
                <p class="text-[#86868b] text-xs leading-relaxed">Labo đang tăng trưởng nhưng chưa cần hệ thống MES quá lớn.</p>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="apple-section apple-section--cta">
    <div class="apple-container text-center">
        <div class="fade-in-up">
            <h2 class="apple-headline text-white mb-6">Bắt đầu xây dựng quy trình<br>vận hành bài bản ngay hôm nay.</h2>
            <div class="apple-cta-group">
                <a href="{{ home_url('yeu-cau-tu-van/') }}" class="apple-cta-primary apple-cta-primary--light">Đặt Lịch Demo</a>
                <a href="{{ home_url('lien-he/') }}" class="apple-cta-secondary apple-cta-secondary--light">Liên Hệ Kinh Doanh<span class="apple-chevron material-symbols-outlined">chevron_right</span></a>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => { if (entry.isIntersecting) { entry.target.classList.add('is-visible'); observer.unobserve(entry.target); }});
    }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });
    document.querySelectorAll('.fade-in-up').forEach(el => observer.observe(el));
});
</script>

@endsection
