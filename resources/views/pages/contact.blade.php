@extends('layouts.landing', ['title' => 'Contact'])

@section('content')
    <!--  Contact Section -->
    <section class="bg-body-bg lg:py-25 md:py-22.5 py-17.5 ">
        <div class="container-small">

            <div class="text-center md:mb-12.5 mb-7.5" data-aos="fade-up" data-aos-delay="150" data-aos-duration="500" data-aos-easing="ease-in-out">
                <h2 class="mb-2.5 lg:text-6xl md:text-4.6xl text-4xl">We're ready to assist you </h2>
                <p>Have questions? We’re ready to help! </p>
            </div>

            <div class="grid lg:grid-cols-2 lg:gap-12.5 md:gap-5 gap-7.5" data-aos="fade-up" data-aos-delay="150" data-aos-duration="500" data-aos-easing="ease-in-out">

                <div class="bg-primary lg:p-10 p-5 rounded-2xl h-full flex justify-between gap-12.5 flex-col">
                    <div>
                        <h2 class="text-2.5xl">For any inquiries or feedback, our team is here to assist you. </h2>
                    </div>

                    <div class="flex gap-2.5 flex-col">
                        <a href="#" class="underline text-dark">hello@example.com</a>
                        <a href="#" class="underline text-dark">+0 12 457 4578</a>
                        <p>Chicago HQ Estica Cop. Macomb, MI 48042</p>
                    </div>
                </div>

                <form method="POST" action="{{ route('contact.store') }}">
                    @csrf

                    <!-- Name -->
                    <div class="mb-5">
                        <label for="name" class="mb-1.25 block font-normal">Name</label>
                        <input class="rounded-2xl py-2.5 px-5 border border-neutral-200 w-full h-14" name="name" placeholder="John Deo" type="text" id="name">
                        @error('name')
                            <p class="text-red-600 mt-1 text-sm text-left">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email Address -->
                    <div class="mb-5">
                        <label for="email" class="mb-1.25 block font-normal">Email address</label>
                        <input class="rounded-2xl py-2.5 px-5 border border-neutral-200 w-full h-14" name="email" placeholder="hello@example.com" type="email" id="email">
                        @error('email')
                            <p class="text-red-600 mt-1 text-sm text-left">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-5 flex gap-5 lg:flex-row flex-col">
                        <!-- Phone -->
                        <div class="w-full">
                            <label for="phone" class="mb-1.25 block font-normal">Phone</label>
                            <input class="rounded-2xl py-2.5 px-5 border border-neutral-200 w-full h-14" name="phone" placeholder="+2 123 456 66" type="text" id="phone">
                            @error('phone')
                                <p class="text-red-600 mt-1 text-sm text-left">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Subject -->
                        <div class="w-full">
                            <label for="subject" class="mb-1.25 block font-normal">Subject</label>
                            <input class="rounded-2xl py-2.5 px-5 border border-neutral-200 w-full h-14" name="subject" placeholder="Subject" type="text" id="subject">
                            @error('subject')
                                <p class="text-red-600 mt-1 text-sm text-left">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Message -->
                    <div class="mb-5">
                        <label for="message" class="mb-1.25 block font-normal">Message</label>
                        <textarea class="rounded-2xl py-2.5 px-5 border border-neutral-200 w-full h-50" name="message" maxlength="5000" placeholder="Comment" id="message"></textarea>
                        @error('message')
                            <p class="text-red-600 mt-1 text-sm text-left">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <button type="submit" class="md:h-14 w-full py-3.5 lg:px-7.5 px-6.5 text-center bg-dark font-medium rounded-2xl text-white transition-all duration-300 hover:text-primary">
                            Submit
                        </button>
                    </div>

                    <!-- Success Message -->
                    @if (session('status'))
                        <p class="text-green-600 mt-2">{{ session('status') }}</p>
                    @endif
                </form>


            </div>
        </div>
    </section>

    <!-- Contact Info Section  -->
    <section class="bg-white lg:py-25 md:py-22.5 py-17.5">
        <div class="container">
            <div class="lg:mb-12.5 text-center mb-7.5" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
                <h2 class="mb-2.5 lg:text-5.5xl md:text-4.6xl text-3.4xl">Try these helpful solutions </h2>
                <p class="text-base mb-2.5">Departure defective arranging rapturous did believe him all had supported. </p>
            </div>

            <div class="grid md:grid-cols-3 lg:gap-7.5 gap-5 flex-col">

                <!-- Contact Info 1  -->
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
        </div>
    </section>
@endsection