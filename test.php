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
                <span class="down" onClick='decreaseCount(event, this)'> <i class="fa fa-minus"></i> </span>
                <input type="text" value="4">
                <span class="up" onClick='increaseCount(event, this)'> <i class="fa fa-plus"></i></span>
            </div> <!-- counter -->
        </div><!-- change-quantity-wrapper -->

    </div> <!-- container -->

</div> <!-- main-page-wrapper -->


<?php include 'footer.php'; ?>