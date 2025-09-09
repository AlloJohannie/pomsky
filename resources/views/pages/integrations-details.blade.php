@extends('layouts.landing', ['title' => 'Integratins-details'])

@section('content')
    <!-- Integratins-details Section  -->
    <section class="bg-body-bg lg:py-25 md:py-22.5 py-17.5">
        <div class="container">
            <div class="flex flex-col items-center" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
                <div class="bg-white md:size-25 size-17.5 rounded-full flex justify-center items-center">
                    <img src="/images/icon/10.png" alt="">
                </div>
                <h2 class="mb-2.5 lg:text-6xl md:text-4.6xl text-4xl">Fusion link </h2>
                <p class="mb-2.5 text-center">Enhance functionality by seamlessly integrating your SaaS solution with external applications using the Fusion link. </p>
            </div>
        </div>
    </section>

    <!-- Integrations Info Section  -->
    <section class="bg-white lg:py-25 md:py-22.5 py-17.5">
        <div class="container">
            <div data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
                <!-- Step 1  -->
                <div class="md:mb-10 mb-5">
                    <h6 class="text-1.5xl mb-2.5">Step 1: Access Fusion link Dashboard</h6>
                    <ul class="list-disc pl-5 space-y-2 md:mb-10 mb-5">
                        <li class="mb-2.5">If you don't already have a Fusion link account, you can sign up for one at <a href="#" class="underline text-dark">Fusion link website. </a> </li>
                        <li class="mb-2.5">Once registered, log in to your Fusion link account using your credentials. </li>
                    </ul>
                </div>

                <!-- Step 2  -->
                <div class="md:mb-10 mb-5">
                    <h6 class="text-1.5xl mb-2.5">Step 2: Generate Integration Token </h6>
                    <ul class="list-disc pl-5 space-y-2 md:mb-10 mb-5">
                        <li class="mb-2.5">In the Fusion link dashboard, navigate to the "Integrations" or "API Settings" section, usually located in the settings menu. </li>
                        <li class="mb-2.5">Locate the option to generate an integration token and follow the provided instructions. </li>
                        <li class="mb-2.5">This token will serve as the authentication mechanism between your SaaS application and Fusion link. </li>
                    </ul>
                </div>

                <!-- Step 3  -->
                <div class="md:mb-10 mb-5">
                    <h6 class="text-1.5xl mb-2.5">Step 3: Configure Integration in Your SaaS Dashboard </h6>
                    <ul class="list-disc pl-5 space-y-2 md:mb-10 mb-5">
                        <li class="mb-2.5">Log in to your SaaS application's dashboard and navigate to the integrations settings page. </li>
                        <li class="mb-2.5">Look for the option to add a new integration and select Fusion link from the list of available integrations. </li>
                        <li class="mb-2.5">Paste the integration token generated in Step 2 into the designated field. </li>
                        <li class="mb-2.5">Save your changes to enable the integration. </li>
                    </ul>
                </div>

                <!-- Step 4  -->
                <div class="md:mb-10 mb-5">
                    <h6 class="text-1.5xl mb-2.5">Step 4: Map Data Fields </h6>
                    <ul class="list-disc pl-5 space-y-2 md:mb-10 mb-5">
                        <li class="mb-2.5">After configuring the integration, you'll need to map the relevant data fields between your SaaS application and Fusion link. </li>
                        <li class="mb-2.5">This mapping ensures that the data exchanged between the two platforms is correctly synchronized. </li>
                        <li class="mb-2.5">Common data fields to map may include customer information, product details, orders, and inventory levels. </li>
                    </ul>
                </div>

                <!-- Step 5  -->
                <div class="md:mb-10 mb-5">
                    <h6 class="text-1.5xl mb-2.5">Step 5: Test Integration </h6>
                    <ul class="list-disc pl-5 space-y-2 md:mb-10 mb-5">
                        <li class="mb-2.5">To ensure that the integration is functioning properly, perform various actions within your SaaS application, such as creating new customers or processing orders. </li>
                        <li class="mb-2.5">Verify that the data is accurately synchronized with Fusion link and reflects the changes made in real-time. </li>
                        <li class="mb-2.5">Testing the integration thoroughly helps identify any potential issues early on and ensures a seamless user experience. </li>
                    </ul>
                </div>

                <!-- Step 6  -->
                <div class="md:mb-10 mb-5">
                    <h6 class="text-1.5xl mb-2.5">Step 6: Additional Configuration (if applicable) </h6>
                    <ul class="list-disc pl-5 space-y-2 md:mb-10 mb-5">
                        <li class="mb-2.5">Depending on your specific use case and requirements, you may need to configure additional settings within Fusion link. </li>
                        <li class="mb-2.5">This could include defining synchronization frequency, setting up data filters or transformations, or configuring advanced features offered by Fusion link. </li>
                        <li class="mb-2.5">Refer to the Fusion link documentation or reach out to their support team for guidance on any advanced configurations. </li>
                    </ul>
                </div>

                <!-- Step 7  -->
                <div class="md:mb-10 mb-5">
                    <h6 class="text-1.5xl mb-2.5">Step 7: Troubleshooting (if necessary) </h6>
                    <ul class="list-disc pl-5 space-y-2 md:mb-10 mb-5">
                        <li class="mb-2.5">In the event that you encounter any difficulties during the integration process, don't hesitate to seek assistance. </li>
                        <li class="mb-2.5">Consult the Fusion link documentation, knowledge base, or community forums for troubleshooting tips and common solutions. </li>
                        <li class="mb-2.5">If the issue persists, reach out to Fusion link support team for personalized assistance and guidance in resolving the issue promptly. </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Integration List Section  -->
    <section class="bg-white lg:pb-25 md:pb-22.5 pb-17.5">
        <div class="container">
            <div class="mb-10" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
                <h2 class="mb-2.5 lg:text-5.5xl md:text-4.6xl text-3.4xl text-center">Related Integrations </h2>
            </div>
            <div class="grid md:grid-cols-3 lg:gap-7.5 gap-5" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">

                <!-- Integration Details 1  -->
                <a href="{{ url('pages.integrations-details') }}" class="transition-transform duration-300 ease-in-out hover:-translate-y-1.5 mb-7.5">
                    <div class="bg-body-bg rounded-2xl lg:py-15 py-7.5 px-5 lg:mb-7.5 mb-2.5 md:mb-5 flex justify-center">
                        <img src="/images/icon/11.png" alt="" class="lg:size-15 size-12.5">
                    </div>

                    <div>
                        <h2 class="mb-2.5 md:text-2.5xl text-1.5xl">Sync pro</h2>
                        <p class="md:mb-5 mb-2.5">Advanced synchronization for smooth integration with third-party tools and services.</p>
                        <div class="flex items-center gap-1.25">
                            <div class="text-black">View details</div>
                            <i class="iconify tabler--arrow-right size-5 text-black"></i>
                        </div>
                    </div>
                </a>

                <!-- Integration Details 2  -->
                <a href="{{ url('pages.integrations-details') }}" class="transition-transform duration-300 ease-in-out hover:-translate-y-1.5 mb-7.5">
                    <div class="bg-body-bg rounded-2xl lg:py-15 py-7.5 px-5 lg:mb-7.5 mb-2.5 md:mb-5 flex justify-center">
                        <img src="/images/icon/12.png" alt="" class="lg:size-15 size-12.5">
                    </div>

                    <div>
                        <h2 class="mb-2.5 md:text-2.5xl text-1.5xl">Sync master</h2>
                        <p class="md:mb-5 mb-2.5">Expert data synchronization for reliable transfer between your application and external systems.</p>
                        <div class="flex items-center gap-1.25">
                            <div class="text-black">View details</div>
                            <i class="iconify tabler--arrow-right size-5 text-black"></i>
                        </div>
                    </div>
                </a>

                <!-- Integration Details 3  -->
                <a href="{{ url('pages.integrations-details') }}" class="transition-transform duration-300 ease-in-out hover:-translate-y-1.5 mb-7.5">
                    <div class="bg-body-bg rounded-2xl lg:py-15 py-7.5 px-5 lg:mb-7.5 mb-2.5 md:mb-5 flex justify-center">
                        <img src="/images/icon/1.png" alt="" class="lg:size-15 size-12.5">
                    </div>

                    <div>
                        <h2 class="mb-2.5 md:text-2.5xl text-1.5xl">Sync edge</h2>
                        <p class="md:mb-5 mb-2.5">Optimization of performance through integration with external tools and services.</p>
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