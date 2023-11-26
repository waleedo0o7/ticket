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

                    <div class="col-lg-4">
                        <div class="form-group">
                            <div class="text-icon-wrapper mb-2">
                                <i class="icon icon-time color-primary"></i>
                                <label for="bransh" class="form-label"> اختر الفرع </label>
                            </div>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div> <!-- col-lg-4 -->

                    <div class="col-lg-4">
                        <div class="form-group">
                            <div class="text-icon-wrapper mb-2">
                                <i class="icon icon-global-search color-primary"></i>
                                <label for="bransh" class="form-label"> كل اللغات </label>
                            </div>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div> <!-- col-lg-4 -->

                    <div class="col-lg-4">
                        <div class="form-group">
                            <div class="text-icon-wrapper mb-2">
                                <i class="icon icon-ticket color-primary"></i>
                                <label for="bransh" class="form-label"> عدد التذاكر </label>
                            </div>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div> <!-- col-lg-4 -->

                </div>
            </div><!-- container -->
        </form>
    </div> <!-- search-filter-wrapper -->

    <div class="select-date-filter-wrapper mb-5">

        <div class="container">


            <div class="form-group">
                <label>
                    Date
                </label>
                <div class="input-group">
                    <input type='text' class="form-control" id="hijri-date-input" />
                </div>
            </div>


        </div><!-- container -->

    </div>

    <div class="available-time-wrapper mb-5">
        <div class="container p-0">

            <div class="available-time-cards custom-card">

                <div class="title-wrapper mb-4">
                    <h2 class="title text-center color-primary bold"> المواعيد المتاحة </h2>
                </div> <!-- title-wrapper -->

                <div class="row ">
                    <div class="col-md-3">
                        <div class="time-card mb-4">

                            <div class="time text-icon-wrapper mb-4">
                                <i class="icon icon-time"></i>
                                <p> 14:00 <span> م </span> </p>
                            </div>

                            <div class="language text-icon-wrapper image mb-4">
                                <img src="assets/images/flag-ksa.png" class="img-fuid flag-sm" alt="">
                                <p> جولة باللغة العربية </p>
                            </div>

                            <div class="tickets-count text-icon-wrapper mb-4">
                                <i class="icon icon-ticket"></i>
                                <p> متبقي <span> 10 </span> تذكره </p>
                            </div>

                            <div class="action-btn-wrapper">
                                <a href="auth-signin.php" class="btn btn-primary w-100"> حجز </a>
                            </div>

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
                            </div>

                            <div class="tickets-count text-icon-wrapper mb-4">
                                <i class="icon icon-ticket"></i>
                                <p> متبقي <span> 10 </span> تذكره </p>
                            </div>

                            <div class="action-btn-wrapper">
                                <a href="auth-signin.php" class="btn btn-primary w-100"> حجز </a>
                            </div>

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
                            </div>

                            <div class="tickets-count text-icon-wrapper mb-4">
                                <i class="icon icon-ticket"></i>
                                <p> متبقي <span> 10 </span> تذكره </p>
                            </div>

                            <div class="action-btn-wrapper">
                                <a href="auth-signin.php" class="btn btn-primary w-100"> حجز </a>
                            </div>

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
                            </div>

                            <div class="tickets-count text-icon-wrapper mb-4">
                                <i class="icon icon-ticket"></i>
                                <p> متبقي <span> 10 </span> تذكره </p>
                            </div>

                            <div class="action-btn-wrapper">
                                <button href="#" disabled class="btn btn-primary w-100"> حجز </button>
                            </div>

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
                            </div>

                            <div class="tickets-count text-icon-wrapper mb-4">
                                <i class="icon icon-ticket"></i>
                                <p> متبقي <span> 10 </span> تذكره </p>
                            </div>

                            <div class="action-btn-wrapper">
                                <button href="#" disabled class="btn btn-primary w-100"> حجز </button>
                            </div>

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
                            </div>

                            <div class="tickets-count text-icon-wrapper mb-4">
                                <i class="icon icon-ticket"></i>
                                <p> متبقي <span> 10 </span> تذكره </p>
                            </div>

                            <div class="action-btn-wrapper">
                                <button href="#" disabled class="btn btn-primary w-100"> حجز </button>
                            </div>

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
                            </div>

                            <div class="tickets-count text-icon-wrapper mb-4">
                                <i class="icon icon-ticket"></i>
                                <p> متبقي <span> 10 </span> تذكره </p>
                            </div>

                            <div class="action-btn-wrapper">
                                <button href="#" disabled class="btn btn-primary w-100"> حجز </button>
                            </div>

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
                            </div>

                            <div class="tickets-count text-icon-wrapper mb-4">
                                <i class="icon icon-ticket"></i>
                                <p> متبقي <span> 10 </span> تذكره </p>
                            </div>

                            <div class="action-btn-wrapper">
                                <button href="#" disabled class="btn btn-primary w-100"> حجز </button>
                            </div>

                        </div><!-- time-card -->
                    </div> <!-- col-md-3 -->







                </div><!-- row -->
            </div> <!-- available-time-cards -->
        </div><!-- container -->
    </div><!-- available-time-wrapper -->

</div> <!-- main-page-wrapper -->


<?php include 'footer.php'; ?>