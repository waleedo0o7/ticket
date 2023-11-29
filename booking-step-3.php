<?php include 'header.php'; ?>

<div class="main-page-wrapper">

    <div class="container">

        <div class="page-content-100">

            <div class="row">

                <div class="col-md-6">

                    <div class="title-wrapper mb-4">
                        <h2 class="title bold"> الدفع </h2>
                    </div>

                    <div class="attributes-options-wrapper d-block mb-4">

                        <label class="label mb-2 "> طرق الدفع </label>

                        <div class="attributes-options default">

                            <label class="option-container option-inline">
                                <input type="radio" checked="checked" name="size" value="1">
                                <span class="checkmark"> <img src="assets/images/pay-card-pos.svg" class="img-fluid me-2" alt=""> الدفع الإلكتروني </span>
                            </label>

                            <label class="option-container option-inline">
                                <input type="radio" name="size" value="2">
                                <span class="checkmark"> <img src="assets/images/pay-link.svg" class="img-fluid me-2" alt=""> الدفع عن طريق الرابط </span>

                            </label>

                        </div> <!-- share-options-wrapper -->

                    </div><!-- attributes-options-wrapper -->

                    <div class="d-block mb-4">

                        <label class="label mb-2 "> أنواع الدفع </label>

                        <img src="assets/images/wallet-cards.png" class="img-fluid w-100" alt="">
                    </div>

                    <div class="form-group mb-4">
                        <label for="name"> كود الخصم </label>
                        <div class="input-with-icon-wrapper input-with-submit-button">
                            <input type="text" class="form-control" id="name" placeholder="  الاسم الأول واسم العائلة     ">
                            <img src="assets/images/coupon.png" class="img-fluid icon-image" alt="">
                            <a href="#" class="btn btn-primary"> تنفيذ </a>
                        </div>
                    </div><!-- form-group -->



                    <div class="checkout-pref mb-4">

                        <p class="d-flex justify-content-between align-items-center mb-2"> <strong> Subtotal </strong> <span class="bold"> 50.00 Kd </span> </p>
                        <p class="d-flex justify-content-between align-items-center mb-2"> <strong> Taxes </strong> <span class=" bold"> 00,00 KD </span> </p>
                        <p class="d-flex justify-content-between align-items-center mb-2"> <strong> Discount Promo Code </strong> <span class="danger bold"> 40,00 KD </span> </p>

                        <hr />


                        <div class="checkout-total-wrapper">

                            <div class="checkout-total">

                                <p class="lead mb-1"> الاجمالي </p>

                                <div class="price">
                                    <p class="current-price"> 500 ر.س </p>
                                    <div class="discount">
                                        <p class="old-price"> 800 ر.س </p>
                                    </div><!-- discount -->
                                </div>

                            </div><!-- checkout-total -->

                        </div><!-- checkout-total -->

                    </div> <!-- checkout-pref -->

                    <div class="mb-3">
                        <a href="booking-step-3.php" class="btn btn-min-width btn-primary me-2"> استمرار </a>
                    </div>

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
                                <div class="checkout-total-wrapper">
                                    <p> الاجمالي بدون ضرائب </p>
                                    <div class="checkout-total">
                                        <div class="price">
                                            <p class="current-price"> 500 ر.س </p>
                                            <div class="discount">
                                                <p class="old-price"> 800 ر.س </p>
                                            </div><!-- discount -->
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- col-md-6 -->


                        </div><!-- row -->

                    </div> <!-- order-pref-wrapper -->

                </div> <!-- col-md-6 -->

            </div> <!-- row -->

        </div> <!-- page-content-100 -->

    </div> <!-- container -->

</div> <!-- main-page-wrapper -->


<?php include 'footer.php'; ?>