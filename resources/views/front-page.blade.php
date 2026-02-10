@extends('layouts.app')

@section('content')
{{-- <section class="banner flex relative" style="background-color: #bc1823">
    <div class="container text-center text-2xl leading-normal" data-aos="fade-up">
        <img class="bg-center bg-cover bg-white flex justify-center items-center"src="<?php echo get_site_url(); ?>/wp-content/uploads/2025/01/Bai-dang-Instagram-Thong-bao-Lich-Nghi-tet-2025-Cao-cap-Toi-gian-Do-vang.png"/>
    </div>
</section> --}}

<section class="banner flex relative">
    <swiper-container id="homepage-banner" class="w-full h-full">
        <swiper-slide class="bg-center bg-cover bg-white flex justify-center items-center py-20"
            style="background-image:url('<?php echo get_theme_mod('trang_chu.banner.hinhnen_1'); ?>')">
            <div class="bg-black absolute top-0 left-0 right-0 bottom-0 opacity-70"></div>
            <div class="container max-w-screen-xl mx-auto flex z-10 flex-col items-center justify-center gap-10">
                <div class="mx-auto w-full lg:w-3/4 px-5 text-center">
                    <p class="mb-4 text-primary-500 text-center text-4xl lg:text-5xl lg:leading-tight font-bold" data-aos="fade-up">
                        <?php echo get_theme_mod('trang_chu.banner.title1'); ?>
                    </p>
                    <p class="text-xl mb-8 text-white text-center" data-aos="fade-up">
                        <?php echo get_theme_mod('trang_chu.banner.content1'); ?>
                    </p>
                    <a href="<?php echo get_site_url(); ?>/yeu-cau-tu-van" class="flex items-center justify-center group relative h-12 w-48 
                    rounded-3xl bg-primary-500 text-lg shadow mx-auto">
                        <div class="absolute rounded-3xl inset-0 w-0 bg-white transition-all duration-[250ms] ease-out group-hover:w-full"></div>
                        <span class="relative text-white group-hover:text-primary-500">Đăng ký Demo</span>
                    </a>
                </div>
                <div class="w-full flex justify-center" data-aos="fade-up">
                    <img src="<?php echo get_theme_mod('trang_chu.banner.hinh_1'); ?>" class="mx-auto max-h-[500px] object-contain">
                </div>
            </div>
        </swiper-slide>
        <swiper-slide class="bg-center bg-cover bg-white flex justify-center items-center py-20"
            style="background-image:url('<?php echo get_theme_mod('trang_chu.banner.hinhnen_2'); ?>')">
            <div class="bg-black absolute top-0 left-0 right-0 bottom-0 opacity-70"></div>
            <div class="container max-w-screen-xl mx-auto flex z-10 flex-col items-center justify-center gap-10">
                <div class="mx-auto w-full lg:w-3/4 px-5 text-center">
                    <p class="mb-4 text-primary2-500 text-center text-4xl lg:text-5xl lg:leading-tight font-bold" data-aos="fade-up">
                        <?php echo get_theme_mod('trang_chu.banner.title2'); ?>
                    </p>
                    <p class="text-xl mb-8 text-white text-center" data-aos="fade-up">
                        <?php echo get_theme_mod('trang_chu.banner.content2'); ?>
                    </p>
                    <a href="https://dental.vn/" target="_blank" class="flex items-center justify-center group relative h-12 w-48 
                    rounded-3xl bg-primary2-500 text-lg shadow mx-auto">
                        <div class="absolute rounded-3xl inset-0 w-0 bg-white transition-all duration-[250ms] ease-out group-hover:w-full"></div>
                        <span class="relative text-white group-hover:text-primary-500">Tìm hiểu thêm</span>
                    </a>
                </div>
                <div class="w-full flex justify-center" data-aos="fade-up">
                    <img src="<?php echo get_theme_mod('trang_chu.banner.hinh_2'); ?>" class="mx-auto max-h-[500px] object-contain">
                </div>
            </div>
        </swiper-slide>
    </swiper-container>
</section>
<section class="py-16">
    <div class="container text-center">
        <p class="mb-10 text-3xl lg:text-4xl leading-normal" data-aos="fade-up">Ứng dụng quản trị doanh nghiệp toàn diện cho ngành Nha</p>
        <div class="grid lg:grid-cols-3 text-xl">
            <div class="col-lg-4" data-aos="fade-up">
                <span class="material-symbols-outlined align-text-bottom text-primary-500 mr-2">
                    check_circle
                </span>
                Thiết kế chuyên cho ngành Nha
            </div>
            <div class="col-lg-4" data-aos="fade-up">
                <span class="material-symbols-outlined align-text-bottom text-primary-500 mr-2">
                    check_circle
                </span>&nbsp;Đầy đủ chức năng - Dễ sử dụng
            </div>
            <div class="col-lg-4" data-aos="fade-up">
                <span class="material-symbols-outlined align-text-bottom text-primary-500 mr-2">
                    check_circle
                </span>&nbsp;Hơn 300 doanh nghiệp tin dùng
            </div>
        </div>
    </div>
</section>
<section class="container grid lg:grid-cols-2 lg:gap-2 text-center">
    <div class="bg-primary-300 py-16 px-2 lg:px-16 text-white rounded-2xl">
        <a class="text-3xl leading-snug" data-aos="fade-up" href="<?php echo get_site_url(); ?>/quan-ly-dental-lab">
            Quản lý toàn diện Dental Lab
        </a>
        <ul class="list-type-none sub-text-2 pb-10 text-lg">
            <li class="inline-flex items-center" data-aos="fade-up" data-aos-delay="200">
                <a href="<?php echo get_site_url(); ?>/so-hoa-va-toi-uu-quy-trinh-san-xuat/">Số hoá và tối ưu quy trình sản xuất. Tạo môi trường làm việc công bằng</a>
            </li>
            <li class="inline-flex items-center" data-aos="fade-up" data-aos-delay="400">
                <a href="<?php echo get_site_url(); ?>/phoi-hop-lam-viec-va-ket-noi-giua-cac-bo-phan/">Phối hợp làm việc và kết nối giữa các bộ phận. Tăng hiệu quả chung cho Lab</a>
            </li>
            <li class="inline-flex items-center" data-aos="fade-up" data-aos-delay="400">
                Chăm sóc khách hàng và đáp ứng kỳ vọng của khách hàng tốt hơn
            </li>
        </ul>
        <img class="img-fluid mb-4" height="150px" src="<?php echo get_site_url(); ?>/wp-content/uploads/2024/07/dental.png" data-aos="fade-up" />
    </div>
    <a class="bg-primary2-100 py-16 px-2 lg:px-16 rounded-2xl" href="<?php echo get_site_url(); ?>/ket-noi-voi-nha-khoa/">
        <p class="text-3xl leading-loose" data-aos="fade-up">
            Kết nối với nha khoa
        </p>
        <ul class="list-type-none sub-text-2 pb-10 text-lg">
            <li class="inline-flex items-center" data-aos="fade-up" data-aos-delay="200">
                Đặt hàng nhanh, Theo dõi đơn hàng theo thời gian thực
            </li>
            <li data-aos="fade-up" data-aos-delay="400" class="inline-flex items-center">
                Không còn chờ đợi, không còn sai sót, không còn khoảng cách giữa Labo với nha khoa
            </li>
        </ul>
        <img class="img-fluid mb-4" data-aos="fade-up" height="150px" src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/07/clinic.png" />
    </a>
</section>
<section class="relative py-20">
    <div class="container text-center text-2xl leading-normal" data-aos="fade-up">
        Cung cấp môi trường giao tiếp online giữa Nha khoa và Lab
        <br>
        Tiết kiệm thời gian, bảo mật thông tin bệnh nhân
        <br>
        Thông tin & hình ảnh được lưu trữ theo từng đơn hàng
        <img class="mx-auto mt-10" src="<?php echo get_site_url(); ?>/wp-content/uploads/2024/09/giao-tiep-labo-va-nha-khoa.jpg" data-aos="fade-up" />
    </div>
</section>
<section class="py-16 bg-primary3-100">
    <div class="container flex flex-col lg:flex-row items-center">
        <div class="flex-1 md:w-40 text-center" data-aos="fade-up">
            <p class="text-3xl mb-5" data-aos="fade-up">Quản lý Bảo hành</p>
            <p class="text-3xl mb-5" data-aos="fade-up">Tra cứu Bảo hành</p>
            <a href="<?php echo get_site_url(); ?>/quan-ly-dental-lab/tinh-nang/quan-ly-bao-hanh/" class="flex items-center justify-center group relative h-12 w-36 
                    rounded-3xl bg-white shadow mx-auto" data-aos="fade-up">
                <div class="absolute rounded-3xl inset-0 w-0 bg-primary3-500 transition-all duration-[250ms] ease-out group-hover:w-full"></div>
                <span class="relative text-primary3-500 group-hover:text-white">Xem thêm</span>
            </a>
        </div>
        <div class="flex-1 md:w-60 mt-16 lg:mt-0">
            <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/06/laptop-and-phone.png" data-aos="fade-up">
        </div>
    </div>
</section>
<section class="relative py-16">
    <div class="" data-aos="fade-right" data-aos-delay="400"></div>
    <div class="container">
        <div class="grid lg:grid-cols-2">
            <div class="col-lg-8 justify-content-center flex items-center p-10">
                <img class="m-lg-5" src="wp-content/uploads/2023/09/Phan-mem-quan-ly-labo-nha-khoa-DentalSO-Banner.png" data-aos="fade-up" />
            </div>
            <div class="col-lg-4 d-flex flex-column justify-content-center col-span-1">
                <div class="mb-6 border border-primary2-500 position-relative my-3 bg-white rounded-2xl shadow-xl p-6" data-aos="fade-left">
                    <p class="text-2xl pb-4" data-aos="fade-up">
                        Dữ liệu an toàn - Bảo mật
                    </p>
                    <span class="leading-loose" data-aos="fade-up">
                        Chúng tôi áp dụng công nghệ xác thực và mã hoá hiện đại bao gồm Lớp cổng bảo mật (SSL), chứng chỉ kỹ thuật số và mã hóa RSA để bảo mật dữ liệu của bạn.
                    </span>
                </div>
                <div class="border border-primary-500 position-relative my-3 bg-white rounded-2xl shadow-xl p-4" data-aos="fade-left" data-aos-delay="200">
                    <p class="text-2xl pb-4" data-aos="fade-up">
                        Ứng dụng quản trị cho ngành Nha - chỉ cho ngành Nha
                    </p>
                    <span
                        class="leading-loose" data-aos="fade-up">Chúng tôi am hiểu đặc thù quản lý Labo nha khoa và quản lý nha khoa trong và ngoài nước. Các sản phẩm của chúng tôi được thiết kế theo đặc thù của chuyên ngành Nha.
                    </span>
                </div>
                <div class="border border-primary3-500 position-relative my-3 bg-white rounded-2xl shadow-xl p-4" data-aos="fade-left" data-aos-delay="300">
                    <p class="text-2xl pb-4" data-aos="fade-up">
                        Trải nghiệm miễn phí ngay hôm nay!
                    </p>
                    <span
                        class="leading-loose" data-aos="fade-up">Tối ưu hoá quy trình quản lý sản xuất làm tăng hiệu suất, giảm lãng phí và nâng cao chất lượng sản. Trọng tâm của ứng dụng là chuẩn hoá các quy trình, xác định điểm nghẽn trong sản xuất, lập lịch tự động và ghi nhận quá trình sản xuất theo từng công đoạn. Các công cụ theo dõi và thống kê hoạt động sản xuất sẽ giúp bạn liên tục đánh giá và cải tiến quy trình.
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>
<section>

    <div class="2xl:px-[152px] md:px-10 xl:xl:py-[130px] md:py-[80px] px-5 py-10 overflow-x-hidden">
        <div class="flex flex-col items-center">
            <p data-aos="fade-up" class="md:text-48 text-3xl leading-snug text-main-black mb-8 text-center lg:w-[685px] w-full">
                Hơn 300 doanh nghiệp tin dùng
            </p>
        </div>
        <div id="labs-logo" class="container swiper swiper-initialized swiper-horizontal swiper-backface-hidden">
            <div class="swiper-wrapper items-center justify-around flex-wrap md:flex-nowrap">
                <?php
                $args = array(
                    'post_type' => 'lab_logo'
                );
                $query = new WP_Query($args);
                if ($query->have_posts()): $index = 0; ?>
                    <?php while ($query->have_posts()): $query->the_post(); ?>
                        <div class="swiper-slide client-item flex justify-center h-16 py-4" role="group" style="margin-right: 20px;" data-swiper-slide-index="<?php echo $index; ?>">
                            <a href="<?php echo (get_post_custom_values($key = 'link') ? get_post_custom_values($key = 'link')[0] : '#'); ?>" aria-label="partner" target="_blank">
                                <?php the_post_thumbnail(); ?>
                            </a>
                        </div>
                    <?php $index = $query->current_post + 1;
                    endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- <section class="py-16">
    <div class="container flex flex-col lg:flex-row items-center">
        <div class=" text-center" data-aos="fade-up">
            <p class="text-2xl mb-6">Ứng dụng Mobile dành cho Kỹ thuật viên Dental Lab</p>
            <div class="flex flex-wrap justify-center inline-block mx-auto">
                <a href="https://apps.apple.com/vn/app/dentalso/id6447111443" class="mx-1 d-flex flex-column justify-center items-center mx-auto">
                    <img style="width: 100px;height: 100px;" class="my-2 mx-auto"
                        src="wp-content/themes/dentalso/resources/assets/images/qr-appstore.png" />
                    <img class="img-fluid"
                        src="wp-content/themes/dentalso/resources/assets/images/appstore.svg" />
                </a>
                <a href="https://play.google.com/store/apps/details?id=com.dentalso" class="mx-1 d-flex flex-column justify-center items-center mx-auto">
                    <img style="width: 100px;height: 100px;" class="my-2 mx-auto"
                        src="wp-content/themes/dentalso/resources/assets/images/qr-ggplay.png" />
                    <img class="img-fluid"
                        src="wp-content/themes/dentalso/resources/assets/images/googleplay.svg" />
                </a>
                <div>
                </div>
            </div>
        </div>
        <div class="col-span-2 mt-16 lg:mt-0">
            <img src="wp-content/themes/dentalso/resources/assets/images/banner-mobileapp.png" class="img-fluid">
        </div>
    </div>
</section> -->
<section class="container md:p-20 text-center rounded-3xl bg-primary3-50 min-h-96 flex flex-col justify-center mt-6 mb-6" data-aos="fade-up" style="
    background-image: url(https://demo.awaikenthemes.com/seore/wp-content/uploads/2024/07/need-help-bg.svg);
    background-position: 371px -75px;
    background-repeat: no-repeat;
    background-size: auto;">
    <p class="mb-4 text-4xl" data-aos="fade-up">Sẵn sàng để bắt đầu?</p>
    <a href="<?php echo get_site_url(); ?>/yeu-cau-tu-van" class="flex items-center justify-center group relative h-12 w-48 
        rounded-3xl bg-primary-500 text-lg shadow mx-auto mt-10">
        <div class="absolute rounded-3xl inset-0 w-0 bg-white transition-all duration-[250ms] ease-out group-hover:w-full"></div>
        <span class="relative text-white group-hover:text-primary-500">Đăng ký Demo</span>
    </a>
</section>
@endsection