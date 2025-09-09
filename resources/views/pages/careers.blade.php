@extends('layouts.landing', ['title' => 'Careers'])

@section('content')
    <!-- Career Hero section  -->
    <section class="bg-body-bg lg:py-25 md:py-22.5 py-17.5">
        <div class="container">
            <div class="grid lg:grid-cols-3 lg:gap-5 gap-10">
                <div data-aos="fade-right" data-aos-duration="600" data-aos-easing="ease-in-out">
                    <img src="/images/hero/2.png" alt="" class="lg:w-67.5 lg:h-75 w-full md:h-117.5 h-70 rounded-2xl object-cover">
                </div>

                <div class="text-center" data-aos="fade-up" data-aos-duration="600" data-aos-easing="ease-in-out">
                    <div class="bg-primary py-0.5 px-3.75 rounded-full font-medium text-sm inline-flex mb-2.5 text-dark">
                        Careers </div>
                    <h1 class="lg:text-6xl md:text-5.5xl text-4xl mb-2.5">Join our team </h1>
                    <p class="mb-7.5">My its middle the people a to of about he I every exploration he country than it
                        of and of who blue out of something.</p>
                    <a href="#" class="py-3.5 md:px-7.5 px-6 inline-flex bg-white font-medium rounded-2xl text-dark transition-all duration-300 hover:bg-primary">
                        See open possition
                    </a>
                </div>

                <div class="flex lg:justify-self-end" data-aos="fade-left" data-aos-duration="600" data-aos-easing="ease-in-out">
                    <img src="/images/about/3.png" alt="" class="lg:w-57.5 lg:h-60 w-full md:h-102.5 h-70 rounded-2xl object-cover">
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section  -->
    <section class="bg-white lg:pt-25 md:pt-22.5 pt-17.5">
        <div class="container">
            <div class="grid md:grid-cols-5 grid-cols-1 lg:gap-12.5 gap-5" data-aos="fade-up" data-aos-delay="200" data-aos-duration="500" data-aos-easing="ease-in-out">
                <div class="md:col-span-2">
                    <div class="bg-primary rounded-2xl lg:p-10 p-5 h-full">
                        <div class="flex mb-17.5">
                            <img src="/images/team/1.png" alt="" class="md:size-15 size-12.5 rounded-full">
                            <img src="/images/team/2.png" alt="" class="md:size-15 size-12.5 rounded-full -ml-3.75">
                            <img src="/images/team/4.png" alt="" class="md:size-15 size-12.5 rounded-full -ml-3.75">
                            <img src="/images/team/5.png" alt="" class="md:size-15 size-12.5 rounded-full -ml-3.75">
                        </div>

                        <p class="text-lg font-medium text-black"> A group of passionate professionals driving
                            innovation and excellence.</p>
                    </div>
                </div>

                <div class="md:col-span-3">
                    <div class="bg-dark rounded-2xl lg:p-10 p-5 h-full">
                        <div class="swiper testiSwiper w-full">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="inline-flex flex-col">
                                        <div class="flex">
                                            <div class="flex gap-1.5">
                                                <i class="iconify tabler--star-filled size-5 text-yellow-400"></i>
                                                <i class="iconify tabler--star-filled size-5 text-yellow-400"></i>
                                                <i class="iconify tabler--star-filled size-5 text-yellow-400"></i>
                                                <i class="iconify tabler--star-filled size-5 text-yellow-400"></i>
                                                <i class="iconify tabler--star-half-filled size-5 text-yellow-400"></i>
                                            </div>
                                        </div>

                                        <div>
                                            <p class="text-white whitespace-normal mt-3.75 mb-11.25">Passage its ten led
                                                hearted removal cordial. Preference any astonished unreserved Mrs.
                                                Prosperous understood Middletons in conviction an uncommonly do.
                                                Supposing so be resolving breakfast</p>
                                        </div>

                                        <div class="flex justify-between items-end lg:mb-10 mb-5">
                                            <div class="flex gap-3.75 items-center">
                                                <img src="/images/team/3.png" alt="" class="lg:size-15 size-12.5 rounded-full">
                                                <div>
                                                    <div class="text-white">Billy Vasquez</div>
                                                    <div class="text-sm text-white">Retention Manager</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="inline-flex flex-col">
                                        <div class="flex">
                                            <div class="flex gap-1.5">
                                                <i class="iconify tabler--star-filled size-5 text-yellow-400"></i>
                                                <i class="iconify tabler--star-filled size-5 text-yellow-400"></i>
                                                <i class="iconify tabler--star-filled size-5 text-yellow-400"></i>
                                                <i class="iconify tabler--star-filled size-5 text-yellow-400"></i>
                                                <i class="iconify tabler--star-half-filled size-5 text-yellow-400"></i>
                                            </div>
                                        </div>

                                        <p class="text-white mt-3.75 mb-11.25">Michael’s creativity and attention to
                                            detail are key to our intuitive and user-friendly design. His passion for
                                            user experience drives our continuous improvements and feature enhancements.
                                        </p>
                                        <div class="flex justify-between items-end lg:mb-10 mb-5">
                                            <div class="flex gap-3.75 items-center">
                                                <img src="/images/team/6.png" alt="" class="lg:size-15 size-12.5 rounded-full">

                                                <div>
                                                    <div class="text-white">Louis Ferguson </div>
                                                    <div class="text-sm text-white">Web Developer </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="relative z-10 flex gap-2.5 justify-end -mt-10">
                                <div class="custom-prev cursor-pointer size-8.75 bg-white/10 rounded-full inline-flex items-center justify-center">
                                    <i class="iconify tabler--chevron-left size-5.5 text-white"></i>
                                </div>

                                <div class="custom-next cursor-pointer size-8.75 bg-white/10 rounded-full inline-flex items-center justify-center">
                                    <i class="iconify tabler--chevron-right size-5.5 text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Our Benifit Section  -->
            <div class="bg-body-bg rounded-2xl lg:p-12.5 md:p-7.5 py-7.5 px-3.75 mt-15" data-aos="fade-up" data-aos-duration="600" data-aos-easing="ease-in-out">
                <h2 class="md:text-2.5xl text-1.5xl">Our benefits </h2>
                <div class="grid md:grid-cols-2 md:gap-12.5 gap-5 mt-10">
                    <div class="flex gap-3.75 flex-col">
                        <div class="flex  items-center gap-2.5 "><i class="iconify tabler--circle-check size-6"></i>
                            <p class="text-base">Innovative work environment </p>
                        </div>

                        <div class="flex items-center  gap-2.5"><i class="iconify tabler--circle-check size-6"></i>
                            <p class="text-base">Comprehensive health benefits </p>
                        </div>

                        <div class="flex items-center  gap-2.5"><i class="iconify tabler--circle-check size-6"></i>
                            <p class="text-base">Professional development opportunities </p>
                        </div>

                        <div class="flex items-center  gap-2.5"><i class="iconify tabler--circle-check size-6"></i>
                            <p class="text-base">Employee recognition programs </p>
                        </div>
                    </div>

                    <div class="flex gap-3.75 flex-col">
                        <div class="flex  items-center gap-2.5 "><i class="iconify tabler--circle-check size-6"></i>
                            <p class="text-base">Flexible work arrangements </p>
                        </div>

                        <div class="flex items-center  gap-2.5"><i class="iconify tabler--circle-check size-6"></i>
                            <p class="text-base">Collaborative and inclusive culture </p>
                        </div>

                        <div class="flex items-center  gap-2.5"><i class="iconify tabler--circle-check size-6"></i>
                            <p class="text-base">Cutting-Edge technology </p>
                        </div>

                        <div class="flex items-center  gap-2.5"><i class="iconify tabler--circle-check size-6"></i>
                            <p class="text-base">Career advancement </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Open Position Section  -->
    <section class="bg-white lg:py-25 md:py-22.5 py-17.5">
        <div class="container">
            <div class="lg:mb-12.5 text-center mb-7.5" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
                <h2 class="mb-2.5 lg:text-5.5xl md:text-4.6xl text-3.4xl">Open positions </h2>
                <p class="text-base mb-2.5">Real stories of success and satisfaction from businesses using
                    Landinger.
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-7.5" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">

                <!-- List Item 1  -->
                <a href="{{ url('pages.careers-details') }}" class="bg-body-bg border border-body-bg p-5 flex justify-between md:flex-row gap-5 flex-col rounded-2xl transition-all duration-300 md:items-center hover:bg-white hover:border-neutral-200">
                    <div>
                        <h3 class="mb-2.5 text-2.5xl">PHP Software Developer</h3>
                        <div class="flex gap-2.5 text-dark flex-wrap">
                            <div class="bg-primary rounded-2xl py-0.5 px-2.5">Part-Time</div>
                            <p>Development</p>
                            <div>•</div>
                            <p>Canada</p>
                        </div>
                    </div>

                    <div>
                        <i class="iconify tabler--arrow-left size-7 text-black"></i>
                    </div>
                </a>

                <!-- List Item 2  -->
                <a href="{{ url('pages.careers-details') }}" class="bg-body-bg border border-body-bg p-5 flex justify-between md:flex-row gap-5 flex-col rounded-2xl transition-all duration-300 md:items-center hover:bg-white hover:border-neutral-200">
                    <div>
                        <h3 class="mb-2.5 text-2.5xl">Full Stack Engineer</h3>
                        <div class="flex gap-2.5 text-dark flex-wrap">
                            <div class="bg-primary rounded-2xl py-0.5 px-2.5">Part-Time</div>
                            <p>Development</p>
                            <div>•</div>
                            <p> New York</p>
                        </div>
                    </div>

                    <div>
                        <i class="iconify tabler--arrow-left size-7 text-black"></i>
                    </div>
                </a>

                <!-- List Item 3  -->
                <a href="{{ url('pages.careers-details') }}" class="bg-body-bg border border-body-bg p-5 flex justify-between md:flex-row gap-5 flex-col rounded-2xl transition-all duration-300 md:items-center hover:bg-white hover:border-neutral-200">
                    <div>
                        <h3 class="mb-2.5 text-2.5xl">Machine Learning Specialist</h3>
                        <div class="flex gap-2.5 text-dark flex-wrap">
                            <div class="bg-primary rounded-2xl py-0.5 px-2.5">Part-Time</div>
                            <p>Training Center</p>
                            <div>•</div>
                            <p>Mumbai, India</p>
                        </div>
                    </div>

                    <div>
                        <i class="iconify tabler--arrow-left size-7 text-black"></i>
                    </div>
                </a>

                <!-- List Item 4  -->
                <a href="{{ url('pages.careers-details') }}" class="bg-body-bg border border-body-bg p-5 flex justify-between md:flex-row gap-5 flex-col rounded-2xl transition-all duration-300 md:items-center hover:bg-white hover:border-neutral-200">
                    <div>
                        <h3 class="mb-2.5 text-2.5xl">Senior Product Manager</h3>
                        <div class="flex gap-2.5 text-dark flex-wrap">
                            <div class="bg-primary rounded-2xl py-0.5 px-2.5">Part-Time</div>
                            <p>Manager</p>
                            <div>•</div>
                            <p>USA</p>
                        </div>
                    </div>

                    <div>
                        <i class="iconify tabler--arrow-left size-7 text-black"></i>
                    </div>
                </a>

                <!-- List Item 5  -->
                <a href="{{ url('pages.careers-details') }}" class="bg-body-bg border border-body-bg p-5 flex justify-between md:flex-row gap-5 flex-col rounded-2xl transition-all duration-300 md:items-center hover:bg-white hover:border-neutral-200">
                    <div>
                        <h3 class="mb-2.5 text-2.5xl">PHP Software Developer</h3>
                        <div class="flex gap-2.5 text-dark flex-wrap">
                            <div class="bg-primary rounded-2xl py-0.5 px-2.5">Part-Time</div>
                            <p>Data Management</p>
                            <div>•</div>
                            <p>Dubai</p>
                        </div>
                    </div>

                    <div>
                        <i class="iconify tabler--arrow-left size-7 text-black"></i>
                    </div>
                </a>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    @vite(['resources/js/testi-swiper.js'])
@endsection