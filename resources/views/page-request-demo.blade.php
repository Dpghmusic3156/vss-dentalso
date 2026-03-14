<!doctype html>
<html @php(language_attributes())>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @php(do_action('get_header'))
    @php(wp_head())
</head>

<body @php(body_class())>
    @php(wp_body_open())

    <a class="absolute top-3 right-3 w-16 h-16" href="/"
        style="background-image: url(<?php echo get_site_url(); ?>/wp-content/uploads/2022/07/dentalso-logo.png);background-repeat: no-repeat;background-size: contain;"></a>
    <div id="formContactUs" class="flex flex-row" style="min-height: 100vh;">
        <div class="flex-1 w-50 flex flex-col px-3 pt-5 self-center">
            <p class="text-5xl mb-6">Request Demo</p>
            <p class="pb-3 mb-3 mb-lg-4">
                Already Have an Account&nbsp;&nbsp;
                <a class="text-primary-500" href='https://lab.dentalso.com'>
                    Login!
                </a>
            </p>
            <form class="contact-form" autocomplete="off" action="javascript:Submit();">
                <input type="text" name="name" class="col-span-2 md:col-span-1" id="name" placeholder="Name">
                <input type="text" class="col-span-2 md:col-span-1" name="company" id="company" placeholder="Business">
                <input type="text" name="phone" class="col-span-2 md:col-span-1" id="phone" placeholder="Phone">
                <input type="email" class="col-span-2 md:col-span-1" name="email" id="email" placeholder="Email">
                <select class="h-100 form-control form-select col-span-2" name="product" id="product">
                    <option selected disabled>Select an Application</option>
                    <option value="Dental Lab">Dental Lab</option>
                </select>
                <textarea class="form-control col-span-2" name="message" placeholder="Message" id="message"></textarea>
                <?php
                $plan = $_GET['plan'];
                $payment = $_GET['payment'];
                $product = $_GET['product'];
                ?>
                <input class="hidden d-none" type="hidden" id="plan" value="<?php echo $plan; ?>">
                <input class="hidden d-none" type="hidden" id="payment" value="<?php echo $payment; ?>">
                <input class="hidden d-none" type="hidden" id="productParam" value="<?php echo $product; ?>">
                <div class="md:col-span-2">
                    <div class="loading hidden text-primary-500">Loading</div>
                    <div class="error-message hidden text-red">Can't send message. Please try again!</div>
                </div>

                <button class="col-span-2 mx-auto flex items-center justify-center group relative h-12 w-48 rounded-3xl bg-primary-500 text-lg shadow"
                    type="submit" data-sitekey="6LffhjIqAAAAAHnrks5E6qdfB7t8HLgiBZYT65UO" data-callback='onSubmit' data-action='submit'>
                    <div class="absolute rounded-3xl inset-0 w-0 bg-white transition-all duration-[250ms] ease-out group-hover:w-full"></div>
                    <span class="relative text-white group-hover:text-primary-500">Submit</span>
                </button>
            </form>
        </div>
        <div class="flex-1 w-50 hidden md:flex items-center collapse md:visible" style="background: #aed8ac;">
            <img class="w-100" src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/04/dentallab-online-banner-1.png" alt="">
        </div>
    </div>
    <div class="flex h-screen items-center justify-center">
        <p class="sent-message hidden text-primary-500 text-3xl text-center">We have received your request and will contact you soon!</p>
    </div>


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

            // Check if empty of not
            if (name === '') {
                alert('Please enter your name');
                return false;
            } else {
                data['name'] = name;
            }

            if (phone === '') {
                alert('Please enter your phone number');
                return false;
            } else {
                data['phone'] = phone;
            }
            data['email'] = email;
            if (message === '') {
                alert('Please enter your message');
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
    <script src="https://www.google.com/recaptcha/enterprise.js?render=6LffhjIqAAAAAHnrks5E6qdfB7t8HLgiBZYT65UO"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</body>

</html>