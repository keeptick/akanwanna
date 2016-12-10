
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <link rel="stylesheet" href="{{url()}}/booster/css/smartadmin-production.min.css">
    @include('includes.boosterhead')

</head>
<body>
@include('includes.boosterheader')
<div id="fh5co-main">
    <div class="fh5co-spacer fh5co-spacer-lg"></div>

    @yield('content')
</div>
@include('includes.boosterfooter')
<script src="{{url()}}/js/underscore.js"></script>
<script src="{{url()}}/js/numeral.min.js"></script>
<script src="{{url()}}/js/plugin/jquery-validate/jquery.validate.min.js"></script>
<!-- JQUERY MASKED INPUT -->
<script src="{{url()}}/js/plugin/masked-input/jquery.maskedinput.min.js"></script>
<script src="{{url()}}/js/plugin/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
<script>
    $(document).ready(function(){
        var $validator = $("#wizard-1").validate({
            rules: {
                waiver :{
                    required : true
                },
                term :{
                    required : true
                },
                member_type :{
                    required : true
                },
                email: {
                    required: true,
                    email: "Your email address must be in the format of name@domain.com"
                },
                first_name: {
                    required: true
                },
                last_name: {
                    required: true
                },

                occupation: {
                    required: true
                },
                employment_date: {required: true
                },
                phone_of_reporting_staff: {required: true
                },
                name_of_reporting_staff: { required :true
                },
                company:{required: true
                },
                password:{
                  required:true
                },
                username:{
                  required:true
                },
                city: { required: true
                },
                phone: {required: true,minlength: 8
                },

                nationality: {required: true
                },
                dob :{required :true},

                password : {
                    minlength : 5
                },
                repassword : {
                    required:true,
                    minlength : 5,
                    equalTo : "#password"
                }

            },

            messages: {
                waiver : "Please read and accept waiver",
                term:"Please read and accept our policy and terms",
                member_type : "Please select membership type",
                first_name:      "Please specify your name",
                last_name:       "Please specify your Last name",
                dob :"Please specify date of birth",

                state :"please specify sate",
                password :"please enter password",
                username:"please enter username",
                occupation : "Please specify ",
                city :"Please specify your city",
                company : "Please specify company",
                name_of_reporting_staff  : "Please specify name of staff to contact",
                phone_of_reporting_staff : "please specify phone number of staff you are reporting to",
                employment_segment : "please specify employment segment",
                employment_status : "please specify employment status",
                occupation : "please specify occupation",

                phone:{
                    required:   "Please specify your phone number",
                    minlength:  "Your phone number must be of a minimum of 8"
                },
                email: {
                    required:   "We need your email address to contact you",
                    email:      "Your email address must be in the format of name@domain.com"
                },

                nationality:     "Please specify nationality"

            },

            highlight: function (element) {
                $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
            },
            unhighlight: function (element) {
                $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
            },
            errorElement: 'span',
            errorClass: 'help-block',
            errorPlacement: function (error, element) {
                if (element.parent('.input-group').length) {
                    error.insertAfter(element.parent());
                } else {
                    error.insertAfter(element);
                }
            }
        });

        $(".bootstrapWizard li a").each(function(){
            $(this).on("mouseover",function(){
                $(this).removeAttr("data-toggle")
            }).on("mouseleave",function(){
                    $(this).attr("data-toggle", "tab");
                }).on("click",function(){
                    return false;
                })
        })
        $('#bootstrap-wizard-1').bootstrapWizard({
            'tabClass': 'form-wizard',
            'onNext': function (tab, navigation, index) {
                var $valid = $("#wizard-1").valid();
                if (!$valid) {
                    $validator.focusInvalid();
                    return false;
                } else {
                    $('#bootstrap-wizard-1').find('.form-wizard').children('li').eq(index - 1).addClass(
                        'complete');
                    $('#bootstrap-wizard-1').find('.form-wizard').children('li').eq(index - 1).find('.step')
                        .html('<i class="fa fa-check"></i>');
                }
            }
        });


            $("#waiver").click(function(){
                var rateM = $(".memberrate").val();
                var ch = $(".memberrate").attr("charges")
                var res = rateM.split(",");
                var charges = 0
                var sub = parseFloat(res[3])+parseFloat(charges)
                $("#memberitem").html(res[1]);
                $("#price").html(numeral(res[3]).format('0,0.00'));
                $("#subtotal").html(numeral(sub).format('0,0.00'));
                $("#charges").html(numeral(charges).format('0,0.00'))
                $("#total").html(numeral(sub).format('0,0.00'))
            })

        $("#payment_method_cheque,#payment_method_bacs").on("change",function(){
            var rateM = $(".memberrate").val();
            var ch = $(".memberrate").attr("charges")

            var res = rateM.split(",");
            var charges = (parseFloat(ch)/100) *  parseFloat(res[3])
            var sub = parseFloat(res[3])+parseFloat(charges)

            $("#memberitem").html(res[1]);
            $("#price").html(numeral(res[3]).format('0,0.00'));
            $("#subtotal").html(numeral(res[3]).format('0,0.00'));
            $("#charges").html(numeral(0).format('0,0.00'))
            $("#total").html(numeral(res[3]).format('0,0.00'))
        })

        $("#payment_method_paypal") // select the radio by its id
            .change(function(){ // bind a function to the change event
                if( $(this).is(":checked") ){ // check if the radio is checked
                    var rateM = $(".memberrate").val();
                    var ch = $(".memberrate").attr("charges")

                    var res = rateM.split(",");
                    var charges = (parseFloat(ch)/100) *  parseFloat(res[3])
                    var sub = parseFloat(res[3])+parseFloat(charges)

                    $("#memberitem").html(res[1]);
                    $("#price").html(numeral(res[3]).format('0,0.00'));
                    $("#subtotal").html(numeral(sub).format('0,0.00'));
                    $("#charges").html(numeral(charges).format('0,0.00'))
                    $("#total").html(numeral(sub).format('0,0.00'))
                }
            });



        $( "#dob" ).datepicker({
            showWeek: false,
            firstDay: 1,
            dateFormat: 'yy-mm-dd',
            yearRange: "1965:2010",
            changeYear: true,
            changeMonth: true,
            beforeShow: function(input) {
                setTimeout(function() {
                    var widgetHeader = $(input).datepicker("widget").find(".ui-datepicker-header");
                    var prevYrBtn = $('<button title="PrevYr">&lt;&lt; Prev Year</button>');
                    prevYrBtn.unbind("click").bind("click", function() {
                        $.datepicker._adjustDate($(input), -1, 'Y');

                    });
                    var nextYrBtn = $('<button title="NextYr">Next year &gt;&gt;</button>');
                    nextYrBtn.unbind("click").bind("click", function() {
                        $.datepicker._adjustDate($(input), +1, 'Y');

                    });
                    prevYrBtn.appendTo(widgetHeader);
                    nextYrBtn.appendTo(widgetHeader);

                }, 1);
            }
        });


        $( "#employment_date" ).datepicker({
            showWeek: false,
            firstDay: 1,
            dateFormat: 'yy-mm-dd',
            yearRange: "2000:2020",
            changeYear: true,
            changeMonth: true,
            beforeShow: function(input) {
                setTimeout(function() {
                    var widgetHeader = $(input).datepicker("widget").find(".ui-datepicker-header");
                    var prevYrBtn = $('<button title="PrevYr"><i class="fa fa-chevron-left"></i></button>');
                    prevYrBtn.unbind("click").bind("click", function() {
                        $.datepicker._adjustDate($(input), -1, 'Y');

                    });
                    var nextYrBtn = $('<button title="NextYr"><i class="fa fa-chevron-right"></i></button>');
                    nextYrBtn.unbind("click").bind("click", function() {
                        $.datepicker._adjustDate($(input), +1, 'Y');

                    });
                    prevYrBtn.appendTo(widgetHeader);
                    nextYrBtn.appendTo(widgetHeader);

                }, 1);
            }
        });

        $("#payment_date").datepicker({
            showWeek: false,
            firstDay: 1,
            dateFormat: 'yy-mm-dd',
            yearRange: "2010:2020",
            changeMonth: true
        })

        jQuery("input[name='payment_method']").on("click",function(){var a=jQuery(this).attr("id");jQuery(".payment_box").each(function(b,c){jQuery(c).hasClass(a)?jQuery(c).show():jQuery(c).hide()})})

    })
</script>
</body>
</html>