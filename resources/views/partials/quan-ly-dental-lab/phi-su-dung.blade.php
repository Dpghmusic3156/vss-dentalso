@php
    $prices = new WP_Query([
        'post_type' => 'price',
        'posts_per_page' => -1,
        'orderby' => 'tt',
        'order' => 'ASC',
    ]);
@endphp

<div x-data="{ activeModal: null }" class="relative">



    <div x-data="{ isAnnual: true }" class="container">
        <!-- Pricing toggle -->
        <h1 class="text-5xl py-6 text-center pt-lg-2 pt-xl-4 my-1 my-sm-3 my-lg-4">Phí sử dụng</h1>
        <div class="flex justify-center max-w-[18rem] m-auto mb-8 lg:mb-16">
            <div class="relative flex w-full p-1 bg-white rounded-full">
                <span class="absolute inset-0 m-1 pointer-events-none" aria-hidden="true">
                    <span
                        class="absolute inset-0 w-1/2 bg-primary3-600 rounded-full shadow-sm shadow-indigo-950/10 transform transition-transform duration-150 ease-in-out"
                        :class="isAnnual ? 'translate-x-0' : 'translate-x-full'"></span>
                </span>
                <button
                    class="relative flex-1 text-sm font-medium h-8 rounded-full focus-visible:outline-none focus-visible:ring focus-visible:ring-primary-500 transition-colors duration-150 ease-in-out"
                    :class="isAnnual ? 'text-white' : 'text-slate-500'" @click="isAnnual = true"
                    :aria-pressed="isAnnual">
                    Theo tháng
                </button>
                <button
                    class="relative flex-1 text-sm font-medium h-8 rounded-full focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300  transition-colors duration-150 ease-in-out"
                    :class="isAnnual ? 'text-slate-500 ' : 'text-white'" @click="isAnnual = false"
                    :aria-pressed="isAnnual">
                    Theo năm <span
                        :class="isAnnual ? 'text-red-700 font-bold text-lg' : 'text-slate-200 font-bold text-lg'">-20%</span>
                </button>
            </div>
        </div>

        <div class="max-w-sm mx-auto grid gap-6 lg:grid-cols-3 items-start lg:max-w-none">

            <!-- Pricing tab 1 -->
            <div class="h-full">
                <div
                    class="relative flex flex-col h-full p-6 rounded-2xl bg-white  border border-slate-200  shadow shadow-slate-950/5">
                    <div class="mb-5 min-h-40">
                        <div class="text-primary-500  font-semibold mb-4">
                            LINH HOẠT
                        </div>
                        <div class="inline-flex items-baseline mb-2">
                            <span class="text-slate-900 text-4xl" x-text="isAnnual ? '800.000' : '8.000.000'"></span>
                            <span class="text-slate-500 font-medium" x-text="isAnnual ? ' /tháng' : ' /năm'"></span>
                        </div>
                        <div class="">
                            <span class="text-secondary">Phí khởi tạo: </span><span
                                class="text-lg">2.000.000</span><span class="text-secondary"> đ</span>
                        </div>
                        <p class="mb-5">
                            <span class="text-secondary">Quản lý đến </span><span class="text-lg">500 đơn
                                hàng</span><span class="text-secondary"> mỗi tháng</span>
                        </p>
                    </div>
                    <a x-bind:href="'/vi/yeu-cau-tu-van?plan=BASIC&payment=' + (isAnnual ? 'monthly' : 'annual')"
                        class="flex items-center justify-center group relative h-12 border border-primary-500 w-full
                    rounded-3xl bg-primary-500 shadow mx-auto lg:ml-0">
                        <div
                            class="absolute rounded-3xl inset-0 w-0 bg-white transition-all duration-[250ms] ease-out group-hover:w-full">
                        </div>
                        <span class="relative text-white group-hover:text-primary-500">Đăng ký Demo</span>
                    </a>
                    <ul class="text-slate-600 space-y-3 mt-6 grow">
                        <li class="flex items-center">
                            <span class="material-symbols-outlined align-sub text-lg text-primary-500 pr-2">check</span>
                            <span>Tổng hợp số liệu và biểu đồ quan trọng</span>
                        </li>
                        <li class="flex items-center">
                            <span class="material-symbols-outlined align-sub text-lg text-primary-500 pr-2">check</span>
                            Quản lý khách hàng
                        </li>
                        <li class="flex items-center">
                            <span class="material-symbols-outlined align-sub text-lg text-primary-500 pr-2">check</span>
                            Hồ sơ chi tiết theo dõi từng khách hàng
                        </li>
                        <li class="flex items-center">
                            <span class="material-symbols-outlined align-sub text-lg text-primary-500 pr-2">check</span>
                            Quản lý đơn hàng, lịch giao hàng
                        </li>
                        <li class="flex items-center">
                            <span class="material-symbols-outlined align-sub text-lg text-primary-500 pr-2">check</span>
                            Xuất hoá đơn, theo dõi công nợ khách hàng
                        </li>
                        <li class="flex items-center">
                            <span class="material-symbols-outlined align-sub text-lg text-primary-500 pr-2">check</span>
                            Quản lý bảng giá riêng theo khách hàng
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Pricing tab 2 -->
            <div class="dark h-full">
                <div
                    class="relative flex flex-col h-full p-6 rounded-2xl bg-white  border border-slate-200 shadow shadow-slate-950/5">
                    <div class="mb-5 min-h-40">
                        <div class="text-primary2-500 font-semibold mb-4">
                            TIÊU CHUẨN
                        </div>
                        <div class="inline-flex items-baseline mb-2">
                            <span class="text-slate-900 text-4xl" x-text="isAnnual ? '2.000.000' : '20.000.000'"></span>
                            <span class="text-slate-500 font-medium" x-text="isAnnual ? ' /tháng' : ' /năm'"></span>
                        </div>
                        <div class="">
                            <span class="text-secondary">Phí khởi tạo: </span><span
                                class="text-lg">4.000.000</span><span class="text-secondary"> đ</span>
                        </div>
                        <p class="mb-5">
                            <span class="text-secondary">Quản lý đến </span><span class="text-lg">1.000 đơn
                                hàng</span><span class="text-secondary"> mỗi tháng</span>
                        </p>
                    </div>
                    <a x-bind:href="'/vi/yeu-cau-tu-van?plan=STANDARD&payment=' + (isAnnual ? 'monthly' : 'annual')"
                        class="flex items-center justify-center group relative h-12 border border-primary2-500 w-full
                    rounded-3xl bg-primary2-500 shadow mx-auto lg:ml-0">
                        <div
                            class="absolute rounded-3xl inset-0 w-0 bg-white transition-all duration-[250ms] ease-out group-hover:w-full">
                        </div>
                        <span class="relative text-white group-hover:text-primary2-500">Đăng ký Demo</span>
                    </a>
                    <ul class="text-slate-600 space-y-3 mt-6 grow">
                        <li class="flex items-center">
                            <span
                                class="material-symbols-outlined align-sub text-lg text-primary2-500 pr-2">check</span>
                            Mobile app cho kỹ thuật viên
                        </li>
                        <li class="flex items-center">
                            <span
                                class="material-symbols-outlined align-sub text-lg text-primary2-500 pr-2">check</span>
                            Lập kế hoạch sản xuất
                        </li>
                        <li class="flex items-center">
                            <span
                                class="material-symbols-outlined align-sub text-lg text-primary2-500 pr-2">check</span>
                            Quản lý sản xuất, tổng hợp năng suất làm việc của kỹ thuật viên
                        </li>
                        <li class="flex items-center">
                            <span
                                class="material-symbols-outlined align-sub text-lg text-primary2-500 pr-2">check</span>
                            Đánh giá kỹ thuật viên theo điểm
                        </li>
                        <li class="flex items-center">
                            <span
                                class="material-symbols-outlined align-sub text-lg text-primary2-500 pr-2">check</span>
                            Quản lý tài liệu, hình ảnh theo đơn hàng
                        </li>
                        <li class="flex items-center">
                            <span
                                class="material-symbols-outlined align-sub text-lg text-primary2-500 pr-2">check</span>
                            Quản lý kho vật liệu
                        </li>
                        <li class="flex items-center">
                            <span
                                class="material-symbols-outlined align-sub text-lg text-primary2-500 pr-2">check</span>
                            Quản lý thu, chi, dòng tiền
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Pricing tab 3 -->
            <div class="h-full">
                <div
                    class="relative flex flex-col h-full p-6 rounded-2xl bg-white border border-slate-200 shadow shadow-slate-950/5">
                    <div class="mb-5 min-h-40">
                        <div class="text-primary3-600 font-semibold mb-4">
                            NÂNG CAO
                        </div>
                        <div>Phiên bản Nâng cao là giải pháp <b>MES (Manufacturing Execution System – Hệ thống điều hành
                                sản xuất)</b> dành cho các labo nha khoa</div>
                    </div>
                    <a x-bind:href="'/vi/yeu-cau-tu-van?plan=ENTERPPRISE&payment=' + (isAnnual ? 'monthly' : 'annual')"
                        class="flex items-center justify-center group relative h-12 border border-primary3-500 w-full
                    rounded-3xl bg-primary3-600 shadow mx-auto lg:ml-0">
                        <div
                            class="absolute rounded-3xl inset-0 w-0 bg-white transition-all duration-[250ms] ease-out group-hover:w-full">
                        </div>
                        <span class="relative text-white group-hover:text-primary3-600">Liên hệ tư vấn</span>
                    </a>
                    <ul class="text-slate-600 mt-6 space-y-3 grow">
                        <li class="flex items-center">
                            Khác với các phiên bản Linh hoạt và Cơ bản, phiên bản Nâng cao được tích
                            hợp các chức năng cao cấp để quản lý sản xuất, vật tư và trang thiết bị chuyên sâu. Hơn nữa,
                            các chức năng quản lý sự cố, chất lượng cũng được tích hợp. Các module chuyên dành cho các
                            doanh nghiệp xuất khẩu như đa tiền tệ, đa ngôn ngữ cũng chỉ có trong phiên bản Enterprise.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    {{-- Bảng so sánh tính năng giữa các gói - Mobile --}}
    <div class="max-w-2xl mx-auto px-4 py-12 block sm:hidden justify-center items-center" x-data="{ tab: 'standard' }">
        <h2 class="text-xl font-bold text-center mb-6">Bảng so sánh tính năng giữa các gói</h2>
        {{-- Tabs --}}
        <div class="inline-flex rounded-2xl bg-gray-100 p-1 mb-6 relative flex w-full justify-center">
            <button @click="tab = 'flexible'"
                :class="tab === 'flexible' ? 'bg-primary-500 text-white shadow' : 'text-gray-600 hover:text-black'"
                class="px-4 py-1 font-semibold rounded-2xl transition-colors duration-200">
                LINH HOẠT
            </button>

            <button @click="tab = 'standard'"
                :class="tab === 'standard' ? 'bg-primary2-500 text-white shadow' : 'text-gray-600 hover:text-black'"
                class="px-4 py-1  font-semibold transition-colors duration-200 rounded-2xl">
                TIÊU CHUẨN
            </button>

            <button @click="tab = 'premium'"
                :class="tab === 'premium' ? 'bg-primary3-600 text-white shadow' : 'text-gray-600 hover:text-black'"
                class="px-4 py-1 font-semibold transition-colors duration-200 rounded-2xl">
                NÂNG CAO
            </button>
        </div>

        {{-- Nội dung từng tab --}}
        <div x-show="tab === 'flexible'" x-transition class="duration-200">

            @foreach ($prices->posts as $price)
                @php setup_postdata($price) @endphp
                @php
                    $lh = get_post_meta($price->ID, 'lh', true);
                    $tc = get_post_meta($price->ID, 'tc', true);
                    $nc = get_post_meta($price->ID, 'nc', true);
                    $content = get_post_field('post_content', $price->ID);
                    $image = get_the_post_thumbnail_url($price->ID, 'full');
                @endphp
                <x-modal-bottom modal-id="{{ $price->ID }}" title="{{ get_the_title($price->ID) }}"
                    image="{{ $image }}" items="{{ $content }}" />
                <li x-on:click="activeModal = '{{ $price->ID }}'"
                    class="flex justify-between items-center py-2 cursor-pointer">
                    <span>{{ get_the_title($price->ID) }}</span>
                    @if ($lh == 1)
                        <span class="material-symbols-outlined text-primary-500 text-3xl">check</span>
                    @else
                        <span class="material-symbols-outlined text-gray-500 text-3xl">close</span>
                    @endif
                </li>
            @endforeach
        </div>

        <div x-show="tab === 'standard'" x-transition class="duration-200">

            @foreach ($prices->posts as $price)
                @php setup_postdata($price) @endphp
                @php
                    $lh = get_post_meta($price->ID, 'lh', true);
                    $tc = get_post_meta($price->ID, 'tc', true);
                    $nc = get_post_meta($price->ID, 'nc', true);
                    $content = get_post_field('post_content', $price->ID);
                    $image = get_the_post_thumbnail_url($price->ID, 'full');
                @endphp
                <x-modal-bottom modal-id="{{ $price->ID }}" title="{{ get_the_title($price->ID) }}"
                    image="{{ $image }}" items="{{ $content }}" />
                <li x-on:click="activeModal = '{{ $price->ID }}'"
                    class="flex justify-between items-center py-2 cursor-pointer">
                    <span>{{ get_the_title($price->ID) }}</span>
                    @if ($tc == 1)
                        <span class="material-symbols-outlined text-primary-500 text-3xl">check</span>
                    @else
                        <span class="material-symbols-outlined text-gray-500 text-3xl">close</span>
                    @endif
                </li>
            @endforeach
        </div>

        <div x-show="tab === 'premium'" x-transition class="duration-200">
            @foreach ($prices->posts as $price)
                @php setup_postdata($price) @endphp
                @php
                    $lh = get_post_meta($price->ID, 'lh', true);
                    $tc = get_post_meta($price->ID, 'tc', true);
                    $nc = get_post_meta($price->ID, 'nc', true);
                    $content = get_post_field('post_content', $price->ID);
                    $image = get_the_post_thumbnail_url($price->ID, 'full');
                @endphp
                <x-modal-bottom modal-id="{{ $price->ID }}" title="{{ get_the_title($price->ID) }}"
                    image="{{ $image }}" items="{{ $content }}" />
                <li x-on:click="activeModal = '{{ $price->ID }}'"
                    class="flex justify-between items-center py-2 cursor-pointer">
                    <span>{{ get_the_title($price->ID) }}</span>
                    @if ($nc == 1)
                        <span class="material-symbols-outlined text-primary-500 text-3xl">check</span>
                    @else
                        <span class="material-symbols-outlined text-gray-50 text-3xl">close</span>
                    @endif
                </li>
            @endforeach
        </div>
    </div>
    {{-- Bảng so sánh tính năng giữa các gói - Desktop --}}
    <section class="container bg-white mt-12 mb-12 hidden sm:block" x-data="{ activeModal: null }">
        <p class="text-3xl text-center pt-md-1 pt-lg-2 mb-6">
            Bảng so sánh tính năng giữa các gói
        </p>
        <table class="table text-center text-nowrap w-full">
            <thead>
                <tr>
                    <th class="border-0 py-3">&nbsp;</th>
                    <th class="border-0 py-3">LINH HOẠT</th>
                    <th class="border-0 py-3">TIÊU CHUẨN</th>
                    <th class="border-0 py-3">NÂNG CAO</th>
                </tr>
            </thead>
            <tbody class="[&>*:nth-child(odd)]:bg-cyan-50">
                @foreach ($prices->posts as $price)
                    @php setup_postdata($price) @endphp
                    @php
                        $lh = get_post_meta($price->ID, 'lh', true);
                        $tc = get_post_meta($price->ID, 'tc', true);
                        $nc = get_post_meta($price->ID, 'nc', true);
                        $content = get_post_field('post_content', $price->ID);
                        $image = get_the_post_thumbnail_url($price->ID, 'full');
                    @endphp
                    <x-modal-bottom modal-id="{{ $price->ID }}" title="{{ get_the_title($price->ID) }}"
                        image="{{ $image }}" items="{{ $content }}" />
                    <tr x-on:click="activeModal = '{{ $price->ID }}'"
                        class="hover:!bg-green-100 cursor-pointer transition-colors duration-200">
                        <th class="border-0 rounded-3 rounded-end-0 text-start py-3 ps-4"><span
                                class="text-body fw-medium"><?php
                                // Giả sử $title = get_the_title(); // Lấy title từ post hiện tại
                                $decoded_title = wp_specialchars_decode(get_the_title($price->ID), ENT_QUOTES); // Decode an toàn
                                echo esc_html($decoded_title); // Escape trước khi echo
                                ?></span></th>
                        <td class="border-0 py-3">
                            @if ($lh == 1)
                                <span class="material-symbols-outlined text-primary-500 text-3xl">check_circle</span>
                            @else
                                -
                            @endif
                        </td>
                        <td class="border-0 py-3">
                            @if ($tc == 1)
                                <span class="material-symbols-outlined text-primary-500 text-3xl">check_circle</span>
                            @else
                                -
                            @endif
                        </td>
                        <td class="border-0 rounded-3 rounded-start-0 py-3">
                            @if ($nc == 1)
                                <span class="material-symbols-outlined text-primary-500 text-3xl">check_circle</span>
                            @else
                                -
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
    <section class="bg-gray-100 pt-16 pb-56 text-center">
        <h2 class="text-3xl py-16">Tính năng nâng cao</h2>
        <div class="container grid grid-cols-2 gap-16" data-aos="fade-up">
            <div class="shadow-2xl px-6 pt-14 pb-6 relative bg-white">
                <span
                    class="material-symbols-outlined bg-primary-500 text-white p-4 rounded-full absolute mx-auto left-0 right-0 w-fit border-solid border-8 border-white"
                    style="top: -24px">
                    check
                </span>
                <a href="/vi/quan-ly-dental-lab/tinh-nang-nang-cao/quan-ly-chat-luong/"
                    class="text-2xl mb-6 block text-primary2-500">
                    Quản lý chất lượng
                </a>
                <p class="text-secondary text-xl leading-normal">
                    Đánh giá chất lượng từng sản phẩm
                </p>
                <p class="text-secondary text-xl leading-normal">
                    Ghi nhận lỗi có kèm hình ảnh
                </p>
                <p class="text-secondary text-xl leading-normal">
                    Quy trình xử lý sản phẩm lỗi
                </p>
                <p class="text-secondary text-xl leading-normal">
                    Kiểm tra chất lượng đầu vào - đầu ra
                </p>
                <p class="text-secondary text-xl leading-normal">
                    Tổng hợp báo cáo
                </p>
            </div>
            <div class="shadow-2xl px-6 pt-14 pb-6 relative bg-white">
                <span
                    class="material-symbols-outlined bg-primary-500 text-white p-4 rounded-full absolute mx-auto left-0 right-0 w-fit border-solid border-8 border-white"
                    style="top: -24px">
                    inventory
                </span>
                <a href="/vi/quan-ly-dental-lab/tinh-nang-nang-cao/quan-ly-kho-phu-kien/"
                    class="text-2xl mb-6 block text-primary2-500">
                    Quản lý kho phụ kiện
                </a>
                <p class="text-secondary text-xl leading-normal">
                    Quản lý danh sách phụ kiện mượn
                </p>
                <p class="text-secondary text-xl leading-normal">
                    Tình trạng thu hồi rõ ràng
                </p>
                <p class="text-secondary text-xl leading-normal">
                    Tự động cảnh báo khi quá hạn
                </p>
                <p class="text-secondary text-xl leading-normal">
                    Báo cáo thống kê minh bạch
                </p>
            </div>
        </div>
    </section>
</div>
