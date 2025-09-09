@extends('layouts.base', ['title' => 'Error 404'])

@section('content')
    <!-- Error 404 Section  -->
    <section class="bg-body-bg lg:py-25 md:py-22.5 py-17.5 md:h-dvh flex items-center">
        <div class="container">
            <div class="lg:w-1/2 md:w-7/10 mx-auto" data-aos="fade-up" data-aos-delay="150" data-aos-duration="500" data-aos-easing="ease-in-out">
                <div class="bg-white lg:p-15 md:p-10 p-5 rounded-2xl text-center">
                    <h1 class="md:text-5.6xl text-5.7xl">404</h1>
                    <h2 class="mb-2.5 lg:text-5.5xl md:text-4.6xl text-3.4xl">Page Not Found </h2>
                    <p class="mb-10">The page you are looking for doesn't exist or has been moved </p>
                    <a href="{{route('any', 'index')}}">
                        <button type="submit" class="md:h-14 w-full py-3.5 lg:px-7.5 px-6.5 text-center bg-primary font-medium rounded-2xl text-black transition-all duration-300 hover:text-primary hover:bg-dark">
                            Back to Home
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection