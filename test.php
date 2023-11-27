<?php include 'header.php'; ?>


<div class="main-page-wrapper">

    <div class="container pt-5 pb-5">

        <div class="change-quantity-wrapper">
            <div class="counter">
                <span class="down" onClick='decreaseCount(event, this)'> <i class="fa fa-minus"></i> </span>
                <input type="text" value="4">
                <span class="up" onClick='increaseCount(event, this)'> <i class="fa fa-plus"></i></span>
            </div> <!-- counter -->
        </div><!-- change-quantity-wrapper -->

        <br /><br />

        <div class="change-quantity-wrapper">
            <div class="counter">
                <span class="down disabled" onClick='decreaseCount(event, this)'> <i class="fa fa-minus"></i> </span>
                <input type="text" value="4">
                <span class="up disabled" onClick='increaseCount(event, this)'> <i class="fa fa-plus"></i></span>
            </div> <!-- counter -->
        </div><!-- change-quantity-wrapper -->

        <br /><br />

        <hr />

        <br /><br />

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Launch demo modal
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">



                        <div class="col-md-12">
                            <div class="form-group custom-control custom-checkbox mb-3">
                                <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                                <label class="custom-control-label" for="customCheck"> أوافق على جميع <a href="#" target="_blank"> الشروط و سياسة الخصوصية </a> </label>
                            </div>
                        </div> <!-- col-md-6 -->


                        <div class="col-md-12">
                            <div class="form-group custom-control custom-checkbox mb-3">
                                <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                                <label class="custom-control-label" for="customCheck"> أوافق على جميع <a href="#" target="_blank"> الشروط و سياسة الخصوصية </a> </label>
                            </div>
                        </div> <!-- col-md-6 -->

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>

                </div>
            </div>
        </div>


        <br /><br />

        <hr />

        <br /><br />



        <div class="attributes-options-wrapper d-block">

            <label class="label mb-2 lead"> Title </label>

            <div class="attributes-options default">

                <label class="option-container option-inline">
                    <input type="radio" checked="checked" name="size" value="1">
                    <span class="checkmark"> S </span>
                </label>

                <label class="option-container option-inline">
                    <input type="radio" name="size" value="2">
                    <span class="checkmark"> M </span>

                </label>

                <label class="option-container option-inline">
                    <input type="radio" name="size" value="3">
                    <span class="checkmark"> L </span>

                </label>


                <label class="option-container option-inline">
                    <input type="radio" name="size" value="4" disabled="disabled">
                    <span class="checkmark"> XX </span>

                </label>

            </div> <!-- share-options-wrapper -->

        </div><!-- attributes-options-wrapper -->












    </div>

</div> <!-- container -->

</div> <!-- main-page-wrapper -->


<?php include 'footer.php'; ?>