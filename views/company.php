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
                <h1 class="text-white text-5xl" style="font-family: SuisseIntl; font-weight: 400;">Company</h1>

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

     <!-- Hero Text -->
    <section class="mt-18">
        <h1 class="text-black text-2xl md:text-5xl" style="font-family: SuisseIntl; font-weight: 400;">Nuro’s journey.</h1>
    </section>

    <!-- Explore company journey Solution Section -->
    <section>
        <article>
            
        </article>
    </section>

     <!-- Key Accomplishment -->
    <section class="mt-18">
        <h1 class="text-black text-2xl md:text-5xl" style="font-family: SuisseIntl; font-weight: 400;">Key Accomplishments.</h1>

        <article class="grid gap-4 grid-cols-1 md:grid-cols-4">
            <aside class="relative h-90 rounded-3xl">
                <img src="/assets/images/home/nuro-series-e-large.jpg" alt="" class="object-cover object-center rounded-3xl h-full">
                <p class="absolute top-6 left-6 text-2xl" style="font-family: SuisseIntl; font-weight: 400;">Nuro Driver™ applied across 7 vehicle platforms</p>
            </aside>

            <aside class="relative bg-blue-800 h-90 rounded-3xl">
                <h1 class="absolute top-4 left-4 text-5xl text-white" style="font-family: SuisseIntlMono; font-weight: 400;">1ST</h1>
                <p  class="absolute bottom-4 left-4 text-white text-2xl" style="font-family: SuisseIntl; font-weight: 400;">AV to receive NHTSA-approved exemption.</p>
            </aside>

            <aside class="relative bg-black h-90 rounded-3xl">
                <h1 class="absolute top-4 left-4 text-5xl text-white" style="font-family: SuisseIntlMono; font-weight: 400;">4+</h1>
                <p  class="absolute bottom-4 left-4 text-white text-2xl" style="font-family: SuisseIntl; font-weight: 400;">Years of L4 autonomous driving on public roads.</p>
            </aside>

            <aside class="relative bg-amber-100 h-90 rounded-3xl">
                <h1 class="absolute top-4 left-4 text-5xl text-black" style="font-family: SuisseIntlMono; font-weight: 400;">1M+</h1>
                <p  class="absolute bottom-4 left-4 text-black text-2xl" style="font-family: SuisseIntl; font-weight: 400;">Autonomous miles driven with zero at-fault incidents.</p>
            </aside>
        </article>
    </section>

    <!-- Safety at every turn section -->
     <section class="mt-8">
        <aside class="relative w-full rounded-3xl h-180">
            <picture>
                <source media="(min-width: 1024px)" srcset="/assets/images/company/sitting-on-a-desk-two.png"  type="image/png"/>

                <img class="h-full w-full rounded-3xl object-cover object-center" src="/assets/images/company/sitting-on-a-desk.png" alt="">
            </picture>
            
            <div class="absolute bottom-6 left-4 bg-gray-700/25 backdrop-blur-3xl rounded-3xl p-6 w-[90%] lg:w-[60%]">
                <p class="text-white text-xl md:text-2xl" style="font-family: SuisseIntl; font-weight: 200;">Nuro’s vision for an autonomous future.</p>
                <div class="lg:mt-2 lg:flex justify-between">
                    <p class="text-white text-[12px]" style="font-family: SuisseIntlMono; font-weight: 200;">Founder's roundable.</p>
                    <p class="text-neutral-400 text-[10px] hidden lg:block" style="font-family: SuisseIntlMono; font-weight: 200;">01:44</p>
                </div>

                <button class="relative lg:absolute flex cursor-pointer mt-2 lg:top-2 lg:right-4">
                    <svg width="15" height="15" class="border border-white size-6 rounded-full text-white hover:bg-white hover:text-black relative z-10 transition-colors" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 11L6 4L10.5 7.5L6 11Z" fill="currentColor"></path>
                    </svg>
                </button>
            </div>
        </aside>
    </section>

    <!-- Building a better tomorrow -->
    <section class="mt-10 flex flex-col-reverse lg:flex-row flex-wrap w-full items-center">
        <aside class="lg:w-[50%]">
            <h1 class="text-2xl md:text-4xl px-6" style="font-family: SuisseIntl; font-weight: 300;">Building a better tomorrow.</h1>
            <p class="text-[12px] text-sky-950 my-4 px-6" style="font-family: SuisseIntlMono; font-weight: 200;">Vision</p>
            <p class="text-neutral-700 px-6" style="font-family: SuisseIntl; font-weight: 200;">At Nuro, we are committed to a future where robotics positively impacts everyday life. Our work in autonomous driving technology is just the foundation of a broader initiative to extend the benefits of robotics to a wider range of applications in the physical world. By leveraging the AI infrastructure and advanced tooling we are developing, we aim to unlock new possibilities for robotics across various physical domains—a concept we call Artificial General Robotics (AGR). While our first application focuses on delivering safe, reliable, and scalable autonomous driving solutions, we see a future where AGR could enhance everyday living, from smart home robots to more efficient urban mobility systems, further transforming how people live, move, and interact with autonomous technology.</p>
        </aside>

        <aside class="w-full lg:w-[50%] rounded-3xl h-auto mb-6">
            <img class="rounded-3xl" src="/assets/images/company/blond-woman.png" alt="">
        </aside>
    </section>

    <!-- Our founders -->
    <section class="mt-18">
        <h1 
        class="text-black text-2xl lg:text-4xl w-full md:w-[60%]"
        style="
        font-family: SuisseIntl;
        font-weight: 500;
        ">
            Our founders.
        </h1>

        <section>
            <article class="grid lg:grid-cols-2 gap-8 lg:gap-y-0 mt-12 md:w-full">
                <aside>
                    <div class="relative w-full h-160 md:h-[20rem] lg:h-[25rem] xl:h-[30rem] rounded-3xl">
                        <img class="h-full w-full rounded-3xl object-cover" src="/assets/images/company/Jiajun-Zhu.png" alt="nuro car passenger-mobility">

                        <a href="https://www.linkedin.com/in/jiajun/" class="group hover:bg-sky-600 flex gap-x-4 justify-between items-center absolute bottom-8 left-6 border border-sky-600 rounded-xl py-2 px-3" style="transition: background 0.5s linear">
                            <span class="text-sky-600 group-hover:text-white" style="font-family: SuisseIntlMono; font-weight: 200;">Follow on Linkedin</span>
                            <svg class="size-[18px] rounded-full border border-sky-600 stroke-sky-600 group-hover:stroke-white group-hover:border-white" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.75C8 2.47386 7.77614 2.25 7.5 2.25C7.22386 2.25 7 2.47386 7 2.75V7H2.75C2.47386 7 2.25 7.22386 2.25 7.5C2.25 7.77614 2.47386 8 2.75 8H7V12.25C7 12.5261 7.22386 12.75 7.5 12.75C7.77614 12.75 8 12.5261 8 12.25V8H12.25C12.5261 8 12.75 7.77614 12.75 7.5C12.75 7.22386 12.5261 7 12.25 7H8V2.75Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
                        </a>
                    </div>

                    <div class="p-6">
                        <p class="text-2xl mt-3" style="font-family: SuisseIntl; font-weight: 200;">Jiajun Zhu</p>

                        <p class="text-blue-800 text-[12px] my-3" style="font-family: SuisseIntl; font-weight: 200;">Co-Founder and CEO</p>
                        
                        <p class="text-neutral-400" style="font-family: SuisseIntl; font-weight: 200;">
                        Prior to founding Nuro, Jiajun was a principal software engineer at Google and one of the founding team members of the company’s self-driving program—now known as Waymo. In addition to leading the project’s perception team, he also helped build and lead their simulation efforts. Jiajun earned his Master’s and Bachelor’s degree in computer science from the University of Virginia and Fudan University respectively. Jiajun has been awarded over 100 patents.
                        </p>
                    </div>
                </aside>

                <aside>
                    <div class="relative w-full h-160 md:h-[20rem] lg:h-[25rem] xl:h-[30rem] rounded-3xl">
                        <img class="h-full w-full rounded-3xl object-cover" src="/assets/images/company/dave-ferguson.png" alt="nuro car passenger-mobility">
                    
                    <a href="https://www.linkedin.com/in/dave-ferguson" class="group hover:bg-sky-600 flex gap-x-4 justify-between items-center absolute bottom-8 left-6 border border-sky-600 rounded-xl py-2 px-3" style="transition: background 0.5s linear">
                            <span class="text-sky-600 group-hover:text-white" style="font-family: SuisseIntlMono; font-weight: 200;">Follow on Linkedin</span>
                            <svg class="size-[18px] rounded-full border border-sky-600 stroke-sky-600 group-hover:stroke-white group-hover:border-white" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 2.75C8 2.47386 7.77614 2.25 7.5 2.25C7.22386 2.25 7 2.47386 7 2.75V7H2.75C2.47386 7 2.25 7.22386 2.25 7.5C2.25 7.77614 2.47386 8 2.75 8H7V12.25C7 12.5261 7.22386 12.75 7.5 12.75C7.77614 12.75 8 12.5261 8 12.25V8H12.25C12.5261 8 12.75 7.77614 12.75 7.5C12.75 7.22386 12.5261 7 12.25 7H8V2.75Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
                        </a>
                    </div>

                    <div class="p-6">
                        <p class="text-2xl mt-3" style="font-family: SuisseIntl; font-weight: 200;">Dave Ferguson</p>

                        <p class="text-blue-800 text-[12px] my-3" style="font-family: SuisseIntl; font-weight: 200;">Co-Founder and President</p>
                        
                        <p class="text-neutral-400" style="font-family: SuisseIntl; font-weight: 200;">
                       Prior to founding Nuro, Dave was a principal engineer on Google’s self-driving program, now known as Waymo. He built and led the computer vision, machine learning, behavior prediction, and scene understanding teams. He also led the planning group for Carnegie Mellon University's team that won the DARPA Urban Grand Challenge in 2007. Dave holds an MS and PhD in Robotics from Carnegie Mellon and a Bachelor’s in CS and Mathematics from the University of Otago. Dave holds over 100 patents and has published over 60 academic papers.
                        </p>
                    </div>
                    </div>
                </aside>
            
        </article>
    </section>
    </section>

    <!-- Company leadership. -->
    <section class="mt-18">
        <h1 
        class="text-black text-2xl lg:text-4xl w-full md:w-[60%]"
        style="
        font-family: SuisseIntl;
        font-weight: 500;
        ">
            Company leadership.
        </h1>

        <section>
            <article class="grid md:grid-cols-3 lg:grid-cols-5 gap-8 lg:gap-y-0 mt-12 md:w-full">
                <aside>
                    <div class="relative w-full h-160 md:h-[20rem] lg:h-[25rem] xl:h-[30rem] rounded-3xl">
                        <img class="h-full w-full rounded-3xl object-cover" src="/assets/images/company/andrew-chapin.png" alt="nuro car passenger-mobility">
                    </div>

                    <div class="p-6">
                        <p class="text-2xl mt-3" style="font-family: SuisseIntl; font-weight: 200;">Andrew Chapin</p>
                        <p class="text-blue-800 text-[12px] my-3" style="font-family: SuisseIntl; font-weight: 200;">Chief Operating Officer</p>
                        
                    </div>
                </aside>

                <aside>
                    <div class="relative w-full h-160 md:h-[20rem] lg:h-[25rem] xl:h-[30rem] rounded-3xl">
                        <img class="h-full w-full rounded-3xl object-cover" src="/assets/images/company/james-owen.png" alt="nuro car passenger-mobility">
                    </div>

                    <div class="p-6">
                        <p class="text-2xl mt-3" style="font-family: SuisseIntl; font-weight: 200;">James Owen</p>
                        <p class="text-blue-800 text-[12px] my-3" style="font-family: SuisseIntl; font-weight: 200;">Chief Legal Officer</p>
                        
                    </div>
                </aside>

                <aside>
                    <div class="relative w-full h-160 md:h-[20rem] lg:h-[25rem] xl:h-[30rem] rounded-3xl">
                        <img class="h-full w-full rounded-3xl object-cover" src="/assets/images/company/jack-guo.png" alt="nuro car passenger-mobility">
                    </div>

                    <div class="p-6">
                        <p class="text-2xl mt-3" style="font-family: SuisseIntl; font-weight: 200;">Jack Guo</p>
                        <p class="text-blue-800 text-[12px] my-3" style="font-family: SuisseIntl; font-weight: 200;">VP of Engineer, AI Platform</p>
                    </div>
                </aside>

                <aside>
                    <div class="relative w-full h-160 md:h-[20rem] lg:h-[25rem] xl:h-[30rem] rounded-3xl">
                        <img class="h-full w-full rounded-3xl object-cover" src="/assets/images/company/Tilo-Schwarz.png" alt="nuro car passenger-mobility">
                    </div>

                    <div class="p-6">
                        <p class="text-2xl mt-3" style="font-family: SuisseIntl; font-weight: 200;">Tilo Schwarz</p>
                        <p class="text-blue-800 text-[12px] my-3" style="font-family: SuisseIntl; font-weight: 200;">VP of Engineer, Vehicle Platform & Hardwars</p>
                    </div>
                </aside>

                <aside>
                    <div class="relative w-full h-160 md:h-[20rem] lg:h-[25rem] xl:h-[30rem] rounded-3xl">
                        <img class="h-full w-full rounded-3xl object-cover" src="/assets/images/company/matt-renna.png" alt="nuro car passenger-mobility">
                    </div>

                    <div class="p-6">
                        <p class="text-2xl mt-3" style="font-family: SuisseIntl; font-weight: 200;">Matt Renna</p>
                        <p class="text-blue-800 text-[12px] my-3" style="font-family: SuisseIntl; font-weight: 200;">VP of Engineer, Vehicle Platform & Hardwars</p>
                    </div>
                </aside>
            
        </article>
    </section>
    </section>

    <!-- 8 years of autonomy innovation. section -->
    <section class="mt-18">
        <aside class="relative w-full rounded-3xl h-180 md:h-100">
            <picture>
                <source media="(min-width: 1024px)" srcset="/assets/images/home/nuro-series-e-large.jpg"  type="image/png"/>
                <img class="h-full w-full rounded-3xl object-cover object-top" src="/assets/images/home/nuro-series-e-small.png" alt="">
            </picture>
            
            <div class="absolute left-5 bottom-5 md:left-10 md:bottom-auto md:top-12 md:w-150">
                <p class="text-black text-4xl md:text-5xl mb-4" style="font-family: SuisseIntl; font-weight: 500;">8 years of autonomy innovation.</p>
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