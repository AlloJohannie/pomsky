@extends('layouts.landing', ['title' => 'About'])

@section('content')
    <!--  About Hero Section  -->
    <section class="bg-white lg:pb-25 pt-12.5 md:pb-22.5 py-17.5">
        <div class="container">
            <div class="grid lg:grid-cols-2 lg:gap-25 md:gap-5">
                <div data-aos="fade-right" data-aos-duration="600" data-aos-easing="ease-in-out">
                    <div>
                        <div class="bg-primary py-0.5 px-3.75 rounded-full font-medium text-sm inline-flex mb-2.5 text-dark">About us </div>
                        <h2 class="mb-2.5 lg:text-6xl md:text-5.5xl text-4xl">Empower your business with next-generation solutions. </h2>
                        <p class="lg:mb-10 mb-5">Welcome to Landinger, where innovation meets efficiency. Our cloud-based software solutions. </p>
                    </div>

                    <div class="lg:pt-10 pt-5 flex gap-5 border-t border-neutral-200">
                        <div>
                            <h2 class="md:text-5.5xl">4.8</h2>
                        </div>

                        <div>
                            <div class="flex gap-1.5 mb-1">
                                <i class="iconify tabler--star-filled lg:size-5 text-yellow-400"></i>
                                <i class="iconify tabler--star-filled lg:size-5 text-yellow-400"></i>
                                <i class="iconify tabler--star-filled lg:size-5 text-yellow-400"></i>
                                <i class="iconify tabler--star-filled lg:size-5 text-yellow-400"></i>
                                <i class="iconify tabler--star-half-filled lg:size-5 text-yellow-400"></i>
                            </div>
                            <p>Best rated company </p>
                        </div>
                    </div>
                </div>

                <div data-aos="fade-left" data-aos-duration="600" data-aos-easing="ease-in-out">
                    <img src="/images/about/11.png" alt="" class="rounded-2xl">
                </div>
            </div>
        </div>
    </section>

    <!-- Value Section  -->
    <section class="bg-body-bg lg:py-25 md:py-22.5 py-17.5">
        <div class="container">
            <div class="grid lg:grid-cols-2 lg:gap-12.5 gap-5">

                <div class="bg-dark lg:p-12.5 p-5 rounded-2xl" data-aos="fade-up" data-aos-duration="600" data-aos-easing="ease-in-out">
                    <div>
                        <h2 class="mb-2.5 md:text-4xl text-2.6xl text-white">Our core values</h2>
                        <p class="mb-2.5 text-white">Welcome to Landinger, where innovation meets efficiency. Our cloud-based software solutions.</p>
                    </div>

                    <div class="grid md:grid-cols-2 md:gap-5 gap-7.5 md:mt-20 md:mb-12.5 my-7.5">
                        <div>
                            <div class="size-12.5 md:mb-5 mb-2.5 bg-primary rounded-full inline-flex items-center justify-center">
                                <i class="iconify solar--chart-square-linear size-6 text-black"></i>
                            </div>
                            <h3 class="text-white mb-2.5 md:text-1.5xl text-xl">Innovation </h3>
                            <p class="mb-2.5 text-white">We embrace innovation as the cornerstone of our success. </p>
                        </div>

                        <div>
                            <div class="size-12.5 md:mb-5 mb-2.5 bg-primary rounded-full inline-flex items-center justify-center">
                                <i class="iconify solar--sale-linear size-6 text-black"></i>
                            </div>
                            <h3 class="text-white mb-2.5 md:text-1.5xl text-xl">Continuous Improvement </h3>
                            <p class="mb-2.5 text-white">Which is the same as saying through shrinking from. </p>
                        </div>
                    </div>

                    <div class="text-white">Empowerment &nbsp; · &nbsp; Impact &nbsp; · &nbsp; Customer-Centricity</div>
                </div>

                <div>
                    <div class="bg-primary lg:p-12.5 p-5 rounded-2xl" data-aos="fade-up" data-aos-delay="150" data-aos-duration="600" data-aos-easing="ease-in-out">
                        <div class="mb-7">
                            <h2 class="mb-2.5 md:text-4xl text-2.6xl">Ready to revolutionize your business? </h2>
                            <p class="mb-2.5">Take the first step towards unlocking your full potential with Landinger. </p>
                        </div>
                        <a href="{{ url('account.sign-up') }}" class="py-3.5 md:px-7.5 px-6 inline-flex text-white font-medium rounded-2xl bg-dark transition-all duration-300 hover:text-primary">
                            Sign in
                        </a>
                    </div>

                    <div class="grid md:grid-cols-2 lg:gap-12.5 md:gap-5 gap-5 lg:mt-12.5 mt-5" data-aos="fade-up" data-aos-delay="200" data-aos-duration="600" data-aos-easing="ease-in-out">
                        <div class="bg-white rounded-2xl lg:p-7.5 p-5">
                            <h2 class="lg:text-4.4xl md:text-4xl text-3xl">35+</h2>
                            <p class="md:mt-5 mt-2.5">Awards and counting</p>
                        </div>

                        <div class="bg-white rounded-2xl lg:p-7.5 p-5">
                            <h2 class="lg:text-4.4xl md:text-4xl text-3xl">>10K </h2>
                            <p class="md:mt-5 mt-2.5">Satisfied users </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision Section  -->
    <section class="bg-white lg:py-25 md:py-22.5 py-17.5">
        <div class="container">
            <h2 class="mb-2.5 lg:text-5.5xl md:text-4.6xl text-3.4xl" data-aos="fade-up" data-aos-delay="150" data-aos-duration="600" data-aos-easing="ease-in-out">Discover Landinger</h2>

            <div class="grid md:grid-cols-2 lg:gap-25 gap-5 mt-5 mb-10" data-aos="fade-up" data-aos-delay="150" data-aos-duration="600" data-aos-easing="ease-in-out">
                <div>
                    <h3 class="md:text-1.5xl text-xl mb-2.5">Mission</h3>
                    <p class="mb-2.5">At Landinger, our mission is to empower businesses of all sizes to thrive in the digital age by providing innovative, user-friendly software solutions. </p>
                </div>

                <div>
                    <h3 class="md:text-1.5xl text-xl mb-2.5">Vision</h3>
                    <p class="mb-2.5">Our vision is to revolutionize the way businesses operate by harnessing the power of technology to drive efficiency, collaboration, and growth. We envision a future where every organization, regardless of size or industry. </p>
                </div>
            </div>

            <div data-aos="fade-up" data-aos-delay="150" data-aos-duration="600" data-aos-easing="ease-in-out">
                <img src="/images/about/12.png" alt="" class="rounded-2xl">
            </div>
        </div>
    </section>

    <!-- Team Section  -->
    <section class="bg-body-bg lg:py-25 md:py-22.5 py-17.5">
        <div class="container">
            <div class="text-center mb-10" data-aos="fade-up" data-aos-delay="150" data-aos-duration="600" data-aos-easing="ease-in-out">
                <h2 class="mb-2.5 lg:text-5.5xl md:text-4.6xl text-3.4xl">Meet our team </h2>
            </div>

            <div class="grid lg:grid-cols-3 md:grid-cols-2 lg:gap-25 md:gap-7.5 gap-5" data-aos="fade-up" data-aos-delay="150" data-aos-duration="600" data-aos-easing="ease-in-out">

                <!-- Team Member 1 -->
                <a href="{{ url('pages.about-details') }}" class="flex items-center gap-5">
                    <div>
                        <img src="/images/team/5.png" alt="" class="md:size-37.5 size-22.5 rounded-full">
                    </div>

                    <div>
                        <h3 class="mb-2.5 md:text-1.5xl text-xl">Amanda Reed</h3>
                        <p>UI/UX Designer</p>
                    </div>
                </a>

                <!-- Team Member 2 -->
                <a href="{{ url('pages.about-details') }}" class="flex items-center gap-5">
                    <div>
                        <img src="/images/team/1.png" alt="" class="md:size-37.5 size-22.5 rounded-full">
                    </div>

                    <div>
                        <h3 class="mb-2.5 md:text-1.5xl text-xl">Lori Stevens</h3>
                        <p>Web Designer</p>
                    </div>
                </a>

                <!-- Team Member 3 -->
                <a href="{{ url('pages.about-details') }}" class="flex items-center gap-5">
                    <div>
                        <img src="/images/team/3.png" alt="" class="md:size-37.5 size-22.5 rounded-full">
                    </div>

                    <div>
                        <h3 class="mb-2.5 not-last-of-type:md:text-1.5xl text-xl">Larry Lawson</h3>
                        <p>Project Manager</p>
                    </div>
                </a>

                <!-- Team Member 4 -->
                <a href="{{ url('pages.about-details') }}" class="flex items-center gap-5">
                    <div>
                        <img src="/images/team/2.png" alt="" class="md:size-37.5 size-22.5 rounded-full">
                    </div>

                    <div>
                        <h3 class="mb-2.5 md:text-1.5xl text-xl">Judy Nguyen</h3>
                        <p>Financial Analyst</p>
                    </div>
                </a>

                <!-- Team Member 5 -->
                <a href="{{ url('pages.about-details') }}" class="flex items-center gap-5">
                    <div>
                        <img src="/images/team/6.png" alt="" class="md:size-37.5 size-22.5 rounded-full">
                    </div>

                    <div>
                        <h3 class="mb-2.5 md:text-1.5xl text-xl">Carolyn Ortiz</h3>
                        <p>Accountant</p>
                    </div>
                </a>
            </div>

            <div class="lg:mt-12.5 md:mt-10 mt-7.5 text-center flex gap-2.5 flex-col" data-aos="fade-up" data-aos-delay="150" data-aos-duration="600" data-aos-easing="ease-in-out">
                <div>
                    <a href="{{ url('pages.careers') }}" class="py-3.5 md:px-7.5 px-6 inline-flex bg-primary font-medium rounded-2xl  transition-all duration-300 hover:bg-black hover:text-primary">
                        Join us
                    </a>
                </div>
                <p>Together, let's create something amazing! </p>
            </div>
        </div>
    </section>
@endsection