<!-- <html dir="<?php if (isset($_GET['dir']))   echo $_GET['dir']; ?>"> -->
<html dir="rtl">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">

    <!-- datatables -->
    <link href="assets/vendors/datatables/datatables.min.css" rel="stylesheet" />

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.0/css/all.min.css" rel="stylesheet">

    <!-- icons font -->
    <link href="https://file.myfontastic.com/SafnTVjMN5DQhWCkoMcKQg/icons.css" rel="stylesheet">

    <!-- XXXX flag-icons -->
    <link href="assets/vendors/flag-icons/css/flag-icons.min.css" rel="stylesheet">


    <!--  flag icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css" rel="stylesheet">


    <!-- Tel Input -->
    <link href="assets/vendors/tel-input/css/intlTelInput.min.css" rel="stylesheet">

    <!-- Flatpickr -->
    <link href="assets/vendors/flatpickr/flatpickr.min.css" rel="stylesheet">

    <!-- hijri datepicker -->
    <link href="assets/vendors/bootstrap-hijri-datepicker/dist/css/bootstrap-datetimepicker.min.css" rel="stylesheet">

    <!-- swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- select2 -->
    <link href="assets/vendors/select2/select2.min.css" rel="stylesheet" />

    <!-- Custom -->
    <link href="assets/css/style.css" rel="stylesheet">

    <title> Home page </title>

</head>


<body>

    <div class="body-wrapper">

        <nav class="top-nav-wrapper">

            <div class="container">

                <div class="top-nav">

                    <div class="logo-menu-wrapper">

                        <div class="logo-wrapper">
                            <a href="home.php">
                                <img src="assets/images/logo.png" class="img-fluid logo" alt="logo">
                            </a>
                        </div> <!-- logo-wrapper -->

                        <div class="menu-wrapper">
                            <ul class="reset-ul menu-items">

                                <li class="menu-item">
                                    <a href="home.php" class="menu-link"> الرئيسية </a>
                                </li>

                                <li class="menu-item"> <a href="#" class="menu-link active"> احجز تذكرتك </a> </li>

                                <li class="menu-item dropdown ">

                                    <a href="#" class="menu-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="fi fi-sa"></span> العربية <i class="fa fa-sm fa-chevron-down"></i>
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                        <a class="dropdown-item menu-link " href="#"> <span class="fi fi-gb "></span> English </a>

                                        <a class="dropdown-item menu-link " href="#"> <span class="fi fi-us "></span>English</a>

                                        <a class="dropdown-item menu-link active" href="#"> <span class="fi fi-gb "></span> English </a>

                                        <a class="dropdown-item menu-link " href="#"> <span class="fi fi-us "></span> English 3 </a>

                                    </div>

                                </li>

                                <li class="menu-item lang-currency-btn"> <a data-toggle="modal" data-target="#langCurrencyModal" class="menu-link">

                                        <div class="flag-currency-wrapper">
                                            <span class="flag-icon flag-icon-sa"></span>
                                            <span> ر.س </span>
                                        </div> <!-- flag-currency-wrapper -->

                                    </a>
                                </li>

                            </ul>

                        </div> <!-- menu-wrapper -->

                    </div> <!-- logo-menu-wrapper -->

                    <div class="auth-buttons d-none">
                        <a href="auth-signup.php" class="btn btn-outline-primary "> إنشاء حساب </a>
                        <a href="auth-signin.php" class="btn btn-primary me-3"> تسجيل دخول </a>
                    </div> <!-- auth-buttons -->

                    <div class="authorized-user-icon-wrapper">

                        <div class="dropdown">

                            <a href="#" class="menu-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon icon-user"></i>
                                <p class="m-0 user-name"> محمد احمد عبد الحميد محمد احمد عبد الحميد </p>
                                <i class="fa fa-sm fa-chevron-down"></i>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                <a class="dropdown-item menu-link " href="profile-edit-info.php"> الملف الشخصي </a>

                                <a class="dropdown-item menu-link " href="auth-signin.php"> خروج </a>

                            </div> <!-- dropdown-menu -->

                        </div> <!-- dropdown -->

                    </div><!-- authorized-user-icon-wrapper -->

                    <!-- only-small-screens -->
                    <div id="hide-menu-btn">
                        <i class="icon icon-close"></i>
                    </div>

                </div><!-- top-nav -->
            </div> <!-- container -->
        </nav> <!-- top-nav-wrapper -->

        <div class="mobile-bar-menu-wrapper">

            <div class="logo-wrapper">
                <a href="home.php">
                    <img src="assets/images/logo.png" class="img-fluid logo" alt="logo">
                </a>
            </div> <!-- logo-wrapper -->

            <div class="toggle-menu-wrapper" id="show-menu-btn">
                <i class="icon icon-burger-bars"></i>
            </div><!-- toggle-menu-wrapper -->

        </div> <!-- mobile-bar-menu-wrapper -->


        <!-- Modal -->
        <div class="modal fade" id="langCurrencyModal" tabindex="-1" role="dialog" aria-labelledby="langCurrencyModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="langCurrencyModalLabel"> اعدادت اللغة و العملة </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="language  mb-3 ">

                            <h5> اللغة </h5>


                            <div class="options-wrapper lang-and-currency-options">

                                <label class="option-container ">
                                    <input type="radio" checked="checked" name="report-reason" value="1">
                                    <span class="checkmark"></span>
                                    <p class="m-0"> عربي </p>
                                    <span class="flag-icon flag-icon-sa"></span>
                                </label>

                                <label class="option-container ">
                                    <input type="radio" name="report-reason" value="1">
                                    <span class="checkmark"></span>
                                    <p class="m-0"> english </p>
                                    <span class="flag-icon flag-icon-am"></span>
                                </label>


                                <label class="option-container ">
                                    <input type="radio" name="report-reason" value="1">
                                    <span class="checkmark"></span>
                                    <p class="m-0"> english </p>
                                    <span class="flag-icon flag-icon-am"></span>
                                </label>

                            </div><!-- options-wrapper -->


                        </div> <!-- language -->

                        <div class="currency  mb-3 ">

                            <h5> العملة </h5>

                            <div class="options-wrapper lang-and-currency-options">

                                <label class="option-container ">
                                    <input type="radio" checked="checked" name="currency" value="1">
                                    <span class="checkmark"></span>
                                    <p class="m-0"> جنية مصري </p>
                                    <p class="mb-0 color-gray"> EG </p>
                                </label>

                                <label class="option-container ">
                                    <input type="radio" checked="checked" name="currency" value="1">
                                    <span class="checkmark"></span>
                                    <p class="m-0"> ريال سعودي </p>
                                    <p class="mb-0 color-gray"> EG </p>
                                </label>

                                <label class="option-container ">
                                    <input type="radio" checked="checked" name="currency" value="1">
                                    <span class="checkmark"></span>
                                    <p class="m-0"> جنية يوناني </p>
                                    <p class="mb-0 color-gray"> EG </p>
                                </label>


                            </div><!-- options-wrapper -->


                        </div> <!-- language -->

                    </div>
                </div>
            </div>
        </div>