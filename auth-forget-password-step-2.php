<?php include 'header.php'; ?>

<div class="main-page-wrapper">

    <div class="container">

        <div class="page-content-75">

            <div class="title-wrapper mb-4">
                <h2 class="title bold"> تم إرسال رمز التحقق إلى البريد الإلكتروني </h2>
            </div>





            <div class="form-container mb-0">

                <p class="lead mb-2"> أدخل الرمز المكون من أربعة أرقام الذى أرسلناه   </p>

                <div class="mb-3 activate-inputs-container">
 

                    <div class="activate-inputs">
                        <input class="num1" type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" />
                        <input class="num2" type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" />
                        <input class="num3" type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" />
                        <input class="num4" type="text" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" />
                    </div><!-- activate-inputs -->

                    <form action="test.php" id="activate-code" class="d-none">
                        <input id="activate-code-input" name="code" type="text">
                    </form>

                </div>

            </div><!-- form-container -->

        </div>

    </div> <!-- container -->

</div> <!-- main-page-wrapper -->


<?php include 'footer.php'; ?>