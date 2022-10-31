
@extends('user.layouts.app')
@section('custom_style')
<style>
    .fa-solid{
         /* background:none;  */
        border-radius:5px;
        font-size:35px;
        font-weight:bold;
        align:center;
        text-align:center;
        color:#EC4D37;
        width:50px;
        height:30px;
    }
    .clearfix{
        margin-top:20px;
    }
    
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
@endsection


@section('page_name',$pagename)
@section('main_content')
    
    <div class="col-xl-8 col-lg-6 col-md-7 col-sm-12 layout-top-spacing">
        <div class="education layout-spacing ">
            <!-- <div class="col-md-12"> -->

            <div class="widget-content widget-content-area">
                <!-- cpoy referral Link -->
                <h3 class="">Referral Program</h3>
                <div class="info">
                    <div class="row">
                        <div class="col-lg-11 mx-auto">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-8 mt-md-0 mt-4">
                                
                                    <div class="row">
                                        <!-- ref link -->
                                        <div class="col-sm-12">
                                            <div class=" text-white mb-3" style="max-width: 25rem ;">
                                                <h4 class="" style="color: #EC4D37;"  >Referral Link</h4>
                                                <div class="card-body">  
                                                    <p class="card-text">Track and find all the details about our referral program, your stats and revenues.</p>
                                                    <input style="font-size: 14px; color:#000; font-weight:bolder; outline: none;" id="ref_link" type="text"  hidefocus="true" class="shareInput" readonly ><button class="btn-primary" ><a href="javascript:;" class="shareButton" style="color:#fff;">Copy</a></button>
                                                </div>
                                                <a class="border-primary" href="#refDetails"   style="color:#EC4D37;">See Details</a>
                                            </div> 
                                        </div>
                                    </div>
                                            <!-- How it works -->
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="clearfix"></div>
                                            <h4 class="card-title" style="text-align:center"><strong>HOW IT WORKS</strong></h4>
                                            <p class="text-sm">Integrate your referral code in 3 easy steps.</p>

                                            
                                            <div class="row">
                                                <!-- copy -->
                                            <div class="col-sm-4">
                                                <div class="card card-plain text-center">
                                                    <div class="card-body">
                                                        <div class="icon icon-shape  text-center border-radius-md mb-2">
                                                            <i class="fa-solid fa-copy"></i>
                                                        </div>
                                                        <p class="text-sm font-weight-bold mb-2">Copy your referral link above </p>

                                                    </div>
                                                </div>
                                            </div>
                                                <!-- share -->
                                                <!-- copy -->
                                            <div class="col-sm-4">
                                                <div class="card card-plain text-center">
                                                    <div class="card-body">
                                                        <div class="icon icon-shape  text-center border-radius-md mb-2">
                                                            <i class="fa-solid fa-share-from-square"></i>
                                                        </div>
                                                        <p class="text-sm font-weight-bold mb-2">Share your referral link </p>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Earn -->
                                                <!-- copy -->
                                            <div class="col-sm-4">
                                                <div class="card card-plain text-center">
                                                    <div class="card-body">
                                                        <div class="icon icon-shape  text-center border-radius-md mb-2">
                                                        <i class="fa-solid fa-money-check"></i>                                        </div>
                                                        <p class="text-sm font-weight-bold mb-2">Earn yourself</p>
                                                        <h5 class="font-weight-bolder"><span class="small"> ₦</span>200</h5>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Referral Table -->
                                    <div  id="refDetails">
                                        <div class="card-body">
                                            <div class="row  text-center">
                                                <div class="col-sm-6">
                                                    <div class="alert alert-success" role="alert">
                                                        <p><strong> Your Referals </strong></p>
                                                        <h1>{{$referred}}   </h1>                                                      

                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="alert alert-success" role="alert">
                                                        <p><strong> Amount Earned </strong></p>
                                                        <h1>{{$referred *200}}</h1>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                        
                                        <!-- tables -->
                                        <div class="widget widget-three">
                                            <h5 class="">People You Referred</h5>
                                            <div id="default-ordering_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                                <div class="table-responsive">
                                                    <table id="zero-config" class="table table-hover dataTable">
                                                    @if(!$referral->isEmpty())
                                                        <!-- style="width: 100%;" role="grid" aria-describedby="default-ordering_info"> -->
                                                        <thead>
                                                            <tr role="row">
                                                                <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                                                    rowspan="1" colspan="1"
                                                                    aria-label="Name: activate to sort column ascending"
                                                                    style="width: 108px;">Name</th>
                                                                
                                                                <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                                                    rowspan="1" colspan="1"
                                                                    aria-label="Position: activate to sort column ascending"
                                                                    style="width: 166px;">Amount Earned</th>
                                                                <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                                                    rowspan="1" colspan="1"
                                                                    aria-label="Office: activate to sort column ascending"
                                                                    style="width: 77px;">Date</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            
                                                            @foreach($referral as $referrals)
                                                                <tr role="row">
                                                                    <td>{{$referrals->name}}</td>
                                                                    <td>200</td>
                                                                    <td>{{ Date('d-M,y | H:i:s',strtotime($referrals->created_at ))}}</td>
                                                                </tr>
                                                            @endforeach
                                                            
                                                        </tbody>
                                                        @else
                                                        You have not refered anyone yet
                                                    
                                                    @endif
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        </div> 
        
    </div>
        
</div>
        <!-- </div>
        
    </div> --> 
@endsection

@section('custom_script')
<script>
    (function() {

        // Create reusable copy fn
        function copy(element) {

            return function() {
                document.execCommand('copy', false, element.select());
            }
        }

        // Grab shareUrl element
        var shareUrl = document.querySelector('.shareInput');
        var shareButton = document.querySelector('.shareButton');

        // Create new instance of copy, passing in shareUrl element
        var copyShareUrl = copy(shareUrl);

        // Set value via markup or JS 
        shareUrl.value = "{{url('register?referral_link='.auth()->user()->referral_link)}}";

        // Click listener with copyShareUrl handler
        shareUrl.addEventListener('click', copyShareUrl, false);
        shareButton.addEventListener('click', () => {
            document.execCommand('copy', false, document.querySelector('.shareInput').select());
            $('.shareButton').text('Copied')
        }, false);

    }());

</script>
@endsection

