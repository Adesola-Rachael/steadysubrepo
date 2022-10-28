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
                        <h4>Buy Data</h4>
                    </div>
                </div>
            </div>


            <form id='buy_data'>
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
                        <input type='hidden' id='user_id' value="{{ Auth::user()->id }}" />
                        <input required type="number" id='phone' class="form-control" placeholder="Phone Number"
                            aria-label="Phone Number" max="11">

                    </div>
                    <small class='badge badge-success' id='phonesmall'></small>

                    <p class="">Data Amount</p>
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
                        <select required id='amount' class="form-control">
                            <option value=''>--SELECT DATA PLAN--</option>


                        </select>


                    </div>
                    <div>

                        <input id='select_network' type="checkbox">
                        <span class="slider round"></span>
                        <label class="switch s-primary mb-0">
                            Manually Select Network
                        </label>
                    </div>
                    <div class="input-group mb-4" style='display:none' id='nnetwork'>
                        <div class="input-group-prepend">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-settings">
                                    <circle cx="12" cy="12" r="3"></circle>
                                    <path
                                        d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                    </path>
                                </svg> </button>
                            <select id='network' class="form-control" placeholder="Phone Number">
                                <option value=''>--select network</option>
                                <option value='MTN'>MTN</option>
                                <option value='GLO'>GLO</option>
                                <option value='AIRTEL'>AIRTEL</option>
                                <option value='9MOBILE'>9MOBILE</option>
                            </select>

                        </div>



                    </div>
                    <!-- <p>Amount Payable:#<a id='discount'>0.00</a></p> -->
               

                    <button id='buy_data_btn' type="submit" class="btn btn-primary float-right">
                        Buy
                    </button>


                   




                </div>
            </form>
        </div>

    </div>
</div>

@endsection



@section('custom_script')
<script>
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                

            }
        });
   
    $("#buy_data").on('submit',async function(e) {
        
        e.preventDefault();
        console.log($("#phonesmall").text());

        console.log($('#amount').val());
        

        if($("#phone").val().length ==11 && $("#phonesmall").text() !== '') {
            const willUpdate = await Swal.fire({
            title: "Confirm Transaction",
            text: `Are you sure you want to purchase `+ $("#amount").find(':selected').data("name")+` on `+$("#phone").val(),
            icon: "warning",
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes!",
            showCancelButton: true,
            buttons: ["Cancel", "Yes, Proceed"]
        });
        
        
        if (willUpdate.isDismissed == false) {
            $("#buy_data_btn").attr('disabled',true)
            $("#pinconfirm").modal('show')
        } else {
            Swal.fire("Transaction declined  :)");
        }
    
        } else {
            Swal.fire('Opps','Incorrect phone number','error')
        }
    })   
    
    

        $("#select_network").click(function() {
           if($("#select_network").prop('checked')) {
            $("#nnetwork").show()
           } else {
               $("#nnetwork").hide()
               $("#network").val(null)
           }
        })
   
        $("#phone").on('input',function() {
            var val = $("#phone").val().substring(0,4);
            console.log(val,'the very value')
           
            if (val == '0805' || val == '0705' || val == '0905'  || val == '0807'  || val == '0815'  || val == '0905' || val == '0811'  || val == '0915') {
                value = 'GLO';
            } else if (val == '0802' || val == '0902' || val == '0701'  || val == '0808'  || val == '0708' || val == '0812' || val == '0901') {
                value = 'AIRTEL';
            } else if (val == '0809' || val == '0909' || val == '0817'  || val == '0818') {
                value = '9MOBILE';
            } else if(val == '0803' || val == '0703' || val == '0916' || val == '0913' || val == '0903' || val == '0704'  || val == '0806' || val == '0706' || val == '0813' || val == '0814'  || val == '0816' || val == '0906'  || val == '0702') {
                value = 'MTN';
            }
            else {
                value='';
            }
            

            $("#phonesmall").text(value)

            console.log( value,'this')
            if(value.length >= 3) {
            $.post("{{ route('dataprice') }}?network="+value,function(response) {  
                var amount = '';

                if(data !== 'error') {
                    console.log(data,'from sme plug')
                    $("#amount").empty()
                    $.each(response.data, function( key, value ) {
                        amount += `<option data-plan_id="${value.id}" data-amount="${value.set_price}" data-name='${value.attributes.name}' data-variation_code="${value.id}" value="${value.id}">
                        ${value.attributes.name} - ${value.attributes.network}--₦${value.attributes.price.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")}
                                </option>`;
                                
                    });
                    $('#amount').append(amount);


                } else {
                    Swal.fire('error','error while fetching data','error')
                }
            });
            } else {
                $("#amount").empty()
            }
        });
                    
            
        $("#amount").on('change', function() {
            value = $(this).find(':selected').data('variation_code');

            console.log(value,'the value')
            $("#variation_code").val()
            
        })
    })

        function buy(){
            $.ajax({
                type: 'POST',
                dataType: 'json',
                data: {
                    'phone': $('#phone').val(),
                    'network': $("#phonesmall").text(),
                    'plan': '60',
                    
                },
                url: '/buy_data',
            }).done(function(response) {
                    // console.log(response.status)
                        console.log(response.data)

                    if(response.status=='success'){ 
                        swal.fire('Success!', response.message)
                    }else{
                        swal.fire('Error!', response.message)

                    }
            });
                    
       }


</script>
@endsection