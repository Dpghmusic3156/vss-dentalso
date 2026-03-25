{{-- Template Name: Solution: Giải pháp Labo --}}
@extends('layouts.app')

@section('content')

{{-- Hero --}}
<section class="apple-section apple-hero bg-white">
    <div class="apple-container text-center">
        <div class="fade-in-up">
            <span class="apple-eyebrow">Giải pháp cho Labo</span>
            <h1 class="apple-headline mb-6">Giải pháp phần mềm<br>cho Dental Lab</h1>
            <p class="apple-hero-copy">
                DentalSO giúp Labo nha khoa chuẩn hóa quy trình, giảm trễ sản xuất và tăng lợi nhuận — tất cả từ một nền tảng duy nhất.
            </p>
            <div class="apple-cta-group mt-10">
                <a href="{{ home_url('yeu-cau-tu-van/') }}" class="apple-cta-primary">Đăng Ký Demo</a>
                <a href="{{ home_url('san-pham/phan-mem-dental-lab/') }}" class="apple-cta-secondary">Khám phá nền tảng<span class="apple-chevron material-symbols-outlined">chevron_right</span></a>
            </div>
        </div>
    </div>
</section>

{{-- Thách thức — Dark Section --}}
<section class="apple-section apple-section--dark">
    <div class="apple-container">
        <div class="text-center max-w-3xl mx-auto mb-16 fade-in-up">
            <span class="apple-eyebrow apple-eyebrow--light">Vấn đề</span>
            <h2 class="apple-headline text-white">Thách thức<br>chúng tôi giải quyết</h2>
            <p class="apple-body text-[#86868b] mt-4 max-w-xl mx-auto">
                Phần lớn Labo nha khoa vẫn dựa vào theo dõi thủ công, trao đổi phân tán và sắp lịch bị động. Hệ quả là mất thời gian, tiền bạc và chất lượng.
            </p>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-5 gap-5 max-w-5xl mx-auto">
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.05s;">
                <span class="material-symbols-outlined text-4xl text-[#ff453a] mb-4">schedule</span>
                <p class="text-white font-semibold text-sm mb-1">Trễ deadline</p>
                <p class="text-[#86868b] text-xs leading-relaxed">Giao hàng trễ làm mất uy tín và doanh thu.</p>
            </div>
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.1s;">
                <span class="material-symbols-outlined text-4xl text-[#ff9f0a] mb-4">visibility_off</span>
                <p class="text-white font-semibold text-sm mb-1">Thiếu tầm nhìn</p>
                <p class="text-[#86868b] text-xs leading-relaxed">Không có cái nhìn thời gian thực về trạng thái ca trên xưởng.</p>
            </div>
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.15s;">
                <span class="material-symbols-outlined text-4xl text-[#bf5af2] mb-4">person_off</span>
                <p class="text-white font-semibold text-sm mb-1">Kỹ thuật viên quá tải</p>
                <p class="text-[#86868b] text-xs leading-relaxed">Phân bổ công việc không đều khiến người giỏi kiệt sức.</p>
            </div>
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.2s;">
                <span class="material-symbols-outlined text-4xl text-[#0a84ff] mb-4">sms_failed</span>
                <p class="text-white font-semibold text-sm mb-1">Lỗi trao đổi</p>
                <p class="text-[#86868b] text-xs leading-relaxed">Sai lệch thông tin gây làm lại và trễ hẹn.</p>
            </div>
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.25s;">
                <span class="material-symbols-outlined text-4xl text-[#30d158] mb-4">edit_calendar</span>
                <p class="text-white font-semibold text-sm mb-1">Sắp lịch thủ công</p>
                <p class="text-[#86868b] text-xs leading-relaxed">Bảng trắng và Excel không thể mở rộng quy mô.</p>
            </div>
        </div>
    </div>
</section>

{{-- Giải pháp — Feature Cards --}}
<section class="apple-section bg-[#f5f5f7]">
    <div class="apple-container">
        <div class="text-center max-w-3xl mx-auto mb-16 fade-in-up">
            <span class="apple-eyebrow">Giải pháp</span>
            <h2 class="apple-headline-sm">DentalSO giúp Labo như thế nào</h2>
            <p class="apple-body mt-3 max-w-xl mx-auto">
                Các công cụ chuyên biệt giúp Labo kiểm soát toàn diện sản xuất, sắp lịch và trao đổi thông tin.
            </p>
        </div>
        <div class="grid sm:grid-cols-2 gap-6 max-w-4xl mx-auto">
            <div class="apple-card apple-card--white fade-in-up" style="animation-delay: 0.05s;">
                <div class="apple-card-inner">
                    <div class="apple-card-icon bg-[#e3f0fc]">
                        <span class="material-symbols-outlined text-[#0071e3]">monitoring</span>
                    </div>
                    <h3 class="apple-card-title">Theo dõi sản xuất thời gian thực</h3>
                    <p class="apple-card-desc">Dashboard trực tiếp hiển thị từng ca, từng công đoạn, từng kỹ thuật viên — cập nhật thời gian thực trên toàn bộ xưởng.</p>
                </div>
            </div>
            <div class="apple-card apple-card--white fade-in-up" style="animation-delay: 0.1s;">
                <div class="apple-card-inner">
                    <div class="apple-card-icon bg-[#fef3e2]">
                        <span class="material-symbols-outlined text-[#ff9f0a]">priority_high</span>
                    </div>
                    <h3 class="apple-card-title">Sắp lịch theo mức ưu tiên</h3>
                    <p class="apple-card-desc">Tự động sắp lịch dựa trên deadline giao hàng, thời gian sản xuất còn lại và năng lực xưởng. Không cần sắp xếp thủ công.</p>
                </div>
            </div>
            <div class="apple-card apple-card--white fade-in-up" style="animation-delay: 0.15s;">
                <div class="apple-card-inner">
                    <div class="apple-card-icon bg-[#e2f5e9]">
                        <span class="material-symbols-outlined text-[#30d158]">folder_shared</span>
                    </div>
                    <h3 class="apple-card-title">Quản lý ca tập trung</h3>
                    <p class="apple-card-desc">Mọi ca — từ nhận đến giao hàng — được tổ chức, tìm kiếm và truy vết. Lịch sử đầy đủ trong tầm tay.</p>
                </div>
            </div>
            <div class="apple-card apple-card--white fade-in-up" style="animation-delay: 0.2s;">
                <div class="apple-card-inner">
                    <div class="apple-card-icon bg-[#ece5f6]">
                        <span class="material-symbols-outlined text-[#bf5af2]">lock</span>
                    </div>
                    <h3 class="apple-card-title">Kết nối phòng khám bảo mật</h3>
                    <p class="apple-card-desc">Gửi ca trực tuyến, chia sẻ file và ghi chú — tất cả được mã hóa và ghi log. Thay thế điện thoại và email bằng dữ liệu có cấu trúc.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Kết quả — Số liệu --}}
<section class="apple-section--sm bg-white">
    <div class="apple-container">
        <div class="text-center mb-12 fade-in-up">
            <span class="apple-eyebrow">Kết quả thực tế</span>
            <h2 class="apple-headline-sm">Được xây dựng cho Labo muốn phát triển.</h2>
        </div>
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 max-w-4xl mx-auto text-center">
            <div class="fade-in-up" style="animation-delay: 0.05s;">
                <p class="text-4xl lg:text-5xl font-bold text-[#1d1d1f] tracking-tight">300+</p>
                <p class="text-sm text-[#86868b] mt-2">Tổ chức nha khoa tin dùng DentalSO</p>
            </div>
            <div class="fade-in-up" style="animation-delay: 0.1s;">
                <p class="text-4xl lg:text-5xl font-bold text-[#1d1d1f] tracking-tight">40%</p>
                <p class="text-sm text-[#86868b] mt-2">Rút ngắn thời gian xử lý</p>
            </div>
            <div class="fade-in-up" style="animation-delay: 0.15s;">
                <p class="text-4xl lg:text-5xl font-bold text-[#1d1d1f] tracking-tight">95%</p>
                <p class="text-sm text-[#86868b] mt-2">Tỷ lệ giao đúng hẹn</p>
            </div>
            <div class="fade-in-up" style="animation-delay: 0.2s;">
                <p class="text-4xl lg:text-5xl font-bold text-[#1d1d1f] tracking-tight">60%</p>
                <p class="text-sm text-[#86868b] mt-2">Giảm lỗi trao đổi thông tin</p>
            </div>
        </div>
    </div>
</section>

{{-- Tổng quan nền tảng — Split Layout --}}
<section class="apple-section bg-[#f5f5f7]">
    <div class="apple-container">
        <div class="apple-split">
            <div class="apple-split-text fade-in-up">
                <span class="apple-eyebrow">Nền tảng</span>
                <h2 class="apple-headline-sm mb-4">Một hệ thống cho<br>toàn bộ Labo.</h2>
                <p class="apple-body mb-6">DentalSO không chỉ là công cụ — đây là hạ tầng vận hành. Quản lý ca, theo dõi sản xuất, kiểm soát chất lượng và kết nối phòng khám cùng hoạt động trong một hệ thống thống nhất.</p>
                <ul class="space-y-3">
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#30d158] text-xl mt-0.5">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Quản lý sản xuất theo ca</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#30d158] text-xl mt-0.5">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Giám sát xưởng thời gian thực</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#30d158] text-xl mt-0.5">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Kiểm tra chất lượng theo công đoạn</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#30d158] text-xl mt-0.5">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Kiến trúc mở rộng đa chi nhánh</span>
                    </li>
                </ul>
                <div class="mt-8">
                    <a href="{{ home_url('san-pham/phan-mem-dental-lab/') }}" class="apple-link">Khám phá nền tảng<span class="apple-chevron material-symbols-outlined">chevron_right</span></a>
                </div>
            </div>
            <div class="apple-split-media fade-in-up" style="animation-delay: 0.15s;">
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden p-1">
                    <img src="{{ get_site_url() }}/wp-content/uploads/2022/12/dental-online-lab-dashboard.png" alt="DentalSO Platform Dashboard" class="apple-split-img rounded-xl" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="apple-section apple-section--cta">
    <div class="apple-container text-center">
        <div class="fade-in-up">
            <h2 class="apple-headline text-white mb-4">Khám phá cách Labo của bạn<br>có thể tối ưu vận hành.</h2>
            <p class="text-white/70 text-lg mb-8 max-w-lg mx-auto">Đăng ký demo cá nhân hóa và khám phá cách DentalSO chuyển đổi quy trình sản xuất của bạn.</p>
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
