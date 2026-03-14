@extends('layouts.app')

@section('content')

{{-- Hero --}}
<section class="apple-section apple-section--sm bg-[#f5f5f7]">
    <div class="apple-container text-center">
        <div class="fade-in-up">
            <h1 class="apple-headline mb-4">Đăng Ký Demo</h1>
            <p class="apple-hero-copy">
                Trải nghiệm DentalSO trực tiếp. Điền form bên dưới, đội ngũ chúng tôi sẽ sắp lịch hướng dẫn cá nhân hóa cho bạn.
            </p>
        </div>
    </div>
</section>

{{-- Form + Info --}}
<section class="apple-section bg-white" id="demo">
    <div class="apple-container">
        <div class="grid lg:grid-cols-5 gap-10 lg:gap-16">
            {{-- Trái: Giá trị --}}
            <div class="lg:col-span-2 fade-in-up">
                <div class="space-y-6">
                    <div class="apple-mini-card">
                        <span class="material-symbols-outlined text-2xl text-[#0071e3] mb-3">play_circle</span>
                        <h4 class="apple-mini-title">Demo trực tiếp</h4>
                        <p class="apple-mini-desc">Hướng dẫn cá nhân hóa theo nhu cầu Labo hoặc phòng khám của bạn.</p>
                    </div>
                    <div class="apple-mini-card">
                        <span class="material-symbols-outlined text-2xl text-[#30d158] mb-3">question_answer</span>
                        <h4 class="apple-mini-title">Hỏi đáp chuyên gia</h4>
                        <p class="apple-mini-desc">Hỏi bất cứ điều gì về tính năng, báo giá hoặc triển khai với đội tư vấn.</p>
                    </div>
                    <div class="apple-mini-card">
                        <span class="material-symbols-outlined text-2xl text-[#ff9f0a] mb-3">rocket_launch</span>
                        <h4 class="apple-mini-title">Triển khai nhanh</h4>
                        <p class="apple-mini-desc">Bắt đầu trong vài ngày, không phải vài tháng. Đội ngũ hỗ trợ onboarding cho bạn.</p>
                    </div>
                </div>


            </div>

            {{-- Phải: Form --}}
            <div class="lg:col-span-3 fade-in-up" style="animation-delay: 0.15s;">
                <div class="bg-[#f5f5f7] rounded-3xl p-8 lg:p-10" id="form">
                    <div id="formContactUs">
                        <h2 class="apple-headline-sm mb-2">Đặt lịch Demo</h2>
                        <p class="apple-body mb-8">Chúng tôi sẽ phản hồi trong vòng 1 ngày làm việc.</p>
                        <form action="javascript:Submit();" method="POST" class="space-y-5" autocomplete="off">
                            <div class="grid sm:grid-cols-2 gap-5">
                                <input type="text" name="name" class="apple-input" id="name" placeholder="Họ tên" required>
                                <input type="text" class="apple-input" name="company" id="company" placeholder="Công ty / Labo" required>
                            </div>
                            <div class="grid sm:grid-cols-2 gap-5">
                                <input type="text" name="phone" class="apple-input" id="phone" placeholder="Số điện thoại" required>
                                <input type="email" class="apple-input" name="email" id="email" placeholder="Email">
                            </div>
                            <select class="apple-input" name="product" id="product">
                                <option selected disabled>Chọn sản phẩm</option>
                                <option value="DentalSO Platform">DentalSO Platform</option>
                                <option value="DentalSO MES">DentalSO MES</option>
                                <option value="DentalSO Connect">DentalSO Connect</option>
                            </select>
                            <?php
                            $plan = isset($_GET['plan']) ? $_GET['plan'] : '';
                            $payment = isset($_GET['payment']) ? $_GET['payment'] : '';
                            $product = isset($_GET['product']) ? $_GET['product'] : '';
                            ?>
                            <input class="hidden" type="hidden" id="plan" value="<?php echo esc_attr($plan); ?>">
                            <input class="hidden" type="hidden" id="payment" value="<?php echo esc_attr($payment); ?>">
                            <input class="hidden" type="hidden" id="productParam" value="<?php echo esc_attr($product); ?>">
                            <textarea class="apple-input" name="message" placeholder="Mô tả nhu cầu của bạn" id="message" rows="4" required></textarea>
                            <div>
                                <div class="loading hidden text-[#0071e3]">Đang gửi...</div>
                                <div class="error-message hidden text-[#ff453a]">Không thể gửi. Vui lòng thử lại.</div>
                            </div>
                            <button class="apple-cta-primary w-full sm:w-auto" type="submit">
                                Đăng Ký Demo
                            </button>
                        </form>
                    </div>
                    <div class="sent-message hidden text-center py-12">
                        <span class="material-symbols-outlined text-[#30d158] text-5xl mb-4">check_circle</span>
                        <p class="text-xl font-semibold text-[#1d1d1f] mb-2">Đã nhận yêu cầu!</p>
                        <p class="text-[#86868b]">Chúng tôi sẽ liên hệ bạn sớm nhất để sắp lịch demo.</p>
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
    function Submit() {
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
        data['email'] = email;
        if (message === '') { alert('Vui lòng nhập nội dung'); return false; } else { data['message'] = message; }

        jQuery("#formContactUs :input").prop("disabled", true);

        let note = "";
        const space = "\n";
        if (data.name) { note += "Tên: " + data.name + space; };
        if (data.company) { note += "Công ty: " + data.company + space; };
        if (data.phone) { note += "Điện thoại: " + data.phone + space; };
        if (data.email) { note += "Email: " + data.email + space; data['el'] = data.email.trim().length; };
        if (jQuery('#plan').val()) { note += "Plan: " + jQuery('#plan').val() + space; };
        if (jQuery('#payment').val()) { note += "Payment: " + jQuery('#payment').val() + space; };
        if (data.product) { note += "Sản phẩm: " + data.product + space; };
        data['url'] = jQuery(location).attr('href');
        if (reason) { data['reason'] = reason; }
        if (data.message) { note += "Tin nhắn:\n" + data.message; };
        data['note'] = note;

        jQuery.ajax({
            type: "POST",
            cache: false,
            url: 'https://lapi.dentalso.com/api/v1/public/callme',
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