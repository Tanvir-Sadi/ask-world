<section class="text-gray-600 body-font">
    <div class=" px-5 py-24 flex flex-wrap items-center">
        <div class="lg:w-3/5 md:w-1/2 hidden md:block md:pr-16 lg:pr-0 pr-0">
            <img class="lg:w-3/5" src="assets\img\login_bg.jpg" alt="Login Background" srcset="">
        </div>
        <div class="lg:w-2/6 md:w-1/2 bg-gray-100 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
            <form method="post" action="/login">
                <h2 class="text-gray-900 text-lg font-medium title-font mb-5">Log In</h2>
                <ul class="text-red-500">
                    <?php if(isset($errors)){ foreach ($errors as $key=>$values){?>
                        <li>
                            <span class="font-semibold capitalize"><?= $key.': '?></span>
                            <ul>
                                <?php foreach ($values as $value){ ?>
                                <li class="text-black"><?= $value?></li>
                                <?php }?>
                            </ul>
                        </li>
                    <?php }}?>
                </ul>
                <div class="relative mb-4">
                    <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                    <input type="email" id="email" name="email"
                        class="w-full bg-white rounded border border-gray-300 focus:border-amber-500 focus:ring-2 focus:ring-amber-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative mb-4">
                    <label for="password" class="leading-7 text-sm text-gray-600">Password</label>
                    <input type="password" id="password" name="password"
                        class="w-full bg-white rounded border border-gray-300 focus:border-amber-500 focus:ring-2 focus:ring-amber-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>

                <button type="submit"
                    class="text-white bg-amber-500 border-0 py-2 px-8 focus:outline-none hover:bg-amber-600 rounded text-lg">Login</button>
                <p class="text-xs text-gray-500 mt-3">Don't have any account? <a class="underline" href="register">sign up</a></p>
            </form>
        </div>
    </div>
</section>