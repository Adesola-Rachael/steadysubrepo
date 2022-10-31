
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Steadysub | @yield('page_name')</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <link href="{{ asset('adminasset/assets/css/loader.css')}}" rel="stylesheet" type="text/css" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="{{ asset('adminasset/assets/js/loader.js')}}"></script>
     <!-- BEGIN GLOBAL MANDATORY STYLES  -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ asset('adminasset/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('adminasset/assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
     <!-- END GLOBAL MANDATORY STYLES  -->

     <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES  -->
    <link href="{{ asset('adminasset/plugins/apex/apexcharts.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('adminasset/assets/css/dashboard/dash_1.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('superasset/plugins/table/datatable/datatables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('superasset/plugins/table/datatable/dt-global_style.css')}}">
    
      <!-- welwelwel -->
      @livewireStyles() 
      @livewireScripts()
      <script src="{{asset('js/alpine.js')}}" defer></script>
   <style>
        .primary-b {

            background-color: #000C40 !important;
            color: #fff !important;
        }

        .secondary-b {

            background: #fff;
            color: #000C40;
        }

        .border-radius-0 {
            border-radius: 0;
        }
        .danger-b{
        background-color:#4A274F !important;
            color: #fff !important;
        }

        .loading {
            opacity: 0.4;
            z-index: 88;

        }

        .spinner-loading.spinner-outer {
            position: absolute;
            z-index: 9999;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
        }

        .spinner-inner {

            position: absolute;
            top: 50%;
            left: 50;
            margin: -0.625rem 0 0 -1.875rem;
            text-align: center;
        }


        /*Others*/

        @media only screen and (min-width: 600px) {
            #sideright {
                right: 0%;
                margin-right: 0px;
                position: absolute;
            }
        }

        .media-scroller {
            --_spacer: var(--size-2);
            display: grid;
            gap: var(--_spacer);
            grid-auto-flow: column;
            grid-auto-columns: 21%;
            */ padding: 0 var(--_spacer) var(--_spacer);

            overflow-x: auto;
            overscroll-behavior-inline: contain;
            margin-bottom: 15px
        }

        .media-scroller--with-groups {
            grid-auto-columns: 40%;
        }

        .media-group {
            display: grid;
            gap: var(--_spacer);
            grid-auto-flow: column;
        }

        .media-element {
            display: grid;
            grid-template-rows: min-content;
            gap: var(--_spacer);
            padding: var(--_spacer);
            background: var(--surface-2);
            border-radius: var(--radius-2);
            box-shadow: var(--shadow-3);
            width: 230px !important;
            height: 100px !important;
            margin-right: 15px;
            background-image: url('../assets/img/curved-images/curved0.jpg');
            background-position-y: 50%;
            background-image: linear-gradient(310deg, #000c40 0%, #3cef6a 100%);
        }

        .snaps-inline {
            scroll-snap-type: inline mandatory;
            scroll-padding-inline: var(--_spacer, 1rem);
        }


        /* general styling */


        .flow {
            display: grid;
            gap: var(--size-2);
        }

        a:visited {
            color: white;
        }

        .numbers {
            font-weight: 1000;
        }

        .scroll-icon {
            font-size: 22px;
        }

        .height-100 {
            height: 50vh
        }

        .card h6 {
            color: #000c40;
            font-size: 20px
        }


        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            margin: 0
        }

        .card-2 {
            background-color: #fff;
            padding: 10px;
            width: 350px;
            height: 50px;
            bottom: -50px;
            left: 20px;
            position: absolute;
            border-radius: 5px
        }

        .card-2 .content {
            margin-top: 50px;
            color: black;
        }

        .card-2 .content a {
            color: #000c40;
        }

        .form-control:focus {
            box-shadow: none;
            border: 2px solid #000c40;
        }

        .validate {
            border-radius: 20px;
            height: 40px;
            background-color: #000c40;
            border: 1px solid #000c40;
            width: 140px
        }


        #btn-back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: block;
        } 
        .bankdetails{
        margin:5px;
        padding:5px;
        
        }

    </style>

<!-- Add other styles that doesn't have effect on other pages -->
@section('custom_style')

@show
</head>
<body>
<!-- BEGIN LOADER  -->
    <!-- <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div> -->
      <!-- END LOADER  -->
