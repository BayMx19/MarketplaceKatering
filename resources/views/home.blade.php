@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-bold mb-4"><b>Dashboard</b>
                </h5>
                <div class="row">
                    <p>Selamat Datang! {{Auth::user()->name}}</p>
                </div>


            </div>

        </div>
    </div>
</div>
</div>

@endsection