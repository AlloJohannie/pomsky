@extends('layouts.landing', ['title' => 'Features'])

@section('content')
    <!-- Feature Section  -->
    <section class="bg-body-bg lg:py-25 md:py-22.5 py-17.5">
        <div class="container">
            <h1 class="lg:text-6xl md:text-5.5xl text-4xl mb-2.5 text-center" data-aos="fade-up" data-aos-delay="150" data-aos-duration="600" data-aos-easing="ease-in-out">Product features </h1>
        </div>
    </section>

    <!-- Feature one Section  -->
    <section class="bg-white py-17.5 lg:py-25 md:py-22.5">
        <div class="container">
            <div class="grid md:grid-cols-2 lg:gap-25 md:gap-12.5 gap-7.5 items-center">
                <div data-aos="fade-right" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <div class="relative">
                        <img src="/images/about/9.png" alt="" class="rounded-2xl">
                        <img src="/images/element/3.svg" alt="" class="md:absolute border border-neutral-200 md:block md:-end-5 md:-bottom-7.5 md:w-68.75 md:rounded-2xl hidden">
                    </div>
                </div>

                <div data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <div class="md:mb-12.5 mb-7.5">
                        <h1 class="lg:text-6xl md:text-5.5xl text-4xl mb-2.5">Robust analytics</h1>
                        <p class="mb-2.5">Gain valuable insights with our powerful analytics tools.Track key
                            metrics,generate detailed reports, and make data-driven decisions to drive your business
                            forward.</p>

                    </div>
                    <a href="{{ url('account.sign-up') }}" class="py-3.5 px-7.5 inline-flex items-center text-center bg-dark font-medium rounded-2xl text-white transition-all duration-300 hover:text-primary">
                        Get Started
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Feature Two Section  -->
    <section class="lg:py-25 md:py-22.5 py-17.5">
        <div class="container">
            <div class="lg:mb-12.5 text-center mb-7.5">
                <h2 class="mb-2.5 lg:text-5.5xl md:text-4.6xl text-3.4xl">Key features that save time</h2>
                <p class="text-base mb-2.5">Discover our powerful tools designed to streamline your workflow and boost
                    productivity.</p>
            </div>

            <div class="grid md:grid-cols-8 lg:gap-12.5 gap-5 items-center">
                <div class="md:col-span-5" data-aos="fade-up" data-aos-easing="linear">
                    <div class="bg-white rounded-2xl lg:p-12.5 h-full pe-0 p-4">
                        <div class="grid md:grid-cols-2 lg:flex-row lg:gap-15 flex-col gap-7.5">
                            <div>
                                <div class="md:size-15 size-12.5 mb-5 bg-primary rounded-full flex items-center justify-center">
                                    <i class="iconify solar--chart-square-linear lg:size-7.5 size-6.5 text-dark"></i>
                                </div>
                                <h3 class="lg:text-2.5xl md:text-2.5xl text-1.5xl mb-2.5">Generate detailed reports
                                    with just a few clicks.</h3>
                                <p class="text-base lg:mt-35 md:mt-25 mt-5">Discover our powerful tools designed to
                                    streamline your workflow and boost productivity.</p>
                            </div>

                            <div class="flex items-end relative">
                                <img src="/images/about/1.png" alt="" class="rounded-2xl flex">
                                <img src="/images/element/2.svg" alt="" class="absolute md:block md:-start-7.5 bottom-auto lg:top-22.5 hidden ">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="md:col-span-3" data-aos="fade-up" data-aos-easing="linear">
                    <div class="flex lg:p-12.5 p-5 bg-dark rounded-2xl lg:gap-24 gap-15 flex-col">
                        <div>
                            <div class="md:size-15 size-12.5 mb-5 bg-primary rounded-full flex items-center justify-center">
                                <i class="iconify solar--bolt-linear lg:size-7.5 size-6.5 text-dark"></i>
                            </div>
                            <h4 class="text-white lg:text-2.5xl md:text-2.5xl text-1.5xl mb-2.5">Work seamlessly with
                                your team, no matter where they are</h4>
                        </div>

                        <div>
                            <div class="gap-3.5 flex flex-col">
                                <div class="flex gap-2.5"><i class="iconify tabler--circle-check size-6 text-primary"></i>
                                    <div class="text-white text-base">Live editing</div>
                                </div>
                                <div class="flex gap-2.5"><i class="iconify tabler--circle-check size-6 text-primary"></i>
                                    <div class="text-white text-base">Instant feedback </div>
                                </div>
                                <div class="flex gap-2.5"><i class="iconify tabler--circle-check size-6 text-primary"></i>
                                    <div class="text-white text-base">Task assignments </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-10 bg-primary rounded-2xl lg:p-10 p-5" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-in">
                <div class="grid md:grid-cols-3 lg:gap-10  gap-5">
                    <div>
                        <h5 class="md:text-2.5xl text-1.5xl">Generate detailed reports with just a few clicks.</h5>
                    </div>

                    <div>
                        <div class="lg:flex items-center gap-5">
                            <h6 class="lg:text-5.5xl md:text-4.6xl text-3.4xl">99%</h6>
                            <div class="fs-base">Track and analyze business reports</div>
                        </div>
                    </div>

                    <div>
                        <div class="lg:flex items-center gap-5">
                            <h6 class="lg:text-5.5xl md:text-4.6xl text-3.4xl">4.8</h6>
                            <div class="gap-1 flex-col flex">
                                <div class="flex gap-1.5">
                                    <i class="iconify tabler--star-filled lg:size-6 size-5.5 text-dark"></i>
                                    <i class="iconify tabler--star-filled lg:size-6 size-5.5 text-dark"></i>
                                    <i class="iconify tabler--star-filled lg:size-6 size-5.5 text-dark"></i>
                                    <i class="iconify tabler--star-filled lg:size-6 size-5.5 text-dark"></i>
                                    <i class="iconify tabler--star-half-filled lg:size-6 size-5.5 text-dark"></i>
                                </div>
                                <div class="fs-base">Best rated company</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex md:justify-center gap-2.5 mt-10 flex-wrap justify-start" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-in">
                <i class=" iconify solar--dialog-2-bold size-5.5"></i>
                <div class="text-dark fs-base">Contact our team for more information.</div>

                <a href="{{ url('pages.contact') }}" class="flex items-center gap-1 text-dark font-medium">
                    <div class="underline gap-1">Let's chat</div><i class="iconify tabler--arrow-right size-6"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Feature Three Section  -->
    <section class="bg-white lg:py-25 md:py-22.5 py-17.5">
        <div class="container-small">
            <div class="lg:mb-12.5 text-center mb-7.5" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
                <h2 class="mb-2.5 lg:text-5.5xl md:text-4.6xl text-3.4xl">Why choose Landinger </h2>
                <p class="text-base mb-2.5">Discover how Landinger can transform your business operations with our
                    innovative features. </p>
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

                <div class="flex md:gap-4 md:flex-row gap-5 flex-col lg:p-10 p-5 bg-body-bg rounded-2xl" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
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

    <!-- Feature Four Section  -->
    <section class="lg:py-25 md:py-22.5 py-17.5">
        <div class="container-small">
            <div class="lg:mb-10 text-center mb-10" data-aos="fade-up" data-aos-delay="200" data-aos-duration="600" data-aos-easing="ease-in-out">
                <h2 class="mb-2.5 lg:text-5.5xl md:text-4.6xl text-3.4xl">Key features that save time </h2>
                <p class="text-base mb-2.5">Discover our powerful tools designed to streamline your workflow and boost
                    productivity. </p>
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

    <!-- Feature Five Section  -->
    <section class="bg-white lg:py-25 md:py-22.5 py-17.5">
        <div class="container">
            <div class="grid md:grid-cols-2 lg:gap-7.5 md:gap-5 gap-5">
                <div data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <div class="bg-body-bg lg:p-10 p-5 rounded-2xl flex gap-7.5 flex-col">
                        <div>
                            <h2 class="mb-2.5 lg:text-4xl md:text-3.4xl text-2.6xl ">Scalable infrastructure for
                                growing businesses </h2>
                            <p class="text-base mb-2.5 ">Seamlessly expand your operations without compromising
                                performance or reliability, ensuring. </p>
                        </div>

                        <img src="/images/element/10.svg" alt="" class="rounded-2xl">
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-delay="150" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <div class="bg-primary lg:p-10 p-5 rounded-2xl flex gap-7.5 flex-col">
                        <div>
                            <h2 class="mb-2.5 lg:text-4xl md:text-3.4xl text-2.6xl ">Customizable email templates and
                                notifications </h2>
                            <p class="text-base mb-2.5 ">Elevate your communication with customizable email templates
                                and notifications. </p>
                        </div>

                        <img src="/images/element/11.svg" alt="" class="rounded-2xl">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Feature Six Section  -->
    <section class="bg-white lg:pb-25 md:pb-22.5 pb-17.5">
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