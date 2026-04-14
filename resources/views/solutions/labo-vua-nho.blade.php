{{-- Template Name: Solution: Labo Vừa & Nhỏ --}}
@extends('layouts.app')

@section('content')

{{-- Hero --}}
<section class="apple-section apple-hero bg-white">
    <div class="apple-container text-center">
        <div>
            <span class="apple-eyebrow hero-stagger-1">Giải pháp Tiết kiệm & Hiệu quả</span>
            <h1 class="apple-headline mb-4 hero-stagger-2">Phần mềm Quản lý<br>Labo Nha khoa Nhỏ & Startup</h1>
            <p class="text-[1.25rem] md:text-[1.5rem] font-bold text-[#0071e3] tracking-tight mb-6 hero-stagger-3">
                Chi phí thấp – Tối ưu cho labo nhỏ – Dùng thử MIỄN PHÍ
            </p>

            
            <div class="apple-cta-group hero-stagger-5">
                <a href="{{ home_url('yeu-cau-tu-van/') }}" class="apple-cta-primary apple-cta-primary--blue cta-pulse">ĐĂNG KÝ DEMO NGAY</a>
                <a href="{{ home_url('phi-su-dung/') }}" class="apple-cta-secondary">Xem bảng giá <span class="apple-chevron material-symbols-outlined">chevron_right</span></a>
            </div>

            {{-- Trust Signals --}}
            <!--<div class="apple-trust-bar">
                <div class="trust-item trust-pop-1">
                    <span class="material-symbols-outlined">check_circle</span>
                    <span>Chi phí rõ ràng, minh bạch</span>
                </div>
                <div class="trust-sep trust-pop-1"></div>
                <div class="trust-item trust-pop-2">
                    <span class="material-symbols-outlined">check_circle</span>
                    <span>Triển khai nhanh chóng</span>
                </div>
                <div class="trust-sep trust-pop-2"></div>
                <div class="trust-item trust-pop-3">
                    <span class="material-symbols-outlined">check_circle</span>
                    <span>Hỗ trợ 24/7</span>
                </div>
            </div>-->
        </div>
        {{-- Hero image --}}
        <div class="apple-hero-img-wrapper hero-stagger-6">
            <img src="@asset('images/giai-phap-quan-ly-labo-nha-khoa-nho.png')" alt="DentalSO Small Lab Management - Phần mềm quản lý labo nha khoa giá rẻ, cho dùng thử miễn phí" class="apple-hero-img animate-float">
        </div>
    </div>
</section>

