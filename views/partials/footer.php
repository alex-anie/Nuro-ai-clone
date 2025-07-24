<?php 
    $footerLinks = [
        "1" => [ "name" => "Technology", "path" => "/technology"],
        "2" => [ "name" => "Nuro Driver", "path" => "/nuro-driver"],
        "3" => [ "name" => "Nuro AI Platform", "path" => "/nuro-ai-platform"],
        "4" => [ "name" => "Solutions", "path" => "/solutions"],
        "5" => [ "name" => "Company", "path" => "/company"],
        "6" => [ "name" => "Careers", "path" => "/careers"],
        "7" => [ "name" => "Safety", "path" => "/safety"],
        "8" => [ "name" => "Press", "path" => "/press"],
        "9" => [ "name" => "Blog", "path" => "/blog"],
    ];

    $contactLinks = [
        "1" => ["name" => "Contact", "path" => "/contact"],
        "2" => ["name" => "First Responders", "path" => "/first-responders"]
    ];

    $socialLinks = [
        "1" => ["name" => "LinkedIn", "path" => "https://www.linkedin.com/company/nuro-inc."],
        "2" => ["name" => "X", "path" => "https://www.x.com/nuro"],
        "3" => ["name" => "Instagram", "path" => "https://www.instagram.com/nuroteam"],
        "4" => ["name" => "YouTube", "path" => "https://www.youtube.com/c/NuroTeam"],
        "5" => ["name" => "Facebook", "path" => "https://www.facebook.com/c/nurobots"],
    ]
?>

