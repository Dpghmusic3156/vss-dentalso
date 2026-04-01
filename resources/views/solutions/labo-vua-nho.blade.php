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
            <p class="apple-hero-copy hidden">
                Thay thế các bảng tính Excel dễ mắc lỗi và việc theo dõi thủ công bằng một nền tảng đơn giản, có cấu trúc. Trọn quyền kiểm soát vận hành khi labo ngày một phát triển mà không hề phức tạp.
            </p>
            <div class="apple-cta-group mt-10">
                <a href="{{ home_url('yeu-cau-tu-van/') }}" class="apple-cta-primary">Đặt Lịch Demo</a>
                <a href="{{ home_url('lien-he/') }}" class="apple-cta-secondary">Liên hệ Kinh doanh <span class="apple-chevron material-symbols-outlined">chevron_right</span></a>
            </div>
        </div>
        {{-- Hero image --}}
        <div class="apple-hero-img-wrapper fade-in-up" style="transition-delay: 200ms;">
            <img src="@asset('images/mes-dashboard-hero.webp')" alt="DentalSO MES Dashboard" class="apple-hero-img animate-float">
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

{{-- Giải pháp phù hợp khi nào — Zigzag Section --}}
<div class="pt-16 pb-32 overflow-hidden">

    {{-- Section Header --}}
    <header class="max-w-4xl mx-auto px-8 text-center mb-24 fade-in-up">
        <span class="apple-eyebrow">Phù hợp với ai?</span>
        <h2 class="apple-headline mb-6">Giải pháp Này Phù hợp<br>Với Bạn Khi Nào?</h2>
    </header>

    {{-- Item 1: Theo dõi Thủ công --}}
    <section class="max-w-7xl mx-auto px-8 mb-32 fade-in-up">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <div>
                <h3 class="apple-headline-sm">Bạn Đang Theo dõi Thủ công ?</h3>
                <p class="text-lg text-[#1d1d1f] leading-relaxed mt-4">
                    Bạn quản lý ca làm bằng Excel hay giấy tờ. Khi labo phát triển, bảng tính trở nên dễ mắc lỗi và tốn thời gian.
                </p>
                <div class="mt-8 flex gap-4">
                    <div class="p-4 rounded-xl bg-[#f5f5f7]">
                        <span class="block text-2xl font-semibold text-[#34a853]">80%</span>
                        <span class="text-sm text-[#86868b]">Thời gian nhập liệu thủ công</span>
                    </div>
                    <div class="p-4 rounded-xl bg-[#f5f5f7]">
                        <span class="block text-2xl font-semibold text-[#34a853]">3x</span>
                        <span class="text-sm text-[#86868b]">Sai sót so với kỹ thuật số</span>
                    </div>
                </div>
            </div>
            <div class="relative group">
                <div class="absolute -inset-4 rounded-3xl blur-2xl transition-colors" style="background-color: rgba(52,168,83,0.05);"></div>
                <div class="relative rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
                    <img src="@asset('images/zigzag_manual_tracking.webp')" alt="Quản lý ca bằng Excel và giấy tờ thủ công" class="w-full h-auto object-cover" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- Item 2: Thiếu Tầm nhìn --}}
    <section class="bg-[#f5f5f7] py-24 fade-in-up">
        <div class="max-w-7xl mx-auto px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
                <div class="order-2 md:order-1 relative group">
                    <div class="absolute -inset-4 rounded-3xl blur-2xl transition-colors" style="background-color: rgba(255,159,10,0.1);"></div>
                    <div class="relative rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
                        <img src="@asset('images/zigzag_poor_visibility.webp')" alt="Khó khăn khi theo dõi trạng thái ca" class="w-full h-auto object-cover" loading="lazy">
                    </div>
                </div>
                <div class="order-1 md:order-2">
                    <h3 class="apple-headline-sm">Thiếu Tầm nhìn ?</h3>
                    <p class="text-lg text-[#1d1d1f] leading-relaxed mt-4">
                        Bạn gặp khó khăn loay hoay khi theo dõi vị trí ca. Không có tầm nhìn thời gian thực, deadline bị trễ và khách hàng mất niềm tin.
                    </p>
                    <ul class="mt-8 space-y-4">
                        <li class="flex items-center gap-3 text-[#1d1d1f]">
                            <span class="material-symbols-outlined" style="color: #ff9f0a;" aria-hidden="true">done_all</span>
                            <span>Không biết ca đang ở công đoạn nào</span>
                        </li>
                        <li class="flex items-center gap-3 text-[#1d1d1f]">
                            <span class="material-symbols-outlined" style="color: #ff9f0a;" aria-hidden="true">done_all</span>
                            <span>Không trả lời nhanh khi khách hỏi tiến độ</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- Item 3: Cần Khắc phục Rối ren --}}
    <section class="max-w-7xl mx-auto px-8 my-32 fade-in-up">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <div>
                <h3 class="apple-headline-sm">Cần Khắc phục Rối ren</h3>
                <p class="text-lg text-[#1d1d1f] leading-relaxed mt-4">
                    Bạn muốn sắp xếp khoa học nhưng sợ phần mềm quá phức tạp. Một hệ thống đơn giản, có cấu trúc mà đội ngũ có thể áp dụng ngay.
                </p>
                <div class="mt-8 p-6 rounded-2xl bg-white border border-gray-100 shadow-sm">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-10 h-10 rounded-full flex items-center justify-center" style="background-color: rgba(10,132,255,0.1);">
                            <span class="material-symbols-outlined text-xl" style="color: #0a84ff;" aria-hidden="true">touch_app</span>
                        </div>
                        <div>
                            <div class="text-sm font-semibold text-[#1d1d1f]">Dễ dàng triển khai</div>
                            <div class="text-xs text-[#86868b]">Bắt đầu sử dụng chỉ trong 30 phút</div>
                        </div>
                    </div>
                    <div class="w-full bg-gray-100 h-2 rounded-full overflow-hidden">
                        <div class="h-full w-[90%]" style="background-color: #0a84ff;"></div>
                    </div>
                </div>
            </div>
            <div class="relative group">
                <div class="absolute -inset-4 rounded-3xl blur-2xl transition-colors" style="background-color: rgba(10,132,255,0.05);"></div>
                <div class="relative rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
                    <img src="@asset('images/zigzag_need_simplicity.webp')" alt="Giao diện đơn giản dễ sử dụng" class="w-full h-auto object-cover" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- Item 4: Đang Mở rộng --}}
    <section class="py-24 fade-in-up" style="background-color: rgba(48,209,88,0.04);">
        <div class="max-w-7xl mx-auto px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
                <div class="order-2 md:order-1 relative group">
                    <div class="absolute -inset-4 rounded-3xl blur-2xl transition-colors" style="background-color: rgba(48,209,88,0.08);"></div>
                    <div class="relative rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
                        <img src="@asset('images/zigzag_scaling_up.webp')" alt="Labo nha khoa đang mở rộng quy mô" class="w-full h-auto object-cover" loading="lazy">
                    </div>
                </div>
                <div class="order-1 md:order-2">
                    <h3 class="apple-headline-sm">Labo Đang Mở Rộng ?</h3>
                    <p class="text-lg text-[#1d1d1f] leading-relaxed mt-4">
                        Labo đang tăng trưởng nhưng chưa cần hệ thống MES quá lớn. DentalSO cho bạn không gian để mở rộng mà không cần đầu tư quá mức.
                    </p>
                    <div class="mt-8 flex flex-col gap-4">
                        <div class="flex items-start gap-4 p-4 rounded-xl bg-white/50 backdrop-blur-sm border border-gray-100">
                            <span class="material-symbols-outlined" style="color: #30d158;" aria-hidden="true">trending_up</span>
                            <div>
                                <div class="font-semibold text-[#1d1d1f]">Bắt đầu nhỏ</div>
                                <p class="text-sm text-[#86868b]">Sử dụng các tính năng cốt lõi, thêm module khi phát triển.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 p-4 rounded-xl bg-white/50 backdrop-blur-sm border border-gray-100">
                            <span class="material-symbols-outlined" style="color: #30d158;" aria-hidden="true">upgrade</span>
                            <div>
                                <div class="font-semibold text-[#1d1d1f]">Nâng cấp khi sẵn sàng</div>
                                <p class="text-sm text-[#86868b]">Chuyển sang MES mượt mà khi bạn cần.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

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
