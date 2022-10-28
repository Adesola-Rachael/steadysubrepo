@extends('user.layouts.app')
@section('custom_style')
<link href="{{ asset('adminasset/assets/css/users/user-profile.css')}}" rel="stylesheet" type="text/css" />
@endsection


@section('page_name',$pagename)
@section('main_content')
 
 <!-- Content -->
 <div class="col-xl-8 col-lg-6 col-md-5 col-sm-12 layout-top-spacing">

<div class="user-profile layout-spacing">
    <div class="widget-content widget-content-area">
        <div class="d-flex justify-content-between">
            <h3 class="">Reset Pin</h3>
            <a href="/editprofile" class="mt-2 edit-profile"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg></a>
        </div>
        <div class="text-center user-info">
           
            <p class="">{{ Auth::user()->name }}</p>
        </div>
        <div class="user-info-list">

            <form id='change_pin' method="POST">

                <div class="widget-content col-md-12">
                  
                    <p class="">Current Pin</p>
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
                        <input required type="number" name="oldpin" id='oldpin' maxlength="4" class="form-control"
                            placeholder="****" aria-label="Amount">

                    </div>
                    <p class="">New Pin</p>
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
                        <input required type="number" name="newpin" id='newpin' maxlength="4" class="form-control"
                            placeholder="****" aria-label="Amount">

                    </div>


                    <p>Forgot your pin? click <a style='color:red' id='forgot_pin'>here</a> to reset pin.</p>

                    

                    <div class='mb-4 p-2'>
                    <button id='sub_btn' type="submit" class="btn btn-primary float-right">
                        Change Pin
                    </button>
                    </div>




                </div>
            </form>                                  
        </div>
    </div>
</div>



</div>
@endsection

@section('custom_script')
<script>
    $(document).ready(function () {
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("#change_pin").on("submit", async function(e) {

            e.preventDefault();
             console.log('button clicked')
            if($("#newpin").val().length ==4 && $("#oldpin").val().length ==4) {
                    new swal('Updating profile, please wait...')
            
                // var image = $('#image')[0].files;
                var fd = new FormData;
                fd.append('oldpin', $("#oldpin").val());
            
                fd.append('newpin', $("#newpin").val());
                
                // console.log(image[0],'tje image')
                // if(image[0] != undefined) {
                // fd.append('image', image[0]);
                // }
                console.log(fd)
                $.ajax({
                    type: 'POST',
                    url: "/changepin",
                    data: fd,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        // console.log('the data', $data)
                        swal.close()
                        if(response.status==1){
                            
                        new swal('success', response.message, 'success')
                        // window.location.reload()
                        }else{
                            new swal('success', response.message, 'success')
                        // window.location.reload()
                        }
                        


                    },
                    error: function(data) {
                        console.log(data)
                        swal.close()
                        new swal('Opps!', 'Transaction Pin  not updated, contact the administrator', 'error')
                    }
                })
            }else{
                new swal('Opps!', 'Your pin must not be greater or lesser than 4 digits', 'error')

            }

        })


})




        

</script>
@endsection