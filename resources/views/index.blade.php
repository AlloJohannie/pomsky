@extends('layouts.landing', ['title' => 'Index'])

@section('content')
    <!-- Hero Section -->
    <section class="bg-dark py-12.5 lg:py-40 md:py-17.5">
        <div class="container">
            <div class="grid lg:grid-cols-2 grid-cols-1 lg:gap-37.5 gap-10">
                <div data-aos="fade-right">
                    <div class="bg-primary py-0.5 px-3.75 rounded-full font-medium text-sm inline-flex mb-2.5 text-dark">Revolutionize your workflow</div>
                    <h1 class="text-white lg:text-6xl md:text-5.5xl text-4xl mb-2.5 box">Intuitive solutions for complex challenges</h1>
                    <p class="lg:mt-5 lg:mb-12.5 mt-2.5 mb-5 text-white">Streamline your processes and enhance productivity with our all-in-one solution.</p>
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

                <div>
                    <div class="relative">
                        <img src="/images/hero/1.png" alt="Element image" class="rounded-2xl">
                        <img src="/images/element/16.svg" alt="Element image" class="md:absolute md:block md:-end-10 -end-7.5 -bottom-10 hidden">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="lg:py-25 md:py-22.5 py-17.5">
        <div class="container">
            <div class="lg:mb-12.5 text-center mb-7.5">
                <h2 class="mb-2.5 lg:text-5.5xl md:text-4.6xl text-3.4xl">Key features that save time</h2>
                <p class="text-base mb-2.5">Discover our powerful tools designed to streamline your workflow and boost productivity.</p>
            </div>

            <div class="grid md:grid-cols-8 lg:gap-12.5 gap-5 items-center">
                <div class="md:col-span-5" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="300">
                    <div class="bg-white rounded-2xl lg:p-12.5 h-full pe-0 p-4">
                        <div class="grid md:grid-cols-2 lg:flex-row lg:gap-15 flex-col gap-7.5">
                            <div>
                                <div class="md:size-15 size-12.5 mb-5 bg-primary rounded-full flex items-center justify-center">
                                    <i class="iconify solar--chart-square-linear lg:size-7.5 size-6.5 text-dark"></i>
                                </div>
                                <h3 class="lg:text-2.5xl md:text-2.5xl text-1.5xl mb-2.5">Generate detailed reports with just a few clicks.</h3>
                                <p class="text-base lg:mt-35 md:mt-25 mt-5">Discover our powerful tools designed to streamline your workflow and boost productivity.</p>
                            </div>

                            <div class="flex items-end relative">
                                <img src="/images/about/1.png" alt="" class="rounded-2xl flex">
                                <img src="/images/element/2.svg" alt="" class="absolute md:block md:-start-7.5 bottom-auto lg:top-22.5 hidden ">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="md:col-span-3" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="300">
                    <div class="flex lg:p-12.5 p-5 bg-dark rounded-2xl lg:gap-24 gap-15 flex-col">
                        <div>
                            <div class="md:size-15 size-12.5 mb-5 bg-primary rounded-full flex items-center justify-center">
                                <i class="iconify solar--bolt-linear lg:size-7.5 size-6.5 text-dark"></i>
                            </div>
                            <h4 class="text-white lg:text-2.5xl md:text-2.5xl text-1.5xl mb-2.5">Work seamlessly with your team, no matter where they are</h4>
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

            <div class="mt-10 bg-primary rounded-2xl lg:p-10 p-5" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
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

            <div class="flex md:justify-center gap-2.5 mt-10 flex-wrap justify-start" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out">
                <i class=" iconify solar--dialog-2-bold size-5.5"></i>
                <div class="text-dark fs-base">Contact our team for more information.</div>

                <a href="{{ url('pages.contact') }}" class="flex items-center gap-1 text-dark font-medium">
                    <div class="underline gap-1">Let's chat</div><i class="iconify tabler--arrow-right size-6"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Step Section -->
    <section class="bg-white lg:py-25 md:py-22.5 py-17.5 ">
        <div class="container">
            <div class="text-center" data-aos="fade-up" data-aos-duration="600" data-aos-easing="ease-in-out">
                <div class="bg-primary py-0.5 px-3.75 rounded-full font-medium text-sm inline-flex mb-2.5 text-dark">Easy steps to success </div>
                <h2 class="mb-2.5 lg:text-5.5xl md:text-4.6xl text-3.4xl">Quick start guide </h2>
            </div>

            <div class="grid md:grid-cols-3 md:gap-12.5 my-12.5 gap-5">
                <!-- Step 1 -->
                <div class="flex lg:gap-3.5 lg:flex-row gap-3 flex-col" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <div class="flex-shrink-1">
                        <div class="lg:size-11 size-10 bg-primary rounded-full inline-flex items-center justify-center">
                            <h5 class="lg:text-1.5xl text-xl">01</h5>
                        </div>
                    </div>

                    <div class="flex-grow">
                        <h3 class="lg:text-1.5xl text-xl mb-2.5">Sign up</h3>
                        <p class="text-base mb-2.5">Create your account in seconds and choose your plan.</p>
                    </div>
                </div>

                <!-- Step 2  -->
                <div class="flex lg:gap-3.5 lg:flex-row gap-3 flex-col" data-aos="fade-up" data-aos-delay="150" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <div class="flex-shrink-2">
                        <div class="lg:size-11 size-10 bg-primary rounded-full inline-flex items-center justify-center">
                            <h5 class="lg:text-1.5xl text-xl">02</h5>
                        </div>
                    </div>

                    <div>
                        <h3 class="lg:text-1.5xl text-xl mb-2.5">Integrate and collect data </h3>
                        <p class="text-base mb-2.5">Tailor your settings and preferences to fit your business needs. </p>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="flex lg:gap-3.5 lg:flex-row gap-3 flex-col" data-aos="fade-up" data-aos-delay="200" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <div class="flex-shrink-2">
                        <div class="lg:size-11 size-10 bg-primary rounded-full inline-flex items-center justify-center">
                            <h5 class="lg:text-1.5xl text-xl">03</h5>
                        </div>
                    </div>

                    <div>
                        <h3 class="lg:text-1.5xl text-xl mb-2.5">Invite team </h3>
                        <p class="text-base mb-2.5">Add team members and collaborators to get started. </p>
                    </div>
                </div>
            </div>

            <div>
                <img src="/images/about/2.png" class="rounded-2xl" alt="" data-aos="fade-up" data-aos-delay="400" data-aos-duration="500" data-aos-easing="ease-in-out">
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="lg:py-25 md:py-22.5 py-17.5">
        <div class="container">
            <div class="grid lg:grid-cols-2 lg:gap-36.5 gap-7.5">
                <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="300" data-aos-easing="ease-in-out">
                    <div class="lg:mb-12.5 mb-7.5">
                        <div class="bg-primary py-0.5 px-3.75 rounded-full font-medium text-sm inline-flex mb-2.5 text-dark">Unlock premium features </div>
                        <h2 class="mb-2.5 lg:text-5.5xl md:text-4.6xl text-3.4xl">Fit your business goals </h2>
                    </div>

                    <div class="lg:relative">
                        <img src="/images/about/3.png" alt="" class="rounded-2xl">
                        <img src="/images/element/1.svg" alt="" class="lg:absolute lg:block lg:-end-12.5 lg:top-22.5 hidden">
                    </div>

                    <div class="flex md:justify-start gap-2.5 mt-10 flex-wrap justify-start">
                        <div class="gap-1 flex">
                            <i class="iconify solar--sale-linear text-dark size-5.5"></i>
                            <div class="text-dark fs-base">Get 20% off when you choose annual billing. </div>
                        </div>
                        <a href="{{ url('pages.pricing-2') }}" class="flex items-center gap-1.5 text-dark font-medium">
                            <div class="underline gap-1">Visit Pricing</div><i class="iconify tabler--arrow-right size-6"></i>
                        </a>
                    </div>
                </div>

                <div>
                    <div class="grid lg:grid-cols-1 md:grid-cols-2 lg:gap-10 md:gap-5 gap-5">
                        <div class="lg:p-12.5 p-5 bg-dark rounded-2xl gap-24 flex flex-col" data-aos="fade-up" data-aos-duration="600" data-aos-easing="ease-in-out">
                            <div>
                                <div class="gap-5 flex items-center mb-7.5">
                                    <div class="lg:size-13.5 size-12.5 bg-primary rounded-full flex items-center justify-center ">
                                        <i class="iconify solar--bolt-linear lg:size-7.5 size-6.5 text-dark"></i>
                                    </div>
                                    <h3 class="text-1.5xl text-white">Basic plan</h3>
                                </div>

                                <h4 class="text-white lg:text-4.5xl text-4xl flex items-center">$19<span class="text-base">/month</span></h4>

                                <div class="my-7.5">
                                    <!-- Pricing Item 1  -->
                                    <div class="flex gap-2.5 mb-3.5"><i class="iconify tabler--check size-6 text-white"></i>
                                        <div class="text-white text-base">Automated reporting </div>
                                    </div>

                                    <!-- Pricing Item 2  -->
                                    <div class="flex gap-2.5 mb-3.5"><i class="iconify tabler--check size-6 text-white"></i>
                                        <div class="text-white text-base">Basic analytics </div>
                                    </div>

                                    <!-- Pricing Item 3  -->
                                    <div class="flex gap-2.5 mb-3.5"><i class="iconify tabler--check size-6 text-white"></i>
                                        <div class="text-white text-base">Real-time collaboration for up to 5 users </div>
                                    </div>

                                    <!-- Pricing Item 4  -->
                                    <div class="flex gap-2.5 mb-3.5"><i class="iconify tabler--check size-6 text-white"></i>
                                        <div class="text-white text-base">Customizable dashboards</div>
                                    </div>
                                </div>

                                <a href="{{ url('pages.contact') }}" class="py-3.5 lg:px-7.5 px-6.5 block text-center bg-white font-medium rounded-2xl text-dark transition-all duration-300 hover:bg-primary">
                                    Get Started
                                </a>
                            </div>
                        </div>

                        <div class="lg:p-12.5 p-5 bg-white rounded-2xl md:gap-24 lg:block flex flex-col justify-between" data-aos="fade-up" data-aos-delay="200" data-aos-duration="600" data-aos-easing="ease-in-out">
                            <div>
                                <div class="gap-5 flex items-center mb-7.5">
                                    <div class="lg:size-13.5 size-12.5 bg-dark rounded-full flex items-center justify-center ">
                                        <i class="iconify solar--fire-outline lg:size-7.5 size-6.5 text-primary"></i>
                                    </div>
                                    <h3 class="text-1.5xl ">Custom plan </h3>
                                </div>

                                <div class="mb-7.5">Designed for large organizations requiring custom solutions.</div>
                            </div>

                            <div>
                                <a href="{{ url('pages.contact') }}" class="py-3.5 lg:px-7.5 px-6.5 block text-center bg-primary font-medium rounded-2xl text-dark transition-all duration-300 hover:bg-black hover:text-primary">
                                    Get Started
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Counting Section-->
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

            <div class="grid md:grid-cols-4 sm:grid-cols-2 md:gap-5 lg:pt-12.5 mt-7.5 gap-5 ">
                <div data-aos="fade-up" data-aos-delay="150" data-aos-duration="600" data-aos-easing="ease-in-out">
                    <h3 class="lg:text-5.5xl md:text-4.6xl text-3.4xl">22+</h3>
                    <div>Years of experience</div>
                </div>

                <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="600" data-aos-easing="ease-in-out">
                    <h3 class="lg:text-5.5xl md:text-4.6xl text-3.4xl">105+ </h3>
                    <div>In-house projects completed </div>
                </div>

                <div data-aos="fade-up" data-aos-delay="250" data-aos-duration="600" data-aos-easing="ease-in-out">
                    <h3 class="lg:text-5.5xl md:text-4.6xl text-3.4xl">35+ </h3>
                    <div>Awards and counting </div>
                </div>

                <div data-aos="fade-up" data-aos-delay="300" data-aos-duration="600" data-aos-easing="ease-in-out">
                    <h3 class="lg:text-5.5xl md:text-4.6xl text-3.4xl">>10K </h3>
                    <div>Satisfied users </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section-->
    <section class="lg:py-25 md:py-22.5 py-17.5">
        <div class="container">
            <div class="text-center mb-10" data-aos="fade-up" data-aos-duration="600" data-aos-easing="ease-in-out">
                <div class="bg-primary py-0.5 px-3.75 rounded-full font-medium text-sm inline-flex mb-2.5 text-dark">Testimonials </div>
                <h2 class="mb-2.5 lg:text-5.5xl md:text-4.6xl text-3.4xl">Hear from our happy customers </h2>
            </div>

            <div class="grid md:grid-cols-3 md:gap-7.5 gap-5">

                <div class="relative flex md:h-125 h-80 overflow-hidden rounded-2xl" data-aos="fade-up" data-aos-duration="600" data-aos-easing="ease-in-out">
                    <img src="/images/review/1.png" alt="Client Img 1" class="size-full object-cover">

                    <div class="absolute inse-0 w-full h-full opacity-80 z-20 bg-linear-180  from-transparent to-black"></div>

                    <div class="absolute lg:p-7.5 p-5 h-full flex flex-col items-start justify-between z-20">
                        <img src="/images/client/1.svg" alt="" class="h-7.5">
                        <h3 class="text-white text-xl">"Efficiency redefined, productivity amplified."</h3>
                    </div>
                </div>

                <div class="relative flex md:h-125 h-80 overflow-hidden rounded-2xl" data-aos="fade-up" data-aos-delay="150" data-aos-duration="600" data-aos-easing="ease-in-out">

                    <div class="bg-primary absolute lg:p-7.5 p-5 size-full flex flex-col items-start justify-between ">
                        <img src="/images/client/4.svg" alt="" class="h-7.5">
                        <div>
                            <div class="flex gap-1.5">
                                <i class="iconify tabler--star-filled text-yellow-400 text-xl"></i>
                                <i class="iconify tabler--star-filled text-yellow-400 text-xl"></i>
                                <i class="iconify tabler--star-filled text-yellow-400 text-xl"></i>
                                <i class="iconify tabler--star-filled text-yellow-400 text-xl"></i>
                                <i class="iconify tabler--star-filled text-yellow-400 text-xl"></i>
                            </div>

                            <p class="lg:text-xl text-lg my-3.5">Landinger has revolutionized the way we operate. The automated reporting feature alone has saved us countless hours each month.</p>

                            <div class="review-meta-wrap">
                                <h5 class="text-1.5xl text-neutral-700">John Doe</h5>
                                <p class="text-sm">SEO expert at Coderthemes</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative flex md:h-125 h-80 overflow-hidden rounded-2xl" data-aos="fade-up" data-aos-delay="200" data-aos-duration="600" data-aos-easing="ease-in-out">
                    <img src="/images/review/2.png" alt="Client Img 1" class="size-full object-cover">

                    <div class="absolute inse-0 w-full h-full opacity-80 z-20 bg-linear-180  from-transparent to-black"></div>

                    <div class="absolute lg:p-7.5 p-5 h-full flex flex-col items-start justify-between z-20">
                        <img src="/images/client/2.svg" alt="" class="h-7.5">
                        <h3 class="text-white text-xl">"Person she control of to beginnings view looked eyes Than continues." </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section  -->
    {{-- <section class="lg:py-25 md:py-22.5 pb-17.5"  id="subscribe">
        <div class="container">
            <div class="relative">
                <img src="/images/about/5.png" alt="" class="rounded-2xl lg:h-full w-full h-81.5  object-cover">
                <div class="absolute top-0">
                    <div class="grid lg:grid-cols-2 lg:gap-40 gap-5 lg:p-12.5 lg:pb-75 p-5 pb-12.5" data-aos="fade-up" data-aos-duration="600" data-aos-easing="ease-in-out">
                        <div>
                            <h2 class="text-white lg:text-2.5xl md:text-2.5xl text-2xl mb-2.5">Be the first to know about new features,improvements, and special promotions.</h2>
                        </div>

                        <div>
                            <form action="{{ route('subscribe') }}" method="POST" class="flex md:gap-5 md:flex-row gap-2.5 flex-col justify-between">
                                @csrf
                                <input type="email" name="email" placeholder="info@example.com" class="py-2.5 px-5 rounded-2xl w-full border-neutral-200 h-14 @error('email') border-red-500 @enderror" required>
                                <div class="text-center">
                                    <button type="submit" class="md:h-14 py-3.5 px-7.5 inline-flex items-center text-center bg-dark font-medium rounded-2xl text-white transition-all duration-300 hover:text-primary">
                                        Submit
                                    </button>
                                </div>
                            </form>

                            @if (session('status'))
                                <p class="text-green-600 mb-2">{{ session('status') }}</p>
                            @endif

                            @if ($errors->has('email'))
                                <p class="text-red-600 mb-2">{{ $errors->first('email') }}</p>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection