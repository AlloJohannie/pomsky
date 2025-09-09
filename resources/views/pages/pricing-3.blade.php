@extends('layouts.landing', ['title' => 'Pricing 3'])

@section('content')
    <!-- Pricing Section  -->
    <section class="bg-body-bg lg:py-25 md:py-22.5 py-17.5">
        <div class="container">
            <div class="lg:w-5/10 mx-auto md:w-4/5 md:p-12.5 py-7.5 px-5 bg-white rounded-2xl text-center" data-aos="fade-up" data-aos-duration="600" data-aos-easing="ease-in-out">
                <div>
                    <h1 class="mb-2.5 lg:text-4xl md:text-3.4xl text-2.6xl">Price</h1>
                    <h2 class="lg:text-6xl md:text-5.5xl text-4xl mb-2.5">$10.50 </h2>
                    <p class="mb-9">per product / per month </p>
                    <a href="{{ url('pages.contact') }}" class="mb-7 py-6.25 md:px-7.5 px-6.5 block text-center bg-dark font-medium rounded-2xl text-white  transition-all duration-300 hover:text-primary hover:bg-black">
                        Sign up
                    </a>
                </div>
                <p class="mb-2.5">14-days free trial. No credit card required. </p>
                <div class="md:mt-15 mt-7.5">
                    <h3 class="mb-2.5 md:text-2.5xl text-1.5xl"> What's included? </h3>
                    <div class="mt-5 inline-block">
                        <div class="flex gap-2.5 mb-2.5"><i class="iconify tabler--circle-check size-5 mt-0.5 text-black"></i>
                            <p class="text-base">Advanced AI chatbot features </p>
                        </div>
                        <div class="flex gap-2.5 mb-2.5"><i class="iconify tabler--circle-check size-5 mt-0.5 text-black"></i>
                            <p class="text-base">Up to 50K monthly chat interactions </p>
                        </div>
                        <div class="flex gap-2.5 mb-2.5"><i class="iconify tabler--circle-check size-5 mt-0.5 text-black"></i>
                            <p class="text-base">Priority email and chat support </p>
                        </div>
                        <div class="flex gap-2.5"><i class="iconify tabler--circle-check size-5 mt-0.5 text-black"></i>
                            <p class="text-base">Advanced integrations </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white lg:py-25 md:py-22.5 py-17.5">
        <div class="container">
            <div class="grid md:grid-cols-2 lg:gap-15 md:gap-7.5 lg:mx-auto lg:w-9/10 gap-7.5" data-aos="fade-up" data-aos-duration="600" data-aos-easing="ease-in-out">
                <div class="bg-body-bg rounded-2xl md:p-10 py-7.5 px-5">
                    <p class="mb-2.5 md:text-[21px] text-lg leading-[1.3]">Perceived end knowledge certainly day sweetness why cordially. Ask a quick six seven offer see among. Handsome met debating sir dwelling age material.</p>
                    <div class="flex items-center gap-5 md:mt-7.5 mt-3.75">
                        <div>
                            <img src="/images/team/6.png" alt="" class="size-12.5 rounded-full">
                        </div>
                        <div>
                            <h5 class="text-lg">Judy Nguyen </h5>
                            <p>Operations Manager </p>
                        </div>
                    </div>
                </div>

                <div class="md:flex md:items-center">
                    <div class="grid md:grid-cols-3 grid-cols-2 md:gap-7.5 gap-2.5">
                        <!-- client 1  -->
                        <img src="/images/client/4.svg" alt="" class="md:w-35 md:h-15 h-7.5 w-27.5">

                        <!-- client 2  -->
                        <img src="/images/client/6.svg" alt="" class="md:w-35 md:h-15 h-7.5 w-27.5">

                        <!-- client 3  -->
                        <img src="/images/client/7.svg" alt="" class="md:w-35 md:h-15 h-7.5 w-27.5">

                        <!-- client 4  -->
                        <img src="/images/client/5.svg" alt="" class="md:w-35 md:h-15 h-7.5w-27.5">

                        <!-- client 5  -->
                        <img src="/images/client/11.svg" alt="" class="md:w-35 md:h-15 h-7.5 w-27.5">

                        <!-- client 6  -->
                        <img src="/images/client/9.svg" alt="" class="md:w-35 md:h-15 h-7.5 w-27.5">

                        <!-- client 7  -->
                        <img src="/images/client/7.svg" alt="" class="md:w-35 md:h-15 h-7.5 w-27.5">

                        <!-- client 8  -->
                        <img src="/images/client/10.svg" alt="" class="md:w-35 md:h-15 h-7.5 w-27.5">

                        <!-- client 9  -->
                        <img src="/images/client/6.svg" alt="" class="md:w-35 md:h-15 h-7.5 w-27.5">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection