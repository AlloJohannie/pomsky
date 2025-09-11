<!-- Navbar -->
<header class="bg-white sticky transition-all text-white top-0 inset-x-0 w-screen z-20 duration-300">
    <div class="container">
        <div class="flex items-center justify-between py-2.5 lg:py-4.5">
            <div class="text-lg font-bold">
                <a href="{{ route('home') }}">
                    <img src="/images/logo/landinger.svg" alt="Logo" class="h-8.5 lg:h-9">
                </a>
            </div>

            <div id="navbar" class="lg:flex hidden justify-center gap-5">

                <div class="m-1 hs-dropdown [--trigger:hover] relative inline-flex  transition-all duration-300">
                    <button id="hs-dropdown-hover-event" type="button" class="hs-dropdown-toggle cursor-pointer text-dark flex items-center py-2.5 font-medium" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                        Home <i class="iconify tabler--chevron-down ps-5 size-4"></i>
                    </button>

                    <div class="hs-dropdown-menu border border-neutral-200 transition-[opacity,margin] rounded-2xl duration hs-dropdown-open:opacity-100 opacity-0 hidden w-60 bg-white  mt-2 after:h-4 after:absolute after:-bottom-4 after:start-0 after:w-full before:h-4 before:absolute before:-top-4 before:start-0 before:w-full" role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-hover-event">
                        <div class="p-5">
                            <a href="{{ route('home') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                                Home 1
                            </a>

                            <a href="{{ url('home.v2') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                                Home 2
                            </a>

                            <a href="{{ url('home.v3') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                                Home 3
                            </a>

                        </div>
                    </div>
                </div>


                <div class="m-1 hs-dropdown [--trigger:hover] relative inline-flex  transition-all duration-300">
                    <button id="hs-dropdown-hover-event" type="button" class="hs-dropdown-toggle cursor-pointer !no-underline text-dark flex items-center py-2.5 font-medium" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                        Product <i class="iconify tabler--chevron-down ps-5 size-4"></i>
                    </button>

                    <div class="hs-dropdown-menu border border-neutral-200 transition-[opacity,margin] rounded-2xl duration hs-dropdown-open:opacity-100 opacity-0 hidden w-[560px] bg-white  mt-2 after:h-4 after:absolute after:-bottom-4 after:start-0 after:w-full before:h-4 before:absolute before:-top-4 before:start-0 before:w-full" role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-hover-event">
                        <div class="grid grid-cols-2 p-5 gap-5">
                            <div>
                                <img src="/images/element/15.svg" alt="" class="rounded-2xl w-62.5">
                            </div>

                            <div class="flex flex-col justify-center gap-2.5 py-5">
                                <a href="{{ url('pages.product-1') }}" class="flex items-center gap-1.25 p-4 transition-all duration-300 hover:bg-body-bg rounded-2xl">
                                    <div>
                                        <i class="iconify tabler--carambola text-black size-8"></i>
                                    </div>

                                    <div>
                                        <div class="text-black">Seamless onboarding</div>
                                        <p class="text-dark text-sm">Quick, easy setup.</p>
                                    </div>
                                </a>

                                <a href="{{ url('pages.product-1') }}" class="flex items-center gap-1.25 p-4 transition-all duration-300 hover:bg-body-bg rounded-2xl">
                                    <div>
                                        <i class="iconify tabler--settings text-black size-8"></i>
                                    </div>

                                    <div>
                                        <div class="text-black">Responsive design</div>
                                        <p class="text-dark text-sm">Perfect on any device.</p>
                                    </div>
                                </a>

                                <a href="{{ url('pages.product-2') }}" class="flex items-center gap-1.25 p-4 transition-all duration-300 hover:bg-body-bg rounded-2xl">
                                    <div>
                                        <i class="iconify tabler--file-text text-black size-8"></i>
                                    </div>

                                    <div>
                                        <div class="text-black">Integrated analytics</div>
                                        <p class="text-dark text-sm">Real-time insights.</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="m-1 hs-dropdown [--trigger:hover] relative inline-flex">
                    <button id="hs-dropdown-hover-event" type="button" class="hs-dropdown-toggle cursor-pointer text-dark flex items-center py-2.5 font-medium" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                        Pages
                        <i class="iconify tabler--chevron-down ps-5"></i>
                    </button>

                    <div class="hs-dropdown-menu border border-neutral-200 transition-[opacity,margin] rounded-2xl duration hs-dropdown-open:opacity-100 opacity-0 hidden w-[560px] bg-white  mt-2 after:h-4 after:absolute after:-bottom-4 after:start-0 after:w-full before:h-4 before:absolute before:-top-4 before:start-0 before:w-full" role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-hover-event">
                        <div class="grid grid-cols-3 p-5 gap-10">
                            <div>
                                <a href="{{ url('pages.product-1') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                                    Product 1
                                </a>

                                <a href="{{ url('pages.product-2') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                                    Product 2
                                </a>

                                <a href="{{ url('pages.product-3') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                                    Product 3
                                </a>

                                <a href="{{ url('pages.pricing-1') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                                    Pricing 1
                                </a>

                                <a href="{{ url('pages.pricing-2') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                                    Pricing 2 (Ecom)
                                </a>

                                <a href="{{ url('pages.pricing-3') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                                    Pricing 3
                                </a>

                                <a href="{{ url('pages.integrations') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                                    Integrations
                                </a>

                                <a href="{{ url('pages.request-a-demo') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                                    Request a Demo
                                </a>
                            </div>

                            <div>
                                <a href="{{ url('pages.reviews') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                                    Reviews
                                </a>

                                <a href="{{ url('pages.about') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                                    About
                                </a>

                                <a href="{{ url('pages.careers') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                                    Careers
                                </a>

                                <a href="{{ url('pages.blog') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                                    Blog
                                </a>

                                <a href="{{ url('pages.faqs') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                                    FAQs
                                </a>

                                <a href="{{ url('pages.link-in-bio') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                                    Link in Bio
                                </a>

                                <a href="{{ url('pages.coming-soon') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                                    Coming soon
                                </a>

                                <a href="{{ url('pages.privacy-policy') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                                    Privacy Policy
                                </a>
                            </div>

                            <div>

                                <a href="{{ url('pages.hero') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                                    Hero
                                </a>

                                <a href="{{ url('pages.features') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                                    Features
                                </a>

                                <a href="{{ url('pages.statistics') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                                    Statistics
                                </a>

                                <a href="{{ url('pages.ctas') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                                    CTAs
                                </a>

                                <a href="{{ url('pages.cards') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                                    Cards
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="m-1 hs-dropdown [--trigger:hover] relative inline-flex  transition-all duration-300">
                    <button id="hs-dropdown-hover-event" type="button" class="hs-dropdown-toggle cursor-pointer text-dark flex items-center py-2.5 font-medium" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                        Account
                        <i class="iconify tabler--chevron-down ps-5 size-4"></i>
                    </button>

                    <div class="hs-dropdown-menu border border-neutral-200 transition-[opacity,margin] rounded-2xl duration hs-dropdown-open:opacity-100 opacity-0 hidden w-[200px] bg-white  mt-2 after:h-4 after:absolute after:-bottom-4 after:start-0 after:w-full before:h-4 before:absolute before:-top-4 before:start-0 before:w-full" role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-hover-event">
                        <div class="p-5">
                            <a href="{{ url('account.log-in') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                                Log In
                            </a>

                            <a href="{{ url('account.sign-up') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                                Sign Up
                            </a>

                            <a href="{{ url('account.reset-password') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                                Reset Password
                            </a>

                            <a href="{{ url('account.update-password') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                                Update Password
                            </a>

                            <a href="{{ url('account.email-confirmation') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                                Email Confirmation
                            </a>

                            <a href="{{ url('account.error-404') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                                Error 404
                            </a>

                            <a href="{{ url('account.password-protected') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                                Password Protected
                            </a>
                        </div>
                    </div>
                </div>

                <a href="{{ url('pages.contact') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                    Contact us
                </a>

            </div>

            <div class="flex flex-row justify-center items-center md:gap-4 gap-2.5">
                <div class="flex items-center">
                    <div class="text-black">Cart</div>
                    <div class="flex justify-center items-center bg-black px-1.5 ms-2 text-1.1xl size-4.5 rounded-full">0</div>
                </div>

                <div class="md:flex hidden">
                    <a class="bg-primary text-dark hover:text-primary hover:bg-dark rounded-2xl px-7.5 py-3.5 font-medium transition-all duration-300">Sign in</a>
                </div>

                <div class="flex lg:hidden">
                    <button type="button" class="bg-dark  text-white focus:text-black focus:bg-primary inline-flex justify-center items-center rounded-2xl md:size-13 size-11 p-3.5 font-medium transition-all duration-300" aria-haspopup="dialog" aria-expanded="false" aria-controls="mobileMenuOffcanvas" data-hs-overlay="#mobileMenuOffcanvas">
                        <span class="iconify tabler--menu-2 text-2xl size-5"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Mobile Menu (Offcanvas) -->
