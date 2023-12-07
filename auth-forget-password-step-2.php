<?php include 'header.php'; ?>

<div class="main-page-wrapper">

    <div class="container">

        <div class="page-content-75">

            <div class="title-wrapper mb-4">
                <h2 class="title bold"> تم إرسال رمز التحقق إلى البريد الإلكتروني </h2>
            </div>

            <div class="form-container mb-0">

                <p class="lead mb-2"> أدخل الرمز المكون من أربعة أرقام الذى أرسلناه </p>

                <div class="mb-3 activate-inputs-container">

                    <div class="activate-inputs">
                        <input class="num1" type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" />
                        <input class="num2" type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" />
                        <input class="num3" type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" />
                        <input class="num4" type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" />
                    </div><!-- activate-inputs -->

                    <form action="auth-forget-password-step-3.php" id="activate-code" class="d-none">
                        <input id="activate-code-input" name="code" type="text">
                    </form>



                    <div class="mb-3">


                        <p class="text-center mb-0"> إعادة الإرسال في </p>


                        <div id="count-down-numbers" class="mb-2">
                            <span class="black" id="minutes">02</span>
                            <span class="black" id="colon">:</span>
                            <span class="black" id="seconds">00</span>
                        </div>

                        <p class="d-block text-center mb-0">
                            <span> لا يوجد تلقي للرمز ؟ </span>
                            <a href="#"> إعادة إرسال الرمز </a>
                        </p>



                    </div><!-- submit-btn-container -->


                </div>




            </div><!-- form-container -->







        </div>

    </div> <!-- container -->

</div> <!-- main-page-wrapper -->


<?php include 'footer.php'; ?>