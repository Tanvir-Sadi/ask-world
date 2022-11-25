<!doctype html>
<html lang="en">
    <?php include_once __DIR__.'/../Components/head.php' ?>
<body>
    <?php include_once __DIR__.'/../Components/topNav.php' ?>
    <div class="container">
        <div class="row">
            <?php include_once __DIR__.'/../Components/sideNav.php' ?>
            <?php require_once self::$slot?>
            <?php include_once __DIR__.'/../Components/sidebar.php' ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.js"></script>

</body>

</html>