<div id="mobileMenuOffcanvas" class="hs-overlay hs-overlay-open:translate-y-0 hidden -translate-y-full fixed top-4 inset-x-4 rounded-lg overflow-hidden transition-all duration-300 transform h-80 z-80 bg-white" role="dialog" tabindex="-1" aria-labelledby="mobileMenuOffcanvas-label">
    <div class="h-16 flex items-center justify-between px-4 border-b border-neutral-200 sticky top-0">
        <a href="{{ route('home') }}">
            <img src="/images/logo/landinger.svg" alt="logo" class="h-8">
        </a>

        <button type="button" class="bg-neutral-600/15 text-neutral-600 size-8 flex justify-center items-center rounded-full" aria-label="Close" data-hs-overlay="#mobileMenuOffcanvas">
            <span class="sr-only">Close</span>
            <i class="iconify tabler--x size-4"></i>
        </button>
    </div>

    <div class="flex flex-col p-4 overflow-y-auto h-[calc(100%-64px)]">
        <div class="hs-accordion-group">
            <div class="hs-accordion">
                <button class="hs-accordion-toggle text-dark w-full flex items-center justify-between py-2.5 font-medium">
                    <span>Home</span>
                    <i class="iconify tabler--chevron-down size-4 hs-accordion-active:rotate-180 transition-all"></i>
                </button>

                <div class="hs-accordion-content hidden w-full overflow-hidden transition-[height]">
                    <a href="{{ route('home') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                        Home 1
                    </a>

                    <a href="{{ url('home.v2') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                        Home 2
                    </a>

                    <a href="{{ url('home.v3') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                        Home 3
                    </a>
                </div>
            </div>

            <div class="hs-accordion">
                <button class="hs-accordion-toggle text-dark w-full flex items-center justify-between py-2.5 font-medium">
                    <span>Product</span>
                    <i class="iconify tabler--chevron-down size-4 hs-accordion-active:rotate-180 transition-all"></i>
                </button>

                <div class="hs-accordion-content hidden w-full overflow-hidden transition-[height]">
                    <div class="flex flex-col mt-2">
                        <a href="{{ url('pages.product-1') }}" class="flex items-center gap-1.25 p-4 transition-all duration-300 hover:bg-body-bg rounded-2xl">
                            <div>
                                <i class="iconify tabler--carambola text-black size-8"></i>
                            </div>

                            <div>
                                <div class="text-black">Seamless onboarding</div>
                                <p class="text-dark text-sm">Quick, easy setup.</p>
                            </div>
                        </a>

                        <a href="{{ url('pages.product-2') }}" class="flex items-center gap-1.25 p-4 transition-all duration-300 hover:bg-body-bg rounded-2xl">
                            <div>
                                <i class="iconify tabler--settings text-black size-8"></i>
                            </div>

                            <div>
                                <div class="text-black">Responsive design</div>
                                <p class="text-dark text-sm">Perfect on any device.</p>
                            </div>
                        </a>

                        <a href="{{ url('pages.product-3') }}" class="flex items-center gap-1.25 p-4 transition-all duration-300 hover:bg-body-bg rounded-2xl">
                            <div>
                                <i class="iconify tabler--file-text text-black size-8"></i>
                            </div>

                            <div>
                                <div class="text-black">Integrated analytics</div>
                                <p class="text-dark text-sm">Real-time insights.</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="hs-accordion">
                <button class="hs-accordion-toggle text-dark w-full flex items-center justify-between py-2.5 font-medium">
                    <span>Pages</span>
                    <i class="iconify tabler--chevron-down size-4 hs-accordion-active:rotate-180 transition-all"></i>
                </button>

                <div class="hs-accordion-content hidden w-full overflow-hidden transition-[height]">
                    <div class="flex flex-col mt-2">
                        <a href="{{ url('pages.product-1') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                            Product 1
                        </a>

                        <a href="{{ url('pages.product-2') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                            Product 2
                        </a>

                        <a href="{{ url('pages.product-3') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                            Product 3
                        </a>

                        <a href="{{ url('pages.pricing-1') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                            Pricing 1
                        </a>

                        <a href="{{ url('pages.pricing-2') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                            Pricing 2 (Ecom)
                        </a>

                        <a href="{{ url('pages.pricing-3') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                            Pricing 3
                        </a>

                        <a href="{{ url('pages.integrations') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                            Integrations
                        </a>

                        <a href="{{ url('pages.request-a-demo') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                            Request a Demo
                        </a>

                        <a href="{{ url('pages.reviews') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                            Reviews
                        </a>

                        <a href="{{ url('pages.about') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                            About
                        </a>

                        <a href="{{ url('pages.careers') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                            Careers
                        </a>

                        <a href="{{ url('pages.blog') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                            Blog
                        </a>

                        <a href="{{ url('pages.faqs') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                            FAQs
                        </a>

                        <a href="{{ url('pages.contact') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                            Contact
                        </a>

                        <a href="{{ url('pages.link-in-bio') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                            Link in Bio
                        </a>

                        <a href="{{ url('pages.coming-soon') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                            Coming soon
                        </a>

                        <a href="{{ url('pages.privacy-policy') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                            Privacy Policy
                        </a>

                        <a href="{{ url('account.log-in') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                            Log In
                        </a>

                        <a href="{{ url('account.sign-up') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                            Sign Up
                        </a>

                        <a href="{{ url('account.reset-password') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                            Reset Password
                        </a>

                        <a href="{{ url('account.update-password') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                            Update Password
                        </a>

                        <a href="{{ url('account.email-confirmation') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                            Email Confirmation
                        </a>
                        <a href="{{ url('account.error-404') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                            Error 404
                        </a>

                        <a href="{{ url('pages.hero') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                            Hero
                        </a>

                        <a href="{{ url('pages.features') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                            Features
                        </a>

                        <a href="{{ url('pages.statistics') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                            Statistics
                        </a>

                        <a href="{{ url('pages.ctas') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                            CTAs
                        </a>

                        <a href="{{ url('pages.cards') }}" class="flex items-center font-medium text-dark rounded-lg text-base py-1.25 hover:underline">
                            Cards
                        </a>
                    </div>
                </div>
            </div>

            <div>
                <a href="{{ url('pages.contact') }}" class="text-dark text-base flex items-center py-2.5 font-medium hover:underline">Contact Us</a>
            </div>

            <div class="flex md:hidden mt-1">
                <a class="w-full bg-primary text-center text-dark hover:text-primary hover:bg-dark rounded-lg px-7.5 py-3.5 font-medium transition-all duration-300">Sign in</a>
            </div>
        </div>
    </div>
</div>