<?php include 'header.php'; ?>

<div class="main-page-wrapper">

    <div class="container">

        <div class="page-content-75">


            <div class="title-wrapper mb-4">
                <h2 class="title bold"> ادخال كلمة المرور الجديدة </h2>
            </div>

            <div class="form-wrapper ">

                <form>

                    <div class="row">

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
                            <div class="form-group">
                                <label for="date"> تأكيد كلمة المرور </label>
                                <div class="input-with-icon-wrapper">
                                    <input type="password" class="form-control" id="date" placeholder="   كلمة المرور      ">
                                    <i class="icon icon-lock"></i>
                                </div>
                            </div><!-- form-group -->
                        </div> <!-- col-md-6 -->
                        
                    </div>



                    <div class="text-center mb-4">
                        <a href="action-success.php" class="btn btn-min-width btn-primary"> استمرار </a>
                    </div>




                </form>

            </div><!-- form-wrapper -->

        </div>

    </div> <!-- container -->

</div> <!-- main-page-wrapper -->


<?php include 'footer.php'; ?>