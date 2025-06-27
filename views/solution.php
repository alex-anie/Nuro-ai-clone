<?php 
    $multiText = [
        "1" => ["title" => "Scalable online mapping technology", "description" => "Built on our in-house geographic foundation model, delivering high-precision identification of road signs, crosswalks, lane restrictions, and right-of-way."],

        "2" => ["title" => "Early multi-sensor fusion-based perception", "description" => "Robust across varying sensor types (camera, radar, lidar) and configurations, and can perform across a broad range of weather conditions."],

        "3" => ["title" => "Language-aligned behavior world model", "description" => "Generates human-like driving decisions coupled with natural language reasoning."],

        "4" => ["title" => "Surface-street driving mastery", "description" => "Responds to traffic control devices and handles unprotected turns, automated lane changes, end-of-route pullovers, construction zones, and more."],

        "5" => ["title" => "Ramp-to-ramp highway automation", "description" => "Handles ramp meter detection, seamless merging, automated or driver-initiated lane changes, responsive lane following, reliable exits, safe construction navigation, HOV avoidance, fallback modes, and more."],

        "6" => ["title" => "Unparalleled parking flexibility", "description" => "Parks and unparks efficiently in forward, reverse, or parallel across a diversity of marked and unmarked parking spaces."],

        "7" => ["title" => "Confident, safe, and human-like", "description" => "Can be customized to fit individual driver needs and delivers a comfortable human-like driving experience on every ride."],

        "8" => ["title" => "Adaptable AI system", "description" => "Our AI foundation models allow us to add new sensors and adapt to new geographies without having to reengineer the system."]
    ];

    $multiText2 = [
        "1" => ["title" => "Proven on the Road", "description" => "With over a million driverless miles and zero at-fault incidents, Nuro Driver has proven its dependability through years of real-world deployment."],
        
        "2" => ["title" => "Validated for Safety", "description" => "Our rigorous approach—combining advanced simulations, closed-course validation, and supervised real-world testing—conforms to industry best practices, including ISO 26262 and UL 4600."],

        "3" => ["title" => "Highly Customizable & Supported", "description" => "Hands-on guidance, flexible partnership models, and direct AV stack access let you integrate exactly what you need, supported by our advanced AI and premium tooling."],

        "4" => ["title" => "Cost-Effective", "description" => "Automotive-grade components and next-gen compute minimize complexity and power usage at a fraction of typical L4 costs."],

        "5" => ["title" => "Platform-Agnostic", "description" => "Integration From personal cars to robotaxis, Nuro’s AI foundation, modular hardware, and distributed sensors adapt to any vehicle platform."],

        "6" => ["title" => "Accelerated Time to Market", "description" => "With a streamlined integration roadmap, flexible manufacturing options, and a proven deployment framework, our customers can plan with confidence and launch on schedule."]
    ];
?>

<style>
    @keyframes spinConic {
    0% {
        background-position: center 0%;
    }
    100% {
        background-position: center 100%;
    }
    }
