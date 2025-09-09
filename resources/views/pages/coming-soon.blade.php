@extends('layouts.base', ['title' => 'Coming Soon'])

@section('content')
    <!-- Coming Soon Section  -->
    <section class="bg-body-bg md:py-15 py-3.75 pt-3.75">
        <div class="container">
            <div class="lg:w-3/5 mx-auto md:w-4/5 lg:p-12.5 p-7.5 bg-white rounded-2xl text-center">
                <div>
                    <i class="iconify tabler--settings md:size-32 size-25 md:mb-5 mb-2.5 text-black"></i>
                    <h1 class="mb-2.5 lg:text-6xl md:text-5.5xl text-4xl">We are coming soon! </h1>
                    <p class="mb-2.5">We're bringing something fresh and exciting to the table. Be the first to
                        experience it! </p>

                    <form action="{{ route('subscribe') }}" method="POST" class="flex md:gap-5 md:flex-row gap-2.5 flex-col md:w-4/5 mx-auto mt-7.5 mb-3.75">
                        @csrf

                        <div class="w-full text-left">
                            <input type="email" name="email" value="{{ old('email') }}" class="py-2.5 px-5 rounded-2xl w-full border-neutral-200 h-14 @error('email') border-red-500 @enderror" placeholder="info@example.com">

                            @if ($errors->has('email'))
                                <p class="text-red-600 text-sm mt-1 ml-2">{{ $errors->first('email') }}</p>
                            @endif

                            @if (session('status'))
                                <p class="text-green-600 text-sm mt-1 ml-2">{{ session('status') }}</p>
                            @endif
                        </div>

                        <div class="text-center">
                            <button type="submit" class="md:h-14 py-3.5 px-7.5 inline-flex whitespace-nowrap items-center text-center bg-primary font-medium rounded-2xl text-black transition-all duration-300 hover:text-primary hover:bg-black">
                                Notify Me
                            </button>
                        </div>
                    </form>



                    <div class="md:mt-7.5 mt-5">
                        <div class="flex gap-3.75 justify-center">
                            <p>Follow us:</p>

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
        </div>
    </section>
@endsection