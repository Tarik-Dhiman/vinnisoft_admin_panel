@extends('layouts.main')

@section('content')

<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>

<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
    data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
    
    

    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row align-items-center">
                <div class="col-md-6 col-8 align-self-center">
                    <h3 class="page-title mb-0 p-0">Profile</h3>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Profile</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="col-md-6 col-4 align-self-center">
                    <div class="text-end upgrade-btn">
                    <a href="https://www.wrappixel.com/templates/monsteradmin/?ref=33/"
                        class="btn btn-success d-none d-md-inline-block text-white" target="_blank">Upgrade to Pro</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-xlg-3 col-md-5">
                    <div class="card">
                        <div class="card-body profile-card">
                            <center class="mt-4">
                            <img src="{{ asset('storage/' . Auth::user()->profile_image) }}" 
                                class="rounded-circle" 
                                width="150" height="150" 
                                style="object-fit: cover; aspect-ratio: 1/1; border-radius: 50%;" />
                                <h4 class="card-title mt-2">{{ $user->name }}</h4>
                                <h6 class="card-subtitle">{{ $user->email }}</h6>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-xlg-9 col-md-7">
                    <div class="card">
                        <div class="card-body">
                            <form class="form-horizontal form-material mx-2" method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label class="col-md-12 mb-0">Full Name</label>
                                    <div class="col-md-12">
                                        <input type="text" name="name" value="{{ old('name', $user->name) }}" class="form-control ps-0 form-control-line" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Email</label>
                                    <div class="col-md-12">
                                        <input type="email" name="email" value="{{ old('email', $user->email) }}" class="form-control ps-0 form-control-line" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Password (Leave blank to keep current password)</label>
                                    <div class="col-md-12">
                                        <input type="password" name="password" class="form-control ps-0 form-control-line" />
                                    </div>
                                </div>
                                <!-- <div class="form-group">
                                    <label class="col-md-12">Confirm Password</label>
                                    <div class="col-md-12">
                                        <input type="password" name="password_confirmation" class="form-control ps-0 form-control-line" />
                                    </div>
                                </div> -->
                                <div class="form-group">
                                    <label class="col-md-12">Phone No</label>
                                    <div class="col-md-12">
                                        <input type="text" name="phone" value="{{ old('phone', $user->phone) }}" class="form-control ps-0 form-control-line" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Message</label>
                                    <div class="col-md-12">
                                        <textarea rows="5" name="message" class="form-control ps-0 form-control-line">{{ old('message', $user->message) }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12 mb-0">Profile Image</label>
                                    <div class="col-md-12">
                                        <input type="file" name="profile_image" class="form-control">
                                    </div>
                                </div>
                                @php
                                    $countries = ['London', 'India', 'USA', 'Canada', 'Thailand'];
                                @endphp

                                <div class="form-group">
                                    <label class="col-sm-12">Select Country</label>
                                    <div class="col-sm-12 border-bottom">
                                        <select class="form-select shadow-none border-0 ps-0 form-control-line" name="country">
                                            @foreach($countries as $country)
                                                <option value="{{ $country }}" {{ old('country', $user->country ?? '') == $country ? 'selected' : '' }}>
                                                    {{ $country }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-12 d-flex">
                                        <button class="btn btn-success mx-auto mx-md-0 text-white">Update Profile</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
