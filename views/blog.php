<?php require 'partials/head.php' ?>
<?php require '../models/faqs.php'?>

<main class="w-[95%] mx-auto mt-0 md:mt-10 mb-16">
    <!-- Navbar -->
    <section>
        <?php require('partials/navbar.php')?>
    </section>

    <!-- Hero section -->
    <section class="relative h-170 w-full md:h-160 rounded-3xl">
        <picture>
                <source media="(min-width: 1024px)" srcset="/assets/images/blog/traffic-lady-large.png"  type="image/png"/>
                <img class="h-full w-full rounded-3xl object-cover object-center" src="/assets/images/blog/traffic-lady-small.png" alt="">
        </picture>

        <section class="">
            <aside class="absolute top-4 left-5 md:top-1/2 md:-translate-y-1/2">
                <h1 class="text-white text-5xl" style="font-family: SuisseIntl; font-weight: 400;">Blogs</h1>

                <p class="text-white  mt-4" style="font-family: SuisseIntlMono; font-weight: 200;">Read Latest Stories
            </p>
            </aside>
        </section>
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

    <!-- FAQs -->
    <section>
        <h1 class="text-4xl mt-10 md:mt-0 mb-10 pl-6" style="font-family: SuisseIntl; font-weight: 500;">FAQs.</h1>

        <section>
            <?php foreach($faq as $data): ?>
                <aside class="relative border-t border-t-neutral-300 mx-10 mt-10">
                    <button class="mt-10 w-[90%] lg:w-[70%] cursor-pointer group">
                        <p class="group-hover:text-sky-500 text-start select-none text-2xl text-neutral-700" style="font-family: SuisseIntl; font-weight: 500;"><?= $data['title']?></p>
                    </button>
                    <div class="hidden mt-5">
                        <p class="text-neutral-600 lg:w-[70%]" style="font-family: SuisseIntl; font-weight: 200;"><?= $data['description']?></p>
                    </div>

                    <button id="faqToggleIndicator" class="cursor-pointer absolute right-0 top-10 w-8 h-6 border border-neutral-800 rounded">
                        <div id="minus" class="absolute left-1/2 top-1/2 h-[2px] w-6 bg-neutral-500 -translate-x-1/2 -translate-y-1/2"></div>
                        <div id="plus" class="absolute left-1/2 top-1/2 h-[2px] w-4 bg-neutral-500 -translate-x-1/2 -translate-y-1/2 rotate-90"></div>
                    </button>

                </aside>
            <?php endforeach; ?>
        </section>
    </section>

    </main>

<?php require('partials/footer.php') ?>