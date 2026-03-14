{{-- Template Name: Product: DentalSO Connect --}}
@extends('layouts.app')

@section('content')

{{-- ============================================= --}}
{{-- HERO --}}
{{-- ============================================= --}}
<section class="apple-hero relative overflow-hidden bg-white">
    <div class="apple-container text-center relative z-10">
        <div class="fade-in-up">
            <p class="text-sm font-semibold text-[#0071e3] tracking-wide uppercase mb-5">DentalSO Connect</p>
            <h1 class="apple-hero-headline" style="font-size: clamp(2.5rem, 6vw, 4.5rem); line-height: 1.05; letter-spacing: -0.04em;">
                Gửi ca trực tuyến<br>& Cộng tác liền mạch.
            </h1>
            <p class="apple-hero-copy max-w-3xl mx-auto mt-8 leading-relaxed">
                Ứng dụng kết nối đối tác hiện đại — Được thiết kế cho vận hành Dental tinh gọn.
            </p>
        </div>
        <div class="fade-in-up mt-12" style="animation-delay: 0.2s;">
            <img src="{{ home_url('wp-content/uploads/2022/07/clinic') }}.png"
                 alt="DentalSO Connect"
                 class="w-full max-w-5xl mx-auto rounded-2xl">
        </div>
    </div>
</section>

{{-- ============================================= --}}
{{-- Tại sao chọn DentalSO Connect --}}
{{-- ============================================= --}}
<section class="py-16 lg:py-28 bg-[#f5f5f7]">
    <div class="apple-container">
        <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-20">
            <div class="w-full lg:w-[38%] fade-in-up">
                <p class="text-sm font-semibold text-[#0071e3] tracking-wide uppercase mb-5">Tại sao chọn DentalSO Connect?</p>
                <h2 class="text-3xl lg:text-4xl font-bold text-[#1d1d1f] leading-snug tracking-tight mb-6">
                    Tập trung mọi thứ.<br>Xóa bỏ hỗn loạn.
                </h2>
                <p class="apple-body text-[#86868b] mb-8 leading-relaxed">
                    Đơn thuốc viết tay, email, tin nhắn Zalo và file phân tán khắp nơi gây ra trễ hẹn, sai sót và rủi ro làm lại.
                </p>
                <ul class="space-y-4">
                    <li class="flex items-center text-[#1d1d1f] font-medium leading-relaxed"><span class="w-1.5 h-1.5 rounded-full bg-[#0071e3] mr-3 flex-shrink-0"></span>Gửi ca trực tuyến có cấu trúc</li>
                    <li class="flex items-center text-[#1d1d1f] font-medium leading-relaxed"><span class="w-1.5 h-1.5 rounded-full bg-[#0071e3] mr-3 flex-shrink-0"></span>Theo dõi tiến độ sản xuất thời gian thực</li>
                    <li class="flex items-center text-[#1d1d1f] font-medium leading-relaxed"><span class="w-1.5 h-1.5 rounded-full bg-[#0071e3] mr-3 flex-shrink-0"></span>Chia sẻ file và hình ảnh bảo mật</li>
                    <li class="flex items-center text-[#1d1d1f] font-medium leading-relaxed"><span class="w-1.5 h-1.5 rounded-full bg-[#0071e3] mr-3 flex-shrink-0"></span>Ghi chú và trao đổi nội bộ</li>
                    <li class="flex items-center text-[#1d1d1f] font-medium leading-relaxed"><span class="w-1.5 h-1.5 rounded-full bg-[#0071e3] mr-3 flex-shrink-0"></span>Lịch sử ca và tra cứu bảo hành</li>
                </ul>
            </div>
            <div class="w-full lg:w-[62%] fade-in-up" style="animation-delay: 0.15s;">
                <img src="{{ home_url('wp-content/uploads/2022/08/clinic-dashboard') }}.png"
                     alt="DentalSO Connect Dashboard"
                     class="w-full rounded-3xl shadow-[0_20px_80px_rgba(0,0,0,0.08)]">
            </div>
        </div>
    </div>
