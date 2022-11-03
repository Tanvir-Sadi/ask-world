<!doctype html>
<html lang="en">
    <?php include_once 'head.php'?>
<body>
    <?php include_once 'topNav.php'?>
    <div class="container d-flex justify-content-between">
    <?php include_once 'sideNav.php'?>
    <main class="flex-grow-1">
        <div class="px-4 pt-3 border-end h-full">
            <div class="d-flex justify-content-between border-bottom pb-3">
                <h1 class="fw-normal">
                    Top Questions
                </h1>
                <button type="button" class="btn btn-primary">Ask Questions</button>
            </div>
                    <?php require_once self::$slot?>
        </div>
    </main>
    <?php include_once 'sidebar.php'?>
</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
</script>
</body>

</html>