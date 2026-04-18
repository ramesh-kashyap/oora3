<html lang="en" class="h-100" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:title" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:image" content="https://fillow.dexignlab.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>Register</title>

 <style>
        input.responsive-phone-input {
            width: 400px;
        }

        @media (max-width: 576px) {
            input.responsive-phone-input {
                width: 340px !important;
            }
        }

    </style>

    <!-- FAVICONS ICON -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('')}}assets/img/logo/eco.png">
    <link href="{{asset('')}}users/css/style.css" rel="stylesheet">

</head>

<body class="vh-100" data-typography="poppins" data-theme-version="dark" data-layout="vertical" data-nav-headerbg="color_9" data-headerbg="color_9" data-sidebar-style="full" data-sibebarbg="color_9" data-sidebar-position="fixed" data-header-position="fixed" data-container="wide" direction="ltr" data-primary="color_9">
   
           <div class="container d-flex justify-content-center align-items-center min-vh-100">
  <div class="col-12 col-md-6 col-lg-4">

                                    <div class="text-center mb-3">
                                        <a href="{{route('index')}}"><img src="{{asset('')}}assets/img/logo/ecovillage.png" width="150" height="70" alt=""></a>
                                    </div>
                                    <h4 class="text-center mb-4">Sign up your account</h4>
                                    <form action="{{ route('registers') }}" method="post" style="margin-top:28px;">
                                        @csrf





                                        @php
                                        $sponsor = @$_GET['ref'];
                                        $pos = @$_GET['pos'];
                                        $name = \App\Models\User::where('username', $sponsor)->first();
                                        @endphp

                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Sponsor ID</strong></label>
                                            <input type="text" name="sponsor" class="form-control responsive-phone-input check_sponsor_exist" data-response="usernameExist" style="background:#222222;" value="{{ old('sponsor', request('ref')) }}" placeholder="Sponsor ID">
                                            <p id="usernameExist"><?= $name ? $name->name : '' ?></p>

                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Name</strong></label>
                                            <input type="text" name="name" class="form-control responsive-phone-input"style="background:#222222;" placeholder="enter your name">
                                        </div>
                                        <div class="mb-4">
                                            <label class="mb-1 text-dark">Phone</label><br>
                                            <input id="phone" type="tel" name="phone"
                                                class="form-control custom-phone-input responsive-phone-input"style="background:#222222;"
                                                placeholder="Enter your phone number"
                                                value="{{ old('email') }}" maxlength="10" required>
                                            <input type="hidden" id="country_code" name="country_code">
                                        </div>


                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" name="email" class="form-control responsive-phone-input"style="background:#222222;" placeholder="enter your email">
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" name="password" id="password" placeholder="enter your password"style="background:#222222;" class="form-control responsive-phone-input" value="">

                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1">
                                                <str`ong>Confirm Password</str>
                                            </label>
                                            <input type="password" name="password_confirmation" placeholder="enter your confirm password" style="background:#222222;" class="form-control responsive-phone-input" value="">

                                        </div>
                                        <div class="text-center ml-4">
                                            <button type="submit" style="background:#2d620b;align-item:center; width:50%;" class="btn btn-primary ">Sign me up</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3" >
                                        <p>Already have an account? <a class="text-primary" href="{{route('login')}}">Sign in</a></p>
                                    </div>
                               </div>
                               </div>
                        
              

    <!--**********************************
	Scripts
***********************************-->
    <!-- Required vendors -->
    <!-- <script src="{{asset('')}}users/vendor/global/global.min.js"></script>
    <script src="{{asset('')}}users/js/custom.min.js"></script>
    <script src="{{asset('')}}users/js/dlabnav-init.js"></script>
    <script src="{{asset('')}}users/js/styleSwitcher.js"></script> -->

</body>
@include('partials.notify')

<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script>
    $('.check_sponsor_exist').keyup(function(e) {
        var ths = $(this);
        var res_area = $(ths).attr('data-response');
        var sponsor = $(this).val();
        // alert(sponsor); 
        $.ajax({
            type: "POST",
            url: "{{ route('getUserName') }}",
            data: {
                "user_id": sponsor,
                "_token": "{{ csrf_token() }}",
            },
            success: function(response) {
                // alert(response);      
                if (response != 1) {
                    // alert("hh");
                    $(".submit-btn").prop("disabled", false);
                    $('#' + res_area).html(response).css('color', '#fff').css('font-weight', '800')
                        .css('margin-buttom', '10px');
                } else {
                    // alert("hi");
                    $(".submit-btn").prop("disabled", true);
                    $('#' + res_area).html("Sponsor ID Not exists!").css('color', 'red').css(
                        'margin-buttom', '10px');
                }
            }
        });
    });
</script>


<script>
    const input = document.querySelector("#phone");
    const iti = window.intlTelInput(input, {
        initialCountry: "in",
        separateDialCode: true,
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    });

    input.addEventListener("input", function() {
        const countryCode = iti.getSelectedCountryData().dialCode;
        document.querySelector("#country_code").value = "+" + countryCode;
    });

    // Also set on init (in case value pre-filled)
    document.addEventListener("DOMContentLoaded", function() {
        const countryCode = iti.getSelectedCountryData().dialCode;
        document.querySelector("#country_code").value = "+" + countryCode;
    });
</script>

</html>