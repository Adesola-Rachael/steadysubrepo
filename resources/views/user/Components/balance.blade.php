   <div class="col-md-4 mb-4">
        <div class="card bg-transparent shadow-xl" style='border-bottom-left-radius:0px;border-bottom-right-radius:0px;'>
            <div class="overflow-hidden position-relative border-radius-xl" style="background-image: url('{{asset('assets/img/curved-images/curved14.jpg')}}');">
                <span class="mask bg-gradient-dark"></span>
                <div class="card-body position-relative z-index-1 p-3">
                    <div style='float:right' class="fas fa-cash text-white p-2">

                    </div>

                    <div class="d-flex">
                        <div class="d-flex">
                            <div class="me-4">
                                <p class="text-white text-sm opacity-8 mb-0">Total Balance</p>
                                <h6 class="text-white mb-0"> ₦{{number_format($user->balance) }}</h6>
                            </div>
                            <div>
                                <p class="text-white text-sm opacity-8 mb-0">Total Spent</p>
                                <h6 class="text-white mb-0"> ₦{{number_format($user->spent) }}</h6>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

