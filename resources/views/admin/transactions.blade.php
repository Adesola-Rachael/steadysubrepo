@extends('admin.master')
@section('main')

  <!-- End Navbar -->
  <div class="container-fluid py-4">
    
    <div class="row mt-3">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h6>All Users</h6>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table id="zero-config" class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Title</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Reference Code</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Amount</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Balance Before</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Balance After</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Description</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Username</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Phone Number</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Date</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2" style='visibility:hidden'>DateOrder</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($transactions as $tran)
                    <tr role="row">
                      <td class='ps-4 text-xs font-weight-bold mb-0'>{{ $tran->title }}</td>
                      <td class='ps-4 text-xs font-weight-bold mb-0'>{{$tran->reference}}</td>
                      
                      <td class='ps-4 text-xs font-weight-bold mb-0'>₦{{ number_format($tran->amount,2) }}</td>
                      <td class='ps-4 text-xs font-weight-bold mb-0'>
                          @if($tran->status == 'success' || $tran->status == null)
                          <span class='badge badge-success'>success</span>
                          @else
                          <span class='badge badge-danger'>{{$tran->status}}</span>
                          @endif
                          </td>
                      <td class='ps-4 text-xs font-weight-bold mb-0'>₦{{ number_format($tran->before,2) }}</td>
                      <td class='ps-4 text-xs font-weight-bold mb-0'>₦{{ number_format($tran->after,2) }}</td>
                      <td class='ps-4 text-xs font-weight-bold mb-0'>{{ $tran->description }}</td>
                      <td class='ps-4 text-xs font-weight-bold mb-0'>{{ $tran->user->name }}</td>
                      <td class='ps-4 text-xs font-weight-bold mb-0'>{{ $tran->user->phone }}</td>
                      <td class='ps-4 text-xs font-weight-bold mb-0'>{{ Date('d-M,y | H:i',strtotime($tran->created_at ))}}</td>
                      <td style='visibility:hidden'>{{ strtotime($tran->created_at)}}</td>
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
    <footer class="footer pt-3  ">
      <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6 mb-lg-0 mb-4">
            <div class="copyright text-center text-sm text-muted text-lg-start">
              © <script>
                document.write(new Date().getFullYear())
              </script>,
           
              <a href="#" class="font-weight-bold" target="_blank">Telneting</a>
              . Developed by <a href='https://veenodetech.com'><strong>Veenode</strong></a>
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                <a href="/" class="nav-link text-muted" target="_blank">Home</a>
              </li>
              <li class="nav-item">
                <a href="/presentation" class="nav-link text-muted" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="/blog" class="nav-link text-muted" target="_blank">Contact Us</a>
              </li>
              
            </ul>
          </div>
        </div>
      </div>
    </footer>
  </div>

@endsection
@section('script')

<script>
  $(document).ready( function () {
   
    $('#zero-config').DataTable({
      order: [[10, 'desc']],
    });
} );
</script>

@endsection