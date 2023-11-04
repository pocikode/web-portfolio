@extends('templates.layout')

@section('content')
    <!-- ======= About Section ======= -->
    <section id="about" class="about" x-data>
        <div class="container">
            <div class="resume-section-content">
                <h1 class="name">
                    <span id="first-name" x-text="$store.profile.name.split(' ')[0]">John</span>
                    <span id="last-name" class="text-primary" x-text="$store.profile.name.split(' ').slice(1).join(' ')">Doe</span>
                </h1>
                <div class="section-contact mb-5" data-aos="fade-right">
                    <span id="city" x-text="$store.profile.city">New York</span> · <span id="phone" x-text="$store.profile.phone">+1 5589 55488 55</span> ·
                    <a id="email" class="text-primary text-decoration-none" x-bind:href="'mailto:' + $store.profile.email" x-text="$store.profile.email">info@example.com</a>
                </div>
                <p class="lead mb-5" data-aos="fade-up" x-text="$store.profile.about">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <div class="social-links mt-3" data-aos="fade-left">
                    <a x-bind:href="$store.profile.social_media.linkedin" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    <a x-bind:href="$store.profile.social_media.github" target="_blank" class="github"><i class="bx bxl-github"></i></a>
                    <a x-bind:href="$store.profile.social_media.twitter" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a x-bind:href="$store.profile.social_media.instagram" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
                </div>
            </div>
        </div>
    </section><!-- End About Section -->
@endsection
