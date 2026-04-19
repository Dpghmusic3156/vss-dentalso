<footer class="apple-footer">
    <div class="apple-footer-inner apple-container">
        {{-- Top: Links grid --}}
        <div class="apple-footer-grid">
            <div class="apple-footer-col">
                <h4 class="apple-footer-heading">Sản Phẩm</h4>
                <ul class="apple-footer-links">
                    <li><a href="{{ home_url('san-pham/phan-mem-dental-lab') }}">Quản lý Labo nha khoa</a></li>
                    <li><a href="{{ home_url('san-pham/phan-mem-mes/') }}">Quản lý sản xuất (MES)</a></li>
                    <li><a href="{{ home_url('san-pham/dentalso-ket-noi/') }}">Kết nối Labo và Nha khoa</a></li>
                </ul>
            </div>
            <div class="apple-footer-col">
                <h4 class="apple-footer-heading">Giải Pháp</h4>
                <ul class="apple-footer-links">
                    <li><a href="{{ home_url('giai-phap/labo-vua-va-nho/') }}">Labo vừa và nhỏ</a></li>
                    <li><a href="{{ home_url('giai-phap/labo-gia-cong/') }}">Labo gia công và xuất khẩu</a></li>
                    <li><a href="{{ home_url('giai-phap/labo-lon-mes/') }}">Labo lớn</a></li>
                </ul>
            </div>
            <div class="apple-footer-col">
                <h4 class="apple-footer-heading">Công Ty</h4>
                <ul class="apple-footer-links">
                    <li><a href="{{ home_url('ve-chung-toi/') }}">Về chúng tôi</a></li>
                    <li><a href="{{ home_url('blog/') }}">Blog</a></li>
                    <li><a href="{{ home_url('lien-he/') }}">Liên hệ</a></li>
                </ul>
            </div>
            <div class="apple-footer-col">
                <h4 class="apple-footer-heading">Hỗ Trợ</h4>
                <ul class="apple-footer-links">
                    <li><a href="http://ghuy.me/vi/customer/">Khách hàng tiêu biểu</a></li>
                    <li><a href="{{ home_url('yeu-cau-tu-van') }}">Đăng ký Demo</a></li>
                    <li><a href="https://lab.dentalso.com/" target="_blank" rel="noopener noreferrer">Đăng nhập</a></li>
                </ul>
            </div>
            <div class="apple-footer-col">
                <h4 class="apple-footer-heading">Liên Hệ</h4>
                <ul class="apple-footer-links">
                    <li>
                        <a href="mailto:<?php echo get_theme_mod('email1'); ?>">
                            <?php echo get_theme_mod('email1'); ?>
                        </a>
                    </li>
                    <li class="flex items-center gap-1.5">
                        <img src="<?php echo get_template_directory_uri(); ?>/resources/images/vn.webp" class="w-4 h-auto" loading="lazy" alt="Ngôn ngữ Tiếng Việt">
                        <a href="http://zalo.me/0947476000" target="_blank" rel="noopener noreferrer"><?php echo get_theme_mod('phone'); ?></a>
                    </li>
                    <li class="flex items-center gap-1.5">
                        <img src="<?php echo get_template_directory_uri(); ?>/resources/images/us.webp" class="w-4 h-auto" loading="lazy" alt="Ngôn ngữ Tiếng Anh">
                        <a href="https://api.whatsapp.com/send/?phone=12062019069&text&type=phone_number&app_absent=0" target="_blank" rel="noopener noreferrer"><?php echo get_theme_mod('phoneus'); ?></a>
                    </li>
                </ul>
            </div>
        </div>

        {{-- Office Locations --}}
        <div class="apple-footer-offices">
            <?php if(get_theme_mod('address')): ?>
            <div class="apple-footer-office">
                <span class="apple-footer-office-label"><span class="material-symbols-outlined" style="font-size: 14px;">location_on</span> VP. Việt Nam:</span>
                <div class="apple-footer-office-phone"><a href="http://zalo.me/0947476000"><?php echo get_theme_mod('phone'); ?></a></div>
                <p class="apple-footer-office-address"><?php echo get_theme_mod('address'); ?></p>
            </div>
            <?php endif; ?>
            <?php if(get_theme_mod('address_us')): ?>
            <div class="apple-footer-office">
                <span class="apple-footer-office-label"><span class="material-symbols-outlined" style="font-size: 14px;">location_on</span> Trụ sở Hoa Kỳ:</span>
                <div class="apple-footer-office-phone"><a href="https://api.whatsapp.com/send/?phone=12062019069&text&type=phone_number&app_absent=0" target="_blank" rel="noopener noreferrer"><?php echo get_theme_mod('phoneus'); ?></a></div>
                <p class="apple-footer-office-address"><?php echo get_theme_mod('address_us'); ?></p>
            </div>
            <?php endif; ?>
        </div>

        {{-- Bottom bar: Brand + Apps --}}
        <div class="apple-footer-bottom">
            <div class="apple-footer-brand">
                <img alt="DentalSO" src="<?php echo get_theme_mod('logo_full'); ?>">
                <span>CÔNG TY TNHH PHẦN MỀM TẦM NHÌN</span>
            </div>
            <div class="flex items-center gap-4">
                <div class="flex items-center gap-3">
                    <a href="https://dentalso.com/vi/" class="text-[0.75rem] font-medium text-[#1d1d1f] hover:text-[#0071e3] transition-colors">Tiếng Việt</a>
                    <span class="text-[#d2d2d7]">|</span>
                    <a href="https://dentalso.com/en/" class="text-[0.75rem] text-[#86868b] hover:text-[#1d1d1f] transition-colors">English</a>
                </div>
            </div>
            <div class="apple-footer-apps">
                <a href="https://apps.apple.com/vn/app/dentalso/id6447111443" target="_blank" rel="noopener noreferrer">
                    <img alt="Tải ứng dụng quản lý nha khoa trên App Store" loading="lazy" src="<?php echo get_site_url(); ?>/wp-content/uploads/2025/02/app-store.png">
                </a>
                <a href="https://play.google.com/store/apps/details?id=com.dentalso" target="_blank" rel="noopener noreferrer">
                    <img alt="Tải ứng dụng quản lý nha khoa trên Google Play" loading="lazy" src="<?php echo get_site_url(); ?>/wp-content/uploads/2025/02/google-play.png">
                </a>
            </div>
        </div>

        {{-- Copyright --}}
        <div class="apple-footer-copyright">
            <div class="flex flex-wrap items-center gap-x-1">
                <span>Copyright © {{ date('Y') }} DentalSO. All rights reserved.</span>
                <span class="mx-1">·</span>
                <a href="{{ home_url('chinh-sach-bao-mat/') }}">Chính sách bảo mật</a>
                <span class="mx-1">·</span>
                <a href="{{ home_url('dieu-khoan-su-dung/') }}">Điều khoản sử dụng</a>
                <span class="mx-1">·</span>
                <a href="{{ home_url('chinh-sach-cookies/') }}">Cookies</a>
            </div>
            <div class="apple-footer-contact flex items-center gap-4">
                <a href="https://www.facebook.com/DentalSo.Vietnam" target="_blank" rel="noopener noreferrer" style="color: inherit;" aria-label="Facebook">
                    <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M22.675 0h-21.35C.597 0 0 .597 0 1.325v21.351C0 23.403.597 24 1.325 24h11.495v-9.294h-3.128v-3.622h3.128V8.413c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.597 1.323-1.325v-21.35C24 .597 23.403 0 22.675 0z"/></svg>
                </a>
                <a href="https://www.youtube.com/@dentalSO" target="_blank" rel="noopener noreferrer" style="color: inherit;" aria-label="YouTube">
                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M21.582,6.186c-0.23-0.86-0.908-1.538-1.768-1.768C18.254,4,12,4,12,4s-6.254,0-7.814,0.418 c-0.86,0.23-1.538,0.908-1.768,1.768C2,7.746,2,12,2,12s0,4.254,0.418,5.814c0.23,0.86,0.908,1.538,1.768,1.768 C5.746,20,12,20,12,20s6.254,0,7.814-0.418c0.86-0.23,1.538-0.908,1.768-1.768C22,16.254,22,12,22,12S22,7.746,21.582,6.186z M9.667,14.997V9.003L15.333,12L9.667,14.997z"/></svg>
                </a>
                <a href="mailto:<?php echo get_theme_mod('email1'); ?>" class="flex items-center gap-1.5" style="color: inherit;">
                    <span class="material-symbols-outlined" style="font-size: 16px;">mail</span>
                    <?php echo get_theme_mod('email1'); ?>
                </a>
            </div>
        </div>
    </div>
</footer>

{{-- Floating Zalo Button with hover tooltip --}}
<div id="floating-zalo-wrap" style="position:fixed;bottom:24px;right:24px;z-index:9999;display:flex;align-items:center;gap:0;">
    {{-- Tooltip label --}}
    <span id="zalo-tooltip" style="pointer-events:none;white-space:nowrap;background:#0068FF;color:#fff;font-size:14px;font-weight:600;padding:10px 20px;border-radius:28px;box-shadow:0 4px 12px rgba(0,0,0,.15);opacity:0;transform:translateX(20px);transition:opacity .35s ease,transform .35s cubic-bezier(.16,1,.3,1);margin-right:-8px;">
        Liên hệ ngay
    </span>
    {{-- Button --}}
    <a href="http://zalo.me/0947476000"
       target="_blank"
       rel="noopener noreferrer"
       id="floating-zalo"
       aria-label="Chat trên Zalo"
       style="position:relative;width:56px;height:56px;min-width:56px;border-radius:50%;background:#0068FF;display:flex;align-items:center;justify-content:center;box-shadow:0 4px 12px rgba(0,0,0,.2);transition:transform .3s cubic-bezier(.16,1,.3,1),box-shadow .3s ease;cursor:pointer;text-decoration:none;">
        <img src="https://page.widget.zalo.me/static/images/2.0/Logo.svg" alt="Chat Zalo để nhận tư vấn giải pháp DentalSO" loading="lazy" width="32" height="32" style="pointer-events:none;">
    </a>
</div>
<style>
    #floating-zalo-wrap:hover #zalo-tooltip {
        opacity: 1;
        transform: translateX(0);
        pointer-events: auto;
    }
    #floating-zalo-wrap:hover #floating-zalo {
        transform: scale(1.05);
        box-shadow: 0 6px 20px rgba(0,104,255,.45);
    }
    #floating-zalo::after {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        border-radius: 50%;
        background: #0068FF;
        z-index: -1;
        animation: zalo-pulse 2s ease-out infinite;
    }
    @keyframes zalo-pulse {
        0% { transform: scale(1); opacity: .4; }
        100% { transform: scale(1.6); opacity: 0; }
    }
</style>