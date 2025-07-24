<?php require 'partials/head.php'?>
<main>
    <section>
        <?php require 'partials/dashboardnav.php' ?>
    </section>

    <section>
        <article class="flex w-full flex-wrap">
            <aside class="w-[30%] md:w-[20%]">
                <?php require 'partials/sidenav.php' ?>
            </aside>

            <aside class="w-[70%] md:w-[80%]">
                <?php require 'partials/content.php'?>
            </aside>
        </article>
    </section>
</main>

<?php require 'partials/footer.php' ?>