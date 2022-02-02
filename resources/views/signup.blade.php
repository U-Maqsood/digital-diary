@extends('layouts.layout')
@section('title','Sign Up')
@section('contents')
<div class="container-fluid login-signup-container text-center position-relative">

    <div class="row h-100">

        <div class="d-xl-flex d-none col-xl-6 login-signup-content flex-wrap justify-content-center align-items-center mt-xl-5">
            <img src="{{ url('/images/Component-large.png') }}" height="300px" width="500px" class="img-fluid" alt="Logo">
        </div>
        <div class="col-xl-4 col-md-6 login-signup-content offset-xl-1 offset-md-3 px-5 mt-5 d-xl-flex flex-column justify-content-center">

            <div class="d-xl-none">
                <img src="{{ url('/images/Component.png') }}" class="img-fluid" alt="Logo">  
            </div>

            <p class="h6 mt-3 mb-4" ><strong>Sign Up for continue</strong></p>

            @if (session()->has('status'))
            <div class="alert alert-danger py-2" role="alert">
                {{session('status')}}
            </div>
            @endif

            <form action="{{ url('/signup') }}" method="POST">
                @csrf
                <div class="mb-3 login-form">
                    <input type="text" class="form-control icon-name py-2 border-custom" placeholder="Name"
                        aria-label="Username" name="name" aria-describedby="basic-addon1" required>
                </div>
                <div class="mb-3 login-form">
                    <input type="email" class="form-control icon-email py-2 border-custom" placeholder="Email"
                        aria-label="Username" name="email" aria-describedby="basic-addon1" required>
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control icon-lock py-2 border-custom" placeholder="Password" name="password"
                        id="exampleInputPassword1" required>
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control icon-lock py-2 border-custom" placeholder="Verify Password" name="verify_password"
                        id="exampleInputPassword1" required>
                </div>
                <button type="submit" class="btn btn-custom w-100 login-btn"><strong>SIGN UP</strong></button>
            </form>
            
            <p class="mt-4 mb-2 text-muted">Or Continue with</p>
            
            <div class="d-flex g-2 justify-content-center">
                <a href="{{ url('google/login') }}" class="bg-custom rounded-circle p-2 mx-1"><img src="/images/Frame 2.png" alt="G" width="25px" height="25px"></a>
                <a href="{{ url('facebook/login') }}" class="bg-custom rounded-circle p-2 mx-1"><img src="/images/Frame 3.png" alt="G" width="25px" height="25px"></a>
            </div>
            <p class="mt-3 mb-1 text-secondary">Already Have an Account?</p>
            <div class="mb-5">
                <a href="{{ url('/login') }}" class="text-dark text-decoration-none h-6"><strong>Sign In</strong></a>
            </div>

        </div>
    </div>
</div>
@endsection
