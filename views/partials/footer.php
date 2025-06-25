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
        <aside>
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

        <aside>
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

        <aside class="mt-10 md:mt-auto col-span-3">
            <form action="" method="post">
                <label for="footer-submit" style="font-family: SuisseIntl; font-weight: 200;" class="text-white text-xl">
                    Stay connected
                </label>

                <div class="relative mt-4 w-full h-15 border border-neutral-600 rounded-full focus-within:border-white focus-within:bg-neutral-700 transition-[colors] duration-200 ease-in">
                    <input class="w-[80%] h-full border-0 outline-0 text-white text-xl px-4 bg-transparent transition-colors duration-200 ease-in" type="text" name="footer-submit" type="E-mail" id="footer-submit" style="font-family: SuisseIntl; font-weight: 200;">
                    <button class="cursor-pointer absolute transition-colors top-2 right-4 py-2 px-4 bg-white rounded-full hover:bg-sky-800 hover:text-white" type="submit" style="font-family: SuisseIntl; font-weight: 200;">Submit</button>
                </div>

                <p class="text-neutral-700" style="font-family: SuisseIntl; font-weight: 200;">By clicking submit, you acknowledge that you have read and agree to the Nuro <a href="" style="font-family: SuisseIntl; font-weight: 200;">Privacy Policy</a></p>
            </form>
        </aside>
    </section>
</footer>