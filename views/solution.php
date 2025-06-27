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
        <aside>
            <div class="w-18 text-white py-2">
                <img class="w-full" src="/assets/svg/checkmark.svg" alt="checkmark" />
            </div>
            <div>
                <h1 class="text-xl md:text-3xl text-white" style="font-family: SuisseIntl; font-weight: 500;">Scalable online mapping technology</h1>
                <p class="my-4 text-neutral-400 md:text-xl" style="font-family: SuisseIntl; font-weight: 200;">Built on our in-house geographic foundation model, delivering high-precision identification of road signs, crosswalks, lane restrictions, and right-of-way.
                </p>
            </div>
        </aside>

        <aside>
            <div class="w-18 text-white py-2">
                <img class="w-full" src="/assets/svg/checkmark.svg" alt="checkmark" />
            </div>
            <div>
                <h1 class="text-xl md:text-3xl text-white" style="font-family: SuisseIntl; font-weight: 500;">Early multi-sensor fusion-based perception</h1>
                <p class="my-4 text-neutral-400 md:text-xl" style="font-family: SuisseIntl; font-weight: 200;">Robust across varying sensor types (camera, radar, lidar) and configurations, and can perform across a broad range of weather conditions.
                </p>
            </div>
        </aside>

        <aside>
            <div class="w-18 text-white py-2">
                <img class="w-full" src="/assets/svg/checkmark.svg" alt="checkmark" />
            </div>
            <div>
                <h1 class="text-xl md:text-3xl text-white" style="font-family: SuisseIntl; font-weight: 500;">Language-aligned behavior world model</h1>
                <p class="my-4 text-neutral-400 md:text-xl" style="font-family: SuisseIntl; font-weight: 200;">Generates human-like driving decisions coupled with natural language reasoning.
                </p>
            </div>
        </aside>

        <aside>
            <div class="w-18 text-white py-2">
                <img class="w-full" src="/assets/svg/checkmark.svg" alt="checkmark" />
            </div>
            <div>
                <h1 class="text-xl md:text-3xl text-white" style="font-family: SuisseIntl; font-weight: 500;">Surface-street driving mastery</h1>
                <p class="my-4 text-neutral-400 md:text-xl" style="font-family: SuisseIntl; font-weight: 200;">Responds to traffic control devices and handles unprotected turns, automated lane changes, end-of-route pullovers, construction zones, and more.
                </p>
            </div>
        </aside>

        <aside>
            <div class="w-18 text-white py-2">
                <img class="w-full" src="/assets/svg/checkmark.svg" alt="checkmark" />
            </div>
            <div>
                <h1 class="text-xl md:text-3xl text-white" style="font-family: SuisseIntl; font-weight: 500;">Ramp-to-ramp highway automation</h1>
                <p class="my-4 text-neutral-400 md:text-xl" style="font-family: SuisseIntl; font-weight: 200;">Handles ramp meter detection, seamless merging, automated or driver-initiated lane changes, responsive lane following, reliable exits, safe construction navigation, HOV avoidance, fallback modes, and more.
                </p>
            </div>
        </aside>

        <aside>
            <div class="w-18 text-white py-2">
                <img class="w-full" src="/assets/svg/checkmark.svg" alt="checkmark" />
            </div>
            <div>
                <h1 class="text-xl md:text-3xl text-white" style="font-family: SuisseIntl; font-weight: 500;">Unparalleled parking flexibility</h1>
                <p class="my-4 text-neutral-400 md:text-xl" style="font-family: SuisseIntl; font-weight: 200;">Parks and unparks efficiently in forward, reverse, or parallel across a diversity of marked and unmarked parking spaces.
                </p>
            </div>
        </aside>

        <aside>
            <div class="w-18 text-white py-2">
                <img class="w-full" src="/assets/svg/checkmark.svg" alt="checkmark" />
            </div>
            <div>
                <h1 class="text-xl md:text-3xl text-white" style="font-family: SuisseIntl; font-weight: 500;">Confident, safe, and human-like</h1>
                <p class="my-4 text-neutral-400 md:text-xl" style="font-family: SuisseIntl; font-weight: 200;">Can be customized to fit individual driver needs and delivers a comfortable human-like driving experience on every ride.
                </p>
            </div>
        </aside>

        <aside>
            <div class="w-18 text-white py-2">
                <img class="w-full" src="/assets/svg/checkmark.svg" alt="checkmark" />
            </div>
            <div>
                <h1 class="text-xl md:text-3xl text-white" style="font-family: SuisseIntl; font-weight: 500;">Adaptable AI system</h1>
                <p class="my-4 text-neutral-400 md:text-xl" style="font-family: SuisseIntl; font-weight: 200;">Our AI foundation models allow us to add new sensors and adapt to new geographies without having to reengineer the system.
                </p>
            </div>
        </aside>
    </section>

    <!-- Safety at every turn section -->
     <section class="mt-8">
        <aside class="relative w-full rounded-3xl h-180">
            <picture>
                <source media="(min-width: 1024px)" srcset="/assets/images/technology/fixing-helmet-man-large.png"  type="image/png"/>

                <img class="h-full w-full rounded-3xl object-cover object-center" src="/assets/images/technology/fixing-helmet-man-small.png" alt="">
            </picture>
            
            <div class="absolute left-5 bottom-5 md:w-150">
                <p class="text-white text-4xl md:text-5xl mb-4" style="font-family: SuisseIntl; font-weight: 500;">Uncompromising safety from start to finish.</p>
                <p class="text-white text-[12px]" style="font-family: SuisseIntlMono; font-weight: 200;">Safety</p>
                <p class="text-white mt-3" style="font-family: SuisseIntl; font-weight: 200;">At Nuro, safety is integral to every stage of our autonomy development lifecycle. This focus is reflected in our safety record of more than 1 million autonomous miles without an at-fault incident.</p>
                <a class="bg-white text-black py-2 px-4 rounded-full inline-block mt-6 hover:text-white hover:bg-sky-700 transition-colors" style="font-family: SuisseIntl; font-weight: 200;" href="/safety">Safety</a>
            </div>
        </aside>
     </section>

     <!-- Bring your vehicles up to speed. section -->
     <section class="mt-18">
        <aside class="relative w-full rounded-3xl h-180 ">
            <picture>
                <source media="(min-width: 1024px)" srcset="/assets/images/technology/contact-nuro-dark-large.png"  type="image/png"/>

                <img class="h-full w-full rounded-3xl object-cover object-center" src="/assets/images/technology/contact-nuro-dark-small.png" alt="">
            </picture>
            
            <div class="absolute left-5 bottom-5 md:left-10 md:bottom-auto md:top-12 w-[70%] md:w-150">
                <p class="text-white text-4xl md:text-5xl mb-4" style="font-family: SuisseIntl; font-weight: 500;">Bring your vehicles up to speed.</p>
                <p class="text-white" style="font-family: SuisseIntl; font-weight: 200;">Empower your fleet with AI-first autonomous capabilities.</p>
                <a class="bg-white text-black py-2 px-4 rounded-full inline-block mt-6 hover:text-white hover:bg-sky-700 transition-colors" style="font-family: SuisseIntl; font-weight: 200;" href="/contact">Contact Nuro</a>
            </div>
        </aside>
    </section>

    <!-- Explore more. -->
     <section class="mt-18">
        <h1 class="text-white text-4xl mb-10 pl-6" style="font-family: SuisseIntl; font-weight: 500;">Explore more.</h1>

        <article class="grid gap-5  grid-cols-8">
            <aside class="w-full h-auto bg-amber-100 rounded-3xl p-4 col-span-8 lg:col-span-2">
                <h1 class="text-2xl md:text-4xl [font-family:SuisseIntl] [font-weight:500]">Current Roles.</h1>
                <p class="mt-4 text-sky-800 [font-family:SuisseIntlMono] [font-weight:200]">Careers</p>
                <div class="my-8 border rounded-3xl">
                    <a href="" class="border-b text-xl h-20 flex items-center gap-x-3 group">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-0 h-[24px] group-hover:w-[24px] transition-[width] duration-300 ease-linear  lucide lucide-move-right-icon lucide-move-right"><path d="M18 8L22 12L18 16"/><path d="M2 12H22"/></svg>
                        <span style="font-family: SuisseIntl; font-weight: 200;">Senior Software Engineer, Devices Platform</span>
                    </a>
                    <a href="" class="border-b text-xl h-20 flex items-center gap-x-3 group">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-0 h-[24px] group-hover:w-[24px] transition-[width] duration-300 ease-linear lucide lucide-move-right-icon lucide-move-right"><path d="M18 8L22 12L18 16"/><path d="M2 12H22"/></svg>
                        <span style="font-family: SuisseIntl; font-weight: 200;">Software Engineer, Autonomy-New Grad</span>
                    </a>
                    <a href="" class="border-b text-xl h-20 flex items-center gap-x-3 group">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-0 h-[24px] group-hover:w-[24px] transition-[width] duration-300 ease-linear lucide lucide-move-right-icon lucide-move-right"><path d="M18 8L22 12L18 16"/><path d="M2 12H22"/></svg>
                        <span style="font-family: SuisseIntl; font-weight: 200;">Senior Software Engineer, Machine Learning - Localization & Mapping</span>
                    </a>
                    <a href="" class="border-b text-xl h-20 flex items-center gap-x-3 group">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-0 h-[24px] group-hover:w-[24px] transition-[width] duration-300 ease-linear lucide lucide-move-right-icon lucide-move-right"><path d="M18 8L22 12L18 16"/><path d="M2 12H22"/></svg>
                        <span style="font-family: SuisseIntl; font-weight: 200;">Senior Software Engineer, Performance</span>
                    </a>
                    <a href="" class=" text-xl h-20 flex items-center gap-x-3 group">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-0 h-[24px] group-hover:w-[24px] transition-[width] duration-300 ease-linear lucide lucide-move-right-icon lucide-move-right"><path d="M18 8L22 12L18 16"/><path d="M2 12H22"/></svg>
                        <span style="font-family: SuisseIntl; font-weight: 200;">Prototype Fabrication Engineer</span>
                    </a>
                </div>

                <div>
                    <a class="bg-neutral-900 text-white py-2 px-4 rounded-full inline-block mt-6 hover:bg-sky-700 transition-colors" href="/careers" style="font-family: SuisseIntl; font-weight: 200;">View All</a>
                </div>
            </aside>

            <aside class="relative w-full h-auto rounded-3xl col-span-8 lg:col-span-4">
                <img class="w-full h-full rounded-3xl object-cover object-center" src="/assets/images/technology/man-woman-dog.png" alt="">
                <div class="absolute top-6 left-5">
                    <h1 class="w-[60%] text-white text-2xl md:text-4xl [font-family:SuisseIntl] [font-weight:500]">Join Nuro in redefining the future of mobility.</h1>
                    <p class="mt-4 text-white [font-family:SuisseIntlMono] [font-weight:200]">careers</p>
                </div>

                <div class="absolute left-5 bottom-5">
                    <a href="/careers" class="bg-white text-black py-2 px-4 rounded-full inline-block hover:bg-sky-700 transition-colors" href="" style="font-family: SuisseIntl; font-weight: 200;">Learn More</a>
                </div>
            </aside>

            <aside class="relative rounded-3xl w-full bg-neutral-200 h-100 lg:h-auto p-6 col-span-4 lg:col-span-2">
                <h1 class="text-black text-6xl md:text-7xl lg:text-8xl" style="font-family: SuisseIntlMono; font-weight: 200;">4+</h1>
                <p class="mt-6 text-sky-800" style="font-family: SuisseIntl; font-weight: 200;">Technology</p>

                <div class="absolute left-5 bottom-5">
                    <p class="w-[90%] text-xl md:text-3xl text-black" href="" style="font-family: SuisseIntl; font-weight: 200;">Years of fully driverless deployments.</p>
                </div>
            </aside>

            <aside class="relative rounded-3xl w-full bg-blue-500 h-100 lg:h-auto p-6 col-span-4 lg:col-span-2">
                <h1 class="text-white text-xl md:text-3xl" style="font-family: SuisseIntl; font-weight: 200;">
                    Learn about how Nuro is approaching HD mapping that scales</h1>
                <p class="mt-6 text-sky-100" style="font-family: SuisseIntlMono; font-weight: 200;">AI Research @ Nuro</p>
                <div class="absolute left-5 bottom-5">
                    <a href="/exploring-hd-mapping-that-scale" class="bg-black text-white py-2 px-4 rounded-full inline-block hover:bg-sky-700 transition-colors" style="font-family: SuisseIntl; font-weight: 200;">Read Blog</a>
                </div>
            </aside>

            <aside class="w-full bg-neutral-200 rounded-3xl p-5 col-span-8 lg:col-span-2">
                <h1 class="text-2xl md:text-3xl [font-family:SuisseIntl] [font-weight:500]">Curious about safety?.</h1>
                <p class="mt-4 text-sky-800 [font-family:SuisseIntlMono] [font-weight:200]">FAQ</p>
                <div class="my-8 border rounded-3xl">
                    <span class="border-b  h-20 flex items-center gap-x-3 group pl-4">
                        <p>How does Nuro engage with the community regarding safety?</p>
                    </span>
                    <span class="border-b  h-20 flex items-center gap-x-3 group pl-4">
                        <p>How does Nuro handle emergency situations?</p>
                    </span>
                    <span class=" h-20 flex items-center gap-x-3 group pl-4">
                        <p>How does Nuro ensure the safety of its autonomous vehicles?</p>
                    </span>
                </div>

                <div>
                    <a href="/safety#faqs" class="bg-neutral-900 text-white py-2 px-4 rounded-full inline-block mt-6 hover:bg-sky-700 transition-colors" href="" style="font-family: SuisseIntl; font-weight: 200;">View All</a>
                </div>
            </aside>

            <aside class="relative w-full h-90 lg:h-auto rounded-3xl col-span-8 lg:col-span-4">
                <div class="absolute top-4 left-4">
                    <h1 class="text-xl md:text-2xl lg:text-4xl text-white" style="font-family: SuisseIntl; font-weight: 200;">Narrow Work zone.</h1>
                    <p class="text-white text-[12px] mt-6" style="font-family: SuisseIntlMono; font-weight: 200;">Nuro Driver™ Showcase</p>
                </div>
                <video autoplay preload loop muted playsinline class="h-full w-full rounded-3xl object-cover object-[50%_50%]">
                    <source src="/assets/videos/narrow-work-zone.mp4" type="video/mp4"/>
                </video>

                <div class="absolute bottom-5 left-4">
                    <span>
                        <a href="/showcase" class="bg-white text-black py-2 px-4 rounded-full inline-block mt-6 hover:bg-sky-700 hover:text-white transition-colors" style="font-family: SuisseIntl; font-weight: 200;" href="/showcase">See More</a>
                    </span>

                    <span>
                        <button>
                            <span class="mt-6 text-sky-800" style="font-family: SuisseIntlMono; font-weight: 200;">01</span>
                            <div></div>
                        </button>
                    </span>
                </div>
            </aside>
        </article>
    </section>
</main>

<section class="pt-18">
    <?php require('partials/footer.php') ?>
</section>
</div>