<footer class="bg-neutral-800 w-full">
    <section class="grid grid-cols-3 w-[90%] mx-auto pt-8">
        <aside class="col-span-1">
            <ul class="flex flex-col gap-y-4">
                <?php foreach($footerLinks as $link): ?>
                <li class="w-fit">
                    <a href="<?=$link['path']?>" class="flex items-center gap-x-3 group">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="stroke-white w-0 h-[24px] group-hover:w-[24px] transition-[width] duration-300 ease-linear  lucide lucide-move-right-icon lucide-move-right"><path d="M18 8L22 12L18 16"/><path d="M2 12H22"/></svg>
                        <span style="font-family: SuisseIntl; font-weight: 200;" class="text-white text-xl"><?= $link['name']?></span>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
        </aside>

        <aside class="col-span-1">
            <ul class="flex flex-col gap-y-4">
                <?php foreach($contactLinks as $contact):?>
                <li class="w-fit">
                    <a href="<?= $contact['path']?>" class="flex items-center gap-x-3 group">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="stroke-white w-0 h-[24px] group-hover:w-[24px] transition-[width] duration-300 ease-linear  lucide lucide-move-right-icon lucide-move-right"><path d="M18 8L22 12L18 16"/><path d="M2 12H22"/></svg>
                        <span style="font-family: SuisseIntl; font-weight: 200;" class="text-white text-xl"><?= $contact['name']?></span>
                    </a>
                </li>
                <?php endforeach; ?>

                <li class="w-fit">
                        <span style="font-family: SuisseIntlMono; font-weight: 200;" class="inline-block ml-3 text-neutral-500 text-[14px]" >Follow</span>
                    </a>
                </li>

                <?php foreach($socialLinks as $socials): ?>
                    <li class="w-fit">
                        <a href="<?= $socials['path']?>" target="_blank" class="flex items-center gap-x-3 group">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="stroke-white w-0 h-[24px] group-hover:w-[24px] transition-[width] duration-300 ease-linear  lucide lucide-move-right-icon lucide-move-right"><path d="M18 8L22 12L18 16"/><path d="M2 12H22"/></svg>
                            <span style="font-family: SuisseIntl; font-weight: 200;" class="text-white text-xl"><?= $socials['name'] ?></span>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </aside>

        <aside class="mt-10 md:mt-0 col-span-3 md:col-span-1">
            <form action="/footer-subscriber" method="post">
                <label for="email" style="font-family: SuisseIntl; font-weight: 200;" class="text-white text-xl">
                    Stay connected
                </label>

                <div class="relative mt-4 w-full h-15 border border-neutral-600 rounded-full focus-within:border-white focus-within:bg-neutral-700" style="transition: background 0.2s linear;">
                    <input class="w-[80%] h-full border-0 outline-0 text-white text-xl px-4 bg-transparent transition-colors duration-200 ease-in" placeholder="E-mail" type="text" name="email" id="email" style="font-family: SuisseIntl; font-weight: 200;">
                    <button class="cursor-pointer absolute transition-colors top-2 right-4 py-2 px-4 bg-white rounded-full hover:bg-sky-800 hover:text-white" type="submit" style="font-family: SuisseIntl; font-weight: 200;">Submit</button>
                </div>

                <p class="mt-6 text-neutral-400 hover:text-white" style="font-family: SuisseIntl; font-weight: 200;">By clicking submit, you acknowledge that you have read and agree to the Nuro <a href="/privacy-policy" style="font-family: SuisseIntl; font-weight: 200;" class="text-neutral-400 hover:text-sky-600">Privacy Policy</a></p>
            </form>
        </aside>
    </section>

    <section class="grid grid-cols-6 w-[90%] mx-auto py-8">
        <aside id="navLogo" class="col-span-2 md:mt-20">
           <a href="/">
             <svg enable-background="new 0 0 619 176.8" viewBox="0 0 619 176.8" xmlns="http://www.w3.org/2000/svg" class="fill-white w-20">
                <path d="m84.8.1c-15.4 0-27.5 5.7-38.5 16.7v-12.6h-46.3v168.3h46.3v-99c0-16.2 13.1-29.2 29.2-29.2s29.2 13.1 29.2 29.2v99h46.3v-98c.1-44.5-26.6-74.4-66.2-74.4z"></path>
                <path d="m282.9 4.3v99c0 16.2-13.1 29.2-29.2 29.2-16.2 0-29.2-13.1-29.2-29.2v-99h-46.3v97.1c0 45.8 29.5 75.4 75.1 75.4 44.8 0 76-31 76-75.4v-97.1z"></path>
                <path d="m593.2 25.9c-34.5-34.5-90.4-34.5-124.9 0s-34.5 90.4 0 124.9 90.4 34.5 124.9 0 34.5-90.4 0-124.9zm-27 68.3-29.7 29.7c-10.9 10.9-29.4 11.9-41.4 0-11.4-11.4-11.4-29.9 0-41.4l29.7-29.7c11.4-11.4 29.9-11.4 41.4 0 11.4 11.5 11.4 30 0 41.4z"></path>
                <path d="m434.3.1h-2.1c-44.8 0-76 31-76 75.4v97.1h46.3v-99c0-16.2 13.6-29.2 29.7-29.2h2.1z"></path>
            </svg>
            </a>
        </aside>
        <aside class="col-span-6 mt-10 md:col-span-2 md:mt-0">
            <div class="flex justify-between md:justify-items-start md:gap-x-4">
                <a class="text-white hover:text-sky-600" style="font-family: SuisseIntl; font-weight: 200;" href="/privacy-policy">  Privacy Policy </a>  
            <a class="text-white hover:text-sky-600" href="/terms" style="font-family: SuisseIntl; font-weight: 200;"> • Terms of Use </a> 
            <a class="text-white hover:text-sky-600" href="/legal" style="font-family: SuisseIntl; font-weight: 200;"> •   Legal </a>
            </div>
        </aside>
        <aside class="col-span-2 mt-10 md:mt-20">
            <p class="text-white hover:text-sky-600" style="font-family: SuisseIntl; font-weight: 200;">© 2025 Nuro, Inc.</p>
        </aside>
    </section>
</footer>
</body>

  <script src="/js/create-blog.js"></script>
</html>