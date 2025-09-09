@extends('layouts.landing', ['title' => 'Product 2'])

@section('content')
    <!-- Product Review Section  -->
    <section class="bg-white lg:py-25 pt-12.5 md:pb-22.5 pb-17.5">
        <div class="container">
            <div class="flex justify-center items-center md:gap-5 md:flex-row gap-2.5 flex-col mb-7.5" data-aos="fade-up" data-aos-delay="150" data-aos-duration="600" data-aos-easing="ease-in-out">
                <div class="flex">
                    <img src="/images/team/1.png" alt="" class="size-10 rounded-full">
                    <img src="/images/team/2.png" alt="" class="size-10 rounded-full -ms-2.5">
                    <img src="/images/team/4.png" alt="" class="size-10 rounded-full -ms-2.5">
                    <img src="/images/team/5.png" alt="" class="size-10 rounded-full -ms-2.5">
                </div>

                <div class="flex justify-center items-center gap-1.25">
                    <div>Happy customer</div>
                    <i class="iconify tabler--star-filled text-yellow-400"></i>
                    <div>4.5 (Reviews)</div>
                </div>
            </div>

            <div class="lg:mb-12.5 md:mb-10 mb-7.5 lg:mx-auto text-center lg:w-1/2" data-aos="fade-up" data-aos-delay="150" data-aos-duration="600" data-aos-easing="ease-in-out">
                <h1 class="lg:text-6xl md:text-5.5xl text-4xl mb-2.5">Automated task scheduling and workflow</h1>
                <p class="mb-2.5">Streamline your workflow with automated task scheduling. Effortlessly manage your tasks and optimize productivity.</p>
            </div>

            <div class="flex md:gap-5 gap-2.5 md:flex-row flex-col items-center justify-center">
                <div>
                    <a href="{{ url('account.sign-up') }}" class="py-3.5 md:px-7.5 px-6.5 inline-flex items-center text-center bg-dark font-medium rounded-2xl text-white transition-all duration-300 hover:text-primary">
                        Get started
                    </a>
                </div>

                <div>
                    <a href="{{ url('pages.request-a-demo') }}" class="py-3.5 md:px-7.5 px-6.5 inline-flex items-center text-center bg-primary font-medium rounded-2xl text-black transition-all duration-300 hover:text-primary hover:bg-black">
                        Request a demo
                    </a>
                </div>
            </div>

            <div class="md:mt-15 lg:p-12.5 mt-10 p-5 bg-body-bg rounded-2xl">
                <img src="/images/about/10.png" alt="" class="rounded-2xl">
            </div>
        </div>
    </section>

    <!-- Client Section  -->
    <section class="bg-white">
        <div class="container">
            <div class="mx-auto text-center lg:w-3/5" data-aos="fade-up" data-aos-delay="150" data-aos-duration="600" data-aos-easing="ease-in-out">
                <div class="md:mb-10 mb-7.5">
                    <h1 class="lg:text-5.5xl md:text-4.6xl text-3.4xl mb-2.5">Our clients </h1>
                </div>

                <div class="flex md:gap-7.5 gap-5 md:pb-10 pb-5 flex-wrap justify-center">
                    <!-- Cient 1  -->
                    <img src="/images/client/3.svg" alt="" class="h-7.5">

                    <!-- Cient 2  -->
                    <img src="/images/client/4.svg" alt="" class="h-7.5">

                    <!-- Cient 3  -->
                    <img src="/images/client/5.svg" alt="" class="h-7.5">

                    <!-- Cient 4  -->
                    <img src="/images/client/11.svg" alt="" class="h-7.5">

                    <!-- Cient 5  -->
                    <img src="/images/client/7.svg" alt="" class="h-7.5">

                    <!-- Cient 6  -->
                    <img src="/images/client/9.svg" alt="" class="h-7.5">

                    <!-- Cient 7  -->
                    <img src="/images/client/8.svg" alt="" class="h-7.5">

                    <!-- Cient 8  -->
                    <img src="/images/client/10.svg" alt="" class="h-7.5">

                    <!-- Cient 9  -->
                    <img src="/images/client/6.svg" alt="" class="h-7.5">
                </div>
            </div>
        </div>
    </section>

    <!-- Customer Support and Ticketing System Section  -->
    <section class="bg-white lg:py-25 md:py-22.5 pt-17.5">
        <div class="container">
            <div class="grid md:grid-cols-2 lg:gap-25 md:gap-7.5 gap-10">
                <div data-aos="fade-right" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <div class="lg:mb-12.5 md:mb-10 mb-6.5">
                        <h2 class="mb-2.5 lg:text-5.5xl md:text-4.6xl text-3.4xl ">Customer support and ticketing system </h2>
                        <p class="text-base mb-2.5">Gain valuable insights with our powerful analytics tools. </p>
                    </div>

                    <div class="flex gap-3.75 flex-col mb-9">
                        <div class="flex  items-center gap-2.5">
                            <i class="iconify tabler--circle-check size-6 text-black"></i>
                            <div>Improved usability </div>
                        </div>

                        <div class="flex  items-center gap-2.5">
                            <i class="iconify tabler--circle-check size-6 text-black"></i>
                            <div>Quick learning curve </div>
                        </div>

                        <div class="flex  items-center gap-2.5">
                            <i class="iconify tabler--circle-check size-6 text-black"></i>
                            <div>Reduced onboarding time </div>
                        </div>
                    </div>

                    <div>
                        <a href="{{ url('pages.pricing-3') }}" class="py-3.5 md:px-7.5 px-6.5 inline-flex items-center text-center bg-dark font-medium rounded-2xl text-white transition-all duration-300 hover:text-primary">
                            Explore features
                        </a>
                    </div>
                </div>

                <div class="relative" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <img src="/images/about/4.png" alt="" class="size-full rounded-2xl object-cover">
                    <img src="/images/element/6.svg" alt="" class="md:absolute md:w-62.5 md:rounded-2xl md:-bottom-5 md:-start-5 md:border border-neutral-200 md:block hidden">
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section  -->
    <section class="bg-white lg:py-25 md:py-22.5 py-17.5">
        <div class="container">
            <div class="text-center lg:w-1/2 md:mb-10 mb-7.5 lg:mx-auto" data-aos="fade-up" data-aos-delay="150" data-aos-duration="600" data-aos-easing="ease-in-out">
                <h2 class="lg:text-5.5xl md:text-4.6xl text-3.4xl mb-2.5">What our users say</h2>
            </div>

            <div class="swiper testiSwiper" data-aos="fade-up" data-aos-delay="150" data-aos-duration="600" data-aos-easing="ease-in-out">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="text-center">
                            <p class="lg:text-2.6xl md:text-2xl text-lg text-black mb-10 text-center mx-auto leading-[1.4] lg:w-3/5 md:w-4/5">For who thoroughly her boy estimating conviction. Removed demands expense account in outward tedious do.</p>
                        </div>

                        <div class="text-center">
                            <div class="mb-1.25 text-xl text-black">Louis Crawford</div>
                            <p class="text-sm">Operations Manager</p>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="text-center">
                            <p class="lg:text-2.6xl md:text-2xl text-lg text-black mb-10 text-center mx-auto leading-[1.4] lg:w-3/5 md:w-4/5">He moonlights difficult engrossed it, sportsmen. Interested has all Devonshire difficulty gay assistance joy. </p>
                        </div>

                        <div class="text-center">
                            <div class="mb-1.25 text-xl text-black">Amanda Reed </div>
                            <p class="text-sm">Founder </p>
                        </div>
                    </div>
                </div>

                <div class="relative z-10 flex gap-2.5 justify-end">
                    <div class="-mt-30 custom-prev cursor-pointer size-8.75 bg-neutral-200 rounded-full inline-flex items-center justify-center end-auto absolute inset-0 ">
                        <i class="iconify tabler--chevron-left size-5.5 text-black"></i>
                    </div>

                    <div class="-mt-30 custom-next cursor-pointer size-8.75 bg-neutral-200 rounded-full inline-flex items-center start-auto justify-center">
                        <i class="iconify tabler--chevron-right size-5.5 text-black"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Feature Section -->
    <section class="bg-body-bg lg:py-25 md:py-22.5 py-17.5">
        <div class="container">
            <div class="text-center lg:w-1/2 md:mb-10 mb-7.5 lg:mx-auto" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
                <h2 class="lg:text-5.5xl md:text-4.6xl text-3.4xl mb-2.5">Experience our feature collection </h2>
                <p class="mb-2.5">Streamline your workflow with automated task scheduling. Effortlessly manage your tasks and optimize productivity.</p>
            </div>
            <div class="grid md:grid-cols-3 lg:gap-7.5 md:gap-5 gap-5">

                <!-- Feature Item 1  -->
                <div class="text-center" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <div class="bg-white lg:p-10 p-3.5 rounded-2xl h-full">
                        <div class="size-12.5 mb-5 bg-primary rounded-full inline-flex items-center justify-center">
                            <i class="iconify solar--chart-square-linear size-6 text-black"></i>
                        </div>

                        <h3 class="mb-2.5 lg:text-1.5xl text-xl"> Cloud storage </h3>
                        <p class="mb-2.5">Tailor our platform to meet your unique business needs.</p>
                    </div>
                </div>

                <!-- Feature Item 2  -->
                <div class="text-center" data-aos="fade-up" data-aos-delay="150" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <div class="bg-white  lg:p-10 p-3.5 rounded-2xl h-full">
                        <div class="size-12.5 mb-5 bg-primary rounded-full inline-flex items-center justify-center">
                            <i class="iconify solar--bolt-linear  size-6 text-black"></i>
                        </div>

                        <h3 class="mb-2.5 lg:text-1.5xl text-xl">Advanced reporting</h3>
                        <p class="mb-2.5">It is a long established fact that a reader will. </p>
                    </div>
                </div>

                <!-- Feature Item 3  -->
                <div class="text-center" data-aos="fade-up" data-aos-delay="200" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <div class="bg-white  lg:p-10 p-3.5 rounded-2xl h-full">
                        <div class="size-12.5 mb-5 bg-primary rounded-full inline-flex items-center justify-center">
                            <i class="iconify solar--sale-linear size-6 text-black"></i>
                        </div>

                        <h3 class="mb-2.5  lg:text-1.5xl text-xl"> Email marketing </h3>
                        <p class="mb-2.5">Required his you put the outlived answered position. </p>
                    </div>
                </div>

                <!-- Feature Item 4  -->
                <div class="text-center h-full" data-aos="fade-up" data-aos-delay="250" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <div class="bg-white lg:p-10 p-3.5 rounded-2xl h-full">
                        <div class="size-12.5 mb-5 bg-primary rounded-full inline-flex items-center justify-center">
                            <i class="iconify solar--fire-outline size-6 text-black"></i>
                        </div>

                        <h3 class="mb-2.5  lg:text-1.5xl text-xl"> Data visualization </h3>
                        <p class="mb-2.5">Contrary to popular belief, Lorem Ipsum is not simply. </p>
                    </div>
                </div>

                <!-- Feature Item 5  -->
                <div class="text-center" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <div class="bg-white lg:p-10 p-3.5  rounded-2xl h-full">
                        <div class="size-12.5 mb-5 bg-primary rounded-full inline-flex items-center justify-center">
                            <i class="iconify solar--headphones-round-outline size-6 text-black"></i>
                        </div>

                        <h3 class="mb-2.5  lg:text-1.5xl text-xl"> Real-time collaboration </h3>
                        <p class="mb-2.5">Saw met applauded favorite deficient engrossed. </p>
                    </div>
                </div>

                <!-- Feature Item 6  -->
                <div class="text-center" data-aos="fade-up" data-aos-delay="350" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <div class="bg-white lg:p-10 p-3.5  rounded-2xl h-full">
                        <div class="size-12.5 mb-5 bg-primary rounded-full inline-flex items-center justify-center">
                            <i class="iconify tabler--video size-6 text-black"></i>
                        </div>

                        <h3 class="mb-2.5  lg:text-1.5xl text-xl">Secure data encryption </h3>
                        <p class="mb-2.5">The point of using Lorem Ipsum is that it has a more-or-less. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Productivity Feature Highlights Section  -->
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