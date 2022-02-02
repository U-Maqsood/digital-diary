<div class="offcanvas offcanvas-start side-menu overflow-auto" tabindex="-1" id="left-menu"
    aria-labelledby="offcanvasLabel">
    <div class="container">
        <div class="text-end mt-3">
            <a><img src="{{ url('/images/arrow-back.png') }}" width="25px" data-bs-dismiss="offcanvas"
            aria-label="Close" alt="Arrow"></a>

        </div>
        <div class="text-center">
            <img src="{{ url('images/photo.png') }}" width="120px" alt="Photo">
            <br>
            <span class="h2 fw-bold nunito-font capitalize text-muted">{{ session('user')->name }}</span>
            <br>
            <a class="btn btn-white text-pink text-decoration-none btn-rounded px-3"><strong>Monthly
                    Subscription</strong></a>
            <p class="text-muted px-5">Your subscription will be expire after <strong class="text-dark">7
                    days</strong>
            </p>
            <div class="">
                <a data-bs-toggle="offcanvas" href="#edit-profile" role="button"
                aria-controls="offcanvas" class="btn btn-rounded py-3 profile-btn"><strong
                class="fw-bold">EDIT PROFILE</strong> </a>
            </div>

            <div class="container left-menu-container text-start py-3 my-3 px-6 shadow">
                <div class="py-3 border-bottom border-bottom">
                    <a href="" class="text-decoration-none text-muted width-100">
                        <img src="{{ url('images/list.png') }}" width="20px" alt="Photo">
                        <span class="ms-3">Send Gift</span>
                    </a>
                </div>
                <div class="py-3 border-bottom">
                    <a href="{{ url('subscription') }}" class="text-decoration-none text-muted">
                        <img src="{{ url('images/subscription.png') }}" width="20px" alt="Photo">
                        <span class="ms-3">Subscription</span>
                    </a>
                </div>
                <div class="py-3 border-bottom">
                    <a href="" class="text-decoration-none text-muted">
                        <img src="{{ url('images/filter.png') }}" width="20px" alt="Photo">
                        <span class="ms-3">Terms & Condition</span>
                    </a>
                </div>
                <div class="py-3 border-bottom">
                    <a href="" class="text-decoration-none text-muted">
                        <img src="{{ url('images/policy.png') }}" width="20px" alt="Photo">
                        <span class="ms-3">Privacy Policy</span>
                    </a>
                </div>
                <div class="py-3 border-bottom">
                    <a href="" class="text-decoration-none text-muted">
                        <img src="{{ url('images/person.png') }}" width="20px" alt="Photo">
                        <span class="ms-3">Invite Friends</span>
                    </a>
                </div>
                <div class="py-3 border-bottom d-flex justify-content-between">
                    <a href="" class="text-decoration-none text-muted">
                        <img src="{{ url('images/share.png') }}" width="20px" alt="Photo">
                        <span class="ms-3">Share</span>
                    </a>
                    <span>
                        <a href=""><img src="{{ url('images/facebook.png') }}" width="20px" alt="facebook"></a>
                        <a href="" class="ms-3"><img src="{{ url('images/instagram.png') }}" width="20px" alt="instagram"></a>
                    </span>                      
                </div>
                <div class="py-3">
                    <a href="{{ url('/logout') }}" class="text-decoration-none text-pink">
                        <img src="{{ url('images/logout.png') }}" width="20px" alt="Photo">
                        <span class="ms-3">Logout</span>
                    </a>
                </div>
            </div>

        </div>
    </div>


</div>

