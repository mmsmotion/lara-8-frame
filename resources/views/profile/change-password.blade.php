@extends('layouts.app')
@section("content")
    <div class="">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-3">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('profile.index') }}">Profile</a></li>
                <li class="breadcrumb-item active" aria-current="page">Change Password</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="border-bottom mb-4 d-flex justify-content-between align-items-center pb-3">
                        <h4 class="mb-0">Change Your Password</h4>
                        {{--                        <a href="{{ route('profile.index') }}" class="btn btn-outline-primary">Article List</a>--}}
                    </div>
                    <div class="">
                        <form action="{{ route('profile.change-password') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Current Password</label>
                                <input type="password" class="form-control" name="current_password">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">New Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" name="password_confirmation">
                            </div>
                            <div class="d-flex align-items-end justify-content-between">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" required>
                                    <label class="form-check-label" for="flexSwitchCheckDefault">
                                        I agree
                                    </label>
                                </div>
                                <button class="btn btn-primary">Change Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="border-bottom mb-4 d-flex justify-content-between align-items-center pb-3">
                        <h4 class="mb-0">Update Photo</h4>
                        {{--                        <a href="{{ route('profile.index') }}" class="btn btn-outline-primary">Article List</a>--}}
                    </div>
                    <div class="">
                        <div class="">
                            <img src="{{ asset('storage/user-photo/'.Auth::user()->photo) }}" class="d-block w-50 mx-auto" alt="">
                        </div>
                        <form action="{{ route('profile.update-photo') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">New Photo</label>
                                <input type="file" class="form-control" name="photo">
                            </div>
                            <div class="d-flex align-items-end justify-content-between">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" required>
                                    <label class="form-check-label" for="flexSwitchCheckDefault">
                                        I agree
                                    </label>
                                </div>
                                <button class="btn btn-primary">Change Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @stop
