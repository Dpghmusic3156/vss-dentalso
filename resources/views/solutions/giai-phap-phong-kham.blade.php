{{-- Template Name: Solution: Giải pháp Phòng khám --}}
@extends('layouts.app')

@section('content')

{{-- Hero --}}
<section class="apple-section apple-hero bg-white">
    <div class="apple-container text-center">
        <div class="fade-in-up">
            <span class="apple-eyebrow">Giải pháp cho Phòng khám</span>
            <h1 class="apple-headline mb-6">Cộng tác ca trực tuyến<br>cho Phòng khám Nha khoa</h1>
            <p class="apple-hero-copy">
                DentalSO Connect cho phép phòng khám gửi ca trực tuyến, theo dõi tiến độ sản xuất thời gian thực và trao đổi liền mạch với Labo đối tác.
            </p>
            <div class="apple-cta-group mt-10">
                <a href="{{ home_url('lien-he/') }}" class="apple-cta-primary">Liên Hệ</a>
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
            <h2 class="apple-headline text-white">Nghe quen không?</h2>
            <p class="apple-body text-[#86868b] mt-4 max-w-xl mx-auto">
                Cách trao đổi truyền thống với Labo gây lãng phí thời gian và tạo ra lỗi tốn kém.
            </p>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5 max-w-4xl mx-auto">
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.05s;">
                <span class="material-symbols-outlined text-4xl text-[#ff453a] mb-4">description</span>
                <p class="text-white font-semibold text-sm mb-1">Phiếu chỉ định giấy</p>
                <p class="text-[#86868b] text-xs leading-relaxed">Viết tay dẫn đến thiếu thông tin và trễ sản xuất.</p>
            </div>
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.1s;">
                <span class="material-symbols-outlined text-4xl text-[#ff9f0a] mb-4">phone_missed</span>
                <p class="text-white font-semibold text-sm mb-1">Gọi hỏi tiến độ</p>
                <p class="text-[#86868b] text-xs leading-relaxed">"Ca này tới đâu rồi?" — cuộc gọi làm gián đoạn cả phòng khám lẫn Labo.</p>
            </div>
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.15s;">
                <span class="material-symbols-outlined text-4xl text-[#bf5af2] mb-4">folder_off</span>
                <p class="text-white font-semibold text-sm mb-1">File bị thất lạc</p>
                <p class="text-[#86868b] text-xs leading-relaxed">Scan, ảnh và X-ray nằm rải rác khắp email và Zalo.</p>
            </div>
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.2s;">
                <span class="material-symbols-outlined text-4xl text-[#0a84ff] mb-4">event_busy</span>
                <p class="text-white font-semibold text-sm mb-1">Không rõ tiến độ</p>
                <p class="text-[#86868b] text-xs leading-relaxed">Không nhìn thấy công đoạn sản xuất nên không ước lượng được ngày giao.</p>
            </div>
        </div>
    </div>
</section>

{{-- Lợi ích — Feature Cards --}}
<section class="apple-section bg-[#f5f5f7]">
    <div class="apple-container">
        <div class="text-center max-w-3xl mx-auto mb-16 fade-in-up">
            <span class="apple-eyebrow">Lợi ích</span>
            <h2 class="apple-headline-sm">Đủ mọi thứ bạn cần.<br>Không gì thừa.</h2>
        </div>
        <div class="grid sm:grid-cols-2 gap-6 max-w-4xl mx-auto">
            <div class="apple-card apple-card--white fade-in-up" style="animation-delay: 0.05s;">
                <div class="apple-card-inner">
                    <div class="apple-card-icon bg-[#e3f0fc]">
                        <span class="material-symbols-outlined text-[#0071e3]">visibility</span>
                    </div>
                    <h3 class="apple-card-title">Theo dõi ca rõ ràng</h3>
                    <p class="apple-card-desc">Giám sát từng công đoạn — Thiết kế → Phay → Hoàn thiện → KCS → Giao hàng — ngay tại dashboard phòng khám.</p>
                </div>
            </div>
            <div class="apple-card apple-card--white fade-in-up" style="animation-delay: 0.1s;">
                <div class="apple-card-inner">
                    <div class="apple-card-icon bg-[#fef3e2]">
                        <span class="material-symbols-outlined text-[#ff9f0a]">speed</span>
                    </div>
                    <h3 class="apple-card-title">Giao hàng nhanh hơn</h3>
                    <p class="apple-card-desc">Gửi ca trực tuyến với form có cấu trúc đảm bảo dữ liệu đầy đủ ngay từ đầu — loại bỏ trao đổi qua lại.</p>
                </div>
            </div>
            <div class="apple-card apple-card--white fade-in-up" style="animation-delay: 0.15s;">
                <div class="apple-card-inner">
                    <div class="apple-card-icon bg-[#ece5f6]">
                        <span class="material-symbols-outlined text-[#bf5af2]">lock</span>
                    </div>
                    <h3 class="apple-card-title">Chia sẻ file bảo mật</h3>
                    <p class="apple-card-desc">Tải lên file STL, scan trong miệng, ảnh và X-ray — tất cả được mã hóa và lưu trữ bảo mật theo từng ca.</p>
                </div>
            </div>
            <div class="apple-card apple-card--white fade-in-up" style="animation-delay: 0.2s;">
                <div class="apple-card-inner">
                    <div class="apple-card-icon bg-[#e2f5e9]">
                        <span class="material-symbols-outlined text-[#30d158]">history</span>
                    </div>
                    <h3 class="apple-card-title">Lịch sử ca đầy đủ</h3>
                    <p class="apple-card-desc">Truy cập toàn bộ lịch sử từng ca — ghi chú, bản chỉnh sửa, hồ sơ bảo hành và xác nhận giao hàng.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Cách hoạt động — 3 bước --}}
<section class="apple-section bg-white">
    <div class="apple-container">
        <div class="text-center max-w-3xl mx-auto mb-16 fade-in-up">
            <span class="apple-eyebrow">Cách hoạt động</span>
            <h2 class="apple-headline-sm">Ba bước đơn giản.</h2>
        </div>
        <div class="grid md:grid-cols-3 gap-8 max-w-4xl mx-auto">
            <div class="text-center fade-in-up" style="animation-delay: 0.05s;">
                <div class="w-16 h-16 rounded-full bg-[#e3f0fc] flex items-center justify-center mx-auto mb-5">
                    <span class="text-2xl font-bold text-[#0071e3]">1</span>
                </div>
                <h3 class="text-lg font-bold text-[#1d1d1f] mb-2">Gửi ca</h3>
                <p class="text-sm text-[#86868b] leading-relaxed max-w-xs mx-auto">Điền phiếu chỉ định số hóa. Tải lên scan, ảnh và file đính kèm — tất cả được kiểm tra trước khi gửi.</p>
            </div>
            <div class="text-center fade-in-up" style="animation-delay: 0.1s;">
                <div class="w-16 h-16 rounded-full bg-[#fef3e2] flex items-center justify-center mx-auto mb-5">
                    <span class="text-2xl font-bold text-[#ff9f0a]">2</span>
                </div>
                <h3 class="text-lg font-bold text-[#1d1d1f] mb-2">Theo dõi</h3>
                <p class="text-sm text-[#86868b] leading-relaxed max-w-xs mx-auto">Giám sát tiến độ sản xuất thời gian thực. Nhận cập nhật ngay khi ca chuyển qua từng công đoạn.</p>
            </div>
            <div class="text-center fade-in-up" style="animation-delay: 0.15s;">
                <div class="w-16 h-16 rounded-full bg-[#e2f5e9] flex items-center justify-center mx-auto mb-5">
                    <span class="text-2xl font-bold text-[#30d158]">3</span>
                </div>
                <h3 class="text-lg font-bold text-[#1d1d1f] mb-2">Nhận hàng</h3>
                <p class="text-sm text-[#86868b] leading-relaxed max-w-xs mx-auto">Được thông báo khi ca qua KCS và sẵn sàng giao. Truy vết đầy đủ từ đầu đến cuối.</p>
            </div>
        </div>
    </div>
</section>

{{-- Tích hợp — Split Layout --}}
<section class="apple-section bg-[#f5f5f7]">
    <div class="apple-container">
        <div class="apple-split">
            <div class="apple-split-text fade-in-up">
                <span class="apple-eyebrow">Tích hợp liền mạch</span>
                <h2 class="apple-headline-sm mb-4">Tích hợp hoàn toàn với<br>DentalSO MES.</h2>
                <p class="apple-body mb-6">Khi bạn gửi ca qua DentalSO Connect, ca sẽ đi thẳng vào quy trình sản xuất của Labo. Không nhập trùng. Không nhập lại thủ công. Không mất dữ liệu.</p>
                <ul class="space-y-3">
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#30d158] text-xl mt-0.5">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Tự động đồng bộ vào quy trình Labo</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#30d158] text-xl mt-0.5">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Mã hóa SSL cấp doanh nghiệp</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#30d158] text-xl mt-0.5">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Phân quyền theo vai trò</span>
                    </li>
                </ul>
                <div class="mt-8">
                    <a href="{{ home_url('san-pham/phan-mem-mes/') }}" class="apple-link">Tìm hiểu DentalSO MES<span class="apple-chevron material-symbols-outlined">chevron_right</span></a>
                </div>
            </div>
            <div class="apple-split-media fade-in-up" style="animation-delay: 0.15s;">
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden p-1">
                    <img src="{{ get_site_url() }}/wp-content/uploads/2022/08/clinic-dashboard.png" alt="DentalSO Connect — Giao diện phòng khám - Phần mềm quản lý labo nha khoa giá rẻ, cho dùng thử miễn phí" class="apple-split-img rounded-xl" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="apple-section apple-section--cta">
    <div class="apple-container text-center">
        <div class="fade-in-up">
            <h2 class="apple-headline text-white mb-4">Nâng cấp cách<br>phòng khám kết nối với Labo.</h2>
            <p class="text-white/70 text-lg mb-8 max-w-lg mx-auto">Khám phá cách DentalSO Connect tối ưu cộng tác giữa phòng khám và Labo đối tác.</p>
            <div class="apple-cta-group">
                <a href="{{ home_url('lien-he/') }}" class="apple-cta-primary apple-cta-primary--light">Liên Hệ</a>
                <a href="{{ home_url('yeu-cau-tu-van/') }}" class="apple-cta-secondary apple-cta-secondary--light">Đăng Ký Demo<span class="apple-chevron material-symbols-outlined">chevron_right</span></a>
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
