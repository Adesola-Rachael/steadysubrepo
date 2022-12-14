@extends('user.layouts.app')
@section('custom_style')
    
@endsection

@section('page_name',$pagename)

@section('main_content')
    <div class="col-xl-8 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
        <div class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Electricity Bills</h4>
                        </div>
                    </div>
                </div>
                <form id='electricity_subscription' class="elect_sub">
                    <div class="widget-content col-md-12">
                        <p class="">Select Service Type</p>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <button class="btn btn-primary dropdown-toggle" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-settings">
                                        <circle cx="12" cy="12" r="3"></circle>
                                        <path
                                            d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                        </path>
                                    </svg> </button>

                            </div>
                            <select required id='service_type' class="form-control" placeholder="">
                                <option value=''>--select service type--</option>
                                <option value='abuja-electric'>Abuja Electricity</option>
                                <option value='eko-electric'>Eko Electricity</option>
                                <option value='ibadan-electric'>Ibadan Electricity</option>
                                <option value='jos-electric'>Jos Electricity</option>
                                <option value='ikeja-electric'>Ikeja Electricity</option>
                                <option value='kaduna-electric'>Kaduna Electricity</option>
                                <option value='kano-electric'>Kano Electricity</option>
                                <option value='portharcourt-electric'>Portharcourt Electricity</option>
                                
                            </select>


                        </div>

                        <p class="">Select Meter Type</p>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <button class="btn btn-primary dropdown-toggle" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-settings">
                                        <circle cx="12" cy="12" r="3"></circle>
                                        <path
                                            d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                        </path>
                                    </svg> </button>

                            </div>
                            <select required id='meter_type' class="form-control" placeholder="Phone Number">
                                <option value=''>--select meter type--</option>
                                <option value='prepaid'>Prepaid</option>
                                <option value='postpaid'>Postpaid</option>
                                
                            </select>


                        </div>
                        <p class="">Meter No</p>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <button class="btn btn-primary dropdown-toggle" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-settings">
                                        <circle cx="12" cy="12" r="3"></circle>
                                        <path
                                            d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                        </path>
                                    </svg> </button>

                            </div>
                            <input type='hidden' value='{{ Auth::user()->id }}' id='user_id'>
                            <input required type="number" minlength='9' id='meter_no' class="form-control"
                                placeholder="Meter No" aria-label="">

                        </div>
                       

                        <!-- <div id='elec_status' class='badge badge-danger'>Details not found</div> -->
                        <button id='sub_btn' type="submit" class="btn btn-primary float-right">
                            Verify
                        </button>
                    </form>
                    <form id ="amount">
                        
                        <div class='other_details mb-4' style=''>
                            
                            <p class="">Amount</p>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <button class="btn btn-primary dropdown-toggle" type="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-settings">
                                            <circle cx="12" cy="12" r="3"></circle>
                                            <path
                                                d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                            </path>
                                        </svg> </button>

                                </div>
                                <input required type="number" name="amount" placeholder="Enter Amount" id='amount' class="amount form-control"
                                    aria-label="">

                            </div>

                            <p class="">Customer Name</p>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <button class="btn btn-primary dropdown-toggle" type="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-settings">
                                            <circle cx="12" cy="12" r="3"></circle>
                                            <path
                                                d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                            </path>
                                        </svg> </button>

                                </div>
                                <input readonly required type="text" id='customer_name' class="form-control"
                                    aria-label="">

                            </div>

                            <p class="">Address</p>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <button class="btn btn-primary dropdown-toggle" type="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-settings">
                                            <circle cx="12" cy="12" r="3"></circle>
                                            <path
                                                d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                            </path>
                                        </svg> </button>

                                </div>
                                <input readonly required type="text" id='address' class="form-control"
                                    aria-label="">

                            </div>

                           
                        
                        </div>
                        <!-- <p>Total amount payable:#<a id='discount'></a> -->
                        

                    

                        <button id='pay_elect'  type="submit" class="btn btn-primary float-right">
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

    $('.other_details').hide().prop('required',false)
    $('#pay_elect').hide()
    $(document).ready(function (){
        
        $("#electricity_subscription").on("submit",async function(e) {
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
                'meter_no': $('#meter_no').val(),
                'service_type': $('#service_type').val(),
                'meter_type': $('#meter_type').val(),
                "_token": "{{ csrf_token() }}",
            },
            url: '/electricitydetails',
            }).done(function(response) {
                
                if(response.status=='success'){
                    console.log(response.address)
                    // swal.fire('Success!', response.message)
                    
                    $('.other_details').show();
                    $('#pay_elect').show()
                    // $('#sub_btn').hide()


                    // $('#customer_name').show();
                    // $()
                    var address=JSON.stringify(response.address);
                    $('#customer_name').val(response.customer_name)
                    // $('#address').show();
                    $('#address').val(response.address);


                    // customer_name



                }else{
                    swal.fire('Error!', response.message)

                }
            });
        });

        



    });

    $("#amount").on("submit", async function(e) {
        e.preventDefault();
        const willUpdate = await Swal.fire({
            title: "Confirm Transaction"
            , text: `Are you sure you want to proceed `
            , icon: "warning"
            , confirmButtonColor: "#DD6B55"
            , confirmButtonText: "Yes!"
            , showCancelButton: true
            , buttons: ["Cancel", "Yes, Proceed"]
        });

        if (willUpdate.isDismissed == false) {
            $("#pinconfirm").modal('show')
            
        }
    })

        function buy(){
            $.ajax({
                type: 'POST',
                dataType: 'json',
                data: {
                    'meter_no': $('#meter_no').val(),
                    'service_type': $('#service_type').val(),
                    'meter_type': $('#meter_type').val(),
                    'amount':'1000',
                    "_token": "{{ csrf_token() }}",
                },
                url: '/postelectricity',
            }).done(function(response) {
                            
                if(response.status=='success'){
                    // console.log(response.address)
                    swal.fire('Success!', response.message)
                    
                
                }else{
                    swal.fire('Error!', response.message)

                }
            });
        }
       
</script>
@endsection