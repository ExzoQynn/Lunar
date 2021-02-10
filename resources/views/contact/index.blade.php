@extends('layouts.app')
@section('content')
   <div class="container">
        <h2>ข้อมูล Contact</h2>
        <a href="/contact/create" class="btn btn-primary mt-3">Create Contact</a>
        <div class="table-responsive">
            <table class="table table-border table-hover mt-3">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th style="width: 20%;">Action</th>
                    </tr>

                </thead>
                <tbody>
                    @foreach ($data as $row)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{$row->name}}</td>
                        <td>{{$row->email}}</td>
                        <td>{{$row->phone}}</td>
                        <td>
                            <form action="{{ route('contact.destroy' , $row->id)}}" method="POST">
                                <a href="{{ route('contact.show' , $row->id)}}" class="btn btn-outline-primary mb-1">Detail</a>
                                <a href="{{ route('contact.edit' , $row->id)}}" class="btn btn-outline-success mb-1">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" data-name="{{$row->name}}" class="btn btn-outline-danger mb-1 deleteForm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
   {{ $data->links() }}
   </div>
@endsection