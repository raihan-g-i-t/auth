<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        nav .w-5{
            display: none;
        }

    </style>
</head>
<body>

<div style="padding:30px">
    <a href="{{route('add.student.view')}}"><button style="padding:10px">ADD NEW USER</button></a>
</div>

<table>
    <tr>
        @foreach ($user as $u1)
            <th>ID</td>
            <th>Name</td>
            <th>Email</td>
            @if (isset($u1->address))
                <th>Address</td>
            @endif
            @if (isset($u1->phone_number))
                <th>Phone Number</th>
            @endif
            <th>Action</th>
            @break
        @endforeach
    </tr>
    @foreach ($user as $u)
    <tr>
        <td>{{$u->id ?? ""}}</td>
        <td>{{$u->name ?? ""}}</td>
        <td>{{$u->email ?? ""}}</td>
        <td>{{$u->address ?? ""}}</td>
        <td>{{$u->phone_number ?? ""}}</td>
        <td><a href="{{route('single.student', $u->id ?? "")}}"><button>Show Details</button></a></td>
        <td><a href="{{route('single.student.name', $u->id ?? "")}}"><button>NAME & EMAIL</button></a></td>
        <td><a href="{{route('delete.student', $u->id ?? "")}}"><button>DELETE</button></a></td>
        <td><a href="{{route('update.student', $u->id ?? "")}}"><button>UPDATE</button></a></td>
    </tr>
    @endforeach
</table>

<div style="margin: 10px;">
    @if ($user instanceof \Illuminate\Pagination\AbstractPaginator)
        {{ $user->links() }}
    @endif
</div>
    
</body>
</html>