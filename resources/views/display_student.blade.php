<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

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
    </tr>
    @endforeach
</table>
    
</body>
</html>