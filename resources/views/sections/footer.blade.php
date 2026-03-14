<footer class="apple-footer">
    <div class="apple-footer-inner apple-container">
        {{-- Top: Links grid --}}
        <div class="apple-footer-grid">
            <div class="apple-footer-col">
                <h5 class="apple-footer-heading">Sản Phẩm</h5>
                <ul class="apple-footer-links">
                    <li><a href="{{ home_url('san-pham/phan-mem-dental-lab') }}">Dental Lab Software</a></li>
                    <li><a href="{{ home_url('san-pham/phan-mem-mes/') }}">DentalSO MES</a></li>
                    <li><a href="{{ home_url('san-pham/dentalso-ket-noi/') }}">DentalSO Connect</a></li>
                </ul>
            </div>
            <div class="apple-footer-col">
                <h5 class="apple-footer-heading">Giải Pháp</h5>
                <ul class="apple-footer-links">
                    <li><a href="{{ home_url('giai-phap/labo/') }}">Dành cho Labo</a></li>
                    <li><a href="{{ home_url('giai-phap/phong-kham/') }}">Dành cho Phòng khám</a></li>
                    <li><a href="{{ home_url('giai-phap/sales/') }}">Dành cho Sales</a></li>
                </ul>
            </div>
            <div class="apple-footer-col">
                <h5 class="apple-footer-heading">Công Ty</h5>
                <ul class="apple-footer-links">
                    <li><a href="{{ home_url('ve-chung-toi/') }}">Về chúng tôi</a></li>
                    <li><a href="{{ home_url('blog/') }}">Blog</a></li>
                    <li><a href="{{ home_url('lien-he/') }}">Liên hệ</a></li>
                    <li><a href="{{ home_url('tuyen-dung/') }}">Tuyển dụng</a></li>
                </ul>
            </div>
            <div class="apple-footer-col">
                <h5 class="apple-footer-heading">Hỗ Trợ</h5>
                <ul class="apple-footer-links">
                    <li><a href="{{ home_url('huong-dan/') }}">Hướng dẫn</a></li>
                    <li><a href="{{ home_url('yeu-cau-tu-van') }}">Đăng ký Demo</a></li>
                    <li><a href="https://lab.dentalso.com/" target="_blank">Đăng nhập</a></li>
                </ul>
            </div>
            <div class="apple-footer-col">
                <h5 class="apple-footer-heading">Liên Hệ</h5>
                <ul class="apple-footer-links">
                    <li>
                        <a href="mailto:<?php echo get_theme_mod('email1'); ?>">
                            <?php echo get_theme_mod('email1'); ?>
                        </a>
                    </li>
                    <li class="flex items-center gap-1.5">
                        <img src="<?php echo get_template_directory_uri(); ?>/resources/images/vn.png" class="w-4 h-auto" alt="VN">
                        <a href="tel:<?php echo get_theme_mod('phone'); ?>"><?php echo get_theme_mod('phone'); ?></a>
                    </li>
                    <li class="flex items-center gap-1.5">
                        <img src="<?php echo get_template_directory_uri(); ?>/resources/images/us.png" class="w-4 h-auto" alt="US">
                        <a href="tel:<?php echo get_theme_mod('phoneus'); ?>"><?php echo get_theme_mod('phoneus'); ?></a>
                    </li>
                </ul>
                <div class="flex gap-3 mt-4">
                    <a href="https://apps.apple.com/vn/app/dentalso/id6447111443" target="_blank" class="opacity-60 hover:opacity-100 transition-opacity">
                        <img alt="App Store" class="h-8" src="<?php echo get_site_url(); ?>/wp-content/uploads/2025/02/app-store.png">
                    </a>
                    <a href="https://play.google.com/store/apps/details?id=com.dentalso" target="_blank" class="opacity-60 hover:opacity-100 transition-opacity">
                        <img alt="Google Play" class="h-8" src="<?php echo get_site_url(); ?>/wp-content/uploads/2025/02/google-play.png">
                    </a>
                </div>
            </div>
        </div>

        {{-- Bottom --}}
        <div class="border-t border-[#d2d2d7]/30 mt-8 pt-5 text-[11px] text-[#86868b]">
            {{-- Row 1: Logo + addresses left, language switcher right --}}
            <div class="flex flex-col md:flex-row items-center md:items-start justify-between gap-3 mb-3">
                <div class="flex flex-col items-center md:items-start gap-2 text-center md:text-left">
                    <img alt="DentalSO" class="h-4 object-contain opacity-70" src="<?php echo get_theme_mod('logo_full'); ?>">
                    <div class="space-y-0.5">
                        <?php if(get_theme_mod('address')): ?>
                        <p><span class="material-symbols-outlined text-[11px] align-middle mr-0.5">location_on</span>VN: <?php echo get_theme_mod('address'); ?></p>
                        <?php endif; ?>
                        <?php if(get_theme_mod('address_us')): ?>
                        <p><span class="material-symbols-outlined text-[11px] align-middle mr-0.5">location_on</span>US: <?php echo get_theme_mod('address_us'); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="flex items-center gap-3">
                    <a href="http://ghuy.me/vi/" class="hover:text-[#1d1d1f] transition-colors font-medium text-[#6e6e73]">Tiếng Việt</a>
                    <span class="text-[#d2d2d7]">|</span>
                    <a href="http://ghuy.me/en/" class="hover:text-[#1d1d1f] transition-colors">English</a>
                </div>
            </div>
            {{-- Row 2: Copyright + legal links, right-aligned --}}
            <div class="flex flex-wrap items-center justify-center md:justify-end gap-x-1">
                <span>Copyright © {{ date('Y') }} DentalSO. All rights reserved.</span>
                <span class="mx-1">|</span>
                <a href="{{ home_url('chinh-sach-bao-mat/') }}" class="hover:text-[#1d1d1f] transition-colors">Chính sách bảo mật</a>
                <span class="mx-1">|</span>
                <a href="{{ home_url('dieu-khoan-su-dung/') }}" class="hover:text-[#1d1d1f] transition-colors">Điều khoản sử dụng</a>
                <span class="mx-1">|</span>
                <a href="{{ home_url('chinh-sach-cookies/') }}" class="hover:text-[#1d1d1f] transition-colors">Cookies</a>
            </div>
        </div>
    </div>
</footer>