@extends('admin.master')
@section('head-links')
<link rel="stylesheet" type="text/css" href="{{ asset('superasset/assets/css/widgets/modules-widgets.css')}}">

@endsection
@section('main')
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="page-header">
            <div class="page-title">
                <h3>Admin Dashboard</h3>
            </div>
            <div class="dropdown filter custom-dropdown-icon">
                <a class="dropdown-toggle btn" href="#" role="button" id="filterDropdown" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"><span class="text"><span>Show</span> : Daily
                        Analytics</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-chevron-down">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg></a>

               
            </div>
        </div>

        <div class="row layout-top-spacing">
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                <div class="widget widget-account-invoice-two">
                    <div class="widget-content">
                        <div class="account-box">
                            <div class="info">
                                <h5 class="">Admin</h5>
                                <p class="inv-balance">₦{{ number_format($admin_balance,2) }}</p>
                            </div>
                          
                            <div class="acc-action">
                                <div class="">
                                    <a>Admin Balance:₦{{ number_format($admin_balance,2) }}</a><br>
                                    <a>Total User Funding:₦{{ number_format($total_income,2) }}</a><br>
                                    <a>Total User Balance:₦{{ number_format($total_balance,2) }}</a><br>
                                    <a>Total User Spent:₦{{ number_format($total_spent,2) }}</a>
                                </div>
                              
                            </div>
                            <div class="acc-action">
                                <div class="">
                                    <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></a>
                                    <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg></a>
                                </div>
                                <a type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#fundwalletmodal">
                                Fund Wallet
                            </a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>


           
            <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="row widget-statistic">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                        <div class="widget widget-one_hybrid widget-followers">
                            <div class="widget-heading">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-users">
                                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="9" cy="7" r="4"></circle>
                                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                    </svg>
                                </div>
                                <p class="w-value">{{ count($users) }}</p>
                                <h5 class="">Users</h5>
                            </div>
                            <div class="widget-content">
                                <div class="w-chart">
                                    <div id="hybrid_followers"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                        <div class="widget widget-one_hybrid widget-referral">
                            <div class="widget-heading">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-link">
                                        <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71">
                                        </path>
                                        <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71">
                                        </path>
                                    </svg>
                                </div>
                                <p class="w-value">{{ count($manuals) }}</p>
                                <h5 class="">Manual Fundings</h5>
                            </div>
                            <div class="widget-content">
                                <div class="w-chart">
                                    <div id="hybrid_followers1"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                        <div class="widget widget-one_hybrid widget-engagement">
                            <div class="widget-heading">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-message-circle">
                                        <path
                                            d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                                        </path>
                                    </svg>
                                </div>
                                <p class="w-value">{{ count($tickets) }}</p>
                                <h5 class="">Tickets</h5>
                            </div>
                            <div class="widget-content">
                                <div class="w-chart">
                                    <div id="hybrid_followers3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Manual Funding</h5>

                    </div>
                    <table id="zero-config" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Bank Nmae</th>
                                <th>Amount</th>
                               
                                <th> User Phone</th>
                                {{-- <th>Date</th> --}}
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($manuals as $manual)
                            <tr>
                                <td>{{ $manual->account_name }}</td>
                                <td>{{ $manual->bank_name }}</td>
                                <td>{{ number_format($manual->amount,2) }}</td>
                               
                                <td>{{ $manual->user->phone }}</td>
                                {{-- <td>{{ Date('d-m-y',strtotime($manual->created_at)) }}</td> --}}
                                <td><a class='deletemanual btn btn-danger btn-sm' data-id='{{ $manual->id }}'>Delete</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Bank Name</th>
                                <th>Amount</th>
                                <th>User</th>
                                <th>Phone</th>
                                <th>Date</th>

                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <!-- Button trigger modal -->


            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Create Notification</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id='createnotification'>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Title</label>
                                    <input type="text" name='title' class="form-control" id="title"
                                        aria-describedby="emailHelp" placeholder="Notification Title">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Description</label>
                                    <textarea type="text" name='description' class="form-control" id="description"
                                        placeholder="Description"></textarea>
                                </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="fundwalletmodal" tabindex="-1" role="dialog"
            aria-labelledby="fundwalletmodaltt" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Fund Wallet</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="/adminfund" method="POST"> @csrf
                            <input type="hidden" name="user_email" value="{{ Auth::user()->email }}"> 
                            <input type="number" placeholder='Enter amount to be funded' class='form-control' min='100' name="amount" > 
                            <input type="hidden" name="cartid" value="FAFUDATA{{Auth::user()->email}}{{Date('Y-m-s')}}"> 
                         
                        </div>
                    <div class="modal-footer">
                     
                        <button type="submit" class="btn btn-primary">Fund</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-activity-three">

                    <div class="widget-heading">
                        <h5 class="">Notifications</h5>
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#exampleModalCenter">
                            Create
                        </button>

                    </div>

                    <div class="widget-content">

                        <div class="mt-container mx-auto">
                            <div class="timeline-line">
                                @foreach($notifications as $notification)
                                <div class="item-timeline timeline-new">
                                    <div class="t-dot">
                                        <div class="t-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-check">
                                                <polyline points="20 6 9 17 4 12"></polyline>
                                            </svg></div>
                                    </div>
                                    <div class="t-content">
                                        <div class="t-uppercontent">
                                            <h5>{{ $notification->title }}</h5>
                                            <a data-id='{{ $notification->id }}'
                                                class="deletenotification btn btn-danger btn-sm">Delete</a>
                                        </div>
                                        <p><span>{{ $notification->description }}</span></p>
                                        <div class="tags">
                                            <div class="badge badge-primary">Logs</div>
                                            <div class="badge badge-success">CPanel</div>
                                            <div class="badge badge-warning">Update</div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Complain Tickets</h5>

                    </div>
                    <table id="ticket-config" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Detials</th>
                                <th>User Name</th>
                                <th>Phone Number</th>
                                <th>Email Address</th>
                                <th>Date</th>
                                <th class="no-content">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tickets as $i => $ticket)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $ticket->description }}</td>
                                <td>{{ $ticket->user->name }}</td>
                                <td>{{ $ticket->user->phone }}</td>
                                <td>{{ $ticket->user->email }}</td>
                                <td>{{ Date('d-M,Y',strtotime($ticket->created_at)) }}</td>

                                <td>
                                    <a data-id='{{ $ticket->id }}' class='deleteticket btn btn-danger btn-sm'>Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        {{-- <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                                <th></th>
                            </tr>
                        </tfoot> --}}
                    </table>
                </div>
            </div>

        </div>

      

