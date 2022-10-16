<div>
    <div class="modal fade" id="confirmPin" tabindex="-1" role="dialog" aria-labelledby="confirmPinTitle" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Please input your transaction pin</h5>
                    <button type="button" class="closeConfirmPin btn btn-danger btn-sm" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">

                    <form wire:submit.prevent="confirmPin">
                        <div id='otp' class="potp inputs d-flex flex-row justify-content-center mt-2 @error('pin') is-invalid @enderror">
                            <input class="m-2 text-center form-control rounded" type="password" id="digit-21" name="digit-21" data-next="digit-22" wire:model="pin.first" required maxlength="1" autofocus />
                            <input class="m-2 text-center form-control rounded" type="password" id="digit-22" name="digit-22" data-previous="digit-21" data-next="digit-23" wire:model="pin.second" required maxlength="1" />
                            <input class="m-2 text-center form-control rounded" type="password" id="digit-23" name="digit-23" data-previous="digit-22" data-next="digit-24" wire:model="pin.third" required maxlength="1" />
                            <input class="m-2 text-center form-control rounded" type="password" id="digit-24" name="digit-24" data-previous="digit-23" wire:model="pin.fourth" required maxlength="1" />
                        </div>

                        <div class="invalid-feedback d-flex justify-content-center">@error('pin') {{$message}}@enderror </div>
                        <div class="mt-4" style='margin:10px auto;margin-left:35%'> <button id='buyairtime' type="submit" class="btn btn-danger px-4 validate">Validate</button> </div>
                    </form>


                </div>

            </div>
        </div>
    </div>

    @push('script')
    <script>
        Livewire.on('confirmed-pin', event => {
            $("#confirmPin").modal('hide')
            var event = new Event('start_progress', {
                view: window
                , bubbles: true
                , cancelable: true
            });
            window.dispatchEvent(event)

            Livewire.emit('buy')


        })
        $('#confirmPin').on('shown.bs.modal', function() {
            $('#digit-21').focus();
        })

    </script>

    @endpush
</div>
