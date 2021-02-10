@extends('layouts.app')
@section('content')
<div class="container">
    <h2>ข้อมูล Contact ของ {{$data->name}}</h2>
    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
        <div class="card-header">Email</div>
        <div class="card-body">
            <h5 class="card-title"> {{$data->email}} </h5>
        </div>
    </div>
   
    <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
        <div class="card-header">Phone</div>
        <div class="card-body">
            <h5 class="card-title"> {{$data->phone}} </h5>
        </div>
    </div>
    
    <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
        <div class="card-header">Last update</div>
        <div class="card-body">
            <h5 class="card-title"> {{date('d F Y', strtotime($data->updated_at))}}</h5>
            <h5 class="card-title"> {{date('H.i A', strtotime($data->updated_at))}}</h5>
        </div>
    </div>
    <a href="{{ route('contact.index')}}" class="btn btn-outline-danger">Back</a>
</div>
@endsection