</section>

{{-- ============================================= --}}
{{-- Dành cho Phòng khám --}}
{{-- ============================================= --}}
<section class="py-16 lg:py-28 bg-white">
    <div class="apple-container">
        <div class="flex flex-col-reverse lg:flex-row items-center gap-12 lg:gap-20">
            <div class="w-full lg:w-[62%] fade-in-up">
                <div class="bg-[#e3f0fc] rounded-3xl p-10 lg:p-16 flex items-center justify-center min-h-[360px]">
                    <span class="material-symbols-outlined text-[#0071e3]" style="font-size: 9rem; opacity: 0.3;">local_hospital</span>
                </div>
            </div>
            <div class="w-full lg:w-[38%] fade-in-up" style="animation-delay: 0.15s;">
                <p class="text-sm font-semibold text-[#0071e3] tracking-wide uppercase mb-5">Dành cho Phòng khám</p>
                <h2 class="text-3xl lg:text-4xl font-bold text-[#1d1d1f] leading-snug tracking-tight mb-8">
                    Trao đổi rõ ràng.<br>Giảm làm lại.<br>Giao hàng nhanh hơn.
                </h2>
                <ul class="space-y-4">
                    <li class="flex items-start text-[#1d1d1f] leading-relaxed"><span class="w-1.5 h-1.5 rounded-full bg-[#0071e3] mr-3 mt-2.5 flex-shrink-0"></span>Gửi ca trực tuyến với phiếu chỉ định số hóa</li>
                    <li class="flex items-start text-[#1d1d1f] leading-relaxed"><span class="w-1.5 h-1.5 rounded-full bg-[#0071e3] mr-3 mt-2.5 flex-shrink-0"></span>Tải lên scan trong miệng, ảnh chụp và file đính kèm</li>
                    <li class="flex items-start text-[#1d1d1f] leading-relaxed"><span class="w-1.5 h-1.5 rounded-full bg-[#0071e3] mr-3 mt-2.5 flex-shrink-0"></span>Theo dõi trạng thái ca thời gian thực</li>
                    <li class="flex items-start text-[#1d1d1f] leading-relaxed"><span class="w-1.5 h-1.5 rounded-full bg-[#0071e3] mr-3 mt-2.5 flex-shrink-0"></span>Nhận cập nhật tiến độ sản xuất ngay lập tức</li>
                    <li class="flex items-start text-[#1d1d1f] leading-relaxed"><span class="w-1.5 h-1.5 rounded-full bg-[#0071e3] mr-3 mt-2.5 flex-shrink-0"></span>Truy cập đầy đủ lịch sử ca và hồ sơ bảo hành</li>
                </ul>
            </div>
        </div>
    </div>
</section>

