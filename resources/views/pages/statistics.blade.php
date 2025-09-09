@extends('layouts.landing', ['title' => 'reviews'])

@section('content')
    <!-- Statistics Section  -->
    <section class="bg-body-bg lg:py-25 md:py-22.5 py-17.5">
        <div class="container">
            <h1 class="lg:text-6xl md:text-5.5xl text-4xl mb-2.5 text-center" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">Statistics</h1>
        </div>
    </section>

    <!-- Statistics One Section  -->
    <section class="bg-dark lg:py-25 md:py-22.5 py-17.5">
        <div class="container">
            <div class="grid md:grid-cols-5 lg:gap-25 md:gap-10 gap-10" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
                <div class="md:col-span-2">
                    <div class="mb-12.5">
                        <h2 class="mb-2.5 lg:text-5.5xl md:text-4.6xl text-3.4xl text-white">200<span class="text-primary">+</span></h2>
                        <p class="mb-2.5 text-white">Clients have achieved success with our tailored SaaS solutions, ranging from startups to enterprises.</p>
                    </div>

                    <div class="mb-12.5">
                        <h2 class="mb-2.5 lg:text-5.5xl md:text-4.6xl text-3.4xl text-white">98<span class="text-primary">+</span></h2>
                        <p class="mb-2.5 text-white">Satisfaction rate reflects our commitment to providing exceptional service and support. </p>
                    </div>

                    <div class="bg-white rounded-2xl flex lg:p-10 md:p-5 p-5 lg:gap-7.5 flex-col gap-2.5">
                        <h2 class="mb-2.5 text-2.5xl">Join us on our journey</h2>
                        <div>
                            <a href="{{ url('pages.careers') }}" class="py-3.5 px-7.5 md:px-6.5 inline-flex rounded-2xl font-medium bg-primary text-dark hover:text-primary hover:bg-dark transition-all duration-300">
                                View open positions
                            </a>
                        </div>
                    </div>
                </div>

                <div class="md:col-span-3">
                    <img src="/images/about/4.png" alt="" class="h-full rounded-2xl object-cover">
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Two Section  -->
    <section class="bg-white lg:py-25 md:py-22.5 py-17.5">
        <div class="container">
            <div class="grid md:grid-cols-4 grid-cols-2 lg:gap-7.5 gap-5 justify-between">
                <div data-aos="fade-up" data-aos-delay="50" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <h4 class="md:text-4xl text-2.6xl">500</h4>
                    <p>Trusted partners </p>
                </div>

                <div data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <h4 class="md:text-4xl text-2.6xl">20+</h4>
                    <p>Active users </p>
                </div>

                <div data-aos="fade-up" data-aos-delay="150" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <h4 class="md:text-4xl text-2.6xl">150+</h4>
                    <p>Total reviews </p>
                </div>

                <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <h4 class="md:text-4xl text-2.6xl">200+</h4>
                    <p>Completed projects </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Three Section  -->
    <section class=" bg-white lg:py-25 md:py-22.5 py-17.5">
        <div class="container">
            <div class="grid md:grid-cols-2 lg:gap-20 md:gap-5 gap-10">
                <div data-aos="fade-right" data-aos-duration="600" data-aos-easing="ease-in-out">
                    <div class="lg:mb-12.5 mb-7.5">
                        <h2 class="mb-2.5 lg:text-5.5xl md:text-4.6xl text-3.4xl">We drive business success with solutions. </h2>
                        <p class="text-base mb-2.5">Discover our powerful tools designed to streamline your workflow and boost productivity.</p>
                    </div>

                    <div class="flex lg:gap-25 gap-5 lg:mb-10 mb-7.5">
                        <div class="flex gap-2.5">
                            <img src="/images/team/2.png" alt="" class="size-12.5 rounded-full">
                            <div>
                                <div class="font-medium text-black">Jane Doe</div>
                                <div class="text-sm">Designer</div>
                            </div>
                        </div>

                        <div class="flex gap-2.5">
                            <img src="/images/team/1.png" alt="" class="size-12.5 rounded-full">
                            <div>
                                <div class="font-medium text-black">John Smith </div>
                                <div class="text-sm">UI/UX Designer </div>
                            </div>
                        </div>
                    </div>

                    <a href="{{ url('pages.contact') }}" class="py-3.5 lg:px-7.5 px-6.5 inline-flex text-center bg-dark font-medium rounded-2xl text-white transition-all duration-300 hover:text-primary">
                        14_day free trial
                    </a>
                </div>

                <div data-aos="fade-left" data-aos-duration="600" data-aos-easing="ease-in-out">
                    <img src="/images/about/4.png" alt="" class="rounded-2xl md:h-full object-cover">
                </div>
            </div>

            <hr class="border-top border-neutral-200 lg:mt-12.5 mt-7.5" />

            <div class="grid md:grid-cols-4 md:gap-5 lg:pt-12.5 mt-7.5 gap-5 ">
                <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="600" data-aos-easing="ease-in-out">
                    <h3 class="lg:text-5.5xl md:text-4.6xl text-3.4xl">22+</h3>
                    <div>Years of experience</div>
                </div>

                <div data-aos="fade-up" data-aos-delay="400" data-aos-duration="600" data-aos-easing="ease-in-out">
                    <h3 class="lg:text-5.5xl md:text-4.6xl text-3.4xl">105+ </h3>
                    <div>In-house projects completed </div>
                </div>

                <div data-aos="fade-up" data-aos-delay="600" data-aos-duration="600" data-aos-easing="ease-in-out">
                    <h3 class="lg:text-5.5xl md:text-4.6xl text-3.4xl">35+ </h3>
                    <div>Awards and counting </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="800" data-aos-duration="600" data-aos-easing="ease-in-out">
                    <h3 class="lg:text-5.5xl md:text-4.6xl text-3.4xl">>10K </h3>
                    <div>Satisfied users </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    @vite(['resources/js/testi-swiper.js'])
@endsection