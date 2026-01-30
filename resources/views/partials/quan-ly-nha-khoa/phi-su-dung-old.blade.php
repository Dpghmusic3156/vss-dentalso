<style>
    input:checked {
        background-color: #22c55e;
    }

    input:checked~span:last-child {
        --tw-translate-x: 1.75rem;
    }
</style>
<section class="bg-primary-50 py-16" data-aos="fade-up">
    <div class="container">
        <p class="text-center text-5xl">
            Yêu cầu ước tính phí sử dụng
        </p>
    </div>
</section>

<section class="" data-aos="fade-up">
    <div class="container">
        <table cellspacing="15" border="1" cellpadding="15" class="mx-auto">
            <tr class="text-center">
                <th style="min-width: 50px;"> </th>
                <th class="w-100">Vui lòng chọn chức năng</th>
                <th style="min-width: 100px;">Chọn</th>
            </tr>
            <tr class="text-xl">
                <td class="text-center">1</td>
                <td>
                    Quản lý lịch hẹn
                </td>
                <td>
                    <label class="flex items-center relative w-max cursor-pointer select-none">
                        <input type="checkbox" class="appearance-none transition-colors cursor-pointer w-14 h-7 rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-black focus:ring-blue-500 bg-red-500" />
                        <span class="absolute font-medium text-xs uppercase right-1 text-white"> OFF </span>
                        <span class="absolute font-medium text-xs uppercase right-8 text-white"> ON </span>
                        <span class="w-7 h-7 right-7 absolute rounded-full transform transition-transform bg-gray-200" />
                    </label>
                </td>
            </tr>
            <tr>
                <td class="text-center">1</td>
                <td>
                    Đặt hàng Online, Chat với Labo
                </td>
                <td>
                    <label class="flex items-center relative w-max cursor-pointer select-none">
                        <input checked="true" type="checkbox" class="appearance-none transition-colors cursor-pointer w-14 h-7 rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-black focus:ring-blue-500 bg-red-500" />
                        <span class="absolute font-medium text-xs uppercase right-1 text-white"> OFF </span>
                        <span class="absolute font-medium text-xs uppercase right-8 text-white"> ON </span>
                        <span class="w-7 h-7 right-7 absolute rounded-full transform transition-transform bg-gray-200" />
                    </label>
                </td>
            </tr>
            <tr>
                <td class="text-center">1</td>
                <td>
                    Quản lý bệnh nhân
                </td>
                <td>
                    <label class="flex items-center relative w-max cursor-pointer select-none">
                        <input checked="true" type="checkbox" class="appearance-none transition-colors cursor-pointer w-14 h-7 rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-black focus:ring-blue-500 bg-red-500" />
                        <span class="absolute font-medium text-xs uppercase right-1 text-white"> OFF </span>
                        <span class="absolute font-medium text-xs uppercase right-8 text-white"> ON </span>
                        <span class="w-7 h-7 right-7 absolute rounded-full transform transition-transform bg-gray-200" />
                    </label>
                </td>
            </tr>
            <tr>
                <td class="text-center">1</td>
                <td>
                    Tự động nhắn tin/ email chăm sóc bệnh nhân
                </td>
                <td>
                    <label class="flex items-center relative w-max cursor-pointer select-none">
                        <input checked="true" type="checkbox" class="appearance-none transition-colors cursor-pointer w-14 h-7 rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-black focus:ring-blue-500 bg-red-500" />
                        <span class="absolute font-medium text-xs uppercase right-1 text-white"> OFF </span>
                        <span class="absolute font-medium text-xs uppercase right-8 text-white"> ON </span>
                        <span class="w-7 h-7 right-7 absolute rounded-full transform transition-transform bg-gray-200" />
                    </label>
                </td>
            </tr>
            <tr>
                <td class="text-center">1</td>
                <td>
                    Quản lý tài chính - kế toán
                </td>
                <td>
                    <label class="flex items-center relative w-max cursor-pointer select-none">
                        <input checked="true" type="checkbox" class="appearance-none transition-colors cursor-pointer w-14 h-7 rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-black focus:ring-blue-500 bg-red-500" />
                        <span class="absolute font-medium text-xs uppercase right-1 text-white"> OFF </span>
                        <span class="absolute font-medium text-xs uppercase right-8 text-white"> ON </span>
                        <span class="w-7 h-7 right-7 absolute rounded-full transform transition-transform bg-gray-200" />
                    </label>
                </td>
            </tr>
        </table>
    </div>
