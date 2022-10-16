
@extends('auth.layouts.app')
@section('title', 'Login | Steadysub')
@section('content')
<a href='/'>
                            <img src="{{asset('growth/images/logo.png')}}" alt="" style='width:200px;height:50px' class="img-fluid">
                        </a><br>
                        <h1 class="">Login</h1>
                        <!--<p>Login to your account</p>-->
                        <p class="signup-link">Yet to have an account? <a href="/register">Sign Up</a></p>
                        <form class="text-left" action='{{ route("login") }}' method='post'>@csrf
                            <div class="form">
                                @if($errors->any())
                                <div class="alert alert-danger">
                                    <p><strong>Opps Something went wrong</strong></p>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif


                             
                                <div id="email-field" class="field-wrapper input">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-at-sign">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path>
                                    </svg>
                                    <input id="email" name="email" type="text" value="" placeholder="Email">
                                </div>
                              
                                <div id="password-field" class="field-wrapper input mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-lock">
                                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                    </svg>
                                    <input id="password" name="password" type="password" value=""
                                        placeholder="Password">
                                </div>
                               
                                <div class="field-wrapper terms_condition">
                                    <div class="n-chk">
                                        <label class="new-control">
                                        @if (Route::has('password.request'))
                                
                                    <a class="btn float-left" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password ?') }}
                                    </a>
                            
                            @endif
                                          
                                             
                                        </label>
                                    </div>
                                </div>
                                <div class="d-sm-flex justify-content-between">
                                    <div class="field-wrapper toggle-pass">
                                        <p class="d-inline-block">Show Password</p>
                                        <label class="switch s-primary">
                                            <input type="checkbox" id="toggle-password" class="d-none">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                    <div class="field-wrapper">
                                        <button type="submit" class="btn btn-primary" value="">Login</button>
                                    </div>
                                </div>

                            </div>
                        </form>
@endsection

@push('script')
<script>
        $(document).ready(function() {
            $("#toggle-password").on('click',function() {
                if($("#toggle-password").is(':checked')) {
                    $("#confirm_password").attr('type','text')
                } else {
                    
                    $("#confirm_password").attr('type','password')
                }
            })
        
        })
    </script>
@endpush
