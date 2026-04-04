{{-- Template Name: Phí sử dụng --}}
@extends('layouts.app')

@section('content')

<style>
.ease-apple { transition-timing-function: cubic-bezier(0.25, 1, 0.5, 1); }
.reveal { opacity: 0; transform: translateY(40px); transition: all 0.8s cubic-bezier(0.25, 1, 0.5, 1); }
.reveal.active { opacity: 1; transform: translateY(0); }
</style>

<section class="py-24 bg-white font-sans overflow-hidden">
    <div class="container mx-auto px-4 max-w-7xl">
        {{-- Header --}}
        <div class="text-center mb-16 reveal">
            <h1 class="text-5xl md:text-6xl font-medium text-gray-900 mb-10 tracking-tight">Phí sử dụng</h1>
            
            {{-- Toggle --}}
            <div class="relative inline-flex p-2 bg-gray-50 border border-gray-200 rounded-full shadow-inner" id="pricing-toggle" x-data="{ plan: 'monthly' }">
                <!-- Sliding Pill -->
                <div class="absolute top-2 bottom-2 left-2 w-[calc(50%-8px)] rounded-full bg-primary-3 shadow-[0_4px_12px_rgba(var(--primary-3-rgb),0.4)] transition-transform duration-500 ease-apple z-0"
                     :class="plan === 'yearly' ? 'translate-x-full' : 'translate-x-0'"></div>
                
                <button @click="plan = 'monthly'" data-plan="monthly"
                        class="relative z-10 w-40 sm:w-44 lg:w-48 py-3.5 rounded-full text-base lg:text-lg font-medium transition-colors duration-300"
                        :class="plan === 'monthly' ? 'text-white' : 'text-gray-600 hover:text-gray-900'">
                    Theo tháng
                </button>
                
                <button @click="plan = 'yearly'" data-plan="yearly"
                        class="relative z-10 w-40 sm:w-44 lg:w-48 py-3.5 rounded-full text-base lg:text-lg font-medium transition-colors duration-300"
                        :class="plan === 'yearly' ? 'text-white' : 'text-gray-600 hover:text-gray-900'">
                    Theo năm 
                    <span class="ml-1.5 font-bold transition-colors duration-300"
                          :class="plan === 'yearly' ? 'text-white/90' : 'text-primary-3'">-20%</span>
                </button>
            </div>
        </div>

        {{-- Pricing Grid --}}
        <div class="grid md:grid-cols-3 gap-6 lg:gap-8 w-full max-w-7xl mx-auto">
            {{-- Card 1: Linh Hoạt --}}
            <div class="reveal bg-white rounded-[2.5rem] border border-gray-100 p-8 lg:p-10 shadow-[0_8px_30px_rgb(0,0,0,0.06)] hover:shadow-[0_20px_40px_rgb(0,0,0,0.12)] hover:-translate-y-2 transition-[transform,box-shadow] duration-500 ease-apple flex flex-col h-full" style="transition-delay: 100ms;">
                <div class="mb-8 min-h-[220px] xl:min-h-[210px]">
                    <h3 class="text-primary-1 font-bold text-base tracking-widest uppercase mb-4">LINH HOẠT</h3>
                    <div class="flex items-baseline mb-3 text-black overflow-hidden py-1">
                        <span class="text-3xl lg:text-4xl font-normal tracking-tight transition-[transform,box-shadow] duration-500 ease-apple inline-block" data-price-month="800.000" data-price-year="8.000.000">800.000</span>
                        <span class="text-xl text-black ml-2 transition-[transform,box-shadow] duration-500 ease-apple inline-block" data-period-month="/tháng" data-period-year="/năm">/ tháng</span>
                    </div>
                    <div class="space-y-2 mt-6 text-lg text-black">
                        <p>Phí khởi tạo: <strong class="font-bold">2.000.000 đ</strong></p>
                        <p>Quản lý đến <span class="font-bold">500 đơn hàng</span> mỗi tháng</p>
                    </div>
                </div>
                
                <a href="{{ home_url('yeu-cau-tu-van/') }}" class="block w-full py-4 px-6 text-lg bg-primary-1 hover:opacity-90 text-white text-center rounded-full font-semibold transition-[transform,box-shadow,opacity] duration-300 ease-apple hover:scale-[1.03] hover:shadow-lg active:scale-95 mb-10">Đăng ký Demo</a>
                
                <ul class="space-y-5 text-base lg:text-[1.0625rem] text-gray-700 flex-1">
                    <li class="flex items-start">
                        <span class="material-symbols-outlined text-[#338B4A] text-[1.5rem] mt-0.5 mr-4 shrink-0">check</span>
                        <span class="leading-relaxed">Tổng hợp số liệu và biểu đồ quan trọng</span>
                    </li>
                    <li class="flex items-start">
                        <span class="material-symbols-outlined text-[#338B4A] text-[1.5rem] mt-0.5 mr-4 shrink-0">check</span>
                        <span class="leading-relaxed">Quản lý khách hàng</span>
                    </li>
                    <li class="flex items-start">
                        <span class="material-symbols-outlined text-[#338B4A] text-[1.5rem] mt-0.5 mr-4 shrink-0">check</span>
                        <span class="leading-relaxed">Hồ sơ chi tiết theo dõi từng khách hàng</span>
                    </li>
                    <li class="flex items-start">
                        <span class="material-symbols-outlined text-[#338B4A] text-[1.5rem] mt-0.5 mr-4 shrink-0">check</span>
                        <span class="leading-relaxed">Quản lý đơn hàng, lịch giao hàng</span>
                    </li>
                    <li class="flex items-start">
                        <span class="material-symbols-outlined text-[#338B4A] text-[1.5rem] mt-0.5 mr-4 shrink-0">check</span>
                        <span class="leading-relaxed">Xuất hoá đơn, theo dõi công nợ khách hàng</span>
                    </li>
                    <li class="flex items-start">
                        <span class="material-symbols-outlined text-[#338B4A] text-[1.5rem] mt-0.5 mr-4 shrink-0">check</span>
                        <span class="leading-relaxed">Quản lý bảng giá riêng theo khách hàng</span>
                    </li>
                </ul>
            </div>

            {{-- Card 2: Tiêu Chuẩn --}}
            <div class="reveal bg-white rounded-[2.5rem] border border-gray-100 p-8 lg:p-10 shadow-[0_8px_30px_rgb(0,0,0,0.06)] hover:shadow-[0_20px_40px_rgb(0,0,0,0.12)] hover:-translate-y-2 transition-[transform,box-shadow] duration-500 ease-apple flex flex-col h-full" style="transition-delay: 200ms;">
                <div class="mb-8 min-h-[220px] xl:min-h-[210px]">
                    <h3 class="text-primary-2 font-bold text-base tracking-widest uppercase mb-4">TIÊU CHUẨN</h3>
                    <div class="flex items-baseline mb-3 text-black overflow-hidden py-1">
                        <span class="text-3xl lg:text-4xl font-normal tracking-tight transition-[transform,box-shadow] duration-500 ease-apple inline-block" data-price-month="2.000.000" data-price-year="20.000.000">2.000.000</span>
                        <span class="text-xl text-black ml-2 transition-[transform,box-shadow] duration-500 ease-apple inline-block" data-period-month="/tháng" data-period-year="/năm">/ tháng</span>
                    </div>
                    <div class="space-y-2 mt-6 text-lg text-black">
                        <p>Phí khởi tạo: <strong class="font-bold">4.000.000 đ</strong></p>
                        <p>Quản lý đến <span class="font-bold">1.000 đơn hàng</span> mỗi tháng</p>
                    </div>
                </div>
                
                <a href="{{ home_url('yeu-cau-tu-van/') }}" class="block w-full py-4 px-6 text-lg bg-primary-2 hover:opacity-90 text-white text-center rounded-full font-semibold transition-[transform,box-shadow,opacity] duration-300 ease-apple hover:scale-[1.03] hover:shadow-lg active:scale-95 mb-10">Đăng ký Demo</a>
                
                <ul class="space-y-5 text-base lg:text-[1.0625rem] text-gray-700 flex-1">
                    <li class="flex items-start">
                        <span class="material-symbols-outlined text-[#00ADEF] text-[1.5rem] mt-0.5 mr-4 shrink-0">check</span>
                        <span class="leading-relaxed">Mobile app cho kỹ thuật viên</span>
                    </li>
                    <li class="flex items-start">
                        <span class="material-symbols-outlined text-[#00ADEF] text-[1.5rem] mt-0.5 mr-4 shrink-0">check</span>
                        <span class="leading-relaxed">Lập kế hoạch sản xuất</span>
                    </li>
                    <li class="flex items-start">
                        <span class="material-symbols-outlined text-[#00ADEF] text-[1.5rem] mt-0.5 mr-4 shrink-0">check</span>
                        <span class="leading-relaxed">Quản lý sản xuất, tổng hợp năng suất làm việc của kỹ thuật viên</span>
                    </li>
                    <li class="flex items-start">
                        <span class="material-symbols-outlined text-[#00ADEF] text-[1.5rem] mt-0.5 mr-4 shrink-0">check</span>
                        <span class="leading-relaxed">Đánh giá kỹ thuật viên theo điểm</span>
                    </li>
                    <li class="flex items-start">
                        <span class="material-symbols-outlined text-[#00ADEF] text-[1.5rem] mt-0.5 mr-4 shrink-0">check</span>
                        <span class="leading-relaxed">Quản lý tài liệu, hình ảnh theo đơn hàng</span>
                    </li>
                    <li class="flex items-start">
                        <span class="material-symbols-outlined text-[#00ADEF] text-[1.5rem] mt-0.5 mr-4 shrink-0">check</span>
                        <span class="leading-relaxed">Quản lý kho vật liệu</span>
                    </li>
                    <li class="flex items-start">
                        <span class="material-symbols-outlined text-[#00ADEF] text-[1.5rem] mt-0.5 mr-4 shrink-0">check</span>
                        <span class="leading-relaxed">Quản lý thu, chi, dòng tiền</span>
                    </li>
                </ul>
            </div>

            {{-- Card 3: Nâng Cao --}}
            <div class="reveal bg-white rounded-[2.5rem] border border-gray-100 p-8 lg:p-10 shadow-[0_8px_30px_rgb(0,0,0,0.06)] hover:shadow-[0_20px_40px_rgb(0,0,0,0.12)] hover:-translate-y-2 transition-[transform,box-shadow] duration-500 ease-apple flex flex-col h-full" style="transition-delay: 300ms;">
                <div class="mb-8 min-h-[220px] xl:min-h-[210px]">
                    <h3 class="text-primary-3 font-bold text-base tracking-widest uppercase mb-5">NÂNG CAO</h3>
                    <p class="text-base leading-relaxed text-gray-900 font-medium">
                        Phiên bản Nâng cao là giải pháp <strong class="font-bold">MES (Manufacturing Execution System - Hệ thống điều hành sản xuất)</strong> dành cho các labo nha khoa
                    </p>
                </div>
                
                <a href="{{ home_url('lien-he/') }}" class="block w-full py-4 px-6 text-lg bg-primary-3 hover:opacity-90 text-white text-center rounded-full font-semibold transition-[transform,box-shadow,opacity] duration-300 ease-apple hover:scale-[1.03] hover:shadow-lg active:scale-95 mb-10">Liên hệ tư vấn</a>
                
                <div class="text-base lg:text-[1.0625rem] text-gray-700 leading-relaxed space-y-5 flex-1">
                    <p>Khác với các phiên bản Linh hoạt và Cơ bản, phiên bản Nâng cao được tích hợp các chức năng cao cấp để quản lý sản xuất, vật tư và trang thiết bị chuyên sâu.</p>
                    <p>Hơn nữa, các chức năng quản lý sự cố, chất lượng cũng được tích hợp. Các module chuyên dành cho các doanh nghiệp xuất khẩu như đa tiền tệ, đa ngôn ngữ cũng chỉ có trong phiên bản Enterprise.</p>
                </div>
            </div>
        </div>
    </div>
</section>



    <!-- Compare Features Section -->
    <section class="bg-white" x-data="{ activeModal: null }">
        @php
          $args = [
            'post_type' => 'price',
            'posts_per_page' => -1,
            'meta_key' => 'tt',
            'orderby' => 'meta_value_num',
            'order' => 'ASC'
          ];
          $features = new WP_Query($args);
        @endphp

        <!-- Mobile Layout (Tabs) -->
        <div class="reveal max-w-4xl mx-auto px-4 pt-8 pb-20 block lg:hidden justify-center items-center" x-data="{ tab: 'standard' }">
            <h2 class="text-3xl font-bold text-center mb-10 tracking-tight text-gray-900">Tính năng chi tiết</h2>
            
            <div class="inline-flex rounded-full bg-[#f5f5f7] p-2 mb-10 relative w-full flex justify-center max-w-md mx-auto shadow-inner reveal" style="transition-delay: 100ms;">
                <button @click="tab = 'flexible'" :class="tab === 'flexible' ? 'bg-primary-1 text-white shadow-md' : 'text-gray-600 hover:text-gray-900'" class="flex-1 px-5 py-2.5 font-bold rounded-full transition-colors duration-300 text-sm md:text-base">
                    LINH HOẠT
                </button>
                <button @click="tab = 'standard'" :class="tab === 'standard' ? 'bg-primary-2 text-white shadow-md' : 'text-gray-600 hover:text-gray-900'" class="flex-1 px-5 py-2.5 font-bold rounded-full transition-colors duration-300 text-sm md:text-base">
                    TIÊU CHUẨN
                </button>
                <button @click="tab = 'premium'" :class="tab === 'premium' ? 'bg-primary-3 text-white shadow-md' : 'text-gray-600 hover:text-gray-900'" class="flex-1 px-5 py-2.5 font-bold rounded-full transition-colors duration-300 text-sm md:text-base">
                    NÂNG CAO
                </button>
            </div>

            <!-- Flexible Tab -->
            <div x-show="tab === 'flexible'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" class="bg-white rounded-3xl border border-gray-100 p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)]" style="display: none;">
                <ul class="divide-y divide-gray-50">
                @php
                  if ($features->have_posts()) {
                      while ($features->have_posts()) {
                          $features->the_post();
                          $lh = get_post_meta(get_the_ID(), 'lh', true);
                          $is_active = ($lh == '1');
                          $icon = $is_active ? 'check' : 'close';
                          $icon_color = $is_active ? 'text-[#338B4A]' : 'text-gray-300';
                @endphp
                    <li x-on:click="activeModal = '<?php echo get_the_ID(); ?>'" class="flex justify-between items-center py-2.5 cursor-pointer group">
                        <span class="text-gray-700 text-base font-medium pr-4 leading-snug group-hover:text-gray-900 transition-colors"><?php the_title(); ?></span>
                        <span class="material-symbols-outlined {{ $icon_color }} text-[1.75rem] shrink-0 font-medium"><?php echo $icon; ?></span>
                    </li>
                @php
                      }
                      wp_reset_postdata();
                  }
                @endphp
                </ul>
            </div>

            <!-- Standard Tab -->
            <div x-show="tab === 'standard'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" class="bg-white rounded-3xl border border-gray-100 p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)]" style="display: none;">
                <ul class="divide-y divide-gray-50">
                @php
                  if ($features->have_posts()) {
                      while ($features->have_posts()) {
                          $features->the_post();
                          $tc = get_post_meta(get_the_ID(), 'tc', true);
                          $is_active = ($tc == '1');
                          $icon = $is_active ? 'check' : 'close';
                          $icon_color = $is_active ? 'text-[#00ADEF]' : 'text-gray-300';
                @endphp
                    <li x-on:click="activeModal = '<?php echo get_the_ID(); ?>'" class="flex justify-between items-center py-2.5 cursor-pointer group">
                        <span class="text-gray-700 text-base font-medium pr-4 leading-snug group-hover:text-gray-900 transition-colors"><?php the_title(); ?></span>
                        <span class="material-symbols-outlined {{ $icon_color }} text-[1.75rem] shrink-0 font-medium"><?php echo $icon; ?></span>
                    </li>
                @php
                      }
                      wp_reset_postdata();
                  }
                @endphp
                </ul>
            </div>

            <!-- Premium Tab -->
            <div x-show="tab === 'premium'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" class="bg-white rounded-3xl border border-gray-100 p-6 shadow-[0_8px_30px_rgb(0,0,0,0.04)]" style="display: none;">
                <ul class="divide-y divide-gray-50">
                @php
                  if ($features->have_posts()) {
                      while ($features->have_posts()) {
                          $features->the_post();
                          $nc = get_post_meta(get_the_ID(), 'nc', true);
                          $is_active = ($nc == '1');
                          $icon = $is_active ? 'check' : 'close';
                          $icon_color = $is_active ? 'text-[#ed7b05]' : 'text-gray-300';
                @endphp
                    <li x-on:click="activeModal = '<?php echo get_the_ID(); ?>'" class="flex justify-between items-center py-2.5 cursor-pointer group">
                        <span class="text-gray-700 text-base font-medium pr-4 leading-snug group-hover:text-gray-900 transition-colors"><?php the_title(); ?></span>
                        <span class="material-symbols-outlined {{ $icon_color }} text-[1.75rem] shrink-0 font-medium"><?php echo $icon; ?></span>
                    </li>
                @php
                      }
                      wp_reset_postdata();
                  }
                @endphp
                </ul>
            </div>
        </div>

        <!-- Desktop Layout (Table) -->
        <div class="reveal max-w-7xl mx-auto px-4 pt-8 pb-20 hidden lg:block">
            <h2 class="text-4xl lg:text-5xl font-medium text-center mb-16 tracking-tight text-gray-900">So sánh chi tiết</h2>
            <div class="reveal bg-white rounded-[2.5rem] border border-gray-100 shadow-[0_8px_30px_rgb(0,0,0,0.06)] overflow-hidden" style="transition-delay: 100ms;">
                <table class="w-full text-base">
                    <thead>
                        <tr class="border-b border-gray-100 bg-gray-50/50">
                            <th class="h-16 px-8 text-left align-middle font-bold text-gray-900 w-2/5 text-lg">Tính năng</th>
                            <th class="h-16 px-8 text-center align-middle font-bold text-primary-1 text-lg">LINH HOẠT</th>
                            <th class="h-16 px-8 text-center align-middle font-bold text-primary-2 text-lg">TIÊU CHUẨN</th>
                            <th class="h-16 px-8 text-center align-middle font-bold text-primary-3 text-lg">NÂNG CAO</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                    @php
                        if ($features->have_posts()) {
                            while ($features->have_posts()) {
                                $features->the_post();
                                $lh = get_post_meta(get_the_ID(), 'lh', true) == '1';
                                $tc = get_post_meta(get_the_ID(), 'tc', true) == '1';
                                $nc = get_post_meta(get_the_ID(), 'nc', true) == '1';
                    @endphp
                        <tr class="transition-colors hover:bg-gray-50/80 group">
                            <td class="py-3.5 px-8 align-middle font-medium cursor-pointer text-gray-700 group-hover:text-primary-3 transition-colors duration-300" x-on:click="activeModal = '<?php echo get_the_ID(); ?>'">
                                <div class="flex items-center gap-3">
                                    <span><?php the_title(); ?></span>
                                    <span class="material-symbols-outlined text-gray-300 group-hover:text-primary-3 transition-[transform,box-shadow,opacity,colors] duration-300 text-[22px] group-hover:translate-x-1 group-hover:scale-110 shrink-0">arrow_forward</span>
                                </div>
                            </td>
                            <td class="py-3.5 px-8 align-middle text-center">
                                <span class="material-symbols-outlined <?php echo $lh ? 'text-primary-1' : 'text-gray-300'; ?> text-3xl font-medium"><?php echo $lh ? 'check' : 'close'; ?></span>
                            </td>
                            <td class="py-3.5 px-8 align-middle text-center">
                                <span class="material-symbols-outlined <?php echo $tc ? 'text-primary-2' : 'text-gray-300'; ?> text-3xl font-medium"><?php echo $tc ? 'check' : 'close'; ?></span>
                            </td>
                            <td class="py-3.5 px-8 align-middle text-center">
                                <span class="material-symbols-outlined <?php echo $nc ? 'text-primary-3' : 'text-gray-300'; ?> text-3xl font-medium"><?php echo $nc ? 'check' : 'close'; ?></span>
                            </td>
                        </tr>
                    @php
                            }
                            wp_reset_postdata();
                        }
                    @endphp
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Dynamic Modals -->
        @php
            if ($features->have_posts()) {
                while ($features->have_posts()) {
                    $features->the_post();
        @endphp
        
        <div x-show="activeModal === '<?php echo get_the_ID(); ?>'" 
             class="relative z-50" 
             aria-labelledby="modal-title" 
             role="dialog" 
             aria-modal="true"
             style="display: none;">
             
            <!-- Background overlay -->
            <div x-transition:enter="transition ease-[cubic-bezier(0.25,1,0.5,1)] duration-500"
                 x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100"
                 x-transition:leave="transition ease-in duration-200"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0"
                 class="fixed inset-0 bg-gray-900/60 transition-opacity"></div>
        
            <div class="fixed inset-0 z-[60] w-screen overflow-y-auto" @keydown.window.escape="activeModal = null">
                <div class="flex min-h-full items-end justify-center p-0 sm:p-6 text-center">
                    <div x-show="activeModal === '<?php echo get_the_ID(); ?>'"
                         @click.away="activeModal = null"
                         x-transition:enter="transition ease-[cubic-bezier(0.25,1,0.5,1)] duration-500"
                         x-transition:enter-start="opacity-0 translate-y-full"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         x-transition:leave="transition ease-[cubic-bezier(0.25,1,0.5,1)] duration-400"
                         x-transition:leave-start="opacity-100 translate-y-0"
                         x-transition:leave-end="opacity-0 translate-y-full"
                         class="relative transform overflow-hidden rounded-t-[2.5rem] sm:rounded-3xl bg-white/95 backdrop-blur-xl border-t sm:border border-white/60 text-left shadow-[0_-10px_60px_rgb(0,0,0,0.15)] transition-all w-full sm:w-full sm:max-w-2xl p-6 sm:p-8 pb-12 sm:pb-8">
            
                        <div class="flex flex-col relative w-full items-start gap-4">
                            <button @click="activeModal = null" class="absolute -top-2 -right-2 p-2 text-gray-400 hover:text-gray-900 transition-colors bg-gray-100 hover:bg-gray-200 rounded-full flex items-center justify-center z-10 shrink-0">
                                <span class="material-symbols-outlined text-[20px]">close</span>
                            </button>
                            <div class="w-full min-w-0 pr-10">
                                <h3 class="text-2xl lg:text-3xl font-bold mb-5 text-gray-900 tracking-tight leading-snug"><?php the_title(); ?></h3>
                                <div class="prose sm:prose-lg text-gray-600 prose-ul:pl-5 prose-ul:space-y-3 prose-li:leading-relaxed">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        @php
                }
                wp_reset_postdata();
            }
        @endphp

    </section>

    <!-- Scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const toggleWrapper = document.getElementById('pricing-toggle');
            if(toggleWrapper) {
                const buttons = toggleWrapper.querySelectorAll('button');
                const priceElements = document.querySelectorAll('[data-price-month]');
                const periodElements = document.querySelectorAll('[data-period-month]');
                
                buttons.forEach(button => {
                    button.addEventListener('click', () => {
                        const plan = button.dataset.plan;
                        
                        priceElements.forEach(el => {
                            const newPrice = plan === 'monthly' ? el.dataset.priceMonth : el.dataset.priceYear;
                            el.style.opacity = '0';
                            el.style.transform = 'translateY(15px)';
                            setTimeout(() => {
                                el.textContent = newPrice;
                                el.style.opacity = '1';
                                el.style.transform = 'translateY(0)';
                            }, 250);
                        });

                        periodElements.forEach(el => {
                            const newPeriod = plan === 'monthly' ? el.dataset.periodMonth : el.dataset.periodYear;
                            el.style.opacity = '0';
                            el.style.transform = 'translateX(10px)';
                            setTimeout(() => {
                                el.textContent = newPeriod;
                                el.style.opacity = '1';
                                el.style.transform = 'translateX(0)';
                            }, 250);
                        });
                    });
                });
            }

            // Intersection Observer Setup
            const reveals = document.querySelectorAll('.reveal');
            const revealObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                root: null,
                threshold: 0.1,
                rootMargin: "0px 0px -50px 0px"
            });
            reveals.forEach(reveal => revealObserver.observe(reveal));
        });
    </script>
@endsection
