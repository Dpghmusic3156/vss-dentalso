@extends('layouts.app')

@section('content')
<section class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8 lg:py-20" id="contact">
    <!-- <div class="mb-4">
        <div class="mb-6 max-w-3xl text-center sm:text-center md:mx-auto md:mb-12">
            <h2 class="font-heading mb-4 tracking-tight text-gray-900 sm:text-3xl sm:leading-normal">
                Cho dù bạn có câu hỏi, phản hồi hay đề xuất hợp tác, chúng tôi đều mong muốn được nghe ý kiến ​​của bạn.
            </h2>
        </div>
    </div> -->
    <div class="grid md:grid-cols-5 gap-10">
        <div class="bg-primary-50 h-full p-8 md:col-span-2">
            <h2 class="mb-8 text-2xl">Liên hệ với chúng tôi</h2>
            <ul class="mb-6 md:mb-0">
                <li class="flex border-b border-secondary mb-8">
                    <div class="flex h-10 w-10 items-center justify-center rounded bg-primary-500 text-gray-50">
                        <span class="material-symbols-outlined">location_on</span>
                    </div>
                    <div class="ml-4 mb-4">
                        <p class="text-gray-900">215/167 Nguyễn Xí, Phường 13,</p>
                        <p class="text-gray-900">Bình Thạnh, Thành phố Hồ Chí Minh</p>
                    </div>
                </li>
                <li class="flex border-b border-secondary mb-8">
                    <div class="flex h-10 w-10 items-center justify-center rounded bg-primary-500 text-gray-50">
                        <span class="material-symbols-outlined">phone_in_talk</span>
                    </div>
                    <div class="ml-4 mb-4">
                        <p class="text-gray-900">Mobile: 0947 476 000</p>
                        <p class="text-gray-900">Mobile: 0947 476 000</p>
                    </div>
                </li>
                <li class="flex border-b border-secondary mb-8">
                    <div class="flex h-10 w-10 items-center justify-center rounded bg-primary-500 text-gray-50">
                        <span class="material-symbols-outlined">mail</span>
                    </div>
                    <div class="ml-4 mb-4">
                        <p class="text-gray-900">contact@dentalso.com</p>
                        <p class="text-gray-900">support@dentalso.com</p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="card h-fit max-w-6xl px-5 md:p-8 md:col-span-3" id="form">
            <div id="formContactUs">
                <h2 class="mb-4 text-2xl">Vui lòng để lại thông tin</h2>
                <p class="pb-4">Chúng tôi sẽ liên hệ lại ngay khi nhận được yêu cầu</p>
                <form action="javascript:a();" method="POST"
                    class="contact-form grid grid-cols-2" autocomplete="off">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Tên" required>
                    <input type="text" class="form-control" name="company" id="company" placeholder="Công ty" required>
                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Điện thoại" required>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" required >
                    <div class="form-group">
                        <select class="h-100 form-control form-select" name="reason" id="reason">
                            <option selected disabled>Bộ phận liên hệ</option>
                            <option value="Tư vấn">Tư vấn</option>
                            <option value="Hỗ trợ kỹ thuật">Hỗ trợ kỹ thuật</option>
                            <option value="Hợp tác">Hợp tác</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="h-100 form-control form-select" name="product" id="product">
                            <option selected disabled>Chọn sản phẩm</option>
                            <option value="Dental Lab">Dental Lab</option>
                            <option value="Dental Clinic">Dental Clinic</option>
                        </select>
                    </div>
                    <div class="md:col-span-2">
                        <textarea class="form-control" name="message" placeholder="Tin nhắn" id="message" required></textarea>
                    </div>
                    <div class="md:col-span-2">
                        <div class="loading hidden text-primary-500">Đang tải</div>
                        <div class="error-message hidden text-red">Không thể gởi tin nhắn. Vui lòng thử lại!</div>
                    </div>
                    <button class="flex items-center justify-center group relative h-12 w-48 
                    rounded-3xl bg-primary-500 text-lg shadow mx-auto lg:ml-0"
                        type="submit">
                        <div class="absolute rounded-3xl inset-0 w-0 bg-white transition-all duration-[250ms] ease-out group-hover:w-full"></div>
                        <span class="relative text-white group-hover:text-primary-500">Gửi</span>
                    </button>
                </form>
            </div>
            <div class="sent-message hidden text-primary-500 text-3xl text-center">Tin nhắn đã được gửi. Chúng tôi sẽ sớm liên hệ lại!</div>
        </div>
    </div>
</section>

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


        // Check if empty of not
        if (name === '') {
            alert('Vui lòng nhập tên');
            return false;
        } else {
            data['name'] = name;
        }

        if (phone === '') {
            alert('Vui lòng nhập số điện thoại');
            return false;
        } else {
            data['phone'] = phone;
        }
        if (email === '') {
            alert('Vui lòng nhập email');
            return false;
        } else {
            data['email'] = email;
        }
        if (message === '') {
            alert('Vui lòng nhập nhập tin nhắn');
            return false;
        } else {
            data['message'] = message;
        }

        // var v = grecaptcha.getResponse();
        // if (v.length == 0) {
        //     jQuery("#captcha").show();
        //     return false;
        // } else {
        //     jQuery("#captcha").hide();
        // }

        jQuery("#formContactUs :input").prop("disabled", true);

        let note = "";
        const space = "\n";

        if (data.name) {
            note += "Tên: " + data.name + space;
        };

        if (data.company) {
            note += "Công ty: " + data.company + space;
        };

        if (data.phone) {
            note += "Điện thoại: " + data.phone + space;
        };

        if (data.email) {
            note += "Email: " + data.email + space;
            data['el'] = data.email.trim().length;
        };
        if (data.product) {
            note += "Sản phẩm: " + data.product + space;
        };
        data['url'] = jQuery(location).attr('href');

        if (reason) {
            data['reason'] = reason;
        }
        if (data.message) {
            note += "Tin nhắn:" + data.message;
        };

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