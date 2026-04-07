<footer class="apple-footer">
    <div class="apple-footer-inner apple-container">
        {{-- Top: Links grid --}}
        <div class="apple-footer-grid">
            <div class="apple-footer-col">
                <h4 class="apple-footer-heading">Products</h4>
                <ul class="apple-footer-links">
                    <li><a href="{{ home_url('products/dental-lab-software/') }}">DentalSO</a></li>
                    <li><a href="{{ home_url('products/dental-lab-mes/') }}">DentalSO MES</a></li>
                    <li><a href="{{ home_url('products/dentalso-connect/') }}">DentalSO Connect</a></li>
                </ul>
            </div>
            <div class="apple-footer-col">
                <h4 class="apple-footer-heading">Solutions</h4>
                <ul class="apple-footer-links">
                    <li><a href="{{ home_url('solutions/small-medium-dental-labs/') }}">Small & Medium Dental Labs</a></li>
                    <li><a href="{{ home_url('solutions/outsource-dental-labs/') }}">Outsource Dental Labs</a></li>
                    <li><a href="{{ home_url('solutions/large-dental-labs-mes/') }}">Large Dental Labs</a></li>
                </ul>
            </div>
            <div class="apple-footer-col">
                <h4 class="apple-footer-heading">Company</h4>
                <ul class="apple-footer-links">
                    <li><a href="{{ home_url('about/') }}">About</a></li>
                    <li><a href="{{ home_url('contact/') }}">Contact</a></li>
                </ul>
            </div>
            <div class="apple-footer-col">
                <h4 class="apple-footer-heading">Resources</h4>
                <ul class="apple-footer-links">
                    <li><a href="{{ home_url('blog/') }}">Blog</a></li>
                    <li><a href="{{ home_url('customer/') }}">Featured Customers</a></li>
                    <li><a href="{{ home_url('guides/') }}">Guides</a></li>
                </ul>
            </div>
            <div class="apple-footer-col">
                <h4 class="apple-footer-heading">Contact</h4>
                <ul class="apple-footer-links">
                    <li>
                        <a href="mailto:<?php echo get_theme_mod('email1'); ?>">
                            <?php echo get_theme_mod('email1'); ?>
                        </a>
                    </li>
                    <li class="flex items-center gap-1.5">
                        <img src="<?php echo get_template_directory_uri(); ?>/resources/images/us.webp" class="w-4 h-auto" loading="lazy" alt="English Language">
                        <a href="https://api.whatsapp.com/send/?phone=12062019069&text&type=phone_number&app_absent=0" target="_blank" rel="noopener noreferrer"><?php echo get_theme_mod('phoneus'); ?></a>
                    </li>
                    <li class="flex items-center gap-1.5">
                        <img src="<?php echo get_template_directory_uri(); ?>/resources/images/vn.webp" class="w-4 h-auto" loading="lazy" alt="Vietnamese Language">
                        <a href="http://zalo.me/0947476000" target="_blank" rel="noopener noreferrer"><?php echo get_theme_mod('phone'); ?></a>
                    </li>
                </ul>
            </div>
        </div>

        {{-- Office Locations --}}
        <div class="apple-footer-offices">
            <?php if(get_theme_mod('address_us')): ?>
            <div class="apple-footer-office">
                <span class="apple-footer-office-label"><span class="material-symbols-outlined" style="font-size: 14px;">location_on</span> US HQ:</span>
                <div class="apple-footer-office-phone"><a href="https://api.whatsapp.com/send/?phone=12062019069&text&type=phone_number&app_absent=0" target="_blank" rel="noopener noreferrer"><?php echo get_theme_mod('phoneus'); ?></a></div>
                <p class="apple-footer-office-address"><?php echo get_theme_mod('address_us'); ?></p>
            </div>
            <?php endif; ?>
            <?php if(get_theme_mod('address')): ?>
            <div class="apple-footer-office">
                <span class="apple-footer-office-label"><span class="material-symbols-outlined" style="font-size: 14px;">location_on</span> Vietnam Office:</span>
                <div class="apple-footer-office-phone"><a href="http://zalo.me/0947476000"><?php echo get_theme_mod('phone'); ?></a></div>
                <p class="apple-footer-office-address"><?php echo get_theme_mod('address'); ?></p>
            </div>
            <?php endif; ?>
        </div>

        {{-- Bottom bar: Brand + Apps --}}
        <div class="apple-footer-bottom">
            <div class="apple-footer-brand">
                <img alt="DentalSO" src="<?php echo get_theme_mod('logo_full'); ?>">
                <span>VISION SOFTWARE COMPANY LIMITED</span>
            </div>
            <div class="flex items-center gap-4">
                <div class="flex items-center gap-3">
                    <a href="https://dentalso.com/vi/" class="text-[0.75rem] text-[#86868b] hover:text-[#1d1d1f] transition-colors">Tiếng Việt</a>
                    <span class="text-[#d2d2d7]">|</span>
                    <a href="https://dentalso.com/en/" class="text-[0.75rem] font-medium text-[#1d1d1f] hover:text-[#0071e3] transition-colors">English</a>
                </div>
            </div>
            <div class="apple-footer-apps">
                <span class="apple-footer-apps-label">Download App:</span>
                <a href="https://apps.apple.com/vn/app/dentalso/id6447111443" target="_blank" rel="noopener noreferrer">
                    <img alt="Download DentalSO on App Store" loading="lazy" src="<?php echo get_site_url(); ?>/wp-content/uploads/2025/02/app-store.png">
                </a>
                <a href="https://play.google.com/store/apps/details?id=com.dentalso" target="_blank" rel="noopener noreferrer">
                    <img alt="Download DentalSO on Google Play" loading="lazy" src="<?php echo get_site_url(); ?>/wp-content/uploads/2025/02/google-play.png">
                </a>
            </div>
        </div>

        {{-- Copyright --}}
        <div class="apple-footer-copyright">
            <div class="flex flex-wrap items-center gap-x-1">
                <span>Copyright © {{ date('Y') }} DentalSO. All rights reserved.</span>
                <span class="mx-1">·</span>
                <a href="{{ home_url('privacy-policy/') }}">Privacy Policy</a>
                <span class="mx-1">·</span>
                <a href="{{ home_url('terms-of-use/') }}">Terms of Use</a>
                <span class="mx-1">·</span>
                <a href="{{ home_url('cookies-policy/') }}">Cookies</a>
            </div>
            <div class="apple-footer-contact">
                <a href="mailto:<?php echo get_theme_mod('email1'); ?>">
                    <span class="material-symbols-outlined" style="font-size: 14px;">mail</span>
                    <?php echo get_theme_mod('email1'); ?>
                </a>
            </div>
        </div>
    </div>
</footer>

{{-- Floating WhatsApp Button with hover tooltip --}}
<div id="floating-wa-wrap" style="position:fixed;bottom:24px;right:24px;z-index:9999;display:flex;align-items:center;gap:0;">
    {{-- Tooltip label --}}
    <span id="wa-tooltip" style="pointer-events:none;white-space:nowrap;background:#25D366;color:#fff;font-size:14px;font-weight:600;padding:10px 20px;border-radius:28px;box-shadow:0 4px 12px rgba(0,0,0,.15);opacity:0;transform:translateX(20px);transition:opacity .35s ease,transform .35s cubic-bezier(.16,1,.3,1);margin-right:-8px;">
        Contact us
    </span>
    {{-- Button --}}
    <a href="https://api.whatsapp.com/send/?phone=12062019069&text&type=phone_number&app_absent=0"
       target="_blank"
       rel="noopener noreferrer"
       id="floating-whatsapp"
       aria-label="Chat on WhatsApp"
       style="position:relative;width:56px;height:56px;min-width:56px;border-radius:50%;background:#25D366;display:flex;align-items:center;justify-content:center;box-shadow:0 4px 12px rgba(0,0,0,.2);transition:transform .3s cubic-bezier(.16,1,.3,1),box-shadow .3s ease;cursor:pointer;text-decoration:none;">
        <svg viewBox="0 0 32 32" width="30" height="30" fill="#fff">
            <path d="M16.004 2.667A13.26 13.26 0 0 0 2.667 15.89a13.16 13.16 0 0 0 1.89 6.8L2.667 29.333l6.89-1.81a13.3 13.3 0 0 0 6.44 1.65h.007A13.27 13.27 0 0 0 16.004 2.667Zm0 24.29a11.01 11.01 0 0 1-5.62-1.54l-.4-.24-4.18 1.1 1.12-4.08-.26-.42a10.97 10.97 0 0 1-1.69-5.87 11.03 11.03 0 1 1 11.03 11.03Zm6.05-8.26c-.33-.17-1.96-.97-2.27-1.08-.3-.11-.52-.17-.74.17s-.85 1.08-1.04 1.3c-.19.22-.39.24-.72.08a9.1 9.1 0 0 1-2.68-1.65 10.06 10.06 0 0 1-1.85-2.31c-.19-.33 0-.5.15-.67.14-.15.33-.39.5-.59.16-.19.22-.33.33-.55.11-.22.06-.41-.03-.58-.08-.17-.74-1.78-1.01-2.43-.27-.64-.54-.55-.74-.56h-.63a1.21 1.21 0 0 0-.88.41 3.7 3.7 0 0 0-1.15 2.74 6.42 6.42 0 0 0 1.35 3.41 14.72 14.72 0 0 0 5.64 4.99 18.9 18.9 0 0 0 1.88.7 4.54 4.54 0 0 0 2.08.13 3.4 3.4 0 0 0 2.22-1.57 2.75 2.75 0 0 0 .19-1.57c-.08-.14-.3-.22-.63-.39Z"/>
        </svg>
    </a>
</div>
<style>
    #floating-wa-wrap:hover #wa-tooltip {
        opacity: 1;
        transform: translateX(0);
        pointer-events: auto;
    }
    #floating-wa-wrap:hover #floating-whatsapp {
        transform: scale(1.05);
        box-shadow: 0 6px 20px rgba(37,211,102,.45);
    }
    #floating-whatsapp::after {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        border-radius: 50%;
        background: #25D366;
        z-index: -1;
        animation: wa-pulse 2s ease-out infinite;
    }
    @keyframes wa-pulse {
        0% { transform: scale(1); opacity: .4; }
        100% { transform: scale(1.6); opacity: 0; }
    }
</style>