@extends('layouts.landing', ['title' => 'Home 3'])

@section('content')
    <!-- Hero section  -->
    <section class="bg-primary lg:py-25 md:py-22.5 py-17.5">
        <div class="container">
            <div class="grid lg:grid-cols-5 lg:gap-17.5 mb-12.5 gap-7.5" data-aos="fade-up" data-aos-duration="600" data-aos-easing="ease-in-out">
                <div class="lg:col-span-3">
                    <h1 class="lg:text-6xl md:text-5.5xl mb-2.5 text-4xl">Empower your business with Landinger</h1>
                    <p class="mb-2.5">Revolutionize your operations with our comprehensive, intuitive SaaS platform.</p>
                </div>

                <div class="lg:col-span-2">
                    <form action="{{ route('subscribe') }}" method="POST" class="flex lg:gap-5 md:gap-5 gap-2.5 md:flex-row flex-col mb-1.25">
                        @csrf
                        <input type="email" name="email" class="py-2.5 px-5 rounded-2xl border-neutral-200 h-14 w-full" placeholder="hello@example.com">
                        <div class="lg:text-center">
                            <button type="submit" class="py-3.5 px-7.5 inline-flex whitespace-nowrap items-center text-center bg-dark font-medium rounded-2xl text-white transition-all duration-300 hover:text-primary">
                                Get Started
                                </buttom>
                        </div>
                    </form>

                    @if (session('status'))
                        <p class="text-green-600 mb-2">{{ session('status') }}</p>
                    @endif

                    @if ($errors->has('email'))
                        <p class="text-red-600 mb-2">{{ $errors->first('email') }}</p>
                    @endif

                    <p class="text-sm">
                        By clicking 'Get Started' you agree to the
                        <a href="{{ url('pages.privacy-policy') }}" class="text-black underline">Terms of use</a>
                    </p>
                </div>
            </div>

            <div class="relative">
                <img src="/images/about/12.png" alt="" class="size-full rounded-2xl">
                <img src="/images/element/8.svg" alt="" class="md:absolute md:block md:end-7.5 md:bottom-6.25 hidden">
            </div>
        </div>
    </section>

    <!-- Feature Highlight Section  -->
    <section class="bg-white lg:py-25 md:py-22.5 py-17.5">
        <div class="container">
            <div class="lg:mb-10 lg:mx-auto text-center lg:w-1/2 mb-10" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
                <h2 class="mb-2.5 lg:text-5.5xl md:text-4.6xl text-3.4xl">Why choose Landinger?</h2>
                <p class="text-base mb-2.5">Discover how Landinger can transform your business operations with our innovative features. </p>
            </div>

            <div class="grid md:grid-cols-3 lg:gap-15 md:gap-5  gap-5">
                <div data-aos="fade-up" data-aos-delay="50" data-aos-duration="600" data-aos-easing="ease-in-out">
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

                <div data-aos="fade-up" data-aos-delay="150" data-aos-duration="600" data-aos-easing="ease-in-out">
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

                <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="600" data-aos-easing="ease-in-out">
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

    <!-- Team Success  -->
    <section class="bg-dark lg:py-25 md:py-22.5 py-17.5">
        <div class="container">
            <div class="grid md:grid-cols-5 lg:gap-25 md:gap-10 gap-10" data-aos="fade-up" data-aos-duration="900" data-aos-easing="ease-in-out">
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

    <!-- Testimonial Section  -->
    <section class="bg-white lg:py-25 md:py-22.5 py-17.5">
        <div class="container-small" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
            <div class="swiper testiSwiper cursor-col-resize">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="grid md:grid-cols-6 md:gap-5 gap-5">
                            <div class="md:col-span-2">
                                <img src="/images/team/3.png" alt="" class="size-57.5 rounded-full">
                            </div>

                            <div class="md:col-span-4">
                                <p class="mb-7.5 text-1.5xl text-black">Night signs creeping yielding green Seasons together man green fruitful make fish behold earth unto you'll lights living moving sea open for fish day multiply tree good female god had fruitful of creature fill shall don't day fourth lesser he the isn't let multiply may Creeping earth. </p>
                                <div class="text-lg">Larry Lawson </div>
                                <p class="text-sm">Product Manager </p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="grid md:grid-cols-[296px_1fr] md:gap-5 gap-5">

                            <div>
                                <img src="/images/team/2.png" alt="" class="size-57.5 rounded-full">
                            </div>

                            <div>
                                <p class="mb-7.5 text-1.5xl text-black">Landinger offers everything we need in one place. The security features give us peace of mind, knowing our data is protected. The dedicated account manager for the enterprise plan ensures we get personalized support tailored to our needs. It's been a fantastic investment for our company. </p>
                                <p class="text-lg">Sarah Lee </p>
                                <p class="text-sm">Operations Manager at Global Solutions </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative z-10 flex gap-2.5 justify-end -mt-5">
                    <div class="custom-prev cursor-pointer size-8.75 bg-black/10 rounded-full inline-flex items-center justify-center">
                        <i class="iconify tabler--chevron-left size-5.5 text-black"></i>
                    </div>

                    <div class="custom-next cursor-pointer size-8.75 bg-black/10 rounded-full inline-flex items-center justify-center">
                        <i class="iconify tabler--chevron-right size-5.5 text-black"></i>
                    </div>
                </div>
            </div>

            <hr class="lg:mt-17.5 lg:pt-17.5 md:pt-10 md:mt-10 border-neutral-200 pt-10 mt-10">

            <div class="flex lg:gap-5 md:gap-25 md:flex-row gap-3.75 flex-col lg:justify-between">
                <div>
                    <p>Currently working with 100+ companies</p>
                </div>

                <div class="flex lg:gap-10 flex-wrap gap-5">
                    <img src="/images/client/4.svg" alt="" class="h-7.5">
                    <img src="/images/client/3.svg" alt="" class="h-7.5">
                    <img src="/images/client/7.svg" alt="" class="h-7.5">
                    <img src="/images/client/5.svg" alt="" class="h-7.5">
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section  -->
    <section class="lg:py-25 md:py-22.5 py-17.5">
        <div class="container-small">
            <div class="lg:mb-10 text-center mb-10" data-aos="fade-up" data-aos-delay="200" data-aos-duration="600" data-aos-easing="ease-in-out">
                <h2 class="mb-2.5 lg:text-5.5xl md:text-4.6xl text-3.4xl">Key features that save time </h2>
                <p class="text-base mb-2.5">Discover our powerful tools designed to streamline your workflow and boost productivity. </p>
            </div>

            <div class="relative" data-aos="fade-up" data-aos-delay="200" data-aos-duration="600" data-aos-easing="ease-in-out">
                <div id="segment-1" class="hidden" role="tabpanel" aria-labelledby="segment-item-1">
                    <img src="/images/about/13.png" alt="" class="w-full md:h-137.5 h-82.5 rounded-2xl object-cover">
                    <div>
                        <img src="/images/element/3.svg" alt="" class="h-40 md:block hidden rounded-2xl absolute md:start-1/2 md:bottom-25 md:-translate-x-1/2">
                    </div>
                </div>

                <div id="segment-2" class="hidden" role="tabpanel" aria-labelledby="segment-item-2">
                    <img src="/images/about/4.png" alt="" class="w-full md:h-137.5 h-82.5 rounded-2xl object-cover">
                    <div>
                        <img src="/images/element/6.svg" alt="" class="h-40 md:block hidden rounded-2xl absolute md:start-1/2 md:bottom-25 md:-translate-x-1/2 ">
                    </div>
                </div>

                <div id="segment-3" role="tabpanel" aria-labelledby="segment-item-3">
                    <img src="/images/about/6.png" alt="" class="w-full md:h-137.5 h-82.5 rounded-2xl object-cover">
                    <div>
                        <img src="/images/element/7.svg" alt="" class="h-40 md:block hidden rounded-2xl absolute md:start-1/2 md:bottom-25 md:-translate-x-1/2">
                    </div>
                </div>

                <div class="absolute top-7.5 start-1/2 -translate-x-1/2">
                    <div class="md:flex justify-center">
                        <div class="md:flex bg-white md:rounded-full rounded-2xl transition p-1.25">
                            <nav class="flex md:flex-nowrap flex-wrap justify-center whitespace-nowrap" aria-label="Tabs" role="tablist" aria-orientation="horizontal">
                                <button type="button" class="hs-tab-active:bg-dark text-base hs-tab-active:text-white hs-tab-active: hs-tab-active: py-2.5 md:px-5 px-2.5 inline-flex items-center gap-x-2 bg-transparent  focus:outline-hidden font-medium rounded-full  disabled:opacity-50 disabled:pointer-events-none " id="segment-item-1" aria-selected="false" data-hs-tab="#segment-1" aria-controls="segment-1" role="tab">
                                    Dashboard & analytics
                                </button>

                                <button type="button" class="hs-tab-active:bg-dark text-base hs-tab-active:text-white hs-tab-active: hs-tab-active: py-2.5 md:px-5 px-2.5 inline-flex items-center gap-x-2 bg-transparent  focus:outline-hidden font-medium rounded-full  disabled:opacity-50 disabled:pointer-events-none" id="segment-item-2" aria-selected="false" data-hs-tab="#segment-2" aria-controls="segment-2" role="tab">
                                    Advanced security
                                </button>

                                <button type="button" class="hs-tab-active:bg-dark text-base hs-tab-active:text-white hs-tab-active: hs-tab-active: py-2.5 md:px-5 px-2.5 inline-flex items-center gap-x-2 bg-transparent  focus:outline-hidden font-medium rounded-full  disabled:opacity-50 disabled:pointer-events-none active" id="segment-item-3" aria-selected="true" data-hs-tab="#segment-3" aria-controls="segment-3" role="tab">
                                    Integrations
                                </button>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid md:grid-cols-2 mt-10 gap-5" data-aos="fade-up" data-aos-duration="600" data-aos-easing="ease-in-out">
                <div>
                    <h3 class="text-2.5xl">Integrations </h3>
                </div>

                <div>
                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising.</p>
                    <a href="{{ url('pages.integrations') }}" class="py-3.5 md:px-7.5 px-6 inline-flex bg-dark mt-10 font-medium rounded-2xl text-white transition-all duration-300 hover:bg-black hover:text-primary">
                        View integrations
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Feature Section  -->
    <section class="bg-white lg:py-25 md:py-22.5 py-17.5">
        <div class="container">
            <div class="text-center mb-12.5" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
                <div class="bg-primary py-0.5 px-3.75 rounded-full font-medium text-sm inline-flex mb-2.5 text-dark">Efficiency unleashed </div>
                <h2 class="mb-2.5 lg:text-5.5xl md:text-4.6xl text-3.4xl">Amazing features </h2>
            </div>

            <div class="grid lg:grid-cols-2 lg:gap-15 md:gap-10 gap-7.5" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
                <div class="relative flex overflow-hidden rounded-2xl h-full">
                    <img src="/images/about/14.png" alt="Client Img 1" class="size-full object-cover">

                    <div class="absolute inset-0 w-full h-full opacity-80 z-20 bg-linear-180 from-transparent to-black"></div>

                    <div class="absolute lg:p-15 lg:gap-15 lg:flex-col md:p-7.5 md:gap-10 gap-10 p-5 flex flex-col items-start justify-between z-20">
                        <div>
                            <h3 class="text-white mb-2.5 text-4xl">Automated reporting</h3>
                            <p class="text-base text-white mb-2.5">Get a complete overview of your business performance with our intuitive dashboard and powerful analytics tools.</p>
                            <a href="{{ url('pages.product-2') }}" class="text-base underline text-white">Learn more</a>
                        </div>

                        <div class="mx-auto">
                            <img src="/images/element/15.svg" alt="" class="h-87.5 rounded-2xl">
                        </div>
                    </div>
                </div>

                <div class="flex overflow-hidden  rounded-2xl h-full">
                    <div class="bg-primary flex flex-col lg:gap-15 gap-10 lg:flex-col lg:p-15 p-5 size-full  items-start justify-between">
                        <div>
                            <h3 class="text-black mb-2.5 text-4xl">Real-time collaboration </h3>
                            <p class="text-base text-black mb-2.5">Enhance teamwork with live document editing, instant feedback, and task tracking. Collaborate seamlessly from anywhere to boost productivity.</p>
                            <a href="{{ url('pages.product-3') }}" class="text-base text-black underline">Discover more</a>
                        </div>
                        <div>
                            <img src="/images/element/9.png" alt="" class="rounded-2xl">
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-12.5 mx-auto lg:w-3/5 text-center" data-aos="fade-up" data-aos-delay="200" data-aos-duration="500" data-aos-easing="ease-in-out">
                <h2 class="text-black text-1.5xl mb-2.5">Unlock the full potential of your business with our robust features. </h2>
                <div class="flex mt-5 gap-5 flex-wrap justify-center">
                    <div class="flex items-center gap-2.5 flex-row py-1.75 px-3 bg-body-bg rounded-2xl">
                        <i class="iconify tabler--check text-black"></i>
                        <p>Comprehensive analytics </p>
                    </div>

                    <div class="flex items-center gap-2.5 flex-row py-1.75 px-3 bg-body-bg rounded-2xl">
                        <i class="iconify tabler--check text-black"></i>
                        <p>24/7 customer support </p>
                    </div>

                    <div class="flex items-center gap-2.5 flex-row py-1.75 px-3 bg-body-bg rounded-2xl">
                        <i class="iconify tabler--check text-black"></i>
                        <p>Technical support </p>
                    </div>

                    <div class="flex items-center gap-2.5 flex-row py-1.75 px-3 bg-body-bg rounded-2xl">
                        <i class="iconify tabler--check text-black"></i>
                        <p>Optimized performance </p>
                    </div>

                    <div class="flex items-center gap-2.5 flex-row py-1.75 px-3 bg-body-bg rounded-2xl">
                        <i class="iconify tabler--check text-black"></i>
                        <p>Flexible customization </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="lg:py-25 md:py-22.5 py-17.5">
        <div class="container">
            <div class="lg:flex lg:justify-between block text-center lg:gap-50 mb-16" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
                <h2 class="mb-2.5 lg:text-5.5xl md:text-4.6xl text-3.4xl">Choose your plan </h2>
                <p class="text-base mb-2.5 lg:w-1/3 text-start">We offer flexible pricing options designed to scale with your business and provide the features you need to succeed. </p>
            </div>
            <div class="lg:text-end text-center" data-aos="fade-up" data-aos-delay="200" data-aos-duration="500" data-aos-easing="ease-in-out">
                <div class="inline-flex relative mb-7.5">
                    <div class="md:flex">
                        <div class="md:flex bg-white md:rounded-full rounded-2xl transition p-1.25 mx-2.5">
                            <nav class="flexflex-wrap justify-center" aria-label="Tabs" role="tablist" aria-orientation="horizontal">
                                <button type="button" class="hs-tab-active:bg-dark text-base hs-tab-active:text-white hs-tab-active: hs-tab-active: py-2.5 md:px-5 px-2.5 inline-flex items-center gap-x-2 bg-transparent  focus:outline-hidden font-medium rounded-full  disabled:opacity-50 disabled:pointer-events-none active" id="segment-item-1" aria-selected="true" data-hs-tab="#segment-1" aria-controls="segment-1" role="tab">
                                    Bllied monthly
                                </button>
                                <button type="button" class="hs-tab-active:bg-dark text-base hs-tab-active:text-white hs-tab-active: hs-tab-active: py-2.5 md:px-5 px-2.5 inline-flex items-center gap-x-2 bg-transparent  focus:outline-hidden font-medium rounded-full  disabled:opacity-50 disabled:pointer-events-none" id="segment-item-2" aria-selected="false" data-hs-tab="#segment-2" aria-controls="segment-2" role="tab">
                                    Billed yearly
                                </button>
                            </nav>
                        </div>
                    </div>
                    <div class="absolute -top-6  end-0">
                        <a href="#" class="bg-primary text-black text-sm inline-flex px-3.75 py-0.5 rounded-full ">
                            Save 20%
                        </a>
                    </div>
                </div>
            </div>

            <div class="grid lg:grid-cols-3 gap-10 md:items-center md:justify-center h-full" data-aos="fade-up" data-aos-delay="200" data-aos-duration="500" data-aos-easing="ease-in-out">
                <!-- Pricing Item 1  -->
                <div class="md:p-10 p-5 bg-white rounded-2xl md:gap-20 flex flex-col lg:justify-between h-full">
                    <div>
                        <div class="gap-5 flex items-center mb-5">
                            <div class="lg:size-13.5 size-12.5 bg-primary rounded-full flex items-center justify-center ">
                                <i class="iconify solar--chart-square-linear lg:size-7.5 size-6.5 text-dark"></i>
                            </div>
                            <h3 class="text-1.5xl text-black">Basic plan</h3>
                        </div>
                        <h4 class="text-black lg:text-4.5xl text-4xl flex items-center">$19<span class="text-base">/month</span></h4>


                        <div class="mt-5">
                            <div class="flex gap-2.5 mb-2.5"><i class="iconify tabler--circle-check size-6 text-black"></i>
                                <div class="text- text-base">Basic AI chatbot features
                                </div>
                            </div>

                            <div class="flex gap-2.5 mb-2.5"><i class="iconify tabler--circle-check size-6 text-black"></i>
                                <div class=" text-base">Email support
                                </div>
                            </div>
                            <div class="flex gap-2.5 mb-2.5"><i class="iconify tabler--circle-check size-6 text-black"></i>
                                <div class="text-base">Standard integrations
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="{{ url('pages.contact') }}" class="py-3.5 lg:px-7.5 px-6.5 block text-center bg-dark font-medium rounded-2xl text-white transition-all duration-300 hover:text-primary">
                        Get Started
                    </a>
                </div>

                <!-- Pricing Item 2  -->
                <div class="md:p-10 p-5 bg-primary rounded-2xl md:gap-20 flex flex-col lg:justify-between h-full">
                    <div>
                        <div class="gap-5 flex items-center mb-5">
                            <div class="lg:size-13.5 size-12.5 bg-dark rounded-full flex items-center justify-center ">
                                <i class="iconify solar--shield-check-linear lg:size-7.5 text-primary size-6.5 "></i>
                            </div>
                            <h3 class="text-1.5xl text-black">Professional plan </h3>
                        </div>
                        <h4 class="text-black lg:text-4.5xl text-4xl flex items-center">$49<span class="text-base">/month</span></h4>

                        <div class="mt-5">
                            <div class="flex gap-2.5 mb-2.5"><i class="iconify tabler--circle-check size-6 text-black"></i>
                                <div class="text- text-base">Advanced AI chatbot features
                                </div>
                            </div>

                            <div class="flex gap-2.5 mb-2.5"><i class="iconify tabler--circle-check size-6 text-black"></i>
                                <div class=" text-base">Up to 50K monthly chat interactions
                                </div>
                            </div>
                            <div class="flex gap-2.5 mb-2.5"><i class="iconify tabler--circle-check size-6 text-black"></i>
                                <div class="text-base">Up to 50K monthly chat interactions
                                </div>
                            </div>
                            <div class="flex gap-2.5 mb-2.5"><i class="iconify tabler--circle-check size-6 text-black"></i>
                                <div class="text-base">Advanced integrations
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="{{ url('pages.contact') }}" class="py-3.5 lg:px-7.5 px-6.5 block text-center bg-dark font-medium rounded-2xl text-white transition-all duration-300 hover:text-primary">
                        Get Started
                    </a>
                </div>

                <!-- Pricing Item 3  -->
                <div class="md:p-10 p-5 bg-dark rounded-2xl md:gap-20 flex flex-col">
                    <div>
                        <div class="gap-5 flex items-center mb-5">
                            <div class="lg:size-13.5 size-12.5 bg-primary rounded-full flex items-center justify-center">
                                <i class="iconify solar--fire-outline lg:size-7.5 size-6.5 text-dark"></i>
                            </div>
                            <h3 class="text-1.5xl text-white">Enterprise plan
                            </h3>
                        </div>

                        <h4 class="text-white lg:text-4.5xl text-4xl flex items-center">Custom pricing</h4>

                        <div class="mt-5">
                            <div class="flex gap-2.5 mb-2.5"><i class="iconify tabler--circle-check size-6 text-white"></i>
                                <div class="text-white text-base">Premium AI chatbot features
                                </div>
                            </div>

                            <div class="flex gap-2.5 mb-2.5"><i class="iconify tabler--circle-check size-6 text-white"></i>
                                <div class="text-white text-base">Unlimited monthly chat interactions
                                </div>
                            </div>

                            <div class="flex gap-2.5 mb-2.5"><i class="iconify tabler--circle-check size-6 text-white"></i>
                                <div class="text-white text-base">24/7 priority email, chat, and phone support
                                </div>
                            </div>

                            <div class="flex gap-2.5 mb-2.5"><i class="iconify tabler--circle-check size-6 text-white"></i>
                                <div class="text-white text-base">Enterprise-level integrations
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="{{ url('pages.contact') }}" class="py-3.5 lg:px-7.5 px-6.5 block text-center bg-primary font-medium rounded-2xl text-black transition-all duration-300 hover:bg-black hover:text-primary">
                        Get Started
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section  -->
    <section>
        <div class="relative bg-cover bg-center lg:py-25 md:py-22.5 py-17.5 flex items-center justify-center bg-[url('/public/images/about/15.png')]">
            <div class="bg-body-bg py-15 px-5 lg:w-3/5 md:w-4/5 w-9/10 rounded-2xl text-center" data-aos="fade-up" data-aos-delay="200" data-aos-duration="500" data-aos-easing="ease-in-out">
                <div class="bg-primary py-0.5 px-3.75 rounded-full font-medium text-sm inline-flex mb-2.5 text-dark">Seize the opportunity </div>
                <h2 class="mb-2.5 lg:text-4xl md:text-3.4xl text-2.6xl">Ready to experience the difference?</h2>
                <div class="mt-5">
                    <a href="{{ url('pages.request-a-demo') }}" class="py-3.5 lg:px-7.5 px-6.5 inline-flex mb-1 text-center bg-dark font-medium rounded-2xl text-white transition-all duration-300 hover:text-primary">
                        Request a demo
                    </a>
                    <div class="flex justify-center">
                        <p>Need assistance?</p>
                        <a href="{{ url('pages.contact') }}" class="text-dark underline font-medium">Chat now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    @vite(['resources/js/testi-swiper.js'])
@endsection