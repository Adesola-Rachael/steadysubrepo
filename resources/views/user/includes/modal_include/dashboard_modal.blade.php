<div class="modal fade" id="confirmPin" tabindex="-1" role="dialog" aria-labelledby="confirmPinTitle"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-cente#ec4d37" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">PIN VALIDATION</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <div class="container height-100 d-flex justify-content-center align-items-center">
                                <div class="position-relative">
                                    {{-- <div class="card p-2 text-center"> --}}
                                        <h6>Please input your transaction pin</h6>
                                      
                                        <div id='otp' class="inputs d-flex flex-row justify-content-center mt-2">
                                            <input class="m-2 text-center form-control rounded" type="number" id="first"
                                                maxlength="1" />
                                            <input class="m-2 text-center form-control rounded" type="number"
                                                id="second" maxlength="1" />
                                            <input class="m-2 text-center form-control rounded" type="number" id="third"
                                                maxlength="1" />
                                            <input class="m-2 text-center form-control rounded" type="number"
                                                id="fourth" maxlength="1" />
                                        </div>
                                        <div class="mt-4"> <button id='buyairtime'
                                                class="btn btn-danger px-4 validate">Validate</button> </div>

                                    {{-- </div> --}}

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            
            
<div class="modal fade" id="notification_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">{{$notifications->title ?? "Welcome"}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      {{$notifications->description ?? "Welcome to Steadysub"}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



<!-- end notificaion section -->

            <div class="modal fade" id="pinValidation" tabindex="-1" role="dialog" aria-labelledby="pinValidationTitle"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-center" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">SET UP YOUR PIN</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <div class="container height-100 d-flex justify-content-center align-items-center">
                                <div class="position-relative">
                                    <div class="card p-2 text-center">
                                        <h6>Please set up your transaction pin</h6>
                                        <div> </div>
                                        <form id='submitpin'>
                                            <div id='potp' class="inputs d-flex flex-row justify-content-center mt-2">
                                                <input class="m-2 text-center form-control rounded" type="number"
                                                    id="pfirst" maxlength="1" />
                                                <input class="m-2 text-center form-control rounded" type="number"
                                                    id="psecond" maxlength="1" />
                                                <input class="m-2 text-center form-control rounded" type="number"
                                                    id="pthird" maxlength="1" />
                                                <input class="m-2 text-center form-control rounded" type="number"
                                                    id="pfourth" maxlength="1" />
                                            </div>
                                            <input class='form-control' disabled id='pin_email' type='email'
                                                value='{{ Auth::user()->email }}'>
                                            <div class="mt-4"> <button type='submit'
                                                    class="btn btn-danger px-4 validate">Submit</button> </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>