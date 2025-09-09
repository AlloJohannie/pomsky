@extends('layouts.landing', ['title' => 'Cards'])

@section('content')
    <!-- Cards Section  -->
    <section class="bg-body-bg lg:py-25 md:py-22.5 py-17.5">
        <div class="container">
            <h1 class="lg:text-6xl md:text-5.5xl text-4xl mb-2.5 text-center">Cards</h1>
        </div>
    </section>

    <!-- Card One Section  -->
    <section class="bg-white lg:py-25 md:py-22.5 py-17.5">
        <div class="container">
            <div class="lg:mb-10 lg:mx-auto text-center lg:w-1/2 mb-10" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
                <h2 class="mb-2.5 lg:text-5.5xl md:text-4.6xl text-3.4xl">Why choose Landinger?</h2>
                <p class="text-base mb-2.5">Discover how Landinger can transform your business operations with our innovative features. </p>
            </div>

            <div class="grid md:grid-cols-3 lg:gap-15 md:gap-5  gap-5">
                <div data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <div class="bg-body-bg lg:p-10 md:p-5 p-5 rounded-2xl">
                        <div class="flex lg:gap-20 md:gap-10 md:flex-col flex-col gap-5">
                            <div class="size-17.5 bg-dark rounded-full inline-flex items-center justify-center">
                                <i class="iconify solar--bolt-linear size-7 text-primary"></i>
                            </div>
                            <div>
                                <h3 class="text-1.5xl mb-2.5">Comprehensive analytics</h3>
                                <p>Gain deep insights into your business performance.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <div class="bg-body-bg lg:p-10 md:p-5 p-5 rounded-2xl">
                        <div class="flex lg:gap-20 md:gap-10 md:flex-col flex-col  gap-5">
                            <div class="size-17.5  bg-dark rounded-full inline-flex items-center justify-center">
                                <i class="iconify solar--lightbulb-outline size-7 text-primary"></i>
                            </div>
                            <div>
                                <h3 class="text-1.5xl mb-2.5">Seamless Integrations </h3>
                                <p>Gain deep insights into your business performance.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <div class="bg-body-bg lg:p-10 md:p-5 p-5 rounded-2xl">
                        <div class="flex lg:gap-20 md:gap-10 md:flex-col flex-col  gap-5">
                            <div class="size-17.5  bg-dark rounded-full inline-flex items-center justify-center">
                                <i class="iconify tabler--circle-check size-7 text-primary"></i>
                            </div>
                            <div>
                                <h3 class="text-1.5xl mb-2.5">Advanced security </h3>
                                <p>It is a long established fact that a reader will be distracted. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Card Two Section  -->
    <section class="bg-white lg:py-25 md:py-22.5 py-17.5">
        <div class="container">
            <div class="grid md:grid-cols-2 lg:gap-7.5 md:gap-5 gap-5">
                <div data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <div class="bg-body-bg lg:p-10 p-5 rounded-2xl flex gap-7.5 flex-col">
                        <div>
                            <h2 class="mb-2.5 lg:text-4xl md:text-3.4xl text-2.6xl ">Scalable infrastructure for growing businesses </h2>
                            <p class="text-base mb-2.5 ">Seamlessly expand your operations without compromising performance or reliability, ensuring. </p>
                        </div>

                        <img src="/images/element/10.svg" alt="" class="rounded-2xl">
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-delay="150" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <div class="bg-primary lg:p-10 p-5 rounded-2xl flex gap-7.5 flex-col">
                        <div>
                            <h2 class="mb-2.5 lg:text-4xl md:text-3.4xl text-2.6xl ">Customizable email templates and notifications </h2>
                            <p class="text-base mb-2.5 ">Elevate your communication with customizable email templates and notifications. </p>
                        </div>

                        <img src="/images/element/11.svg" alt="" class="rounded-2xl">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Card Three Section  -->
    <section class="bg-white lg:py-25 md:py-22.5 py-17.5">
        <div class="container">
            <div class="grid md:grid-cols-3 lg:gap-7.5 md:gap-5 gap-5">
                <div data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <div class="bg-body-bg p-5 flex gap-7.5 flex-col rounded-2xl h-full">
                        <h2 class="lg:text-2.6xl text-1.5xl text-center">Customizable workflows</h2>
                        <img src="/images/element/12.svg" alt="" class="rounded-2xl">
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-delay="150" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <div class="bg-primary p-5 flex gap-7.5 flex-col rounded-2xl h-full">
                        <img src="/images/element/13.svg" alt="" class="rounded-2xl">
                        <h2 class="lg:text-2.6xl text-1.5xl  text-center">Adaptive learning </h2>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <div class="bg-dark p-5 flex gap-7.5 flex-col rounded-2xl h-full">
                        <h2 class="lg:text-2.6xl text-1.5xl text-center text-white">Instant collaboration </h2>
                        <img src="/images/element/14.jpg" alt="" class="rounded-2xl">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    @vite(['resources/js/testi-swiper.js'])
@endsection