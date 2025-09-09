@extends('layouts.landing', ['title' => 'CTAs'])

@section('content')
    <!-- CTAs Section  -->
    <section class="bg-body-bg lg:py-25 md:py-22.5 py-17.5">
        <div class="container">
            <h1 class="lg:text-6xl md:text-5.5xl text-4xl mb-2.5 text-center" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">CTAs (Call to actions) </h1>
        </div>
    </section>

    <!-- CTA One Section  -->
    <section class="bg-white lg:py-25 md:py-22.5 py-17.5">
        <div class="container">
            <div class="bg-body-bg lg:py-17.5 lg:px-3.75 md:py-10 md:px-3.75 py-5 px-3.75 rounded-2xl" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
                <div class="md:mx-auto md:w-7/10 text-center">
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

    <!-- CTA Two Section  -->
    <section>
        <div class="relative bg-cover bg-center lg:py-25 md:py-22.5 py-17.5 flex items-center justify-center bg-[url('/public/images/about/15.png')]">
            <div class="bg-body-bg py-15 px-5 lg:w-3/5 md:w-4/5 w-9/10 rounded-2xl text-center" data-aos="fade-up" data-aos-duration="600" data-aos-easing="ease-in-out">
                <div class="bg-primary py-0.5 px-3.75 rounded-full font-medium text-sm inline-flex mb-2.5 text-dark">Seize the opportunity </div>
                <h2 class="mb-2.5 lg:text-4xl md:text-3.4xl text-2.6xl">Ready to experience the difference?</h2>
                <div class="mt-5">
                    <a href="{{ url('pages.request-a-demo') }}" class="py-3.5 lg:px-7.5 px-6.5 inline-flex mb-1 text-center bg-dark font-medium rounded-2xl text-white transition-all duration-300 hover:text-primary">
                        Request a demo
                    </a>

                    <div class="flex justify-center mt-2">
                        <p>Need assistance?</p>
                        <a href="{{ url('pages.contact') }}" class="text-dark underline font-medium">Chat now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Three Section  -->
    <section class="bg-white lg:py-25 md:py-22.5 py-17.5">
        <div class="container">
            <div class="grid md:grid-cols-2" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
                <div>
                    <img src="/images/about/9.png" alt="" class="rounded-tl-2xl md:rounded-bl-2xl md:rounded-tr-none rounded-tr-2xl">
                </div>

                <div class="bg-primary rounded-tr-2xl rounded-br-2xl lg:p-15 p-5 h-full flex justify-center flex-col">
                    <h2 class="mb-2.5 md:text-4xl text-2.6xl">Not sure which plan to go with?</h2>
                    <p class="mb-9">Our team of seasoned professionals brings a wealth of knowledge and experience across various industries.</p>

                    <div>
                        <a href="{{ url('pages.contact') }}" class="py-3.5 lg:px-7.5 px-6.5 inline-flex text-center bg-dark font-medium rounded-2xl text-white transition-all duration-300 hover:text-primary">
                            Talk to an expert
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    @vite(['resources/js/testi-swiper.js'])
@endsection