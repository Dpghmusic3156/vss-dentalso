{{-- Template Name: Solution: Labo Gia Công & Xuất Khẩu --}}
@extends('layouts.app')

@section('content')

{{-- Hero --}}
<section class="apple-section apple-hero bg-white">
    <div class="apple-container text-center">
        <div class="fade-in-up">
            <span class="apple-eyebrow">Giải pháp Gia công</span>
            <h1 class="apple-headline mb-6">Phần mềm cho Labo Gia công<br>&amp; Hội nhập Quốc tế</h1>
            <p class="text-[1.125rem] md:text-[1.375rem] font-medium text-[#1d1d1f] leading-snug max-w-3xl mx-auto mb-4">
                Quản lý Khách hàng Toàn cầu. Đơn giản hóa Vận hành Xuyên biên giới.
            </p>
            <p class="apple-hero-copy">
                Các Labo gia công đối mặt với nhiều thách thức đặc thù: khách hàng quốc tế, rào cản ngôn ngữ, chênh lệch tỷ giá, giao tiếp phức tạp và hồ sơ xuất khẩu. DentalSO được thiết kế để hỗ trợ vận hành Labo nha khoa toàn cầu ở mọi quy mô.
            </p>
            <div class="apple-cta-group mt-10">
                <a href="{{ home_url('yeu-cau-tu-van/') }}" class="apple-cta-primary">Đặt Lịch Demo</a>
                <a href="{{ home_url('lien-he/') }}" class="apple-cta-secondary">Liên hệ Kinh doanh<span class="apple-chevron material-symbols-outlined">chevron_right</span></a>
            </div>
        </div>
    </div>
</section>

{{-- International Collaboration --}}
<section class="apple-section bg-[#f5f5f7]">
    <div class="apple-container">
        <div class="text-center max-w-3xl mx-auto mb-16 fade-in-up">
            <span class="apple-eyebrow">Tính năng Toàn cầu</span>
            <h2 class="apple-headline-sm">Được Thiết kế cho Hợp tác Quốc tế.</h2>
        </div>
        <div class="grid sm:grid-cols-2 gap-6 max-w-4xl mx-auto">
            <div class="apple-card apple-card--white fade-in-up" style="animation-delay: 0.05s;">
                <div class="apple-card-inner">
                    <div class="apple-card-icon bg-[#e3f0fc]">
                        <span class="material-symbols-outlined text-[#0071e3]">language</span>
                    </div>
                    <h3 class="apple-card-title">Hỗ trợ Đa Ngôn ngữ</h3>
                    <p class="apple-card-desc mt-4">Trao đổi với phòng khám và đối tác ở các khu vực khác nhau qua giao diện được bản địa hóa hoàn toàn.</p>
                </div>
            </div>
            
            <div class="apple-card apple-card--white fade-in-up" style="animation-delay: 0.1s;">
                <div class="apple-card-inner">
                    <div class="apple-card-icon bg-[#fef3e2]">
                        <span class="material-symbols-outlined text-[#ff9f0a]">payments</span>
                    </div>
                    <h3 class="apple-card-title">Quản lý Đa Tiền tệ</h3>
                    <ul class="apple-card-desc space-y-2 mt-4 text-[#86868b] text-[0.9375rem] mb-4">
                        <li class="flex items-start leading-[1.4]"><span class="material-symbols-outlined text-base mr-2 text-[#ff9f0a] mt-0.5">check</span> Định giá linh hoạt theo khách hàng</li>
                        <li class="flex items-start leading-[1.4]"><span class="material-symbols-outlined text-base mr-2 text-[#ff9f0a] mt-0.5">check</span> Hỗ trợ quy đổi tiền tệ</li>
                        <li class="flex items-start leading-[1.4]"><span class="material-symbols-outlined text-base mr-2 text-[#ff9f0a] mt-0.5">check</span> Theo dõi dòng tiền chính xác</li>
                    </ul>
                </div>
            </div>

            <div class="apple-card apple-card--white fade-in-up" style="animation-delay: 0.15s;">
                <div class="apple-card-inner">
                    <div class="apple-card-icon bg-[#e2f5e9]">
                        <span class="material-symbols-outlined text-[#30d158]">cloud_upload</span>
                    </div>
                    <h3 class="apple-card-title">Gửi Ca Trực tuyến</h3>
                    <ul class="apple-card-desc space-y-2 mt-4 text-[#86868b] text-[0.9375rem] mb-4">
                        <li class="flex items-start leading-[1.4]"><span class="material-symbols-outlined text-base mr-2 text-[#30d158] mt-0.5">check</span> Phòng khám gửi ca trực tuyến</li>
                        <li class="flex items-start leading-[1.4]"><span class="material-symbols-outlined text-base mr-2 text-[#30d158] mt-0.5">check</span> Tải lên scan, hình ảnh và file</li>
                        <li class="flex items-start leading-[1.4]"><span class="material-symbols-outlined text-base mr-2 text-[#30d158] mt-0.5">check</span> Theo dõi sản xuất thời gian thực</li>
                    </ul>
                    <p class="apple-card-desc italic mt-auto">Giảm phụ thuộc email và sai sót thông tin.</p>
                </div>
            </div>

            <div class="apple-card apple-card--white fade-in-up" style="animation-delay: 0.2s;">
                <div class="apple-card-inner">
                    <div class="apple-card-icon bg-[#ece5f6]">
                        <span class="material-symbols-outlined text-[#bf5af2]">local_shipping</span>
                    </div>
                    <h3 class="apple-card-title">Quản lý Quy trình Xuất khẩu</h3>
                    <ul class="apple-card-desc space-y-2 mt-4 text-[#86868b] text-[0.9375rem] mb-4">
                        <li class="flex items-start leading-[1.4]"><span class="material-symbols-outlined text-base mr-2 text-[#bf5af2] mt-0.5">check</span> Theo dõi hồ sơ chứng từ ca</li>
                        <li class="flex items-start leading-[1.4]"><span class="material-symbols-outlined text-base mr-2 text-[#bf5af2] mt-0.5">check</span> Điều phối giao nhận hàng</li>
                        <li class="flex items-start leading-[1.4]"><span class="material-symbols-outlined text-base mr-2 text-[#bf5af2] mt-0.5">check</span> Truy xuất nguồn gốc đơn hàng</li>
                    </ul>
                    <p class="apple-card-desc italic mt-auto">Đảm bảo vận hành quốc tế trơn tru.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Full Transparency --}}
<section class="apple-section bg-white">
    <div class="apple-container">
        <div class="apple-split">
            <div class="apple-split-text fade-in-up">
                <span class="apple-eyebrow">Xây dựng Niềm tin</span>
                <h2 class="apple-headline-sm mb-4">Minh bạch Toàn diện cho Khách hàng Toàn cầu</h2>
                <p class="apple-body mb-6">Xây dựng niềm tin với đối tác quốc tế thông qua việc minh bạch toàn bộ quy trình sản xuất.</p>
                <ul class="space-y-3">
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#0071e3] text-xl mt-0.5">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Theo dõi ca thời gian thực</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#0071e3] text-xl mt-0.5">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Cập nhật trạng thái sản xuất rõ ràng</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#0071e3] text-xl mt-0.5">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Trao đổi thông tin có cấu trúc</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#0071e3] text-xl mt-0.5">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Lịch trình giao hàng đáng tin cậy</span>
                    </li>
                </ul>
            </div>
            <div class="apple-split-media fade-in-up" style="animation-delay: 0.15s;">
                <div class="bg-[#f5f5f7] rounded-2xl shadow-lg overflow-hidden p-1">
                    <img src="{{ get_site_url() }}/wp-content/uploads/2022/08/clinic-dashboard.png" alt="DentalSO Client Dashboard" class="apple-split-img rounded-xl">
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
                <span class="material-symbols-outlined text-4xl text-[#ff453a] mb-4">public</span>
                <p class="text-white font-semibold text-sm mb-1">Khách hàng Toàn cầu</p>
                <p class="text-[#86868b] text-xs leading-relaxed">Bạn làm việc thường xuyên với khách hàng quốc tế.</p>
            </div>
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.1s;">
                <span class="material-symbols-outlined text-4xl text-[#ff9f0a] mb-4">currency_exchange</span>
                <p class="text-white font-semibold text-sm mb-1">Đa Tiền tệ</p>
                <p class="text-[#86868b] text-xs leading-relaxed">Bạn phải quản lý nhiều loại tiền tệ và chính sách giá.</p>
            </div>
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.15s;">
                <span class="material-symbols-outlined text-4xl text-[#0a84ff] mb-4">mail_lock</span>
                <p class="text-white font-semibold text-sm mb-1">Khoảng trống Giao tiếp</p>
                <p class="text-[#86868b] text-xs leading-relaxed">Bạn phụ thuộc nhiều vào email và trễ nải thông tin.</p>
            </div>
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.2s;">
                <span class="material-symbols-outlined text-4xl text-[#30d158] mb-4">show_chart</span>
                <p class="text-white font-semibold text-sm mb-1">Sẵn sàng Mở rộng</p>
                <p class="text-[#86868b] text-xs leading-relaxed">Bạn muốn mở rộng hoạt động xuất khẩu bài bản.</p>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="apple-section apple-section--cta">
    <div class="apple-container text-center">
        <div class="fade-in-up">
            <h2 class="apple-headline text-white mb-6">Phát triển Labo vươn tầm thế giới<br>với sự tự tin tuyệt đối.</h2>
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
