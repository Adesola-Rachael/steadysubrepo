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
                                <option value="MTN">MTN
                                </option>
                                <option value="GLO">GLO
                                </option>
                                <option value="AIRTEL">
                                    AIRTEL</option>
                                <option value="9MOBILE">
                                    9MOBILE</option>
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
                            <input type='text' placeholder='1GB/2GB' required="" id="ename" class="form-control"
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
            <h3>Veenode Data Prices</h3>
        </div>
     
        <div class="dropdown filter custom-dropdown-icon">
           

                <select class='form-control' id='network'>
                    <option value='MTN'>MTN</option>
                    <option value='GLO'>GLO</option>
                    <option value='AIRTEL'>AIRTEL</option>
                    <option value='9MOBILE'>9MOBILE</option>
                </select>
        </div>
    </div>

    <div class="row layout-top-spacing">
        {{-- <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
            <div class="col-lg-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Set Data Plans</h4>
                            </div>
                        </div>
                    </div>
                    <form id="setdata">
                        <div class="widget-content widget-content-area">
                            <p class="">Data Plan</p>

                            <div class="input-group mb-4">
                                <div class="input-group-prepend">

                                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false"><svg
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
                                <select class="form-control " id="set_network" name="network" required="">
                                    <option value="MTN">MTN
                                    </option>
                                    <option value="GLO">GLO
                                    </option>
                                    <option value="AIRTEL">
                                        AIRTEL</option>
                                    <option value="9MOBILE">
                                        9MOBILE</option>
                                </select>

                            </div>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">

                                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false"><svg
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
                                <input type='text' placeholder='1GB/2GB' required="" id="name" class="form-control"
                                    aria-label="Amount">

                            </div>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">

                                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false"><svg
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
                                <input type='number' placeholder='Enter Amount' required="" type="number" min="100"
                                    id="amount" class="form-control" aria-label="Amount">

                            </div>
                           



                            <button type="submit" class="btn btn-primary float-right">
                                Set
                            </button>




                        </div>
                    </form>
                </div>

            </div>
        </div> --}}

        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="widget-content widget-content-area br-6">
                <div id="zero-config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">

                    <div class="table-responsive">
                        <table id="t_table" class="table table-striped dataTable" style="width: 100%;" role="grid"
                            aria-describedby="zero-config_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1"
                                        colspan="1" aria-label="Name: activate to sort column ascending"
                                        style="width: 108px;">Network</th>
                                    <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1"
                                        colspan="1" aria-label="Name: activate to sort column ascending"
                                        style="width: 50px;">Plan</th>
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
                            <tbody id='t_body'>
                                @foreach($datas as $data)
                                <tr>
                                    <td>{{ $data->network }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->actual_price }}</td>
                                    <td>
                                        <input value='{{$data->veenode_price}}'
                                        type='number' id="price{{ $data->id }}" class='form-control'></td><td><a data-price='{{ $data->actual_price }}' data-network='{{ $data->network }}' data-name='{{ $data->name }}' data-plan_id="{{$data->plan_id}}" data-id='{{ $data->id }}' class='updateprice btn btn-success'>Update</a></td>`
                                       
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
      
      $(".editdata").on('click', function() {
        var id = $(this).data('id')
        $.get('{{ route("editdata") }}?id='+id,function(data) {
            $("#eid").val(data.id)
            $("#ename").val(data.name)
            $("#enetwork").val(data.network)
            $("#eamount").val(data.amount)
          
        })
      })
        
      $("#network").on('change', function() {
        network = $("#network").val()
      $.get("{{ route('fetchdata2') }}?network="+network,function(data) {
              if(data !== false) {
                console.log(data,'from sme plug')
                   
                    $("#amount").empty()
                    $("#t_body").empty()
                    $.each( data, function( key, value ) {
                        
                        $('#t_body').append(`<tr><td>${network}</td><td>${value.name}</td><td>₦${value.actual_price}</td>
                              <td>
                              <input value='${value.veenode_price}' 
                                type='number' id="price${value.id}" class='form-control'></td><td><a data-price='${value.actual_price}' data-network='${network}' data-name='${value.name}' data-plan_id="${value.plan_id}" data-id='${value.id}' class='updateprice btn btn-success'>Update</a></td>`
                                );  
                            
           });
            } else {
                console.log('error while fetching data')
            }
            });
      })
      $('body').on('click','.updateprice', function() {
        var k_id = $(this).data('id')
        var id= $(this).data('plan_id')
        var price = $(this).data('price')
        var name = $(this).data('name')
        var network = $(this).data('network')
       
        var new_price = $("#price"+k_id).val();
        value = [name,network,price,new_price,id]
        $.get("{{ route('set_veenode_data') }}?value="+value, function(data) {
            console.log(data);
            if(data == true) {
                Swal.fire('success',"Data price updated successfully",'success')
            }
            else if(data == 'too_much') {
                Swal.fire('Opps','Data price set must not be greater than the actual amount','error')
            }
            else {
                Swal.fire("error",'Data price not updated','error')
            }
        })

      })
      
      })
     
</script>
@endsection