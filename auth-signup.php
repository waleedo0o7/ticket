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

                            <div class="form-group mb-3 relative">

                                <label> رقم الجوال </label>

                                <input type="tel" class="form-control input-with-country-code" placeholder="Phone Number" id="phone" required="">

                                <div class="country-code-container">

                                    <select class="d-none" name="country" id="country">
                                        <option value="1"> 1 </option>
                                        <option selected value="2"> 2 </option>
                                        <option value="3"> 3 </option>
                                    </select>

                                    <div class="dropdown">

                                        <button class="reset-btn dropdown-toggle" type="button" id="choose-country-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="assets/images/flags/flag-ksa.png" alt="" /> +002
                                            <i class="fa fa-chevron-down"></i>
                                        </button>

                                        <div class="dropdown-menu choose-country-list" aria-labelledby="choose-country-btn">
                                            <a data-value="1" class="dropdown-item" href="#"><img src="assets/images/flags/flag-kuwait.png" alt="" /> +001 <i class="fa fa-chevron-down"></i> </a>
                                            <a data-value="2" class="dropdown-item " href="#"><img src="assets/images/flags/flag-ksa.png" alt="" /> +002 <i class="fa fa-chevron-down"></i> </a>
                                            <a data-value="3" class="dropdown-item " href="#"><img src="assets/images/flags/flag-uae.png" alt="" /> +003 <i class="fa fa-chevron-down"></i> </a>
                                        </div>

                                    </div> <!-- dropdown -->
                                </div><!-- country-code-container -->
                            </div> <!-- form-group  -->


                        </div> <!-- col-md-6 -->

                        <div class="col-md-6">
                            <div class="form-group mb-4">
                                <label for="date"> تاريخ الميلاد </label>
                                <div class="input-with-icon-wrapper">
                                    <input type="text" class="form-control date" id=" " placeholder="  تاريخ الميلاد   ">
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

                            <div class="form-group relative">
                                <label class="text-left"> Gender </label>

                                <div class="select-gender-wrapper">

                                    <div class="gender-radio-wrapper mr-2">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label label-male" for="exampleRadios1" style="background-image: url(assets/images/male.png);"></label>
                                    </div>

                                    <div class="gender-radio-wrapper mr-2">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                        <label class="form-check-label label-female" for="exampleRadios2" style="background-image: url(assets/images/female.png);"></label>
                                    </div>

                                </div><!-- select-gender-wrapper -->


                            </div><!-- form-group  -->





                            <div class="form-group custom-control custom-checkbox mb-3">
                                <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                                <label class="custom-control-label" for="customCheck"> أوافق على جميع <a href="#" target="_blank"> الشروط و سياسة الخصوصية </a> </label>
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
                        <a href="booking-step-1.php" class="btn btn-primary-light"> تخطي الدخول كزائر </a>
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