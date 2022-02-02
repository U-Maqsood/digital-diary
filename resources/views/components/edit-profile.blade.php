<div class="offcanvas offcanvas-start edit-profile overflow-auto" tabindex="-1" id="edit-profile"
    aria-labelledby="offcanvasLabel">
    <div class="container">
        <div class="text-end mt-3">
            <a><img src="{{ url('/images/arrow-back.png') }}" width="25px" data-bs-dismiss="offcanvas"
            aria-label="Close" alt="Arrow"></a>
        </div>
        <div class="text-center">
            <img src="{{ url('images/photo.png') }}" width="120px" alt="Photo">
            <br>
            <p class="text-dark px-5 fw-bold mb-5">Tap to change your picture</p>
            <form action="{{ url('/signup') }}" method="POST">
                @csrf
                <div class="mb-3 login-form">
                    <input type="text" class="form-control icon-name py-2 border-custom" placeholder="Change your Name"
                        aria-label="Username" name="name" aria-describedby="basic-addon1" required>
                </div>
                <div class="mb-3 login-form">
                    <input type="email" class="form-control icon-email-disabled py-2 border-custom-disabled" placeholder="{{ session('user')->email }}"
                         disabled>
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control icon-lock py-2 border-custom" placeholder="Change your Password" name="password"
                        id="exampleInputPassword1" required>
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control icon-lock py-2 border-custom" placeholder="Verify New Password" name="verify_password"
                        id="exampleInputPassword1" required>
                </div>
                <button type="submit" class="btn btn-edit-profile btn-rounded my-5 py-3 px-4"><strong>SAVE CHANGES</strong></button>
            </form>
        </div>
    </div>


</div>
