<main class="w-[95%] mx-auto mt-0 md:mt-10">
    <section>
        <?php require('partials/navbar.php')?>
    </section>

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

</main>