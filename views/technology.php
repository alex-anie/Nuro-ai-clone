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
            <source src="/assets/videos/Tech-Silent-Video-Zoomed-In_compressed.mp4" type="video/mp4"/>
        </video>

        <section class="">
            <aside class="absolute top-8 left-5 md:top-1/2 md:-translate-y-1/2">
                <h1 class="text-white text-5xl" style="font-family: SuisseIntl; font-weight: 400;">AI-first <br />autonomy. </h1>
                <p class="text-white text-2xl mt-4" style="font-family: SuisseIntl; font-weight: 200;">Industry-leading L4 autonomous <br /> driving technology on the road today.</p>
                <p class="text-white mt-4" style="font-family: SuisseIntlMono; font-weight: 200;">Technology</p>
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
            Redefining what it means to move.
            Proven AI-first L4 technology 
            that’s built to scale.
        </h1>
    </section>

    <!-- Explore Solution Section -->
    <section>
        <article class="grid md:grid-cols-2 lg:grid-cols-3 gap-y-8 md:gap-x-8 lg:gap-y-0 mt-12 md:w-full">
            <aside>
                <div class="relative w-full h-160 md:h-[20rem] lg:h-[25rem] xl:h-[30rem] rounded-3xl">
                    <video autoplay preload loop muted playsinline class="h-full w-full rounded-3xl object-cover object-[50%_50%]">
                        <source src="/assets/videos/R2-On-road_L_compressed_2.mp4" type="video/mp4"/>
                    </video>

                    <a href="/showcase" class="group hover:bg-sky-600 flex gap-x-4 justify-between items-center absolute bottom-8 left-6 border border-sky-600 rounded-xl py-2 px-3" style="transition: background 0.5s linear">
                        <span class="text-sky-600 group-hover:text-white" style="font-family: SuisseIntlMono; font-weight: 200;">See our Autonomy Showcase</span>
                        <svg class="size-[18px] rounded-full border border-sky-600 stroke-sky-600 group-hover:stroke-white group-hover:border-white" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.75C8 2.47386 7.77614 2.25 7.5 2.25C7.22386 2.25 7 2.47386 7 2.75V7H2.75C2.47386 7 2.25 7.22386 2.25 7.5C2.25 7.77614 2.47386 8 2.75 8H7V12.25C7 12.5261 7.22386 12.75 7.5 12.75C7.77614 12.75 8 12.5261 8 12.25V8H12.25C12.5261 8 12.75 7.77614 12.75 7.5C12.75 7.22386 12.5261 7 12.25 7H8V2.75Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
                    </a>
                </div>
                <div class="p-6">
                    <p class="text-white text-2xl mt-3" style="font-family: SuisseIntl; font-weight: 200;">Proven driverless deployments</p>
                    
                    <p class="text-neutral-400" style="font-family: SuisseIntl; font-weight: 200;">The Nuro Driver™ is the one of the only Driverless autonomous technologies in the world that is on roads today-- successfully deployed across three different US state since 2020
                    </p>
                </div>
            </aside>

            <aside>
                <div class="relative w-full h-160 md:h-[20rem] lg:h-[25rem] xl:h-[30rem] rounded-3xl">
                    <img class="h-full w-full rounded-3xl object-cover" src="/assets/images/technology/desing-scale-nuro-car.png" alt="nuro car passenger-mobility">
                </div>
                <div class="p-6">
                    <p class="text-white text-2xl mt-3" style="font-family: SuisseIntl; font-weight: 200;">Designed to scale</p>
                    
                    <p class="text-neutral-400" style="font-family: SuisseIntl; font-weight: 200;">
                        Built with cost-efficient, automotive-grade components, our AI-first system is engineered to be adaptable across various vehicle platforms.
                    </p>
                </div>
            </aside>

            <aside>
                <div class="relative w-full h-160 md:h-[20rem] lg:h-[25rem] xl:h-[30rem] rounded-3xl">
                    <img class="h-full w-full rounded-3xl object-cover" src="/assets/images/technology/safety-first-man.png" alt="nuro car passenger-mobility">
                </div>
                <div class="p-6">
                    <p class="text-white text-2xl mt-3" style="font-family: SuisseIntl; font-weight: 200;">Safety-first approach</p>
                    
                    <p class="text-neutral-400" style="font-family: SuisseIntl; font-weight: 200;">
                        Designed with safety at its core through redundant systems and rigorous validation, including traditional system checks on our AI system and a backup parallel autonomy stack.
                    </p>
                </div>
            </aside>
        </article>

        <article>
            <button class="cursor-pointer">
                <span style="font-family: SuisseIntlMono; font-weight: 200;" class="text-white text-[12px]">01</span>
                <div class="h-[1px] w-8 bg-white"></div>
            </button>

            <button class="cursor-pointer">
                <span style="font-family: SuisseIntlMono; font-weight: 200;" class="text-neutral-600 text-[12px]">02</span>
                <div class="h-[1px] w-8 bg-neutral-600"></div>
            </button>

            <button class="cursor-pointer">
                <span style="font-family: SuisseIntlMono; font-weight: 200;" class="text-neutral-600 text-[12px]">03</span>
                <div class="h-[1px] w-8 bg-neutral-600"></div>
            </button>
        </article>
    </section>

    <!-- Nuro's Autonomous Driving system -->
    <section class="mt-18">
        <h1 
        class="text-white text-4xl lg:text-5xl w-full md:w-[60%]"
        style="
        font-family: SuisseIntl;
        font-weight: 500;
        ">
            Nuro's Autonomous Driving system.
        </h1>

        <section>
            <article class="grid lg:grid-cols-2 gap-8 lg:gap-y-0 mt-12 md:w-full">
                <aside>
                    <div class="relative w-full h-160 md:h-[20rem] lg:h-[25rem] xl:h-[30rem] rounded-3xl">
                        <img class="h-full w-full rounded-3xl object-cover" src="/assets/images/technology/desing-scale-nuro-car.png" alt="nuro car passenger-mobility">
                    

                    <button class="group hover:bg-sky-600 flex gap-x-4 justify-between items-center absolute bottom-8 left-6 border border-sky-600 rounded-xl py-2 px-3" style="transition: background 0.5s linear">
                            <span class="text-sky-600 group-hover:text-white" style="font-family: SuisseIntlMono; font-weight: 200;">See the components</span>
                            <svg class="size-[18px] rounded-full border border-sky-600 stroke-sky-600 group-hover:stroke-white group-hover:border-white" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.75C8 2.47386 7.77614 2.25 7.5 2.25C7.22386 2.25 7 2.47386 7 2.75V7H2.75C2.47386 7 2.25 7.22386 2.25 7.5C2.25 7.77614 2.47386 8 2.75 8H7V12.25C7 12.5261 7.22386 12.75 7.5 12.75C7.77614 12.75 8 12.5261 8 12.25V8H12.25C12.5261 8 12.75 7.77614 12.75 7.5C12.75 7.22386 12.5261 7 12.25 7H8V2.75Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
                        </button>
                    </div>

                    <div class="p-6">
                        <p class="text-white text-2xl mt-3" style="font-family: SuisseIntl; font-weight: 200;">The Nuro Driver™</p>
                        
                        <p class="text-neutral-400" style="font-family: SuisseIntl; font-weight: 200;">
                        In-vehicle software and hardware to enable automated driving functionality.
                        </p>
                    </div>

                    <div class="pl-6 pt-2">
                        <a class="bg-white text-black py-2 px-4 rounded-full inline-block hover:text-white hover:bg-sky-700 transition-colors" style="font-family: SuisseIntl; font-weight: 200;" href="/nuro-driver">Learn More</a>
                    </div>
                </aside>

                <aside>
                    <div class="relative w-full h-160 md:h-[20rem] lg:h-[25rem] xl:h-[30rem] rounded-3xl">
                        <img class="h-full w-full rounded-3xl object-cover" src="/assets/images/technology/Nuro-AI-Platform_NuroSensorVehicle.png" alt="nuro car passenger-mobility">
                    
                    <button class="group hover:bg-sky-600 flex gap-x-4 justify-between items-center absolute bottom-8 left-6 border border-sky-600 rounded-xl py-2 px-3" style="transition: background 0.5s linear">
                            <span class="text-sky-600 group-hover:text-white" style="font-family: SuisseIntlMono; font-weight: 200;">See the components</span>
                            <svg class="size-[18px] rounded-full border border-sky-600 stroke-sky-600 group-hover:stroke-white group-hover:border-white" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.75C8 2.47386 7.77614 2.25 7.5 2.25C7.22386 2.25 7 2.47386 7 2.75V7H2.75C2.47386 7 2.25 7.22386 2.25 7.5C2.25 7.77614 2.47386 8 2.75 8H7V12.25C7 12.5261 7.22386 12.75 7.5 12.75C7.77614 12.75 8 12.5261 8 12.25V8H12.25C12.5261 8 12.75 7.77614 12.75 7.5C12.75 7.22386 12.5261 7 12.25 7H8V2.75Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
                    </button>
                    </div>

                    <div class="p-6">
                        <p class="text-white text-2xl mt-3" style="font-family: SuisseIntl; font-weight: 200;">The Nuro AI Platform™</p>
                        
                        <p class="text-neutral-400" style="font-family: SuisseIntl; font-weight: 200;">
                        Industry-leading autonomy developer tools, infrastructure, and remote monitoring.
                        </p>
                    </div>

                    <div class="pl-6 pt-2">
                        <a class="bg-white text-black py-2 px-4 rounded-full inline-block hover:text-white hover:bg-sky-700 transition-colors" style="font-family: SuisseIntl; font-weight: 200;" href="/nuro-ai-platform">Learn More</a>
                    </div>
                </aside>
            
        </article>
    </section>
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