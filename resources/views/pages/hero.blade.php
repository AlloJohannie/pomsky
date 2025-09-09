@extends('layouts.landing', ['title' => 'Hero'])

@section('content')
    <!-- Hero Section  -->
    <section class="bg-body-bg lg:py-25 md:py-22.5 py-17.5">
        <div class="container">
            <h1 class="lg:text-6xl md:text-5.5xl text-4xl mb-2.5 text-center">Hero sections </h1>
        </div>
    </section>

    <!-- Hero One Section  -->
    <section class="bg-dark py-12.5 lg:py-40 md:py-17.5">
        <div class="container">
            <div class="grid lg:grid-cols-2 grid-cols-1 lg:gap-37.5 gap-10">
                <div data-aos="fade-right" data-aos-duration="100" data-aos-easing="ease-in-out">
                    <div class="bg-primary py-0.5 px-3.75 rounded-full font-medium text-sm inline-flex mb-2.5 text-dark">
                        Revolutionize your workflow</div>
                    <h1 class="text-white lg:text-6xl md:text-5.5xl text-4xl mb-2.5">Intuitive solutions for complex
                        challenges</h1>
                    <p class="lg:mt-5 lg:mb-12.5 mt-2.5 mb-5 text-white">Streamline your processes and enhance
                        productivity with our all-in-one solution.</p>
                    <a href="{{ url('account.sign-up') }}" class="py-3.5 md:px-7.5 px-6 inline-flex bg-white font-medium rounded-2xl text-dark transition-all duration-300 hover:bg-primary">
                        Try for free
                    </a>

                    <div class="md:flex md:items-center md:gap-12.5 md:flex-row lg:mt-20 md:mt7.5 mt-7.5 flex gap-2.5 flex-col">
                        <div class="flex items-center gap-2.5 text-white">
                            <img src="/images/logo/apple-store.svg" alt="App Store" class="size-7.5">
                            <span class="text-base font-medium">4.5</span>
                            <i class="iconify tabler--star-filled text-yellow-400"></i>
                            <span class="text-base text-white">on App store</span>
                        </div>

                        <div class="flex items-center gap-2.5 text-white">
                            <img src="/images/logo/play-store.svg" alt="Play Store" class="size-7.5">
                            <span class="text-base font-medium">4.5</span>
                            <i class="iconify tabler--star-filled text-yellow-400"></i>
                            <span class="text-base text-white">on Play store</span>
                        </div>
                    </div>
                </div>

                <div data-aos="fade-left">
                    <div class="relative">
                        <img src="/images/hero/1.png" alt="Element image" class="rounded-2xl">
                        <img src="/images/element/16.svg" alt="Element image" class="md:absolute md:block md:-end-10 -end-7.5 -bottom-10 hidden">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Hero Two Section  -->
    <section class="bg-white lg:py-25 md:py-22.5 pt-10 pb-17.5" id="subscribe">
        <div class="container">
            <div class="text-center" data-aos="fade-up" data-aos-duration="600" data-aos-easing="ease-in-out">
                <h1 class="md:text-6xl text-4xl mb-2.5">Streamline your workflow</h1>

                <div class="flex md:justify-center md:mt-6.25 md:gap-2.5 md:flex-row flex-col gap-2.5 text-base">
                    <div class="flex gap-2.5 justify-center">
                        <p>Rated 4.8</p>
                        <div class="flex items-center text-lg text-yellow-400">
                            <i class="iconify tabler--star-filled"></i>
                            <i class="iconify tabler--star-filled"></i>
                            <i class="iconify tabler--star-filled"></i>
                            <i class="iconify tabler--star-filled"></i>
                            <i class="iconify tabler--star-filled"></i>
                        </div>
                    </div>
                    <p>by over 1,900 satisfied users</p>
                </div>

                <div class="md:mt-6.25 mt-5 lg:w-2/5 md:w-4/5 md:mx-auto" id="subscribe">
                    <form action="{{ route('subscribe') }}" method="POST" class="flex md:gap-5 justify-center items-center gap-2.5" id="subscribe">
                        @csrf
                        <input type="email" name="email" class="bg-body-bg w-full py-2.5 px-5 rounded-2xl  border-neutral-200 h-14 transition-all focus:ring-0 focus:shadow-none focus:border-dark @error('email') border-red-500 @enderror" placeholder="info@example.com">

                        <button type="submit" class="md:h-14 py-3.5 lg:px-7.5 px-6.5 inline-flex items-center text-center bg-dark font-medium rounded-2xl text-white transition-all duration-300 hover:text-primary">
                            Submit
                        </button>
                    </form>
                    @if (session('status'))
                        <p class=" text-left mt-1 text-green-600 mb-2">{{ session('status') }}</p>
                    @endif

                    @if ($errors->has('email'))
                        <p class=" text-left mt-2 text-red-600 mb-2">{{ $errors->first('email') }}</p>
                    @endif
                </div>
            </div>

            <div class="grid md:grid-cols-4 lg:gap-7.5 md:gap-5 lg:my-25 md:my-17.5 my-15 gap-5">
                <div class="md:col-span-1" data-aos="fade-up" data-aos-duration="600" data-aos-easing="ease-in-out">
                    <div class="relative lg:pe-10">
                        <img src="/images/hero/2.png" alt="" class="rounded-2xl">
                        <img src="/images/element/3.svg" alt="" class="md:absolute md:block md:top-11.75 md:-end-2.5 md:border md:border-neutral-200 md:rounded-2xl hidden">
                    </div>
                </div>

                <div class="md:col-span-1" data-aos="fade-up" data-aos-delay="200" data-aos-duration="600" data-aos-easing="ease-in-out">
                    <img src="/images/about/4.png" alt="" class="h-full rounded-2xl object-cover max-w-full ">
                </div>

                <div class="md:col-span-2" data-aos="fade-up" data-aos-duration="600" data-aos-easing="ease-in-out">
                    <img src="/images/element/4.svg" alt="" class="rounded-2xl max-w-full object-center">
                </div>
            </div>

            <div>
                <div class="text-center" data-aos="fade-up" data-aos-duration="600" data-aos-easing="ease-in-out">
                    <div class="mb-7">Trusted partners</div>
                    <div class="flex lg:gap-7.5 lg:flex-row justify-center">
                        <img src="/images/client/3.svg" alt="" class="lg:h-7.5 h-6">
                        <img src="/images/client/4.svg" alt="" class="lg:h-7.5 h-6">
                        <img src="/images/client/5.svg" alt="" class="lg:h-7.5 h-6">
                        <img src="/images/client/7.svg" alt="" class="lg:h-7.5 h-6 lg:block hidden">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Hero Three Section  -->
    <section class="bg-primary lg:py-25 md:py-22.5 py-17.5">
        <div class="container">
            <div class="grid lg:grid-cols-5 lg:gap-17.5 mb-12.5 gap-7.5" data-aos="fade-up" data-aos-delay="100" data-aos-duration="600" data-aos-easing="ease-in-out">
                <div class="lg:col-span-3">
                    <h1 class="lg:text-6xl md:text-5.5xl mb-2.5 text-4xl">Empower your business with Landinger</h1>
                    <p class="mb-2.5">Revolutionize your operations with our comprehensive, intuitive SaaS platform.</p>
                </div>

                <div class="lg:col-span-2">
                    <form class="flex lg:gap-5 md:gap-5 gap-2.5 md:flex-row flex-col mb-1.25">
                        <input class="py-2.5 px-5 rounded-2xl border-neutral-200 h-14 w-full" placeholder="hello@example.com">
                        <div class="lg:text-center">
                            <a href="#" class="py-3.5 px-7.5 inline-flex whitespace-nowrap items-center text-center bg-dark font-medium rounded-2xl text-white transition-all duration-300 hover:text-primary">
                                Get Started
                            </a>
                        </div>
                    </form>

                    <div class="text-sm">By clicking 'Get Started' you agree to the <a href="{{ url('pages.privacy-policy') }}" class="text-black underline">Terms of use</a>
                    </div>
                </div>
            </div>

            <div class="relative" data-aos="fade-up" data-aos-duration="600" data-aos-easing="ease-in-out">
                <img src="/images/about/12.png" alt="" class="size-full rounded-2xl">
                <img src="/images/element/8.svg" alt="" class="md:absolute md:block md:end-7.5 md:bottom-6.25 hidden">
            </div>
        </div>
    </section>

    <!-- Hero Four Section  -->
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

    <!-- Hero Five Section  -->
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
                <p class="mb-2.5">Streamline your workflow with automated task scheduling. Effortlessly manage your
                    tasks and optimize productivity.</p>
            </div>

            <div class="flex md:gap-5 gap-2.5 md:flex-row flex-col items-center justify-center" data-aos="fade-up" data-aos-delay="150" data-aos-duration="600" data-aos-easing="ease-in-out">
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

            <div class="md:mt-15 lg:p-12.5 mt-10 p-5 bg-body-bg rounded-2xl" data-aos="fade-up" data-aos-delay="150" data-aos-duration="600" data-aos-easing="ease-in-out">
                <img src="/images/about/10.png" alt="" class="rounded-2xl">
            </div>
        </div>
    </section>
    <!-- Swiper -->
@endsection

@section('scripts')
    @vite(['resources/js/testi-swiper.js'])
@endsection