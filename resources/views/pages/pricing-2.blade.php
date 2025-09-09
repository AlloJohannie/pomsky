@extends('layouts.landing', ['title' => 'Pricing 2'])

@section('content')
    <!-- Pricing Section  -->
    <section class="bg-body-bg lg:py-25 md:py-22.5 py-17.5">
        <div class="container-medium">
            <div class="lg:mb-12.5 text-center mb-7.5" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
                <h2 class="mb-2.5 lg:text-6xl md:text-[52px] text-4xl">Pick your perfect package </h2>
                <p>Find the ideal plan for your needs with our customizable packages, designed to fit any budget and requirement. </p>
            </div>

            <div class="flex lg:gap-12.5 gap-7.5 flex-col" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
                <div class="bg-white rounded-2xl lg:p-12.5 md:p-7.5 py-7.5 px-3.75">
                    <div class="grid md:grid-cols-2 md:gap-12.5 gap-5">

                        <!-- Pricing Item 1  -->
                        <div>
                            <h2 class="mb-2.5 text-1.5xl">Basic plan </h2>
                            <h4 class="lg:text-4.4xl md:text-4xl text-3xl flex items-center">$ 25.00 USD <div class="text-base neutral-700">/month</div>
                            </h4>
                            <p class="lg:mt-12.5 lg:mb-2.5 my-5">Essential features for small teams and individuals </p>

                            <div>
                                <a href="{{ url('pages.pricing-2-details') }}" class="py-3.5 lg:px-7.5 px-6.5 inline-flex text-center bg-primary font-medium rounded-2xl text-black  transition-all duration-300 hover:text-primary hover:bg-black">
                                    Get Started
                                </a>
                            </div>
                        </div>

                        <div>
                            <h4 class="mb-2.5 text-1.5xl">What's included</h4>
                            <div class="flex gap-3.75 flex-col">
                                <div class="flex gap-2.5 "><i class="iconify tabler--circle-check size-5 mt-0.5"></i>
                                    <p class="text-base">Basic reporting and analytics </p>
                                </div>

                                <div class="flex gap-2.5"><i class="iconify tabler--circle-check size-5 mt-0.5"></i>
                                    <p class="text-base">Limited number of users </p>
                                </div>

                                <div class="flex gap-2.5"><i class="iconify tabler--circle-check size-5 mt-0.5"></i>
                                    <p class="text-base">Basic customer support </p>
                                </div>

                                <div class="flex gap-2.5"><i class="iconify tabler--circle-check size-5 mt-0.5"></i>
                                    <p class="text-base">Standard functionality </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pricing Item 2  -->
                <div class="bg-white rounded-2xl lg:p-12.5 md:p-7.5 py-7.5 px-3.75">
                    <div class="grid md:grid-cols-2 md:gap-12.5 gap-5">
                        <div>
                            <h2 class="mb-2.5 text-1.5xl">Premium plan </h2>
                            <h4 class="lg:text-4.4xl md:text-4xl text-3xl flex items-center">$ 55.00 USD <div class="text-base neutral-700">/month</div>
                            </h4>
                            <p class="lg:mt-12.5 lg:mb-2.5 my-5">For established companies and enterprises </p>

                            <div>
                                <a href="{{ url('pages.pricing-2-details') }}" class="py-3.5 lg:px-7.5 px-6.5 inline-flex text-center bg-primary font-medium rounded-2xl text-black  transition-all duration-300 hover:text-primary hover:bg-black">
                                    Get Started
                                </a>
                            </div>
                        </div>

                        <div>
                            <h4 class="mb-2.5 text-1.5xl">What's included</h4>
                            <div class="flex gap-3.75 flex-col">
                                <div class="flex gap-2.5"><i class="iconify tabler--circle-check size-5 mt-0.5"></i>
                                    <p class="text-base">API access for deeper integration </p>
                                </div>

                                <div class="flex gap-2.5"><i class="iconify tabler--circle-check size-5 mt-0.5"></i>
                                    <p class="text-base">Advanced customization options </p>
                                </div>

                                <div class="flex gap-2.5"><i class="iconify tabler--circle-check size-5 mt-0.5"></i>
                                    <p class="text-base">Dedicated customer support </p>
                                </div>

                                <div class="flex gap-2.5"><i class="iconify tabler--circle-check size-5 mt-0.5"></i>
                                    <p class="text-base">Advanced security features </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pricing Item 3  -->
                <div class="bg-white rounded-2xl lg:p-12.5 md:p-7.5 py-7.5 px-3.75">
                    <div class="grid md:grid-cols-2 md:gap-12.5 gap-5">
                        <div>
                            <h2 class="mb-2.5 text-1.5xl">Enterprise plan </h2>
                            <h4 class="lg:text-4.4xl md:text-4xl text-3xl flex items-center">$ 85.00 USD <div class="text-base neutral-700">/month</div>
                            </h4>
                            <p class="lg:mt-12.5 lg:mb-2.5 my-5">For large-scale organizations </p>

                            <div>
                                <a href="{{ url('pages.pricing-2-details') }}" class="py-3.5 lg:px-7.5 px-6.5 inline-flex text-center bg-primary font-medium rounded-2xl text-black  transition-all duration-300 hover:text-primary hover:bg-black">
                                    Get Started
                                </a>
                            </div>
                        </div>

                        <div>
                            <h4 class="mb-2.5 text-1.5xl">What's included</h4>
                            <div class="flex gap-3.75 flex-col">
                                <div class="flex gap-2.5 "><i class="iconify tabler--circle-check size-5 mt-0.5"></i>
                                    <p class="text-base">Dedicated account manager </p>
                                </div>

                                <div class="flex gap-2.5"><i class="iconify tabler--circle-check size-5 mt-0.5"></i>
                                    <p class="text-base">Advanced data analytics and insights </p>
                                </div>

                                <div class="flex gap-2.5"><i class="iconify tabler--circle-check size-5 mt-0.5"></i>
                                    <p class="text-base">Scalability for high-volume usage </p>
                                </div>

                                <div class="flex gap-2.5"><i class="iconify tabler--circle-check size-5 mt-0.5"></i>
                                    <p class="text-base">Tailored features and solutions </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="bg-white lg:py-25 md:py-22.5 py-17.5">
        <div class="container">
            <div class="md:mb-12.5 mb-7.5 text-center" data-aos="fade-up" data-aos-duration="600" data-aos-easing="ease-in-out">
                <h2 class="lg:text-5.5xl md:text-4.6xl text-3.4xl mb-2.5">Frequently asked questions </h2>
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
    <section>
        <div class="relative bg-cover bg-center lg:py-25 md:py-22.5 py-17.5 flex items-center justify-center bg-[url('/public/images/about/15.png')]">
            <div class="bg-body-bg py-15 px-5 lg:w-3/5 md:w-4/5 w-9/10 rounded-2xl text-center" data-aos="fade-up" data-aos-duration="600" data-aos-easing="ease-in-out">
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