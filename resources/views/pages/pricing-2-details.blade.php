@extends('layouts.landing', ['title' => 'Pricing Details'])

@section('content')
    <!-- Basic Plan Section  -->
    <section class="bg-body-bg lg:py-25 md:py-22.5 py-17.5">
        <div class="container">
            <div class="grid md:grid-cols-2 md:gap-15 items-center gap-7.5" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
                <div>
                    <div class="mb-7.5">
                        <h1 class="lg:text-6xl md:text-5.5xl text-4xl mb-2.5">Basic plan </h1>
                        <p class="mb-2.5">Essential features for small teams and individuals </p>
                    </div>

                    <div class="mb-3.75">
                        <label for="name" class="mb-1.25 block font-normal">Plan Duration </label>

                        <select class="border border-neutral-200 w-full h-14 rounded-2xl mb-5">
                            <option value="" selected="">Select Plan Duration</option>
                            <option value="">Monthly</option>
                            <option value="">Yearly</option>
                        </select>

                        <a href="#" class="py-3.5 md:px-7.5 px-6 block text-center bg-dark font-medium rounded-2xl text-white transition-all duration-300 hover:bg-black hover:text-primary">
                            Add to cart
                        </a>
                    </div>
                </div>

                <div class="bg-white lg:p-10 md:p-7.5 p-5 rounded-2xl">
                    <h4 class="mb-2.5 md:text-3.4xl text-2.6xl">$ 25.00 USD </h4>
                    <div class="flex gap-3.75 flex-col mt-7.5">
                        <div class="flex gap-2.5 "><i class="iconify tabler--circle-check size-4.5 mt-0.5"></i>
                            <p class="text-base">Basic reporting and analytics </p>
                        </div>

                        <div class="flex gap-2.5"><i class="iconify tabler--circle-check size-4.5 mt-0.5"></i>
                            <p class="text-base">Limited number of users </p>
                        </div>

                        <div class="flex gap-2.5"><i class="iconify tabler--circle-check size-4.5 mt-0.5"></i>
                            <p class="text-base">Basic customer support </p>
                        </div>

                        <div class="flex gap-2.5"><i class="iconify tabler--circle-check size-4.5 mt-0.5"></i>
                            <p class="text-base">Standard functionality </p>
                        </div>
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
@endsection