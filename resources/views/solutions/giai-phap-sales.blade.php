{{-- Template Name: Solution: Giải pháp Sales --}}
@extends('layouts.app')

@section('content')

{{-- Hero --}}
<section class="apple-section apple-hero bg-white">
    <div class="apple-container text-center">
        <div class="fade-in-up">
            <span class="apple-eyebrow">Giải pháp cho Sales</span>
            <h1 class="apple-headline mb-6">Công cụ quản lý ca<br>cho Sales Nha khoa</h1>
            <p class="apple-hero-copy">
                Quản lý nhiều phòng khám, gửi ca và theo dõi tiến độ sản xuất — tất cả trong một hệ thống mạnh mẽ dành riêng cho kinh doanh nha khoa.
            </p>
            <div class="apple-cta-group mt-10">
                <a href="{{ home_url('yeu-cau-tu-van/') }}" class="apple-cta-primary">Đăng Ký Demo</a>
                <a href="{{ home_url('san-pham/dentalso-ket-noi/') }}" class="apple-cta-secondary">Khám phá Connect<span class="apple-chevron material-symbols-outlined">chevron_right</span></a>
            </div>
        </div>
    </div>
</section>

{{-- Vấn đề — Dark Section --}}
<section class="apple-section apple-section--dark">
    <div class="apple-container">
        <div class="text-center max-w-3xl mx-auto mb-16 fade-in-up">
            <span class="apple-eyebrow apple-eyebrow--light">Vấn đề</span>
            <h2 class="apple-headline text-white">Bán hàng không nên<br>là xoay xở.</h2>
            <p class="apple-body text-[#86868b] mt-4 max-w-xl mx-auto">
                Không có công cụ phù hợp, sales mất hàng giờ chạy theo cập nhật tiến độ và quản lý ca trên nhiều phòng khám.
            </p>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5 max-w-4xl mx-auto">
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.05s;">
                <span class="material-symbols-outlined text-4xl text-[#ff453a] mb-4">groups</span>
                <p class="text-white font-semibold text-sm mb-1">Nhiều phòng khám</p>
                <p class="text-[#86868b] text-xs leading-relaxed">Quản lý tài khoản đa phòng khám mà không có cái nhìn tập trung.</p>
            </div>
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.1s;">
                <span class="material-symbols-outlined text-4xl text-[#ff9f0a] mb-4">search_off</span>
                <p class="text-white font-semibold text-sm mb-1">Ca bị thất lạc</p>
                <p class="text-[#86868b] text-xs leading-relaxed">Ca bị lạc giữa email, tin nhắn và Zalo.</p>
            </div>
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.15s;">
                <span class="material-symbols-outlined text-4xl text-[#bf5af2] mb-4">visibility_off</span>
                <p class="text-white font-semibold text-sm mb-1">Không thấy tiến độ</p>
                <p class="text-[#86868b] text-xs leading-relaxed">Không biết khi nào ca của khách hàng sẽ xong.</p>
            </div>
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.2s;">
                <span class="material-symbols-outlined text-4xl text-[#0a84ff] mb-4">snippet_folder</span>
                <p class="text-white font-semibold text-sm mb-1">File phân tán</p>
                <p class="text-[#86868b] text-xs leading-relaxed">Tài liệu nằm rải rác trên email, chat và hồ sơ giấy.</p>
            </div>
        </div>
    </div>
</section>

{{-- Tính năng — Feature Cards --}}
<section class="apple-section bg-[#f5f5f7]">
    <div class="apple-container">
        <div class="text-center max-w-3xl mx-auto mb-16 fade-in-up">
            <span class="apple-eyebrow">Khả năng chính</span>
            <h2 class="apple-headline-sm">Bộ công cụ hoàn chỉnh<br>cho sales.</h2>
        </div>
        <div class="grid sm:grid-cols-2 gap-6 max-w-4xl mx-auto">
            <div class="apple-card apple-card--white fade-in-up" style="animation-delay: 0.05s;">
                <div class="apple-card-inner">
                    <div class="apple-card-icon bg-[#e3f0fc]">
                        <span class="material-symbols-outlined text-[#0071e3]">assignment</span>
                    </div>
                    <h3 class="apple-card-title">Gửi ca thay phòng khám</h3>
                    <p class="apple-card-desc">Tạo và gửi ca thay mặt phòng khám với phiếu chỉ định số hóa. Tải lên scan, ảnh và file trong một nơi duy nhất.</p>
                </div>
            </div>
            <div class="apple-card apple-card--white fade-in-up" style="animation-delay: 0.1s;">
                <div class="apple-card-inner">
                    <div class="apple-card-icon bg-[#fef3e2]">
                        <span class="material-symbols-outlined text-[#ff9f0a]">monitoring</span>
                    </div>
                    <h3 class="apple-card-title">Giám sát tiến độ sản xuất</h3>
                    <p class="apple-card-desc">Theo dõi từng ca trên tất cả phòng khám trong một dashboard. Xem cập nhật công đoạn thời gian thực từ xưởng.</p>
                </div>
            </div>
            <div class="apple-card apple-card--white fade-in-up" style="animation-delay: 0.15s;">
                <div class="apple-card-inner">
                    <div class="apple-card-icon bg-[#e2f5e9]">
                        <span class="material-symbols-outlined text-[#30d158]">local_shipping</span>
                    </div>
                    <h3 class="apple-card-title">Theo dõi lịch giao hàng</h3>
                    <p class="apple-card-desc">Biết chính xác khi nào mỗi ca sẽ được giao. Chủ động cập nhật cho khách hàng thay vì chờ Labo gọi lại.</p>
                </div>
            </div>
            <div class="apple-card apple-card--white fade-in-up" style="animation-delay: 0.2s;">
                <div class="apple-card-inner">
                    <div class="apple-card-icon bg-[#ece5f6]">
                        <span class="material-symbols-outlined text-[#bf5af2]">folder_managed</span>
                    </div>
                    <h3 class="apple-card-title">Tài liệu có tổ chức</h3>
                    <p class="apple-card-desc">Mọi file, ghi chú và lịch sử trao đổi được lưu theo ca. Truy vết đầy đủ cho mọi giao dịch.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Cách hoạt động — 3 bước --}}
