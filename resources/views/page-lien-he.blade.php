@extends('layouts.app')

@section('content')

{{-- Hero --}}
<section class="apple-section apple-section--sm bg-[#f5f5f7]">
    <div class="apple-container text-center">
        <div class="fade-in-up">
            <h1 class="apple-headline mb-4">Liên Hệ DentalSO</h1>
            <p class="apple-hero-copy">
                Bạn có câu hỏi về phần mềm quản lý Labo hoặc muốn trải nghiệm demo? Hãy điền form bên dưới, đội ngũ chúng tôi sẽ liên hệ bạn sớm nhất.
            </p>
        </div>
    </div>
</section>

{{-- Contact Form + Info --}}
<section class="apple-section bg-white" id="contact">
    <div class="apple-container">
        <div class="grid lg:grid-cols-5 gap-10 lg:gap-16">
            {{-- 1: Text cards (mobile: 1st) --}}
            <div class="lg:col-span-2 order-1 fade-in-up">
                <div class="space-y-6">
                    <div class="apple-mini-card">
                        <span class="material-symbols-outlined text-2xl text-[#0071e3] mb-3">mail</span>
                        <h4 class="apple-mini-title">Tư vấn kinh doanh</h4>
                        <p class="apple-mini-desc">Nhận thông tin sản phẩm và báo giá</p>
                    </div>
                    <div class="apple-mini-card">
                        <span class="material-symbols-outlined text-2xl text-[#30d158] mb-3">calendar_month</span>
                        <h4 class="apple-mini-title">Đăng ký demo</h4>
                        <p class="apple-mini-desc">Đặt lịch demo cá nhân hóa</p>
                    </div>
                    <div class="apple-mini-card">
                        <span class="material-symbols-outlined text-2xl text-[#ff9f0a] mb-3">handshake</span>
                        <h4 class="apple-mini-title">Cơ hội hợp tác</h4>
                        <p class="apple-mini-desc">Khám phá các lựa chọn cộng tác</p>
                    </div>
                    <div class="apple-mini-card">
                        <span class="material-symbols-outlined text-2xl text-[#bf5af2] mb-3">support_agent</span>
                        <h4 class="apple-mini-title">Hỗ trợ kỹ thuật</h4>
                        <p class="apple-mini-desc">Được hỗ trợ về dịch vụ đang sử dụng</p>
                    </div>
                </div>
            </div>

            {{-- 2: Form (mobile: 2nd) --}}
            <div class="lg:col-span-3 order-2 fade-in-up" style="animation-delay: 0.15s;">
                <div class="bg-[#f5f5f7] rounded-3xl p-8 lg:p-10" id="form">
                    <div id="formContactUs">
                        <h2 class="apple-headline-sm mb-2">Gửi yêu cầu</h2>
                        <p class="apple-body mb-8">Chúng tôi sẽ phản hồi bạn trong thời gian sớm nhất.</p>
                        <form action="javascript:a();" method="POST" class="space-y-5" autocomplete="off">
                            <div class="grid sm:grid-cols-2 gap-5">
                                <input type="text" name="name" class="apple-input" id="name" placeholder="Họ tên" required>
                                <input type="text" class="apple-input" name="company" id="company" placeholder="Công ty" required>
                            </div>
                            <div class="grid sm:grid-cols-2 gap-5">
                                <input type="text" name="phone" class="apple-input" id="phone" placeholder="Số điện thoại" required>
                                <input type="email" class="apple-input" name="email" id="email" placeholder="Email">
                            </div>
                            <div class="grid sm:grid-cols-2 gap-5">
                                <select class="apple-input" name="reason" id="reason">
                                    <option selected disabled>Phòng ban</option>
                                    <option value="Tư vấn">Kinh doanh</option>
                                    <option value="Hỗ trợ kỹ thuật">Hỗ trợ kỹ thuật</option>
                                    <option value="Hợp tác">Hợp tác</option>
                                </select>
                                <select class="apple-input" name="product" id="product">
                                    <option selected disabled>Sản phẩm</option>
                                    <option value="Quản lý Labo nha khoa">Quản lý Labo nha khoa</option>
                                    <option value="Quản lý sản xuất (MES)">Quản lý sản xuất (MES)</option>
                                    <option value="Kết nối Labo - Nha khoa">Kết nối Labo - Nha khoa</option>
                                    <option value="Quản lý bảo hành">Quản lý bảo hành</option>
                                </select>
                            </div>
                            <textarea class="apple-input" name="message" placeholder="Nội dung" id="message" rows="4" required></textarea>
                            <div>
                                <div class="loading hidden text-[#0071e3]">Đang gửi...</div>
                                <div class="error-message hidden text-[#ff453a]">Không thể gửi. Vui lòng thử lại.</div>
                            </div>
                            <button class="apple-cta-primary w-full sm:w-auto" type="submit">
                                Gửi yêu cầu
                            </button>
                        </form>
                    </div>
                    <div class="sent-message hidden text-[#30d158] text-xl text-center py-10 font-medium">
                        Gửi thành công! Chúng tôi sẽ liên hệ bạn sớm nhất.
                    </div>
                </div>
            </div>

            {{-- 3: Contact info (mobile: 3rd) --}}
            <div class="lg:col-span-2 order-3 lg:order-3 fade-in-up" style="animation-delay: 0.2s;">
                <div class="space-y-4 text-sm text-[#86868b]">
                    <div class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-base mt-0.5">location_on</span>
                        <div class="flex flex-col gap-1">
                            <span><strong>VN:</strong> {{ get_theme_mod('address') }}</span>
                            @if(get_theme_mod('address_us'))
                            <span><strong>US:</strong> {{ get_theme_mod('address_us') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-base">phone</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/resources/images/vn.webp" class="w-4 h-auto" loading="lazy" alt="VN">
                        <a href="http://zalo.me/0947476000" target="_blank" rel="noopener noreferrer" class="hover:text-[#1d1d1f] transition-colors">{{ get_theme_mod('phone') }}</a>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-base">phone</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/resources/images/us.webp" class="w-4 h-auto" loading="lazy" alt="US">
                        <a href="https://api.whatsapp.com/send/?phone=12062019069&text&type=phone_number&app_absent=0" target="_blank" rel="noopener noreferrer" class="hover:text-[#1d1d1f] transition-colors">{{ get_theme_mod('phoneus') }}</a>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-base">mail</span>
                        <a href="mailto:contact@dentalso.com" class="hover:text-[#1d1d1f] transition-colors">contact@dentalso.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => { if (entry.isIntersecting) { entry.target.classList.add('is-visible'); observer.unobserve(entry.target); }});
    }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });
    document.querySelectorAll('.fade-in-up').forEach(el => observer.observe(el));
});
</script>

