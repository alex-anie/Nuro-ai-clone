<?php require_once '../controllers/create-blog.php' ?>

<main class="bg-neutral-50 px-10 pt-20">
    <section>
        <form action="/dashboard/blogs" method="post">
            <aside class="relative w-full flex justify-center items-center">
                <div class="w-full h-30 rounded-2xl mb-10">
                    <img class="size-full rounded-2xl object-center object-cover" src="/assets/images/technology/contact-nuro-dark-large.png" alt="">
                </div>
    
                <label class="absolute flex items-center gap-x-2 w-fit cursor-pointer hover:bg-sky-500 bg-sky-800 rounded-xl py-2 px-4" for="avatar">
                    <svg class="size-[15px] text-white" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.5 1H12.5C13.3284 1 14 1.67157 14 2.5V12.5C14 13.3284 13.3284 14 12.5 14H2.5C1.67157 14 1 13.3284 1 12.5V2.5C1 1.67157 1.67157 1 2.5 1ZM2.5 2C2.22386 2 2 2.22386 2 2.5V8.3636L3.6818 6.6818C3.76809 6.59551 3.88572 6.54797 4.00774 6.55007C4.12975 6.55216 4.24568 6.60372 4.32895 6.69293L7.87355 10.4901L10.6818 7.6818C10.8575 7.50607 11.1425 7.50607 11.3182 7.6818L13 9.3636V2.5C13 2.22386 12.7761 2 12.5 2H2.5ZM2 12.5V9.6364L3.98887 7.64753L7.5311 11.4421L8.94113 13H2.5C2.22386 13 2 12.7761 2 12.5ZM12.5 13H10.155L8.48336 11.153L11 8.6364L13 10.6364V12.5C13 12.7761 12.7761 13 12.5 13ZM6.64922 5.5C6.64922 5.03013 7.03013 4.64922 7.5 4.64922C7.96987 4.64922 8.35078 5.03013 8.35078 5.5C8.35078 5.96987 7.96987 6.35078 7.5 6.35078C7.03013 6.35078 6.64922 5.96987 6.64922 5.5ZM7.5 3.74922C6.53307 3.74922 5.74922 4.53307 5.74922 5.5C5.74922 6.46693 6.53307 7.25078 7.5 7.25078C8.46693 7.25078 9.25078 6.46693 9.25078 5.5C9.25078 4.53307 8.46693 3.74922 7.5 3.74922Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
                    <span class="text-white" style="font-family: SuisseIntl; font-weight: 200;">Upload an image</span>
                    <input class="w-0 invisible" type="file"  id="avatar" required name="avatar" accept="image/png, image/jpeg">
                </label>
            </aside>
            <?= $title ?>
            <?= $content ?>
            <?= $avatar ?>

            <aside class="w-full flex flex-col gap-y-6">
                <input class="border outline-0 border-neutral-500 h-15 rounded-2xl px-4 text-xl text-neutral-600 focus:border focus:border-sky-500" type="text" required name="title" placeholder="Blog Title..."  value="<?= $title?>" style="font-family: SuisseIntl; font-weight: 200;"> 
                <textarea class="pt-3 border outline-0 border-neutral-500 rounded-2xl px-4 text-xl text-neutral-600 focus:border focus:border-sky-500" required name="content" rows="10" cols="33" placeholder="create a blog post..." style="font-family: SuisseIntl; font-weight: 200;"><?= $content ?></textarea>
                <button class="cursor-pointer self-end hover:bg-sky-500 bg-sky-800 text-white py-2 px-4 rounded-2xl" style="font-family: SuisseIntl; font-weight: 200;">Submit</button>
            </aside>
        </form>
    </section>
</main>