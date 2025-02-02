@extends('userlayout')

@section('main')

<div class="form-container">

        <h2>Update Form</h2>
        <form action="{{route('user.store',$user->id)}}" method="post">
        @csrf
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required value="{{$user->name}}">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required value="{{$user->email}}">

            <input type="submit" value="Update">
        </form>
    </div>

@endsection