@extends('layouts.base', ['title' => 'Log In'])

@section('content')
    <!-- Log-in Section  -->
    <section class="bg-white lg:py-25 md:py-22.5 py-17.5 md:h-dvh flex items-center">
        <div class="container">
            <div class="lg:w-4/10 md:w-7/10 mx-auto" data-aos="fade-up" data-aos-delay="150" data-aos-duration="500" data-aos-easing="ease-in-out">
                <div class="lg:mb-12.5 md:mb-10 mb-7.5 text-center">
                    <h1 class="lg:text-6xl md:text-5.5xl text-4xl">log-in</h1>
                    <p class="mb-2.5">Please fill your email and password to login. </p>
                </div>

                <div class="bg-body-bg md:p-10 p-5 rounded-2xl">
                    <form method="POST" action="{{ route('login') }}" class="mb-3.75">

                    @csrf
                        <!-- Email  -->
                        <div class="mb-5">
                            <label for="name" class="mb-1.25 block font-normal">Email</label>
                            <input class="rounded-2xl py-2.5 px-5 border border-neutral-200 w-full h-14 " maxlength="256" data-name="Name" placeholder="Your email" type="text" id="userEmail" name="email" value="landinger@user.com">
                            @if ($errors->get('email'))
                                <ul class="list-unstyled ps-0 mt-1">
                                    @foreach ((array) $errors->get('email') as $message)
                                        <li class="text-red-600 mb-1">{{ $message }}</li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>

                        <!-- Password  -->
                        <div class="mb-5">
                            <label for="name" class="mb-1.25 block font-normal">Password </label>
                            <input class="rounded-2xl py-2.5 px-5 border border-neutral-200 w-full h-14 " maxlength="256" data-name="Name" placeholder="Password" type="text" id="userPassword" name="password" value="password">
                            @if ($errors->get('password'))
                                <ul class="list-unstyled ps-0 mt-1">
                                    @foreach ((array) $errors->get('password') as $message)
                                        <li class="text-red-600 mb-1">{{ $message }}</li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>

                        <div>
                            <button type="submit" class="md:h-14 w-full py-3.5 lg:px-7.5 px-6.5 text-center bg-dark font-medium rounded-2xl text-white transition-all duration-300 hover:text-primary">Submit</button>
                        </div>
                    </form>

                    <div class="flex md:justify-between md:gap-5 md:flex-row gap-1.25 flex-col">
                        <p>Don't have an account? <a href="{{ route('register') }}" class="underline text-dark">Sign up </a> </p>
                        <a href="{{ route('password.request') }}" class="underline text-dark">Forgot password?</a>
                    </div>
                </div>

                <div class="flex justify-between md:gap-5 md:flex-row gap-2.5 flex-col mt-7.5 items-center">
                    <a href="{{route('any', 'index')}}"> <img src="/images/logo/landinger.svg" alt="" class="h-9 w-38.75"></a>
                    <div class="text-sm">
                        <script>document.write(new Date().getFullYear())</script>.
                        Crafted with ❤️ <a href="#" class="underline text-dark">Coderthemes</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection