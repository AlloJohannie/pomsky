@extends('layouts.landing', ['title' => 'Blog'])

@section('content')
    <!-- Blog Section  -->
    <section class="bg-body-bg lg:py-25 md:py-12.5 py-7.5">
        <div class="container">
            <div class="text-center" data-aos="fade-up" data-aos-delay="150" data-aos-duration="500" data-aos-easing="ease-in-out">
                <h1 class="lg:text-6xl md:text-5.5xl text-4xl mb-2.5">Our latest articles </h1>
                <p class="mb-2.5">Real stories of success and satisfaction from businesses using Landinger. </p>
            </div>
        </div>
    </section>

    <!-- Blog Item Section  -->
    <section class="bg-white lg:py-25 md:py-22.5 py-17.5">
        <div class="container">
            <div class="grid md:grid-cols-3 lg:gap-12.5 md:gap-5 gap-10" data-aos="fade-up" data-aos-delay="150" data-aos-duration="500" data-aos-easing="ease-in-out">

                <!-- Blog Item 1 -->
                <a href="{{ url('pages.blog-details') }}">
                    <div class="overflow-hidden rounded-2xl">
                        <img src="/images/blog/6.png" alt="" class="duration-300 hover:scale-105 transition-all">
                    </div>

                    <div class="md:mt-5 mt-2.5">
                        <p class="text-dark">August 6, 2024</p>
                        <h2 class="text-2xl md:mt-2.5 mt-1.25">Bad habits that people in the industry need</h2>
                    </div>
                </a>

                <!-- Blog Item 2 -->
                <a href="{{ url('pages.blog-details') }}">
                    <div class="overflow-hidden rounded-2xl">
                        <img src="/images/blog/1.png" alt="" class="duration-300 hover:scale-105 transition-all">
                    </div>

                    <div class="md:mt-5 mt-2.5">
                        <p class="text-dark">September 4, 2024 </p>
                        <h2 class="text-2xl md:mt-2.5 mt-1.25">Starting and growing a career in web design </h2>
                    </div>
                </a>

                <!-- Blog Item 3 -->
                <a href="{{ url('pages.blog-details') }}">
                    <div class="overflow-hidden rounded-2xl">
                        <img src="/images/blog/2.png" alt="" class="duration-300 hover:scale-105 transition-all">
                    </div>

                    <div class="md:mt-5 mt-2.5">
                        <p class="text-dark">September 4, 2024 </p>
                        <h2 class="text-2xl md:mt-2.5 mt-1.25">Create a landing page that performs great </h2>
                    </div>
                </a>

                <!-- Blog Item 4 -->
                <a href="{{ url('pages.blog-details') }}">
                    <div class="overflow-hidden rounded-2xl">
                        <img src="/images/blog/3.png" alt="" class="duration-300 hover:scale-105 transition-all">
                    </div>

                    <div class="md:mt-5 mt-2.5">
                        <p class="text-dark">September 4, 2024 </p>
                        <h2 class="text-2xl md:mt-2.5 mt-1.25">How can designers prepare for the future </h2>
                    </div>
                </a>

                <!-- Blog Item 5 -->
                <a href="{{ url('pages.blog-details') }}">
                    <div class="overflow-hidden rounded-2xl">
                        <img src="/images/blog/4.png" alt="" class="duration-300 hover:scale-105 transition-all">
                    </div>

                    <div class="md:mt-5 mt-2.5">
                        <p class="text-dark">September 4, 2024 </p>
                        <h2 class="text-2xl md:mt-2.5 mt-1.25">Building a navigation component with variables </h2>
                    </div>
                </a>

                <!-- Blog Item 6 -->
                <a href="{{ url('pages.blog-details') }}">
                    <div class="overflow-hidden rounded-2xl">
                        <img src="/images/blog/5.png" alt="" class="duration-300 hover:scale-105 transition-all">
                    </div>

                    <div class="md:mt-5 mt-2.5">
                        <p class="text-dark">September 4, 2024 </p>
                        <h2 class="text-2xl md:mt-2.5 mt-1.25">How to create an effective design portfolio </h2>
                    </div>
                </a>
            </div>
        </div>
    </section>
@endsection