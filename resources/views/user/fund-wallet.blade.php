@extends('user.layouts.app')
@section('custom_style')
@endsection


@section('page_name',$pagename)
@section('main_content')
<div class="col-xl-8 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
          

       
            <div class="col-md-12">

                <div class="card">

                    <div class='card-body'>
                        <form method="POST" accept-charset="UTF-8" class="form-horizontal" role="form" action="{{url('pay')}}">

                            <h4 class="card-title"><strong>Fund with Paystack</strong></h4>
                            @if(session('success'))
                            <div class="alert primary-b alert-dismissible fade show" role="alert">
                                <span class="text-white">{{session('success')}}</span>
                            </div>
                            @endif
                            @if(session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <span class="text-white">{{session('error')}}</span>
                            </div>
                            @endif

                            <div class="widget-content pt-4">
                                <p class="">Amount</p>
                                <div class="input-group mb-4" x-data="{amount:100}">
                                    <input required type="number" min='100' id='u_amount' class="form-control" placeholder="Amount" aria-label="Amount" x-model="amount">
                                    <input type="hidden" name="email" value="{{ auth()->user()->email }}"> {{-- required --}}
                                    <input type="hidden" name="orderID" value="345">
                                    <input type="hidden" name="quantity" value="1">
                                    <input type="hidden" name="amount" x-bind:value="amount>2500?((0.015*amount)+100+parseInt(amount))*100:((0.015*amount)+parseInt(amount))*100">

                                    <input type="hidden" name="currency" value="NGN">
                                    <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}">

                                    @csrf




                                </div>



                                <button type="submit" class="btn btn-primary float-right">
                                    Fund
                                </button>




                            </div>
                        </form>
                    </div>


                </div>

            </div>
    

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"><strong>MANUAL FUNDING</strong></h4>
                            <p>You can deposit or transfer fund to our account stated below.
                                Use the account name you made the transfer with as the depositor's name. Your account
                                will be funded as soon as your payment is confirmed.
                            </p>
                        </div>
                        <div class="card-body">
                            <div class="alert alert-success" role="alert">
                                <p><strong> Account No: 1025234678</strong></p>
                                <p><strong>Account name: STEADYSUB TECHNOLOGIES</strong></p>
                                <p><strong>Bank Name: UBA</strong></p>

                            </div>
                            <form id='manual_funding' method="post" class="form">
                                {{ csrf_field() }}
                            
                              
                                <div class="form-group row mb-0" style="margin-bottom: 0;">
                                    <div class="col-md-6">
                                        <label for="">Depositor's name</label>
                                        <div class="input-group">
                                            <input type="text" pattern="[a-zA-Z'-'\s]*"   id='name' class="form-control " id="name" name="name" placeholder="Enter the Depositor name">
                                                                                        </div>
                                        <label for="bank-name">Bank name</label>
                                        <div class="input-group">
                                            <input type="text" id='bank_name' pattern="[a-zA-Z'-'\s]*" class="form-control " name="bank_name" placeholder="Enter the Bank">
                                        </div>
                                        <label for="bank-name">Account Number</label>
                                        <div class="input-group">
                                            <input type="number" id='account_number'   class="form-control " name="account_number" placeholder="Enter the Bank">
                                        </div>
                                        <label for="amount">Amount</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">₦</span>
                                            </div>
                                            <input type="number" id='amount' class="form-control" name="amount" placeholder="Enter the Amount">
                                                                                        </div>
                                    </div>
                                </div>
                                <small class="text-danger">NOTE: Your account will be suspended if you submit the
                                    form without making any transfer of money.
                                    <br> There is also a charge of NGN50 on any amount sent.
                                </small>
                                <div class="funding-button mt-3">
                                    <button class="btn btn-primary btn-block my-btn" id="" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>

            </div>

@endsection

@section('custom_script')
<script>
$("#manual_funding").on('submit',async function(e) {
    e.preventDefault();
    Swal.fire('Processing,please wait...')
    // var image = $('#image')[0].files;
    var fd = new FormData;
    
    fd.append('name', $("#name").val());
    fd.append('bank_name', $("#bank_name").val());
    fd.append('amount', $("#amount").val());
    fd.append('account_number', $("#account_number").val());
    
    //
    // var data=$("#manual_funding").serialize();
     console.log(data)
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        type: 'POST',
        url: "{{route('manualfunding')}}",
        data: fd,
        cache: false,
        contentType: false,
        processData: false,
        success: function($data) {
            console.log('the data', $data)
            swal.close()
            
            Swal.fire('success', 'Request submitted, please wait for the admin to approve your transaction!', 'success')
            // window.location.reload()

        },
        error: function(data) {
            console.log(data)
            swal.close()
            Swal.fire('Opps!', 'Something went wrong, please try again later or contact the administrator', 'error')
        }
    })
})
        </script>

@endsection