{{-- What You Get --}}
<section class="apple-section bg-[#f5f5f7]">
    <div class="apple-container">
        <div class="text-center max-w-4xl mx-auto mb-16 fade-in-up">
            <span class="apple-eyebrow">Bạn Nhận Được Gì</span>
            <h1 class="text-[1.75rem] md:text-[2.25rem] font-bold text-[#1d1d1f] tracking-tight mb-2">Lợi ích chính</h1>
            <h2 class="apple-headline-sm">Xây dựng quy trình chuyên nghiệp –<br>Nền tảng phát triển nhanh cho labo nhỏ</h2>
        </div>

        {{-- Row 1: 2 large cards with images --}}
        <div class="grid md:grid-cols-2 gap-6 max-w-6xl mx-auto mb-6">
            {{-- Card 1: Quy trình chuẩn hoá --}}
            <div class="apple-card apple-card--white apple-lift fade-in-up fade-delay-1 overflow-hidden">
                <div class="w-full bg-[#e3f0fc] flex items-center justify-center border-b border-black/5 p-2">
                    <div class="bg-[#f5f5f7] rounded-2xl shadow-lg overflow-hidden p-1 w-full group-hover:scale-[1.02] transition-transform duration-500">
                        <img src="@asset('images/quy-trinh-san-xuat-rang-su-dentalso.png')" alt="DentalSO Workflow - Phần mềm quản lý labo nha khoa giá rẻ, cho dùng thử miễn phí" class="w-full h-auto object-contain rounded-xl parallax-img" loading="lazy">
                    </div>
                </div>
                <div class="apple-card-inner p-6">
                    <div class="flex items-center gap-3 mb-3">
                        <div class="w-10 h-10 rounded-xl bg-[#e3f0fc] flex items-center justify-center flex-shrink-0">
                            <span class="material-symbols-outlined text-[#0071e3]">account_tree</span>
                        </div>
                        <h3 class="apple-card-title !mb-0">Quy trình chuẩn hoá từ đầu đến cuối</h3>
                    </div>
                    <div class="flex flex-col items-center justify-center gap-1.5 sm:gap-2 w-full text-[0.875rem] font-medium text-[#1d1d1f] my-6">
                        <div class="px-4 py-1.5 bg-white border border-black/10 rounded-full shadow-sm text-center w-fit">Nhập đơn hàng</div>
                        
                        <div class="text-gray-400 material-symbols-outlined text-base my-[-0.25rem]">arrow_downward</div>
                        
                        <div class="px-4 py-1.5 bg-white border border-black/10 rounded-full shadow-sm text-center w-fit">Theo dõi tiến độ realtime</div>
                        
                        <div class="text-gray-400 material-symbols-outlined text-base my-[-0.25rem]">arrow_downward</div>
                        
                        <div class="px-4 py-1.5 bg-white border border-black/10 rounded-full shadow-sm text-center w-fit">Phân công KTV</div>
                        
                        <div class="text-gray-400 material-symbols-outlined text-base my-[-0.25rem]">arrow_downward</div>
                        
                        <div class="px-4 py-1.5 bg-[#a1a1aa] text-white rounded-full shadow-sm text-center border border-[#a1a1aa] w-fit">Xuất hoá đơn</div>
                    </div>
                    <p class="text-[#424245] text-[0.9375rem] leading-relaxed mt-3">
                        Mọi bước liền mạch, minh bạch, loại bỏ sai sót và chậm trễ.
                    </p>
                </div>
            </div>

            {{-- Card 2: Tài liệu & biểu mẫu --}}
            <div class="apple-card apple-card--white apple-lift fade-in-up fade-delay-2 overflow-hidden">
                <div class="w-full bg-[#fef3e2] flex items-center justify-center border-b border-black/5 p-2">
                    <div class="bg-[#f5f5f7] rounded-2xl shadow-lg overflow-hidden p-1 w-full group-hover:scale-[1.02] transition-transform duration-500 relative group/slider">
                        <div class="slider-container flex w-full overflow-hidden rounded-xl relative" data-current="0">
                            @php
                                $sliderImages = ['phieu-bao-quyet-toan-labo.png', 'phieu-bao-hanh-labo-nha-khoa.png', 'phieu-chi-labo-nha-khoa.png', 'phieu-giao-hang-labo-nha-khoa.png', 'phieu-thu-tien-labo-nha-khoa.png', 'phieu-yeu-cau-labo-nha-khoa.png'];
                            @endphp
                            @foreach($sliderImages as $img)
                            <img src="@asset('images/mauthe/' . $img)" class="w-full h-auto object-contain flex-shrink-0 transition-transform duration-500 ease-in-out" alt="DentalSO Documents and Templates - Phần mềm quản lý labo nha khoa giá rẻ, cho dùng thử miễn phí" loading="lazy">
                            @endforeach
                            <div class="w-full flex-shrink-0 flex flex-col items-center justify-center transition-transform duration-500 ease-in-out bg-white p-6">
                                <span class="material-symbols-outlined text-[3rem] text-[#ff9f0a] mb-3">folder_open</span>
                                <div class="text-[#1d1d1f] font-[600] text-[1.125rem] text-center leading-snug">Còn hàng chục tài liệu và<br>biểu mẫu chuyên nghiệp khác</div>
                            </div>
                        </div>
                        
                        <button onclick="event.preventDefault(); event.stopPropagation(); let c = this.parentElement.querySelector('.slider-container'); let curr = parseInt(c.getAttribute('data-current') || 0); let tot = c.children.length; curr = (curr === 0) ? tot - 1 : curr - 1; c.setAttribute('data-current', curr); Array.from(c.children).forEach(el => el.style.transform = `translateX(-${curr * 100}%)`);" class="absolute left-3 top-1/2 -translate-y-1/2 w-8 h-8 flex items-center justify-center bg-white/90 hover:bg-white text-black shadow-md rounded-full transition-all duration-300 z-10 opacity-0 group-hover/slider:opacity-100">
                            <span class="material-symbols-outlined text-[1.25rem]">chevron_left</span>
                        </button>
                        
                        <button onclick="event.preventDefault(); event.stopPropagation(); let c = this.parentElement.querySelector('.slider-container'); let curr = parseInt(c.getAttribute('data-current') || 0); let tot = c.children.length; curr = (curr === tot - 1) ? 0 : curr + 1; c.setAttribute('data-current', curr); Array.from(c.children).forEach(el => el.style.transform = `translateX(-${curr * 100}%)`);" class="absolute right-3 top-1/2 -translate-y-1/2 w-8 h-8 flex items-center justify-center bg-white/90 hover:bg-white text-black shadow-md rounded-full transition-all duration-300 z-10 opacity-0 group-hover/slider:opacity-100">
                            <span class="material-symbols-outlined text-[1.25rem]">chevron_right</span>
                        </button>
                    </div>
                </div>
                <div class="apple-card-inner p-6">
                    <div class="flex items-center gap-3 mb-3">
                        <div class="w-10 h-10 rounded-xl bg-[#fef3e2] flex items-center justify-center flex-shrink-0">
                            <span class="material-symbols-outlined text-[#ff9f0a]">description</span>
                        </div>
                        <h3 class="apple-card-title !mb-0">Tài liệu & biểu mẫu chuyên nghiệp</h3>
                    </div>
                    <p class="text-[#424245] text-[0.9375rem] leading-relaxed">
                        Hàng chục mẫu tài liệu đẹp, đồng bộ (đơn hàng, nghiệm thu, bảo hành, hoá đơn…). Tạo phong cách chuyên nghiệp ngay từ những ca đầu tiên, tăng uy tín với nha sĩ và clinic.
                    </p>
                </div>
            </div>
        </div>

        {{-- Section: Tự động hoá — image LEFT, text RIGHT --}}
        <div class="max-w-5xl mx-auto mt-16 fade-in-up">
            <div class="grid md:grid-cols-2 gap-8 md:gap-14 items-center">
                <div class="rounded-2xl overflow-hidden">
                    <img src="<?php echo get_template_directory_uri(); ?>/resources/images/phan-mem-tu-dong-hoa-labo-nha-khoa.png" alt="Tự động hoá quy trình Labo" class="w-full h-auto object-cover rounded-2xl" loading="lazy">
                </div>
                <div>
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 rounded-xl bg-[#e2f5e9] flex items-center justify-center flex-shrink-0">
                            <span class="material-symbols-outlined text-[#30d158]">bolt</span>
                        </div>
                        <h3 class="text-[1.5rem] font-semibold text-[#1d1d1f] leading-tight">Tự động hóa cao</h3>
                    </div>
                    <p class="text-[#86868b] text-[0.9375rem] mb-6">Giảm tối đa công việc thủ công, để đội ngũ tập trung vào chất lượng sản phẩm.</p>
                    <ul class="space-y-3 text-[#424245] text-[0.9375rem]">
                        <li class="flex items-start gap-3"><span class="material-symbols-outlined text-[#30d158] flex-shrink-0 mt-0.5 text-[1.125rem]">check_circle</span> Ứng dụng tự phân bổ công việc cho từng KTV</li>
                        <li class="flex items-start gap-3"><span class="material-symbols-outlined text-[#30d158] flex-shrink-0 mt-0.5 text-[1.125rem]">check_circle</span> Tự động nhắc đơn hàng phải giao theo thời gian đã nhập</li>
                        <li class="flex items-start gap-3"><span class="material-symbols-outlined text-[#30d158] flex-shrink-0 mt-0.5 text-[1.125rem]">check_circle</span> Kết nối dữ liệu bảo hành giữa bệnh nhân và thông tin sản phẩm</li>
                        <li class="flex items-start gap-3"><span class="material-symbols-outlined text-[#30d158] flex-shrink-0 mt-0.5 text-[1.125rem]">check_circle</span> Quản lý dữ liệu tập trung theo đơn hàng, giảm thời gian truy tìm</li>
                        <li class="flex items-start gap-3"><span class="material-symbols-outlined text-[#30d158] flex-shrink-0 mt-0.5 text-[1.125rem]">check_circle</span> Giảm thời gian nhập liệu, tiết kiệm chi phí vận hành</li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- Section: Chi phí thấp — text LEFT, image RIGHT (zigzag) --}}
        <div class="max-w-5xl mx-auto mt-20 fade-in-up">
            <div class="grid md:grid-cols-2 gap-8 md:gap-14 items-center">
                <div class="order-2 md:order-1">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 rounded-xl bg-[#f5e6fe] flex items-center justify-center flex-shrink-0">
                            <span class="material-symbols-outlined text-[#bf5af2]">savings</span>
                        </div>
                        <h3 class="text-[1.5rem] font-semibold text-[#1d1d1f] leading-tight">Chi phí thấp</h3>
                    </div>
                    <p class="text-[#86868b] text-[0.9375rem] mb-6">Phù hợp labo nhỏ & startup — không cần đầu tư lớn, bắt đầu ngay hôm nay.</p>
                    <ul class="space-y-3 text-[#424245] text-[0.9375rem]">
                        <li class="flex items-start gap-3"><span class="material-symbols-outlined text-[#bf5af2] flex-shrink-0 mt-0.5 text-[1.125rem]">check_circle</span> Không tốn chi phí phát triển ứng dụng, chỉ trả phí sử dụng hàng tháng</li>
                        <li class="flex items-start gap-3"><span class="material-symbols-outlined text-[#bf5af2] flex-shrink-0 mt-0.5 text-[1.125rem]">check_circle</span> Chi phí sử dụng phần mềm cực kỳ thấp</li>
                        <li class="flex items-start gap-3"><span class="material-symbols-outlined text-[#bf5af2] flex-shrink-0 mt-0.5 text-[1.125rem]">check_circle</span> Mô hình thanh toán linh hoạt: Dùng bao nhiêu trả bấy nhiêu</li>
                    </ul>
                </div>
                <div class="order-1 md:order-2 rounded-2xl overflow-hidden">
                    <img src="<?php echo get_template_directory_uri(); ?>/resources/images/chi-phi-thap-phan-mem-quan-ly-labo.png" alt="Chi phí thấp cho Labo nhỏ" class="w-full h-auto object-cover rounded-2xl" loading="lazy">
                </div>
            </div>
        </div>

        {{-- Section: Nền tảng vững chắc — image LEFT, text RIGHT --}}
        <div class="max-w-5xl mx-auto mt-20 fade-in-up">
            <div class="grid md:grid-cols-2 gap-8 md:gap-14 items-center">
                <div class="rounded-2xl overflow-hidden">
                    <img src="<?php echo get_template_directory_uri(); ?>/resources/images/nen-tang-cloud-quan-ly-labo-dentalso.png" alt="Nền tảng Cloud vững chắc" class="w-full h-auto object-cover rounded-2xl" loading="lazy">
                </div>
                <div>
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 rounded-xl bg-[#fff3e0] flex items-center justify-center flex-shrink-0">
                            <span class="material-symbols-outlined text-[#ff6d00]">rocket_launch</span>
                        </div>
                        <h3 class="text-[1.5rem] font-semibold text-[#1d1d1f] leading-tight">Nền tảng vững chắc</h3>
                    </div>
                    <p class="text-[#86868b] text-[0.9375rem] mb-6">Phát triển nhanh không rối loạn — hạ tầng đáng tin cậy cho mọi quy mô.</p>
                    <ul class="space-y-3 text-[#424245] text-[0.9375rem]">
                        <li class="flex items-start gap-3"><span class="material-symbols-outlined text-[#ff6d00] flex-shrink-0 mt-0.5 text-[1.125rem]">check_circle</span> Quy trình quản lý khoa học giúp doanh nghiệp phát triển nhanh</li>
                        <li class="flex items-start gap-3"><span class="material-symbols-outlined text-[#ff6d00] flex-shrink-0 mt-0.5 text-[1.125rem]">check_circle</span> Hệ thống hoạt động ổn định 99.9% trên nền tảng Cloud</li>
                        <li class="flex items-start gap-3"><span class="material-symbols-outlined text-[#ff6d00] flex-shrink-0 mt-0.5 text-[1.125rem]">check_circle</span> Sao lưu (backup) tự động liên tục, bảo mật dữ liệu cao</li>
                        <li class="flex items-start gap-3"><span class="material-symbols-outlined text-[#ff6d00] flex-shrink-0 mt-0.5 text-[1.125rem]">check_circle</span> Hỗ trợ không giới hạn số lượng tài khoản người dùng</li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- Mini Comparison Table --}}
        <div class="mt-14 max-w-4xl mx-auto scale-in">
            <div class="bg-white rounded-[1.25rem] overflow-hidden shadow-sm border border-black/5">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse min-w-[600px]">
                        <thead>
                            <tr class="border-b border-black/5 bg-[#fbfbfd]">
                                <th class="p-5 md:p-6 font-medium text-[#86868b] w-1/3">Tiêu chí</th>
                                <th class="p-5 md:p-6 font-medium text-[#86868b] w-1/3">Excel + thủ công</th>
                                <th class="p-5 md:p-6 font-semibold text-[#0071e3] w-1/3">DentalSO cho labo nhỏ</th>
                            </tr>
                        </thead>
                        <tbody class="text-[0.9375rem] md:text-base">
                            <tr class="border-b border-black/5 hover:bg-[#fbfbfd] transition-colors table-row-reveal">
                                <td class="p-5 md:p-6 font-medium text-[#1d1d1f]">Chi phí</td>
                                <td class="p-5 md:p-6 text-[#86868b]">Thấp ban đầu, cao về lâu dài</td>
                                <td class="p-5 md:p-6"><span class="flex items-center font-semibold text-[#1d1d1f]"><span class="material-symbols-outlined text-[#30d158] mr-2">check_circle</span> Rẻ & cố định hàng tháng</span></td>
                            </tr>
                            <tr class="border-b border-black/5 hover:bg-[#fbfbfd] transition-colors table-row-reveal">
                                <td class="p-5 md:p-6 font-medium text-[#1d1d1f]">Thời gian nhập liệu</td>
                                <td class="p-5 md:p-6 text-[#86868b]">Rất nhiều</td>
                                <td class="p-5 md:p-6"><span class="flex items-center font-semibold text-[#1d1d1f]"><span class="material-symbols-outlined text-[#30d158] mr-2">check_circle</span> Giảm 70-80%</span></td>
                            </tr>
                            <tr class="border-b border-black/5 hover:bg-[#fbfbfd] transition-colors table-row-reveal">
                                <td class="p-5 md:p-6 font-medium text-[#1d1d1f]">Sai sót & nhầm lẫn</td>
                                <td class="p-5 md:p-6 text-[#86868b]">Cao</td>
                                <td class="p-5 md:p-6"><span class="flex items-center font-semibold text-[#1d1d1f]"><span class="material-symbols-outlined text-[#30d158] mr-2">check_circle</span> Giảm mạnh</span></td>
                            </tr>
                            <tr class="border-b border-black/5 hover:bg-[#fbfbfd] transition-colors table-row-reveal">
                                <td class="p-5 md:p-6 font-medium text-[#1d1d1f]">Báo cáo công nợ</td>
                                <td class="p-5 md:p-6 text-[#86868b]">Thủ công</td>
                                <td class="p-5 md:p-6"><span class="flex items-center font-semibold text-[#1d1d1f]"><span class="material-symbols-outlined text-[#30d158] mr-2">check_circle</span> Tự động & realtime</span></td>
                            </tr>
                            <tr class="hover:bg-[#fbfbfd] transition-colors table-row-reveal">
                                <td class="p-5 md:p-6 font-medium text-[#1d1d1f]">Bảo hành</td>
                                <td class="p-5 md:p-6 text-[#86868b]">Dễ quên</td>
                                <td class="p-5 md:p-6"><span class="flex items-center font-semibold text-[#1d1d1f]"><span class="material-symbols-outlined text-[#30d158] mr-2">check_circle</span> Theo dõi rõ ràng</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Designed for Growing Labs --}}
<section class="apple-section bg-white">
    <div class="apple-container">
        <div class="apple-split">
            <div class="apple-split-text slide-in-left">
                <span class="apple-eyebrow">Nền tảng</span>
                <h2 class="apple-headline-sm mb-4">Thiết kế cho Labo Đang Phát triển</h2>
                <p class="apple-body mb-6">DentalSO giúp bạn xây dựng nền tảng vững chắc để mở rộng quy mô mà không gặp phải sự hỗn loạn trong vận hành.</p>
                <ul class="space-y-3">
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#bf5af2] text-xl flex-shrink-0 mt-[2px]">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Giảm thiểu sự hỗn loạn vận hành</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#bf5af2] text-xl flex-shrink-0 mt-[2px]">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Nâng cao khả năng theo dõi ca</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#bf5af2] text-xl flex-shrink-0 mt-[2px]">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Giao hàng đúng hạn liên tục</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#bf5af2] text-xl flex-shrink-0 mt-[2px]">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Xây dựng nền tảng dễ dàng mở rộng quy mô</span>
                    </li>
                </ul>
            </div>
            <div class="apple-split-media slide-in-right">
                <div class="bg-[#f5f5f7] rounded-2xl shadow-lg overflow-hidden p-1">
                    <img src="{{ get_site_url() }}/wp-content/uploads/2022/12/dental-online-lab-dashboard.png" alt="DentalSO Platform Dashboard - Phần mềm quản lý labo nha khoa giá rẻ, cho dùng thử miễn phí" class="apple-split-img rounded-xl parallax-img" loading="lazy">
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
    <section class="max-w-7xl mx-auto px-8 mb-32">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <div class="slide-in-left">
                <h3 class="apple-headline-sm">Bạn Đang Theo dõi Thủ công ?</h3>
                <p class="text-lg text-[#1d1d1f] leading-relaxed mt-4">
                    Bạn quản lý ca làm bằng Excel hay giấy tờ. Khi labo phát triển, bảng tính trở nên dễ mắc lỗi và tốn thời gian.
                </p>
                <div class="mt-8 flex gap-4">
                    <div class="p-4 rounded-xl bg-[#f5f5f7] stat-animate">
                        <span class="block text-2xl font-semibold text-[#34a853]">80%</span>
                        <span class="text-sm text-[#86868b]">Thời gian nhập liệu thủ công</span>
                    </div>
                    <div class="p-4 rounded-xl bg-[#f5f5f7] stat-animate">
                        <span class="block text-2xl font-semibold text-[#34a853]">3x</span>
                        <span class="text-sm text-[#86868b]">Sai sót so với kỹ thuật số</span>
                    </div>
                </div>
            </div>
            <div class="relative group slide-in-right">
                <div class="absolute -inset-4 rounded-3xl blur-2xl transition-colors" style="background-color: rgba(52,168,83,0.05);"></div>
                <div class="relative rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
                    <img src="@asset('images/zigzag-manual-tracking.webp')" alt="Không cần quản lý ca bằng Excel và giấy tờ thủ công nữa - Phần mềm quản lý labo nha khoa giá rẻ, cho dùng thử miễn phí" class="w-full h-auto object-cover parallax-img" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- Item 2: Thiếu Tầm nhìn --}}
    <section class="bg-[#f5f5f7] py-24">
        <div class="max-w-7xl mx-auto px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
                <div class="order-2 md:order-1 relative group slide-in-left">
                    <div class="absolute -inset-4 rounded-3xl blur-2xl transition-colors" style="background-color: rgba(255,159,10,0.1);"></div>
                    <div class="relative rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
                        <img src="@asset('images/zigzag-poor-visibility.webp')" alt="Giảm khó khăn khi theo dõi trạng thái ca - Phần mềm quản lý labo nha khoa giá rẻ, cho dùng thử miễn phí" class="w-full h-auto object-cover parallax-img" loading="lazy">
                    </div>
                </div>
                <div class="order-1 md:order-2 slide-in-right">
                    <h3 class="apple-headline-sm">Thiếu Tầm nhìn?</h3>
                    <p class="text-[1.25rem] font-semibold text-[#1d1d1f] mt-4 mb-2">Bạn đang loay hoay không biết ca đang ở đâu?</p>
                    <p class="text-lg text-[#424245] leading-relaxed">
                        Một ca gửi từ sáng, đến chiều vẫn phải hỏi nhân viên “làm đến đâu rồi?”. Khách gọi hỏi tiến độ, bạn chỉ trả lời chung chung “đang làm ạ”… deadline trễ, khách mất niềm tin và chuyển labo khác.
                    </p>
                    
                    <p class="font-bold text-[#1d1d1f] mt-8 mb-4">Khó khăn phổ biến của labo nhỏ:</p>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-3 text-[#1d1d1f]">
                            <span class="material-symbols-outlined flex-shrink-0 mt-[2px]" style="color: #ff9f0a;" aria-hidden="true">error</span>
                            <span>Không biết ca đang ở công đoạn nào</span>
                        </li>
                        <li class="flex items-start gap-3 text-[#1d1d1f]">
                            <span class="material-symbols-outlined flex-shrink-0 mt-[2px]" style="color: #ff9f0a;" aria-hidden="true">error</span>
                            <span>Không trả lời nhanh khi khách hỏi tiến độ</span>
                        </li>
                        <li class="flex items-start gap-3 text-[#1d1d1f]">
                            <span class="material-symbols-outlined flex-shrink-0 mt-[2px]" style="color: #ff9f0a;" aria-hidden="true">error</span>
                            <span>Phải liên tục hỏi nhân viên → dễ bỏ sót ca gấp hoặc bảo hành</span>
                        </li>
                        <li class="flex items-start gap-3 text-[#1d1d1f]">
                            <span class="material-symbols-outlined flex-shrink-0 mt-[2px]" style="color: #ff9f0a;" aria-hidden="true">error</span>
                            <span>Dễ quên ca làm lại → khiếu nại bất ngờ</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- Item 3: Cần Khắc phục Rối ren --}}
    <section class="max-w-7xl mx-auto px-8 my-32">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <div class="slide-in-left">
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
                        <div class="h-full progress-fill-animate" style="--fill-width: 90%; background-color: #0a84ff;"></div>
                    </div>
                </div>
            </div>
            <div class="relative group slide-in-right">
                <div class="absolute -inset-4 rounded-3xl blur-2xl transition-colors" style="background-color: rgba(10,132,255,0.05);"></div>
                <div class="relative rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
                    <img src="@asset('images/zigzag-need-simplicity.webp')" alt="Giao diện đơn giản dễ sử dụng - Phần mềm quản lý labo nha khoa giá rẻ, cho dùng thử miễn phí" class="w-full h-auto object-cover parallax-img" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- Item 4: Đang Mở rộng --}}
    <section class="py-24" style="background-color: rgba(48,209,88,0.04);">
        <div class="max-w-7xl mx-auto px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
                <div class="order-2 md:order-1 relative group slide-in-left">
                    <div class="absolute -inset-4 rounded-3xl blur-2xl transition-colors" style="background-color: rgba(48,209,88,0.08);"></div>
                    <div class="relative rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
                        <img src="@asset('images/zigzag-scaling-up.webp')" alt="Hỗ trợ Labo nha khoa đang mở rộng quy mô - Phần mềm quản lý labo nha khoa giá rẻ, cho dùng thử miễn phí" class="w-full h-auto object-cover parallax-img" loading="lazy">
                    </div>
                </div>
                <div class="order-1 md:order-2 slide-in-right">
                    <h3 class="apple-headline-sm">Labo Đang Mở Rộng ?</h3>
                    <p class="text-lg text-[#1d1d1f] leading-relaxed mt-4">
                        Labo đang tăng trưởng nhưng chưa cần hệ thống MES quá lớn. DentalSO cho bạn không gian để mở rộng mà không cần đầu tư quá mức.
                    </p>
                    <div class="mt-8 flex flex-col gap-4">
                        <div class="flex items-start gap-4 p-4 rounded-xl bg-white/50 backdrop-blur-sm border border-gray-100 apple-lift">
                            <span class="material-symbols-outlined" style="color: #30d158;" aria-hidden="true">trending_up</span>
                            <div>
                                <div class="font-semibold text-[#1d1d1f]">Bắt đầu nhỏ</div>
                                <p class="text-sm text-[#86868b]">Sử dụng các tính năng cốt lõi, thêm module khi phát triển.</p>
                            </div>
                        </div>
                        <a href="{{ home_url('san-pham/phan-mem-mes/') }}" class="flex items-start gap-4 p-4 rounded-xl bg-white/50 backdrop-blur-sm border border-gray-100 apple-lift group decoration-none">
                            <span class="material-symbols-outlined" style="color: #30d158;" aria-hidden="true">upgrade</span>
                            <div>
                                <div class="font-semibold text-[#1d1d1f] group-hover:text-[#0071e3] transition-colors">Nâng cấp khi sẵn sàng</div>
                                <p class="text-sm text-[#86868b]">Chuyển sang MES mượt mà khi bạn cần.</p>
                            </div>
                        </a>
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
                <a href="{{ home_url('yeu-cau-tu-van/') }}" class="apple-cta-primary apple-cta-primary--light apple-press">Đặt Lịch Demo</a>
                <a href="{{ home_url('lien-he/') }}" class="apple-cta-secondary apple-cta-secondary--light">Liên Hệ Kinh Doanh<span class="apple-chevron material-symbols-outlined">chevron_right</span></a>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
    // Main scroll observer for fade-in-up, slide-in, scale-in
    const mainObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                mainObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });

    document.querySelectorAll('.fade-in-up, .slide-in-left, .slide-in-right, .scale-in, .stat-animate').forEach(el => {
        mainObserver.observe(el);
    });

    // Table row stagger observer
    const tableObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const rows = entry.target.querySelectorAll('.table-row-reveal');
                rows.forEach((row, i) => {
                    setTimeout(() => {
                        row.classList.add('is-visible');
                    }, i * 100);
                });
                tableObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.2 });

    document.querySelectorAll('table').forEach(table => {
        tableObserver.observe(table);
    });
});
</script>

@endsection
