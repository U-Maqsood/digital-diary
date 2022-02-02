@extends('layouts.layout')
@section('title','Dashboard')
@section('contents')
<div class="container-fluid dashboard-container">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex flex-wrap justify-content-between mt-3">
                <div>
                    <a data-bs-toggle="offcanvas" href="#left-menu" role="button"
                    aria-controls="offcanvas"><img src="{{ url('/images/menu-left.png') }}"
                    alt="Menu"></a>
                    @component('components.side-menu')
                        
                    @endcomponent
                </div>
                <div>
                    <h1 class="text-blue fw-bold nunito-font"><strong>Dashboard</strong></h1>
                </div>
                <div>
                    <a href="" class="mx-2"><img src="{{ url('/images/search.png') }}" alt="Search"></a>
                    <a data-bs-toggle="offcanvas" href="#gifts-list" role="button"
                    aria-controls="offcanvas"><img src="{{ url('/images/gift.png') }}" alt="Gift"></a>
                    @component('components.gifts-list')
                        
                    @endcomponent
                    @component('components.edit-profile')
                    
                    @endcomponent
                </div>
            </div>
        </div>
        <div class="row mt-5 text-center ms-lg-5">
            <div class="col-12 text-md-start">
                <h1 class="text-pink fw-bold nunito-font">{{ (count($memories) == 0) ? 'Welcome, ': 'Hi, '}}<span
                        class="capitalize">{{ session('user')->name }}</span></h1>
                <p class="text-muted mt-3 mb-1">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                <br> 
                Eaque, perferendis laboriosam tempora.
                </p>
                {{-- <p class="text-pink mt-3 mb-1">Subscription: <strong class="text-blue h5 nunito-font">Silver</strong>
                </p>
                <p class="text-muted">Your subscription will be expire after <strong class="text-dark">7 days</strong>
                </p>
                <a href="" class="btn btn-blue text-decoration-none btn-rounded px-5"><strong>Renew</strong></a> --}}
            </div>
        </div>
    </div>
</div>



<div class="container text-center display justify-content-center my-md-3 ">

    <div class="mx-md-5 mx-2">
        <a href="{{ url('/new_memory') }}"
            class="btn btn-pink btn-rounded py-3 py-md-4 ps-md-5 pe-md-3 pl-4 btn-h1 memory-btn"><strong
                class="fw-bold">New Memories</strong> </a>
    </div>
    <div class="mx-md-5 mx-2">
        <a href="{{ url('/new_diary') }}"
            class="btn btn-sky-blue btn-rounded py-3 py-md-4 pl-5 ps-md-5 pe-md-3 btn-h1 diary-btn"><strong
                class="fw-bold">Digital Diary</strong>
        </a>
    </div>
</div>

@if (isset($memories))

<div class="container d-md-flex flex-wrap">

    {{-- {{ $memories->links() }} --}}

    @php
    $count = 1;
    @endphp

    @foreach ($memories as $memory)

    <div class="container memory memory-<?php echo $count ?> py-3 px-4 mt-4 mb-5">
        <div class="d-flex justify-content-between">
            <h3 class="fw-bold nunito-font">{{ $memory->title }}</h3>
            <a href="{{ url('/memory/edit',$memory->id) }}"><img src="{{ url('/images/arrow.png') }}" width="25px"
                    alt="Arrow"></a>
        </div>
        <div class="d-flex justify-content-start">
            <p class="text-blue small fw-bold">Event: </p>
            <img src="{{ url('/images/calendar_1.png') }}" class="ms-4 me-2" width="20px" height="23px" alt="Calendar">
            <span class="text-blue text-muted">{{ $memory->date }}</span>
        </div>
        <div>
            <img src="{{ url('/images/memory_img.png') }}" width="100%" alt="Image">
        </div>
        <div class="d-flex justify-content-end mt-3">
            <img src="{{ url('/images/image.png') }}" width="25px" height="20px" alt="Calendar">
            <span class="mx-2 text-muted">36 Images</span>
            <img src="{{ url('/images/video.png') }}" width="25px" height="20px" alt="Calendar">
            <span class="ms-2 text-muted">6 Videos</span>
        </div>
    </div>

    @php

    if ($count % 3 == 0) {
    $count = 1;
    }else {
    $count++;
    }

    @endphp


    @endforeach
</div>



@endif

@endsection

