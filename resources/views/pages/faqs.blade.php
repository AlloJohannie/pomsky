@extends('layouts.landing', ['title' => 'FAQs'])

@section('content')
    <!-- FAQS Section  -->
    <section class="bg-body-bg lg:py-25 md:py-12.5 py-7.5">
        <div class="container">
            <div class="text-center" data-aos="fade-up" data-aos-delay="150" data-aos-duration="500" data-aos-easing="ease-in-out">
                <h1 class="lg:text-6xl md:text-5.5xl text-4xl mb-2.5">Frequently asked questions </h1>
                <p class="mb-2.5">Passage its ten led heated removal cordial. Preference any astonished unreserved Mrs. </p>
            </div>
        </div>
    </section>

    <!-- FAQ Section  -->
    <section class="bg-white lg:py-25 md:py-22.5 py-17.5">
        <div class="container-small">
            <div class="text-center md:mb-20 mb-15" data-aos="fade-up" data-aos-delay="150" data-aos-duration="500" data-aos-easing="ease-in-out">
                <h2 class="lg:text-4xl md:text-4.6xl text-3.4xl md:mb-7.5 mb-2.5">General </h2>
                <div>
                    <div class="md:space-y-7.5 space-y-5">

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

                            <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300 text-start">
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

                            <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300 text-start">
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

                            <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300 text-start">
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

                            <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300 text-start">
                                <p class="mt-5">If you need to cancel your subscription, you can do so from your account settings. If you have any issues, please contact our support team for assistance.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center md:mb-20 mb-15" data-aos="fade-up" data-aos-delay="200" data-aos-duration="500" data-aos-easing="ease-in-out">
                <h2 class="lg:text-4xl md:text-4.6xl text-3.4xl md:mb-7.5 mb-2.5">Software </h2>

                <div>
                    <div class="md:space-y-7.5 space-y-5">

                        <!-- FAQ One -->
                        <div class="hs-accordion bg-body-bg p-5 rounded-2xl">
                            <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
                                <h3 class="md:text-1.5xl text-xl">
                                    How can I update my billing information?
                                </h3>

                                <div>
                                    <div class="bg-white hs-accordion-active:bg-primary size-7.5 rounded-full flex items-center justify-center">
                                        <i class="iconify tabler--plus size-5 block hs-accordion-active:hidden"></i>
                                        <i class="iconify tabler--minus size-5 hidden hs-accordion-active:block"></i>
                                    </div>
                                </div>
                            </button>

                            <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300 text-start">
                                <p class="mt-5">Billing information can be updated by logging into your account and going to the billing section under account settings. </p>
                            </div>
                        </div>

                        <!-- FAQ Two -->
                        <div class="hs-accordion bg-body-bg p-5 rounded-2xl">
                            <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
                                <h3 class="md:text-1.5xl text-xl">
                                    Will I receive a refund if I cancel my subscription?
                                </h3>

                                <div>
                                    <div class="bg-white hs-accordion-active:bg-primary size-7.5 rounded-full flex items-center justify-center">
                                        <i class="iconify tabler--plus size-5 block hs-accordion-active:hidden"></i>
                                        <i class="iconify tabler--minus size-5 hidden hs-accordion-active:block"></i>
                                    </div>
                                </div>
                            </button>

                            <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300 text-start">
                                <p class="mt-5">Our refund policy varies depending on the subscription plan. Please refer to our refund policy page or contact support for specific details. </p>
                            </div>
                        </div>

                        <!-- FAQ Three -->
                        <div class="hs-accordion bg-body-bg p-5 rounded-2xl">
                            <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
                                <h3 class="md:text-1.5xl text-xl">
                                    Can I set up automatic payments for my invoices?
                                </h3>

                                <div>
                                    <div class="bg-white hs-accordion-active:bg-primary size-7.5 rounded-full flex items-center justify-center">
                                        <i class="iconify tabler--plus size-5 block hs-accordion-active:hidden"></i>
                                        <i class="iconify tabler--minus size-5 hidden hs-accordion-active:block"></i>
                                    </div>
                                </div>
                            </button>

                            <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300 text-start">
                                <p class="mt-5">Automatic payments can be set up in the billing section of your account settings. </p>
                            </div>
                        </div>

                        <!-- FAQ Four -->
                        <div class="hs-accordion bg-body-bg p-5 rounded-2xl">
                            <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
                                <h3 class="md:text-1.5xl text-xl">
                                    How can I view my billing history?
                                </h3>

                                <div>
                                    <div class="bg-white hs-accordion-active:bg-primary size-7.5 rounded-full flex items-center justify-center">
                                        <i class="iconify tabler--plus size-5 block hs-accordion-active:hidden"></i>
                                        <i class="iconify tabler--minus size-5 hidden hs-accordion-active:block"></i>
                                    </div>
                                </div>
                            </button>

                            <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300 text-start">
                                <p class="mt-5">View your billing history by logging into your account and going to the billing section. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center" data-aos="fade-up" data-aos-delay="250" data-aos-duration="500" data-aos-easing="ease-in-out">
                <h2 class="lg:text-4xl md:text-4.6xl text-3.4xl md:mb-7.5 mb-2.5">Billing </h2>

                <div>
                    <div class="md:space-y-7.5 space-y-5">

                        <!-- FAQ One -->
                        <div class="hs-accordion bg-body-bg p-5 rounded-2xl">
                            <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
                                <h3 class="md:text-1.5xl text-xl">
                                    Do you share my personal information with third parties?
                                </h3>

                                <div>
                                    <div class="bg-white hs-accordion-active:bg-primary size-7.5 rounded-full flex items-center justify-center">
                                        <i class="iconify tabler--plus size-5 block hs-accordion-active:hidden"></i>
                                        <i class="iconify tabler--minus size-5 hidden hs-accordion-active:block"></i>
                                    </div>
                                </div>
                            </button>

                            <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300 text-start">
                                <p class="mt-5">We do not share your personal information with third parties without your consent, except as required by law. Please review our privacy policy for more details. </p>
                            </div>
                        </div>

                        <!-- FAQ Two -->
                        <div class="hs-accordion bg-body-bg p-5 rounded-2xl">
                            <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
                                <h3 class="md:text-1.5xl text-xl">
                                    Is my payment information secure?
                                </h3>

                                <div>
                                    <div class="bg-white hs-accordion-active:bg-primary size-7.5 rounded-full flex items-center justify-center">
                                        <i class="iconify tabler--plus size-5 block hs-accordion-active:hidden"></i>
                                        <i class="iconify tabler--minus size-5 hidden hs-accordion-active:block"></i>
                                    </div>
                                </div>
                            </button>

                            <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300 text-start">
                                <p class="mt-5">Your payment information is secure, as we use industry-standard encryption. </p>
                            </div>
                        </div>

                        <!-- FAQ Three -->
                        <div class="hs-accordion bg-body-bg p-5 rounded-2xl">
                            <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
                                <h3 class="md:text-1.5xl text-xl">
                                    Can I access, update, or delete my personal information?
                                </h3>

                                <div>
                                    <div class="bg-white hs-accordion-active:bg-primary size-7.5 rounded-full flex items-center justify-center">
                                        <i class="iconify tabler--plus size-5 block hs-accordion-active:hidden"></i>
                                        <i class="iconify tabler--minus size-5 hidden hs-accordion-active:block"></i>
                                    </div>
                                </div>
                            </button>

                            <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300 text-start">
                                <p class="mt-5">Access, update, or delete your personal information through your account settings. If you need assistance, please contact our support team. </p>
                            </div>
                        </div>

                        <!-- FAQ Four -->
                        <div class="hs-accordion bg-body-bg p-5 rounded-2xl">
                            <button class="hs-accordion-toggle w-full flex justify-between items-center gap-2.5 text-start">
                                <h3 class="md:text-1.5xl text-xl">
                                    How long do you retain my personal data?
                                </h3>

                                <div>
                                    <div class="bg-white hs-accordion-active:bg-primary size-7.5 rounded-full flex items-center justify-center">
                                        <i class="iconify tabler--plus size-5 block hs-accordion-active:hidden"></i>
                                        <i class="iconify tabler--minus size-5 hidden hs-accordion-active:block"></i>
                                    </div>
                                </div>
                            </button>

                            <div class="hs-accordion-content w-full hidden overflow-hidden transition-[height] duration-300 text-start">
                                <p class="mt-5">We retain your personal data for as long as your account is active or as needed to provide you with our services. Please refer to our data retention policy for more details. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Info Section  -->
    <section class="bg-white lg:pb-25 md:pb-22.5 pb-17.5">
        <div class="container">
            <div class="lg:mb-12.5 text-center mb-7.5" data-aos="fade-up" data-aos-delay="150" data-aos-duration="500" data-aos-easing="ease-in-out">
                <h2 class="mb-2.5 lg:text-5.5xl md:text-4.6xl text-3.4xl">Try these helpful solutions </h2>
                <p class="text-base mb-2.5">Departure defective arranging rapturous did believe him all had supported. </p>
            </div>

            <!-- Contact Info 1  -->
            <div class="grid md:grid-cols-3 lg:gap-7.5 gap-5 flex-col">
                <div class="bg-primary lg:p-7.5 p-5 rounded-2xl" data-aos="fade-up" data-aos-delay="150" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <div class="md:size-12.5 size-10  bg-dark rounded-full inline-flex items-center justify-center mb-5">
                        <i class="iconify solar--bolt-linear size-6 text-primary"></i>
                    </div>

                    <h3 class="md:text-2.5xl text-1.5xl mb-2.5">Access our knowledge base </h3>
                    <p class="md:mt-5 md:mb-10 my-2.5">Access a vast reservoir of knowledge and expertise, conveniently. </p>
                    <a href="#" class="underline text-dark">Explore help center </a>
                </div>

                <!-- Contact Info 2  -->
                <div class="bg-dark lg:p-7.5 p-5 rounded-2xl" data-aos="fade-up" data-aos-delay="200" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <div class="md:size-12.5 size-10  bg-primary rounded-full inline-flex items-center justify-center mb-5">
                        <i class="iconify solar--chart-square-linear size-6 text-black"></i>
                    </div>

                    <h3 class="md:text-2.5xl text-1.5xl mb-2.5 text-white">Discover Landinger tutorials </h3>
                    <p class="md:mt-5 md:mb-10 my-2.5 text-white">Watch and learn from market experts how to utilize our product effectively. </p>
                    <a href="#" class="underline text-white">Watch tutorials</a>
                </div>

                <!-- Contact Info 3  -->
                <div class="bg-body-bg lg:p-7.5 p-5 rounded-2xl" data-aos="fade-up" data-aos-delay="250" data-aos-duration="500" data-aos-easing="ease-in-out">
                    <div class="md:size-12.5 size-10  bg-dark rounded-full inline-flex items-center justify-center mb-5">
                        <i class="iconify solar--lightbulb-outline size-6 text-primary"></i>
                    </div>

                    <h3 class="md:text-2.5xl text-1.5xl mb-2.5">Join our community</h3>
                    <p class="md:mt-5 md:mb-10 my-2.5">Collaborate, share insights, and cultivate relationships within our community network. </p>
                    <a href="#" class="underline text-dark">Visit Facebook group </a>
                </div>
            </div>

            <div class="text-center md:mt-12.5 mt-10 flex gap-1.25 flex-col" data-aos="fade-up" data-aos-delay="250" data-aos-duration="500" data-aos-easing="ease-in-out">
                <h3 class="mb-2.5 md:text-1.5xl text-xl">Steel does not get what you are looking for </h3>
                <div>
                    <a href="{{ url('pages.contact') }}" class="py-3.5 md:px-7.5 px-6 inline-flex bg-dark font-medium rounded-2xl text-white transition-all duration-300 hover:text-primary">
                        Contact us
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection