<main class="w-[95%] mx-auto mt-0 md:mt-10">
    <!-- Navbar -->
    <section>
        <?php require('partials/navbar.php')?>
    </section>

    <!-- Hero section -->
    <section class="relative h-170 w-full md:h-160 rounded-3xl">
         <picture>
                <source media="(min-width: 1024px)" srcset="/assets/images/company/company-girl-large.png"  type="image/png"/>

                <img class="h-full w-full rounded-3xl object-cover object-center" src="/assets/images/company/company-girl-small.png" alt="">
            </picture>

        <section class="">
            <aside class="absolute top-4 left-5 md:top-1/2 md:-translate-y-1/2">
                <h1 class="text-white text-5xl" style="font-family: SuisseIntl; font-weight: 400;">Company </h1>

                <p class="text-white  mt-4" style="font-family: SuisseIntlMono; font-weight: 200;">Nuro’s Mountain View Headquarters
            </p>
        </aside>
        </section>
    </section>

    <!-- Hero Text -->
    <section class="mt-18 md:flex justify-center items-center md:gap-x-8">
       <h1 class="text-black text-2xl md:text-5xl" style="font-family: SuisseIntl; font-weight: 400;">We exist to better <br />everyday life through robotics.</h1>
         <p class="text-black md:text-2xl md:w-[40%] mt-4" style="font-family: SuisseIntl; font-weight: 200;">We’re transforming everyday life by bringing the power of AI into the physical world with our fully autonomous Nuro Driver™. Through partnerships with auto and mobility companies, we’re revolutionizing personal vehicles, ride-hailing services, and commercial fleets to create safer streets, reduce emissions, and give people more time for what matters most.
            </p>
    </section>

    <!-- Explore Solution Section -->
    <section>
        <article class="grid md:grid-cols-2 lg:grid-cols-3 gap-y-8 md:gap-x-8 lg:gap-y-0 mt-12 md:w-full">
            <aside class="relative w-full h-160 md:h-[20rem] lg:h-[25rem] xl:h-[30rem] rounded-3xl">
                <p class="absolute top-8 left-4 text-white text-2xl" style="font-family: SuisseIntl; font-weight: 200;">Passenger Mobility.</p>
                
                <p class="absolute top-18 left-4 text-white text-[0.7em]" style="font-family: SuisseIntlMono; font-weight: 200;">Mobility Services</p>
                <img class="h-full w-full rounded-3xl object-cover" src="/assets/images/home/passenger-mobility.png" alt="nuro car passenger-mobility">
            </aside>

             <aside class="relative w-full rounded-3xl h-160 md:h-[20rem] lg:h-[25rem] xl:h-[30rem]">
                <p class="absolute top-8 left-4 text-white text-2xl" style="font-family: SuisseIntl; font-weight: 200;">Personally Owned Vehicles</p>
                
                <p class="absolute top-18 left-4 text-white text-[0.7em]" style="font-family: SuisseIntlMono; font-weight: 200;">Automotive</p>
                
                <img class="h-full w-full rounded-3xl object-cover" src="/assets/images/home/personally-owned.png" alt="">
            </aside>
            
             <aside class="relative w-full rounded-3xl h-160 md:h-[20rem] lg:h-[25rem] xl:h-[30rem]">
                <p class="absolute top-8 left-4 text-white text-2xl" style="font-family: SuisseIntl; font-weight: 200;">Logistics</p>
                <p class="absolute top-18 left-4 text-white text-[0.7em]" style="font-family: SuisseIntlMono; font-weight: 200;">Mobility Services</p>
                
                <img class="h-full w-full rounded-3xl object-cover" src="/assets/images/home/logistics.png" alt="">
            </aside>
        </article>

        <article class="md:grid md:grid-cols-5">
            <aside class="col-span-3">
                <p class="text-3xl lg:text-4xl p-4" style="font-family: SuisseIntl; font-weight: 500;">Autonomy for mobility applications.</p>
            </aside>

            <aside class="col-span-2 p-4">
                <p class="text-xl" style="font-family: SuisseIntl; font-weight: 200;">Nuro offers automotive companies and mobility platforms the opportunity to integrate our world-class autonomous technology—Nuro Driver™ Assist Level 2++ and Nuro Driver™ Level 4—across various vehicle applications.</p>
                <a class="bg-neutral-900 text-white py-2 px-4 rounded-full inline-block mt-6 hover:bg-sky-700 transition-colors" href="/solutions" style="font-family: SuisseIntl; font-weight: 200;">Explore Solutions</a>
            </aside>
        </article>
    </section>

    <!-- Safety at every turn section -->
     <section class="mt-8">
        <aside class="relative w-full rounded-3xl h-180">
            <picture>
                <source media="(min-width: 1024px)" srcset="/assets/images/home/safety-man-large.png"  type="image/png"/>

                <img class="h-full w-full rounded-3xl object-cover object-center" src="/assets/images/home/safety-man-small.png" alt="">
            </picture>
            
            <div class="absolute left-5 bottom-5 md:left-10 md:bottom-auto md:top-12 md:w-150">
                <p class="text-white text-4xl md:text-5xl mb-4" style="font-family: SuisseIntl; font-weight: 500;">Safety at every turn.</p>
                <p class="text-white" style="font-family: SuisseIntl; font-weight: 200;">Safety underpins every part of our company, from hardware and software to testing, systems engineering, and operations.</p>
                <a class="bg-white text-black py-2 px-4 rounded-full inline-block mt-6 hover:text-white hover:bg-sky-700 transition-colors" style="font-family: SuisseIntl; font-weight: 200;" href="/safety">View Safety</a>
            </div>
        </aside>
     </section>

     <!-- 8 years of autonomy innovation. section -->
     <section class="mt-18">
        <aside class="relative w-full rounded-3xl h-180 md:h-100">
            <picture>
                <source media="(min-width: 1024px)" srcset="/assets/images/home/nuro-series-e-large.jpg"  type="image/png"/>

                <img class="h-full w-full rounded-3xl object-cover object-top" src="/assets/images/home/nuro-series-e-small.png" alt="">
            </picture>
            
            <div class="absolute left-5 bottom-5 md:left-10 md:bottom-auto md:top-12 md:w-150">
                <p class="text-black text-4xl md:text-5xl mb-4" style="font-family: SuisseIntl; font-weight: 500;">8 years of
autonomy innovation.</p>
                <p class="text-black" style="font-family: SuisseIntl; font-weight: 200;">The Nuro Driver™ has been deployed across seven vehicle platforms. We’ve refined our system on the road, using our fleet and partner platforms, such as passenger vehicles and long-haul trucks. This expertise is propelling us toward an even more innovative future, where our technology will transform the way goods and people move.</p>
                <a class="bg-neutral-900 text-white py-2 px-4 rounded-full inline-block mt-6 hover:text-white hover:bg-sky-700 transition-colors" style="font-family: SuisseIntl; font-weight: 200;" href="/company">About Nuro</a>
            </div>
        </aside>
     </section>

      <!-- Bring your vehicles up to speed. section -->
     <section class="mt-18">
        <aside class="relative w-full rounded-3xl h-180 md:h-100">
            <picture>
                <source media="(min-width: 1024px)" srcset="/assets/images/home/contact-nuro-large.png"  type="image/png"/>

                <img class="h-full w-full rounded-3xl object-cover object-center" src="/assets/images/home/contact-nuro-small.png" alt="">
            </picture>
            
            <div class="absolute left-5 bottom-5 md:left-10 md:bottom-auto md:top-12 w-[70%] md:w-150">
                <p class="text-white text-4xl md:text-5xl mb-4" style="font-family: SuisseIntl; font-weight: 500;">Bring your vehicles up to speed.</p>
                <p class="text-white" style="font-family: SuisseIntl; font-weight: 200;">Empower your fleet with AI-first autonomous capabilities.</p>
                <a class="bg-white text-black py-2 px-4 rounded-full inline-block mt-6 hover:text-white hover:bg-sky-700 transition-colors" style="font-family: SuisseIntl; font-weight: 200;" href="/contact">Contact Nuro</a>
            </div>
        </aside>
    </section>

    <!-- Latest at Nuro. -->
    <section class="mt-18 hidden md:block">
        <h1 class="text-4xl mb-10 pl-6" style="font-family: SuisseIntlMono; font-weight: 500;">Latest at Nuro.</h1>

        <article class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            <aside class="w-70 group transition-transform duration-200 ease">
                <div class="size-70 rounded-3xl mb-2 overflow-hidden">
                    <img class="w-full h-full rounded-3xl object-cover object-top-left transition-transform duration-200 ease group-hover:scale-[1.09]" src="/assets/images/home/nuro-series-e-large.jpg" alt="">
                </div>
                <div class="p-4">
                    <span class="flex gap-x-4 justify-start items-center mb-2">
                        <a href="" class="inline-block border py-2 px-4 rounded-full text-[10px]" style="font-family: SuisseIntlMono; font-weight: 200;">TechCrunch</a>
                        <span class="text-[10px]" style="font-family: SuisseIntlMono; font-weight: 500;">04.09.2025</span>
                    </span>

                    <span>
                        <p class="text-xl" style="font-family: SuisseIntl; font-weight: 200;">Nuro’s $106M raise backs its shift from delivery robots to licensing autonomy tech</p>
                    </span>
                </div>
            </aside>

            <aside class="w-70 group transition-transform duration-200 ease">
                <div class="size-70 rounded-3xl mb-2 overflow-hidden">
                    <img 
                        class="w-full h-full rounded-3xl object-cover object-top-left transition-transform duration-200 ease group-hover:scale-[1.09]" 
                        src="/assets/images/home/nuro-taxi-palm-tree.png" 
                        alt=""
                        >
                </div>
                <div class="p-4">
                    <span class="flex gap-x-4 justify-start items-center mb-4">
                        <a href="" class="inline-block border py-2 px-4 rounded-full text-[10px]" style="font-family: SuisseIntlMono; font-weight: 200;">Blog</a>
                        <span class="text-[10px]" style="font-family: SuisseIntlMono; font-weight: 500;">05.22.2025</span>
                        <span class="text-[10px]" style="font-family: SuisseIntlMono; font-weight: 500;">6 min. read</span>
                    </span>

                    <span>
                        <p class="text-xl" style="font-family: SuisseIntl; font-weight: 200;">Paving the Way for Autonomy in Dallas, Miami, and San Diego</p>
                    </span>
                </div>
            </aside>

            <aside class="w-70 group transition-transform duration-200 ease">
                <div class="size-70 rounded-3xl mb-2 overflow-hidden">
                    <img 
                        class="w-full h-full rounded-3xl object-cover object-top-left transition-transform duration-200 ease group-hover:scale-[1.09]" 
                        src="/assets/images/home/nuro-taxi-cs-palace.png" 
                        alt=""
                        >
                </div>
                <div class="p-4">
                    <span class="flex gap-x-4 justify-start items-center mb-4">
                        <a href="" class="inline-block border py-2 px-4 rounded-full text-[10px]" style="font-family: SuisseIntlMono; font-weight: 200;">Blog</a>
                        <span class="text-[10px]" style="font-family: SuisseIntlMono; font-weight: 500;">05.07.2025</span>
                        <span class="text-[10px]" style="font-family: SuisseIntlMono; font-weight: 500;">6 min. read</span>
                    </span>

                    <span>
                        <p class="text-xl" style="font-family: SuisseIntl; font-weight: 200;">Driverless Insights Under Neon Lights: Testing in Las Vegas to Power Future Partner Deployments</p>
                    </span>
                </div>
            </aside>

            <aside class="w-70 group transition-transform duration-200 ease">
                <div class="size-70 rounded-3xl mb-2 overflow-hidden">
                    <img
                        class="w-full h-full rounded-3xl object-cover object-top-left transition-[transform] duration-500 ease group-hover:scale-[1.09]" 
                        src="/assets/images/home/nuro-japan.png" 
                        alt=""
                        >
                </div>
                <div class="p-4">
                    <span class="flex gap-x-4 justify-start items-center mb-4">
                        <a href="" class="inline-block border py-2 px-4 rounded-full text-[10px]" style="font-family: SuisseIntlMono; font-weight: 200;">Blog</a>
                        <span class="text-[10px]" style="font-family: SuisseIntlMono; font-weight: 500;">04.15.2025</span>
                        <span class="text-[10px]" style="font-family: SuisseIntlMono; font-weight: 500;">2 min. read</span>
                    </span>

                    <span>
                        <p class="text-xl" style="font-family: SuisseIntl; font-weight: 200;">Going Global: Nuro is Heading to Japan</p>
                    </span>
                </div>
            </aside>
        </article>
    </section>

    <!-- Explore more. -->
     <section class="mt-18">
        <h1 class="text-4xl mb-10 pl-6" style="font-family: SuisseIntl; font-weight: 500;">Explore more.</h1>

        <article class="grid gap-5  grid-cols-8">
            <aside class="w-full h-auto bg-amber-200 rounded-3xl p-4 col-span-8 lg:col-span-2">
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
                    <a class="bg-neutral-900 text-white py-2 px-4 rounded-full inline-block mt-6 hover:bg-sky-700 transition-colors" href="" style="font-family: SuisseIntl; font-weight: 200;">View All</a>
                </div>
            </aside>

            <aside class="relative w-full h-auto rounded-3xl col-span-8 lg:col-span-4">
                <img class="w-full h-full rounded-3xl object-cover object-center" src="/assets/images/home/lady-with-sweater.png" alt="">
                <div class="absolute top-6 left-5">
                    <h1 class="w-[60%] text-white text-2xl md:text-4xl [font-family:SuisseIntl] [font-weight:500]">Driving the future of autonomy</h1>
                    <p class="mt-4 text-white [font-family:SuisseIntlMono] [font-weight:200]">company</p>
                </div>

                <div class="absolute left-5 bottom-5">
                    <a href="" class="bg-white text-black py-2 px-4 rounded-full inline-block hover:bg-sky-700 transition-colors" href="" style="font-family: SuisseIntl; font-weight: 200;">About Nuro</a>
                </div>
            </aside>

            <aside class="relative rounded-3xl w-full bg-neutral-400 h-100 lg:h-auto p-6 col-span-4 lg:col-span-2">
                <h1 class="text-xl md:text-3xl" style="font-family: SuisseIntl; font-weight: 200;">Learn about LAMBDA, Nuro’s Multimodal Large Language Model (MLLM) that performs question answering as part of the onboard autonomy stack.</h1>
                <p class="mt-6 text-sky-800" style="font-family: SuisseIntlMono; font-weight: 200;">AI Research @ Nuro</p>
                <div class="absolute left-5 bottom-5">
                    <a href="" class="bg-black text-white py-2 px-4 rounded-full inline-block hover:bg-sky-700 transition-colors" href="" style="font-family: SuisseIntl; font-weight: 200;">Read Blog</a>
                </div>
            </aside>

            <aside class="relative rounded-3xl w-full bg-black h-100 lg:h-auto p-6 col-span-4 lg:col-span-2">
                <h1 class="text-white text-6xl md:text-7xl lg:text-8xl" style="font-family: SuisseIntlMono; font-weight: 200;">1M+</h1>
                <p class="mt-6 text-sky-800" style="font-family: SuisseIntl; font-weight: 200;">Safety</p>

                <div class="absolute left-5 bottom-5">
                    <p class="w-[90%] text-xl md:text-3xl text-white " href="" style="font-family: SuisseIntl; font-weight: 200;">Autonomous miles driven with zero at-fault incidents.</p>
                </div>
            </aside>

             <aside class="w-full bg-neutral-400 rounded-3xl p-5 col-span-8 lg:col-span-2">
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

<section class="mt-18">
    <?php require('partials/footer.php') ?>
</section>