{{-- ============================================= --}}
{{-- Dành cho Sales --}}
{{-- ============================================= --}}
<section class="py-16 lg:py-28 bg-[#f5f5f7]">
    <div class="apple-container">
        <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-20">
            <div class="w-full lg:w-[38%] fade-in-up">
                <p class="text-sm font-semibold text-[#30d158] tracking-wide uppercase mb-5">Dành cho Sales</p>
                <h2 class="text-3xl lg:text-4xl font-bold text-[#1d1d1f] leading-snug tracking-tight mb-8">
                    Nâng cao chất lượng dịch vụ.<br>Gắn kết khách hàng.
                </h2>
                <ul class="space-y-4">
                    <li class="flex items-start text-[#1d1d1f] leading-relaxed"><span class="w-1.5 h-1.5 rounded-full bg-[#30d158] mr-3 mt-2.5 flex-shrink-0"></span>Tạo và quản lý ca cho phòng khám</li>
                    <li class="flex items-start text-[#1d1d1f] leading-relaxed"><span class="w-1.5 h-1.5 rounded-full bg-[#30d158] mr-3 mt-2.5 flex-shrink-0"></span>Theo dõi tiến độ sản xuất trên nhiều khách hàng</li>
                    <li class="flex items-start text-[#1d1d1f] leading-relaxed"><span class="w-1.5 h-1.5 rounded-full bg-[#30d158] mr-3 mt-2.5 flex-shrink-0"></span>Trao đổi trực tiếp với đội ngũ Labo</li>
                    <li class="flex items-start text-[#1d1d1f] leading-relaxed"><span class="w-1.5 h-1.5 rounded-full bg-[#30d158] mr-3 mt-2.5 flex-shrink-0"></span>Tổ chức tài liệu gọn gàng, có hệ thống</li>
                </ul>
            </div>
            <div class="w-full lg:w-[62%] fade-in-up" style="animation-delay: 0.15s;">
                <div class="bg-[#e2f5e9] rounded-3xl p-10 lg:p-16 flex items-center justify-center min-h-[360px]">
                    <span class="material-symbols-outlined text-[#30d158]" style="font-size: 9rem; opacity: 0.3;">supervisor_account</span>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================= --}}
{{-- Dành cho Labo đối tác --}}
{{-- ============================================= --}}
<section class="py-16 lg:py-28 bg-white">
    <div class="apple-container">
        <div class="flex flex-col-reverse lg:flex-row items-center gap-12 lg:gap-20">
            <div class="w-full lg:w-[62%] fade-in-up">
                <div class="bg-[#ece5f6] rounded-3xl p-10 lg:p-16 flex items-center justify-center min-h-[360px]">
                    <span class="material-symbols-outlined text-[#bf5af2]" style="font-size: 9rem; opacity: 0.3;">precision_manufacturing</span>
                </div>
            </div>
            <div class="w-full lg:w-[38%] fade-in-up" style="animation-delay: 0.15s;">
                <p class="text-sm font-semibold text-[#bf5af2] tracking-wide uppercase mb-5">Dành cho Labo đối tác</p>
                <h2 class="text-3xl lg:text-4xl font-bold text-[#1d1d1f] leading-snug tracking-tight mb-6">
                    Cộng tác minh bạch<br>giữa các Labo.
                </h2>
                <p class="text-sm text-[#86868b] font-medium uppercase tracking-wide mb-6">Mô hình gia công ngoài / gia công trong</p>
                <ul class="space-y-4">
                    <li class="flex items-start text-[#1d1d1f] leading-relaxed"><span class="w-1.5 h-1.5 rounded-full bg-[#bf5af2] mr-3 mt-2.5 flex-shrink-0"></span>Gửi ca gia công trực tuyến</li>
                    <li class="flex items-start text-[#1d1d1f] leading-relaxed"><span class="w-1.5 h-1.5 rounded-full bg-[#bf5af2] mr-3 mt-2.5 flex-shrink-0"></span>Theo dõi cập nhật từng công đoạn</li>
                    <li class="flex items-start text-[#1d1d1f] leading-relaxed"><span class="w-1.5 h-1.5 rounded-full bg-[#bf5af2] mr-3 mt-2.5 flex-shrink-0"></span>Chia sẻ file thiết kế bảo mật</li>
                    <li class="flex items-start text-[#1d1d1f] leading-relaxed"><span class="w-1.5 h-1.5 rounded-full bg-[#bf5af2] mr-3 mt-2.5 flex-shrink-0"></span>Giảm phụ thuộc email</li>
                </ul>
            </div>
        </div>
    </div>
</section>

