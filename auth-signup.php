<?php include 'header.php'; ?>

<div class="main-page-wrapper">

    <div class="container">

        <div class="page-content-75">


            <div class="title-wrapper mb-4">
                <h2 class="title bold"> تسجيل حساب جديد </h2>
            </div>

            <div class="form-wrapper register">

                <form>

                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group mb-4">
                                <label for="username"> الاسم </label>
                                <div class="input-with-icon-wrapper">
                                    <input type="text" class="form-control" id="username" placeholder=" اسم المستخدم ">
                                    <i class="icon icon-user"></i>
                                </div>
                            </div><!-- form-group -->
                        </div> <!-- col-md-6 -->

                        <div class="col-md-6">
                            <div class="form-group mb-4">
                                <label for="email"> البريد الإلكتروني </label>
                                <div class="input-with-icon-wrapper">
                                    <input type="text" class="form-control" id="email" placeholder=" البريد الإلكتروني  ">
                                    <i class="icon icon-email"></i>
                                </div>
                            </div><!-- form-group -->
                        </div> <!-- col-md-6 -->



                        <div class="col-md-6">
                            <div class="form-group mb-4">
                                <label for="phone"> رقم الجوال </label>
                                <div class="input-with-icon-wrapper">
                                    <input type="text" class="form-control" id="phone" placeholder="   رقم الجوال      ">
                                    <i class="icon icon-phone"></i>
                                </div>
                            </div><!-- form-group -->
                        </div> <!-- col-md-6 -->


                        <div class="col-md-6">
                            <div class="form-group mb-4">
                                <label for="date"> تاريخ الميلاد </label>
                                <div class="input-with-icon-wrapper">
                                    <input type="text" class="form-control" id="date" placeholder="  تاريخ الميلاد   ">
                                    <i class="icon icon-calendar"></i>
                                </div>
                            </div><!-- form-group -->
                        </div> <!-- col-md-6 -->





                        <div class="col-md-6">
                            <div class="form-group mb-4">
                                <label for="date"> كلمة المرور </label>
                                <div class="input-with-icon-wrapper">
                                    <input type="password" class="form-control" id="date" placeholder="   كلمة المرور      ">
                                    <i class="icon icon-lock"></i>
                                </div>
                            </div><!-- form-group -->
                        </div> <!-- col-md-6 -->




                        <div class="col-md-6">
                            <div class="form-group mb-4">
                                <label for="date"> تأكيد كلمة المرور </label>
                                <div class="input-with-icon-wrapper">
                                    <input type="password" class="form-control" id="date" placeholder="  تأكيد كلمة المرور     ">
                                    <i class="icon icon-lock"></i>
                                </div>
                            </div><!-- form-group -->
                        </div> <!-- col-md-6 -->



                        <div class="col-md-6">
                            <div class="form-group custom-control custom-checkbox mb-3">
                                <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                                <label class="custom-control-label" for="customCheck"> أوافق على جميع الشروط و سياسة الخصوصية </label>
                            </div>
                        </div> <!-- col-md-6 -->


                    </div> <!-- row -->


                    <div class="text-center mb-4">
                        <button type="submit" class="btn btn-min-width btn-primary"> انشاء حساب </button>
                    </div>


                    <div class="social-login-wrapper text-center mb-4">

                        <p class="mb-2"> أو إنشاء حساب بواسطة </p>

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
                            لديك حساب بالفعل ؟ <a href="auth-signin.php" class="btn btn-link p-2"> تسجيل الدخول </a>
                        </p>
                    </div>





                </form>

            </div><!-- form-wrapper -->

        </div>

    </div> <!-- container -->

</div> <!-- main-page-wrapper -->


<?php include 'footer.php'; ?>