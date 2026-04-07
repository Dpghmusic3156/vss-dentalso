{{-- Template Name: Solution: Labo Trung bình & Lớn --}}
@extends('layouts.app')

@section('content')

{{-- Hero --}}
<section class="apple-section apple-hero bg-white">
    <div class="apple-container text-center">
        <div class="fade-in-up">
            <span class="apple-eyebrow">Giải pháp Doanh nghiệp</span>
            <h1 class="apple-headline mb-6">Giải pháp MES cho Labo<br>Nha khoa Trung bình &amp; Lớn</h1>
            <p class="text-[1.125rem] md:text-[1.375rem] font-medium text-[#1d1d1f] leading-snug max-w-3xl mx-auto mb-4">
                Kiểm soát Sản xuất Thời gian thực cho Labo Công suất cao
            </p>
            <p class="apple-hero-copy">
                Khi Labo phát triển, sự phức tạp cũng tăng theo: hàng trăm ca mỗi ngày, nhiều phòng ban, thử thách trong điều phối kỹ thuật viên và áp lực tiến độ giao hàng. DentalSO MES cung cấp khả năng kiểm soát vận hành cần thiết để mở rộng quy mô hiệu quả.
            </p>
            <div class="apple-cta-group mt-10">
                <a href="{{ home_url('yeu-cau-tu-van/') }}" class="apple-cta-primary">Đăng Ký Demo MES</a>
                <a href="{{ home_url('lien-he/') }}" class="apple-cta-secondary">Liên hệ Kinh doanh<span class="apple-chevron material-symbols-outlined">chevron_right</span></a>
            </div>
        </div>
    </div>
</section>

{{-- Full Production Floor Visibility --}}
<section class="apple-section bg-[#f5f5f7]">
    <div class="apple-container">
        <div class="apple-split">
            <div class="apple-split-text fade-in-up">
                <span class="apple-eyebrow">Minh bạch</span>
                <h2 class="apple-headline-sm mb-4">Minh bạch Toàn bộ<br>Xưởng Sản xuất</h2>
                <p class="apple-body mb-6">Biết chính xác mọi chuyện đang diễn ra trong xưởng của bạn ở bất kỳ thời điểm nào.</p>
                <ul class="space-y-3">
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#0071e3] text-xl mt-0.5">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Dashboard thời gian thực cho mọi ca</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#0071e3] text-xl mt-0.5">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Theo dõi tiến độ theo từng công đoạn</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#0071e3] text-xl mt-0.5">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Giám sát khối량 công việc của kỹ thuật viên</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#0071e3] text-xl mt-0.5">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Phân tích &amp; xác định điểm nghẽn</span>
                    </li>
                </ul>
            </div>
            <div class="apple-split-media fade-in-up" style="animation-delay: 0.15s;">
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden p-1">
                    <img src="{{ get_site_url() }}/wp-content/uploads/2022/12/dental-online-lab-dashboard.png" alt="DentalSO MES Dashboard - Phần mềm quản lý labo nha khoa giá rẻ, cho dùng thử miễn phí" class="apple-split-img rounded-xl" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Case-by-Case Tracking --}}
<section class="apple-section bg-white">
    <div class="apple-container">
        <div class="apple-split apple-split--reverse">
            <div class="apple-split-text fade-in-up">
                <span class="apple-eyebrow">Truy xuất nguồn gốc</span>
                <h2 class="apple-headline-sm mb-4">Theo dõi Từng ca<br>Riêng biệt</h2>
                <p class="apple-body mb-6">Minh bạch hoàn toàn từ đầu đến cuối. Biết ngay toàn bộ bức tranh của bất kỳ ca nào.</p>
                <ul class="space-y-3">
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#bf5af2] text-xl mt-0.5">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Công đoạn sản xuất hiện tại</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#bf5af2] text-xl mt-0.5">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Cập nhật kỹ thuật viên phụ trách</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#bf5af2] text-xl mt-0.5">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Thời gian đã trôi qua trong quy trình</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#bf5af2] text-xl mt-0.5">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Hạn chót giao hàng &amp; Mức độ ưu tiên</span>
                    </li>
                </ul>
            </div>
            <div class="apple-split-media fade-in-up" style="animation-delay: 0.15s;">
                <div class="bg-[#f5f5f7] rounded-2xl shadow-lg overflow-hidden p-1">
                    <img src="{{ get_site_url() }}/wp-content/uploads/2022/08/clinic-dashboard.png" alt="DentalSO Theo Dõi Ca Sản Xuất - Phần mềm quản lý labo nha khoa giá rẻ, cho dùng thử miễn phí" class="apple-split-img rounded-xl" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Intelligent Priority-Based Scheduling --}}
<section class="apple-section bg-[#f5f5f7]">
    <div class="apple-container">
        <div class="apple-split">
            <div class="apple-split-text fade-in-up">
                <span class="apple-eyebrow">Tự động hóa</span>
                <h2 class="apple-headline-sm mb-4">Xếp lịch Ưu tiên<br>Thông minh</h2>
                <p class="apple-body mb-6">Kỹ thuật viên luôn biết việc tiếp theo cần làm. DentalSO MES tự động ưu tiên ca làm để tối đa hóa độ hiệu quả.</p>
                <ul class="space-y-3">
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#ff9f0a] text-xl mt-0.5">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Sắp xếp theo hạn định giao hàng</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#ff9f0a] text-xl mt-0.5">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Dựa trên năng lực sản xuất thực tế</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#ff9f0a] text-xl mt-0.5">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Khấu trừ số giờ làm việc còn lại</span>
                    </li>
                </ul>
            </div>
            <div class="apple-split-media fade-in-up" style="animation-delay: 0.15s;">
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden p-1">
                    <img src="{{ get_site_url() }}/wp-content/uploads/2022/12/dental-online-lab-dashboard.png" alt="DentalSO Lịch Ưu Tiên - Phần mềm quản lý labo nha khoa giá rẻ, cho dùng thử miễn phí" class="apple-split-img rounded-xl" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Prevent Delays & Improve Throughput --}}
<section class="apple-section bg-white">
    <div class="apple-container">
        <div class="apple-split apple-split--reverse">
            <div class="apple-split-text fade-in-up">
                <span class="apple-eyebrow">Năng suất</span>
                <h2 class="apple-headline-sm mb-4">Ngăn chặn Trễ hẹn<br>&amp; Tăng Sản lượng</h2>
                <p class="apple-body mb-6">Chuyển từ bị động 'chữa cháy' sang quản lý chủ động với dữ liệu vận hành thời gian thực.</p>
                <ul class="space-y-3">
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#30d158] text-xl mt-0.5">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Cảnh báo rủi ro trễ hẹn</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#30d158] text-xl mt-0.5">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Phát hiện khu vực làm việc quá tải</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#30d158] text-xl mt-0.5">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Thông tin chi tiết về điểm nghẽn quy trình</span>
                    </li>
                </ul>
            </div>
            <div class="apple-split-media fade-in-up" style="animation-delay: 0.15s;">
                <div class="bg-[#f5f5f7] rounded-2xl shadow-lg overflow-hidden p-1">
                    <img src="{{ get_site_url() }}/wp-content/uploads/2022/08/clinic-dashboard.png" alt="DentalSO MES Báo cáo Cảnh báo - Phần mềm quản lý labo nha khoa giá rẻ, cho dùng thử miễn phí" class="apple-split-img rounded-xl" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Built for Scaling Operations --}}
<section class="apple-section bg-[#f5f5f7]">
    <div class="apple-container">
        <div class="text-center max-w-3xl mx-auto mb-16 fade-in-up">
            <span class="apple-eyebrow">Khả năng Mở rộng</span>
            <h2 class="apple-headline-sm">Thiết kế để Mở rộng Quy mô</h2>
            <p class="apple-body mt-3 max-w-xl mx-auto">
                DentalSO MES là giải pháp lý tưởng cho các Labo chuẩn bị bước sang quy mô doanh nghiệp.
            </p>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 max-w-5xl mx-auto">
            <div class="apple-card apple-card--white fade-in-up" style="animation-delay: 0.05s;">
                <div class="apple-card-inner">
                    <div class="apple-card-icon bg-[#e3f0fc]">
                        <span class="material-symbols-outlined text-[#0071e3]">business</span>
                    </div>
                    <p class="text-[#1d1d1f] font-semibold text-[0.9375rem] mt-4">Labo Sản lượng Cao</p>
                </div>
            </div>
            <div class="apple-card apple-card--white fade-in-up" style="animation-delay: 0.1s;">
                <div class="apple-card-inner">
                    <div class="apple-card-icon bg-[#fef3e2]">
                        <span class="material-symbols-outlined text-[#ff9f0a]">account_tree</span>
                    </div>
                    <p class="text-[#1d1d1f] font-semibold text-[0.9375rem] mt-4">Vận hành Đa Phòng ban</p>
                </div>
            </div>
            <div class="apple-card apple-card--white fade-in-up" style="animation-delay: 0.15s;">
                <div class="apple-card-inner">
                    <div class="apple-card-icon bg-[#ece5f6]">
                        <span class="material-symbols-outlined text-[#bf5af2]">fact_check</span>
                    </div>
                    <p class="text-[#1d1d1f] font-semibold text-[0.9375rem] mt-4">Cam kết Giao hàng Nghiêm ngặt</p>
                </div>
            </div>
            <div class="apple-card apple-card--white fade-in-up" style="animation-delay: 0.2s;">
                <div class="apple-card-inner">
                    <div class="apple-card-icon bg-[#e2f5e9]">
                        <span class="material-symbols-outlined text-[#30d158]">precision_manufacturing</span>
                    </div>
                    <p class="text-[#1d1d1f] font-semibold text-[0.9375rem] mt-4">Chuyển hóa Sản xuất Số</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- When Is This Right For You — Dark Section --}}
<section class="apple-section apple-section--dark">
    <div class="apple-container">
        <div class="text-center max-w-3xl mx-auto mb-16 fade-in-up">
            <span class="apple-eyebrow apple-eyebrow--light">Phù hợp với ai?</span>
            <h2 class="apple-headline text-white">Giải pháp Này Phù hợp<br>Với Bạn Khi Nào?</h2>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5 max-w-4xl mx-auto">
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.05s;">
                <span class="material-symbols-outlined text-4xl text-[#ff453a] mb-4">visibility_off</span>
                <p class="text-white font-semibold text-sm mb-1">Thiếu Tầm Nhìn Số</p>
                <p class="text-[#86868b] text-xs leading-relaxed">Bạn chật vật theo dõi sản xuất trong thời gian thực.</p>
            </div>
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.1s;">
                <span class="material-symbols-outlined text-4xl text-[#ff9f0a] mb-4">history_toggle_off</span>
                <p class="text-white font-semibold text-sm mb-1">Trễ Hẹn Thường Xuyên</p>
                <p class="text-[#86868b] text-xs leading-relaxed">Bạn bị lỡ hẹn do không nắm rõ trạng thái ca.</p>
            </div>
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.15s;">
                <span class="material-symbols-outlined text-4xl text-[#0a84ff] mb-4">groups</span>
                <p class="text-white font-semibold text-sm mb-1">Đội Ngũ Đông Đảo</p>
                <p class="text-[#86868b] text-xs leading-relaxed">Bạn quản lý đội ngũ lớn các kỹ thuật viên chế tác.</p>
            </div>
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.2s;">
                <span class="material-symbols-outlined text-4xl text-[#30d158] mb-4">account_tree</span>
                <p class="text-white font-semibold text-sm mb-1">Cần Cấu Trúc Hóa</p>
                <p class="text-[#86868b] text-xs leading-relaxed">Bạn cần hệ thống kiểm soát sản xuất bài bản chuyên nghiệp.</p>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="apple-section apple-section--cta">
    <div class="apple-container text-center">
        <div class="fade-in-up">
            <h2 class="apple-headline text-white mb-6">Làm chủ hoàn toàn<br>xưởng sản xuất của bạn.</h2>
            <div class="apple-cta-group">
                <a href="{{ home_url('yeu-cau-tu-van/') }}" class="apple-cta-primary apple-cta-primary--light">Đăng Ký Demo MES</a>
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
