@extends('admin.master')
@section('head-links')
@endsection
@section('main')
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="page-header">
            <div class="page-title">
                <h3>Alerts</h3>
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
                                    <h4>Create Alerts</h4>
                                </div>
                            </div>
                        </div>
                        <form id="alert">
                            <div class="widget-content widget-content-area">
                                <p class="">Title</p>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                       

                                    </div>
                                    <textarea required="" type="number" min="100" id="title" class="form-control"
                                        aria-label="Amount"></textarea>

                                </div>
                               
                                <button type="submit" class="btn btn-primary float-right">
                                    Create
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
                                            style="width: 77px;">Date</th>
                                            <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1"
                                            colspan="1" aria-label="Office: activate to sort column ascending"
                                            style="width: 77px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($alerts as $alert)
                                    <tr role="row">
                                        <td>{{ $alert->title }}</td>
                                       
                                        <td>{{ Date('d-M,Y',strtotime($alert->created_at ))}}</td>
                                        <td class="text-center"><a data-id='{{ $alert->id }}'
                                                class="deletealert btn btn-danger btn-sm">Delete</a>
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
          $("#alert").on('submit',async function(e) {
          e.preventDefault();
          Swal.fire('Creating alerts,please wait...')
          var fd = new FormData;
         
          fd.append('title', $("#title").val());
        
          console.log(fd)
          $.ajax({
              type: 'POST',
              url: "{{route('createalert')}}",
              data: fd,
              cache: false,
              contentType: false,
              processData: false,
              success: function($data) {
                  console.log('the data', $data)
                  swal.close()
               
                  Swal.fire('success', 'Alert Created Successfully!', 'success')
                  window.location.reload()

              },
              error: function(data) {
                  console.log(data)
                  swal.close()
                  Swal.fire('Opps!', 'Something went wrong, alert not created', 'error')
              }
          })
      })
      $('body').on('click', '.deletealert', function() {
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
                title: "Confirm Alert Delete",
                text: `Are you sure you want to delete this Alert?`,
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
                Swal.fire("Alert will not be deleted  :)");
            }
        }


        function performDelete2(el, id) {

            try {
                $.get('{{ route("deletealert") }}?id=' + id,
                    function(data, status) {
                        console.log(status);
                        console.table(data);
                        if (status === "success") {
                            let alert = Swal.fire('success', "Alert successfully deleted!.", 'success');
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