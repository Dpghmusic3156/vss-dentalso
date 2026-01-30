<!doctype html>
<html @php(language_attributes())>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @php(do_action('get_header'))
    @php(wp_head())
</head>
<style>
    @media screen and (max-width: 760px) {
  #formContactUsLeft {
    max-width: 100vw!important;
  }
}
</style>
<body @php(body_class())>
    @php(wp_body_open())

    <a class="absolute top-3 right-3 w-16 h-16" href="/"
        style="background-image: url(<?php echo get_site_url(); ?>/wp-content/uploads/2022/07/dentalso-logo.png);background-repeat: no-repeat;background-size: contain;"></a>
    <div id="formContactUs" class="flex flex-row" style="min-height: 100vh">
        <div id="formContactUsLeft" class="flex-1 w-50 flex flex-col px-3 pt-5 self-center" style="padding-left:7vw;padding-right:7vw;max-width: 50vw">
            <p class="text-5xl mb-6">Đăng ký Demo</p>
            <p class="pb-3 mb-3 mb-lg-4">
                Điền vào biểu mẫu dưới đây và chúng tôi sẽ liên hệ với bạn để lên kế hoạch cho một buổi demo online về phần mềm DentalSO.
            </p>
            <form class="contact-form" autocomplete="off" action="javascript:Submit();">
                <input type="text" name="name" class="col-span-2 md:col-span-1" id="name" placeholder="Tên">
                <input type="text" class="col-span-2 md:col-span-1" name="company" id="company" placeholder="Công ty">
                <input type="text" name="phone" class="col-span-2 md:col-span-1" id="phone" placeholder="Điện thoại">
                <input type="email" class="col-span-2 md:col-span-1" name="email" id="email" placeholder="Email">
                <select class="h-100 form-control form-select col-span-2" name="product" id="product">
                    <option selected disabled>Chọn sản phẩm</option>
                    <option value="Dental Lab">Dental Lab</option>
                    <option value="Dental Clinic">Dental Clinic</option>
                    <option value="Dental Warraty">Dental Warraty</option>
                </select>
                <select class="h-100 form-control form-select col-span-2 md:col-span-1" id="date">
                    <option selected disabled>Chọn ngày Demo</option>
                </select>
                <select class="h-100 form-control form-select col-span-2 md:col-span-1" id="time">
                    <option selected disabled>Khung giờ</option>
                    <option>9:00 - 10:00</option>
                    <option>10:00 - 11:00</option>
                    <option disabled>11:00 - 12:00</option> 
                    <option disabled>13:00 - 14:00</option>
                    <option disabled>15:00 - 16:00</option>
                    <option disabled>16:00 - 17:00</option>
                </select>
                <textarea class="form-control col-span-2" name="message" placeholder="Tin nhắn" id="message"></textarea>
                <?php
                $plan = $_GET['plan'];
                $payment = $_GET['payment'];
                $product = $_GET['product'];
                ?>
                <input class="hidden d-none" type="hidden" id="plan" value="<?php echo $plan; ?>">
                <input class="hidden d-none" type="hidden" id="payment" value="<?php echo $payment; ?>">
                <input class="hidden d-none" type="hidden" id="productParam" value="<?php echo $product; ?>">
                <div class="md:col-span-2">
                    <div class="loading hidden text-primary-500">Đang tải</div>
                    <div class="error-message hidden text-red">Không thể gởi tin nhắn. Vui lòng thử lại!</div>
                </div>

                <button class="col-span-2 mx-auto flex items-center justify-center group relative h-12 w-48 rounded-3xl bg-primary-500 text-lg shadow"
                    type="submit" data-sitekey="6LffhjIqAAAAAHnrks5E6qdfB7t8HLgiBZYT65UO" data-callback='onSubmit' data-action='submit'>
                    <div class="absolute rounded-3xl inset-0 w-0 bg-white transition-all duration-[250ms] ease-out group-hover:w-full"></div>
                    <span class="relative text-white group-hover:text-primary-500">Đăng ký</span>
                </button>
            </form>
        </div>
        <div class="flex-1 w-50 hidden md:flex items-center collapse md:visible" style="background: #aed8ac;">
            <img class="w-100" src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/04/dentallab-online-banner-1.png" alt="" style="padding-right:7vw;padding-left:7vw">
        </div>
    </div>
    <div class="flex h-screen items-center justify-center hidden" id="sentMessage">
        <div class="flex h-screen items-center justify-center"> <p class="sent-message text-primary-500 text-3xl text-center">Chúng tôi đã nhận được yêu cầu và sẽ sớm liên hệ lại!</p></div>
    </div>
    <script>
        function addDaysToDropdown(days) {
            const dropdown = document.getElementById('date');
            const today = new Date();

            for (let i = 1; i < days; i++) {
                const date = new Date();
                date.setDate(today.getDate() + i);
                const option = document.createElement('option');
                option.value = date.toISOString().split('T')[0]; // format YYYY-MM-DD
                option.textContent = date.toLocaleDateString('vi-VN', {
                    weekday: 'long', year: 'numeric', month: '2-digit', day: '2-digit'
                });
                dropdown.appendChild(option);
            }
        }

        // Gọi hàm để thêm 4 ngày vào dropdown
        addDaysToDropdown(5);
    </script>
    <script type="text/javascript">
        function Submit() {
            var name = jQuery.trim(jQuery('#name').val());
            var phone = jQuery.trim(jQuery('#phone').val());
            var reason = jQuery.trim(jQuery('#reason').val());
            var product = jQuery.trim(jQuery('#product').val());
            var company = jQuery.trim(jQuery('#company').val());
            var message = jQuery.trim(jQuery('#message').val());
            var email = jQuery.trim(jQuery('#email').val());
            var date = jQuery.trim(jQuery('#date').val());
            var time = jQuery.trim(jQuery('#time').val());
            let data = new Object;

            // Check if empty of not
            if (name === '') {
                alert('Vui lòng nhập tên');
                return false;
            } else {
                data['name'] = name;
            }
            if (company === '') {
                alert('Vui lòng nhập công ty');
                return false;
            } else {
                data['company'] = company;
            }
            if (product === '' || product === null) {
                alert('Vui lòng chọn sản phẩm');
                return false;
            } else {
                data['product'] = product;
            }
            if (date === '') {
                alert('Vui lòng chọn ngày');
                return false;
            } else {
                data['date'] = date;
            }
            if (time === '') {
                alert('Vui lòng chọn giờ');
                return false;
            } else {
                data['time'] = time;
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
            if (data.date) {
                note += "Ngày: " + formatDateToVietnamese(data.date) + space;
            };
            if (data.time) {
                note += "Giờ: " + data.time + space;
            };
            if (jQuery('#plan').val()) {
                note += "Plan: " + jQuery('#plan').val() + space;
            };
            if (jQuery('#payment').val()) {
                note += "Payment: " + jQuery('#payment').val() + space;
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
                    window.location.href = "https://dentalso.com/vi/thank-you/";
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
        function formatDateToVietnamese(dateString) {
    // Chuyển chuỗi ngày thành đối tượng Date
    const date = new Date(dateString);
    
    // Kiểm tra xem ngày có hợp lệ không
    if (isNaN(date.getTime())) {
        return 'Ngày không hợp lệ';
    }

    // Mảng chứa các thứ trong tuần bằng tiếng Việt
    const daysOfWeek = ['Chủ Nhật', 'Thứ Hai', 'Thứ Ba', 'Thứ Tư', 'Thứ Năm', 'Thứ Sáu', 'Thứ Bảy'];

    // Lấy tên thứ, ngày, tháng, năm
    const dayName = daysOfWeek[date.getDay()];
    const day = date.getDate().toString().padStart(2, '0'); // Đảm bảo định dạng hai chữ số
    const month = (date.getMonth() + 1).toString().padStart(2, '0'); // Thêm 1 vì getMonth() trả về giá trị từ 0-11
    const year = date.getFullYear();

    // Kết hợp thành chuỗi theo định dạng "Thứ ... ngày ... tháng ... năm ..."
    return `${dayName}, ngày ${day} tháng ${month} năm ${year}`;
}
    </script>
    
    <script src="https://www.google.com/recaptcha/enterprise.js?render=6LffhjIqAAAAAHnrks5E6qdfB7t8HLgiBZYT65UO"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</body>

</html>