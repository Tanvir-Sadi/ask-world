<div class="container ">
    <div class="row justify-content-center">
        <div class="col-6 m-auto">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="row">


                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">SIGN UP</h1>
                            </div>
                            <form class="user" method="post" action="register">
                                <ul class="text-danger">
                                    <?php if(isset($errors)){ foreach ($errors as $key=>$values){?>
                                        <li>
                                            <span class="fw-bold"><?= $key.': '?></span>
                                            <ul>
                                                <?php foreach ($values as $value){ ?>
                                                <li><?= $value?></li>
                                                <?php }?>
                                            </ul>
                                        </li>
                                    <?php }}?>
                                </ul>
                                <div class="form-group mb-3">
                                    <input name="name" type="text" class="form-control form-control-user"    placeholder="Enter Your Name">
                                </div>
                                <div class="form-group mb-3">
                                    <input name="email" type="email" class="form-control form-control-user"  id="exampleInputEmail" aria-describedby="emailHelp" placeholder=" Email Address">
                                </div>
                                <div class="form-group mb-3">
                                    <input name="password" type="password" class="form-control form-control-user" id="exampleInputPassword"  placeholder="Password">
                                </div>
                                <div class="form-group mb-3">
                                    <input name="confirm_password" type="password" class="form-control form-control-user" name="password" id="exampleInputPassword"  placeholder="Confirm Password">
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-control-checkbox small">
                                        <input name="tc" type="checkbox" class="custom-control-input" id="customCheck">
                                        <label class="custom-control-label mb-3" for="tc">I read and agree to <a href="">terms & condition</a></label>
                                    </div>
                                </div>
                                <button class="btn btn-outline-primary btn-block w-50 mx-auto d-block" type="submit">Sign Up</button>
                                <hr>
                            </form>
                            <p1>I have an account? <a href="login">Log In</a></p1>
                        </div>


                    </div>


                </div>
            </div>
        </div>
