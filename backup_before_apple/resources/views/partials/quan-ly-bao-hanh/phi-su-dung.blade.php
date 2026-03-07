<div x-data="{ isAnnual: true }" class="container">
    <!-- Pricing toggle -->
    <h1 class="text-5xl py-6 text-center pt-lg-2 pt-xl-4 my-1 my-sm-3 my-lg-4">Phí sử dụng</h1>
    <div class="flex justify-center max-w-[18rem] m-auto mb-8 lg:mb-16">
        <div class="relative flex w-full p-1 bg-white rounded-full">
            <span class="absolute inset-0 m-1 pointer-events-none" aria-hidden="true">
                <span class="absolute inset-0 w-1/2 bg-primary3-600 rounded-full shadow-sm shadow-indigo-950/10 transform transition-transform duration-150 ease-in-out" :class="isAnnual ? 'translate-x-0' : 'translate-x-full'"></span>
            </span>
            <button class="relative flex-1 text-sm font-medium h-8 rounded-full focus-visible:outline-none focus-visible:ring focus-visible:ring-primary-500 transition-colors duration-150 ease-in-out" :class="isAnnual ? 'text-white' : 'text-slate-500'" @click="isAnnual = true" :aria-pressed="isAnnual">
                Theo tháng
            </button>
            <button class="relative flex-1 text-sm font-medium h-8 rounded-full focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300  transition-colors duration-150 ease-in-out" :class="isAnnual ? 'text-slate-500 ' : 'text-white'" @click="isAnnual = false" :aria-pressed="isAnnual">
                Theo năm <span :class="isAnnual ? 'text-red-700 font-bold text-lg' : 'text-slate-200 font-bold text-lg'">-20%</span>
            </button>
        </div>
    </div>

    <div class="max-w-sm mx-auto grid gap-6 lg:grid-cols-3 items-start lg:max-w-none">

        <!-- Pricing tab 1 -->
        <div class="h-full">
            <div class="relative flex flex-col h-full p-6 rounded-2xl bg-white  border border-slate-200  shadow shadow-slate-950/5">
                <div class="mb-5 min-h-40">
                    <div class="text-primary-500  font-semibold mb-4">
                        LINH HOẠT
                    </div>
                    <div class="inline-flex items-baseline mb-2">
                        <span class="text-slate-900 text-4xl" x-text="isAnnual ? '450.000' : '4.500.000'"></span>
                        <span class="text-slate-500 font-medium" x-text="isAnnual ? ' /tháng' : ' /năm'"></span>
                    </div>
                    <div class="">
                        <span class="text-secondary">Phí khởi tạo: </span><span class="text-lg">2.000.000</span><span class="text-secondary"> đ</span>
                    </div>
                    <p class="mb-5">
                        <span class="text-secondary">Quản lý đến </span><span class="text-lg">500 đơn hàng</span><span class="text-secondary"> mỗi tháng</span>
                    </p>
                </div>
                <a x-bind:href="'/vi/yeu-cau-tu-van?plan=BASIC&payment=' + (isAnnual ? 'monthly' : 'annual')" class="flex items-center justify-center group relative h-12 border border-primary-500 w-full
                    rounded-3xl bg-primary-500 shadow mx-auto lg:ml-0">
                    <div class="absolute rounded-3xl inset-0 w-0 bg-white transition-all duration-[250ms] ease-out group-hover:w-full"></div>
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
            <div class="relative flex flex-col h-full p-6 rounded-2xl bg-white  border border-slate-200 shadow shadow-slate-950/5">
                <div class="mb-5 min-h-40">
                    <div class="text-primary-500 font-semibold mb-4">
                        TIÊU CHUẨN
                    </div>
                    <div class="inline-flex items-baseline mb-2">
                        <span class="text-slate-900 text-4xl" x-text="isAnnual ? '2.000.000' : '20.000.000'"></span>
                        <span class="text-slate-500 font-medium" x-text="isAnnual ? ' /tháng' : ' /năm'"></span>
                    </div>
                    <div class="">
                        <span class="text-secondary">Phí khởi tạo: </span><span class="text-lg">4.000.000</span><span class="text-secondary"> đ</span>
                    </div>
                    <p class="mb-5">
                        <span class="text-secondary">Quản lý đến </span><span class="text-lg">1.000 đơn hàng</span><span class="text-secondary"> mỗi tháng</span>
                    </p>
                </div>
                <a x-bind:href="'/vi/yeu-cau-tu-van?plan=STANDARD&payment=' + (isAnnual ? 'monthly' : 'annual')" class="flex items-center justify-center group relative h-12 border border-primary2-500 w-full
                    rounded-3xl bg-primary2-500 shadow mx-auto lg:ml-0">
                    <div class="absolute rounded-3xl inset-0 w-0 bg-white transition-all duration-[250ms] ease-out group-hover:w-full"></div>
                    <span class="relative text-white group-hover:text-primary-500">Đăng ký Demo</span>
                </a>
                <ul class="text-slate-600 space-y-3 mt-6 grow">
                    <li class="flex items-center">
                        <span class="material-symbols-outlined align-sub text-lg text-primary2-500 pr-2">check</span>
                        Mobile app cho kỹ thuật viên
                    </li>
                    <li class="flex items-center">
                        <span class="material-symbols-outlined align-sub text-lg text-primary2-500 pr-2">check</span>
                        Lập kế hoạch sản xuất
                    </li>
                    <li class="flex items-center">
                        <span class="material-symbols-outlined align-sub text-lg text-primary2-500 pr-2">check</span>
                        Quản lý sản xuất, tổng hợp năng suất làm việc của kỹ thuật viên
                    </li>
                     <li class="flex items-center">
                        <span class="material-symbols-outlined align-sub text-lg text-primary2-500 pr-2">check</span>
                        Đánh giá kỹ thuật viên theo điểm
                    </li>
                    <li class="flex items-center">
                        <span class="material-symbols-outlined align-sub text-lg text-primary2-500 pr-2">check</span>
                        Quản lý tài liệu, hình ảnh theo đơn hàng
                    </li>
                    <li class="flex items-center">
                        <span class="material-symbols-outlined align-sub text-lg text-primary2-500 pr-2">check</span>
                        Quản lý kho vật liệu
                    </li>
                    <li class="flex items-center">
                        <span class="material-symbols-outlined align-sub text-lg text-primary2-500 pr-2">check</span>
                        Quản lý thu, chi, dòng tiền
                    </li>
                </ul>
            </div>
        </div>

        <!-- Pricing tab 3 -->
        <div class="h-full">
            <div class="relative flex flex-col h-full p-6 rounded-2xl bg-white border border-slate-200 shadow shadow-slate-950/5">
                <div class="mb-5 min-h-40">
                    <div class="text-primary-500 font-semibold mb-4">
                        NÂNG CAO
                    </div>
                    <div>Phí sử dụng tuỳ thuộc vào nhu cầu của mỗi Labo; sau khi khảo sát nhu cầu và tư vấn giải pháp</div>
                </div>
                <a x-bind:href="'/vi/yeu-cau-tu-van?plan=ENTERPPRISE&payment=' + (isAnnual ? 'monthly' : 'annual')" class="flex items-center justify-center group relative h-12 border border-primary-500 w-full
                    rounded-3xl bg-primary-500 shadow mx-auto lg:ml-0">
                    <div class="absolute rounded-3xl inset-0 w-0 bg-white transition-all duration-[250ms] ease-out group-hover:w-full"></div>
                    <span class="relative text-white group-hover:text-primary3-500">Liên hệ tư vấn</span>
                </a>
                <ul class="text-slate-600 mt-6 space-y-3 grow">
                    <li class="flex items-center">
                        <span class="material-symbols-outlined align-sub text-lg text-secondary">check</span>
                        Quản lý kinh doanh
                    </li>
                    <li class="flex items-center">
                        <span class="material-symbols-outlined align-sub text-lg text-secondary">check</span>
                        Quản lý Workflow
                    </li>
                    <li class="flex items-center">
                        <span class="material-symbols-outlined align-sub text-lg text-secondary">check</span>
                        Ứng dụng dành cho nha khoa tra cứu dữ liệu
                    </li>
                    <li class="flex items-center">
                        <span class="material-symbols-outlined align-sub text-lg text-secondary">check</span>
                        Điều chỉnh ứng dụng theo yêu cầu doanh nghiệp
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<section class="container bg-white mt-8">
    <p class="text-3xl text-center pt-md-1 pt-lg-2">
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
             <tr>
                <th class="border-0 rounded-3 rounded-end-0 text-start py-3 ps-4"><span class="text-body fw-medium">Mobile app cho KTV</span></th>
                <td class="border-0 py-3">-</td>
                <td class="border-0 py-3"><span class="material-symbols-outlined text-primary-500 text-3xl">
                        check_circle
                    </span></td>
                <td class="border-0 rounded-3 rounded-start-0 py-3"><span class="material-symbols-outlined text-primary-500 text-3xl">
                        check_circle
                    </span></td>
            </tr>
            <tr>
                <th class="border-0 rounded-3 rounded-end-0 text-start py-3 ps-4"><span class="text-body fw-medium">
                        Dashboard
                </th>
                <td class="border-0 py-3">
                    <span class="material-symbols-outlined text-primary-500 text-3xl">
                        check_circle
                    </span>
                </td>
                <td class="border-0 py-3"><span class="material-symbols-outlined text-primary-500 text-3xl">
                        check_circle
                    </span></td>
                <td class="border-0 rounded-3 rounded-start-0 py-3"><span class="material-symbols-outlined text-primary-500 text-3xl">
                        check_circle
                    </span></td>
            </tr>
            <tr>
                <th class="border-0 text-start py-3 ps-4"><span class="text-body fw-medium">
                        Quản lý khách hàng
                    </span></th>
                <td class="border-0 py-3"><span class="material-symbols-outlined text-primary-500 text-3xl">
                        check_circle
                    </span></td>
                <td class="border-0 py-3"><span class="material-symbols-outlined text-primary-500 text-3xl">
                        check_circle
                    </span></td>
                <td class="border-0 rounded-3 rounded-start-0 py-3"><span class="material-symbols-outlined text-primary-500 text-3xl">
                        check_circle
                    </span></td>
            </tr>
            <tr>
                <th class="border-0 rounded-3 rounded-end-0 text-start py-3 ps-4"><span class="d-flex align-items-center text-body fw-medium">
                        Hồ sơ chi tiết khách hàng
                    </span></th>
                <td class="border-0 py-3"><span class="material-symbols-outlined text-primary-500 text-3xl">
                        check_circle
                    </span></td>
                <td class="border-0 py-3"><span class="material-symbols-outlined text-primary-500 text-3xl">
                        check_circle
                    </span></td>
                <td class="border-0 py-3"><span class="material-symbols-outlined text-primary-500 text-3xl">
                        check_circle
                    </span></td>
            </tr>
            <tr>
                <th class="border-0  rounded-3 rounded-end-0 text-start py-3 ps-4"><span class="text-body fw-medium">Quản lý Đơn hàng</span></th>
                <td class="border-0  py-3"><span class="material-symbols-outlined text-primary-500 text-3xl">
                        check_circle
                    </span></td>
                <td class="border-0  py-3"><span class="material-symbols-outlined text-primary-500 text-3xl">
                        check_circle
                    </span></td>
                <td class="border-0 rounded-3 rounded-start-0  py-3"><span class="material-symbols-outlined text-primary-500 text-3xl">
                        check_circle
                    </span></td>
            </tr>
            <tr>
                <th class="border-0  rounded-3 rounded-end-0 text-start py-3 ps-4"><span class="text-body fw-medium">Nhật ký trao đổi theo đơn hàng</span></th>
                <td class="border-0  py-3"><span class="material-symbols-outlined text-primary-500 text-3xl">
                        check_circle
                    </span></td>
                <td class="border-0  py-3"><span class="material-symbols-outlined text-primary-500 text-3xl">
                        check_circle
                    </span></td>
                <td class="border-0 rounded-3 rounded-start-0  py-3"><span class="material-symbols-outlined text-primary-500 text-3xl">
                        check_circle
                    </span></td>
            </tr>
            <tr>
                <th class="border-0 rounded-3 rounded-end-0 text-start py-3 ps-4"><span class="text-body fw-medium">Quản lý hoá đơn / công nợ</span></th>
                <td class="border-0 py-3"><span class="material-symbols-outlined text-primary-500 text-3xl">
                        check_circle
                    </span></td>
                <td class="border-0 py-3"><span class="material-symbols-outlined text-primary-500 text-3xl">
                        check_circle
                    </span></td>
                <td class="border-0 rounded-3 rounded-start-0 py-3"><span class="material-symbols-outlined text-primary-500 text-3xl">
                        check_circle
                    </span></td>
            </tr>
            <tr>
                <th class="border-0 rounded-3 rounded-end-0 text-start py-3 ps-4"><span class="text-body fw-medium">Lập kết hoạch sản xuất</span></th>
                <td class="border-0 py-3">-</td>
                <td class="border-0 py-3"><span class="material-symbols-outlined text-primary-500 text-3xl">
                        check_circle
                    </span></td>
                <td class="border-0 rounded-3 rounded-start-0 py-3"><span class="material-symbols-outlined text-primary-500 text-3xl">
                        check_circle
                    </span></td>
            </tr>
            <tr>
                <th class="border-0  rounded-3 rounded-end-0 text-start py-3 ps-4"><span class="text-body fw-medium">Quản lý sản xuất & tổng hợp năng suất làm việc KTV</span></th>
                <td class="border-0  py-3">-</td>
                <td class="border-0  py-3"><span class="material-symbols-outlined text-primary-500 text-3xl">
                        check_circle
                    </span></td>
                <td class="border-0 rounded-3 rounded-start-0  py-3"><span class="material-symbols-outlined text-primary-500 text-3xl">
                        check_circle
                    </span></td>
            </tr>
            <tr>
                <th class="border-0  rounded-3 rounded-end-0 text-start py-3 ps-4"><span class="text-body fw-medium">Đánh giá kỹ thuật viên theo điểm</span></th>
                <td class="border-0  py-3">-</td>
                <td class="border-0  py-3"><span class="material-symbols-outlined text-primary-500 text-3xl">
                        check_circle
                    </span></td>
                <td class="border-0 rounded-3 rounded-start-0  py-3"><span class="material-symbols-outlined text-primary-500 text-3xl">
                        check_circle
                    </span></td>
            </tr>
            <tr>
                <th class="border-0 rounded-3 rounded-end-0 text-start py-3 ps-4"><span class="text-body fw-medium">Quản lý kho vật liệu</span></th>
                <td class="border-0 py-3">-</td>
                <td class="border-0 py-3"><span class="material-symbols-outlined text-primary-500 text-3xl">
                        check_circle
                    </span></td>
                <td class="border-0 rounded-3 rounded-start-0 py-3"><span class="material-symbols-outlined text-primary-500 text-3xl">
                        check_circle
                    </span></td>
            </tr>
            <tr>
                <th class="border-0  rounded-3 rounded-end-0 text-start py-3 ps-4"><span class="text-body fw-medium">Quản lý file</span></th>
                <td class="border-0  py-3">-</td>
                <td class="border-0  py-3"><span class="material-symbols-outlined text-primary-500 text-3xl">
                        check_circle
                    </span></td>
                <td class="border-0 rounded-3 rounded-start-0  py-3"><span class="material-symbols-outlined text-primary-500 text-3xl">
                        check_circle
                    </span></td>
                </tr>
            <tr>
                <th class="border-0  rounded-3 rounded-end-0 text-start py-3 ps-4"><span class="text-body fw-medium">Quản lý nhân viên kinh doanh</span></th>
                <td class="border-0  py-3">-</td>
                <td class="border-0  py-3">-</td>
                <td class="border-0 rounded-3 rounded-start-0  py-3"><span class="material-symbols-outlined text-primary-500 text-3xl">
                        check_circle
                    </span></td>
            </tr>
            <tr>
                <th class="border-0 rounded-3 rounded-end-0 text-start py-3 ps-4"><span class="text-body fw-medium">Quản lý Workflow</span></th>
                <td class="border-0 py-3">-</td>
                <td class="border-0 py-3">-</td>
                <td class="border-0 rounded-3 rounded-start-0 py-3"><span class="material-symbols-outlined text-primary-500 text-3xl">
                        check_circle
                    </span></td>
            </tr>
            <tr>
                <th class="border-0  rounded-3 rounded-end-0 text-start py-3 ps-4"><span class="text-body fw-medium">Ứng dụng dành cho nha khoa tra cứu dữ liệu</span></th>
                <td class="border-0  py-3">-</td>
                <td class="border-0  py-3">-</td>
                <td class="border-0 rounded-3 rounded-start-0  py-3"><span class="material-symbols-outlined text-primary-500 text-3xl">
                        check_circle
                    </span></td>
            </tr>
            <tr>
                <th class="border-0  rounded-3 rounded-end-0 text-start py-3 ps-4"></th>
                <td class="border-0  py-3"></td>
                <td class="border-0  py-3"></td>
                <td class="border-0 rounded-3 rounded-start-0  py-3"><span class="text-dark text-wrap">Điều chỉnh ứng dụng<br>theo yêu cầu doanh nghiệp</span></td>
            </tr>

            <!-- <tr>
                    <td class="border-0 pt-4">&nbsp;</td>
                    <td class="border-0 pt-4">
                        <a class="btn btn-outline-primary mt-3" type="button" href="">Dùng thử </a>
                    </td>
                    <td class="border-0 pt-4">
                        <a class="btn btn-outline-primary mt-3" type="button" href="">Dùng thử</a>
                    </td>
                    <td class="border-0 pt-4">
                        <a class="btn btn-outline-primary mt-3" type="button" href="">Liên hệ</a>
                    </td>
                </tr> -->
        </tbody>
    </table>
</section>
