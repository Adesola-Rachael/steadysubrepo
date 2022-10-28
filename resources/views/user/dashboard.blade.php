@extends('user.layouts.app')
@section('custom_style')
    
@endsection

@section('page_name',$pagename)
@section('main_content')
<div class="col-xl-8 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
    <div class="widget widget-three">
        <h5 class="">Latest Transactions</h5>
        <div class="widget-heading">

            <div id="zero-config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">

                <div class="table-responsive">
                    <table id='zero-config' class='table table-striped dataTable' style="width: 100%;" role="grid"
                        aria-describedby="default-ordering_info">
                        <thead>
                            <tr role="row">
                                <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1"
                                    colspan="1" aria-label="Name: activate to sort column ascending"
                                    style="width: 108px;">Title</th>
                                <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1"
                                    colspan="1" aria-label="Position: activate to sort column ascending"
                                    style="width: 166px;">Amount
                                </th>
                                 <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1"
                                    colspan="1" aria-label="Position: activate to sort column ascending"
                                    style="width: 166px;">Status
                                </th>
                                 <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1"
                                    colspan="1" aria-label="Position: activate to sort column ascending"
                                    style="width: 166px;">Before Bal.
                                </th>
                                 <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1"
                                    colspan="1" aria-label="Position: activate to sort column ascending"
                                    style="width: 166px;">After Bal.
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1"
                                    colspan="1" aria-label="Position: activate to sort column ascending"
                                    style="width: 166px;">
                                    Description</th>
                                <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1"
                                    colspan="1" aria-label="Office: activate to sort column ascending"
                                    style="width: 77px;">Time</th>
                                    <th style='visibility:hidden'>DateOrder</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($transactions as $tran)
                            <tr role="row">
                                <td>{{ $tran->title }}</td>
                                <td>₦{{ number_format($tran->amount,2) }}</td>
                                <td>
                                    @if($tran->status == 'success' || $tran->status == null)
                                    <span class='badge badge-success'>
                                        success
                                    </span>
                                    @else
                                     <span class='badge badge-danger'>
                                         {{ $tran->status }}
                                    </span>
                                    @endif
                                 </td>
                                <td>₦{{ number_format($tran->before,2) }}</td>
                                <td>₦{{ number_format($tran->after,2) }}</td>
                                <td>{{ $tran->description }}</td>
                                <td>{{ Date('d-M,y | H:i',strtotime($tran->created_at ))}}</td>
                                  <td style='visibility:hidden'>{{ strtotime($tran->created_at)}}</td>
                                {{-- <td class="text-center"><a href='transactiondetials/{{ $tran->id }}'
                                        class="btn btn-primary btn-sm">View</a>
                                </td> --}}
                            </tr>
                        @endforeach


                        </tbody>
                        <tfoot>
                            <tr>
                                <th rowspan="1" colspan="1">Name</th>
                                <th rowspan="1" colspan="1">Position</th>
                                <th class="invisible" rowspan="1" colspan="1"></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
       
    </div>
</div>



@endsection

@section('custom_script')

@endsection