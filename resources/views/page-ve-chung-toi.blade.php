@extends('layouts.app')

@section('page-header')
    @include('partials.page-header')
@endsection

@section('content')
<div class="bg-primary-50 py-20">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-primary-2 mb-6">Nâng tầm chất lượng Nha khoa</h1>
        <p class=" text-lg max-w-2xl mx-auto leading-relaxed">
            Hiện đại hóa vận hành Labo và phòng khám nha khoa thông qua công nghệ thông minh, lấy người dùng làm trung tâm.
        </p>
    </div>
</div>

<div class="container mx-auto px-4 py-16 space-y-24">

    <section class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <div class="space-y-6">
            <span class="text-blue-600 font-bold uppercase tracking-wider text-sm">Chúng tôi là ai</span>
            <h2 class="text-3xl md:text-4xl font-bold text-primary-2">Kết nối Công nghệ & Nha khoa</h2>
            <div class="prose leading-relaxed space-y-4">
                <p>
                    DentalSO là công ty phần mềm hàng đầu, chuyên hiện đại hóa vận hành Labo và phòng khám nha khoa. Được thành lập với sự am hiểu sâu sắc về độ phức tạp của quy trình nha khoa, sứ mệnh của chúng tôi là giúp các chuyên gia nha khoa tối ưu sản xuất, nâng cao hiệu suất và cải thiện kết quả điều trị — mà không ảnh hưởng đến chất lượng hay bảo mật.
                </p>
                <p>
                    Ngay từ ngày đầu, chúng tôi chọn tập trung hoàn toàn vào ngành nha khoa. Bằng cách kết hợp thực tiễn tốt nhất toàn cầu với kinh nghiệm thực tế trong ngành, chúng tôi đã xây dựng một nền tảng thực sự hiểu những thách thức hàng ngày của Labo và phòng khám.
                </p>
            </div>
            
            <div class="bg-blue-50 border-l-4 border-blue-600 p-4 mt-6">
                <p class="font-semibold text-blue-900">
                    Được hơn <span class="text-2xl font-bold">300+</span> doanh nghiệp tin dùng trên toàn thế giới để nâng cao năng suất vận hành.
                </p>
            </div>
        </div>
        <div class="relative">
            <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                 alt="Công nghệ Nha khoa" 
                 class="rounded-3xl shadow-xl w-full object-cover h-[500px]">
        </div>
    </section>

    <section>
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-blue-600 font-bold uppercase tracking-wider text-sm">Chúng tôi làm gì</span>
            <h2 class="text-3xl font-bold text-primary-2 mt-2 mb-4">Hệ sinh thái toàn diện</h2>
            <p class="text-primary-2">
                Các giải pháp của chúng tôi đơn giản hóa quy trình phức tạp, tăng cường trao đổi thông tin và hỗ trợ ra quyết định dựa trên dữ liệu xuyên suốt vòng đời sản xuất và chăm sóc bệnh nhân.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-xl transition-shadow">
                <div class="w-14 h-14 bg-blue-100 rounded-xl flex items-center justify-center text-blue-600 mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.384-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                </div>
                <h3 class="text-2xl font-bold text-primary-2 mb-4">Quản lý sản xuất cho Labo</h3>
                <p class="text-primary-2 mb-6">
                    Hệ thống quản lý sản xuất chủ lực cung cấp đồng bộ thời gian thực trên toàn bộ xưởng — từ nhận vật tư đến giao phục hình cuối cùng.
                </p>
                <ul class="space-y-3">
                    <li class="flex items-start"><span class="mr-2">✔</span> Theo dõi và truy vết từng công đoạn sản xuất</li>
                    <li class="flex items-start"><span class="mr-2">✔</span> Tối ưu quy trình bằng phân tích dữ liệu</li>
                    <li class="flex items-start"><span class="mr-2">✔</span> Kiểm soát chất lượng tại từng checkpoint</li>
                    <li class="flex items-start"><span class="mr-2">✔</span> Quản lý tồn kho thời gian thực</li>
                </ul>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-xl transition-shadow">
                <div class="w-14 h-14 bg-blue-100 rounded-xl flex items-center justify-center text-blue-600 mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                </div>
                <h3 class="text-2xl font-bold text-primary-2 mb-4">Kết nối Labo và Nha khoa bảo mật</h3>
                <p class="text-primary-2 mb-6">
                    Môi trường đám mây bảo mật, kết nối phòng khám và Labo để cộng tác dễ dàng.
                </p>
                <ul class="space-y-3">
                    <li class="flex items-start"><span class="mr-2">✔</span> Quản lý đơn hàng tập trung</li>
                    <li class="flex items-start"><span class="mr-2">✔</span> Cập nhật tức thì & chia sẻ file số</li>
                    <li class="flex items-start"><span class="mr-2">✔</span> Lưu trữ thông tin bệnh nhân bảo mật</li>
                    <li class="flex items-start"><span class="mr-2">✔</span> Hạ tầng tuân thủ quy định</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="bg-gray-50 rounded-3xl p-8 md:p-12">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-primary-2">Cam kết của chúng tôi</h2>
            <p class="text-primary-2 mt-2">Chúng tôi khác biệt nhờ các giá trị cốt lõi.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center p-4">
                <div class="w-16 h-16 inline-block p-4 bg-white rounded-full shadow-sm mb-4 text-blue-600">
                    <span class="material-symbols-outlined text-2xl align-middle">lightbulb</span> </div>
                <h4 class="text-xl font-bold mb-2">Đổi mới chuyên biệt ngành</h4>
                <p class="text-primary-2 text-sm">Mọi tính năng đều được thiết kế cho quy trình nha khoa, không phải nhu cầu chung chung.</p>
            </div>
            
            <div class="text-center p-4">
                <div class="w-16 h-16 inline-block p-4 bg-white rounded-full shadow-sm mb-4 text-blue-600">
                    <span class="material-symbols-outlined text-2xl align-middle">shield</span>
                </div>
                <h4 class="text-xl font-bold mb-2">Bảo mật cấp doanh nghiệp</h4>
                <p class="text-primary-2 text-sm">Mã hóa SSL, chứng chỉ số và công nghệ RSA để bảo vệ quyền riêng tư bệnh nhân.</p>
            </div>

            <div class="text-center p-4">
                <div class="w-16 h-16 inline-block p-4 bg-white rounded-full shadow-sm mb-4 text-blue-600">
                    <span class="material-symbols-outlined text-2xl align-middle">trending_up</span>
                </div>
                <h4 class="text-xl font-bold mb-2">Tác động thực tế</h4>
                <p class="text-primary-2 text-sm">Hàng trăm khách hàng đã tăng hiệu suất và mở rộng hoạt động thành công.</p>
            </div>
        </div>
        <div class="text-center mt-8 pt-8 border-t border-gray-200">
            <p class="text-xl text-primary-2 italic">
            "Trên hết, chúng tôi không chỉ là nhà cung cấp phần mềm, mà là đối tác dài hạn. Đội ngũ liên tục cải tiến nền tảng dựa trên phản hồi khách hàng, đảm bảo giải pháp phát triển cùng nhu cầu ngành."
        </p>
        </div>
    </div>
    </section>

    <section class="text-center max-w-4xl mx-auto py-10">
        <h2 class="text-3xl font-bold text-blue-900 mb-6">Tầm nhìn</h2>
        <p class="text-xl text-primary-2 italic mb-10">
            "Trở thành tiêu chuẩn toàn cầu cho quản lý Labo và phòng khám nha khoa — trang bị cho chuyên gia những công cụ thông minh, liền mạch và bảo mật để cải thiện quy trình và cuối cùng tạo ra nụ cười đẹp hơn."
        </p>
        
        <div class="border-t border-gray-200 pt-10">
            <h3 class="text-2xl font-bold mb-4">Sẵn sàng tìm hiểu thêm về DentalSO?</h3>
            <p class="text-primary-2 mb-8">Liên hệ đội ngũ hoặc đặt lịch demo để khám phá cách chúng tôi nâng tầm vận hành của bạn.</p>
            <a href="{{ home_url('yeu-cau-tu-van/') }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-full transition-colors duration-300 shadow-lg">
                Liên Hệ Ngay
            </a>
        </div>
    </section>

</div>
@endsection