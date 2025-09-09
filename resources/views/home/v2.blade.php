@extends('layouts.landing', ['title' => 'Home 2'])

@section('content')
    <!-- Hero Section -->
    <section class="bg-white lg:py-25 md:py-22.5 pt-10 pb-17.5" id="subscribe">
        <div class="container">
            <div class="text-center" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
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
                    <form action="{{ route('subscribe') }}" method="POST" class="flex md:gap-5 justify-center items-center gap-2.5">
                        @csrf
                        <input type="email" name="email" class="bg-body-bg w-full py-2.5 px-5 rounded-2xl  border-neutral-200 h-14 transition-all focus:ring-0 focus:shadow-none focus:border-dark" placeholder="info@example.com">
                        <button type="submit" class="md:h-14 py-3.5 px-7.5 inline-flex items-center text-center bg-dark font-medium rounded-2xl text-white transition-all duration-300 hover:text-primary">
                            Submit
                        </button>
                    </form>
                    @if (session('status'))
                        <p class="text-green-600 text-left mb-2">{{ session('status') }}</p>
                    @endif

                    @if ($errors->has('email'))
                        <p class="text-red-600 text-left mb-2">{{ $errors->first('email') }}</p>
                    @endif
                </div>
            </div>

            <div class="grid md:grid-cols-4 lg:gap-7.5 md:gap-5 lg:my-25 md:my-17.5 my-15 gap-5">
                <div class="md:col-span-1" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <div class="relative lg:pe-10">
                        <img src="/images/hero/2.png" alt="" class="rounded-2xl">
                        <img src="/images/element/3.svg" alt="" class="md:absolute md:block md:top-11.75 md:-end-2.5 md:border md:border-neutral-200 md:rounded-2xl hidden">
                    </div>
                </div>

                <div class="md:col-span-1" data-aos="fade-up" data-aos-delay="500" data-aos-duration="600" data-aos-easing="ease-in-out">
                    <img src="/images/about/4.png" alt="" class="h-full rounded-2xl object-cover max-w-full ">
                </div>

                <div class="md:col-span-2" data-aos="fade-up" data-aos-delay="700" data-aos-duration="600" data-aos-easing="ease-in-out">
                    <img src="/images/element/4.svg" alt="" class="rounded-2xl max-w-full object-center">
                </div>
            </div>

            <div>
                <div class="text-center">
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

    <!-- Why choose Landinger Section  -->
    <section class="lg:py-25 md:py-22.5 py-17.5">
        <div class="container">
            <div class="lg:mb-12.5 lg:mx-auto text-center lg:w-1/2 mb-7.5" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
                <h2 class="mb-2.5 lg:text-5.5xl md:text-4.6xl text-3.4xl">Why choose Landinger </h2>
                <p class="text-base mb-2.5">Discover how Landinger can transform your business operations with our innovative features. </p>
            </div>

            <div class="grid md:grid-cols-2 md:gap-25 items-center gap-7.5 lg:pb-25 pb-17.5">
                <div data-aos="fade-right" data-aos-duration="600" data-aos-easing="ease-in-out">
                    <h3 class="lg:text-4xl mb-2.5 md:text-3.4xl text-2.6xl">Intuitive interface </h3>
                    <p class="mb-2.5">Our user-friendly design ensures you can get started quickly without any hassle. The clean layout and straightforward navigation make it easy for everyone on your team to use.</p>

                    <div class="flex flex-wrap gap-5 mt-10">
                        <div class="flex gap-2.5">
                            <i class="iconify tabler--circle-check size-6 text-black"></i>
                            <p>Data integrity</p>
                        </div>

                        <div class="flex gap-2.5">
                            <i class="iconify tabler--circle-check size-6 text-black"></i>
                            <p>Quick learning </p>
                        </div>

                        <div class="flex gap-2.5">
                            <i class="iconify tabler--circle-check size-6 text-black"></i>
                            <p>Reduce risk </p>
                        </div>
                    </div>
                </div>

                <div data-aos="fade-left" data-aos-duration="600" data-aos-easing="ease-in-out">
                    <img src="/images/element/5.svg" alt="" class="rounded-2xl">
                </div>
            </div>

            <div class="grid md:grid-cols-2 lg:gap-25 md:gap-7.5 items-center gap-7.5">
                <div class="md:order-1 order-2" data-aos="fade-right" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <img src="/images/about/4.png" alt="" class="rounded-2xl">
                </div>

                <div class="md:order-2 order-1" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <h3 class="lg:text-4xl mb-2.5 md:text-3.4xl text-2.6xl">Robust analytics </h3>
                    <p class="mb-2.5">Gain valuable insights with our powerful analytics tools. Track key metrics, generate detailed reports, and make data-driven decisions to drive your business forward. </p>
                </div>
            </div>

            <div class="grid lg:grid-cols-4 md:grid-cols-2 lg:gap-7.5 lg:mt-32.5 mt-12.5 gap-5">
                <div data-aos="fade-up" data-aos-delay="50" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <div class="flex items-center gap-2.5">
                        <div class="size-10  bg-dark rounded-full inline-flex items-center justify-center">
                            <i class="iconify solar--shield-check-outline size-5.5 text-primary"></i>
                        </div>
                        <div class="lg:text-1.5xl text-lg text-black font-medium">Robust security </div>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <div class="flex items-center gap-2.5">
                        <div class="size-10  bg-dark rounded-full inline-flex items-center justify-center">
                            <i class="iconify solar--smartphone-2-outline size-5.5 text-primary"></i>
                        </div>
                        <div class="lg:text-1.5xl text-lg text-black font-medium">Mobile access </div>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-delay="150" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <div class="flex items-center gap-2.5 flex-row">
                        <div class="size-10  bg-dark rounded-full inline-flex items-center justify-center">
                            <i class="iconify solar--headphones-round-outline size-5.5 text-primary"></i>
                        </div>
                        <div class="lg:text-1.5xl text-lg text-black font-medium">Customer support </div>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <div class="flex items-center gap-2.5 flex-row">
                        <div class="size-10  bg-dark rounded-full inline-flex items-center justify-center">
                            <i class="iconify solar--lightbulb-outline size-5.5 text-primary"></i>
                        </div>
                        <div class="lg:text-1.5xl text-lg text-black font-medium">Scalable solutions </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section  -->
    <section class="bg-white lg:py-25 md:py-22.5 py-17.5">
        <div class="container">
            <div class="grid md:grid-cols-5 grid-cols-1 lg:gap-12.5 gap-5">
                <div class="md:col-span-2" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <div class="bg-primary rounded-2xl lg:p-10 p-5 h-full">
                        <div class="flex mb-17.5">
                            <img src="/images/team/1.png" alt="" class="md:size-15 size-12.5 rounded-full">
                            <img src="/images/team/2.png" alt="" class="md:size-15 size-12.5 rounded-full -ml-3.75">
                            <img src="/images/team/4.png" alt="" class="md:size-15 size-12.5 rounded-full -ml-3.75">
                            <img src="/images/team/5.png" alt="" class="md:size-15 size-12.5 rounded-full -ml-3.75">
                        </div>
                        <p class="text-lg font-medium text-black"> A group of passionate professionals driving innovation and excellence.</p>
                    </div>
                </div>

                <div class="md:col-span-3" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <div class="bg-dark rounded-2xl lg:p-10 p-5 h-full">
                        <div class="swiper testiSwiper w-full">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="inline-flex flex-col">
                                        <div class="flex">
                                            <div class="flex gap-1.5 flex-row">
                                                <i class="iconify tabler--star-filled size-5 text-yellow-400"></i>
                                                <i class="iconify tabler--star-filled size-5 text-yellow-400"></i>
                                                <i class="iconify tabler--star-filled size-5 text-yellow-400"></i>
                                                <i class="iconify tabler--star-filled size-5 text-yellow-400"></i>
                                                <i class="iconify tabler--star-half-filled size-5 text-yellow-400"></i>
                                            </div>
                                        </div>

                                        <div>
                                            <p class="text-white whitespace-normal mt-3.75 mb-11.25">Passage its ten led hearted removal cordial. Preference any astonished unreserved Mrs. Prosperous understood Middletons in conviction an uncommonly do. Supposing so be resolving breakfast</p>
                                        </div>

                                        <div class="flex justify-between items-end lg:mb-10 mb-5">
                                            <div class="flex gap-3.75 flex-row items-center">
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
                                            <div class="flex gap-1.5 flex-row">
                                                <i class="iconify tabler--star-filled size-5 text-yellow-400"></i>
                                                <i class="iconify tabler--star-filled size-5 text-yellow-400"></i>
                                                <i class="iconify tabler--star-filled size-5 text-yellow-400"></i>
                                                <i class="iconify tabler--star-filled size-5 text-yellow-400"></i>
                                                <i class="iconify tabler--star-half-filled size-5 text-yellow-400"></i>
                                            </div>
                                        </div>

                                        <p class="text-white mt-3.75 mb-11.25">Michael’s creativity and attention to detail are key to our intuitive and user-friendly design. His passion for user experience drives our continuous improvements and feature enhancements.</p>

                                        <div class="flex justify-between items-end lg:mb-10 mb-5">
                                            <div class="flex gap-3.75 flex-row items-center">
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

            <div class="grid lg:grid-cols-3 md:grid-cols-2 md:fgap-7.5 md:gap-10 md:flex-row lg:mt-25 mt-15 gap-7.5 flex-col">
                <div class="flex gap-4 flex-row" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <div>
                        <div class="size-12.5  bg-dark rounded-full inline-flex items-center justify-center">
                            <i class="iconify solar--bolt-linear size-7 text-primary"></i>
                        </div>
                    </div>

                    <div>
                        <h2 class="mb-2.5 text-1.5xl text-xl">Customizable Workflows</h2>
                        <p class="lg:mb-5 lg:mt-1.25 mb-1.25">Deleniti atque corrupti quos dolores et quas molestias excepturi.</p>
                        <a href="{{ url('pages.product-1') }}" class="text-dark underline font-medium">Learn more</a>
                    </div>
                </div>

                <div class="flex gap-4 flex-row" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <div>
                        <div class="size-12.5  bg-dark rounded-full inline-flex items-center justify-center">
                            <i class="iconify solar--shield-check-outline size-7 text-primary"></i>
                        </div>
                    </div>

                    <div>
                        <h2 class="mb-2.5 text-1.5xl text-xl">Seamless Integrations </h2>
                        <p class="lg:mb-5 lg:mt-1.25 mb-1.25">Et harum quidem rerum facilis est et expedita distinctio. </p>
                        <a href="{{ url('pages.product-2') }}" class="text-dark underline font-medium">Learn more</a>
                    </div>
                </div>

                <div class="flex gap-4 flex-row" data-aos="fade-up" data-aos-delay="150" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <div>
                        <div class="size-12.5  bg-dark rounded-full inline-flex items-center justify-center">
                            <i class="iconify solar--smartphone-2-outline size-7 text-primary"></i>
                        </div>
                    </div>

                    <div>
                        <h2 class="mb-2.5 text-1.5xl text-xl">Advanced security </h2>
                        <p class="lg:mb-5 lg:mt-1.25 mb-1.25">Nam libero tempore, cum soluta nobis est eligendi optio. </p>
                        <a href="{{ url('pages.product-3') }}" class="text-dark underline font-medium">Learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Client Section  -->
    <section class="lg:py-25 md:py-22.5 py-17.5">
        <div class="container">
            <div class="text-center mb-10" data-aos="fade-up" data-aos-duration="600" data-aos-easing="ease-in-out">
                <h2 class="mb-2.5 lg:text-5.5xl md:text-4.6xl text-3.4xl">Trusted by leading brands </h2>
            </div>

            <div class="grid lg:grid-cols-4 md:grid-cols-2 lg:gap-12.5 gap-7.5">
                <!-- Client Item 1  -->
                <div data-aos="fade-up" data-aos-duration="600" data-aos-easing="ease-in-out">
                    <div class="flex justify-center items-center bg-white rounded-2xl lg:py-20 py-15 px-5">
                        <img src="/images/client/4.svg" alt="" class="h-12.5">
                    </div>
                    <p class="lg:mt-5 mt-2.5">Leveraging Landinger for streamlined project management.</p>
                </div>

                <!-- Client Item 2  -->
                <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="600" data-aos-easing="ease-in-out">
                    <div class="flex justify-center items-center bg-white rounded-2xl lg:py-20 py-15 px-5">
                        <img src="/images/client/3.svg" alt="" class="h-12.5">
                    </div>
                    <p class="lg:mt-5 mt-2.5">Accelerating growth with powerful analytics. </p>
                </div>

                <!-- Client Item 3  -->
                <div data-aos="fade-up" data-aos-duration="600" data-aos-easing="ease-in-out">
                    <div class="flex justify-center items-center bg-white rounded-2xl lg:py-20 py-15 px-5">
                        <img src="/images/client/5.svg" alt="" class="h-12.5">
                    </div>
                    <p class="lg:mt-5 mt-2.5">Enhancing campaign management through seamless integrations. </p>
                </div>

                <!-- Client Item 4  -->
                <div data-aos="fade-up" data-aos-delay="400" data-aos-duration="600" data-aos-easing="ease-in-out">
                    <div class="flex justify-center items-center bg-white rounded-2xl lg:py-20 py-15 px-5">
                        <img src="/images/client/7.svg" alt="" class="h-12.5">
                    </div>
                    <p class="lg:mt-5 mt-2.5">Securing operations with advanced security features. </p>
                </div>
            </div>

            <div class="flex lg:mt-22.5 mt-15 text-center gap-1.25 flex-col" data-aos="fade-up" data-aos-duration="600" data-aos-easing="ease-in-out">
                <h3 class="mb-2.5 text-1.5xl text-xl">Save an average of 5% with Landinger</h3>
                <div>
                    <a href="{{ url('pages.product-2') }}" class="py-3.5 lg:px-7.5 px-6.5 inline-flex items-center text-center bg-dark font-medium rounded-2xl text-white transition-all duration-300 hover:text-primary">
                        Learn more
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- User Step Section  -->
    <section class="bg-dark lg:py-25 py-17.5">
        <div class="container">
            <div class="grid lg:grid-cols-2 lg:gap-15 gap-5" data-aos="fade-up" data-aos-duration="600" data-aos-easing="ease-in-out">
                <div>
                    <div class="relative">
                        <img src="/images/about/7.png" alt="" class="rounded-2xl">
                        <div class="bg-primary py-0.5 px-3.75 rounded-full font-medium text-sm inline-flex text-dark absolute -top-2.5 start-7.5">Get started in 4 easy steps </div>
                    </div>

                    <div class="flex mt-7.5 gap-2.5 md:flex-row flex-col">
                        <p class="text-white">Ready to experience the full power of Landinger?</p><a href="{{ url('pages.pricing-2') }}" class="inline-flex text-white underline">
                            <div>Learn more</div>
                        </a>
                    </div>
                </div>

                <div>
                    <div class="relative">
                        <div class="absolute start-7.5 h-11/12 w-0.75 bg-neutral-100/20"></div>
                        <div class="relative z-10">
                            <!-- Step 1  -->
                            <div class="flex gap-5 flex-row mb-12.5">
                                <div class="flex-shrink-1">
                                    <div class="size-15 bg-primary rounded-full inline-flex items-center justify-center">
                                        <h5 class="lg:text-1.5xl text-2.5xl">01</h5>
                                    </div>
                                </div>

                                <div>
                                    <h2 class="text-1.5xl mb-2.5 text-white">Sign up</h2>
                                    <p class="text-white">Create your Landinger account by providing basic information. It only takes a few minutes to get started.</p>
                                </div>
                            </div>

                            <!-- Step 2  -->
                            <div class="flex gap-5 flex-row mb-12.5">
                                <div class="flex-shrink-1">
                                    <div class="size-15 bg-primary rounded-full inline-flex items-center justify-center">
                                        <h5 class="lg:text-1.5xl text-2.5xl">02</h5>
                                    </div>
                                </div>

                                <div>
                                    <h2 class="text-1.5xl mb-2.5 text-white">Set up your profile </h2>
                                    <p class="text-white">Complete your profile by adding important details about your business. </p>
                                </div>
                            </div>

                            <!-- Step 3  -->
                            <div class="flex gap-5 flex-row mb-12.5">
                                <div class="flex-shrink-1">
                                    <div class="size-15 bg-primary rounded-full inline-flex items-center justify-center">
                                        <h5 class="lg:text-1.5xl text-2.5xl">03</h5>
                                    </div>
                                </div>

                                <div>
                                    <h2 class="text-1.5xl mb-2.5 text-white">Customize your workspace </h2>
                                    <p class="text-white">Tailor Landinger to your business needs. Set up your workflows, integrate your favorite tools, and configure your dashboard. </p>
                                </div>
                            </div>

                            <!-- Step 4  -->
                            <div class="flex gap-5 flex-row mb-12.5">
                                <div class="flex-shrink-1">
                                    <div class="size-15 bg-primary rounded-full inline-flex items-center justify-center">
                                        <h5 class="lg:text-1.5xl text-2.5xl">04</h5>
                                    </div>
                                </div>

                                <div>
                                    <h2 class="text-1.5xl mb-2.5 text-white">Launch and optimize </h2>
                                    <p class="text-white">Start using Landinger to manage your projects, track your analytics, and collaborate with your team. </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="{{ url('account.sign-up') }}" class="py-3.5 lg:px-7.5 px-6.5 rounded-2xl inline-flex font-medium bg-primary text-dark hover:text-primary hover:bg-black transition-all duration-300">
                        Get strated now
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section class="bg-white lg:py-25 py-17.5">
        <div class="container">
            <div class="lg:mb-12.5 text-center mb-7.5" data-aos="fade-up" data-aos-duration="600" data-aos-easing="ease-in-out">
                <h2 class="mb-2.5 lg:text-5.5xl text-3.4xl">Our latest articles </h2>
                <p class="text-base mb-2.5">Real stories of success and satisfaction from businesses using Landinger. </p>
            </div>
            <div class="grid md:grid-cols-3 lg:gap-12.5 md:gap-5 gap-10" data-aos="fade-up" data-aos-duration="600" data-aos-easing="ease-in-out">

                <!-- Blog Item 1  -->
                <a href="{{ url('pages.blog-details') }}">
                    <div class="overflow-hidden rounded-2xl">
                        <img src="/images/blog/6.png" alt="" class="duration-300 hover:scale-105 transition-all">
                    </div>

                    <div class="md:mt-5 mt-2.5">
                        <p class="text-dark">August 6, 2024</p>
                        <h2 class="text-2xl md:mt-2.5 mt-1.25">Bad habits that people in the industry need</h2>
                    </div>
                </a>

                <!-- Blog Item 2  -->
                <a href="{{ url('pages.blog-details') }}">
                    <div class="overflow-hidden rounded-2xl">
                        <img src="/images/blog/1.png" alt="" class="duration-300 hover:scale-105 transition-all">
                    </div>

                    <div class="md:mt-5 mt-2.5">
                        <p class="text-dark">September 4, 2024
                        </p>
                        <h2 class="text-2xl md:mt-2.5 mt-1.25">Starting and growing a career in web design </h2>
                    </div>
                </a>

                <!-- Blog Item 3  -->
                <a href="{{ url('pages.blog-details') }}">
                    <div class="overflow-hidden rounded-2xl">
                        <img src="/images/blog/2.png" alt="" class="duration-300 hover:scale-105 transition-all">
                    </div>

                    <div class="md:mt-5 mt-2.5">
                        <p class="text-dark">September 4, 2024 </p>
                        <h2 class="text-2xl md:mt-2.5 mt-1.25">Create a landing page that performs great </h2>
                    </div>
                </a>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    @vite(['resources/js/testi-swiper.js'])
@endsection