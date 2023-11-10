@extends('students.layout')
@section('content')

<div class="card" style="margin: 20px">
    <div class="card-header"><h2>Create new Students</h2></div>
    <div class="card-body">
        <form action="{{ url('student') }}" method="POST">
            {!! csrf_field()  !!}
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control"><br>
            <label for="name">Address</label>
            <input type="text" name="address" id="address" class="form-control"><br>
            <label for="name">Phone</label>
            <input type="text" name="phone_number" id="phone_number" class="form-control"><br>
            <input type="submit" value="Save" class="btn btn-success"><br>
        </form>

    </div>
</div>

@endsection
