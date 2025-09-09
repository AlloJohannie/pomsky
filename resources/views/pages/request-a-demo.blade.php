@extends('layouts.landing', ['title' => 'Request Demo'])

@section('content')
    <!-- Request-a-demo Section -->
    <section class="bg-body-bg lg:py-25 md:py-22.5 py-17.5 ">
        <div class="container">
            <div class="lg:w-7/10 lg:mx-auto" data-aos="fade-up" data-aos-delay="150" data-aos-duration="500" data-aos-easing="ease-in-out">

                <div class="text-center md:mb-12.5 mb-7.5">
                    <h2 class="mb-2.5 lg:text-6xl md:text-4.6xl text-4xl">Request a demo </h2>
                    <p>Elevate your business with a personalized demo of our solutions. Request your demo today and start your ascent to success. </p>
                </div>

                <div class="grid md:grid-cols-2 lg:gap-12.5 md:gap-7.5 gap-7.5 mt-15">
                    <div class="bg-dark lg:p-10 p-5 rounded-2xl flex md:gap-12.5 gap-5 flex-col h-full justify-between">
                        <div>
                            <h2 class="text-white mb-2.5 lg:text-4xl md:text-3.4xl text-2.6xl">Ready to elevate? request your demo today</h2>
                        </div>

                        <div>
                            <div class="gap-3.75 flex flex-col">
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

                    <form>
                        <!-- name  -->
                        <div class="mb-5">
                            <label for="name" class="mb-1.25 block font-normal">Name</label>
                            <input class="rounded-2xl py-2.5 px-5 border border-neutral-200 w-full h-14" maxlength="256" name="name" data-name="Name" placeholder="" type="text" id="name">
                        </div>

                        <!-- Email Address  -->
                        <div class="mb-5">
                            <label for="name" class="mb-1.25 block font-normal">Email address </label>
                            <input class="rounded-2xl py-2.5 px-5 border border-neutral-200 w-full h-14" maxlength="256" name="name" data-name="Name" placeholder="" type="text" id="name">
                        </div>

                        <!-- Company Name  -->
                        <div class="mb-5">
                            <label for="name" class="mb-1.25 block font-normal">Your company name </label>
                            <input class="rounded-2xl py-2.5 px-5 border border-neutral-200 w-full h-14" maxlength="256" name="name" data-name="Name" placeholder="" type="text" id="name">
                        </div>

                        <!-- Your Position  -->
                        <div class="mb-5">
                            <label for="name" class="mb-1.25 block font-normal">Your position </label>
                            <input class="rounded-2xl py-2.5 px-5 border border-neutral-200 w-full h-14" maxlength="256" name="name" data-name="Name" placeholder="" type="text" id="name">
                        </div>

                        <div>
                            <button type="submit" class="md:h-14 w-full py-3.5 lg:px-7.5 px-6.5 text-center bg-dark font-medium rounded-2xl text-white transition-all duration-300 hover:text-primary">Submit</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
@endsection