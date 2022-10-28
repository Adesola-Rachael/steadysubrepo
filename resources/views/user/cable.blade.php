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
                            <option value='showmax'>SHOWMAX</option>


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
                        <input required type="number"  id='decoder_no' class="form-control"
                            placeholder="Decoder No" aria-label="Amount">

                    </div>
                    <!-- <div class='badge badge-success'>Total Amount Payable:#<a id='discount'></a></div> -->
                    
                    <!-- <div id='not_found' class='badge badge-danger'>Customer not found</div> -->

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



                    <button type="submit" id='btn_sub' id="" class="btn btn-primary float-right">
                        Verify
                    </button>

                    <button type="submit" id='btn_cable' id="proceed" class="btn btn-primary float-right">
                        Proceed
                    </button>




                </div>
            </form>
        </div>

    </div>
</div>
@endsection



@section('custom_script')
<script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                

            }
        });

    $.post("{{ route('cableprices') }}",function(response) {  
        var plan = '';

        if(data !== 'error') {
            console.log(response)
            $("#plan").empty()
            $.each(response.data, function( key, value ) {
                plan += `<option data-plan_id="${value.id}" data-amount="${value.set_price}" data-name='${value.attributes.name}' data-variation_code="${value.id}" value="${value.id}">
                ${value.attributes.cable_type}--₦${value.attributes.price.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")}
                        </option>`;
                        
            });
            $('#plan').append(plan);


        } else {
            Swal.fire('error','error while fetching data','error')
        }
    });
    // getCableDetails

    $(document).ready(function (){
        
        $("#cable_subscription").on("submit",async function(e) {
            e.preventDefault();

            swal.fire({
            title: `Processing Your Request... `,
            timer: 1000,
            });

            console.log('lickedhgdbvdh')
            $.ajax({
            type: 'POST',
            dataType: 'json',
            data: {
                'cable_type': $('#cable_type').val(),
                'decoder_no': $('#decoder_no').val(),
                "_token": "{{ csrf_token() }}",
            },
            url: '/getCableDetails',
            }).done(function(response) {
                
                if(response.status=='success'){
                    console.log(response)
                    
                    $('#show_details').show();

                    $('#customer_name').val(response.customer_name);
                    $('#bouquet').val(response.current_bouquet);

                    //  $('#subscription_type').show();

                    // customer_name
                    // bouquet
                  


                    // swal.fire('Success!', response.message)
                    
                    // $('.other_details').show();
                    // $('#pay_elect').show()
                    // $('#sub_btn').hide()


                    // $('#customer_name').show();
                    // $()
                    // var address=JSON.stringify(response.address);
                    // $('#customer_name').val(response.customer_name)
                    // // $('#address').show();
                    // $('#address').val(response.address);


                    // customer_name



                }else{
                    swal.fire('Error!', response.message)

                }
            });
        });
   });

    $(document).ready(function() { 
        $('#btn_cable').click(function() {
            $('form').submit();

         });
    });



    // $(document).ready(function (){
    // $("#cable_subscription").on("submit",async function(e) {
    //         e.preventDefault();
    //         console.log('welcome')
        
    //     const willUpdate = await Swal.fire({
    //         title: "Confirm Transaction"
    //         , text: `Are you sure you want to purchase airtime on ` + $("#phone").val()
    //         , icon: "warning"
    //         , confirmButtonColor: "#DD6B55"
    //         , confirmButtonText: "Yes!"
    //         , showCancelButton: true
    //         , buttons: ["Cancel", "Yes, Proceed"]
    //     });

    //     if (willUpdate.isDismissed == false) {
    //         // $("#confirmPin").modal('show')

    //     } else {

    //     }
           
    //     $.ajaxSetup({
    //         headers: {
    //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                

    //         }
    //     });


    //     $.ajax({
    //         type: 'POST',
    //         dataType: 'json',
    //         data: {
    //             'phone': $('#phone').val(),
    //             'network': $('#network').val(),
    //             // 'amount': $('#amount').val(),
                
    //         },
    //         url: '/buy_data',
    //         // }).done(function(response) {
    //         //     if(response.status==200){
    //         //         swal.fire('Success!', response.message)
    //         //     }else{
    //         //         swal.fire('Error!', response.message)

    //         //     }
    //         // });

    //     }).done(function(data) { 
    //             console.log(data)

    //     });


    //     });


        
    // });
</script>
@endsection