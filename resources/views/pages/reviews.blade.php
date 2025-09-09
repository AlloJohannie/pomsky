@extends('layouts.landing', ['title' => 'Review'])

@section('content')
    <!-- Customers section  -->
    <section class="bg-dark lg:py-25 md:py-22.5 py-17.5 ">
        <div class="container">
            <div class="grid md:grid-cols-2 lg:gap-25 md:gap-5 gap-5" data-aos="fade-up" data-aos-duration="600" data-aos-easing="ease-in-out">
                <div class="h-full flex justify-between flex-col md:order-1 order-2">
                    <div>
                        <h2 class="mb-2.5 text-white lg:text-6xl md:text-5.5xl text-4xl">Satisfied customers speak </h2>
                        <p class="mb-2.5 text-white">Discover what our valued customers have to say about their experiences with us put the outlived answered position. </p>
                    </div>

                    <div class="grid grid-cols-2 gap-5">
                        <div>
                            <h2 class="text-white lg:text-5.5xl md:text-4.6xl text-3.4xl">96<span class="text-primary">%</span></h2>
                            <p class="text-white">Positive reviews</p>
                        </div>

                        <div>
                            <h2 class="text-white lg:text-5.5xl md:text-4.6xl text-3.4xl">10<span class="text-primary">K</span></h2>
                            <p class="text-white">Happy customers </p>
                        </div>
                    </div>
                </div>

                <div class="md:order-2 order-1">
                    <img src="/images/about/9.png" alt="" class="rounded-2xl lg:size-full">
                </div>
            </div>
        </div>
    </section>

    <!-- Customers Feedback Section  -->
    <section class="bg-white lg:py-25 md:py-22.5 py-17.5 ">
        <div class="container">
            <div class="lg:mb-12.5 text-center mb-7.5" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
                <h2 class="mb-2.5 lg:text-5.5xl md:text-4.6xl text-3.4xl">Feedback from our customers </h2>
            </div>

            <div class="grid lg:grid-cols-3 lg:gap-7.5" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">

                <!-- Customers Feedback 1  -->
                <div>
                    <div class="bg-body-bg lg:p-7.5 p-5 rounded-2xl mb-7.5">
                        <div class="flex gap-3.75 flex-col">
                            <div>
                                <div class="flex gap-1.5 mb-3.75">
                                    <i class="iconify tabler--star-filled lg:size-5 text-yellow-400"></i>
                                    <i class="iconify tabler--star-filled lg:size-5 text-yellow-400"></i>
                                    <i class="iconify tabler--star-filled lg:size-5 text-yellow-400"></i>
                                    <i class="iconify tabler--star-filled lg:size-5 text-yellow-400"></i>
                                    <i class="iconify tabler--star-half-filled lg:size-5 text-yellow-400"></i>
                                </div>
                                <p class="mb-2.5">It's been a game-changer for our business, and I can't imagine going back to the way things were before. </p>
                            </div>

                            <div>
                                <div class="text-black text-bold">— Louis Ferguson</div>
                            </div>
                        </div>
                    </div>

                    <!-- Customers Feedback 2  -->
                    <div class="bg-body-bg lg:p-7.5 p-5 rounded-2xl mb-7.5">
                        <div class="flex gap-3.75 flex-col">
                            <div>
                                <div class="flex gap-1.5 mb-3.75">
                                    <i class="iconify tabler--star-filled lg:size-5 text-yellow-400"></i>
                                    <i class="iconify tabler--star-filled lg:size-5 text-yellow-400"></i>
                                    <i class="iconify tabler--star-filled lg:size-5 text-yellow-400"></i>
                                    <i class="iconify tabler--star-filled lg:size-5 text-yellow-400"></i>
                                    <i class="iconify tabler--star-half-filled lg:size-5 text-yellow-400"></i>
                                </div>
                                <p class="mb-2.5">Started several mistake joy say painful removed reached end. State burst think end are its. Arrived off she elderly beloved him affixed noisier yet. </p>
                            </div>

                            <div class="flex gap-2.5 items-center">
                                <img src="/images/team/5.png" alt="" class="size-12.5 rounded-full">
                                <div class="text-black text-bold">Carolyn Ortiz </div>
                            </div>
                        </div>
                    </div>

                    <!-- Customers Feedback 3  -->
                    <div class="lg:mb-7.5 mb-5">
                        <img src="/images/about/8.png" alt="" class="h-57.5 w-full object-cover object-bottom rounded-2xl">
                    </div>
                </div>

                <div>
                    <!-- Customers Feedback 4  -->
                    <div class="bg-body-bg lg:p-7.5 p-5 rounded-2xl mb-7.5">
                        <div class="flex gap-3.75 flex-col">
                            <div>
                                <img src="/images/hero/1.png" alt="" class="lg:h-49 size-full object-cover rounded-2xl">
                            </div>

                            <div>
                                <div class="flex gap-1.5 mb-3.75">
                                    <i class="iconify tabler--star-filled lg:size-5 text-yellow-400"></i>
                                    <i class="iconify tabler--star-filled lg:size-5 text-yellow-400"></i>
                                    <i class="iconify tabler--star-filled lg:size-5 text-yellow-400"></i>
                                    <i class="iconify tabler--star-filled lg:size-5 text-yellow-400"></i>
                                    <i class="iconify tabler--star-half-filled lg:size-5 text-yellow-400"></i>
                                </div>
                                <p class="mb-2.5">Started several mistake joy say painful removed reached end. State burst think end are its. Arrived off she elderly beloved him affixed noisier yet. </p>
                            </div>
                        </div>
                    </div>

                    <!-- Customers Feedback 5  -->
                    <div class="bg-body-bg lg:p-7.5 p-5 rounded-2xl lg:mb-7.5 mb-5">
                        <div class="flex gap-3.75 flex-col">
                            <div>
                                <div class="flex gap-1.5 mb-3.75">
                                    <i class="iconify tabler--star-filled lg:size-5 text-yellow-400"></i>
                                    <i class="iconify tabler--star-filled lg:size-5 text-yellow-400"></i>
                                    <i class="iconify tabler--star-filled lg:size-5 text-yellow-400"></i>
                                    <i class="iconify tabler--star-filled lg:size-5 text-yellow-400"></i>
                                    <i class="iconify tabler--star-half-filled lg:size-5 text-yellow-400"></i>
                                </div>
                                <p class="mb-2.5">Started several mistake joy say painful removed reached end. State burst think end are its. Arrived off she elderly beloved him affixed noisier yet. </p>
                            </div>

                            <div class="flex gap-2.5 items-center">
                                <img src="/images/team/3.png" alt="" class="size-12.5 rounded-full">
                                <div class="text-black text-bold">Billy Vasquez </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <!-- Customers Feedback 6  -->
                    <div class="mb-7.5">
                        <img src="/images/about/4.png" alt="" class="h-57.5 w-full object-cover rounded-2xl">
                    </div>

                    <!-- Customers Feedback 7  -->
                    <div class="bg-body-bg lg:p-7.5 p-5 rounded-2xl lg:mb-7.5 mb-5">
                        <div class="flex gap-3.75 flex-col">
                            <div>
                                <div class="bg-white rounded-2xl flex items-center justify-center mb-5 h-45">
                                    <img src="/images/client/5.svg" alt="" class="h-7.5">
                                </div>
                            </div>

                            <div>
                                <div class="flex gap-1.5 mb-3.75">
                                    <i class="iconify tabler--star-filled lg:size-5 text-yellow-400"></i>
                                    <i class="iconify tabler--star-filled lg:size-5 text-yellow-400"></i>
                                    <i class="iconify tabler--star-filled lg:size-5 text-yellow-400"></i>
                                    <i class="iconify tabler--star-filled lg:size-5 text-yellow-400"></i>
                                    <i class="iconify tabler--star-half-filled lg:size-5 text-yellow-400"></i>
                                </div>
                                <p class="mb-2.5">Started several mistake joy say painful removed reached end. State burst think end are its. Arrived off she elderly beloved him affixed noisier yet. </p>
                            </div>

                            <div class="flex gap-2.5 items-center">
                                <img src="/images/team/2.png" alt="" class="size-12.5 rounded-full">
                                <div class="text-black text-bold">Amanda Reed </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection