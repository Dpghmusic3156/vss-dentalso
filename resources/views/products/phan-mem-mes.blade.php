{{-- Template Name: Product: Quản lý sản xuất --}}
@extends('layouts.app')

@section('content')

{{-- Hero --}}
<section class="apple-section apple-hero bg-white">
    <div class="apple-container text-center">
        <div class="fade-in-up">
            <span class="apple-eyebrow">Hệ thống quản lý sản xuất</span>
            <h1 class="apple-headline mb-6">Quản lý sản xuất (MES)</h1>
            <p class="apple-hero-copy">
                Theo dõi xưởng sản xuất thời gian thực. Kiểm soát từng ca. Giao hàng đúng hẹn — mọi lúc.
            </p>
            <div class="apple-cta-group my-10">
                <a href="{{ home_url('yeu-cau-tu-van/?product=' . urlencode('Quản lý sản xuất (MES)')) }}" class="apple-cta-primary">Đăng Ký Demo MES</a>
                <a href="{{ home_url('san-pham/phan-mem-dental-lab/') }}" class="apple-cta-secondary">Khám phá nền tảng<span class="apple-chevron material-symbols-outlined">chevron_right</span></a>
            </div>
        </div>
        <div class="fade-in-up mt-10" style="animation-delay: 0.2s;">
            <div class="bg-white rounded-2xl overflow-hidden p-1 max-w-5xl mx-auto shadow-sm">
                <img src="@asset('images/mes-dashboard-hero.png')" alt="Quản lý sản xuất — Bảng điều khiển giám sát sản xuất thời gian thực" class="rounded-xl w-full" loading="lazy">
            </div>
        </div>
    </div>
</section>

{{-- MES là gì — Dark Section --}}
<section class="apple-section apple-section--dark">
    <div class="apple-container">
        <div class="text-center max-w-3xl mx-auto mb-16 fade-in-up">
            <span class="apple-eyebrow apple-eyebrow--light">MES là gì?</span>
            <h2 class="apple-headline text-white">Trái tim sản xuất<br>của DentalSO.</h2>
            <p class="apple-body text-[#86868b] mt-4 max-w-xl mx-auto">
                Quản lý sản xuất biến quy trình phức tạp của Labo thành hệ thống có cấu trúc, theo dõi được và ưu tiên theo deadline — được thiết kế riêng cho sản xuất nha khoa.
            </p>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5 max-w-4xl mx-auto">
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.05s;">
                <span class="material-symbols-outlined text-4xl text-[#0a84ff] mb-4">monitoring</span>
                <p class="text-white font-semibold text-sm mb-1">Giám sát thời gian thực</p>
                <p class="text-[#86868b] text-xs leading-relaxed">Dashboard trực tiếp hiển thị từng ca, từng công đoạn, từng kỹ thuật viên.</p>
            </div>
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.1s;">
                <span class="material-symbols-outlined text-4xl text-[#30d158] mb-4">route</span>
                <p class="text-white font-semibold text-sm mb-1">Theo dõi theo từng ca</p>
                <p class="text-[#86868b] text-xs leading-relaxed">Theo dõi từng ca từ lúc nhận đến giao hàng với truy vết đầy đủ.</p>
            </div>
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.15s;">
                <span class="material-symbols-outlined text-4xl text-[#ff9f0a] mb-4">sort</span>
                <p class="text-white font-semibold text-sm mb-1">Sắp lịch thông minh</p>
                <p class="text-[#86868b] text-xs leading-relaxed">Tự động ưu tiên dựa trên deadline và năng lực sản xuất.</p>
            </div>
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.2s;">
                <span class="material-symbols-outlined text-4xl text-[#ff453a] mb-4">crisis_alert</span>
                <p class="text-white font-semibold text-sm mb-1">Ngăn ngừa trễ hẹn</p>
                <p class="text-[#86868b] text-xs leading-relaxed">Cảnh báo chủ động khi phát hiện tắc nghẽn và nguy cơ trễ deadline.</p>
            </div>
        </div>
    </div>
</section>

{{-- Tính năng 1: Giám sát xưởng --}}
<section class="apple-section bg-[#f5f5f7]">
    <div class="apple-container">
        <div class="apple-split">
            <div class="apple-split-text fade-in-up">
                <span class="apple-eyebrow">Dashboard trực tiếp</span>
                <h2 class="apple-headline-sm mb-4">Giám sát xưởng<br>thời gian thực.</h2>
                <p class="apple-body mb-6">Nắm bắt toàn bộ hoạt động chỉ với một cái nhìn. Quản lý sản xuất cung cấp bảng điều khiển vận hành trực tiếp, hiển thị mọi thông tin bạn cần để ra quyết định nhanh chóng.</p>
                <ul class="space-y-3">
                    <li class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-[#0071e3] text-xl flex-shrink-0">visibility</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Ca đang xử lý theo từng công đoạn</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-[#0071e3] text-xl flex-shrink-0">group</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Phân bổ khối lượng công việc kỹ thuật viên</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-[#ff453a] text-xl flex-shrink-0">warning</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Ca trễ hoặc có nguy cơ được cảnh báo ngay</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-[#30d158] text-xl flex-shrink-0">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Ca hoàn thành, sẵn sàng giao hàng</span>
                    </li>
                </ul>
            </div>
            <div class="apple-split-media fade-in-up" style="animation-delay: 0.15s;">
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden p-1">
                    <img src="{{ get_site_url() }}/wp-content/uploads/2022/12/dental-online-lab-dashboard.png" alt="Quản lý sản xuất — Dashboard giám sát sản xuất thời gian thực" class="apple-split-img rounded-xl" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Tính năng 2: Theo dõi ca — Pipeline sản xuất --}}
