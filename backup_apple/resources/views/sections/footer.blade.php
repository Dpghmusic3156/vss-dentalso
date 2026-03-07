<footer class="apple-footer">
    <div class="apple-footer-inner apple-container">
        {{-- Top: Links grid --}}
        <div class="apple-footer-grid">
            <div class="apple-footer-col">
                <h5 class="apple-footer-heading">Products</h5>
                <ul class="apple-footer-links">
                    <li><a href="{{ get_site_url() }}/quan-ly-dental-lab">Dental Lab Software</a></li>
                    <li><a href="{{ get_site_url() }}/products/dental-lab-mes/">DentalSO MES</a></li>
                    <li><a href="{{ get_site_url() }}/ket-noi-voi-nha-khoa/">DentalSO Connect</a></li>
                </ul>
            </div>
            <div class="apple-footer-col">
                <h5 class="apple-footer-heading">Solutions</h5>
                <ul class="apple-footer-links">
                    <li><a href="{{ get_site_url() }}/solutions/dental-labs/">Dental Labs</a></li>
                    <li><a href="{{ get_site_url() }}/solutions/dental-clinics/">Dental Clinics</a></li>
                    <li><a href="{{ get_site_url() }}/solutions/sales-agents/">Sales Agents</a></li>
                </ul>
            </div>
            <div class="apple-footer-col">
                <h5 class="apple-footer-heading">Company</h5>
                <ul class="apple-footer-links">
                    <li><a href="{{ get_site_url() }}/ve-chung-toi/">About</a></li>
                    <li><a href="{{ get_site_url() }}/blog/">Blog</a></li>
                    <li><a href="{{ get_site_url() }}/lien-he/">Contact</a></li>
                    <li><a href="{{ get_site_url() }}/tuyen-dung/">Careers</a></li>
                </ul>
            </div>
            <div class="apple-footer-col">
                <h5 class="apple-footer-heading">Support</h5>
                <ul class="apple-footer-links">
                    <li><a href="{{ get_site_url() }}/huong-dan/">Guides</a></li>
                    <li><a href="{{ get_site_url() }}/yeu-cau-tu-van">Book a Demo</a></li>
                    <li><a href="https://lab.dentalso.com/" target="_blank">Login</a></li>
                </ul>
            </div>
            <div class="apple-footer-col">
                <h5 class="apple-footer-heading">Contact</h5>
                <ul class="apple-footer-links">
                    <li>
                        <a href="mailto:<?php echo get_theme_mod('email1'); ?>">
                            <?php echo get_theme_mod('email1'); ?>
                        </a>
                    </li>
                    <li class="flex items-center gap-1.5">
                        <img src="<?php echo get_template_directory_uri(); ?>/resources/images/vn.png" class="w-4 h-auto" alt="VN">
                        <a href="tel:0947476000"><?php echo get_theme_mod('phone'); ?></a>
                    </li>
                    <li class="flex items-center gap-1.5">
                        <img src="<?php echo get_template_directory_uri(); ?>/resources/images/us.png" class="w-4 h-auto" alt="US">
                        <a href="tel:+14259545496"><?php echo get_theme_mod('phoneus'); ?></a>
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

        {{-- Divider --}}
        <div class="border-t border-[#d2d2d7]/40 mt-8 pt-6">
            <div class="flex flex-col md:flex-row items-center justify-between gap-4 text-xs text-[#86868b]">
                <div class="flex items-center gap-3">
                    <img alt="DentalSO" class="h-6 object-contain opacity-50" src="<?php echo get_theme_mod('logo_full'); ?>">
                    <span>© {{ date('Y') }} DentalSO. All rights reserved.</span>
                </div>
                <div class="flex items-center gap-4">
                    <a href="https://dentalso.com/en" class="hover:text-[#1d1d1f] transition-colors">English</a>
                    <span>|</span>
                    <a href="https://www.facebook.com/<?php echo get_theme_mod('facebook'); ?>" target="_blank" class="hover:text-[#1d1d1f] transition-colors">Facebook</a>
                    <span>|</span>
                    <a href="https://dental.vn" target="_blank" class="hover:text-[#1d1d1f] transition-colors">dental.vn</a>
                </div>
            </div>
            <p class="text-xs text-[#86868b] mt-3">
                <span class="material-symbols-outlined text-xs mr-1 align-middle">location_on</span>
                Lầu 8, Toà nhà Thuỷ lợi 4 – <?php echo get_theme_mod('address'); ?>
            </p>
        </div>
    </div>
</footer>