@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <router-link to="/customer-list" class="btn btn-primary">Customer List</router-link>
            <router-view></router-view>
        </div>
    </div>
</div>
@endsection
