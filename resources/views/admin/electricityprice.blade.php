@extends('admin.master')
@section('head-links')
@endsection
@section('main')
<div id="content" class="main-content">
    <!-- Button trigger modal -->

    <!-- Modal -->

</div>
<div class="layout-px-spacing">

    <div class="page-header">
        <div class="page-title col-md-12">
            <h3>Electricity Prices</h3>
        </div>
        <div class="dropdown filter custom-dropdown-icon">
            <a class="dropdown-toggle btn" href="#" role="button" id="filterDropdown" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false"><span class="text"><span>Show</span> : Daily
                    Analytics</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-chevron-down">
                    <polyline points="6 9 12 15 18 9"></polyline>
                </svg></a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="filterDropdown">
                <a class="dropdown-item" data-value="<span>Show</span> : Daily Analytics"
                    href="javascript:void(0);">Daily Analytics</a>
                <a class="dropdown-item" data-value="<span>Show</span> : Weekly Analytics"
                    href="javascript:void(0);">Weekly Analytics</a>
                <a class="dropdown-item" data-value="<span>Show</span> : Monthly Analytics"
                    href="javascript:void(0);">Monthly Analytics</a>
                <a class="dropdown-item" data-value="Download All" href="javascript:void(0);">Download
                    All</a>
                <a class="dropdown-item" data-value="Share Statistics" href="javascript:void(0);">Share
                    Statistics</a>
            </div>
        </div>
    </div>

    <div class="row layout-top-spacing">
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
            <div class="col-lg-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Set Discount</h4>
                            </div>
                        </div>
                    </div>
                    <form id="setpercent">
                        <div class="widget-content widget-content-area">
                            <p class="">Name</p>

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
                                <select class="form-control " id="name" name="network" required="">
                                    <option value=''>--Select Type--</option>
                                    @foreach($airtimes as $key => $air)
                                    <option value='{{ $air->name }}'>{{ $air->name }}</option>
                                    @endforeach
                                </select>

                            </div>
                            <p class='badge badge-success'>Discounted rate:<a id='discount'></a>%</p>
                            <p class='badge badge-info'>Current rate:<a id='current'></a>%</p>
                            <p class="">Discount</p>
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
                                <input type='text' placeholder='%' required="" id="percent" class="form-control"
                                    aria-label="Amount">

                            </div>
                            <button type="submit" class="btn btn-primary float-right">
                                Set
                            </button>




                        </div>
                    </form>
                </div>

            </div>
        </div>

        <div class="col-xl-8 col-lg-12 col-sm-12  layout-spacing">
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
                                        colspan="1" aria-label="Name: activate to sort column ascending"
                                        style="width: 108px;">Price</th>
                                    <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1"
                                        colspan="1" aria-label="Office: activate to sort column ascending"
                                        style="width: 177px;">Discounted Amount</th>
                                    <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1"
                                        colspan="1" aria-label="Office: activate to sort column ascending"
                                        style="width: 77px;">Set Amount</th>
                                    {{--

                                    <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1"
                                        colspan="1" aria-label="Office: activate to sort column ascending"
                                        style="width: 177px;">Action</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($airtimes as $data)
                                @for($i=1000;$i<=1100;$i+=1000) <tr role="row">
                                    <td>
                                        {{ $data->name}}

                                    </td>
                                    <td>{{ $i }}</td>

                                    <td>{{ number_format($i - ( $i*($data->actual_price/100) ) ,2) }}</td>

                                    <td>{{ number_format($i - (($data->set_price/100) * $i) ,2) }}</td>

                                    {{-- ₦{{ number_format($data->amount,2)
                                    }} --}}
                                    </td>

                                    {{-- <td>{{ Date('d-M,Y',strtotime($data->created_at ))}}</td> --}}
                                    {{-- <td>
                                        <a data-id='{{ $data->id }}' class="editdata btn btn-primary btn-sm">Update</a>
                                    </td> --}}
                                    </tr>
                                    @endfor
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
          $("#setpercent").on('submit',async function(e) {
          e.preventDefault();
          if(parseFloat($("#discount").text()) >= $("#percent").val() &&  $("#percent").val() >= 0 ){
          Swal.fire('Updating,please wait...')
          var fd = new FormData;
          fd.append('name', $("#name").val());
          fd.append('percent', $("#percent").val());
          fd.append('type', 'electricity');
          console.log(fd)
          $.ajax({
              type: 'POST',
              url: "{{route('setpercent')}}",
              data: fd,
              cache: false,
              contentType: false,
              processData: false,
              success: function(data) {
                console.log('the data', data)
                  if(data == true) {
                    swal.close()
               
                    Swal.fire('success', 'Updated Successfully!', 'success')
                    window.location.reload()
                  } else if(data == 'fraud') {
                      Swal.fire('Forbidden!','Sorry, percentage input is greater than the available discount','error')
                  } else {
                      Swal.fire("Opps","Unexpected error encoutered, please contact the administrator","error")
                  }
                 
                 

              },
              error: function(data) {
                  console.log(data)
                  swal.close()
                  Swal.fire('Opps!', 'Something went wrong, contact the Administrator', 'error')
              }
          })
        } else {
            Swal.fire("Opps","The percentage set is not right",'error')
        }
      })
    //   $("#updatedata").on('submit',async function(e) {
        $(".editdata").click(function() {
            id= $(this).data('id')

         
          Swal.fire('Updating Data, please wait...')
          var fd = new FormData;
         
          fd.append('id', id);
         
          fd.append('amount', $("#updated_amount").val());
          console.log(fd)
          $.ajax({
              type: 'POST',
              url: "{{route('updatedata')}}",
              data: fd,
              cache: false,
              contentType: false,
              processData: false,
              success: function($data) {
                  console.log('the data', $data)
                  Swal.close()
               
                  Swal.fire('success', 'Data Created Successfully!', 'success')
                  window.location.reload()

              },
              error: function(data) {
                  console.log(data)
                  Swal.close()
                  Swal.fire('Opps!', 'Something went wrong, Data not created', 'error')
              }
          })
      })
      $('body').on('click', '.deletedata', function() {
            // var id = $("#delete_id").val();
            id = $(this).data('id');
            console.log(id)
            var token = $("meta[name='csrf-token']").attr("content");
            var el = this;
            // Data(user_id);
            resetAccount2(el, id);
        });


        async function resetAccount2(el, id) {
            const willUpdate = await Swal.fire({
                title: "Confirm Data Delete",
                text: `Are you sure you want to delete this Data?`,
                icon: "warning",
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes!",
                showCancelButton: true,
                buttons: ["Cancel", "Yes, Delete"]
            });
            console.log(willUpdate.isDismissed, 'this is the will update')
            if (willUpdate.isDismissed == false) {
                //performReset()
                performDelete2(el, id);
            } else {
                Swal.fire("Data will not be deleted  :)");
            }
        }


        function performDelete2(el, id) {

            try {
                $.get('{{ route("deletedata") }}?id=' + id,
                    function(data, status) {
                        console.log(status);
                        console.table(data);
                        if (status === "success") {
                            let Data = Swal.fire('success', "Data successfully deleted!.", 'success');
                            $(el).closest("tr").remove();
                            // window.location.reload()

                        }
                    }
                );
            } catch (e) {
                let Data = Swal.fire(e.message);
            }
        }

        $("#name").on('change',function() {
            var value = ['electricity',$("#name").val()]
            $.get("{{ route('getdiscount') }}?value="+value, function(data) {
                console.log(data)
                if(data !== false) {
                $("#discount").text(data[0]);
                $("#current").text(data[1]);
                } else {
                    Swal.fire('error','Unexpected error encountered, please contact the administrator','error')
                }
            })
        })
      })
     
    </script>
    @endsection