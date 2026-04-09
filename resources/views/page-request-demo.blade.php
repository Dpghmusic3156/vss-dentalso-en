@extends('layouts.app')

@section('content')

{{-- Hero --}}
<section class="apple-section apple-section--sm bg-[#f5f5f7]">
    <div class="apple-container text-center">
        <div class="fade-in-up">
            <h1 class="apple-headline mb-4">Request a Demo</h1>
            <p class="apple-hero-copy">
                See DentalSO in action. Fill out the form below and our team will schedule a personalized walkthrough of the platform.
            </p>
        </div>
    </div>
</section>

{{-- Form + Info --}}
<section class="apple-section bg-white" id="demo">
    <div class="apple-container">
        <div class="grid lg:grid-cols-5 gap-10 lg:gap-16">
            {{-- Left: Value Props (mobile: 2nd, desktop: 1st) --}}
            <div class="lg:col-span-2 order-2 lg:order-1 fade-in-up">
                <div class="space-y-6">
                    <div class="apple-mini-card">
                        <span class="material-symbols-outlined text-2xl text-[#0071e3] mb-3">play_circle</span>
                        <h4 class="apple-mini-title">Live Product Demo</h4>
                        <p class="apple-mini-desc">Get a personalized walkthrough tailored to your lab or clinic's needs.</p>
                    </div>
                    <div class="apple-mini-card">
                        <span class="material-symbols-outlined text-2xl text-[#30d158] mb-3">question_answer</span>
                        <h4 class="apple-mini-title">Expert Q&A</h4>
                        <p class="apple-mini-desc">Ask our product specialists anything about features, pricing, or implementation.</p>
                    </div>
                    <div class="apple-mini-card">
                        <span class="material-symbols-outlined text-2xl text-[#ff9f0a] mb-3">rocket_launch</span>
                        <h4 class="apple-mini-title">Quick Setup</h4>
                        <p class="apple-mini-desc">Get started in days, not months. Our team handles onboarding for you.</p>
                    </div>
                </div>


            </div>

            {{-- Right: Form (mobile: 1st, desktop: 2nd) --}}
            <div class="lg:col-span-3 order-1 lg:order-2 fade-in-up" style="animation-delay: 0.15s;">
                <div class="bg-[#f5f5f7] rounded-3xl p-8 lg:p-10" id="form">
                    <div id="formContactUs">
                        <h2 class="apple-headline-sm mb-2">Book Your Demo</h2>
                        <p class="apple-body mb-8">We'll get back to you within one business day.</p>
                        <form action="javascript:Submit();" method="POST" class="space-y-5" autocomplete="off">
                            <div class="grid sm:grid-cols-2 gap-5">
                                <input type="text" name="name" class="apple-input" id="name" placeholder="Name" required>
                                <input type="text" class="apple-input" name="company" id="company" placeholder="Company" required>
                            </div>
                            <div class="grid sm:grid-cols-2 gap-5">
                                <input type="text" name="phone" class="apple-input" id="phone" placeholder="Phone" required oninput="this.value = this.value.replace(/[^0-9+]/g, '')">
                                <input type="email" class="apple-input" name="email" id="email" placeholder="Email">
                            </div>
                            <select class="apple-input" name="product" id="product">
                                <option selected disabled>Select a Product</option>
                                <option value="DentalSO Platform">DentalSO Platform</option>
                                <option value="DentalSO MES">DentalSO MES</option>
                                <option value="DentalSO Connect">DentalSO Connect</option>
                            </select>
                            <?php
                            $plan = isset($_GET['plan']) ? $_GET['plan'] : '';
                            $payment = isset($_GET['payment']) ? $_GET['payment'] : '';
                            $product = isset($_GET['product']) ? $_GET['product'] : '';
                            ?>
                            <select class="apple-input" name="timezone" id="timezone">
                                <option selected disabled>Timezone</option>
                                <option value="UTC-12">(UTC-12:00) Baker Island</option>
                                <option value="UTC-11">(UTC-11:00) Samoa</option>
                                <option value="UTC-10">(UTC-10:00) Hawaii</option>
                                <option value="UTC-9">(UTC-09:00) Alaska</option>
                                <option value="UTC-8">(UTC-08:00) Pacific Time (US)</option>
                                <option value="UTC-7">(UTC-07:00) Mountain Time (US)</option>
                                <option value="UTC-6">(UTC-06:00) Central Time (US)</option>
                                <option value="UTC-5">(UTC-05:00) Eastern Time (US)</option>
                                <option value="UTC-4">(UTC-04:00) Atlantic Time</option>
                                <option value="UTC-3">(UTC-03:00) Brazil</option>
                                <option value="UTC+0">(UTC+00:00) London / UTC</option>
                                <option value="UTC+1">(UTC+01:00) Central Europe</option>
                                <option value="UTC+2">(UTC+02:00) Eastern Europe</option>
                                <option value="UTC+3">(UTC+03:00) Moscow / Middle East</option>
                                <option value="UTC+5:30">(UTC+05:30) India</option>
                                <option value="UTC+7">(UTC+07:00) Vietnam / Thailand</option>
                                <option value="UTC+8">(UTC+08:00) Singapore / China</option>
                                <option value="UTC+9">(UTC+09:00) Japan / Korea</option>
                                <option value="UTC+10">(UTC+10:00) Australia (East)</option>
                                <option value="UTC+12">(UTC+12:00) New Zealand</option>
                            </select>
                            <select class="apple-input" name="preferred_time" id="preferred_time">
                                <option selected disabled>Preferred Call Time</option>
                                <option value="08:00 - 09:00">08:00 – 09:00</option>
                                <option value="09:00 - 10:00">09:00 – 10:00</option>
                                <option value="10:00 - 11:00">10:00 – 11:00</option>
                                <option value="11:00 - 12:00">11:00 – 12:00</option>
                                <option value="13:00 - 14:00">13:00 – 14:00</option>
                                <option value="14:00 - 15:00">14:00 – 15:00</option>
                                <option value="15:00 - 16:00">15:00 – 16:00</option>
                                <option value="16:00 - 17:00">16:00 – 17:00</option>
                                <option value="17:00 - 18:00">17:00 – 18:00</option>
                            </select>
                            <input class="hidden" type="hidden" id="plan" value="<?php echo esc_attr($plan); ?>">
                            <input class="hidden" type="hidden" id="payment" value="<?php echo esc_attr($payment); ?>">
                            <input class="hidden" type="hidden" id="productParam" value="<?php echo esc_attr($product); ?>">
                            <textarea class="apple-input" name="message" placeholder="Tell us about your needs" id="message" rows="4" required></textarea>
                            <div>
                                <div class="loading hidden text-[#0071e3]">Sending...</div>
                                <div class="error-message hidden text-[#ff453a]">Unable to send. Please try again.</div>
                            </div>
                            <button class="apple-cta-primary w-full sm:w-auto" type="submit">
                                Request Demo
                            </button>
                        </form>
                    </div>
                    <div class="sent-message hidden text-center py-12">
                        <span class="material-symbols-outlined text-[#30d158] text-5xl mb-4">check_circle</span>
                        <p class="text-xl font-semibold text-[#1d1d1f] mb-2">Request received!</p>
                        <p class="text-[#86868b]">We'll contact you shortly to schedule your demo.</p>
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

    // Auto-select product from URL parameter
    const params = new URLSearchParams(window.location.search);
    const productParam = params.get('product');
    if (productParam) {
        const productSelect = document.getElementById('product');
        if (productSelect) {
            for (let i = 0; i < productSelect.options.length; i++) {
                if (productSelect.options[i].value === productParam) {
                    productSelect.selectedIndex = i;
                    break;
                }
            }
        }
    }
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
        var timezone = jQuery.trim(jQuery('#timezone').val());
        var preferred_time = jQuery.trim(jQuery('#preferred_time').val());
        let data = new Object;

        if (name === '') { alert('Please enter your name'); return false; } else { data['name'] = name; }
        if (phone === '') { alert('Please enter your phone number'); return false; } else { data['phone'] = phone; }
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (email !== '' && !emailRegex.test(email)) { alert('Please enter a valid email'); return false; }
        data['email'] = email;
        if (message === '') { alert('Please enter your message'); return false; } else { data['message'] = message; }

        jQuery("#formContactUs :input").prop("disabled", true);

        let note = "";
        const space = "\n";
        if (data.name) { note += "Name: " + data.name + space; };
        if (data.company) { note += "Company: " + data.company + space; };
        if (data.phone) { note += "Phone: " + data.phone + space; };
        if (data.email) { note += "Email: " + data.email + space; data['el'] = data.email.trim().length; };
        if (jQuery('#plan').val()) { note += "Plan: " + jQuery('#plan').val() + space; };
        if (jQuery('#payment').val()) { note += "Payment: " + jQuery('#payment').val() + space; };
        if (data.product) { note += "Product: " + data.product + space; };
        if (timezone) { note += "Timezone: " + timezone + space; };
        if (preferred_time) { note += "Preferred Call Time: " + preferred_time + space; };
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
                window.dataLayer = window.dataLayer || [];
                window.dataLayer.push({
                    'event': 'form_submission_success',
                    'form_type': 'demo_request',
                    'page_language': 'en'
                });
                window.location.href = '<?php echo home_url('/thank-you/'); ?>';
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