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
                                <p class="">Select Service Type</p>
                                <div class="input-group mb-4">
                                    <input type='hidden' value='{{$user->id}}' id='user_id'/>
                                   
                                    <select required id='exam_type' class="form-control" placeholder="Phone Number">
                                        <option value=''>--Select Exam Type--</option>
                                        @foreach($exams as $key => $exam)
                                        <option data-name='{{ $exam->name }}' value='{{ $exam->url }}'>{{ $exam->name }}</option>
                                            
                                        @endforeach
                                      
                                    </select>


                                </div>

                                <p class="">Amount</p>
                                <div class="input-group mb-4">
                                  
                                    <input readonly required id='package' class="form-control">
                                       


                                </div>

                                <div class="input-group mb-4" style='display:none' id='pin_values'>
                                    <h4>Here is your Pin details:</h4>
                                  
                                    <p style='display:none' id='details' class="text-success"></p>
                                       


                                </div>
                              



                                <button type="submit" id='btn_sub' class="btn btn-primary float-right">
                                    Verify
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
@endsection