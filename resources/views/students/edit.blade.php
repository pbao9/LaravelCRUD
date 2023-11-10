@extends('students.layout');

@section('content')
<div class="card" style="margin: 20px">
    <div class="card-header">Edit Student</div>
    <div class="card-body">
        <form action="{{ url('student/' .$students->id) }}" method="POST">
            {!! csrf_field()  !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{ $students->id }}">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $students->name }}"><br>
            <label for="name">Address</label>
            <input type="text" name="address" id="address" class="form-control" value="{{ $students->address }}"><br>
            <label for="name">Phone</label>
            <input type="text" name="phone_number" id="phone_number" class="form-control" value="{{ $students->phone_number }}"><br>
            <input type="submit" value="Update" class="btn btn-success"><br>
        </form>


    </div>
</div>

@endsection
