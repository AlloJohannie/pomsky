@extends('layouts.landing', ['title' => 'Integratin'])

@section('content')
    <!-- Integrations Hero Section  -->
    <section class="bg-body-bg lg:py-25 md:py-22.5 py-17.5">
        <div class="container">
            <div class="text-center" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
                <h2 class="mb-2.5 lg:text-6xl md:text-4.6xl text-4xl">Integrations </h2>
                <p>Bed sincerity yet therefore forfeited his certainty. </p>
            </div>
        </div>
    </section>

    <!-- Integrations Section  -->
    <section class="bg-white lg:py-25 md:py-22.5 py-17.5">
        <div class="container">
            <div class="grid md:grid-cols-3 lg:gap-7.5 gap-5" data-aos="fade-up" data-aos-delay="200" data-aos-duration="600" data-aos-easing="ease-in-out">

                <!-- Integrations Details 1  -->
                <a href="{{ url('pages.integrations-details') }}" class="transition-transform duration-300 ease-in-out hover:-translate-y-1.5 mb-7.5">
                    <div class="bg-body-bg rounded-2xl lg:py-15 py-7.5 px-5 lg:mb-7.5 mb-2.5 md:mb-5 flex justify-center">
                        <img src="/images/icon/10.png" alt="" class="lg:size-15 size-12.5">
                    </div>

                    <div>
                        <h2 class="mb-2.5 md:text-2.5xl text-1.5xl">Fusion link</h2>
                        <p class="md:mb-5 mb-2.5">Enhance functionality by seamlessly integrating your SaaS solution
                            with external applications using the Fusion link.</p>
                        <div class="flex items-center gap-1.25">
                            <div class="text-black">View details</div>
                            <i class="iconify tabler--arrow-right size-5 text-black"></i>
                        </div>
                    </div>
                </a>

                <!-- Integrations Details 2  -->
                <a href="{{ url('pages.integrations-details') }}" class="transition-transform duration-300 ease-in-out hover:-translate-y-1.5 mb-7.5">
                    <div class="bg-body-bg rounded-2xl lg:py-15 py-7.5 px-5 lg:mb-7.5 mb-2.5 md:mb-5 flex justify-center">
                        <img src="/images/icon/11.png" alt="" class="lg:size-15 size-12.5">
                    </div>

                    <div>
                        <h2 class="mb-2.5 md:text-2.5xl text-1.5xl">Sync pro</h2>
                        <p class="md:mb-5 mb-2.5">Advanced synchronization for smooth integration with third-party tools
                            and services.</p>
                        <div class="flex items-center gap-1.25">
                            <div class="text-black">View details</div>
                            <i class="iconify tabler--arrow-right size-5 text-black"></i>
                        </div>
                    </div>
                </a>

                <!-- Integrations Details 3  -->
                <a href="{{ url('pages.integrations-details') }}" class="transition-transform duration-300 ease-in-out hover:-translate-y-1.5 mb-7.5">
                    <div class="bg-body-bg rounded-2xl lg:py-15 py-7.5 px-5 lg:mb-7.5 mb-2.5 md:mb-5 flex justify-center">
                        <img src="/images/icon/12.png" alt="" class="lg:size-15 size-12.5">
                    </div>

                    <div>
                        <h2 class="mb-2.5 md:text-2.5xl text-1.5xl">Sync master</h2>
                        <p class="md:mb-5 mb-2.5">Expert data synchronization for reliable transfer between your
                            application and external systems.</p>
                        <div class="flex items-center gap-1.25">
                            <div class="text-black">View details</div>
                            <i class="iconify tabler--arrow-right size-5 text-black"></i>
                        </div>
                    </div>
                </a>

                <!-- Integrations Details 4  -->
                <a href="{{ url('pages.integrations-details') }}" class="transition-transform duration-300 ease-in-out hover:-translate-y-1.5 mb-7.5">
                    <div class="bg-body-bg rounded-2xl lg:py-15 py-7.5 px-5 lg:mb-7.5 mb-2.5 md:mb-5 flex justify-center">
                        <img src="/images/icon/1.png" alt="" class="lg:size-15 size-12.5">
                    </div>

                    <div>
                        <h2 class="mb-2.5 md:text-2.5xl text-1.5xl">Sync edge</h2>
                        <p class="md:mb-5 mb-2.5">Optimization of performance through integration with external tools
                            and services.</p>
                        <div class="flex items-center gap-1.25">
                            <div class="text-black">View details</div>
                            <i class="iconify tabler--arrow-right size-5 text-black"></i>
                        </div>
                    </div>
                </a>

                <!-- Integrations Details 5  -->
                <a href="{{ url('pages.integrations-details') }}" class="transition-transform duration-300 ease-in-out hover:-translate-y-1.5 mb-7.5">
                    <div class="bg-body-bg rounded-2xl lg:py-15 py-7.5 px-5 lg:mb-7.5 mb-2.5 md:mb-5 flex justify-center">
                        <img src="/images/icon/2.png" alt="" class="lg:size-15 size-12.5">
                    </div>

                    <div>
                        <h2 class="mb-2.5 md:text-2.5xl text-1.5xl">Link sync</h2>
                        <p class="md:mb-5 mb-2.5">Effortlessly connect your SaaS application with other systems using
                            Link sync for seamless data exchange.</p>
                        <div class="flex items-center gap-1.25">
                            <div class="text-black">View details</div>
                            <i class="iconify tabler--arrow-right size-5 text-black"></i>
                        </div>
                    </div>
                </a>

                <!-- Integrations Details 6  -->
                <a href="{{ url('pages.integrations-details') }}" class="transition-transform duration-300 ease-in-out hover:-translate-y-1.5 mb-7.5">
                    <div class="bg-body-bg rounded-2xl lg:py-15 py-7.5 px-5 lg:mb-7.5 mb-2.5 md:mb-5 flex justify-center">
                        <img src="/images/icon/3.png" alt="" class="lg:size-15 size-12.5">
                    </div>

                    <div>
                        <h2 class="mb-2.5 md:text-2.5xl text-1.5xl">Link hub</h2>
                        <p class="md:mb-5 mb-2.5">Central integration point for seamless connectivity and data sharing
                            with other systems.</p>
                        <div class="flex items-center gap-1.25">
                            <div class="text-black">View details</div>
                            <i class="iconify tabler--arrow-right size-5 text-black"></i>
                        </div>
                    </div>
                </a>

                <!-- Integrations Details 7  -->
                <a href="{{ url('pages.integrations-details') }}" class="transition-transform duration-300 ease-in-out hover:-translate-y-1.5 mb-7.5">
                    <div class="bg-body-bg rounded-2xl lg:py-15 py-7.5 px-5 lg:mb-7.5 mb-2.5 md:mb-5 flex justify-center">
                        <img src="/images/icon/4.png" alt="" class="lg:size-15 size-12.5">
                    </div>

                    <div>
                        <h2 class="mb-2.5 md:text-2.5xl text-1.5xl">Fusion sync</h2>
                        <p class="md:mb-5 mb-2.5">Effortless data exchange with external applications for streamlined
                            collaboration.</p>
                        <div class="flex items-center gap-1.25">
                            <div class="text-black">View details</div>
                            <i class="iconify tabler--arrow-right size-5 text-black"></i>
                        </div>
                    </div>
                </a>

                <!-- Integrations Details 8  -->
                <a href="{{ url('pages.integrations-details') }}" class="transition-transform duration-300 ease-in-out hover:-translate-y-1.5 mb-7.5">
                    <div class="bg-body-bg rounded-2xl lg:py-15 py-7.5 px-5 lg:mb-7.5 mb-2.5 md:mb-5 flex justify-center">
                        <img src="/images/icon/5.png" alt="" class="lg:size-15 size-12.5">
                    </div>

                    <div>
                        <h2 class="mb-2.5 md:text-2.5xl text-1.5xl">Data sync pro</h2>
                        <p class="md:mb-5 mb-2.5">Simplify data synchronization between your SaaS platform and external
                            sources with Data Sync Pro.</p>
                        <div class="flex items-center  gap-1.25">
                            <div class="text-black">View details</div>
                            <i class="iconify tabler--arrow-right size-5 text-black"></i>
                        </div>
                    </div>
                </a>

                <!-- Integrations Details 9  -->
                <a href="{{ url('pages.integrations-details') }}" class="transition-transform duration-300 ease-in-out hover:-translate-y-1.5 mb-7.5">
                    <div class="bg-body-bg rounded-2xl lg:py-15 py-7.5 px-5 lg:mb-7.5 mb-2.5 md:mb-5 flex justify-center">
                        <img src="/images/icon/6.png" alt="" class="lg:size-15 size-12.5">
                    </div>

                    <div>
                        <h2 class="mb-2.5 md:text-2.5xl text-1.5xl">Data linker</h2>
                        <p class="md:mb-5 mb-2.5">Simplified linking and synchronization of data with other software
                            solutions for enhanced interoperability.</p>
                        <div class="flex items-center gap-1.25">
                            <div class="text-black">View details</div>
                            <i class="iconify tabler--arrow-right size-5 text-black"></i>
                        </div>
                    </div>
                </a>

                <!-- Integrations Details 10  -->
                <a href="{{ url('pages.integrations-details') }}" class="transition-transform duration-300 ease-in-out hover:-translate-y-1.5 mb-7.5">
                    <div class="bg-body-bg rounded-2xl lg:py-15 py-7.5 px-5 lg:mb-7.5 mb-2.5 md:mb-5 flex justify-center">
                        <img src="/images/icon/7.png" alt="" class="lg:size-15 size-12.5">
                    </div>

                    <div>
                        <h2 class="mb-2.5 md:text-2.5xl text-1.5xl">Data Bridge</h2>
                        <p class="md:mb-5 mb-2.5">Seamless integration with external databases and systems for efficient
                            data transfer.</p>
                        <div class="flex items-center gap-1.25">
                            <div class="text-black">View details</div>
                            <i class="iconify tabler--arrow-right size-5 text-black"></i>
                        </div>
                    </div>
                </a>

                <!-- Integrations Details 11  -->
                <a href="{{ url('pages.integrations-details') }}" class="transition-transform duration-300 ease-in-out hover:-translate-y-1.5 mb-7.5">
                    <div class="bg-body-bg rounded-2xl lg:py-15 py-7.5 px-5 lg:mb-7.5 mb-2.5 md:mb-5 flex justify-center">
                        <img src="/images/icon/8.png" alt="" class="lg:size-15 size-12.5">
                    </div>

                    <div>
                        <h2 class="mb-2.5 md:text-2.5xl text-1.5xl">Connectify</h2>
                        <p class="md:mb-5 mb-2.5">Streamline collaboration and data synchronization with Connectify
                            integration for your SaaS platform.</p>
                        <div class="flex items-center gap-1.25">
                            <div class="text-black">View details</div>
                            <i class="iconify tabler--arrow-right size-5 text-black"></i>
                        </div>
                    </div>
                </a>

                <!-- Integrations Details 12  -->
                <a href="{{ url('pages.integrations-details') }}" class="transition-transform duration-300 ease-in-out hover:-translate-y-1.5 mb-7.5">
                    <div class="bg-body-bg rounded-2xl lg:py-15 py-7.5 px-5 lg:mb-7.5 mb-2.5 md:mb-5 flex justify-center">
                        <img src="/images/icon/9.png" alt="" class="lg:size-15 size-12.5">
                    </div>

                    <div>
                        <h2 class="mb-2.5 md:text-2.5xl text-1.5xl">Fusion link</h2>
                        <p class="md:mb-5 mb-2.5">Connection to cloud services for efficient data exchange and
                            collaboration.</p>
                        <div class="flex items-center gap-1.25">
                            <div class="text-black">View details</div>
                            <i class="iconify tabler--arrow-right size-5 text-black"></i>
                        </div>
                    </div>
                </a>

                <!-- Integrations Details 13  -->
                <a href="{{ url('pages.integrations-details') }}" class="transition-transform duration-300 ease-in-out hover:-translate-y-1.5 mb-7.5">
                    <div class="bg-body-bg rounded-2xl lg:py-15 py-7.5 px-5 lg:mb-7.5 mb-2.5 md:mb-5 flex justify-center">
                        <img src="/images/icon/13.png" alt="" class="lg:size-15 size-12.5">
                    </div>

                    <div>
                        <h2 class="mb-2.5 md:text-2.5xl text-1.5xl">Cloud connect X</h2>
                        <p class="md:mb-5 mb-2.5">Securely connect your SaaS application to cloud-based services for
                            efficient data exchange with Cloud Connect X.</p>
                        <div class="flex items-center gap-1.25">
                            <div class="text-black">View details</div>
                            <i class="iconify tabler--arrow-right size-5 text-black"></i>
                        </div>
                    </div>
                </a>

                <!-- Integrations Details 14  -->
                <a href="{{ url('pages.integrations-details') }}" class="transition-transform duration-300 ease-in-out hover:-translate-y-1.5 mb-7.5">
                    <div class="bg-body-bg rounded-2xl lg:py-15 py-7.5 px-5 lg:mb-7.5 mb-2.5 md:mb-5 flex justify-center">
                        <img src="/images/icon/14.png" alt="" class="lg:size-15 size-12.5">
                    </div>

                    <div>
                        <h2 class="mb-2.5 md:text-2.5xl text-1.5xl">App merge</h2>
                        <p class="md:mb-5 mb-2.5">Simplified merging of data and functionalities for enhanced
                            interoperability.</p>
                        <div class="flex items-center gap-1.25">
                            <div class="text-black">View details</div>
                            <i class="iconify tabler--arrow-right size-5 text-black"></i>
                        </div>
                    </div>
                </a>

                <!-- Integrations Details 15  -->
                <a href="{{ url('pages.integrations-details') }}" class="transition-transform duration-300 ease-in-out hover:-translate-y-1.5 mb-7.5">
                    <div class="bg-body-bg rounded-2xl lg:py-15 py-7.5 px-5 lg:mb-7.5 mb-2.5 md:mb-5 flex justify-center">
                        <img src="/images/icon/15.png" alt="" class="lg:size-15 size-12.5">
                    </div>

                    <div>
                        <h2 class="mb-2.5 md:text-2.5xl text-1.5xl">Data hub</h2>
                        <p class="md:mb-5 mb-2.5">Centralized connectivity to multiple data sources for comprehensive
                            insights.</p>
                        <div class="flex items-center gap-1.25">
                            <div class="text-black">View details</div>
                            <i class="iconify tabler--arrow-right size-5 text-black"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
@endsection