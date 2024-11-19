@extends('layouts.user')

{{-- Pembuka Head --}}
@section('css')
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    <style>
        body {
            background: var(--warna-utama);
        }

        .btn-purple {
            background: var(--warna-utama);
            width: 100%;
            color: #fff;
        }

        .btn-purple:hover {
            background: var(--warna-utama);
            width: 100%;
            color: #fff;
        }
    </style>
@endsection

@section('title', 'Register Page')

@section('content')

<div class="container">
    <div row class="row justify-content-center">
        <div class="col-lg-5">
            <h2 class="text-center text-white mb-0 mt5">REHUB</h2>
            <p class="text-center text-white mb-5">E-Report Hub</p>
            <div class="card mt-5">
                <div class="card-body">
                    <h2 class="text-center mb-5">Create Account</h2>
                    <form action="#" method="POST">
                    @csrf 
                    <div class="form group">
                        <input type="number" name="nik" placeholder="Input Your NIK" class="form-control">
                    <br>
                    <div class="form group">
                    <input type="text" name="nama" placeholder="Input Your Full Name" class="form-control">
                    <br>
                    <div class="form group">
                    <input type="text" name="username" placeholder="Input Your Username" class="form-control">
                    <br>
                    <div class="form group"> 
                    <input type="password" name="password" placeholder="Input Your Password" class="form-control">
                    <br>
                    <div class="form group"> 
                    <input type="number" name="telepon" placeholder="Input Your Phone Number " class="form-control">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-purple">Register</button>
                   
                    </form>
                </div>
            </div>
@if(Session::has('pesan'))
<div class="alert alert-danger mt-2">
    {{ Session::get('pesan') }}
</div>
@endif

<a href="{{ route('ereporthub.index')}}" class="btn btn-warning text-center text-white mt-3" style="width: 100%;">Back To Home</a>
        </div>
    </div>
</div>


@endsection


