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
        {!! Form::open(array('route' => 'contact.store')) !!}
        
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('Name') !!}
                    {!! Form::text('name',null,["class" => "form-control"]) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Email') !!}
                    {!! Form::text('email',null,["class" => "form-control"]) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Phone') !!}
                    {!! Form::text('phone',null,["class" => "form-control"]) !!}
                </div>
                <input type="submit" class="btn btn-outline-success" value="Save">
                <a href="{{ route('contact.index')}}" class="btn btn-outline-danger">Back</a>
            </div>
        {!! Form::close() !!}
    </div>
@endsection