@extends('layouts.layout')
@section('title','Welcome')
@section('contents')
<div class="container-fluid welcome-container d-md-none">
    <div class="container">
        <div class="row">
            <div class="d-flex flex-wrap justify-content-between mt-3">
                <div>
                    <a href=""><img src="{{ url('/images/menu-left.png') }}" alt="Menu"></a>
                </div>
                <div>
                    <h1 class="text-blue fw-bold"><strong>Dashboard</strong></h1>
                </div>
                <div>
                    <a href="" class="mx-2"><img src="{{ url('/images/search.png') }}" alt="Search"></a>
                    <a href=""><img src="{{ url('/images/gift.png') }}" alt="Gift"></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">

    <div class="container p-a d-none d-md-block">
        
            <div class="d-flex flex-wrap justify-content-between mt-3">
                <div>
                    <a href=""><img src="{{ url('/images/menu-left.png') }}" alt="Menu"></a>
                </div>
                <div>
                    <h1 class="text-blue fw-bold"><strong>Dashboard</strong></h1>
                </div>
                <div>
                    <a href="{{ url('/login') }}"
                        class="btn btn-blue text-decoration-none btn-rounded px-3"><strong>Login</strong></a>
                    <a href="" class="mx-2"><img src="{{ url('/images/search.png') }}" alt="Search"></a>
                    <a href=""><img src="{{ url('/images/gift.png') }}" alt="Gift"></a>
                </div>
            </div>
    </div>
    
    <div class="row height-100vh">
        <div class="col-md-6 d-none d-md-block welcome-background"></div>
        <div class="col-md-6 d-md-flex flex-column justify-content-center">

            <div class="container d-none d-md-block">
                <div class="text-center mt-4">
                    <span class="display-2 text-blue dancing-font">Lorem ipsum</span>
                    <p class="my-2 text-pink">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, blanditiis.</p>
                </div>
            </div>

            <div class="container text-center display justify-content-center my-md-3 flex-md-wrap flex-lg-nowrap">
                <div class="me-sm-3 me-md-0 me-lg-3">
                    <a href="{{ url('/memories') }}"
                        class="btn btn-pink btn-rounded py-3 py-md-4 ps-md-5 pe-md-3 pl-4 btn-h1 memory-btn"><strong
                            class="fw-bold">New Memories</strong> </a>
                </div>
                <div class="ms-sm-3 ms-md-0 ms-lg-3">
                    <a href="{{ url('/diary') }}"
                        class="btn btn-sky-blue btn-rounded py-3 py-md-4 pl-5 ps-md-5 pe-md-3 btn-h1 diary-btn"><strong
                            class="fw-bold">Digital Diary</strong>
                    </a>
                </div>
            </div>
            
            
            <div class="container d-md-none d-block">
                <div class="text-center mt-4 px-4">
                    <span class="display-2 text-blue dancing-font">Lorem ipsum</span>
                    <p class="my-2 text-pink">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, blanditiis.</p>
                </div>
            </div>
        </div>
    </div>
</div>






@endsection
