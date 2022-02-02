@extends('layouts.layout')
@section('title','Add Memories')
@section('contents')
<div class="container-fluid memories-container">
    <div class="container mb-0">
        <div class="row">
            <div class="text-center mt-3">
                <h1 class="text-blue fw-bold nunito-font"><strong>Add New Memories</strong></h1>
            </div>
        </div>
        <div class="row text-center ms-lg-5">
            <div class="col-md-8 text-md-start pt-5">
                {{-- <h4 class="">{{ (count($memories) == 0) ? 'Welcome, ': 'Hi, '}}</h4> --}}
                <p class="text-blue mt-2 mb-1"><strong class="text-blue h1 fw-bold nunito-font capitalize">
                    {{ session('user')->name }}
                    </strong></p>
                <p class="text-muted mb-0">You can save your memories</p>
                <p class="text-muted">here for life time</p>
            </div>
            <div class=" col-md-4  memories-background d-none d-md-block">

            </div>
        </div>
        <div class="row">

            <div class="col-xl-6 col-md-6 offset-xl-3 offset-md-3 px-5 mt-3">

                @if (session()->has('status'))
                <div class="alert alert-green py-2" role="alert">
                    {{session('status')}}
                </div>
                @endif


                <div class="">
                    <label for="formFileMultiple" class="form-label w-100 ">
                        <div class="upload text-center py-4">
                            <img src="{{ url('images/upload.png') }}" width="40px" alt="click to upload">
                            <h4 class="text-pink fw-bold nunito-font mt-2"><strong>Upload Your Media</strong></h4>
                            <p class="text-muted mb-0">you can upload</p>
                            <p class="text-muted mb-0">Images and Videos</p>
                        </div> 
                    </label>
                    <input class="d-none" type="file" name="files"  accept="image/*,video/*" id="formFileMultiple" multiple>
                </div>
            </div>
        </div>
    </div>

    <div id="carousel">

    </div>


    <div class="owl-carousel default-carousel owl-theme owl-centered" id="carousel">
        <div><img src="{{ url('images/upload-img.png') }}" alt="image"></div>
        <div><img src="{{ url('images/upload-img.png') }}" alt="image"></div>
        {{-- <div><img src="{{ url('images/upload-img.png') }}" alt="image"></div>
        <div><img src="{{ url('images/upload-img.png') }}" alt="image"></div>
        <div><img src="{{ url('images/upload-img.png') }}" alt="image"></div>
        <div><img src="{{ url('images/upload-img.png') }}" alt="image"></div>
        <div><img src="{{ url('images/upload-img.png') }}" alt="image"></div> --}}
    </div>
                
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-md-6 offset-xl-3 offset-md-3 px-5 mt-3 mb-5">
                <form action="{{ url('/add_memory') }}" method="POST">
                    @csrf
                    <div class="mb-3 login-form">
    
                        <input type="text" class="form-control icon-event  py-2 border-custom"
                            placeholder="Event Title" aria-label="Username" name="title"
                            aria-describedby="basic-addon1" required>
                    </div>
                    <div class="mb-3">
                        <input type="date" class="form-control icon-calendar py-2 border-pink"
                            name="date" id="date" required>
                    </div>
                    <div class="mb-3 text-start">
                        <textarea class="form-control textarea py-2" placeholder="Type your notes" name="description" id="notes" cols="30" rows="10" required></textarea>
                        
                    </div>
                    <input type="hidden" name='type' value="1">
                    <button type="submit" class="btn btn-blue w-100 login-btn"><strong>Upload</strong></button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
