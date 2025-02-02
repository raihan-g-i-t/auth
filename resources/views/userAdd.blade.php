@extends('userlayout')

@section('main')

<div class="form-container">
        <h2>Registration Form</h2>
        <form action="{{route('user.save')}}" method="post">
        @csrf
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <input type="submit" value="Register">
        </form>
    </div>

@endsection