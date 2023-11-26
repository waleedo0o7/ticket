<?php include 'header.php'; ?>

<div class="main-page-wrapper">

    <div class="container">

        <div class="page-content-100">


            <div class="title-wrapper mb-4">
                <h2 class="title bold"> طلب حجز </h2>
            </div>


            <div class="row">

                <div class="col-md-6">

                    <div class="form-wrapper">

                        <form>


                            <div class="form-group mb-4">
                                <label for="name"> الاسم الأول واسم العائلة </label>
                                <div class="input-with-icon-wrapper">
                                    <input type="text" class="form-control" id="name" placeholder="  الاسم الأول واسم العائلة     ">
                                    <i class="icon icon-user"></i>
                                </div>
                            </div><!-- form-group -->

                            <div class="form-group mb-4">
                                <label for="email"> البريد الإلكتروني </label>
                                <div class="input-with-icon-wrapper">
                                    <input type="text" class="form-control" id="email" placeholder=" البريد الإلكتروني  ">
                                    <i class="icon icon-email"></i>
                                </div>
                            </div><!-- form-group -->

                            <div class="form-group mb-4">
                                <label for="phone"> رقم الجوال </label>
                                <div class="input-with-icon-wrapper phone-wrapper">
                                    <input type="text" class="form-control phone" id="phone" placeholder="   رقم الجوال      ">
                                    <i class="icon icon-phone"></i>
                                </div>
                            </div><!-- form-group -->


                            <div class="form-group">
                                <div class="text-icon-wrapper mb-2">
                                    <label for="exampleFormControlSelect1" class="form-label"> بلد الاقامة </label>
                                </div>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div><!-- form-group -->

                        </form>

                    </div><!-- form-wrapper -->
                </div> <!-- col-md-6 -->
                <div class="col-md-6">

                    <div class="order-pref-wrapper custom-card p-4">

                        <h5 class="mb-4 bold"> ملخص الطلب </h5>

                        <div class="row">

                            <div class="col-md-6">
                                <div class="pref-item mb-4">
                                    <p class="mb-2"> نوع التذكرة </p>
                                    <div class="text-icon-wrapper mb-2">
                                        <i class="icon icon-ticket color-primary"></i>
                                        <p> زيارة وعرض سينمائي </p>
                                    </div>
                                </div> <!-- pref-item -->
                            </div> <!-- col-md-6 -->

                            <div class="col-md-6">
                                <div class="pref-item mb-4">
                                    <p class="mb-2"> عدد التذاكر </p>
                                    <div class="text-icon-wrapper mb-2">
                                        <i class="icon icon-ticket color-primary"></i>
                                        <p> 2 </p>
                                    </div>
                                </div> <!-- pref-item -->
                            </div> <!-- col-md-6 -->

                            <div class="col-md-6">
                                <div class="pref-item mb-4">
                                    <p class="mb-2"> وقت الجولة </p>
                                    <div class="text-icon-wrapper mb-2">
                                        <i class="icon icon-time color-primary"></i>
                                        <p> 14:00 <span> م </span> </p>
                                    </div>
                                </div> <!-- pref-item -->
                            </div> <!-- col-md-6 -->

                            <div class="col-md-6">
                                <div class="pref-item mb-4">
                                    <p class="mb-2"> تاريخ التذكرة </p>
                                    <div class="text-icon-wrapper mb-2">
                                        <i class="icon icon-calendar color-primary"></i>
                                        <p> السبت ,4 فبراير </p>
                                    </div>
                                </div> <!-- pref-item -->
                            </div> <!-- col-md-6 -->

                            <div class="col-md-6">
                                <div class="pref-item mb-4">
                                    <p class="mb-2"> مدة الجولة </p>
                                    <div class="text-icon-wrapper mb-2">
                                        <i class="icon icon-time color-primary"></i>
                                        <p> 45 <span> د </span> </p>
                                    </div>
                                </div> <!-- pref-item -->
                            </div> <!-- col-md-6 -->

                            <div class="col-md-6">
                                <div class="pref-item mb-4">
                                    <p class="mb-2"> هل تشمل العرض السينمائي </p>
                                    <div class="text-icon-wrapper mb-2">
                                        <i class="icon icon-video-play color-primary"></i>
                                        <p> نعم </p>
                                    </div>
                                </div> <!-- pref-item -->
                            </div> <!-- col-md-6 -->



                            <div class="col-md-6">
                                <div class="pref-item mb-4">
                                    <p class="mb-2"> سعر الرحلة </p>
                                    <div class="text-icon-wrapper mb-2">
                                        <i class="icon icon-cash color-primary"></i>
                                        <p class="price text-success bold lead "> 20 <span> ر.س </span> </p>
                                    </div>
                                </div> <!-- pref-item -->
                            </div> <!-- col-md-6 -->



                            <div class="col-md-6">
                                <a href="booking-step-2.php" class="btn btn-min-width btn-primary"> استمرار </a>
                            </div> <!-- col-md-6 -->



                        </div><!-- row -->

                    </div> <!-- order-pref-wrapper -->

                </div> <!-- col-md-6 -->

            </div> <!-- row -->




        </div> <!-- page-content-100 -->

    </div> <!-- container -->

</div> <!-- main-page-wrapper -->


<?php include 'footer.php'; ?>