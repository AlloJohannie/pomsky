@extends('layouts.landing', ['title' => 'Blog Details'])

@section('content')
    <!-- Blog Details Section  -->
    <section class="bg-white lg:py-25 md:py-12.5 py-7.5">
        <div class="container-small">
            <div data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-out">
                <div class="text-center md:pb-12.5 pb-5">
                    <div class="mb-7.5 flex gap-7.5 justify-center">
                        <div class="bg-dark py-0.5 px-3.75  rounded-full font-medium text-sm  mb-2.5 text-primary">Business</div>
                        <p>August 6, 2024 </p>
                    </div>

                    <h1 class="lg:text-6xl md:text-5.5xl text-4xl mb-2.5">Bad habits that people in the industry need </h1>
                    <p class="mb-2.5">Pleasure and so read the was hope entire first decided the so must have as on was want. </p>
                </div>

                <div>
                    <img src="/images/blog/6.png" alt="" class="rounded-2xl">
                </div>

                <div>
                    <h5 class="mb-2.5 md:text-2.5xl text-1.5xl mt-10">Up-coming business bloggers, you need to watch </h5>
                    <p class="mb-10">The printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
                    <ul class="list-disc pl-5 space-y-2 md:mb-10 mb-5">
                        <li class="mb-2.5">There are many variations of passages of Lorem Ipsum available.</li>
                        <li class="mb-2.5">Iusto odio dignissimos ducimus qui blanditiis.</li>
                        <li class="mb-2.5">Praesentium voluptatum deleniti atque.</li>
                        <li class="mb-2.5">Quas molestias excepturi sint occaecati.</li>
                    </ul>

                    <p class="mb-10">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham. </p>
                </div>

                <div>
                    <h5 class="mb-2.5 md:text-2.5xl text-1.5xl">10 tell-tale signs you need to get a new business </h5>
                    <p class="mb-10">However those who do not know how to pursue pleasure rationally encounter extremely painful consequences. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure? </p>
                </div>

                <div class="bg-primary rounded-2xl md:p-12.5 p-5 mb-10">
                    <p class="text-black text-xl">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt.</p>
                </div>

                <p class="mb-10">These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammeled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains. </p>
            </div>
        </div>
    </section>

    <!-- Blog Section  -->
    <section class="bg-white lg:pb-25 md:pb-12.5 pb-7.5">
        <div class="container">
            <h2 class="text-center mb-10 lg:text-5.5xl md:text-4.6xl text-3.4xl">More blog </h2>

            <div class="grid md:grid-cols-3 lg:gap-12.5 md:gap-5 gap-10">
                <!-- Blog Item 1  -->
                <a href="{{ url('pages.blog-details') }}">
                    <div class="overflow-hidden rounded-2xl">
                        <img src="/images/blog/1.png" alt="" class="duration-300 not-only-of-type:hover:scale-105 transition-all">
                    </div>
                    <div class="md:mt-5 mt-2.5">
                        <p class="text-dark">September 4, 2024</p>
                        <h2 class="text-2xl md:mt-2.5 mt-1.25">Starting and growing a career in web design </h2>
                    </div>
                </a>

                <!-- Blog Item 2  -->
                <a href="{{ url('pages.blog-details') }}">
                    <div class="overflow-hidden rounded-2xl">
                        <img src="/images/blog/2.png" alt="" class="duration-300 hover:scale-105 transition-all">
                    </div>
                    <div class="md:mt-5 mt-2.5">
                        <p class="text-dark">September 4, 2024 </p>
                        <h2 class="text-2xl md:mt-2.5 mt-1.25">Create a landing page that performs great </h2>
                    </div>
                </a>

                <!-- Blog Item 3  -->
                <a href="{{ url('pages.blog-details') }}">
                    <div class="overflow-hidden rounded-2xl">
                        <img src="/images/blog/3.png" alt="" class="duration-300 hover:scale-105 transition-all">
                    </div>
                    <div class="md:mt-5 mt-2.5">
                        <p class="text-dark">September 4, 2024 </p>
                        <h2 class="text-2xl md:mt-2.5 mt-1.25">How can designers prepare for the future </h2>
                    </div>
                </a>
            </div>
        </div>
    </section>
@endsection