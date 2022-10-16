@extends('user.layouts.app')
@section('custom_style')
@endsection

@section('page_name',$pagename)
@section('main_content')
<div class="col-xl-8 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                <div class="widget widget-three">
                    <h5 class="">Notifications</h5>
                    <div class="widget-heading">

                        <div class="widget-content col-md-12">
                            <div id="default-ordering_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                
                                <div class="table-responsive">
                                    <table id="zero-config" class="table table-hover dataTable"
                                        style="width: 100%;" role="grid" aria-describedby="default-ordering_info">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting" tabindex="0" aria-controls="default-ordering"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Name: activate to sort column ascending"
                                                    style="width: 108px;">Title</th>
                                              
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
                                        @if(count($notif))
                                            @foreach($notif as $notify)
                                            <tr role="row">
                                                <td>{{ $notify->title }}</td>
                                                <td>{{ $notify->description }}</td>
                                                <td>{{ Date('d-M,y | H:i:s',strtotime($notify->created_at ))}}</td>
                                                {{-- <td class="text-center"><a href='transactiondetials/{{ $tran->id }}'
                                                        class="btn btn-primary btn-sm">View</a>
                                                </td> --}}
                                            </tr>
                                            @endforeach
                                            @endif


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
            </div>

@endsection


@section('custom_script')
<script>

</script>

@endsection
