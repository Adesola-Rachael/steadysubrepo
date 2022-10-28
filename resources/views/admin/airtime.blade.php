@extends('admin.master')
@section('head-links')
@endsection
@section('main')
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="page-header">
            <div class="page-title">
                <h3>Load Airtime</h3>
            </div>
            <div class="dropdown filter custom-dropdown-icon">
                <a class="dropdown-toggle btn" href="#" role="button" id="filterDropdown" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"><span class="text"><span>Show</span> : Daily
                        Analytics</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-chevron-down">
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

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">


                <div class="col-md-12 layout-spacing">
                    <div class="statbox widget box box-shadow">

                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Load Airtime</h4>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Available pins for each network</h5>
                            <!-- MTN Available Balance -->
                            <a href='/airtime/mtn' class="btn btn-warning mb-3 mr-3 position-relative">
                                MTN
                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
                                    {{count($mtn) }}
                                </span>
                            </a>

                            <!-- Airtel Available Balance -->
                            <a href='/airtime/airtel' class="btn btn-danger mb-3 mr-3 position-relative">
                                AIRTEL
                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
                                    {{count($airtel) }}
                                </span>
                            </a>

                            <!-- Glo Available Balance -->
                            <a href='/airtime/glo'  class="btn btn-success mb-3 mr-3 position-relative">
                                GLO
                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">
                                    {{count($glo) }}
                                </span>
                            </a>

                            <!-- 9MOBILE Available Balance -->
                            <a href='/airtime/9mobile' class="btn btn-dark mb-3 mr-3 position-relative">
                                9MOBILE
                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">
                                    {{count($mobile) }}
                                </span>
                            </a>
                            <form id='loadairtime' class="transaction-form">
                                <input type="hidden" name="_token" value="ABLfa1xQ9oLtSKt0JFtyiTUX6PkF1RVb4bdhpBRH">
                                <input type="hidden" name="transaction_pin" value="">
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label for="network">Select Network</label>
                                        <select class="form-control " id="network" name="network" required="">
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
                                    <div class="col-md-4">
                                        <label for="price">Select Amount</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">₦</span>
                                            </div>
                                            <select class="form-control " id="amount" name="amount" value=""
                                                required="">
                                                <option value="100">100</option>
                                                <option value="200">200</option>
                                                <option value="500">500</option>
                                                <option value="1000">1000</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-12"><br>

                                        <label for="quantity">Pin (<span class='text-danger'>Please seperate pins by comma</span>)</label>
                                        <input multiple type="number/text" class="form-control " name="quantity" id="pin"
                                            placeholder="Input multiple pin, seperate by comma">
                                    </div>
                                   
                                    <div class='col-md-6 m-2'>

                                        <div class='badge badge-primary' id='pinval'></div>
                                        <span style='display:none' class='btn btn-sm btn-danger' id='pindel'>Del</span>
                                    </div>
                                </div>
                                <div class="form-group-row">

                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">

                                        <button class="btn btn-primary submit my-btn">Load Airtime</button>
                                        </span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-xl-6 col-lg-6 col-sm-6  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <div id="zero-config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">

                        <div class="table-responsive">
                            <table id="zero-config" class="table table-striped dataTable" style="width: 100%;"
                                role="grid" aria-describedby="zero-config_info">
                                <thead>
                                    <tr role="row">
                                        {{-- <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                            rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending"
                                            style="width: 108px;">S/N</th> --}}
                                        <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 166px;">Pin</th>
                                        {{-- <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 166px;">Network</th> --}}
                                        <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 166px;">Amount</th>

                                        {{-- <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1"
                                            colspan="1" aria-label="Office: activate to sort column ascending"
                                            style="width: 77px;">Action</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($airtimes as $airtime)
                                    @for($i=1000;$i<=1100;$i+=1000) 
                                    <tr role="row">
                                        {{-- <td>{{ $airtime->serial_no }}</td> --}}
                                        <td>{{ $airtime->pin }}<br>
                                       

                                        </td>
                                       
                                        <td>₦{{ number_format($airtime->amount,2) }}<br>
                                            @if($airtime->network == 'GLO')
                                            <span class='badge badge-success'>{{ $airtime->network }}</span>
                                            @elseif($airtime->network == 'MTN')
                                            <span class='badge badge-warning'>{{ $airtime->network }}</span>
                                            @elseif($airtime->network == 'AIRTEL')
                                            <span class='badge badge-danger'>{{ $airtime->network }}</span>
                                            @else
                                            <span class='badge badge-secondary'>{{ $airtime->network }}</span>
                                            @endif
                                        </td>

                                        <td class="text-center"><a data-id='{{ $airtime->id }}'
                                                class="deleteairtime btn btn-danger btn-sm">Delete</a>
                                        </td>
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
     
    // var myPin = []
    // $("#pin").keypress(function(e) {
    //     var key = e.which
    //     if(key == 44 && $("#pin").val().length > 10) {
    //         myPin.push($("#pin").val())
    //         $("#pinval").text(myPin)
    //         $("#pin").val('')
    //         $("#pindel").show()
    //     }
    // })
    // $("#pindel").click(function() {
    //     if(myPin.length == 1) {
    //         myPin.pop()
    //     $("#pinval").text(myPin)
    //     $("#pindel").hide()
    //     } else {
    //         myPin.pop()
    //     $("#pinval").text(myPin)
    //     }
       
    // })

         $("#loadairtime").on('submit',async function(e) {
         e.preventDefault();
         Swal.fire('Loading pin,please wait...')
         var fd = new FormData;
        
         fd.append('network', $("#network").val());
         fd.append('amount', $("#amount").val());
         fd.append('pin', $("#pin").val());
        //  fd.append('pin', $("#pinval").text());
       
         console.log(fd)
         $.ajax({
             type: 'POST',
             url: "{{route('loadairtime')}}",
             data: fd,
             cache: false,
             contentType: false,
             processData: false,
             success: function($data) {
                 console.log('the data', $data)
                 swal.close()
              
                 Swal.fire('success', 'Pin Loaded Successfully!', 'success')
                 window.location.reload()

             },
             error: function(data) {
                 console.log(data)
                 swal.close()
                 Swal.fire('Opps!', 'Something went wrong, pin not loaded', 'error')
             }
         })
     })
     $('body').on('click', '.deleteairtime', function() {
           // var id = $("#delete_id").val();
           id = $(this).data('id');
           console.log(id)
           var token = $("meta[name='csrf-token']").attr("content");
           var el = this;
           // alert(user_id);
           resetAccount2(el, id);
       });


       async function resetAccount2(el, id) {
           const willUpdate = await Swal.fire({
               title: "Confirm Airtime Delete",
               text: `Are you sure you want to delete this airtime?`,
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
               Swal.fire("airtime will not be deleted  :)");
           }
       }


       function performDelete2(el, id) {

           try {
               $.get('{{ route("deleteairtime") }}?id=' + id,
                   function(data, status) {
                       console.log(status);
                       console.table(data);
                       if (status === "success") {
                           let alert = Swal.fire('success', "Airtime successfully deleted!.", 'success');
                           $(el).closest("tr").remove();
                           // window.location.reload()

                       }
                   }
               );
           } catch (e) {
               let alert = Swal.fire(e.message);
           }
       }
     })
    
</script>

@endsection