<section class="apple-section bg-white">
    <div class="apple-container">
        <div class="text-center max-w-3xl mx-auto mb-16 fade-in-up">
            <span class="apple-eyebrow">Truy vết đầy đủ</span>
            <h2 class="apple-headline-sm">Theo dõi từng ca<br>từ đầu đến cuối.</h2>
            <p class="apple-body mt-3 max-w-xl mx-auto">
                Mỗi ca đi qua các công đoạn sản xuất có cấu trúc rõ ràng. Theo dõi tiến độ, kỹ thuật viên phụ trách và deadline giao hàng theo thời gian thực.
            </p>
        </div>

        {{-- Pipeline sản xuất --}}
        <div class="max-w-5xl mx-auto mb-16 fade-in-up">
            <div class="flex flex-wrap lg:flex-nowrap justify-center lg:justify-between items-center gap-2 text-xs font-medium text-[#1d1d1f]">
                <span class="px-4 py-2 bg-[#e3f0fc] text-[#0071e3] rounded-full font-semibold whitespace-nowrap">Nhận ca</span>
                <span class="text-[#86868b] font-bold">→</span>
                <span class="px-4 py-2 bg-[#f5f5f7] rounded-full border border-[#d2d2d7] whitespace-nowrap">Thiết kế</span>
                <span class="text-[#86868b] font-bold">→</span>
                <span class="px-4 py-2 bg-[#f5f5f7] rounded-full border border-[#d2d2d7] whitespace-nowrap">CAM</span>
                <span class="text-[#86868b] font-bold">→</span>
                <span class="px-4 py-2 bg-[#f5f5f7] rounded-full border border-[#d2d2d7] whitespace-nowrap">Phay / In 3D</span>
                <span class="text-[#86868b] font-bold">→</span>
                <span class="px-4 py-2 bg-[#f5f5f7] rounded-full border border-[#d2d2d7] whitespace-nowrap">Hoàn thiện</span>
                <span class="text-[#86868b] font-bold">→</span>
                <span class="px-4 py-2 bg-[#f5f5f7] rounded-full border border-[#d2d2d7] whitespace-nowrap">Kiểm tra chất lượng</span>
                <span class="text-[#86868b] font-bold">→</span>
                <span class="px-4 py-2 bg-[#f5f5f7] rounded-full border border-[#d2d2d7] whitespace-nowrap">Đóng gói</span>
                <span class="text-[#86868b] font-bold">→</span>
                <span class="px-4 py-2 bg-[#30d158] text-white rounded-full font-semibold whitespace-nowrap">Giao hàng</span>
            </div>
        </div>

        {{-- Card chi tiết ca --}}
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-4xl mx-auto">
            <div class="apple-card apple-card--white fade-in-up" style="animation-delay: 0.05s;">
                <div class="apple-card-inner">
                    <div class="apple-card-icon bg-[#e3f0fc]">
                        <span class="material-symbols-outlined text-[#0071e3]">info</span>
                    </div>
                    <h3 class="apple-card-title">Công đoạn hiện tại</h3>
                    <p class="apple-card-desc">Xem chính xác từng ca đang ở đâu trong quy trình sản xuất tại mọi thời điểm.</p>
                </div>
            </div>
            <div class="apple-card apple-card--white fade-in-up" style="animation-delay: 0.1s;">
                <div class="apple-card-inner">
                    <div class="apple-card-icon bg-[#ece5f6]">
                        <span class="material-symbols-outlined text-[#bf5af2]">person</span>
                    </div>
                    <h3 class="apple-card-title">Kỹ thuật viên phụ trách</h3>
                    <p class="apple-card-desc">Biết ai đang làm ca nào và khối lượng công việc hiện tại của họ.</p>
                </div>
            </div>
            <div class="apple-card apple-card--white fade-in-up" style="animation-delay: 0.15s;">
                <div class="apple-card-inner">
                    <div class="apple-card-icon bg-[#fef3e2]">
                        <span class="material-symbols-outlined text-[#ff9f0a]">timer</span>
                    </div>
                    <h3 class="apple-card-title">Thời gian & Mức ưu tiên</h3>
                    <p class="apple-card-desc">Theo dõi thời gian từng công đoạn, deadline giao hàng và mức ưu tiên được tính tự động.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Tính năng 3: Sắp lịch ưu tiên --}}
<section class="apple-section bg-[#f5f5f7]">
    <div class="apple-container">
        <div class="apple-split apple-split--reverse">
            <div class="apple-split-text fade-in-up">
                <span class="apple-eyebrow">Sắp lịch thông minh</span>
                <h2 class="apple-headline-sm mb-4">Lập lịch sản xuất<br>theo mức ưu tiên.</h2>
                <p class="apple-body mb-6">Quản lý sản xuất tự động ưu tiên ca dựa trên deadline giao hàng, thời gian sản xuất còn lại và năng lực xưởng. Kỹ thuật viên luôn biết cần làm ca nào tiếp theo.</p>
                <ul class="space-y-3">
                    <li class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-[#30d158] text-xl flex-shrink-0">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Ưu tiên ca theo deadline</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-[#30d158] text-xl flex-shrink-0">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Cân bằng tải theo năng lực</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-[#30d158] text-xl flex-shrink-0">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Hàng đợi sản xuất tính toán tự động</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-[#30d158] text-xl flex-shrink-0">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Danh sách công việc hướng dẫn cho kỹ thuật viên</span>
                    </li>
                </ul>
            </div>
            <div class="apple-split-media fade-in-up" style="animation-delay: 0.15s;">
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden p-1">
                    <img src="{{ get_site_url() }}/wp-content/uploads/2022/08/clinic-dashboard.png" alt="Quản lý sản xuất — Bảng sắp lịch ưu tiên sản xuất" class="apple-split-img rounded-xl" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Tính năng 4: Kiểm soát chủ động --}}
