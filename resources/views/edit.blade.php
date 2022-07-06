@extends('layout')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div  class="col-md-6">
                    <h2>Update </h2>
                </div>
                <div class="col-md-6">
                <a href="" class="btn btn-add">List</a>
             </div>
            
        </div>
        </div>
         <div class="card-body">
            <form action="{{ url('/infor/update/' . $infor->id) }}" method="POST">
                @csrf 
                <input type="hidden" name="id" value="{{$infor->id}}">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                             <strong>Ids</strong>
                             <input type="text" name="idS" class="form-control" placeholder="IdS" value="{{$infor->idS}}">
                        </div>
                        <div class="form-group">
                             <strong>Name</strong>
                             <input type="text" name="Name" class="form-control" placeholder="Name" value="{{$infor->Name}}">
                        </div>
                        <div class="form-group">
                             <strong>Email</strong>
                             <input type="email" name="Email" class="form-control" placeholder="Email" value="{{$infor->Email}}">
                        </div>
                        
                    </div>  
                </div>
                <button type="submit" class="btn btn-success">Update</button>
            </form>
         </div>
    </div>
    
</div>
@endsection