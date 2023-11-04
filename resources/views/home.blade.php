@extends('templates.layout')

@section('hero')
    <!-- ======= Hero Section ======= -->
    <section x-data id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="hero-container" data-aos="fade-in">
            <h1 x-text="$store.profile.name"></h1>
            <p>I'm <span class="typed" data-typed-items="Backend Developer"></span></p>
        </div>
    </section><!-- End Hero -->
@endsection
