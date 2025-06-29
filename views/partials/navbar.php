<nav class="">
    <section class="flex flex-row-reverse md:flex-row justify-between items-center h-20 bg-transparent md:ml-8 md:mt-8 md:absolute z-10 md:w-[90%]">
        <section class="flex gap-x-12 items-center ">
            <aside id="navMenu" class="flex flex-col gap-y-1 p-4 bg-black md:bg-white size-10 justify-center items-center rounded-2xl cursor-pointer">
                <div class="h-[0.5px] w-[18px] bg-white md:bg-black"></div>
                <div class="h-[0.5px] w-[18px] bg-white md:bg-black"></div>
            </aside>

            <aside id="navLinks" class="hidden md:block">
                <ul class="flex gap-x-8">
                    <li>
                        <a href="/technology" class="<?= ($_SERVER["REQUEST_URI"] === '/technology' ? '':'')?>md:text-white" style="font-family: SuisseIntl; font-weight: 300;">Technology</a>
                    </li>
                    <li>
                        <a href="/solution" class="md:text-white" style="font-family: SuisseIntl; font-weight: 300;">Solution</a>
                    </li>
                    <li>
                        <a href="/company" class="md:text-white" style="font-family: SuisseIntl; font-weight: 300;">Company</a>
                    </li>
                    <li>
                        <a href="/blog" class="md:text-white" style="font-family: SuisseIntl; font-weight: 300;">Blog</a>
                    </li>
                    <li>
                        <a href="/dashboard" class="md:text-white" style="font-family: SuisseIntl; font-weight: 300;">Dashboard</a>
                    </li>
                </ul>
            </aside>
        </section>

        <aside id="navLogo">
           <a href="/">
             <svg enable-background="new 0 0 619 176.8" viewBox="0 0 619 176.8" xmlns="http://www.w3.org/2000/svg" class="fill-black md:fill-white w-20">
                <path d="m84.8.1c-15.4 0-27.5 5.7-38.5 16.7v-12.6h-46.3v168.3h46.3v-99c0-16.2 13.1-29.2 29.2-29.2s29.2 13.1 29.2 29.2v99h46.3v-98c.1-44.5-26.6-74.4-66.2-74.4z"></path>
                <path d="m282.9 4.3v99c0 16.2-13.1 29.2-29.2 29.2-16.2 0-29.2-13.1-29.2-29.2v-99h-46.3v97.1c0 45.8 29.5 75.4 75.1 75.4 44.8 0 76-31 76-75.4v-97.1z"></path>
                <path d="m593.2 25.9c-34.5-34.5-90.4-34.5-124.9 0s-34.5 90.4 0 124.9 90.4 34.5 124.9 0 34.5-90.4 0-124.9zm-27 68.3-29.7 29.7c-10.9 10.9-29.4 11.9-41.4 0-11.4-11.4-11.4-29.9 0-41.4l29.7-29.7c11.4-11.4 29.9-11.4 41.4 0 11.4 11.5 11.4 30 0 41.4z"></path>
                <path d="m434.3.1h-2.1c-44.8 0-76 31-76 75.4v97.1h46.3v-99c0-16.2 13.6-29.2 29.7-29.2h2.1z"></path>
            </svg>
           </a>
        </aside>

        <section class="hidden">
            <div id="overlay"></div>
            <aside id="navMenuLinks">

            </aside>
        </section>
    </section>
</nav>