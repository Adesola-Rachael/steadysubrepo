@extends('user.layouts.app')
@section('custom_style')
<link href="{{ asset('adminasset/assets/css/users/user-profile.css')}}" rel="stylesheet" type="text/css" />
@endsection


@section('page_name',$pagename)
@section('main_content')
        <!-- Content -->
        <div class="panel-body">
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if($errors)
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger">{{ $error }}</div>
                        @endforeach
                    @endif
</div>
        <div class="col-xl-8 col-lg-6 col-md-5 col-sm-12 layout-top-spacing">

<div class="user-profile layout-spacing">
    <div class="widget-content widget-content-area">
        <div class="d-flex justify-content-between">
            <h3 class="">Change Password</h3>
            <a href="/editprofile" class="mt-2 edit-profile"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg></a>
        </div>
        <div class="text-center user-info">
           
            <p class="">{{ Auth::user()->name }}</p>
        </div>
        <div class="user-info-list">

            <form id='reset_pin' method="POST"  >
            {{ csrf_field() }}
                <div class="widget-content col-md-12">
                  
                    <p class="">Old Password</p>
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
                        <!-- <input type='hidden' value='{{ Auth::user()->id }}' id='user_id'> -->
                        <input required type="text" id='old_password' name="old_password"  class="form-control"
                            placeholder="************" aria-label="Pin">
                            <span class="text-danger error-text old_password_error"></span><br>


                    </div>
                    <p class="">New Password</p>
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
                        <!-- <input type='hidden' value='{{ Auth::user()->id }}' id='user_id'> -->
                        <input required type="password" minlength='9' id='new_password' name='new_password' class="form-control"
                            placeholder="**********" aria-label="Amount">
                            <span class="text-danger error-text new_password_error"></span><br>


                    </div>
                     <p class="">Confirm Password</p>
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
                      
                        <input required type="password" minlength='9' id='confirm_password' name='confirm_password' class="form-control"
                            placeholder="**********" aria-label="Amount">
                            <span class="text-danger error-text confirm_password_error"></span><br>


                    </div>


                    <p>Forgot your password? click <a style='color:red' href='/logout'>here</a> to reset password.</p>

                    

                    <div class='mb-4 p-2'>
                    <button id='sub_btn' type="submit" class="btn btn-primary float-right">
                        Change
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
$(document).ready(function() {


     $('#reset_pin').on('submit', function(e){
          e.preventDefault();
            Swal.fire('Wait!','Updating Your Password');

         $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
        });

         $.ajax({
            url:'/changepassword',
            method:$(this).attr('method'),
            data:new FormData(this),
            processData:false,
            dataType:'json',
            contentType:false,
            beforeSend:function(){
            },
            success:function(data){
              if(data.status == 0){
            //    Swal.fire('Opps!', data.msg, 'error')
            //    console.log(data.msg)
            $.each(data.error, function(prefix, val){
                    $('span.'+prefix+'_error').text(val[0]);
                    

            })
                // Swal.fire({
                //     type: 'success',
                //     title: 'Success',
                //     html: '<pre>' + details + '</pre>',
                //     customClass: {
                //     popup: 'format-pre'
                //     },
                //      timer:5000
                // });

            console.log('true')
              }else{
                $('#reset_pin')[0].reset();
                // alert(data.msg);
                 Swal.fire('Success!', data.msg, 'Success')


                console.log('false')
              }
            }
         });
     });
    
  })
      
          </script>

@endsection