{{-- ============================================= --}}
{{-- Tính năng cốt lõi --}}
{{-- ============================================= --}}
<section class="py-20 lg:py-32 bg-[#f5f5f7]">
    <div class="apple-container">
        <div class="max-w-4xl mx-auto fade-in-up">
            <h2 class="text-4xl lg:text-6xl font-bold text-[#1d1d1f] leading-[1.08] tracking-tight mb-20">
                Tính năng cốt lõi<br>vận hành toàn bộ quy trình.
            </h2>
        </div>

        <div class="grid lg:grid-cols-2 gap-x-20 gap-y-20 max-w-5xl mx-auto">
            <div class="fade-in-up">
                <h3 class="text-2xl font-bold text-[#1d1d1f] mb-4">1. Gửi ca trực tuyến</h3>
                <p class="text-[#86868b] leading-[1.7]">
                    Form có cấu trúc đảm bảo thông tin ca đầy đủ và chính xác, giảm thiểu thiếu sót và trễ sản xuất.
                </p>
            </div>
            <div class="fade-in-up" style="animation-delay: 0.1s;">
                <h3 class="text-2xl font-bold text-[#1d1d1f] mb-4">2. Theo dõi sản xuất thời gian thực</h3>
                <p class="text-[#86868b] leading-[1.7] mb-5">Đối tác có thể theo dõi từng công đoạn:</p>
                <div class="flex flex-wrap lg:flex-nowrap items-center gap-3 text-sm font-medium text-[#1d1d1f]">
                    <span class="px-3 py-1.5 bg-white rounded-full border border-gray-200 whitespace-nowrap">Thiết kế</span>
                    <span class="text-[#86868b] font-bold">→</span>
                    <span class="px-3 py-1.5 bg-white rounded-full border border-gray-200 whitespace-nowrap">Phay</span>
                    <span class="text-[#86868b] font-bold">→</span>
                    <span class="px-3 py-1.5 bg-white rounded-full border border-gray-200 whitespace-nowrap">Hoàn thiện</span>
                    <span class="text-[#86868b] font-bold">→</span>
                    <span class="px-3 py-1.5 bg-white rounded-full border border-gray-200 whitespace-nowrap">KCS</span>
                    <span class="text-[#86868b] font-bold">→</span>
                    <span class="px-3 py-1.5 bg-[#0071e3] text-white rounded-full whitespace-nowrap">Giao hàng</span>
                </div>
            </div>
            <div class="fade-in-up">
                <h3 class="text-2xl font-bold text-[#1d1d1f] mb-4">3. Chia sẻ file & hình ảnh bảo mật</h3>
                <p class="text-[#86868b] leading-[1.7]">
                    File STL, scan trong miệng, X-ray, ảnh chụp và bản chỉnh sửa thiết kế — tất cả được lưu trữ bảo mật theo từng ca.
                </p>
            </div>
            <div class="fade-in-up" style="animation-delay: 0.1s;">
                <h3 class="text-2xl font-bold text-[#1d1d1f] mb-4">4. Ghi chú & Lịch sử trao đổi</h3>
                <p class="text-[#86868b] leading-[1.7]">
                    Hướng dẫn đặc biệt, yêu cầu chỉnh sửa, xác nhận duyệt, cập nhật giao hàng — mọi thứ đều truy vết và có tổ chức.
                </p>
            </div>
            <div class="fade-in-up lg:col-span-2">
                <h3 class="text-2xl font-bold text-[#1d1d1f] mb-5">5. Bảo mật cấp doanh nghiệp</h3>
                <div class="flex flex-wrap gap-4 mt-2">
                    <span class="px-5 py-3 bg-white rounded-xl border border-gray-200 text-sm font-medium text-[#1d1d1f]">Mã hóa SSL</span>
                    <span class="px-5 py-3 bg-white rounded-xl border border-gray-200 text-sm font-medium text-[#1d1d1f]">Hạ tầng đám mây bảo mật</span>
                    <span class="px-5 py-3 bg-white rounded-xl border border-gray-200 text-sm font-medium text-[#1d1d1f]">Phân quyền theo vai trò</span>
                    <span class="px-5 py-3 bg-white rounded-xl border border-gray-200 text-sm font-medium text-[#1d1d1f]">Nhật ký hoạt động</span>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================= --}}
{{-- Tích hợp — Dark section --}}
{{-- ============================================= --}}
<section class="apple-section apple-section--dark relative overflow-hidden">
    <div class="apple-container relative z-10">
        <div class="max-w-4xl mx-auto text-center fade-in-up">
            <h2 class="text-4xl lg:text-6xl font-bold text-white tracking-tight mb-10">
                <span class="block">Tích hợp hoàn toàn với</span>
                <span class="block mt-3">DentalSO MES.</span>
            </h2>
            <p class="text-xl text-[#86868b] max-w-2xl mx-auto mb-20 leading-relaxed">
                Khác với các app gửi ca độc lập, DentalSO Connect được tích hợp trực tiếp vào hệ thống sản xuất của Labo bạn.
            </p>
        </div>

        <div class="flex flex-col lg:flex-row items-stretch gap-6 max-w-5xl mx-auto">
            <div class="flex-1 apple-glass-card p-8 fade-in-up flex items-center justify-center text-center" style="animation-delay: 0.1s;"><p class="apple-glass-text font-medium">DentalSO Lab MES</p></div>
            <div class="flex-1 apple-glass-card p-8 fade-in-up flex items-center justify-center text-center" style="animation-delay: 0.15s;"><p class="apple-glass-text font-medium">Hệ thống quản lý ca</p></div>
            <div class="flex-1 apple-glass-card p-8 fade-in-up flex items-center justify-center text-center" style="animation-delay: 0.2s;"><p class="apple-glass-text font-medium">Sắp lịch sản xuất</p></div>
            <div class="flex-1 apple-glass-card p-8 fade-in-up flex items-center justify-center text-center" style="animation-delay: 0.25s;"><p class="apple-glass-text font-medium">Quy trình kiểm tra chất lượng</p></div>
        </div>

        <div class="max-w-3xl mx-auto mt-16 text-center fade-in-up" style="animation-delay: 0.3s;">
            <p class="text-2xl lg:text-3xl font-bold text-white leading-snug">
                Khi phòng khám gửi ca → Ca tự động đi vào quy trình sản xuất của Labo.
            </p>
            <p class="text-xl font-bold text-[#0071e3] mt-6">
                Không nhập trùng. Không mất dữ liệu. Không nhập lại thủ công.
            </p>
        </div>
    </div>
</section>

{{-- ============================================= --}}
{{-- Giảm / Tăng — Số liệu --}}
{{-- ============================================= --}}
<section class="py-20 lg:py-32 bg-white">
    <div class="apple-container">
        <div class="max-w-4xl mx-auto text-center mb-16 fade-in-up">
            <h2 class="text-4xl lg:text-6xl font-bold text-[#1d1d1f] leading-[1.08] tracking-tight">
                Vận hành tinh gọn —<br>Mở rộng toàn mạng lưới.
            </h2>
            <p class="text-xl text-[#86868b] mt-8 max-w-2xl mx-auto leading-relaxed">
                DentalSO Connect biến Labo của bạn thành hệ sinh thái kết nối số.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-16 max-w-4xl mx-auto">
            <div class="fade-in-up">
                <p class="text-sm font-bold uppercase tracking-widest text-[#ff453a] mb-10">Giảm thiểu</p>
                <div class="space-y-8">
                    <div class="flex items-center gap-4">
                        <span class="text-4xl font-black text-[#ff453a]">↓</span>
                        <span class="text-lg font-medium text-[#1d1d1f]">Lỗi khi nhận ca</span>
                    </div>
                    <div class="flex items-center gap-4">
                        <span class="text-4xl font-black text-[#ff453a]">↓</span>
                        <span class="text-lg font-medium text-[#1d1d1f]">Trễ trao đổi thông tin</span>
                    </div>
                    <div class="flex items-center gap-4">
                        <span class="text-4xl font-black text-[#ff453a]">↓</span>
                        <span class="text-lg font-medium text-[#1d1d1f]">Tắc nghẽn sản xuất</span>
                    </div>
                    <div class="flex items-center gap-4">
                        <span class="text-4xl font-black text-[#ff453a]">↓</span>
                        <span class="text-lg font-medium text-[#1d1d1f]">Khối lượng công việc hành chính</span>
                    </div>
                </div>
            </div>
            <div class="fade-in-up" style="animation-delay: 0.1s;">
                <p class="text-sm font-bold uppercase tracking-widest text-[#30d158] mb-10">Gia tăng</p>
                <div class="space-y-6">
                    <div class="flex items-center gap-4">
                        <span class="text-4xl font-black text-[#30d158]">↑</span>
                        <span class="text-lg font-medium text-[#1d1d1f]">Minh bạch</span>
                    </div>
                    <div class="flex items-center gap-4">
                        <span class="text-4xl font-black text-[#30d158]">↑</span>
                        <span class="text-lg font-medium text-[#1d1d1f]">Hiệu suất</span>
                    </div>
                    <div class="flex items-center gap-4">
                        <span class="text-4xl font-black text-[#30d158]">↑</span>
                        <span class="text-lg font-medium text-[#1d1d1f]">Hài lòng khách hàng</span>
                    </div>
                    <div class="flex items-center gap-4">
                        <span class="text-4xl font-black text-[#30d158]">↑</span>
                        <span class="text-lg font-medium text-[#1d1d1f]">Khả năng mở rộng</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================= --}}
{{-- CTA --}}
{{-- ============================================= --}}
<section class="apple-section apple-section--cta relative overflow-hidden">
    <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-[#005bb5]/30 rounded-full blur-[150px] -translate-y-1/2 translate-x-1/4"></div>
    <div class="apple-container text-center relative z-10">
        <div class="max-w-3xl mx-auto fade-in-up mb-16">
            <h2 class="text-2xl lg:text-3xl font-bold text-white mb-8">DentalSO Connect dành cho ai?</h2>
            <div class="flex flex-wrap justify-center gap-3">
                <span class="px-5 py-3 rounded-full bg-white/10 text-white/90 backdrop-blur-sm border border-white/20 text-sm font-medium">Labo đang phát triển</span>
                <span class="px-5 py-3 rounded-full bg-white/10 text-white/90 backdrop-blur-sm border border-white/20 text-sm font-medium">Doanh nghiệp Labo đa chi nhánh</span>
                <span class="px-5 py-3 rounded-full bg-white/10 text-white/90 backdrop-blur-sm border border-white/20 text-sm font-medium">Labo có đội ngũ sales</span>
                <span class="px-5 py-3 rounded-full bg-white/10 text-white/90 backdrop-blur-sm border border-white/20 text-sm font-medium">Labo gia công bên ngoài</span>
                <span class="px-5 py-3 rounded-full bg-white/10 text-white/90 backdrop-blur-sm border border-white/20 text-sm font-medium">Phòng khám muốn gửi ca số hóa</span>
            </div>
        </div>

        <div class="fade-in-up">
            <h2 class="apple-headline text-white mb-8">Sẵn sàng kết nối số<br>mạng lưới Labo?</h2>
            <p class="text-xl text-white/80 leading-relaxed max-w-2xl mx-auto mb-12">
                Loại bỏ email. Thay thế phiếu chỉ định giấy. Tối ưu cộng tác.
            </p>
            <div class="apple-cta-group">
                <a href="{{ home_url('yeu-cau-tu-van/') }}" class="apple-cta-primary apple-cta-primary--light">
                    Đăng Ký Demo Connect
                </a>
                <a href="{{ home_url('san-pham/phan-mem-mes/') }}" class="apple-cta-secondary apple-cta-secondary--light">
                    Xem cách nó kết nối <span class="apple-chevron">›</span>
                </a>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });
        document.querySelectorAll('.fade-in-up').forEach(el => observer.observe(el));
    });
</script>

@endsection