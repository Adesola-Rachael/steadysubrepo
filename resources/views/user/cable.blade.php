@extends('user.layouts.app')
@section('custom_style')
<!-- add style -->

@endsection


@section('page_name',$pagename)
@section('main_content')
<div class="col-xl-8 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
    <div class="col-lg-12 layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Cable Subscription</h4>
                    </div>
                </div>
            </div>
            <form id='cable_subscription'>
                <div class="widget-content col-md-12">
                    <p class="">Select Cable Type</p>
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-credit-card">
                                    <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                                    <line x1="1" y1="10" x2="23" y2="10"></line>
                                </svg>

                            </button>

                        </div>
                        <select required id='cable_type' class="form-control" placeholder="Phone Number">
                            <option value=''>--select cable type--</option>
                            <option value='dstv'>DSTV</option>
                            <option value='gotv'>GOTV</option>
                            <option value='startimes'>STARTIMES</option>

                        </select>


                    </div>

                    <p class="">Plan</p>
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-credit-card">
                                    <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                                    <line x1="1" y1="10" x2="23" y2="10"></line>
                                </svg>

                            </button>

                        </div>
                        <select required id='plan' class="form-control">
                            <option value=''>--SELECT PLAN--</option>


                        </select>
                    </div>
                    <p class="">Decoder No</p>
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-credit-card">
                                    <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                                    <line x1="1" y1="10" x2="23" y2="10"></line>
                                </svg>

                            </button>

                        </div>
                        <input required type="number" min='100' id='decoder_no' class="form-control"
                            placeholder="Decoder No" aria-label="Amount">

                    </div>
                    <div class='badge badge-success'>Total Amount Payable:#<a id='discount'></a></div>
                    
                    <div id='not_found' class='badge badge-danger'>Customer not found</div>
                    <div id='show_details' style='display:none'>
                        <p class="">Customer Name</p>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-credit-card">
                                        <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                                        <line x1="1" y1="10" x2="23" y2="10"></line>
                                    </svg>

                                </button>

                            </div>
                            <input readonly required  id='customer_name' class="form-control"
                                aria-label="Amount">

                        </div>

                        <p class="">Current Bouquet</p>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-credit-card">
                                        <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                                        <line x1="1" y1="10" x2="23" y2="10"></line>
                                    </svg>

                                </button>

                            </div>
                            <input readonly required id='bouquet' class="form-control"
                                aria-label="Amount">

                        </div>

                        <div class="form-check">
                            <input checked class="form-check-input" value='renew' type="radio" name="subscription_type" id="subscription_type">
                            <label class="form-check-label">
                              Renew
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" value='change' name="subscription_type" id="subscription_type">
                            <label class="form-check-label">
                              Change Plan
                            </label>
                          </div>
                          <input type='hidden' id='user_phone' value='{{ Auth::user()->phone }}'/>
                          <input type='hidden' id='user_id' value='{{ Auth::user()->id }}'/>



                    </div>



                    <button type="submit" id='btn_sub' class="btn btn-primary float-right">
                        Verify
                    </button>




                </div>
            </form>
        </div>

    </div>
</div>
@endsection



@section('custom_script')
<!-- write script -->
@endsection