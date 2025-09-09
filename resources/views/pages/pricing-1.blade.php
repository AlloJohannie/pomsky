@extends('layouts.landing', ['title' => 'Pricing 1'])

@section('content')
    <!-- Hero Section  -->
    <section class="lg:py-25 md:py-22.5 py-17.5">
        <div class="container">
            <div class="lg:mb-12.5 text-center md:mb-10 mb-7.5" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
                <h2 class="mb-2.5 lg:text-5.5xl md:text-4.6xl text-4xl">Choose your plan </h2>
                <p class="mb-2.5">Free 14-day trial for all plans &nbsp; · &nbsp; No credit card required &nbsp; · &nbsp; Cancel anytime</p>
            </div>

            <div class="lg:text-end text-center" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
                <div class="inline-flex relative mb-7.5">
                    <!-- Toggle -->
                    <div class="md:flex">
                        <div class="md:flex bg-white md:rounded-full rounded-2xl transition p-1.25">
                            <div id="toggle-count" class="flex flex-wrap justify-center" aria-label="Tabs" role="tablist" aria-orientation="horizontal">
                                <label for="toggle-count-monthly" class="active hs-tab-active:bg-dark text-base cursor-pointer hs-tab-active:text-white py-2.5 md:px-5 px-2.5 bg-transparent font-medium rounded-full" aria-selected="true" data-hs-tab="#segment-1" aria-controls="monthly" role="tab">
                                    Bllied Monthly
                                    <input id="toggle-count-monthly" name="toggle-count" type="radio" class="hidden" checked>
                                </label>

                                <label for="toggle-count-yearly" class="hs-tab-active:bg-dark text-base cursor-pointer hs-tab-active:text-white py-2.5 md:px-5 px-2.5 bg-transparent font-medium rounded-full" aria-selected="false" data-hs-tab="#segment-2" aria-controls="segment-2" role="tab">
                                    Billed Yearly
                                    <input id="toggle-count-yearly" name="toggle-count" type="radio" class="hidden">
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="absolute -top-8 flex items-center end-0">
                        <i class="iconify solar--arrow-to-down-left-outline size-7 text-neutral-700 -rotate-100"></i>
                        <a href="#" class="bg-primary text-black font-medium text-sm px-3.75 inline-flex py-1 rounded-full">
                            Save 20%
                        </a>
                    </div>
                </div>
            </div>

            <div data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
                <div class="grid lg:grid-cols-3 gap-10 md:items-center md:justify-center">

                    <!-- Pricing Tab Item 1  -->
                    <div class="md:p-10 p-5 bg-white rounded-2xl md:gap-20 flex flex-col lg:justify-between h-full">
                        <div>
                            <div class="gap-5 flex items-center mb-5">
                                <div class="lg:size-13.5 size-12.5 bg-primary rounded-full flex items-center justify-center">
                                    <i class="iconify solar--chart-square-linear lg:size-7.5 size-6.5 text-dark"></i>
                                </div>

                                <h3 class="text-1.5xl text-black">Basic plan</h3>
                            </div>
                            <h4 class="text-black lg:text-4.5xl text-4xl flex items-center">
                                <span>$</span>
                                <span data-hs-toggle-count='{ "target": "#toggle-count", "min": 19, "max": 15 }'>19</span>
                                <span class="text-base">/month</span>
                            </h4>

                            <div class="mt-5">
                                <div class="flex gap-2.5 mb-2.5"><i class="iconify tabler--circle-check size-6 text-black"></i>
                                    <div class="text- text-base">Basic AI chatbot features</div>
                                </div>

                                <div class="flex gap-2.5 mb-2.5"><i class="iconify tabler--circle-check size-6 text-black"></i>
                                    <div class=" text-base">Email support </div>
                                </div>

                                <div class="flex gap-2.5 mb-2.5"><i class="iconify tabler--circle-check size-6 text-black"></i>
                                    <div class="text-base">Standard integrations</div>
                                </div>
                            </div>
                        </div>

                        <a href="{{ url('pages.contact') }}" class="py-3.5 lg:px-7.5 px-6.5 block text-center bg-dark font-medium rounded-2xl text-white transition-all duration-300 hover:text-primary">
                            Get Started
                        </a>
                    </div>

                    <!-- Pricing Tab Item 2  -->
                    <div class="md:p-10 p-5 bg-primary rounded-2xl md:gap-20 flex flex-col lg:justify-between h-full">
                        <div>
                            <div class="gap-5 flex items-center mb-5">
                                <div class="lg:size-13.5 size-12.5 bg-dark rounded-full flex items-center justify-center ">
                                    <i class="iconify solar--shield-check-linear lg:size-7.5 text-primary size-6.5 "></i>
                                </div>
                                <h3 class="text-1.5xl text-black">Professional plan </h3>
                            </div>

                            <h4 class="text-black lg:text-4.5xl text-4xl flex items-center">
                                <span>$</span>
                                <span data-hs-toggle-count='{ "target": "#toggle-count", "min": 48, "max": 45 }'>49</span>
                                <span class="text-base">/month</span>
                            </h4>

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

                    <!-- Pricing Tab Item 3  -->
                    <div class="md:p-10 p-5 bg-dark rounded-2xl md:gap-20 flex flex-col">
                        <div>
                            <div class="gap-5 flex items-center mb-5">
                                <div class="lg:size-13.5 size-12.5 bg-primary rounded-full flex items-center justify-center">
                                    <i class="iconify solar--fire-outline lg:size-7.5 size-6.5 text-dark"></i>
                                </div>
                                <h3 class="text-1.5xl text-white">Enterprise plan</h3>
                            </div>

                            <h4 class="text-white lg:text-4.5xl text-4xl flex items-center">Custom pricing</h4>

                            <div class="mt-5">
                                <div class="flex gap-2.5 mb-2.5"><i class="iconify tabler--circle-check size-6 text-white"></i>
                                    <div class="text-white text-base">Premium AI chatbot features </div>
                                </div>

                                <div class="flex gap-2.5 mb-2.5"><i class="iconify tabler--circle-check size-6 text-white"></i>
                                    <div class="text-white text-base">Unlimited monthly chat interactions </div>
                                </div>

                                <div class="flex gap-2.5 mb-2.5"><i class="iconify tabler--circle-check size-6 text-white"></i>
                                    <div class="text-white text-base">24/7 priority email, chat, and phone support </div>
                                </div>

                                <div class="flex gap-2.5 mb-2.5"><i class="iconify tabler--circle-check size-6 text-white"></i>
                                    <div class="text-white text-base">Enterprise-level integrations </div>
                                </div>
                            </div>
                        </div>

                        <a href="{{ url('pages.contact') }}" class="py-3.5 lg:px-7.5 px-6.5 block text-center bg-primary font-medium rounded-2xl text-black transition-all duration-300 hover:bg-black hover:text-primary">
                            Get Started
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Review Section -->
    <section class="bg-white lg:py-25 md:py-22.5 py-17.5">
        <div class="container">
            <div class="lg:mb-12.5 text-center mb-7.5" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
                <h2 class="mb-2.5 lg:text-5.5xl md:text-4.6xl text-4xl">What people are saying </h2>
                <p class="mb-2.5">He moonlights difficult engrossed it, sportsmen.</p>
            </div>
            <div class="grid md:grid-cols-3 lg:gap-7.5 gap-5" data-aos="fade-up" data-aos-delay="200" data-aos-duration="500" data-aos-easing="ease-in-out">
                <!-- Review Item 1  -->
                <div>
                    <div class="bg-body-bg rounded-2xl lg:p-10 p-5 h-full">
                        <div class="flex mb-3.75">
                            <div class="flex gap-1.5">
                                <i class="iconify tabler--star-filled size-5 text-yellow-400"></i>
                                <i class="iconify tabler--star-filled size-5 text-yellow-400"></i>
                                <i class="iconify tabler--star-filled size-5 text-yellow-400"></i>
                                <i class="iconify tabler--star-filled size-5 text-yellow-400"></i>
                                <i class="iconify tabler--star-half-filled size-5 text-yellow-400"></i>
                            </div>
                        </div>
                        <p class="mb-2.5">Michael’s creativity and attention to detail are key to our intuitive and user-friendly design. His passion for user experience drives our. </p>

                        <div class="lg:mt-11.25 mt-5 flex items-center lg:gap-3.75 gap-2.5 flex-row">
                            <div>
                                <img src="/images/team/2.png" alt="" class="lg:size-15 size-10 rounded-full">
                            </div>

                            <div>
                                <div class="text-black">France Guerrero</div>
                                <p class="text-sm">UI/UX Designer</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review Item 2  -->
                <div>
                    <div class="bg-body-bg rounded-2xl lg:p-10 p-5 h-full">
                        <div class="flex mb-3.75">
                            <div class="flex gap-1.5">
                                <i class="iconify tabler--star-filled size-5 text-yellow-400"></i>
                                <i class="iconify tabler--star-filled size-5 text-yellow-400"></i>
                                <i class="iconify tabler--star-filled size-5 text-yellow-400"></i>
                                <i class="iconify tabler--star-filled size-5 text-yellow-400"></i>
                                <i class="iconify tabler--star-half-filled size-5 text-yellow-400"></i>
                            </div>
                        </div>
                        <p class="mb-2.5">Son agreed to others Exeter period myself few yet nature. Mention Mr manners opinion if garrets enabled To occasional dissimilar.</p>

                        <div class="lg:mt-11.25 mt-5 flex items-center lg:gap-3.75 gap-2.5">
                            <div>
                                <img src="/images/team/1.png" alt="" class="lg:size-15 size-10 rounded-full">
                            </div>

                            <div>
                                <div class="text-black">Samuel Bishop</div>
                                <p class="text-sm">Web Designe</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review Item 3  -->
                <div class="bg-body-bg rounded-2xl lg:p-10 p-5 h-full">
                    <div class="flex mb-3.75">
                        <div class="flex gap-1.5">
                            <i class="iconify tabler--star-filled size-5 text-yellow-400"></i>
                            <i class="iconify tabler--star-filled size-5 text-yellow-400"></i>
                            <i class="iconify tabler--star-filled size-5 text-yellow-400"></i>
                            <i class="iconify tabler--star-filled size-5 text-yellow-400"></i>
                            <i class="iconify tabler--star-half-filled size-5 text-yellow-400"></i>
                        </div>
                    </div>
                    <p class="mb-2.5">Insipidity the sufficient discretion imprudence resolution sir him decisively. Proceed how any engaged visitor explained propriety.</p>

                    <div class="lg:mt-11.25 mt-5 flex items-center lg:gap-3.75 gap-2.5 flex-row">
                        <div>
                            <img src="/images/team/3.png" alt="" class="lg:size-15 size-10 rounded-full">
                        </div>

                        <div>
                            <div class="text-black">Louis Ferguson</div>
                            <p class="text-sm">Project Manager</p>
                        </div>
                    </div>
                </div>

                <!-- Review Item 4  -->
                <div class="bg-body-bg rounded-2xl lg:p-10 p-5 h-full">
                    <div class="flex mb-3.75">
                        <div class="flex gap-1.5">
                            <i class="iconify tabler--star-filled size-5 text-yellow-400"></i>
                            <i class="iconify tabler--star-filled size-5 text-yellow-400"></i>
                            <i class="iconify tabler--star-filled size-5 text-yellow-400"></i>
                            <i class="iconify tabler--star-filled size-5 text-yellow-400"></i>
                            <i class="iconify tabler--star-half-filled size-5 text-yellow-400"></i>
                        </div>
                    </div>
                    <p class="mb-2.5">Affronting imprudence do he he everything. Sex lasted dinner wanted indeed wished outlaw. Far advanced settling say. </p>

                    <div class="lg:mt-11.25 mt-5 flex items-center lg:gap-3.75 gap-2.5">
                        <div>
                            <img src="/images/team/4.png" alt="" class="lg:size-15 size-10 rounded-full">
                        </div>

                        <div>
                            <div class="text-black">Judy Nguyen</div>
                            <p class="text-sm">Financial Analyst</p>
                        </div>
                    </div>
                </div>

                <!-- Review Item 5  -->
                <div class="bg-body-bg rounded-2xl lg:p-10 p-5 h-full">
                    <div class="flex mb-3.75">
                        <div class="flex gap-1.5">
                            <i class="iconify tabler--star-filled size-5 text-yellow-400"></i>
                            <i class="iconify tabler--star-filled size-5 text-yellow-400"></i>
                            <i class="iconify tabler--star-filled size-5 text-yellow-400"></i>
                            <i class="iconify tabler--star-filled size-5 text-yellow-400"></i>
                            <i class="iconify tabler--star-half-filled size-5 text-yellow-400"></i>
                        </div>
                    </div>
                    <p class="mb-2.5">Post no so what deal evil rent by real in. But her ready least set lived spite solid. September how men saw tolerably two behavior.</p>

                    <div class="lg:mt-11.25 mt-5 flex items-center lg:gap-3.75 gap-2.5">
                        <div>
                            <img src="/images/team/2.png" alt="" class="lg:size-15 size-10 rounded-full">
                        </div>

                        <div>
                            <div class="text-black">Carolyn Ortiz</div>
                            <p class="text-sm">Accountant</p>
                        </div>
                    </div>
                </div>

                <!-- Review Item 6  -->
                <div class="bg-body-bg rounded-2xl lg:p-10 p-5 h-full">
                    <div class="flex mb-3.75">
                        <div class="flex gap-1.5">
                            <i class="iconify tabler--star-filled size-5 text-yellow-400"></i>
                            <i class="iconify tabler--star-filled size-5 text-yellow-400"></i>
                            <i class="iconify tabler--star-filled size-5 text-yellow-400"></i>
                            <i class="iconify tabler--star-filled size-5 text-yellow-400"></i>
                            <i class="iconify tabler--star-half-filled size-5 text-yellow-400"></i>
                        </div>
                    </div>
                    <p class="mb-2.5">Improved own provided blessing may peculiar domestic. Sight house has sex never. No visited raising gravity outward subject my cottage.</p>

                    <div class="lg:mt-11.25 mt-5 flex items-center lg:gap-3.75 gap-2.5">
                        <div>
                            <img src="/images/team/6.png" alt="" class="lg:size-15 size-10 rounded-full">
                        </div>

                        <div>
                            <div class="text-black">Amanda Reed</div>
                            <p class="text-sm">Web Developer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section  -->
    <section class="bg-white lg:pb-25 md:pb-22.5 pb-17.5">
        <div class="container">
            <div class="md:mb-12.5 mb-7.5 text-center" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
                <h2 class="lg:text-5.5xl md:text-4.6xl text-3.4xl mb-2.5">Frequently asked questions </h2>
            </div>

            <div data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
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

    <section class="bg-white lg:pb-25 md:pb-22.5 pb-17.5">
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