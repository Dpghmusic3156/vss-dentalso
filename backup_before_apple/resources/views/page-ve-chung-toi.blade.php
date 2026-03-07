@extends('layouts.app')

@section('page-header')
    @include('partials.page-header')
@endsection

@section('content')
<div class="bg-primary-50 py-20">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-primary2-500 mb-6">Nâng Tầm Công Nghệ Nha Khoa</h1>
        <p class="text-lg max-w-3xl mx-auto leading-relaxed text-gray-700">
            Hiện đại hóa hoạt động của các phòng nha khoa và labo thông qua công nghệ thông minh, thân thiện với người dùng.
        </p>
    </div>
</div>

<div class="container mx-auto px-4 py-16 space-y-24">

    <section class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <div class="space-y-6">
            <span class="text-blue-600 font-bold uppercase tracking-wider text-sm">Giới Thiệu</span>
            <h2 class="text-3xl md:text-4xl font-bold text-primary2-500">Chúng Tôi Là Ai</h2>
            <div class="prose leading-relaxed space-y-4">
                <p>
                    DentalSO là công ty phần mềm chuyên hiện đại hóa hoạt động của các phòng nha khoa và labo thông qua công nghệ thông minh. Được thành lập với sự thấu hiểu sâu sắc về tính phức tạp trong quy trình nha khoa, sứ mệnh của chúng tôi là giúp các chuyên gia tối ưu hóa sản xuất, nâng cao hiệu quả và cải thiện trải nghiệm bệnh nhân.
                </p>
                <p>
                    Ngay từ ngày đầu, chúng tôi chọn tập trung hoàn toàn vào lĩnh vực nha khoa. Kết hợp thực tiễn toàn cầu với kinh nghiệm thực tế, nền tảng của chúng tôi thực sự hiểu được những thách thức hằng ngày của bạn.
                </p>
            </div>
            
            <div class="bg-blue-50 border-l-4 border-blue-600 p-4 mt-6">
                <p class="font-semibold text-blue-900">
                    Được tin dùng bởi <span class="text-2xl font-bold">300+</span> doanh nghiệp trên toàn thế giới để khai phá mức năng suất hoạt động mới.
                </p>
            </div>
        </div>
        <div class="relative">
            <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                 alt="Công nghệ nha khoa" 
                 class="rounded-3xl shadow-xl w-full object-cover h-[500px]">
        </div>
    </section>

    <section>
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-blue-600 font-bold uppercase tracking-wider text-sm">Dịch Vụ</span>
            <h2 class="text-3xl font-bold text-primary2-500 mt-2 mb-4">Hệ Sinh Thái Toàn Diện</h2>
            <p class="text-primary2-600">
                Giải pháp của chúng tôi giúp đơn giản hóa quy trình phức tạp, nâng cao giao tiếp và hỗ trợ ra quyết định dựa trên dữ liệu trong toàn bộ chu trình sản xuất và chăm sóc bệnh nhân.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-xl transition-shadow">
                <div class="w-14 h-14 bg-blue-100 rounded-xl flex items-center justify-center text-blue-600 mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.384-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                </div>
                <h3 class="text-2xl font-bold text-primary2-500 mb-4">DentalSO App cho Labo (MES)</h3>
                <p class="text-primary2-600 mb-6">
                    Hệ thống MES chủ lực giúp đồng bộ hóa thời gian thực toàn bộ hoạt động trên sàn sản xuất—từ tiếp nhận vật liệu đến bàn giao phục hình.
                </p>
                <ul class="space-y-3 text-gray-700">
                    <li class="flex items-start"><span class="text-green-500 mr-2">✔</span> Theo dõi và kiểm soát từng bước sản xuất</li>
                    <li class="flex items-start"><span class="text-green-500 mr-2">✔</span> Tối ưu hóa quy trình nhờ dữ liệu phân tích</li>
                    <li class="flex items-start"><span class="text-green-500 mr-2">✔</span> Kiểm soát chất lượng & theo dõi lỗi</li>
                    <li class="flex items-start"><span class="text-green-500 mr-2">✔</span> Quản lý tồn kho & dự báo thông minh</li>
                </ul>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-xl transition-shadow">
                <div class="w-14 h-14 bg-blue-100 rounded-xl flex items-center justify-center text-blue-600 mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                </div>
                <h3 class="text-2xl font-bold text-primary2-500 mb-4">Cổng Giao Tiếp Phòng Khám - Labo</h3>
                <p class="text-primary2-600 mb-6">
                    Môi trường trực tuyến bảo mật giúp cộng tác dễ dàng và kết nối hiệu quả giữa phòng khám và labo.
                </p>
                <ul class="space-y-3 text-gray-700">
                    <li class="flex items-start"><span class="text-indigo-500 mr-2">✔</span> Quản lý đơn hàng tập trung</li>
                    <li class="flex items-start"><span class="text-indigo-500 mr-2">✔</span> Cập nhật & chia sẻ tệp tin tức thì</li>
                    <li class="flex items-start"><span class="text-indigo-500 mr-2">✔</span> Lưu trữ an toàn hồ sơ bệnh nhân</li>
                    <li class="flex items-start"><span class="text-indigo-500 mr-2">✔</span> Tuân thủ bảo mật dữ liệu nghiêm ngặt</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="bg-gray-50 rounded-3xl p-8 md:p-12">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-primary2-900">Cam Kết Của Chúng Tôi</h2>
            <p class="text-primary2-500 mt-2">DentalSO tạo nên sự khác biệt nhờ:</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center p-4">
                <div class="w-16 h-16 inline-block p-4 bg-white rounded-full shadow-sm mb-4 text-blue-600">
                    <i class="fas fa-lightbulb text-2xl"></i>
                </div>
                <h4 class="text-xl font-bold mb-2">Đổi Mới Chuyên Ngành</h4>
                <p class="text-primary2-600 text-sm">Tính năng được thiết kế riêng cho quy trình nha khoa, đáp ứng sự chính xác tuyệt đối.</p>
            </div>
            
            <div class="text-center p-4">
                <div class="w-16 h-16 inline-block p-4 bg-white rounded-full shadow-sm mb-4 text-blue-600">
                    <i class="fas fa-shield-alt text-2xl"></i>
                </div>
                <h4 class="text-xl font-bold mb-2">Bảo Mật Cấp Doanh Nghiệp</h4>
                <p class="text-primary2-600 text-sm">Mã hóa SSL và công nghệ RSA bảo vệ dữ liệu bệnh nhân ở mọi bước.</p>
            </div>

            <div class="text-center p-4">
                <div class="w-16 h-16 inline-block p-4 bg-white rounded-full shadow-sm mb-4 text-blue-600">
                    <i class="fas fa-chart-line text-2xl"></i>
                </div>
                <h4 class="text-xl font-bold mb-2">Hiệu Quả Đã Chứng Minh</h4>
                <p class="text-primary2-600 text-sm">Hàng trăm khách hàng đã tăng hiệu quả và mở rộng hoạt động nhờ DentalSO.</p>
            </div>
        </div>
        <div class="text-center mt-8 pt-8 border-t border-gray-200">
            <p class="text-xl text-primary2-700 italic">
                "Trên hết, chúng tôi không chỉ là nhà cung cấp phần mềm, mà còn là đối tác đồng hành lâu dài. Chúng tôi liên tục cải tiến nền tảng dựa trên phản hồi thực tế của bạn."
            </p>
        </div>
    </section>

    <section class="text-center max-w-4xl mx-auto py-10">
        <h2 class="text-3xl font-bold text-blue-900 mb-6">Tầm Nhìn Của Chúng Tôi</h2>
        <p class="text-xl text-primary2-700 italic mb-10">
            "Trở thành tiêu chuẩn toàn cầu trong quản lý phòng nha và labo—trao quyền cho các chuyên gia bằng công cụ thông minh, liền mạch và bảo mật, giúp quy trình hiệu quả hơn và tạo ra những nụ cười bền lâu."
        </p>
        
        <div class="border-t border-gray-200 pt-10">
            <h3 class="text-2xl font-bold mb-4">Sẵn sàng tìm hiểu thêm về DentalSO?</h3>
            <p class="text-primary2-600 mb-8">Liên hệ đội ngũ của chúng tôi hoặc đặt lịch demo để khám phá ngay.</p>
            <a href="<?php echo get_site_url(); ?>/yeu-cau-tu-van" target="_blank" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-full transition-colors duration-300 shadow-lg">
                Liên Hệ Ngay
            </a>
        </div>
    </section>

</div>
@endsection