@extends('student.layout')
@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    @if (session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
                </div>
                <div class="card-body">
                    <a href="{{ url('/student/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New
                    </a>
                    <br />
                    <br />
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($students as $key => $studentData)
                                <tr>
                                    <th scope="row">{{ $key+1 }}</th>
                                    <td>{{ $studentData->fname }}</td>
                                    <td>{{ $studentData->lname }}</td>
                                    <td>{{ $studentData->email }}</td>
                                    
                                    <td>
                                        <a href="{{ url('/student/' . $studentData->id . '/edit') }}"
                                            title="Edit Student"><button class="btn btn-primary btn-sm"><i
                                                    class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                Edit</button></a>
                                        <form method="POST" action="{{ url('/student' . '/' . $studentData->id) }}"
                                            accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Student"
                                                onclick="return confirm(&quot;Confirm delete?&quot;)"><i
                                                    class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection