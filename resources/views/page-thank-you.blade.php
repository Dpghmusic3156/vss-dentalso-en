@extends('layouts.app')

@section('content')
<style>
    @media screen and (max-width: 760px) {
  #mail {
   display: flex!important;
  }
  #maildesktop {
      display: none !important;
  }
}
</style>
<section id="thank-you-page" class="py-20">
    <section class="container section-first-page pt-0" data-aos="fade-up">
        <div>
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player src="<?php  echo get_site_url(); ?>/wp-content/themes/vss-dentalso/resources/images/thank-you.lottiefiles.json"
                background="transparent" speed="1" class="d-block"
                style="max-width: 250px;display: block;margin: 0 auto;" autoplay />
        </div>
        <div class="section-header">
            <h2 class="text-3xl lg:text-4xl leading-normal text-center mb-10">Thank you!</h2>
            <p class="div-center text-center">
                We have received your request. Information regarding your online demo schedule will be sent to your email.</p>
            <p class="div-center text-center">
                For immediate assistance, please contact us directly</p>
            <div class="flex items-center justify-center" >
                <img src="https://dentalso.com/wp-content/plugins/polylang/flags/us.png" alt="English Page" loading="lazy"
                    style="width: 16px; height: 11px;">
                <a class="hover:text-primary-1 text-xl" href="https://api.whatsapp.com/send/?phone=12062019069&text&type=phone_number&app_absent=0" target="_blank" rel="noopener noreferrer">&nbsp;{{ get_theme_mod('phoneus') }}</a>
                 <span class="material-symbols-outlined align-bottom" style="margin-left: 1rem;" id="maildesktop">mail</span>
                    <a href="mailto:contact@dentalso.com" class="hover:text-primary-1 text-xl" id="maildesktop">contact@dentalso.com</a>
            </div>
            <div class="flex items-center justify-center hidden" id="mail">
                <span class="material-symbols-outlined align-bottom" style="margin-left: 1rem;">mail</span>
                    <a href="mailto:contact@dentalso.com" class="hover:text-primary-1 text-xl">contact@dentalso.com</a>
            </div>
        </div>
    </section>
</section>
@endsection