@include('user.includes.section_include.nav')   
<div class="sub-header-container">
        <header class="header navbar navbar-expand-sm">
            <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a>

            <ul class="navbar-nav flex-row">
                <li>
                    <div class="page-header">

                        <nav class="breadcrumb-one" aria-label="breadcrumb">

                            <div class="col-md-12">
                                <div class="d-flex justify-content-between align-items-center breaking-news bg-white">
                                    <div
                                        class="justify-content-center py-2 text-white px-1 news">
                                        <span><strong class='btn btn-primary btn-sm'
                                                style='background-color:#4A274F !important'>INFO</strong></span>
                                    </div>
                                    <marquee class="news-scroll" behavior="scroll" direction="left"
                                        onmouseover="this.stop();" onmouseout="this.start();">

                                        <span>Welcome to the Steadysub,</span>
                                        @foreach($alerts as $alert)
                                        <span>{{ $alert->title }}.</span>
                                        @endforeach
                                    </marquee>
                                </div>
                            </div>
                        </nav>

                    </div>
                </li>
            </ul>
            
        </header>
    </div>
  

<div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

    @include('user.includes.section_include.aside')  
    <div id="content" class="main-content">
    @include('user.includes.section_include.account_details')

    <!-- section to add other subroutines -->
    @section('main_content')

    @show
    
    
   

                

    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="row widget-statistic">
                        
                           <div class="col-6 col-sm-4 col-lg-3 mb-3">
                            <a href="/buyairtime">
                                <div class="card">
                                    <div class="card-body p-3 text-center">
                                        <span style="font-size: 30px;">
                                        <!-- <img src="{{asset('frontend/img/growth/images/gettingstarted.png')}}" class="img-fluid animated rounded" alt=""> -->

                                            <img src="{{asset('assets/img/buyairtime.svg')}}" height="50px">
                                        </span>
                                        <div class="h6 m-2 text-dark">Buy Airtime</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3 mb-3">
                            <a href="/buydata">
                                <div class="card">
                                    <div class="card-body p-3 text-center">
                                        <span style="font-size: 30px;">
                                            <img src="/assets/img/buydata.svg" height="50px">
                                        </span>
                                        <div class="h6 m-2 text-dark">Buy Data</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3 mb-3">
                            <a href="/electricity">
                                <div class="card">
                                    <div class="card-body p-3 text-center">
                                        <span style="font-size: 30px;">
                                            <img src="/assets/img/electricity.svg" height="50px">
                                        </span>
                                        <div class="h6 m-2 text-dark">Electricity Bills</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3 mb-3">
                            <a href="/cable">
                                <div class="card">
                                    <div class="card-body p-3 text-center">
                                        <span style="font-size: 30px;">
                                            <img src="/assets/img/cable.svg" height="50px">
                                        </span>
                                        <div class="h6 m-2 text-dark">Cable Subscription</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3 mb-3">
                            <a href="/fetchairtime">
                                <div class="card">
                                    <div class="card-body p-3 text-center">
                                        <span style="font-size: 30px;">
                                            <img src="/assets/img/airtimepin.svg" height="50px">
                                        </span>
                                        <div class="h6 m-2 text-dark">Airtime Pin</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3 mb-3">
                            <a href="/referral">
                                <div class="card">
                                    <div class="card-body p-3 text-center">
                                        <span style="font-size: 30px;">
                                            <img src="/assets/img/referral.png" height="50px">
                                        </span>
                                        <div class="h6 m-2 text-dark">My Referrals</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3 mb-3">
                            <a href="/exam">
                                <div class="card">
                                    <div class="card-body p-3 text-center">
                                        <span style="font-size: 30px;">
                                            <img src="/assets/img/exam.svg" height="50px">
                                        </span>
                                        <div class="h6 m-2 text-dark">Exam Pins</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>



            </div>
        </div>


    </div>
  
 <div class="footer-wrapper">
    <div class="footer-section f-section-1">
        <p class="">Copyright ©
            <?php echo Date('Y')?> Steadysub. Developed by <a target="_blank" href="https://veenodetech.com">Veenode Technology
                Ltd.</a>, All
            rights reserved.
        </p>
    </div>
             
</div>

</div>
<!-- modal for pin confirmation -->

<div class="modal fade" id="pinconfirm" class="" tabindex="-1" role="dialog" aria-labelledby="confirmPinTitle"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-cente#ec4d37" role="document">
                    <div class="modal-content" style="margin:0px;">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">PIN VALIDATION </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                         <form id="confirm_transaction_pin" >
                            <!-- {{ csrf_field() }} -->

                            <div class="modal-body">
                                <div class="container d-flex justify-content-center align-items-center">
                                    <div class="position-relative">
                                        {{-- <div class="card p-2 text-center"> --}}
                                            <h6>Please input your transaction pin</h6>
                                        
                                            <div id='otp' class="inputs d-flex flex-row justify-content-center mt-2">
                                                <input class="m-2 text-center form-control rounded" type="number" id="first"
                                                    maxlength="1" />
                                                <input class="m-2 text-center form-control rounded" type="number"
                                                    id="second" maxlength="1" />
                                                <input class="m-2 text-center form-control rounded" type="number" id="third"
                                                    maxlength="1" />
                                                <input class="m-2 text-center form-control rounded" type="number"
                                                    id="fourth" maxlength="1" />
                                            </div>
                                            <div class="mt-4"> <button type="submit" 
                                                    class="btn btn-danger px-4 validate">Validate</button> </div>

                                        {{-- </div> --}}

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- modal for pin confirmation -->

            <!-- modal for pin set up -->
            <div class="modal fade" id="pinValidation" tabindex="-1" role="dialog" aria-labelledby="pinValidationTitle"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-center" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">SET UP YOUR PIN</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form id='submitpin'>
                        <div class="modal-body">
                            <div class="container d-flex justify-content-center align-items-center">
                                <div class="position-relative">
                                    <div class="card p-2 text-center">
                                        <h6>Please set up your transaction pin</h6>
                                        <div> </div>
                                        
                                            <div id='potp' class="inputs d-flex flex-row justify-content-center mt-2">
                                                <input class="m-2 text-center form-control rounded" type="number"
                                                    id="pfirst" maxlength="1" />
                                                <input class="m-2 text-center form-control rounded" type="number"
                                                    id="psecond" maxlength="1" />
                                                <input class="m-2 text-center form-control rounded" type="number"
                                                    id="pthird" maxlength="1" />
                                                <input class="m-2 text-center form-control rounded" type="number"
                                                    id="pfourth" maxlength="1" />
                                            </div>
                                            <input class='form-control' disabled id='pin_email' type='email'
                                                value='{{ Auth::user()->email }}'>
                                            <div class="mt-4"> <button type='submit'
                                                    class="btn btn-danger px-4 validate">Submit</button> </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        </form>


                    </div>
                </div>
            </div>

            <!-- modal for pin set up -->


<script>
document.addEventListener("DOMContentLoaded", function(event) {

function OTPInput() {
const inputs = document.querySelectorAll('#otp > *[id]');
for (let i = 0; i < inputs.length; i++) { inputs[i].addEventListener('keydown', function(event) { if (event.key==="Backspace" ) { inputs[i].value='' ; if (i !==0) inputs[i - 1].focus(); } else { if (i===inputs.length - 1 && inputs[i].value !=='' ) { return true; } else if (event.keyCode> 47 && event.keyCode < 58) { inputs[i].value=event.key; if (i !==inputs.length - 1) inputs[i + 1].focus(); event.preventDefault(); } else if (event.keyCode> 64 && event.keyCode < 91) { inputs[i].value=String.fromCharCode(event.keyCode); if (i !==inputs.length - 1) inputs[i + 1].focus(); event.preventDefault(); } } }); } } OTPInput(); });
</script>

<script>
document.addEventListener("DOMContentLoaded", function(event) {

function POTPInput() {
const pinputs = document.querySelectorAll('#potp > *[id]');
for (let i = 0; i < pinputs.length; i++) { pinputs[i].addEventListener('keydown', function(event) { if (event.key==="Backspace" ) { pinputs[i].value='' ; if (i !==0) pinputs[i - 1].focus(); } else { if (i===pinputs.length - 1 && pinputs[i].value !=='' ) { return true; } else if (event.keyCode> 47 && event.keyCode < 58) { pinputs[i].value=event.key; if (i !==pinputs.length - 1) pinputs[i + 1].focus(); event.preventDefault(); } else if (event.keyCode> 64 && event.keyCode < 91) { pinputs[i].value=String.fromCharCode(event.keyCode); if (i !==pinputs.length - 1) pinputs[i + 1].focus(); event.preventDefault(); } } }); } } POTPInput(); });
</script>



<!-- main page script -->
<script src="{{ asset('adminasset/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
<script src="{{ asset('adminasset/bootstrap/js/popper.min.js')}}"></script>
<script src="{{ asset('adminasset/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('adminasset/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{ asset('adminasset/assets/js/app.js')}}"></script>


<script src="{{ asset('adminasset/plugins/highlight/highlight.pack.js')}}"></script>

<script>
$(document).ready(function() {
    App.init();
});
</script>
<script src="{{ asset('adminasset/assets/js/custom.js')}}"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ asset('adminasset/assets/js/scrollspyNav.js')}}"></script>
<script src="{{ asset('adminasset/plugins/jquery-step/jquery.steps.min.js')}}"></script>
<script src="{{ asset('adminasset/plugins/jquery-step/custom-jquery.steps.js')}}"></script>
<script src='cdn/sweetalert.min.js'></script>
<!-- To add other script that doesn't have effect on other pages -->

@include('user.includes.js_include.pin_js') 

@yield('custom_script')

@stack('script')
