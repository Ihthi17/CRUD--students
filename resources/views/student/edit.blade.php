@extends('student.layout')
@section('content')

<div class="card">
    <div class="card-header">Edit Page</div>
    <div class="card-body">

        <form action="{{ url('student/' .$students->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />
            <label>First Name</label></br>
            <input type="text" name="fname" id="fname" value="{{$students->fname}}" class="form-control"></br>
            <label>Last name</label></br>
            <input type="text" name="lname" id="lname" value="{{$students->lname}}" class="form-control"></br>
            <label>Email</label></br>
            <input type="email" name="email" id="email" value="{{$students->email}}" class="form-control"></br>
            
          
            <input type="submit" value="Update" class="btn btn-success"></br>
        </form>

    </div>
</div>

@stop