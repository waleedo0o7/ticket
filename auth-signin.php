<?php include 'header.php'; ?>

<div class="main-page-wrapper">

    <div class="container">

        <div class="page-content-75">


            <div class="title-wrapper mb-4">
                <h2 class="title bold">    تسجيل الدخول   </h2>
            </div>

            <div class="form-wrapper login">

                <form>

                    <div class="row">
 

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email"> البريد الإلكتروني </label>
                                <div class="input-with-icon-wrapper">
                                    <input type="text" class="form-control" id="email" placeholder=" البريد الإلكتروني  ">
                                    <i class="icon icon-email"></i>
                                </div>
                            </div><!-- form-group -->
                        </div> <!-- col-md-6 -->

  




                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="date"> كلمة المرور </label>
                                <div class="input-with-icon-wrapper">
                                    <input type="password" class="form-control" id="date" placeholder="   كلمة المرور      ">
                                    <i class="icon icon-lock"></i>
                                </div>
                            </div><!-- form-group -->
                        </div> <!-- col-md-6 -->


                        <div class="col-md-6">
                            <div class="form-group custom-control custom-checkbox mb-3">
                                <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                                <label class="custom-control-label" for="customCheck"> تذكرني   </label>
                            </div>
                        </div> <!-- col-md-6 -->

                        
                        <div class="col-md-6 d-flex justify-content-end">
                            <a href="auth-forget-password-step-1.php" class="btn btn-link"> نسيت كلمة المرور </a>
                        </div> <!-- col-md-6 -->


                    </div>
 
                    
 
                    <div class="text-center mb-4">
                        <button type="submit" class="btn btn-min-width btn-primary"> دخول     </button>
                    </div>


                    <div class="social-login-wrapper text-center mb-4">

                        <p class="mb-2"> أو الدخول  بواسطة </p>

                        <div class="social-buttons-wrapper ">
                            <a href="#" class="social-link"><img src="assets/images/icon-facebook.svg" alt=""> فيسبوك </a>
                            <a href="#" class="social-link"><img src="assets/images/icon-google.svg" alt=""> جوجل </a>
                        </div>

                    </div><!-- social-login-wrapper -->

                    <div class="text-center mb-4">
                        <a href="booking-step-1.php" class="btn btn-primary"> الدخول كزائر </a>
                    </div>



                    <div class="text-center">
                        <p>
                            ليس لديك حساب  ؟ <a href="auth-signup.php" class="btn btn-link p-2"> تسجيل حساب جديد   </a>
                        </p>
                    </div>





                </form>

            </div><!-- form-wrapper -->

        </div>

    </div> <!-- container -->

</div> <!-- main-page-wrapper -->


<?php include 'footer.php'; ?>