@endsection
@section('script')
<script>
$('body').on('click', '.deletemanual', function() {
    // var id = $("#delete_id").val();
    id = $(this).data('id');
    console.log(id)
    var token = $("meta[name='csrf-token']").attr("content");
    var el = this;
    // alert(user_id);
    resetAccount3(el, id);
});


async function resetAccount3(el, id) {
    const willUpdate = await Swal.fire({
        title: "Confirm Manual Funding Delete",
        text: `Are you sure you want to delete this Manual Funding?`,
        icon: "warning",
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes!",
        showCancelButton: true,
        buttons: ["Cancel", "Yes, Delete"]
    });
    console.log(willUpdate.isDismissed, 'this is the will update')
    if (willUpdate.isDismissed == false) {
        //performReset()
        performDelete3(el, id);
    } else {
        Swal.fire("Manual Funding will not be deleted  :)");
    }
}


function performDelete3(el, id) {

    try {
        $.get('{{ route("deletemanual") }}?id=' + id,
            function(data, status) {
                console.log(status);
                console.table(data);
                if (status === "success") {
                    let alert = Swal.fire('success', "Manual Funding successfully deleted!.", 'success');
                    $(el).closest("tr").remove();
                    // window.location.reload()

                }
            }
        );
    } catch (e) {
        let alert = Swal.fire(e.message);
    }
}
</script>

@endsection