<!-- BEGIN CONTENT AREA   -->
       
        <div class='col-md-12' style='margin-top:25px'>
            @if(Session::has('message'))
            <div class='alert alert-success'>{{ Session::get('message') }}</div>
            @else
            
            @endif
            @if(Auth::user()->email_verified_at == null)
            <div class='alert alert-danger'>Please login to your email address to verify your account within the next 24hrs  <a href='/verification_resend' class='btn btn-danger'>Resend</a></div>
            @endif
        </div>

        <!-- <div class="layout-px-spacing"> -->
            
<div x-data="{ btn : 'wema'}">

        <div class='col-md-4' style='font-size:0px;background:transparent;color:#000C40;'>
            <a id='rolexbtn' x-on:click="btn='wema'" x-bind:class="btn==='wema'?'danger-b' :'secondary-b' "  class='btn m-0 border-radius-0'>ACCOUNT 1</a>
            <a id='wemabtn' x-on:click="btn='moniepoint'" x-bind:class="btn==='moniepoint'?'danger-b' :'secondary-b' "  class='btn m-0 border-radius-0'>ACCOUNT 2</a>
        </div>

<div class="row ">
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">

        <div class="widget widget-account-invoice-three">

            <div class="widget-heading" style='height:300px !important'>
                <div class="wallet-usr-info">
                    <div class="usr-name">
                        <span id='account_name'><img src="{{ asset('adminasset/assets/img/90x90.jpg')}}"
                            alt="admin-profile" class="img-fluid">
                        </span>
                    </div>
                </div>
                
                <div class="card-body skew-shadow">
                    <template x-if="btn === 'wema'">
                    <div>
                        <p class="text-white mt-2 mb-2 pb-2">
                            <div class="row">
                                <div class="me-4 col-sm-6">
                                    <!-- <p class="text-white text-sm opacity-8 mb-0">Account Name</p> -->
                                    <h6 class="text-white mb-0"> Account Number  </h6>
                                </div>
                                <div class="col-sm-6">
                                    <h6 class="text-white mb-0"> {{ auth()->user()->account_number2}}</h6>
                                </div>
                            </div>
                        </p>
                        <div class="d-flex">
                            <div class="d-flex">
                                <div class="row">
                                    <div class="me-4 col-sm-6">
                                    <p class="text-white mb-0">Account Name</p>
                                    <h6 class="text-white mb-0"> {{auth()->user()->account_name2 }} </h6>
                                    </div>
                                    <div class="col-sm-6">
                                    <p class="text-white mb-0">Bank Name</p>
                                    <h6 class="text-white mb-0"> {{ auth()->user()->bank_name2 }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </template>
                    <!-- account 2 -->
                    <template x-if="btn === 'moniepoint'">
                    <div>
                            <p class="text-white mt-2 mb-2 pb-2">
                                <div class="row">
                                    <div class="me-4 col-sm-6">
                                        <!-- <p class="text-white text-sm opacity-8 mb-0">Account Name</p> -->
                                        <h6 class="text-white mb-0"> Account Number  </h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <h6 class="text-white mb-0"> {{ auth()->user()->account_number2}}</h6>
                                    </div>
                                </div>
                            </p>
                            <div class="d-flex">
                                <div class="d-flex">
                                <div class="row">
                                    <div class="me-4 col-sm-6">
                                        <p class="text-white text-sm opacity-8 mb-0">Account Name</p>
                                        <h6 class="mb-0 text-white"> {{ auth()->user()->account_name1}}</h6>
                            
                                    </div>
                                    <div class="me-4 col-sm-6">
                                        <p class="text-white text-sm opacity-8 mb-0">Bank Name</p>
                                        <h6 class="text-white mb-0"> {{ auth()->user()->bank_name1 }}</h6>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </template >
               
                </div> 
            </div>

            <div class="widget-amount">

                <div class="w-a-info funds-received">
                    <span>Funded <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-chevron-up">
                            <polyline points="18 15 12 9 6 15"></polyline>
                        </svg></span>
                    <p> ₦{{ number_format(Auth::user()->balance,2) }}</p>
                </div>

                <div class="w-a-info funds-spent">
                    <span>Spent <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-chevron-down">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg></span>
                    <p> ₦{{ number_format(Auth::user()->spent,2) }}</p>
                </div>
            </div>

            <div class="widget-content">

                <div class="bills-stats text-center" >
                    <a href='/fund-wallet'  ><span style="width:130px; height:40px; font-size:15px; font-weight:bolder;">Fund Wallet</span></a>
                </div>
                <div class="wallet-balance">
                    <p>Wallet Balance</p>
                    <h5 class=""><span class="w-currency"> ₦</span>{{
                        number_format(Auth::user()->balance,2) }}</h5>
                </div>
                <br>
               
            </div>

        </div>
    </div>

    <!-- column for main content -->
    <!-- main content route(buyartime,cable,exam,buydatadashboard,electricity,etc) -->
                
                    