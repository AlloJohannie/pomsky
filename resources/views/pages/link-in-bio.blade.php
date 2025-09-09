@extends('layouts.landing', ['title' => 'Link in Bio'])

@section('content')
    <!-- Link-in-bio Section  -->
    <section class="bg-body-bg md:py-15 py-3.75 pt-3.75">
        <div class="container">
            <div class="lg:w-1/2 mx-auto md:w-4/5 md:p-12.5 p-5 bg-white rounded-2xl text-center">
                <div>
                    <div class="md:size-25 size-22.5 md:mb-5 mb-2.5 bg-primary rounded-full inline-flex items-center justify-center">
                        <img src="/images/logo/landinger-icon.svg" alt="" class="md:size-10 size-12.5">
                    </div>
                    <h1 class="md:text-6xl text-4xl">Landinger </h1>
                    <p class="mb-2.5">A brief overview of your professional background and experience, highlighting key accomplishments and skills. </p>

                    <div class="md:py-10 py-5 flex gap-5 flex-col">
                        <a href="#" class="py-3.5 px-7.5  items-center text-center bg-dark font-medium rounded-2xl text-white transition-all duration-300 hover:text-primary hover:bg-black">
                            Visit our website
                        </a>

                        <a href="#" class="py-3.5 px-7.5  items-center text-center bg-dark font-medium rounded-2xl text-white transition-all duration-300 hover:text-primary hover:bg-black">
                            Read our blog
                        </a>

                        <a href="#" class="py-3.5 px-7.5  items-center text-center bg-dark font-medium rounded-2xl text-white transition-all duration-300 hover:text-primary hover:bg-black">
                            Visit product
                        </a>

                        <a href="#" class="py-3.5 px-7.5  items-center text-center bg-dark font-medium rounded-2xl text-white transition-all duration-300 hover:text-primary hover:bg-black">
                            Contact Us
                        </a>
                    </div>

                    <div class="flex gap-2.5 flex-col">
                        <p>Follow us on social media</p>
                        <div class="flex justify-center gap-3.75 text-black">
                            <a href="#">
                                <i class="iconify tabler--brand-facebook md:size-6 size-5 transform transition duration-300 hover:scale-110"></i>
                            </a>
                            <a href="#">
                                <i class="iconify tabler--brand-instagram md:size-6 size-5 transform transition duration-300 hover:scale-110"></i>
                            </a>
                            <a href="#">
                                <i class="iconify tabler--brand-linkedin md:size-6 size-5 transform transition duration-300 hover:scale-110"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection