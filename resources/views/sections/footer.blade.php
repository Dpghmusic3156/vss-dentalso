<footer class="bg-slate-50">
  <div class="container w-full">
    <div class="w-full py-[80px] grid xl:grid-cols-12 md:flex grid-cols-1 gap-8 p2">
      <div class="">
        <img alt="logo" class="max-h-16 mb-6" src="<?php echo get_theme_mod('logo_full'); ?>">
        <p class="text-lg md:text-xl py-2 text-primary-500">
          Dẫn đầu trong chuyển đổi số ngành nha
        </p>
        <div class="flex w-full mb-3">
          <span class="material-symbols-outlined text-secondary mr-2">mail</span>
          <a href="mailto:<?php echo get_theme_mod('email1'); ?>" class="hover:text-primary3-500"><?php echo get_theme_mod('email1'); ?></a><br>
        </div>
        <div class="flex w-full mb-3">
          <span class="material-symbols-outlined text-secondary mr-2">location_on</span> Lầu 8, Toà nhà Thuỷ lợi 4 <br>
         <?php echo get_theme_mod('address'); ?>
        </div>
        <div class="flex w-full mb-3 phone-numbers" id="phone-numbers">
          <span class="material-symbols-outlined text-secondary mr-2" style="vertical-align: sub">phone_in_talk</span>
          <img src="<?php echo get_template_directory_uri(); ?>/resources/images/vn.png" class="self-center">
          &nbsp;
          <a href="tel:0947476000" class="hover:text-primary3-500"><?php echo get_theme_mod('phone'); ?></a>
          &nbsp;-&nbsp;
          <img src="<?php echo get_template_directory_uri(); ?>/resources/images/us.png" class="self-center">
          &nbsp;
          <a class="hover:text-primary3-500" href="tel:0938125612"><?php echo get_theme_mod('phoneus'); ?></a>
        </div>
        <div class="flex w-full mb-3">
          <span class="material-symbols-outlined text-secondary mr-2">thumb_up</span>
          <a target="_blank" href="https://www.facebook.com/<?php echo get_theme_mod('facebook'); ?>" class="hover:text-primary3-500">
            fb.com/<?php echo get_theme_mod('facebook'); ?>
          </a>
        </div>
		  <div class="flex w-full mb-3">
			  <a href="https://apps.apple.com/vn/app/dentalso/id6447111443" class="mr-2">
		   <img alt="logo" class="max-h-16 mb-6" src="<?php echo get_site_url(); ?>/wp-content/uploads/2025/02/app-store.png">
		  </a>
		  <a href="https://play.google.com/store/apps/details?id=com.dentalso">
		   <img alt="logo" class="max-h-16 mb-6" src="<?php echo get_site_url(); ?>/wp-content/uploads/2025/02/google-play.png">
		  </a>
		  </div>
      </div>
      <div class="flex-1"></div>
      {{-- <div class="">
        <p class="text-main-black text-18 font-semibold mb-[30px]">
          Nha khoa
        </p>
        <ul class="flex flex-col space-y-2.5 menu-clinic">
          <?php
          wp_nav_menu(array(
            'theme_location' => 'dentalclinic_navigation',
            'submenu' => 'Tính năng',
            'container' => false,
            'items_wrap' => '%3$s'
          ));
          ?>
        </ul>
      </div> --}}
      <div class="">
        <p class="text-main-black text-18 font-semibold mb-[30px]">
          Lab
        </p>
        <ul class="flex flex-col space-y-2.5 menu-lab">
          <?php
          wp_nav_menu(array(
            'theme_location' => 'dentallab_navigation',
            'submenu' => 'Tính năng',
            'container' => false,
            'items_wrap' => '%3$s'
          ));
          ?>
        </ul>
      </div>
      <div class="flex flex-col">
        <p class="text-main-black text-18 font-semibold mb-[30px]">
          Công ty
        </p>
        <ul class="flex flex-col space-y-2.5">
          <!-- <li class="hover:text-primary3-500 hover:underline common-transition text-paragraph">
            <a href="">Về chúng tôi</a>
          </li>
          <li class="hover:text-primary3-500 hover:underline common-transition text-paragraph">
            <a href="">Tuyển dụng</a>
          </li> -->
          <?php
          wp_nav_menu(array(
            'theme_location' => 'primary_navigation',
            'submenu' => 'Công ty',
            'container' => false,
            'items_wrap' => '%3$s'
          ));
          ?>
          <!-- </ul>
        <div class="flex-1"></div>
        <p class="text-main-black text-18 font-semibold my-[30px]">
          Hỗ trợ
        </p>
        <ul class="flex flex-col space-y-2.5">
          <li class="hover:text-primary3-500 hover:underline common-transition text-paragraph">
            <a href="">Hướng dẫn</a>
          </li>
        </ul> -->
      </div>
    </div>
  </div>
  <div class="footer-one-wrapper w-full">
    <div class="w-full md:h-[65px] h-10">
      <div class="theme-container mx-auto h-full">
        <div class="w-full h-full flex justify-between items-center md:text-base text-xs">
          <span class="text-secondary"></span>
          <div class="relative md:block hidden">
            {{-- <a href="#" aria-label="go top" class="w-[45px] h-[45px] rounded-full border-[3px] border-white flex justify-center items-center bg-blue-sass absolute -top-[55px]">
          <span>
            <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle cx="22.5" cy="22.5" r="21" fill="#4A7DFF" stroke="white" stroke-width="3"></circle>
              <path d="M19 21L23 17M23 17L27 21M23 17V29" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
          </span>`
        </a> --}}
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-ET33DGF485">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-ET33DGF485');
</script>
</footer>