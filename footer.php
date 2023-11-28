<footer class="footer-wrapper">

    <div class="footer-body-wrapper">
        <div class="container">
            <div class="row">

                <div class="col-lg-8">

                    <div class="row">

                        <div class="col-lg-4">

                            <div class="widget-wrapper">
                                <img src="assets/images/logo-white.png" class="img-fluid logo" alt="logo">
                                <p> يقع المقر الرئيس للمعرض والمتحف الدولي للسيرة النبوية والحضارة الإسلامية، في
                                    الجهة الجنوبية من الروضة المباركة بجوار المسجد النبوي الشريف بالمدينة
                                    المنورة في
                                    المملكة العربية السعودية </p>
                            </div> <!-- widget-wrapper -->
                        </div> <!-- col-lg-4 -->

                        <div class="col-lg-4">
                            <div class="widget-wrapper">
                                <h5 class="widget-title mb-3"> معلومات عنا </h5>
                                <ul class="reset-ul">
                                    <li> <a href="#"> من نحن </a> </li>
                                    <li> <a href="#"> الشروط والأحكام </a> </li>
                                    <li> <a href="#"> الشكاوي </a> </li>
                                    <li> <a href="#"> الاسئلة الشائعة </a> </li>
                                </ul>
                            </div> <!-- widget-wrapper -->
                        </div> <!-- col-lg-4 -->

                        <div class="col-lg-4">
                            <div class="widget-wrapper">
                                <h5 class="widget-title mb-3"> عن الموقع </h5>
                                <ul class="reset-ul">
                                    <li> <a href="#"> الرئيسية </a> </li>
                                    <li> <a href="#"> احجز تذكرتك </a> </li>
                                    <li> <a href="#"> عن المتحف </a> </li>
                                    <li> <a href="#"> تواصل معنا </a> </li>
                                </ul>
                            </div> <!-- widget-wrapper -->
                        </div> <!-- col-lg-4 -->

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="copyrights-wrapper">
        <p class="text-center"> جميع الحقوق محفوظة لموقع المعرض والمتحف الدولي للسيرة النبوية والحضارة الإسلامية
            © 2023 </p>
    </div><!-- copyrights-wrapper -->


</footer>

</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- swiper -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


<!-- tel input -->
<script src="assets/vendors/tel-input/js/intlTelInput.min.js"></script>


<script src="assets/vendors/flatpickr/flatpickr_ar.js"></script>
<script src="assets/vendors/flatpickr/flatpickr.min.js"></script>


<script src="assets/vendors/select2/select2.full.min.js"></script>


<!-- moment hijri -->
<script src="assets/vendors/bootstrap-hijri-datepicker/src/js/momentjs.js"></script>
<script src="assets/vendors/bootstrap-hijri-datepicker/src/js/moment-with-locales.js"></script>
<script src="assets/vendors/bootstrap-hijri-datepicker/src/js/moment-hijri.js"></script>
<script src="assets/vendors/bootstrap-hijri-datepicker/src/js/bootstrap-hijri-datetimepicker.js"></script>
<!-- custom -->
<script src="assets/js/custom.js"></script>

<script>
    $(document).ready(function() {
        if (window.location.href.indexOf("home.php") > -1) {
            console.log("your url contains the name home.php");
            $(".body-wrapper").addClass("homepage")
        }
    });

    var input = document.querySelector("#phone");
    if ($('.phone').length > 0) {
        window.intlTelInput(input, {
            // allowDropdown: true,
            // autoInsertDialCode: true,
            // autoPlaceholder: "on",
            // dropdownContainer: document.body,
            // excludeCountries: ["us"],
            // formatOnDisplay: false,
            // geoIpLookup: function(callback) {
            //   fetch("https://ipapi.co/json")
            //     .then(function(res) { return res.json(); })
            //     .then(function(data) { callback(data.country_code); })
            //     .catch(function() { callback("us"); });
            // },
            // hiddenInput: "full_number",
            initialCountry: "sa",
            // localizedCountries: { 'de': 'Deutschland' },
            // nationalMode: false,
            // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
            // placeholderNumberType: "MOBILE",
            preferredCountries: ['sa'],
            // separateDialCode: true,
            showFlags: true,
            utilsScript: "assets/vendors/tel-input/js/utils.js"
        });

    }

    // Top Header cart popup --> increaseCount and decreaseCount START 
    let increaseCount = (event, b) => {
        var input = b.previousElementSibling;
        var value = parseInt(input.value, 10);

        value = isNaN(value) ? 0 : value;
        value++;
        input.value = value;
    }

    // Top Header cart popup --> increaseCount and decreaseCount END
    let decreaseCount = (event, b) => {
        var input = b.nextElementSibling;
        var value = parseInt(input.value, 10);
        if (value > 1) {
            value = isNaN(value) ? 0 : value;
            value--;
            input.value = value;
        }
        calcItemsPrice();
    }

    $(".date").flatpickr();


    $(document).ready(function() {
        $('.select2').select2();
    });









    //////////// Activate page start

    $(document).on("click", ".activate-inputs input", function() {
        $(this).select();
    })

    $(".activate-inputs input").on("keyup", function() {

        if ($(this).val()) {
            $(this).next().focus();
            $(this).next().select();
        }
        
        if ($(this).index() == 3) {
            $(this).blur();

            let activateCode = '';

            $(".activate-inputs input").each(function() {
                // console.log($(this).val());
                activateCode += $(this).val();
            });

            $("#activate-code-input").val(activateCode);

            setTimeout(() => {
                $("#activate-code").submit();
            }, 200);

        }
    })

    //////////// Activate page end
</script>
</body>

</html>