@extends('layouts.landing', ['title' => 'Product 3'])

@section('content')
    <!-- Hero Section  -->
    <section class="bg-white lg:py-25 md:py-22.5 pt-5 pb-17.5">
        <div class="container">
            <div class="grid md:grid-cols-2 lg:gap-12.5 md:gap-5 gap-7.5">
                <div class="flex justify-center md:gap-5 gap-2.5 flex-col" data-aos="fade-right" data-aos-delay="200" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <h1 class="lg:text-6xl md:text-5.5xl text-4xl mb-2.5">Empowering financial tools </h1>
                    <p class="mb-2.5 md:w-4/5">Discover a range of empowering financial tools designed to enhance your financial management. From budgeting and expense tracking to investment monitoring. </p>
                    <div class="flex lg:gap-5 gap-2.5 items-center">
                        <a href="{{ url('account.sign-up') }}" class="py-3.5 md:px-7.5 px-6.5 inline-flex items-center text-center bg-dark font-medium rounded-2xl text-white transition-all duration-300 hover:text-primary">
                            Try for free
                        </a>

                        <p>No credit card required </p>
                    </div>
                </div>

                <div class="relative" data-aos="fade-left" data-aos-delay="200" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <img src="/images/blog/2.png" alt="" class="rounded-2xl">
                    <img src="/images/element/7.svg" alt="" class="absolute lg:block border border-neutral-200 -bottom-7.5 -start-12.5 h-42.5 rounded-2xl hidden">
                </div>
            </div>
        </div>
    </section>

    <!-- Social Payments Management Section  -->
    <section class="bg-body-bg lg:py-25 md:py-22.5 py-17.5">
        <div class="container">
            <div class="grid lg:grid-cols-5 lg:gap-17.5 gap-7.5 mb-7.5" data-aos="fade-up" data-aos-duration="600" data-aos-easing="ease-in-out">
                <div class="lg:col-span-2">
                    <div class="flex justify-center md:gap-5 gap-2.5 flex-col">
                        <h1 class="lg:text-5.5xl md:text-4.6xl text-3.4xl mb-2.5">We measure social payments. </h1>
                        <p class="lg:mb-12.5 md:mb-5">Streamline your finances, track expenses, set budgets, and achieve your financial goals with ease. </p>
                        <div>
                            <a href="{{ url('pages.contact') }}" class="py-3.5 md:px-7.5 px-6.5 inline-flex items-center text-center bg-primary font-medium rounded-2xl text-black transition-all duration-300 hover:text-primary hover:bg-black">
                                Get started
                            </a>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-3">
                    <div class="overflow-hidden rounded-2xl lg:h-76 h-90 w-full relative">
                        <video id="myVideo" loop autoplay muted class="bg-[url('/public/images/video/video-bg.jpg')] object-cover bg-cover bg-[50%] flex w-full h-full absolute -inset-full m-auto -z-10">
                            <source src="http://coderthemes.com/landinger/video/video.mp4" type="video/mp4" class="object-bottom">
                            <source src="http://coderthemes.com/landinger/video/video.webm" type="video/webm" class="object-bottom">
                        </video>

                        <div class="absolute end-10 bottom-10">
                            <button id="toggleBtn" class="size-15 flex items-center justify-center bg-body-bg rounded-full">
                                <i class="iconify tabler--player-play-filled size-6 hidden" id="playIcon"></i>
                                <i class="iconify tabler--player-pause-filled size-6" id="pauseIcon"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid md:grid-cols-3 gap-5">
                <div data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <div class="bg-white lg:p-7.5 p-5 rounded-2xl flex flex-col lg:gap-25 md:gap-2.5 gap-7.5 h-full">
                        <div class="flex lg:items-center lg:gap-5 lg:flex-row md:gap-2.5 md:flex-col flex-col gap-2.5">
                            <i class="iconify solar--fire-outline lg:size-9 size-7.5 text-black"></i>
                            <h3 class="text-1.5xl"> Investment portfolio </h3>
                        </div>
                        <div>
                            <p>A collection of financial managed to achieve financial goals through strategic allocation and diversification. </p>
                        </div>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-delay="150" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <div class="bg-white lg:p-7.5 p-5 rounded-2xl flex flex-col lg:gap-25 md:gap-2.5 gap-7.5 h-full">
                        <div class="flex lg:items-center lg:gap-5 lg:flex-row md:gap-2.5 md:flex-col flex-col gap-2.5">
                            <i class="iconify tabler--video  lg:size-9 size-7.5 text-black"></i>
                            <h3 class="text-1.5xl"> Financial goal setting </h3>
                        </div>
                        <div>
                            <p>Financial goal setting involves identifying and prioritizing specific objectives, such as saving for retirement. </p>
                        </div>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <div class="bg-white lg:p-7.5 p-5 rounded-2xl flex flex-col lg:gap-25 md:gap-2.5 gap-7.5 h-full">
                        <div class="flex lg:items-center lg:gap-5 lg:flex-row md:gap-2.5 md:flex-col flex-col gap-2.5">
                            <i class="iconify solar--headphones-round-outline lg:size-9 size-7.5 text-black"></i>
                            <h3 class="text-1.5xl"> Bill payment reminders </h3>
                        </div>
                        <div>
                            <p>Automated notifications to ensure timely payment of bills, helping avoid late fees and maintain financial organization. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Counter Section  -->
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

    <!-- About Section  -->
    <section class="bg-dark lg:py-25 md:py-22.5 py-17.5">
        <div class="container">
            <div class="grid lg:grid-cols-2 lg:gap-20 md:gap-20 gap-5">
                <div class="bg-white rounded-2xl p-5" data-aos="fade-up" data-aos-duration="600" data-aos-easing="ease-in-out">
                    <div class="grid grid-cols-2 gap-5 items-center">
                        <div class="flex flex-col gap-5">
                            <img src="/images/element/3.svg" alt="" class="border border-neutral-200 rounded-2xl">
                            <img src="/images/element/6.svg" alt="" class="border border-neutral-200 rounded-2xl">
                        </div>
                        <div>
                            <img src="/images/element/1.svg" alt="" class="size-full">
                        </div>
                    </div>
                </div>

                <div class="flex gap-2.5 justify-center flex-col" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <h3 class="text-white lg:text-4.4xl md:text-4xl text-3xl mb-2.5">Strategic leadership for team efficiency</h3>
                    <p class="md:mb-7.5 mb-2.5 text-white">Explore effective strategies and practices for enhancing team efficiency through strategic leadership. Elevate your leadership skills to drive productivity and organizational success. </p>
                    <div class="grid md:grid-cols-2 gap-5 my-2.5">
                        <div class="flex gap-2.5 flex-col">
                            <div class="size-12.5 bg-primary rounded-full inline-flex items-center justify-center">
                                <i class="iconify tabler--settings size-6 text-black"></i>
                            </div>
                            <h3 class="mb-2.5  lg:text-1.5xl text-xl text-white">Easy to duplicate </h3>
                            <p class=" text-white">Simplify your workflow with easy-to-duplicate features, ensuring efficient replication of tasks and content. </p>
                        </div>

                        <div class="flex gap-2.5 flex-col">
                            <div class="size-12.5 bg-primary rounded-full inline-flex items-center justify-center">
                                <i class="iconify solar--chart-square-linear size-6 text-black"></i>
                            </div>
                            <h3 class="mb-2.5  lg:text-1.5xl text-xl text-white">Simplified replication </h3>
                            <p class=" text-white">Enhance productivity with streamlined replication features, allowing for effortless duplication. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section  -->
    <section class="bg-white lg:py-25 md:py-22.5 py-17.5">
        <div class="container">
            <div class="md:mb-12.5 text-center" data-aos="fade-up" data-aos-duration="600" data-aos-easing="ease-in-out">
                <h2 class="lg:text-5.5xl md:text-4.6xl text-3.4xl mb-2.5">Frequently asked questions </h2>
            </div>
            <div class="grid md:grid-cols-2 items-center gap-7.5">
                <div class="flex justify-center items-center" data-aos="fade-right" data-aos-delay="200" data-aos-duration="600" data-aos-easing="ease-in-out">
                    <img src="/images/team/4.png" alt="" class="rounded-2xl md:size-full">
                </div>

                <div data-aos="fade-left" data-aos-delay="200" data-aos-duration="600" data-aos-easing="ease-in-out">
                    <div class="md:space-y-7.5 space-y-5">
                        <!-- FAQ One -->
                        <div class="hs-accordion bg-body-bg p-5 rounded-2xl">
                            <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5">
                                <h3 class="text-start md:text-1.5xl text-xl">
                                    Can I cancel my subscription at any time?
                                </h3>

                                <div>
                                    <div class="bg-white hs-accordion-active:bg-primary size-7.5 rounded-full flex items-center justify-center">
                                        <i class="iconify tabler--plus size-5 block hs-accordion-active:hidden"></i>
                                        <i class="iconify tabler--minus size-5 hidden hs-accordion-active:block"></i>
                                    </div>
                                </div>
                            </button>

                            <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300">
                                <p class="mt-5">You can cancel your subscription at any time from your account settings.</p>
                            </div>
                        </div>

                        <!-- FAQ Two -->
                        <div class="hs-accordion bg-body-bg p-5 rounded-2xl">
                            <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
                                <h3 class="text-start md:text-1.5xl text-xl">
                                    Do you offer discounts for bulk orders?
                                </h3>

                                <div>
                                    <div class="bg-white hs-accordion-active:bg-primary size-7.5 rounded-full flex items-center justify-center">
                                        <i class="iconify tabler--plus size-5 block hs-accordion-active:hidden"></i>
                                        <i class="iconify tabler--minus size-5 hidden hs-accordion-active:block"></i>
                                    </div>
                                </div>
                            </button>

                            <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300">
                                <p class="mt-5">We offer discounts for bulk orders. Please contact our sales team for more details.</p>
                            </div>
                        </div>

                        <!-- FAQ Three -->
                        <div class="hs-accordion bg-body-bg p-5 rounded-2xl">
                            <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
                                <h3 class="text-start md:text-1.5xl text-xl">
                                    How do I update my account information?
                                </h3>

                                <div>
                                    <div class="bg-white hs-accordion-active:bg-primary size-7.5 rounded-full flex items-center justify-center">
                                        <i class="iconify tabler--plus size-5 block hs-accordion-active:hidden"></i>
                                        <i class="iconify tabler--minus size-5 hidden hs-accordion-active:block"></i>
                                    </div>
                                </div>
                            </button>

                            <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300">
                                <p class="mt-5">Update your account information by logging into your account and navigating to the account settings page.</p>
                            </div>
                        </div>

                        <!-- FAQ Four -->
                        <div class="hs-accordion bg-body-bg p-5 rounded-2xl">
                            <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
                                <h3 class="text-start md:text-1.5xl text-xl">
                                    What if I need to cancel my subscription?
                                </h3>

                                <div>
                                    <div class="bg-white hs-accordion-active:bg-primary size-7.5 rounded-full flex items-center justify-center">
                                        <i class="iconify tabler--plus size-5 block hs-accordion-active:hidden"></i>
                                        <i class="iconify tabler--minus size-5 hidden hs-accordion-active:block"></i>
                                    </div>
                                </div>
                            </button>

                            <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300">
                                <p class="mt-5">If you need to cancel your subscription, you can do so from your account settings. If you have any issues, please contact our support team for assistance.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    @vite(['resources/js/testi-swiper.js' , 'resources/js/video-play.js'])
@endsection