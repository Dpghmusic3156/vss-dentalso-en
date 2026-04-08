@extends('layouts.app')

@section('content')

{{-- Hero --}}
<section class="apple-section apple-section--sm bg-[#f5f5f7]">
    <div class="apple-container text-center">
        <div class="fade-in-up">
            <h1 class="apple-headline mb-4">Contact DentalSO</h1>
            <p class="apple-hero-copy">
                Have questions about our dental lab software or want a personalized demo? Fill out the form below and our team will contact you shortly.
            </p>
        </div>
    </div>
</section>

{{-- Contact Form + Info --}}
<section class="apple-section bg-white" id="contact">
    <div class="apple-container">
        <div class="grid lg:grid-cols-5 gap-10 lg:gap-16">
            {{-- 1: Text cards (mobile: 2nd, desktop: left top) --}}
            <div class="lg:col-span-2 order-2 lg:order-1 fade-in-up">
                <div class="space-y-6">
                    <div class="apple-mini-card">
                        <span class="material-symbols-outlined text-2xl text-[#0071e3] mb-3">mail</span>
                        <h4 class="apple-mini-title">Sales inquiries</h4>
                        <p class="apple-mini-desc">Get pricing and product information</p>
                    </div>
                    <div class="apple-mini-card">
                        <span class="material-symbols-outlined text-2xl text-[#30d158] mb-3">calendar_month</span>
                        <h4 class="apple-mini-title">Demo requests</h4>
                        <p class="apple-mini-desc">Book a personalized demo session</p>
                    </div>
                    <div class="apple-mini-card">
                        <span class="material-symbols-outlined text-2xl text-[#ff9f0a] mb-3">handshake</span>
                        <h4 class="apple-mini-title">Partnership opportunities</h4>
                        <p class="apple-mini-desc">Explore collaboration options</p>
                    </div>
                    <div class="apple-mini-card">
                        <span class="material-symbols-outlined text-2xl text-[#bf5af2] mb-3">support_agent</span>
                        <h4 class="apple-mini-title">Support questions</h4>
                        <p class="apple-mini-desc">Get help with existing services</p>
                    </div>
                </div>
            </div>

            {{-- 2: Form (mobile: 1st, desktop: right) --}}
            <div class="lg:col-span-3 order-1 lg:order-2 fade-in-up" style="animation-delay: 0.15s;">
                <div class="bg-[#f5f5f7] rounded-3xl p-8 lg:p-10" id="form">
                    <div id="formContactUs">
                        <h2 class="apple-headline-sm mb-2">Submit Inquiry</h2>
                        <p class="apple-body mb-8">We'll get back to you as soon as possible.</p>
                        <form action="javascript:a();" method="POST" class="space-y-5" autocomplete="off">
                            <div class="grid sm:grid-cols-2 gap-5">
                                <input type="text" name="name" class="apple-input" id="name" placeholder="Name" required>
                                <input type="text" class="apple-input" name="company" id="company" placeholder="Company" required>
                            </div>
                            <div class="grid sm:grid-cols-2 gap-5">
                                <input type="text" name="phone" class="apple-input" id="phone" placeholder="Phone" required>
                                <input type="email" class="apple-input" name="email" id="email" placeholder="Email">
                            </div>
                            <div class="grid sm:grid-cols-2 gap-5">
                                <select class="apple-input" name="reason" id="reason">
                                    <option selected disabled>Department</option>
                                    <option value="Tư vấn">Sales</option>
                                    <option value="Hỗ trợ kỹ thuật">Technical Support</option>
                                    <option value="Hợp tác">Partnership</option>
                                </select>
                                <select class="apple-input" name="product" id="product">
                                    <option selected disabled>Product</option>
                                    <option value="DentalSO Platform">DentalSO Platform</option>
                                    <option value="DentalSO MES">DentalSO MES</option>
                                    <option value="DentalSO Connect">DentalSO Connect</option>
                                </select>
                            </div>
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
                            <textarea class="apple-input" name="message" placeholder="Message" id="message" rows="4" required></textarea>
                            <div>
                                <div class="loading hidden text-[#0071e3]">Sending...</div>
                                <div class="error-message hidden text-[#ff453a]">Unable to send. Please try again.</div>
                            </div>
                            <button class="apple-cta-primary w-full sm:w-auto" type="submit">
                                Submit Inquiry
                            </button>
                        </form>
                    </div>
                    <div class="sent-message hidden text-[#30d158] text-xl text-center py-10 font-medium">
                        Message sent successfully! We'll contact you shortly.
                    </div>
                </div>
            </div>

            {{-- 3: Contact info (mobile: 3rd, desktop: left bottom) --}}
            <div class="lg:col-span-2 order-3 lg:order-3 fade-in-up" style="animation-delay: 0.2s;">
                <div class="space-y-4 text-sm text-[#86868b]">
                    <div class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-base mt-0.5">location_on</span>
                        <div class="flex flex-col gap-1">
                            @if(get_theme_mod('address_us'))
                            <span><strong>US:</strong> {{ get_theme_mod('address_us') }}</span>
                            @endif
                            <span><strong>VN:</strong> {{ get_theme_mod('address') }}</span>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-base">phone</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/resources/images/us.webp" class="w-4 h-auto" loading="lazy" alt="English Language">
                        <a href="https://api.whatsapp.com/send/?phone=12062019069&text&type=phone_number&app_absent=0" target="_blank" rel="noopener noreferrer" class="hover:text-[#1d1d1f] transition-colors">{{ get_theme_mod('phoneus') }}</a>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-base">phone</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/resources/images/vn.webp" class="w-4 h-auto" loading="lazy" alt="Vietnamese Language">
                        <a href="http://zalo.me/0947476000" target="_blank" rel="noopener noreferrer" class="hover:text-[#1d1d1f] transition-colors">{{ get_theme_mod('phone') }}</a>
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
        var timezone = jQuery.trim(jQuery('#timezone').val());
        var preferred_time = jQuery.trim(jQuery('#preferred_time').val());
        let data = new Object;

        if (name === '') { alert('Please enter your name'); return false; } else { data['name'] = name; }
        if (phone === '') { alert('Please enter your phone number'); return false; } else { data['phone'] = phone; }
        if (email === '') { alert('Please enter your email'); return false; } else { data['email'] = email; }
        if (message === '') { alert('Please enter a message'); return false; } else { data['message'] = message; }

        jQuery("#formContactUs :input").prop("disabled", true);

        let note = "";
        const space = "\n";
        if (data.name) { note += "Name: " + data.name + space; };
        if (data.company) { note += "Company: " + data.company + space; };
        if (data.phone) { note += "Phone: " + data.phone + space; };
        if (data.email) { note += "Email: " + data.email + space; data['el'] = data.email.trim().length; };
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
                    'form_type': 'contact',
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