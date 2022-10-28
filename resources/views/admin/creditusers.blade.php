@extends('admin.master')
@section('head-links')
@endsection
@section('main')
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="page-header">
            <div class="page-title">
                <h3>Credit/Debit Users</h3>
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
                                    <h4>Credit/Debit User</h4>
                                </div>
                            </div>
                        </div>
                        <form id="credit_user">
                            <div class="widget-content widget-content-area">
                                <p class="">Search Users</p>
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
                                    <input type='text' id='searchuser' class='form-control'
                                        placeholder='Search Users...'>


                                </div>

                                <div class="input-group mb-4">
                                    
                                    <input type='text' readonly id='searcheduser' class='form-control'
                                    placeholder='Searching Users...'>
                                    <input type='hidden' id='user_id'>




                                </div>

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
                                    <input type='number' placeholder='Enter Amount' required="" type="number" min="100"
                                        id="amount" class="form-control" aria-label="Amount">

                                </div>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">


                                    </div>
                                    <input type='radio' value='credit' name='type' class="type form-control">Credit User
                                    <input type='radio' value='debit' name='type' class="type form-control">Debit User

                                </div>


                                <button type="submit" class="btn btn-primary float-right">
                                    Proceed
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
                                            colspan="1" aria-label="Office: activate to sort column ascending"
                                            style="width: 77px;">Description</th>
                                        <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1"
                                            colspan="1" aria-label="Office: activate to sort column ascending"
                                            style="width: 77px;">Amount</th>
                                        <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1"
                                            colspan="1" aria-label="Office: activate to sort column ascending"
                                            style="width: 77px;">Username</th>
                                        <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1"
                                            colspan="1" aria-label="Office: activate to sort column ascending"
                                            style="width: 77px;">Date</th>
                                        <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1"
                                            colspan="1" aria-label="Office: activate to sort column ascending"
                                            style="width: 77px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($transactions as $tran)
                                    <tr role="row">
                                        <td>{{ $tran->title }}</td>
                                        <td>{{ $tran->description }}</td>
                                        <td>₦{{ number_format($tran->amount,2) }}</td>
                                        <td>{{ $tran->user->name }}<br>{{ $tran->user->phone }}</td>

                                        <td>{{ Date('d-M,Y',strtotime($tran->created_at ))}}</td>
                                        <td class="text-center"><a data-id='{{ $tran->id }}'
                                                class="deletecredit btn btn-danger btn-sm">Delete</a>
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
          $("#credit_user").on('submit',async function(e) {
          e.preventDefault();
          Swal.fire({
              type: 'info',
              title: 'Loading...',
              text: 'Transaction in progress, please wait...🙂',
              showConfirmButton: false,
              timer: 2000
            })
          var fd = new FormData;
         
          fd.append('user_id', $("#user_id").val());
          fd.append('amount', $("#amount").val());
          fd.append('type', $("input[name='type']:checked").val());
        
          console.log(fd)
          $.ajax({
              type: 'POST',
              url: "{{route('creditusers2')}}",
              data: fd,
              cache: false,
              contentType: false,
              processData: false,
              success: function(data) {
                  console.log('the data', data)
                  swal.close()
                  if(data == true) {
                    Swal.fire('success', 'User Successfully Credited!', 'success')
                  window.location.reload()
                  }
                  else {
                      Swal.fire("Opps",'Insufficient balance','error')
                  }
               
                 

              },
              error: function(data) {
                  console.log(data)
                  swal.close()
                  Swal.fire('Opps!', 'Something went wrong, contact the administrator', 'error')
              }
          })
      })
      $("#searchuser").on('input',function() {
          var val= $("#searchuser").val()

     $.get("{{ route('searchuser') }}?val="+val,function(data) {
         console.log(data,'searching')
         $.each( data, function( key, value ) {
            $("#searcheduser").val(value.name)
            $("#user_id").val(value.id)
        });
     })
 
})

      $('body').on('click', '.deletecredit', function() {
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
                title: "Confirm Transaction Delete",
                text: `Are you sure you want to delete this transaction?`,
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
                Swal.fire("Transaction will not be deleted  :)");
            }
        }


        function performDelete2(el, id) {

            try {
                $.get('{{ route("deletecredit") }}?id=' + id,
                    function(data, status) {
                        console.log(status);
                        console.table(data);
                        if (status === "success") {
                            let alert = Swal.fire('success', "Transaction successfully deleted!.", 'success');
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