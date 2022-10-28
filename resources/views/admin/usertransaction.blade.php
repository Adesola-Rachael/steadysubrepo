@extends('admin.master')
@section('head-links')
@endsection
@section('main')
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="page-header">
            <div class="page-title">
                <h3>All Users</h3>
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


            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <div id="zero-config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">

                        <div class="table-responsive">
                            <table id="zero-config" class="table table-striped dataTable" style="width: 100%;"
                                role="grid" aria-describedby="zero-config_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                            rowspan="1" colspan="1"
                                            aria-label="Name: activate to sort column ascending"
                                            style="width: 108px;">Title</th>
                                        <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                            rowspan="1" colspan="1"
                                            aria-label="Position: activate to sort column ascending"
                                            style="width: 166px;">Amount</th>
                                        <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                            rowspan="1" colspan="1"
                                            aria-label="Position: activate to sort column ascending"
                                            style="width: 166px;">Description</th>
                                        <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                            rowspan="1" colspan="1"
                                            aria-label="Office: activate to sort column ascending"
                                            style="width: 77px;">Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($transactions as $tran)
                                    <tr role="row">
                                        <td>{{ $tran->title }}</td>
                                        <td>₦{{ number_format($tran->amount,2) }}</td>
                                        <td>{{ $tran->description }}</td>
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
@endsection