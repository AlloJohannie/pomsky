@extends('layouts.landing', ['title' => 'Product 1'])

@section('content')
    <!-- Hero Section -->
    <section class="py-17.5 lg:py-25 md:py-22.5">
        <div class="container">
            <div class="grid md:grid-cols-2 lg:gap-25 md:gap-12.5 gap-7.5 items-center">
                <div data-aos="fade-right" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <div class="relative">
                        <img src="/images/about/9.png" alt="" class="rounded-2xl">
                        <img src="/images/element/3.svg" alt="" class="md:absolute md:block md:-end-5 md:-bottom-7.5 md:w-68.75 md:rounded-2xl hidden">
                    </div>
                </div>

                <div data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <div class="md:mb-12.5 mb-7.5">
                        <h1 class="lg:text-6xl md:text-5.5xl text-4xl mb-2.5">Robust analytics</h1>
                        <p class="mb-2.5">Gain valuable insights with our powerful analytics tools.Track key metrics,generate detailed reports, and make data-driven decisions to drive your business forward.</p>

                    </div>
                    <a href="{{ url('account.sign-up') }}" class="py-3.5 px-7.5 inline-flex items-center text-center bg-dark font-medium rounded-2xl text-white transition-all duration-300 hover:text-primary">
                        Get Started
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Expanded Feature Grid Section  -->
    <section class="bg-white lg:py-25 md:py-22.5 py-17.5">
        <div class="container-small">
            <div class="lg:mb-12.5 text-center mb-7.5" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
                <h2 class="mb-2.5 lg:text-5.5xl md:text-4.6xl text-3.4xl">Why choose Landinger </h2>
                <p class="text-base mb-2.5">Discover how Landinger can transform your business operations with our innovative features. </p>
            </div>
            <div class="grid md:grid-cols-2 md:gap-7.5 gap-5">

                <div class="flex md:gap-4 md:flex-row gap-5 flex-col lg:p-10 p-5 bg-body-bg rounded-2xl" data-aos="fade-up" data-aos-delay="200" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <div>
                        <div class="size-12.5 bg-primary rounded-full inline-flex items-center justify-center">
                            <i class="iconify solar--chart-square-linear size-6 text-black"></i>
                        </div>
                    </div>

                    <div>
                        <h2 class="mb-2.5 md:text-1.5xl text-xl">Advance analytics </h2>
                        <p>Tailor our platform to meet your unique business needs. </p>
                    </div>
                </div>

                <div class="flex md:gap-4 md:flex-row gap-5 flex-col lg:p-10 p-5 bg-body-bg rounded-2xl" data-aos="fade-up" data-aos-delay="250" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <div>
                        <div class="size-12.5  bg-primary rounded-full inline-flex items-center justify-center">
                            <i class="iconify solar--bolt-linear size-7 text-black"></i>
                        </div>
                    </div>

                    <div>
                        <h2 class="mb-2.5 md:text-1.5xl text-xl">Seamless integration </h2>
                        <p>It is a long established fact that a reader will be distracted by. </p>
                    </div>
                </div>

                <div class="flex md:gap-4 md:flex-row gap-5 flex-col lg:p-10 p-5 bg-body-bg rounded-2xl" data-aos="fade-up" data-aos-delay="300" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <div>
                        <div class="size-12.5  bg-primary rounded-full inline-flex items-center justify-center">
                            <i class="iconify solar--sale-linear size-7 text-black"></i>
                        </div>
                    </div>

                    <div>
                        <h2 class="mb-2.5 md:text-1.5xl text-xl">Adaptive learning </h2>
                        <p>There are many variations of passages of Lorem Ipsum available. </p>
                    </div>
                </div>

                <div class="flex md:gap-4 md:flex-row gap-5 flex-col lg:p-10 p-5 bg-body-bg rounded-2xl" data-aos="fade-up" data-aos-delay="350" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <div>
                        <div class="size-12.5  bg-primary rounded-full inline-flex items-center justify-center">
                            <i class="iconify solar--fire-outline size-7 text-black"></i>
                        </div>
                    </div>

                    <div>
                        <h2 class="mb-2.5 md:text-1.5xl text-xl">24/7 availability </h2>
                        <p>Predefined chunks as necessary, making this the first true generator. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- User Management and Authentication Section  -->
    <section class="bg-dark lg:py-25 md:py-22.5 py-17.5">
        <div class="container">
            <div class="grid md:grid-cols-2 lg:gap-25 md:gap-7.5 gap-7.5">
                <div class="flex flex-col lg:gap-12.5 md:gap-2.5 justify-between" data-aos="fade-right" data-aos-delay="200" data-aos-duration="600" data-aos-easing="ease-in-out">
                    <div class="lg:mb-12.5 md:mb-10 mb-6.5">
                        <h2 class="mb-2.5 lg:text-5.5xl md:text-4.6xl text-3.4xl text-white">User management and authentication </h2>
                        <p class="text-base mb-2.5 text-white">Discover how Landinger can transform your business operations with our innovative features. </p>
                    </div>

                    <div class="flex gap-5 md:flex-row flex-col">
                        <img src="/images/team/5.png" alt="" class="md:size-17.5 size-15 rounded-full">
                        <div>
                            <p class="mb-2.5 text-lg text-white">Its user-friendly interface and robust features have made our tasks more efficient. Highly recommended!</p>
                            <div class="text-sm text-white">- Louis Ferguson</div>
                        </div>
                    </div>
                </div>

                <div class="relative" data-aos="fade-left" data-aos-delay="200" data-aos-duration="600" data-aos-easing="ease-in-out">
                    <img src="/images/about/8.png" alt="" class="size-full rounded-2xl object-cover">
                    <div class="md:absolute md:-bottom-5 md:-start-5 md:w-55 md:bg-white md:p-6.25 md:rounded-2xl md:block hidden">
                        <h3 class="text-5.5xl">98.5%</h3>
                        <div class="text-lg">Total reviews</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Scalable Infrastructure & Customizable Email Templates Section  -->
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

    <!-- FAQ Section  -->
    <section class="bg-white lg:pb-25 md:pb-22.5 pb-17.5">
        <div class="container">
            <div class="mb-12.5 text-center" data-aos="fade-up" data-aos-duration="600" data-aos-easing="ease-in-out">
                <h2 class="lg:text-5.5xl md:text-4.6xl mb-2.5">Frequently asked questions </h2>
            </div>

            <div data-aos="fade-up" data-aos-delay="150" data-aos-duration="600" data-aos-easing="ease-in-out">
                <div class="md:space-y-7.5 space-y-5 lg:w-1/2 mx-auto">
                    <!-- FAQ One -->
                    <div class="hs-accordion bg-body-bg p-5 rounded-2xl">
                        <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
                            <h3 class="md:text-1.5xl text-xl">
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
                            <h3 class="md:text-1.5xl text-xl">
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
                            <h3 class="md:text-1.5xl text-xl">
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
                            <h3 class="md:text-1.5xl text-xl">
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
    </section>

    <!-- cta Section  -->
    <section class="bg-white lg:pb-25 md:pb-22.5 pb-17.5">
        <div class="container">
            <div class="bg-body-bg lg:py-17.5 lg:px-3.75 md:py-10 md:px-3.75 py-5 px-3.75 rounded-2xl">
                <div class="md:mx-auto md:w-7/10 text-center" data-aos="fade-up" data-aos-delay="150" data-aos-duration="600" data-aos-easing="ease-in-out">
                    <h2 class="lg:text-4xl md:text-[32px] text-2xl">Take control of your future and elevate your success!</h2>
                    <div class="mt-5 lg:mb-3.75">But I must explain to you how all this mistaken idea of denouncing.</div>

                    <div class="lg:mt-11.25 mt-5 flex md:gap-5 gap-2.5 flex-row justify-center">
                        <a href="{{ url('pages.contact') }}" class="py-3.5 md:px-7.5 px-6.5 inline-flex items-center text-center bg-dark font-medium rounded-2xl text-white transition-all duration-300 hover:text-primary">
                            Contact
                        </a>

                        <a href="{{ url('pages.request-a-demo') }}" class="py-3.5 md:px-7.5 px-6.5 inline-flex items-center text-center bg-primary font-medium rounded-2xl text-black transition-all duration-300 hover:text-primary hover:bg-black">
                            Request a demo
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection