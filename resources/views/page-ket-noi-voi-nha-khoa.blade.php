@extends('layouts.app')

@section('page-header')
@include('partials.page-header')
@endsection

@section('content')
<section class="py-16">
    <div class="container">
        <p class="text-center text-5xl">
          Đặt hàng nha khoa
        </p>
    </div>
</section>
<section class="py-20 bg-primary-50 aos-init aos-animate">
    <div class="container">
    <div class="md:flex-row flex flex-col-reverse items-center gap-12">
        <div class="flex-1">
            <p class="text-3xl fw-bold mb-6" data-aos="fade-up">
                Tăng tốc quy trình làm việc 
            </p>
            <p class="text-secondary" data-aos="fade-up">
                Labo có thể gửi đơn đặt hàng ngay lập tức, giảm thiểu sự chậm trễ do các phương pháp truyền thống như fax hoặc điện thoại
            </p>
            <p class="text-secondary"   data-aos="fade-up">
                Nha khoa nhận ngay thông tin và bằt đầu xử lý công việc bằng việc nhận mẫu, phân công công việc và cho biết thời gian sẽ hoàn thành
            </p>
        </div>
        <div class="flex-1" data-aos="fade-up">
            <img src="https://dental.vn/wp-content/uploads/2025/01/tangtocquytrinhlamviec-768x512.jpg"
                class="d-block mx-lg-auto img-fluid shadow" width="700" height="500" loading="lazy">
        </div>
    </div>
</div>
</section>
<section class="container py-20 aos-init aos-animate">
    <div class="md:flex-row flex flex-col-reverse items-center gap-12">
        <div class="flex-1" data-aos="fade-up">
            <img src="https://dental.vn/wp-content/uploads/2025/01/caithiendochinhxac-768x768.jpg"
                class="d-block mx-lg-auto img-fluid shadow" width="700" height="500" loading="lazy">
        </div>
        <div class="flex-1">
            <p class="text-3xl fw-bold mb-6"    data-aos="fade-up">
                Cải thiện độ chính xác
            </p>
            <p class="text-secondary"   data-aos="fade-up">
                Biểu mẫu kỹ thuật số giúp giảm thiểu lỗi trong đơn đặt hàng bằng cách cung cấp các trường thông tin có cấu trúc và tránh chữ viết tay khó đọc
            </p>
            <p class="text-secondary"  data-aos="fade-up">
                Các hình ảnh của Labo, Nha khoa upload được chính xác theo từng đơn hàng
            </p>
        </div>
       
    </div>
</section>
<section class="py-20 bg-primary-50 aos-init aos-animate">
    <div class="container">
    <div class="md:flex-row flex flex-col-reverse items-center gap-12">
       
        <div class="flex-1">
            <p class="text-3xl fw-bold mb-6" data-aos="fade-up">
                Cập nhật theo thời gian thực
            </p>
            <p class="text-secondary" data-aos="fade-up">
                Nha khoa có thể cung cấp phản hồi tức thì về trạng thái đơn hàng hoặc yêu cầu làm rõ, tăng cường sự hợp tác
            </p>
        </div>
        <div class="flex-1" data-aos="fade-up">
            <img src="https://dental.vn/wp-content/uploads/2025/01/capnhattheothoigianthuc-768x768.jpg"
                class="d-block mx-lg-auto img-fluid shadow" width="700" height="500" loading="lazy">
        </div>
    </div>
</div>
</section>
<section class="container py-20 aos-init aos-animate">
    <div class="md:flex-row flex flex-col-reverse items-center gap-12">
        <div class="flex-1" data-aos="fade-up">
            <img src="https://dental.vn/wp-content/uploads/2025/01/tienloi-768x768.jpg"
                class="d-block mx-lg-auto img-fluid shadow" width="700" height="500" loading="lazy">
        </div>
        <div class="flex-1">
            <p class="text-3xl fw-bold mb-6"   data-aos="fade-up">
                Tiện lợi
            </p>
            <p class="text-secondary" data-aos="fade-up">
                Cả phòng khám và phòng labo đều có thể quản lý hồ sơ, theo dõi đơn hàng và truy cập dữ liệu mọi lúc, mọi nơi
            </p>
            <p class="text-secondary" data-aos="fade-up">
                Chia sẻ  hình ảnh online chính xác
            </p>
            <p class="text-secondary"   data-aos="fade-up">
                Trao đổi trong quá trình thực  hiện
            </p>
        </div>
    </div>
</section>
<section class="py-20 bg-primary-50 aos-init aos-animate">
    <div class="container">
    <div class="md:flex-row flex flex-col-reverse items-center gap-12">
       
        <div class="flex-1">
            <p class="text-3xl fw-bold mb-6" data-aos="fade-up">
                Giảm gánh nặng hành chính
            </p>
            <p class="text-secondary" data-aos="fade-up">
                Hệ thống tự động hóa giúp tiết kiệm thời gian xử lý giấy tờ thủ công, tạo điều kiện cho nhân viên tập trung vào các nhiệm vụ khác
            </p>
        </div>
        <div class="flex-1" data-aos="fade-up">
            <img src="https://dental.vn/wp-content/uploads/2025/01/giamganhnanghanhchinh-768x768.jpg"
                class="d-block mx-lg-auto img-fluid shadow" width="700" height="500" loading="lazy">
        </div>
    </div>
</div>
</section>
<!-- @while(have_posts()) @php(the_post())
    @includeFirst(['partials.content-page', 'partials.content'])
  @endwhile -->
@endsection