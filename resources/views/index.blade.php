@extends('layout')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div  class="col-md-6">
                    <h2>Demo Laravel</h2>
                </div>
                <div class="col-md-6">
                    <a href="{{route('Infor.create')}}" class="btn btn-success"> Add User</a>
                   
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table-bor">
    <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
    </thead>
    <tbody>
        @foreach($infor as $if)
        <tr>
            
            <td>{{$if->idS}}</td>
            <td>{{$if->Name}}</td>
            <td>{{$if->Email}}</td>
            <td>
                <a href="/infor/edit/{{$if->id}}" class="btn btn-success"> Update </a>
                <a href="/infor/destroy/{{$if->id}}" class="btn btn-danger"> Delete </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
        </div>
    </div>
    
</div>
@endsection