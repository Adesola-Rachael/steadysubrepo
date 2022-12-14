@extends('user.layouts.app')
@section('custom_style')
<!-- <link href="{{ asset('adminasset/assets/css/users/user-profile.css')}}" rel="stylesheet" type="text/css" /> -->
@endsection


@section('page_name',$pagename)
@section('main_content')

<div class="col-xl-8 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
    <div class="col-lg-12 layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Buy Airtime</h4>
                    </div>
                </div>
            </div>
            <form id='buy_airtime' method="post">
            
                <div class="widget-content col-md-12">
                    <p class="">Phone Number</p>
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-smartphone">
                                    <rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect>
                                    <line x1="12" y1="18" x2="12.01" y2="18"></line>
                                </svg>

                            </button>

                        </div>
                        <input required  type="tel" name='phone'  id='phone' pattern="[0-9]{11}"  class="form-control"
                            placeholder="Phone Number" aria-label="Phone Number">
                    </div>
                    <p class="">Select Network</p>
                     <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-smartphone">
                                    <rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect>
                                    <line x1="12" y1="18" x2="12.01" y2="18"></line>
                                </svg>

                            </button>

                        </div>
                        <select required minlength="10" type="number" name='network' id='network' class="form-control">
                            <option value=''>--select network--</option>
                            <option value='MTN'>MTN</option>
                            <option value='AIRTEL'>AIRTEL</option>
                            <option value='GLO'>GLO</option>
                            <option value='9MOBILE'>9MOBILE</option>
                            </select>
                    </div>
                    <small class='badge badge-success' id='phonesmall'></small>
                    <!-- <input type='hidden' value='{{ Auth::user()->id }}' id='user_id' /> -->
                    <p class="">Amount</p>
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
                        <input required type="number" min='100' name='amount'  id='amount' class="form-control"
                            placeholder="Airtime Amount" aria-label="Amount">

                    </div>
                    <p>Amount Payable:#<a id='discount'>0.00</a></p>
               

                    <button id='buy_btn' type="submit" class="btn btn-primary float-right">
                        Buy
                    </button>




                </div>
            </form>
        </div>

    </div>
</div>
<!-- <div> -->


          


@endsection



@section('custom_script')
<script>
     $(document).ready(function (){
        $("#buy_airtime").on("submit",async function(e) {
            e.preventDefault();
            
            if($("#phone").val().length ==11) {
        
                const willUpdate = await Swal.fire({
                    title: "Confirm Transaction"
                    , text: `Are you sure you want to purchase airtime on ` + $("#phone").val()
                    , icon: "warning"
                    , confirmButtonColor: "#DD6B55"
                    , confirmButtonText: "Yes!"
                    , showCancelButton: true
                    , buttons: ["Cancel", "Yes, Proceed"]
                });

                if (willUpdate.isDismissed == false) {
                    $("#buy_btn").attr('disabled',true)

                    $("#pinconfirm").modal('show')
                    
                }else{
                    Swal.fire("Transaction declined  :)");

                }
            }else{
                Swal.fire('Opps','Incorrect phone number','error')

            }
                
        });
        
    });

    function buy(){
            $.ajax({
            type: 'POST',
            dataType: 'json',
            data: {
                'phone': $('#phone').val(),
                'network': $('#network').val(),
                'amount': $('#amount').val(),
                "_token": "{{ csrf_token() }}",
            },
            url: '/postairtime',
            }).done(function(response) {
                if(response.status=='success'){
                
                    swal.fire('Success!', response.message)
                }else{
                    swal.fire('Error!', response.message)

                }
            });
      


        }

           
</script>

<script>
    // 
</script>
@endsection
