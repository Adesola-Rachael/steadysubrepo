@extends('user.layouts.app')
@section('custom_style')
<link href="{{ asset('adminasset/assets/css/users/user-profile.css')}}" rel="stylesheet" type="text/css" />
@endsection


@section('page_name',$pagename)
@section('main_content')
    
<div class="col-xl-8 col-lg-6 col-md-7 col-sm-12 layout-top-spacing">

<div class="education layout-spacing ">
    <div class="widget-content widget-content-area">
        <h3 class="">Update Profile</h3>
        <form id="update_profile" class="section general-info" enctype='multipart/form-data'>
            <div class="info">
                <h6 class="">Update Profile</h6>
                <div class="row">
                    <div class="col-lg-11 mx-auto">
                        <div class="row">
                    
                            <div class="col-xl-12 col-lg-12 col-md-8 mt-md-0 mt-4">
                                <div class="form">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="fullName">Full Name</label>
                                                <input type="text" class="form-control mb-4"
                                                    id="name" value="{{ Auth::user()->name }}"
                                                    value="Jimmy Turner">
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="fullName">Referral Link</label>
                                                <input disabled type="text" class="form-control mb-4"
                                                    id="name" value="https://steadysub.com/{{ Auth::user()->referral_link }}"
                                                    value="Jimmy Turner">
                                            </div>
                                        </div>

                                       
                                     
                                    </div>
                                    <div class="form-group">
                                        <label for="profession">Phone Number</label>
                                        <input type="number" class="form-control mb-4"
                                            id="phone" placeholder="{{ Auth::user()->phone }}"
                                            value="{{ Auth::user()->phone }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="profession">Email Address</label>
                                        <input readonly type="text" class="form-control mb-4"
                                            id="profession" placeholder="{{ Auth::user()->email }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4 text-right mb-5">
                                <button id="profilesubmit" type='submit'
                                    class="btn btn-primary">Update</button>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </form>
    </div>
</div>



</div>
@endsection

@section('custom_script')
    @include('user.includes.js_include.profile_js')
@endsection