</style>
<div id="site-wrapper" class="bg-neutral-800">
<main class="w-[95%] mx-auto mt-0 md:pt-10">
    <!-- Navbar -->
    <section>
        <?php require('partials/navbar.php')?>
    </section>

    <!-- Hero section -->
    <section class="relative h-170 w-full md:h-160 rounded-3xl">
        <video autoplay preload loop muted playsinline class="h-full w-full rounded-3xl object-cover object-[50%_50%]">
            <source src="/assets/videos/MiniLoop_Solutions.mp4" type="video/mp4"/>
        </video>

        <section class="">
            <aside class="absolute top-8 left-5 md:top-1/2 md:-translate-y-1/2">
                <h1 class="text-white text-4xl md:text-5xl w-[70%]" style="font-family: SuisseIntl; font-weight: 400;">Unlock industry-leading autonomy with Nuro Driver</h1>
                <p class="text-white text-xl mt-4 w-[60%]" style="font-family: SuisseIntl; font-weight: 200;">L2++ to L4 technology for automotive and mobility platforms.</p>
                <p class="text-white text-[12px] mt-4" style="font-family: SuisseIntlMono; font-weight: 200;">Solutions</p>
        </aside>

        <aside class="absolute w-[95%] md:w-65 flex md:flex-col md:gap-y-4 gap-x-4 left-1/2 -translate-x-1/2 md:left-auto md:translate-x-0 md:right-6 bottom-6 bg-gray-500/20 backdrop-blur-3xl rounded-3xl p-2">
            <div class="relative h-35 w-60 rounded-3xl">
                <video class="h-full w-full rounded-3xl object-cover object-[50%_50%]">
                    <source src="/assets/videos/dave-ferguson.mp4" type="video/mp4"/>
                </video>

                <button class="cursor-pointer">
                <svg width="15" height="15" class="border border-white size-5 rounded-full text-white hover:bg-white hover:text-black z-10 transition-colors absolute bottom-3 left-3" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 11L6 4L10.5 7.5L6 11Z" fill="currentColor"></path>
                </svg>
                </button>
            </div>

            <div class="flex flex-col gap-3 mt-4 md:mt-0 pr-6 md:pr-2">
                <p class="text-white" style="font-family: SuisseIntl; font-weight: 200;">Dave Ferguson on the future of Nuro.</p>
                
                <p class="text-white text-[0.7em]" style="font-family: SuisseIntlMono; font-weight: 200;">01:38</p>
            </div>
        </aside>
        </section>
    </section>

    <!-- Hero Animated text -->
    <section class="mt-18">
        <h1 class="text-4xl lg:text-5xl w-full md:w-[60%] bg-clip-text text-transparent animate-[spinConic_3s_ease-in-out_infinite_alternate]"
        style="
        font-family: SuisseIntl;
        font-weight: 500;
        background-image: conic-gradient(from 180deg, #0ea5e9, #d4d4d4, #0ea5e9);
        background-size: 1000% 1000%;
        background-position: center;
    ">
           Nuro Driver is ready for integration across two verticals.
        </h1>
    </section>

    <!-- Explore Solution Section -->
    <section>
        <article class="grid md:grid-cols-2 gap-y-8 gap-x-8  mt-12 md:w-full">
            <aside>
                <div class="relative w-full h-160 md:h-[20rem] lg:h-[25rem] xl:h-[30rem] rounded-3xl">
                    <img class="h-full w-full rounded-3xl object-cover" src="/assets/images/solution/bus-mini-dark.png" alt="nuro car passenger-mobility">
                </div>
                <div class="p-6">
                    <p class="text-white text-2xl md:text-4xl mt-3" style="font-family: SuisseIntl; font-weight: 200;">Commercial Mobility</p>

                    <p class="text-sky-600 mt-3" style="font-family: SuisseIntlMono; font-weight: 200;">SAE Level 4</p>
                    
                    <p class="text-neutral-400 mt-4" style="font-family: SuisseIntl; font-weight: 200;">
                        Nuro's proven L4 autonomous system is road-tested and versatile, adapting to both passenger and goods delivery applications. This advanced system not only reduces operational costs but also has the potential to expand mobility demand, offering a dual advantage for mobility services.
                    </p>
                </div>
            </aside>

            <aside>
                <div class="relative w-full h-160 md:h-[20rem] lg:h-[25rem] xl:h-[30rem] rounded-3xl">
                    <img class="h-full w-full rounded-3xl object-cover" src="/assets/images/solution/car-with-ring-dark.png" alt="nuro car passenger-mobility">
                </div>
                <div class="p-6">
                    <p class="text-white text-2xl md:text-4xl mt-3" style="font-family: SuisseIntl; font-weight: 200;">Automotive</p>

                    <p class="text-sky-600 mt-3" style="font-family: SuisseIntlMono; font-weight: 200;">SAE Level 2 to Level 4</p>
                    
                    <p class="mt-4 text-neutral-400" style="font-family: SuisseIntl; font-weight: 200;">
                    With extensive experience in autonomous vehicle development and deployment, Nuro enables a seamless progression from L2 to L4 capability for consumer vehicles. Our collaborative approach and proven technology support companies through their autonomy roadmap, ensuring safety, reliability, and scalability.

                    </p>
                </div>
            </aside>
        </article>
    </section>

    <!-- Futureproof your vehicles -->
    <section>
        <div class="p-6">
                    <p class="text-white text-2xl md:text-4xl mt-3 w-[70%] md:w-[30%]" style="font-family: SuisseIntl; font-weight: 500;">Futureproof your vehicles with two tiers of Nuro Driver™</p>
                    
                    <p class="mt-4 text-neutral-400 text-xl w-[90%] md:w-[50%]" style="font-family: SuisseIntl; font-weight: 200;">
                        Since its inception, Nuro Driver has been built for Level 4. It navigates the full spectrum of autonomy without the compromises of incremental upgrades from Level 2, delivering a smarter, seamless path to the future of mobility.
                    </p>
                </div>
    </section>

    <!-- Nuro's Driver -->
     <section class="mt-18">
        <section>
            <article class="grid lg:grid-cols-2 gap-8 lg:gap-y-0 mt-12 md:w-full">
                <aside class="hidden md:block">
                    <div class="relative w-full h-160 md:h-[20rem] lg:h-[25rem] xl:h-[30rem] rounded-3xl">
                        <img class="h-full w-full rounded-3xl object-cover" src="/assets/images/solution/car-with-ring-dark-face-south.png" alt="nuro car passenger-mobility">
                    </div>
                </aside>

                <aside class="">
                    <div class="">
                        <button class="flex w-full justify-between py-4 cursor-pointer border-t-1 border-t-neutral-700">
                            <span class="text-white text-xl md:text-2xl" style="font-family: SuisseIntl; font-weight: 500;">Nuro Driver™ L4</span>
                            <span class="text-white text-xl md:text-2xl border border-white py-1 px-5 rounded-2xl" style="font-family: SuisseIntlMono; font-weight: 500;">01</span>
                        </button>
                    </div>

                    <div>
                        <h1 class="text-sky-600" style="font-family: SuisseIntlMono; font-weight: 500;">Fully Autonomous</h1>

                        <p class="my-4 text-neutral-400 text-xl" style="font-family: SuisseIntl; font-weight: 200;">Our flagship self-driving system enables safe, reliable autonomous operation on any vehicle platform, navigating urban roads with natural driving behavior.</p>

                        <ul class="list-disc pl-10">
                            <li class="my-4 text-neutral-400 text-xl" style="font-family: SuisseIntl; font-weight: 200;">Fully self-driving: no human driver required</li>

                            <li class="my-4 text-neutral-400 text-xl" style="font-family: SuisseIntl; font-weight: 200;">Sensor configuration: Camera-Radar-Lidar</li>

                            <li class="my-4 text-neutral-400 text-xl" style="font-family: SuisseIntl; font-weight: 200;">Fully autonomous on urban roads, available 24/7</li>

                            <li class="my-4 text-neutral-400 text-xl" style="font-family: SuisseIntl; font-weight: 200;">Comprehensive teleoperations monitoring and control suite</li>

                            <li class="my-4 text-neutral-400 text-xl" style="font-family: SuisseIntl; font-weight: 200;">Validated for safety and proven on-road</li>
                        </ul>

                        <div class="block mb-4 md:hidden">
                                <div class="relative w-[60%] h-60 rounded-3xl">
                                    <img class="h-full w-full rounded-3xl object-cover" src="/assets/images/solution/car-with-ring-dark-face-south.png" alt="nuro car passenger-mobility">
                                </div>
                        </div>
                    </div>

                     <div class="">
                        <button class="flex w-full justify-between py-4 cursor-pointer border-y-1 border-y-neutral-700">
                            <span class="text-white text-xl md:text-2xl" style="font-family: SuisseIntl; font-weight: 500;">Nuro Driver™ Assist L2++</span>
                            <span class="text-white text-xl md:text-2xl border border-white py-1 px-5 rounded-2xl" style="font-family: SuisseIntlMono; font-weight: 500;">02</span>
                        </button>
                    </div>
                </aside>
            
        </article>
    </section>
    </section>

    <!-- Hero Animated text 2 -->
    <section class="my-18">
        <h1 class="text-4xl lg:text-5xl w-full md:w-[40%] bg-clip-text text-transparent animate-[spinConic_3s_ease-in-out_infinite_alternate]"
        style="
        font-family: SuisseIntl;
        font-weight: 500;
        background-image: conic-gradient(from 180deg, #0ea5e9, #d4d4d4, #0ea5e9);
        background-size: 1000% 1000%;
        background-position: center;
    ">
          Take control of your autonomy roadmap.
        </h1>
    </section>

    <!-- Multi Text Sections -->
    <section class="grid gap-4 md:grid-cols-2 lg:grid-cols-4">
        <?php foreach($multiText as $text): ?>
            <aside>
                <div class="w-18 text-white py-2">
                    <img class="w-full" src="/assets/svg/checkmark.svg" alt="checkmark" />
                </div>
                <div>
                    <h1 class="text-xl md:text-3xl text-white" style="font-family: SuisseIntl; font-weight: 500;"><?= $text['title']?></h1>
                    <p class="my-4 text-neutral-400 md:text-xl" style="font-family: SuisseIntl; font-weight: 200;"><?= $text['description'] ?></p>
                </div>
            </aside>
        <?php endforeach; ?>
    </section>

    <!-- Hero Animated text 3 -->
    <section class="my-18">
        <h1 class="text-4xl lg:text-5xl w-full md:w-[40%] bg-clip-text text-transparent animate-[spinConic_3s_ease-in-out_infinite_alternate]"
        style="
        font-family: SuisseIntl;
        font-weight: 500;
        background-image: conic-gradient(from 180deg, #0ea5e9, #d4d4d4, #0ea5e9);
        background-size: 1000% 1000%;
        background-position: center;
    ">
          Choose the intelligent path to autonomy.
        </h1>
    </section>

    <!-- Multi text 3 -->
    <section class="grid gap-4 md:gap-x-8 md:grid-cols-2 lg:grid-cols-3">
        <?php foreach($multiText2 as $key => $text): ?>
        <aside>
                <div>
                    <h1 class="text-xl md:text-2xl text-white" style="font-family: SuisseIntl; font-weight: 500;"><?= $text['title']?></h1>
                    <span class="text-sky-600 text-[12px]" style="font-family: SuisseIntlMono; font-weight: 200;">0<?= $key?></span>
                    <p class="my-4 text-neutral-400 md:text-xl" style="font-family: SuisseIntl; font-weight: 200;"><?= $text['description'] ?></p>
                </div>
            </aside>
            <?php endforeach; ?>
    </section>

     <!-- Hero Animated text 4 -->
    <section class="my-18">
        <h1 class="text-4xl lg:text-5xl w-full md:w-[40%] bg-clip-text text-transparent animate-[spinConic_3s_ease-in-out_infinite_alternate]"
        style="
        font-family: SuisseIntl;
        font-weight: 500;
        background-image: conic-gradient(from 180deg, #0ea5e9, #d4d4d4, #0ea5e9);
        background-size: 1000% 1000%;
        background-position: center;
    ">
        The magic of autonomy is here.
        </h1>
    </section>

     <!-- Bring your vehicles up to speed. section -->
     <section class="mt-18">
        <aside class="relative w-full rounded-3xl h-180 md:h-120">
            <picture>
                <source media="(min-width: 1024px)" srcset="/assets/images/technology/contact-nuro-dark-large.png"  type="image/png"/>

                <img class="h-full w-full rounded-3xl object-cover object-center" src="/assets/images/technology/contact-nuro-dark-small.png" alt="">
            </picture>
            
            <div class="absolute left-5 bottom-5 w-[70%] md:w-150">
                <p class="text-white text-4xl md:text-5xl mb-4" style="font-family: SuisseIntl; font-weight: 500;">Bring your vehicles up to speed.</p>
                <p class="text-white" style="font-family: SuisseIntl; font-weight: 200;">Empower your fleet with AI-first autonomous capabilities.</p>
                <a class="bg-white text-black py-2 px-4 rounded-full inline-block mt-6 hover:text-white hover:bg-sky-700 transition-colors" style="font-family: SuisseIntl; font-weight: 200;" href="/contact">Contact Nuro</a>
            </div>
        </aside>
    </section>
</main>

<section class="pt-18">
    <?php require('partials/footer.php') ?>
</section>
</div>