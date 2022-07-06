@extends('layout')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div  class="col-md-6">
                    <h2>Thêm </h2>
                </div>
                <div class="col-md-6">
                <a href="" class="btn btn-add">List</a>
             </div>
            
        </div>
        </div>
         <div class="card-body">
            <form action="{{ route('Infor.store') }}" method="POST">
                @csrf 
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                             <strong>Ids</strong>
                             <input type="text" name="idS" class="form-control" placeholder="IdS">
                        </div>
                        <div class="form-group">
                             <strong>Name</strong>
                             <input type="text" name="Name" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group">
                             <strong>Email</strong>
                             <input type="email" name="Email" class="form-control" placeholder="Email">
                        </div>
                        
                    </div>  
                </div>
                <button type="" class="btn btn-success">Add </button>
            </form>
         </div>
    </div>
    
</div>
@endsection