<section class="apple-section bg-white">
    <div class="apple-container">
        <div class="text-center max-w-3xl mx-auto mb-16 fade-in-up">
            <span class="apple-eyebrow">Quy trình</span>
            <h2 class="apple-headline-sm">Tinh gọn từ đầu đến cuối.</h2>
        </div>
        <div class="grid md:grid-cols-3 gap-8 max-w-4xl mx-auto">
            <div class="text-center fade-in-up" style="animation-delay: 0.05s;">
                <div class="w-16 h-16 rounded-full bg-[#e3f0fc] flex items-center justify-center mx-auto mb-5">
                    <span class="text-2xl font-bold text-[#0071e3]">1</span>
                </div>
                <h3 class="text-lg font-bold text-[#1d1d1f] mb-2">Tạo ca</h3>
                <p class="text-sm text-[#86868b] leading-relaxed max-w-xs mx-auto">Chọn phòng khám, điền phiếu chỉ định số hóa và đính kèm file scan hoặc ảnh.</p>
            </div>
            <div class="text-center fade-in-up" style="animation-delay: 0.1s;">
                <div class="w-16 h-16 rounded-full bg-[#fef3e2] flex items-center justify-center mx-auto mb-5">
                    <span class="text-2xl font-bold text-[#ff9f0a]">2</span>
                </div>
                <h3 class="text-lg font-bold text-[#1d1d1f] mb-2">Theo dõi</h3>
                <p class="text-sm text-[#86868b] leading-relaxed max-w-xs mx-auto">Giám sát tiến độ trên tất cả phòng khám. Trao đổi trực tiếp với đội Labo về bất kỳ ca nào.</p>
            </div>
            <div class="text-center fade-in-up" style="animation-delay: 0.15s;">
                <div class="w-16 h-16 rounded-full bg-[#e2f5e9] flex items-center justify-center mx-auto mb-5">
                    <span class="text-2xl font-bold text-[#30d158]">3</span>
                </div>
                <h3 class="text-lg font-bold text-[#1d1d1f] mb-2">Giao hàng</h3>
                <p class="text-sm text-[#86868b] leading-relaxed max-w-xs mx-auto">Nhận thông báo giao hàng và chủ động cập nhật cho phòng khám. Xây dựng niềm tin qua sự minh bạch.</p>
            </div>
        </div>
    </div>
</section>

{{-- Quản lý đa tài khoản — Split Layout --}}
<section class="apple-section bg-[#f5f5f7]">
    <div class="apple-container">
        <div class="apple-split apple-split--reverse">
            <div class="apple-split-text fade-in-up">
                <span class="apple-eyebrow">Quản lý đa tài khoản</span>
                <h2 class="apple-headline-sm mb-4">Một dashboard.<br>Tất cả phòng khám.</h2>
                <p class="apple-body mb-6">Dù bạn quản lý 5 hay 50 phòng khám, DentalSO Connect cho bạn cái nhìn tổng hợp về từng ca, từng trạng thái và từng deadline trên toàn bộ mạng lưới.</p>
                <ul class="space-y-3">
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#30d158] text-xl mt-0.5">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Quản lý tất cả phòng khám từ một tài khoản</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#30d158] text-xl mt-0.5">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Lọc và tìm kiếm xuyên tài khoản</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#30d158] text-xl mt-0.5">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Trao đổi trực tiếp với đội Labo</span>
                    </li>
                </ul>
                <div class="mt-8">
                    <a href="{{ home_url('san-pham/dentalso-ket-noi/') }}" class="apple-link">Tìm hiểu thêm về Connect<span class="apple-chevron material-symbols-outlined">chevron_right</span></a>
                </div>
            </div>
            <div class="apple-split-media fade-in-up" style="animation-delay: 0.15s;">
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden p-1">
                    <img src="{{ get_site_url() }}/wp-content/uploads/2022/08/clinic-dashboard.png" alt="DentalSO — Dashboard Sales Agent - Phần mềm quản lý labo nha khoa giá rẻ, cho dùng thử miễn phí" class="apple-split-img rounded-xl" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="apple-section apple-section--cta">
    <div class="apple-container text-center">
        <div class="fade-in-up">
            <h2 class="apple-headline text-white mb-4">Nâng tầm đội ngũ<br>kinh doanh.</h2>
            <p class="text-white/70 text-lg mb-8 max-w-lg mx-auto">Trang bị cho sales công cụ quản lý ca hiệu quả và xây dựng quan hệ khách hàng vững chắc hơn.</p>
            <div class="apple-cta-group">
                <a href="{{ home_url('yeu-cau-tu-van/') }}" class="apple-cta-primary apple-cta-primary--light">Đăng Ký Demo</a>
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
