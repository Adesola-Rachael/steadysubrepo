@extends('admin.master')
@section('head-links')
@endsection
@section('main')
<div id="content" class="main-content">
    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade" id="edit_data_modal" tabindex="-1" role="dialog" aria-labelledby="edit_data_modalTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Edit Data Plan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="updatedata">


                        <div class="input-group mb-4">
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
                            </div>
                            <select class="form-control " id="enetwork" name="network" required="">
                                @foreach($airtimes as $key => $air)
                                    
                               
                                <option value='{{ $air->name }}'>{{ $air->name }}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="input-group mb-4">
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
                            </div>
                            <input type='hidden' id='eid'>
                            <input type='text' placeholder='%' required="" id="ename" class="form-control"
                                aria-label="Amount">

                        </div>
                        <div class="input-group mb-4">
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
                            </div>
                            <input type='number' placeholder='Enter Amount' required="" type="number" min="100"
                                id="eamount" class="form-control" aria-label="Amount">

                        </div>
                     


               
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Edit</button>
            </div>
        </form>
        </div>
    </div>
</div>
<div class="layout-px-spacing">

    <div class="page-header">
        <div class="page-title">
            <h3>Exam Pin Prices</h3>
        </div>
      
    </div>

    <div class="row layout-top-spacing">
        <!--<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">-->
        <!--    <div class="col-lg-12 layout-spacing">-->
        <!--        <div class="statbox widget box box-shadow">-->
        <!--            <div class="widget-header">-->
        <!--                <div class="row">-->
        <!--                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">-->
        <!--                        <h4>Set Percentage</h4>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <form id="setdata">-->
        <!--                <div class="widget-content widget-content-area">-->
        <!--                    {{-- <p class="">Prices</p> --}}-->

        <!--                    {{-- <div class="input-group mb-4">-->
        <!--                        <div class="input-group-prepend">-->

        <!--                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"-->
        <!--                                aria-haspopup="true" aria-expanded="false"><svg-->
        <!--                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"-->
        <!--                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"-->
        <!--                                    stroke-linecap="round" stroke-linejoin="round"-->
        <!--                                    class="feather feather-settings">-->
        <!--                                    <circle cx="12" cy="12" r="3"></circle>-->
        <!--                                    <path-->
        <!--                                        d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">-->
        <!--                                    </path>-->
        <!--                                </svg> </button>-->
        <!--                        </div>-->
        <!--                        <select class="form-control " id="network" name="network" required="">-->
        <!--                            @foreach($airtimes as $key => $air)-->
                                    
                               
        <!--                            <option value='{{ $air->name }}'>{{ $air->name }}</option>-->
        <!--                            @endforeach-->
        <!--                        </select>-->

        <!--                    </div>-->
        <!--                    <div class="input-group mb-4">-->
        <!--                        <div class="input-group-prepend">-->

        <!--                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"-->
        <!--                                aria-haspopup="true" aria-expanded="false"><svg-->
        <!--                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"-->
        <!--                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"-->
        <!--                                    stroke-linecap="round" stroke-linejoin="round"-->
        <!--                                    class="feather feather-settings">-->
        <!--                                    <circle cx="12" cy="12" r="3"></circle>-->
        <!--                                    <path-->
        <!--                                        d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">-->
        <!--                                    </path>-->
        <!--                                </svg> </button>-->
        <!--                        </div>-->
        <!--                        <input type='text' placeholder='1GB/2GB' required="" id="name" class="form-control"-->
        <!--                            aria-label="Amount">-->

        <!--                    </div>-->
        <!--                    <div class="input-group mb-4">-->
        <!--                        <div class="input-group-prepend">-->

        <!--                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"-->
        <!--                                aria-haspopup="true" aria-expanded="false"><svg-->
        <!--                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"-->
        <!--                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"-->
        <!--                                    stroke-linecap="round" stroke-linejoin="round"-->
        <!--                                    class="feather feather-settings">-->
        <!--                                    <circle cx="12" cy="12" r="3"></circle>-->
        <!--                                    <path-->
        <!--                                        d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">-->
        <!--                                    </path>-->
        <!--                                </svg> </button>-->
        <!--                        </div>-->
        <!--                        <input type='number' placeholder='Enter Amount' required="" type="number" min="100"-->
        <!--                            id="amount" class="form-control" aria-label="Amount">-->

        <!--                    </div>-->
        <!--                    --}}-->



        <!--                    <button type="submit" class="btn btn-primary float-right">-->
        <!--                        Set-->
        <!--                    </button>-->




        <!--                </div>-->
        <!--            </form>-->
        <!--        </div>-->

        <!--    </div>-->
        <!--</div>-->

        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="widget-content widget-content-area br-6">
                <div id="zero-config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">

                    <div class="table-responsive">
                        <table id="zero-config" class="table table-striped dataTable" style="width: 100%;" role="grid"
                            aria-describedby="zero-config_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1"
                                        colspan="1" aria-label="Name: activate to sort column ascending"
                                        style="width: 108px;">Name</th>
                                   <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1"
                                        colspan="1" aria-label="Office: activate to sort column ascending"
                                        style="width: 177px;">Actual Price</th>
                                    <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1"
                                        colspan="1" aria-label="Office: activate to sort column ascending"
                                        style="width: 77px;">Set Amount</th>
                                    
                                  
                                    <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1"
                                        colspan="1" aria-label="Office: activate to sort column ascending"
                                        style="width: 177px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($airtimes as $data)
                              
                                <tr role="row">
                                    <td>
                                       {{ $data->name}}

                                    </td>
                                   
                                  
                                    <td>{{ number_format($data->actual_amount,2) }}</td>
                                    <td><input type='number' id='price' class='form-control' value='{{$data->set_amount}}'/></td>
                                   <td>
                                        <a data-id='{{ $data->id }}' data-exam="{{ $data->name }}" data-price="{{ $data->set_amount }}"  class="set_price btn btn-primary btn-sm">Update</a>
                                        {{-- <a data-id='{{ $data->id }}' class="deletedata btn btn-danger btn-sm">Del</a> --}}
                                    </td>
                                </tr>
                              
                                @endforeach


                            </tbody>

                        </table>
                    </div>

                </div>
            </div>
        </div>

    </div>

@endsection
@section('script')
<script>
    $(document).ready(function() {
          
          $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
     
      $(".set_price").on('click', function() {
        var value = [$(this).data('exam'), $('#price').val()]
        $.get('{{ route("updateexam") }}?value='+value,function(data) {
          if(data == 1) {
              Swal.fire("success",'Updated successfully!',"success")

          }
          else {
              Swal.fire('Opps','The price set should not be more than the actual price','error')
          }
          
        })
      })
      })
     
</script>
@endsection