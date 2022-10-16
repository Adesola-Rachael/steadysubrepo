<div class="transaction_modal modal fade" tabindex="-1" role="dialog" aria-labelledby="confirmPinTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">TRANSACTION RECEIPT</h5>
                <button type="button" class="close_transaction_modal btn btn-danger btn-sm" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body" id='t_receipt'>

                <h6 class="mb-0 text-md" style='border-bottom:solid 1px black'>Transaction ID: {{$completed_details['transaction']['reference']??''}} </h6>

                <h6 class="mb-0 text-md" style='border-bottom:solid 1px black'>Amount Paid: ₦ {{$completed_details['transaction']['amount']??''}} </h6>

                <h6 class="mb-0 text-md" style='border-bottom:solid 1px black'>Service Provider: {{$completed_details['provider']??''}} </h6>

                @isset($phone)<h6 class="mb-0 text-md" style='border-bottom:solid 1px black'>Mobile Phone: {{$phone}}</h6>@endif

                <h6 class="mb-0 text-md" style='border-bottom:solid 1px black'>{{$completed_details['plan']??''}} </h6>


                <h6 class="mb-0 text-md" style='border-bottom:solid 1px black'>Date: {{$completed_details['transaction']['created_at']??''}} </h6>

                <h6 class="mb-0 text-md" style='border-bottom:solid 1px black'>Status: {{ucwords($completed_details['transaction']['status']??'')}} </h6>

                <h6 class="mb-0 text-md" style='border-bottom:solid 1px black'>Payer: {{auth()->user()->email}} </h6>

            </div>

            <div class="modal-footer">
                @php
                $t_id= $completed_details['transaction']['id']??'';
                @endphp
                <a type="button" id='t_href' href="{{url('print_transaction_receipt/'.$t_id)}}" class="btn btn-primary">Print receipt</a>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>
@push('script')
<script>
    window.addEventListener('transaction_completed', event => {
        $(".transaction_modal").modal('show')
    })

</script>

@endpush