</section>

<script type="text/javascript">
    jQuery(document).ready(function() {
        var sidebar = new StickySidebar('#sidebar', {
            minWidth: 768,
            containerSelector: '#main-content',
            innerWrapperSelector: '.sidebar__inner',
            topSpacing: 86
        });

        if (jQuery('#table-select-functions')) {
            jQuery('#table-select-functions .form-switch .form-check-input').each(function() {
                if (jQuery(this).attr("data-checked") == 'true') {
                    jQuery(this).click();
                };
            });
        };

        jQuery(window).on('load', function() {
            jQuery('#formContactUs').on('submit', function(e) {
                e.preventDefault();
                /// check validation form
                var name = jQuery.trim(jQuery('#name').val());
                var phone = jQuery.trim(jQuery('#phone').val());
                var company = jQuery.trim(jQuery('#company').val());
                var message = jQuery.trim(jQuery('#message').val());
                var email = jQuery.trim(jQuery('#email').val());
                /// reset param

                // Check if empty of not
                if (name === '') {
                    alert('Vui lòng nhập tên');
                    return false;
                }

                if (phone === '') {
                    alert('Vui lòng nhập số điện thoại');
                    return false;
                }

                if (phone) {
                    // var regex = /^[+]?[\s./0-9]*[(]?[0-9]{1,4}[)]?[-\s./0-9]*jQuery/g;

                    // if (!regex.test(phone)) {
                    //     alert('Số điện thoại không hợp lệ!');
                    //     return false;
                    // }
                };

                if (message === '') {
                    alert('Vui lòng nhập nhập tin nhắn');
                    return false;
                }

                var v = grecaptcha.getResponse();
                if (v.length == 0) {
                    jQuery("#captcha").show();
                    return false;
                } else {
                    jQuery("#captcha").hide();
                }

                let data = jQuery(this).serializeArray().reduce(function(obj,
                    item) {
                    obj[item.name] = item.value;
                    return obj;
                }, {});

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
                };

                data['url'] = jQuery(location).attr('href');

                data['reason'] = 'Tư vấn: ';
                if (jQuery('#table-select-functions')) {
                    var all = jQuery("#table-select-functions .form-switch .form-check-input").map(
                        function() {
                            if (jQuery(this).prop("checked") == true) {
                                return this.value;
                            }
                        }).get();
                    data['reason'] += all.join(space);

                    note += data['reason'];
                }
                // if (data.selectQuiMo) {
                //     note += "Qui Mô: " + quimoArr[data.selectQuiMo.selectedIndex] + space;
                // };


                if (data.message) {
                    note += "Tin nhắn: " + data.message;
                };

                data['note'] = note;

                jQuery.ajax({
                    type: "POST",
                    cache: false,
                    url: 'https://lapi.dentalso.com/api/v1/public/callme',
                    contentType: "application/json",
                    data: JSON.stringify(data),
                    dataType: 'json', // data type
                    beforeSend: function() {
                        jQuery(".loading").show();
                        jQuery(".error-message").hide();
                        jQuery(".sent-message").hide();
                    },
                    success: function(res) {
                        jQuery(".loading").hide();
                        jQuery(".sent-message").show();
                        jQuery('#formContactUs').trigger("reset");
                        document.getElementById("formContactUs")
                            .reset();
                        jQuery("#formContactUs :input").prop("disabled",
                            false);

                        window.location.href =
                            "<?php echo $route_thank_you ?>"

                        // jQuery('#ModalRequest').modal('show');
                    },
                    error: function() {
                        jQuery(".loading").hide();
                        jQuery(".error-message").show();
                    }
                });

                data['time'] = new Date().toLocaleDateString("vi-VN");
                jQuery.ajax({
                    url: jQuery(this).attr('action'),
                    type: "POST",
                    data: data,
                });
            });
        });

    });
</script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>