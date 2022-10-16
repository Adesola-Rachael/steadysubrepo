<div>


    <div class="modal fade" id="pinValidation" role="dialog" aria-labelledby="pinValidationTitle" aria-hidden="true" wire:init='checkIfPinExists' wire:ignore.self>
        <div class="modal-dialog card modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>SET UP YOUR PIN</h5>
                    <button type="button" class="close_pinValidation btn-sm btn btn-outline-danger" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="card p-2 text-center">
                        <h6>Please set up your transaction pin</h6>
                        <div> </div>
                        <form wire:submit.prevent="save">
                            <div id='otp' class="potp inputs d-flex flex-row justify-content-center mt-2">
                                <input class="m-2 text-center form-control rounded" type="password"  id="digit-11" name="digit-11" data-next="digit-12" wire:model="first" required maxlength="1" autofocus/>
                                <input class="m-2 text-center form-control rounded" type="password"  id="digit-12" name="digit-12" data-previous="digit-11" data-next="digit-13" wire:model="second" required maxlength="1" />
                                <input class="m-2 text-center form-control rounded" type="password"  id="digit-13" name="digit-13" data-previous="digit-12" data-next="digit-14" wire:model="third" required maxlength="1" />
                                <input class="m-2 text-center form-control rounded" type="password"  id="digit-14" name="digit-14" data-previous="digit-13" wire:model="fourth" required maxlength="1" />
                            </div>
                            
                            <div class="mt-4"> <button type='submit' class="btn btn-danger px-4 validate">Submit</button> </div>
                        </form>
                    </div>


                </div>

            </div>
        </div>
    </div>
    @push('script')
    <script>
        Livewire.on('set-pin', event => {

            $("#pinValidation").modal('show')
        })
        Livewire.on('set-pin', event => {
            swal.close()
            $("#pinValidation").modal('hide')
            Swal.fire('Success', 'Please check your email to complete PIN verification!', 'success')
            // window.location.reload()
        })
        Livewire.on('error', event => {
            swal.close()
            Swal.fire('Opps!', 'Something went wrong, please try again later or contact the administrator', 'error')
            // window.location.reload()
        })
        $('#pinValidation').on('shown.bs.modal', function() {
            $('#digit-11').focus();
        })

    </script>
    @endpush
</div>
