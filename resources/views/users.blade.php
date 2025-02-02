@extends('userlayout')

@section('head')
View
@endsection

@section('message')
    @if (session('message'))
        {{session('message')}}
    @endif
@endsection

@section('main')

<a href="{{route('user.add')}}"> <button style="color:white; background-color:green; margin: 20px">Add a user</button> </a>

<table>
    <th>Name</th>
    <th>|</th>
    <th>Email</th>
    <th>|</th>
    <th>Action</th>

    @foreach ($user as $u)
    <tr>
       <td> {{$u->name}} </td>
       <td> | </td>
       <td> {{$u->email}} </td>
       <td> | </td>
       <td> <a href="{{route('user.edit',$u->id)}}"><button>Edit</button></a>
       <a href="{{route('user.delete', $u->id)}}"><button>Delete</button> </td> </a>
    </tr> 
    @endforeach
</table>

@endsection