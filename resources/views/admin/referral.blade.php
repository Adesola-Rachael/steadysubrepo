@extends('admin.master')
@section('head-links')
@endsection
@section('main')
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="page-header">
            <div class="page-title">
                <h3>Referrals</h3>
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
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                <div class="col-lg-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Set Referral Amount - ₦{{ number_format($referral_amount,2) }}</h4>
                                </div>
                            </div>
                        </div>
                        <form id="buy_airtime">
                            <div class="widget-content widget-content-area">
                                <p class="">Amount(₦)</p>
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
                                    <input required="" type="number" min="100" id="amount" class="form-control"
                                        placeholder="Referral Amount" aria-label="Amount">

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
                            <table id="zero-config" class="table table-striped dataTable" style="width: 100%;"
                                role="grid" aria-describedby="zero-config_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1"
                                            colspan="1" aria-label="Name: activate to sort column ascending"
                                            style="width: 108px;">Title</th>
                                        <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 166px;">Amount</th>
                                        <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 166px;">Description</th>
                                        <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 166px;">Username</th>
                                        <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 166px;">Phone Number</th>
                                        <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1"
                                            colspan="1" aria-label="Office: activate to sort column ascending"
                                            style="width: 77px;">Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($transactions as $tran)
                                    <tr role="row">
                                        <td>{{ $tran->title }}</td>
                                        <td>₦{{ number_format($tran->amount,2) }}</td>
                                        <td>{{ $tran->description }}</td>
                                        <td>{{ $tran->user->name }}</td>
                                        <td>{{ $tran->user->phone }}</td>
                                        <td>{{ Date('d-M,y | H:i',strtotime($tran->created_at ))}}</td>
                                        {{-- <td class="text-center"><a href='transactiondetials/{{ $tran->id }}'
                                                class="btn btn-primary btn-sm">View</a>
                                        </td> --}}
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
          $("#buy_airtime").on('submit',async function(e) {
          e.preventDefault();
          Swal.fire('Creating notifications,please wait...')
          var fd = new FormData;
         
          fd.append('amount', $("#amount").val());
        
          console.log(fd)
          $.ajax({
              type: 'POST',
              url: "{{route('set_ref_amount')}}",
              data: fd,
              cache: false,
              contentType: false,
              processData: false,
              success: function($data) {
                  console.log('the data', $data)
                  swal.close()
               
                  Swal.fire('success', 'Referral Amount Set Successfully!', 'success')
                  window.location.reload()

              },
              error: function(data) {
                  console.log(data)
                  swal.close()
                  Swal.fire('Opps!', 'Something went wrong, referral amount not set', 'error')
              }
          })
      })
      })
     
</script>
@endsection