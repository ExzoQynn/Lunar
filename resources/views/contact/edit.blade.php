@extends('layouts.app')
@section('content')
    <div class="container">
        @if ($errors->all())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    {{$error}} <br>
                @endforeach
            </ul>
        @endif
        {!! Form::open(['route' => ['contact.update', $data->id] , 'method' => 'PUT']) !!}
        
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('Name') !!}
                    {!! Form::text('name',$data->name,["class" => "form-control"]) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Email') !!}
                    {!! Form::text('email',$data->email,["class" => "form-control"]) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Phone') !!}
                    {!! Form::text('phone',$data->phone,["class" => "form-control"]) !!}
                </div>
                <input type="submit" class="btn btn-outline-success" value="Update">
                <a href="{{ route('contact.index')}}" class="btn btn-outline-danger">Back</a>
            </div>
        {!! Form::close() !!}
    </div>
@endsection