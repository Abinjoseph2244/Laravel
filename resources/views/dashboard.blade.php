{{-- Layout reference, if you have a main layout file --}}
@extends('layouts.admin')
<!-- @extends('layouts.admin') -->

@section('content')
<div class="container">
    <h1>Admin Dashboard</h1>
    <!-- Your admin dashboard content -->
</div>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Admin Dashboard') }}</div>

                <div class="card-body">
                    <p>Welcome to the Admin Dashboard!</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
