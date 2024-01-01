<?php include 'header.php'; ?>

<div class="intro-slider-wrapper">
    <div class="swiper">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="swiper-slide-content" style="background-image: url(assets/images/slider01.jpg);">
                    <h2 class="mb-4 bold"> احجز تذكرتك في المدينة المنورة </h2>
                    <p> المعرض والمتحف الدولى للسيرة النبوية والحضارة الإسلامية </p>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="swiper-slide-content" style="background-image: url(assets/images/slider02.jpg);">
                    <h2 class="mb-4 bold"> احجز تذكرتك الأن في المدينة المنورة </h2>
                    <p> المعرض والمتحف الدولى للسيرة النبوية </p>
                </div>
            </div>

        </div>
        <div class="swiper-pagination"></div>
    </div> <!-- swiper -->
</div> <!-- intro-slider-wrapper -->

<div class="main-page-wrapper">

    <div class="search-filter-wrapper mb-5">
        <form>
            <div class="container search-filter-form-container custom-card">
                <div class="row">

                    <div class="col">


                        <div class="form-group filter-input-wrapper">
                            <div class="text-icon-wrapper mb-2">
                                <i class="icon icon-branches color-primary"></i>
                                <label for="bransh" class="form-label"> الفرع </label>
                            </div>
                            <select class="form-control select2">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>

                    </div> <!-- col  -->

                    <div class="col ">
                        <div class="form-group filter-input-wrapper">
                            <div class="text-icon-wrapper mb-2">
                                <i class="icon icon-time color-primary"></i>
                                <label for="bransh" class="form-label"> التوقيت</label>
                            </div>
                            <select class="form-control select2">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div> <!-- col  -->


                    <div class="col ">
                        <div class="form-group filter-input-wrapper">
                            <div class="text-icon-wrapper mb-2">
                                <i class="icon icon-global-search color-primary"></i>
                                <label for="bransh" class="form-label"> لغة الجولة </label>
                            </div>
                            <select class="form-control select2">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div> <!-- col  -->

                    <div class="col ">
                        <div class="form-group filter-input-wrapper">
                            <div class="text-icon-wrapper mb-2">
                                <i class="icon icon-ticket color-primary"></i>
                                <label for="bransh" class="form-label"> عدد التذاكر </label>
                            </div>
                            <select class="form-control select2">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>


                    </div> <!-- col  -->


                    <div class="col ">
                        <div class="action">
                            <a href="#" class="btn w-100 btn-outline-primary"> الغاء </a>
                        </div> <!-- action -->

                    </div> <!-- col  -->
                </div> <!-- row -->
            </div><!-- container -->
        </form>
    </div> <!-- search-filter-wrapper -->

    <div class="select-date-wrapper mb-5">

        <div class="container">

            <div class="select-date-container custom-card">

                <div class="form-group">
                    <div class="input-group hijri-input-wrapper">
                        <input type='text' class="form-control hijri-date-input" id="hijri-date-input" />
                    </div>
                </div>

            </div>

        </div><!-- container -->

    </div> <!-- select-date-wrapper -->

    <div class="available-time-wrapper mb-5">

        <div class="container p-0">

            <div class="available-time-cards custom-card">

                <div class="title-wrapper mb-2">
                    <h2 class="title text-center color-primary bold"> المواعيد المتاحة </h2>
                </div> <!-- title-wrapper -->

                <div class="text-center mb-4">
                    <p class="danger">
                        <span> يوم 5 رجب </span>
                        <span> - </span>
                        <span> 1 فبراير </span>
                    </p>
                </div> <!-- text-center -->

                <div class="row">




                    <div class="col-md-3">
                        <div class="time-card mb-4">

                            <div class="time text-icon-wrapper mb-4">
                                <i class="icon icon-time"></i>
                                <p> 14:00 <span> م </span> </p>
                            </div>


                            <div class="language text-icon-wrapper image mb-2">
                                <span class="flag-icon flag-icon-us "></span>
                                <p>English</p>
                            </div>


                            <div class="tickets-count text-icon-wrapper mb-4">
                                <i class="icon icon-ticket"></i>
                                <p> متبقي <span> 0 </span> تذكره </p>
                            </div> <!-- tickets-count -->


                            <div class="tickets-count-label text-center mb-4">
                                <div class="custom-label danger">
                                    بيعت بالكامل
                                </div><!-- custom-label -->
                            </div> <!-- tickets-count-label -->

                            <div class="action-btn-wrapper">
                                <button href="auth-signin.php" disabled class="btn btn-primary w-100"> حجز </button>
                            </div> <!-- action-btn-wrapper -->

                        </div><!-- time-card -->
                    </div> <!-- col-md-3 -->


                    <div class="col-md-3">
                        <div class="time-card mb-4">

                            <div class="time text-icon-wrapper mb-4">
                                <i class="icon icon-time"></i>
                                <p> 14:00 <span> م </span> </p>
                            </div>

                            <div class="language text-icon-wrapper image mb-2">
                                <span class="flag-icon flag-icon-sa"></span>
                                <p>Arabic</p>
                            </div>

                            <div class="tickets-count text-icon-wrapper mb-4">
                                <i class="icon icon-ticket"></i>
                                <p> متبقي <span> 6 </span> تذكره </p>
                            </div> <!-- tickets-count -->

                            <div class="tickets-count-label mb-4">
                                <div class="custom-label warning">
                                    التذاكر المتبقية 6
                                </div><!-- custom-label -->
                            </div> <!-- tickets-count-label -->

                            <div class="action-btn-wrapper">
                                <a href="auth-signin.php" class="btn btn-primary w-100"> حجز </a>
                            </div> <!-- action-btn-wrapper -->

                        </div><!-- time-card -->
                    </div> <!-- col-md-3 -->



                    <div class="col-md-3">
                        <div class="time-card mb-4">

                            <div class="time text-icon-wrapper mb-4">
                                <i class="icon icon-time"></i>
                                <p> 14:00 <span> م </span> </p>
                            </div>

                            <div class="language text-icon-wrapper image mb-4">
                                <img src="assets/images/flag-ksa.png" class="img-fuid flag-sm" alt="">
                                <p> جولة باللغة العربية </p>
                            </div> <!-- language -->

                            <div class="tickets-count text-icon-wrapper mb-4">
                                <i class="icon icon-ticket"></i>
                                <p> متبقي <span> 30 </span> تذكره </p>
                            </div> <!-- tickets-count -->

                            <div class="tickets-count-label mb-4">
                                <div class="custom-label success">
                                    التذاكر المتبقية 30
                                </div><!-- custom-label -->
                            </div> <!-- tickets-count-label -->

                            <div class="action-btn-wrapper">
                                <a href="auth-signin.php" class="btn btn-primary w-100"> حجز </a>
                            </div> <!-- action-btn-wrapper -->

                        </div><!-- time-card -->
                    </div> <!-- col-md-3 -->





                    <div class="col-md-3">
                        <div class="time-card mb-4">

                            <div class="time text-icon-wrapper mb-4">
                                <i class="icon icon-time"></i>
                                <p> 14:00 <span> م </span> </p>
                            </div>

                            <div class="language text-icon-wrapper image mb-4">
                                <img src="assets/images/flag-ksa.png" class="img-fuid flag-sm" alt="">
                                <p> جولة باللغة العربية </p>
                            </div> <!-- language -->

                            <div class="tickets-count text-icon-wrapper mb-4">
                                <i class="icon icon-ticket"></i>
                                <p> متبقي <span> 30 </span> تذكره </p>
                            </div> <!-- tickets-count -->

                            <div class="tickets-count-label mb-4">

                            </div> <!-- tickets-count-label -->

                            <div class="action-btn-wrapper">
                                <a href="auth-signin.php" class="btn btn-primary w-100"> حجز </a>
                            </div> <!-- action-btn-wrapper -->

                        </div><!-- time-card -->
                    </div> <!-- col-md-3 -->















                </div><!-- row -->

            </div> <!-- available-time-cards -->
        </div><!-- container -->
    </div><!-- available-time-wrapper -->

</div> <!-- main-page-wrapper -->

<?php include 'footer.php'; ?>