<!doctype html>
<html lang="en">
<?php include_once __DIR__.'/../Components/head.php' ?>

    <body class="bg-slate-100">
        <?php include_once __DIR__.'/../Components/topNav.php' ?>
        <div class="container mx-auto">
            <div class="flex flex-row flex-wrap justify-center">
                <nav class="sticky top-16 md:top-24 md:basis-1/5 basis-1 p-5">
                    <?php include_once __DIR__.'/../Components/sideNav.php' ?>
                </nav>

                <main class="md:basis-1/2 border-x">
                    <?php require_once self::$slot?>
                </main>
                <aside class="basis-1/4 md:block hidden">
                    <?php include_once __DIR__.'/../Components/sidebar.php' ?>
                </aside>
            </div>
        </div>
        <?php include_once __DIR__.'/../Components/search_modal.php' ?>
        <script src="/assets/script.js"></script>
    </body>

</html>