@endsection
<script type="text/javascript">
    function a() {
        var name = jQuery.trim(jQuery('#name').val());
        var phone = jQuery.trim(jQuery('#phone').val());
        var reason = jQuery.trim(jQuery('#reason').val());
        var product = jQuery.trim(jQuery('#product').val());
        var company = jQuery.trim(jQuery('#company').val());
        var message = jQuery.trim(jQuery('#message').val());
        var email = jQuery.trim(jQuery('#email').val());
        let data = new Object;

        if (name === '') { alert('Vui lòng nhập họ tên'); return false; } else { data['name'] = name; }
        if (phone === '') { alert('Vui lòng nhập số điện thoại'); return false; } else { data['phone'] = phone; }
        if (email === '') { alert('Vui lòng nhập email'); return false; } else { data['email'] = email; }
        if (message === '') { alert('Vui lòng nhập nội dung'); return false; } else { data['message'] = message; }

        jQuery("#formContactUs :input").prop("disabled", true);

        let note = "";
        const space = "\n";
        if (data.name) { note += "Name: " + data.name + space; };
        if (data.company) { note += "Company: " + data.company + space; };
        if (data.phone) { note += "Phone: " + data.phone + space; };
        if (data.email) { note += "Email: " + data.email + space; data['el'] = data.email.trim().length; };
        if (data.product) { note += "Product: " + data.product + space; };
        data['url'] = jQuery(location).attr('href');
        if (reason) { data['reason'] = reason; }
        if (data.message) { note += "Message:\n" + data.message; };
        data['note'] = note;

        jQuery.ajax({
            type: "POST",
            cache: false,
            url: 'https://sapi.dentalso.com/api/v1/public/callme',
            contentType: "application/json",
            data: JSON.stringify(data),
            dataType: 'json',
            beforeSend: function() {
                jQuery(".loading").show();
                jQuery(".error-message").hide();
                jQuery(".sent-message").hide();
            },
            success: function(res) {
                jQuery(".loading").hide();
                jQuery(".sent-message").show();
                jQuery("#formContactUs").hide();
                jQuery('#formContactUs').trigger("reset");
                document.getElementById("formContactUs").reset();
                jQuery("#formContactUs :input").prop("disabled", false);
            },
            error: function() {
                jQuery(".loading").hide();
                jQuery(".error-message").show();
            }
        });
    }
</script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>