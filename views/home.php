<main class="w-[95%] mx-auto mt-0 md:mt-10">
    <!-- Navbar -->
    <section>
        <?php require('partials/navbar.php')?>
    </section>

    <!-- Hero section -->
    <section class="relative h-170 w-full md:h-160 rounded-3xl">
        <video autoplay preload loop muted playsinline class="h-full w-full rounded-3xl object-cover object-[50%_50%]">
            <source src="/assets/videos/home-drive.mp4" type="video/mp4"/>
        </video>

        <section class="">
            <aside class="absolute top-8 left-5 md:top-1/2 md:-translate-y-1/2">
                <h1 class="text-white text-5xl" style="font-family: SuisseIntl; font-weight: 400;">Autonomy for all. <br />All roads, all rides.</h1>
                <p class="text-white text-2xl mt-4" style="font-family: SuisseIntl; font-weight: 200;">Building the most scalable AI driver <br /> for automotive and mobility applications.</p>

                <button class="relative flex cursor-pointer mt-8">
                    <span class="absolute -z-0 inline-flex h-full w-full animate-ping border border-white rounded-full  opacity-75 [animation-delay:2.1s] [animation-duration:3.4s]"></span>
                    <span class="absolute -z-0 inline-flex h-full w-full animate-ping border border-white bg-white rounded-full  opacity-75 [animation-delay:1.6s] [animation-duration:2.4s]"></span>
                    <span class="absolute -z-0 inline-flex h-full w-full animate-ping border border-white bg-white rounded-full  opacity-75 [animation-delay:3.6s] [animation-duration:3.4s]"></span>
                    <svg width="15" height="15" class="border border-white size-6 md:size-12 rounded-full text-white hover:bg-white hover:text-black relative z-10 transition-colors" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 11L6 4L10.5 7.5L6 11Z" fill="currentColor"></path>
                    </svg>
                </button>
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
     <section class="mt-8">
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

</main>