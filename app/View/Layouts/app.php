<!doctype html>
<html lang="en">
<?php include_once __DIR__.'/../Components/head.php' ?>

    <body class="bg-slate-100">
        <?php include_once __DIR__.'/../Components/topNav.php' ?>
        <div class="container mx-auto">
            <div class="flex flex-row justify-center">
                <?php include_once __DIR__.'/../Components/sideNav.php' ?>
                <main class="basis-1/2 border-r">
                    <?php require_once self::$slot?>
                </main>
                <aside class="basis-1/4">
                    <?php include_once __DIR__.'/../Components/sidebar.php' ?>
                </aside>
            </div>
        </div>
        <?php include_once __DIR__.'/../Components/search_modal.php' ?>
        <script src="http://<?= $_SERVER['HTTP_HOST'] ?>/assets/script.js"></script>
    </body>

</html>