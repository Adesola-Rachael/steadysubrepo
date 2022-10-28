@extends('user.layouts.app')
@section('custom_style')
<!-- add style -->

@endsection


@section('page_name',$pagename)
@section('main_content')
<div class="col-xl-8 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                
                <div class="col-lg-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class='card'>
                            <div class='card-header'>
                            Buy Exam Pin
                            </div>
                            <div class="card-body">

                           
                        <form id='buy_pin'>
                            {{-- <div class="widget-content col-md-12"> --}}
                                <p class="">Select Exam Type</p>
                                <div class="input-group mb-4">
                                    <input type='hidden' value='{{$user->id}}' id='user_id'/>
                                   
                                    <select required id='exam_type' class="form-control" placeholder="Exam Type">
                                        <option value=''>--Select Exam Type--</option>
                                            
                                      
                                    </select>


                                </div>

                                <div class="input-group mb-4" style='' id='pin_values'>
                                    <h4>Here is your Pin details:</h4>
                                  
                                    <p style='' id='details' class="text-success"></p>
                                       


                                </div>

                               




                                <button type="submit" id='btn_sub' class="btn btn-primary float-right">
                                    Proceed
                                </button>




                            {{-- </div> --}}
                        </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
@endsection



@section('custom_script')
<!-- write script -->
<script>
 $("#pin_values").hide();
$("#details").hide();
$(document).ready(function (){

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                

            }
        });

        $("#buy_pin").on("submit",async function(e) {
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
       
        
         });


            $.post("{{ route('examprice') }}",function(response) {  
                var examtype = '';

                if(response.data !== 'error') {
                    console.log(data,'from sme plug')
                    $("#exam_type").empty()
                    console.log(response.data)
                    $.each(response.data, function( key, value ) {
                        examtype += `<option value="${value.attributes.type}">
                        ${value.attributes.type} Result Checker --₦${value.attributes.price}
                                </option>`;
                                
                    });
                    $('#exam_type').append(examtype);


                } else {
                    Swal.fire('error','error while fetching data','error')
                }
            });
            
            
        
    });

    function buy(){
            $.ajax({
            type: 'POST',
            dataType: 'json',
            data: {
                'type': $('#exam_type').val(),
                
            },
            url: '/buy_pin',
            }).done(function(response) {
                if(response.status=='success'){
                    swal.fire('Success!', response.message, )
                    var details='successful. Your exam pin is '+response.pin;
                    $("#pin_values").show();
                    $("#details").show()
                    $("#details").text(response.pin)
                }else{
                    swal.fire('Error!', response.message)

                }
            });
      


        }

     
</script>






@endsection