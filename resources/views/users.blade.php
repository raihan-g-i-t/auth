<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>
    <h2 style="text-align:center">Hello Users</h2>

<table>
    <th>Name</th>
    <th>|</th>
    <th>Email</th>

    @foreach ($user as $u)
    <tr>
       <td> {{$u->name}} </td>
       <td> | </td>
       <td> {{$u->email}} </td>
    </tr> 
    @endforeach
</table>

</body>
</html>