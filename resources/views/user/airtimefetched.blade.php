@extends('user.layouts.app')
@section('custom_style')
<link href="{{ asset('adminasset/assets/css/users/user-profile.css')}}" rel="stylesheet" type="text/css" />
@endsection


@section('page_name',$pagename)
@section('main_content')
<div id="content" class="main-content">

<div class="layout-px-spacing">


    <div class="row layout-top-spacing">


        <div class="layout-px-spacing">

            <div class="row invoice layout-top-spacing layout-spacing" id='invoice_page'>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                    <div class="doc-container">

                        <div class="row">

                            <div class="col-xl-9">

                                <div class="invoice-container">
                                    <div class="invoice-inbox">

                                        <div id="ct" class="">

                                            <div class="invoice-00001">
                                                <div class="content-section">

                                                    <div class="inv--head-section inv--detail-section">

                                                        <div class="row">
                                                            @foreach($airtimes as $airtime)
                                                            <div class="card-body m-2" style='background:#fff9ed'>

                                                                <div class="task-header ">
                                                                    @if($airtime->network == 'mtn')
                                                                    <img src='{{ asset('assets/img/mtn.png') }}' style='width:50px;height:50px' />
                                                                    @elseif($airtime->network =='glo')
                                                                    <img src='{{ asset('assets/img/glo.png') }}' style='width:50px;height:50px' />
                                                                    @elseif($airtime->network =='airtel')
                                                                    <img src='{{ asset('assets/img/airtel.png') }}' style='width:50px;height:50px' />
                                                                    @else
                                                                    <img src='{{ asset('assets/img/9mobile.png') }}' style='width:50px;height:50px' />
                                                                    @endif
                                                                       
                                                                    <span class='float-right'>Serial No:{{ $airtime->serial_no }}</span>

                                                                    <div class="">
                                                                        <h4 class="text-center">
                                                                            {{ $airtime->pin }}</h4>
                                                                    </div>

                                                                </div>

                                                            </div>
                                                         @endforeach

                                                        </div>

                                                    </div>



                                                    <div class="inv--total-amounts">

                                                        <div class="row mt-4">
                                                            <div class="col-sm-5 col-12 order-sm-0 order-1">
                                                            </div>
                                                            <div class="col-sm-7 col-12 order-sm-1 order-0">
                                                                <div class="text-sm-right">
                                                                    <div class="row">
                                                                        <div class="col-sm-8 col-7">
                                                                            <p class="">Sub Total: </p>
                                                                        </div>
                                                                        <div class="col-sm-4 col-5">
                                                                            <p class="">$3155</p>
                                                                        </div>
                                                                        <div class="col-sm-8 col-7">
                                                                            <p class="">Tax Amount: </p>
                                                                        </div>
                                                                        <div class="col-sm-4 col-5">
                                                                            <p class="">$700</p>
                                                                        </div>
                                                                        <div class="col-sm-8 col-7">
                                                                            <p class=" discount-rate">Discount :
                                                                                <span
                                                                                    class="discount-percentage">5%</span>
                                                                            </p>
                                                                        </div>
                                                                        <div class="col-sm-4 col-5">
                                                                            <p class="">$10</p>
                                                                        </div>
                                                                        <div
                                                                            class="col-sm-8 col-7 grand-total-title">
                                                                            <h4 class="">Grand Total : </h4>
                                                                        </div>
                                                                        <div
                                                                            class="col-sm-4 col-5 grand-total-amount">
                                                                            <h4 class="">$3845</h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="inv--note">

                                                        <div class="row mt-4">
                                                            <div class="col-sm-12 col-12 order-sm-0 order-1">
                                                                <p>Note: Thank you for doing Business with us.</p>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>

                                        </div>


                                    </div>

                                </div>

                            </div>

                            <div class="col-xl-3">

                                <div class="invoice-actions-btn">

                                    <div class="invoice-action-btn">

                                        <div class="row">

                                            <div class="col-xl-12 col-md-3 col-sm-6">
                                                <a id='printairtime' class="btn btn-secondary btn-print">Print</a>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                            </div>


                        </div>


                    </div>

                </div>
            </div>


        </div>



    </div>

</div>

@endsection

@section('custom_script')
    @include('user.includes.js_include.pin_js')
@endsection