<section class="apple-section bg-white">
    <div class="apple-container">
        <div class="text-center max-w-3xl mx-auto mb-16 fade-in-up">
            <span class="apple-eyebrow">Kiểm soát chủ động</span>
            <h2 class="apple-headline-sm">Ngăn ngừa trễ hẹn<br>trước khi xảy ra.</h2>
        </div>
        <div class="grid md:grid-cols-2 gap-6 max-w-4xl mx-auto">
            <div class="apple-card apple-card--white fade-in-up" style="animation-delay: 0.05s;">
                <div class="apple-card-inner">
                    <h3 class="apple-card-title text-lg mb-4">Dành cho Kỹ thuật viên</h3>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-[#0071e3] text-xl flex-shrink-0">checklist</span>
                            <span class="text-[#1d1d1f] text-[0.9375rem]">Danh sách công việc theo mức ưu tiên</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-[#0071e3] text-xl flex-shrink-0">arrow_forward</span>
                            <span class="text-[#1d1d1f] text-[0.9375rem]">Ca tiếp theo cần xử lý</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-[#ff453a] text-xl flex-shrink-0">schedule</span>
                            <span class="text-[#1d1d1f] text-[0.9375rem]">Ca gần đến deadline</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-[#ff9f0a] text-xl flex-shrink-0">block</span>
                            <span class="text-[#1d1d1f] text-[0.9375rem]">Ca bị tắc được đánh dấu</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="apple-card apple-card--white fade-in-up" style="animation-delay: 0.1s;">
                <div class="apple-card-inner">
                    <h3 class="apple-card-title text-lg mb-4">Dành cho Quản lý</h3>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-[#bf5af2] text-xl flex-shrink-0">crisis_alert</span>
                            <span class="text-[#1d1d1f] text-[0.9375rem]">Phát hiện tắc nghẽn theo bộ phận</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-[#bf5af2] text-xl flex-shrink-0">group</span>
                            <span class="text-[#1d1d1f] text-[0.9375rem]">Cảnh báo kỹ thuật viên quá tải</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-[#30d158] text-xl flex-shrink-0">battery_full</span>
                            <span class="text-[#1d1d1f] text-[0.9375rem]">Nhận diện năng lực nhàn rỗi</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-[#ff453a] text-xl flex-shrink-0">warning</span>
                            <span class="text-[#1d1d1f] text-[0.9375rem]">Chỉ báo nguy cơ trễ deadline</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Thiết kế cho Dental Lab --}}
<section class="apple-section--sm bg-[#f5f5f7]">
    <div class="apple-container">
        <div class="text-center mb-12 fade-in-up">
            <span class="apple-eyebrow">Chuyên biệt</span>
            <h2 class="apple-headline-sm">Được thiết kế riêng<br>cho Dental Lab.</h2>
            <p class="apple-body mt-3 max-w-xl mx-auto">
                Khác với các hệ thống MES chung chung, Quản lý sản xuất hiểu rõ tính biến động của sản xuất nha khoa — không chỉ dây chuyền lắp ráp công nghiệp.
            </p>
        </div>
        <div class="grid grid-cols-2 lg:grid-cols-3 gap-4 max-w-3xl mx-auto">
            <div class="bg-white rounded-2xl p-5 text-center fade-in-up" style="animation-delay: 0.05s;">
                <span class="material-symbols-outlined text-3xl text-[#0071e3] mb-2">precision_manufacturing</span>
                <p class="text-sm font-semibold text-[#1d1d1f]">Quy trình theo ca</p>
            </div>
            <div class="bg-white rounded-2xl p-5 text-center fade-in-up" style="animation-delay: 0.1s;">
                <span class="material-symbols-outlined text-3xl text-[#bf5af2] mb-2">account_tree</span>
                <p class="text-sm font-semibold text-[#1d1d1f]">Sản xuất phục hình đa công đoạn</p>
            </div>
            <div class="bg-white rounded-2xl p-5 text-center fade-in-up" style="animation-delay: 0.15s;">
                <span class="material-symbols-outlined text-3xl text-[#30d158] mb-2">person_pin</span>
                <p class="text-sm font-semibold text-[#1d1d1f]">Phân công kỹ thuật viên</p>
            </div>
            <div class="bg-white rounded-2xl p-5 text-center fade-in-up" style="animation-delay: 0.2s;">
                <span class="material-symbols-outlined text-3xl text-[#ff9f0a] mb-2">verified</span>
                <p class="text-sm font-semibold text-[#1d1d1f]">Kiểm tra chất lượng</p>
            </div>
            <div class="bg-white rounded-2xl p-5 text-center fade-in-up" style="animation-delay: 0.25s;">
                <span class="material-symbols-outlined text-3xl text-[#ff453a] mb-2">autorenew</span>
                <p class="text-sm font-semibold text-[#1d1d1f]">Theo dõi làm lại</p>
            </div>
            <div class="bg-white rounded-2xl p-5 text-center fade-in-up" style="animation-delay: 0.3s;">
                <span class="material-symbols-outlined text-3xl text-[#0071e3] mb-2">local_shipping</span>
                <p class="text-sm font-semibold text-[#1d1d1f]">Phối hợp giao hàng</p>
            </div>
        </div>
    </div>
</section>

{{-- Kết quả — Số liệu --}}
<section class="apple-section--sm bg-white">
    <div class="apple-container">
        <div class="text-center mb-12 fade-in-up">
            <span class="apple-eyebrow">Kết quả</span>
            <h2 class="apple-headline-sm">Giao hàng đúng hẹn, dự đoán được.</h2>
        </div>
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 max-w-4xl mx-auto text-center">
            <div class="fade-in-up" style="animation-delay: 0.05s;">
                <p class="text-4xl lg:text-5xl font-bold text-[#1d1d1f] tracking-tight">40%</p>
                <p class="text-sm text-[#86868b] mt-2">Rút ngắn thời gian xử lý</p>
            </div>
            <div class="fade-in-up" style="animation-delay: 0.1s;">
                <p class="text-4xl lg:text-5xl font-bold text-[#1d1d1f] tracking-tight">95%</p>
                <p class="text-sm text-[#86868b] mt-2">Tỷ lệ giao đúng hẹn</p>
            </div>
            <div class="fade-in-up" style="animation-delay: 0.15s;">
                <p class="text-4xl lg:text-5xl font-bold text-[#1d1d1f] tracking-tight">60%</p>
                <p class="text-sm text-[#86868b] mt-2">Giảm lỗi trao đổi thông tin</p>
            </div>
            <div class="fade-in-up" style="animation-delay: 0.2s;">
                <p class="text-4xl lg:text-5xl font-bold text-[#1d1d1f] tracking-tight">300+</p>
                <p class="text-sm text-[#86868b] mt-2">Labo tin dùng DentalSO</p>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="apple-section apple-section--cta">
    <div class="apple-container text-center">
        <div class="fade-in-up">
            <h2 class="apple-headline text-white mb-4">Kiểm soát toàn bộ<br>xưởng sản xuất.</h2>
            <p class="text-white/70 text-lg mb-8 max-w-lg mx-auto">Khám phá cách Quản lý sản xuất chuyển đổi từ sắp lịch thụ động sang quản lý sản xuất chủ động, dựa trên dữ liệu.</p>
            <div class="apple-cta-group">
                <a href="{{ home_url('yeu-cau-tu-van/?product=' . urlencode('Quản lý sản xuất (MES)')) }}" class="apple-cta-primary apple-cta-primary--light">Đăng Ký Demo MES</a>
                <a href="{{ home_url('san-pham/dentalso-ket-noi/') }}" class="apple-cta-secondary apple-cta-secondary--light">Khám phá Kết nối Labo và Nha khoa<span class="apple-chevron material-symbols-outlined">chevron_right</span></a>
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
