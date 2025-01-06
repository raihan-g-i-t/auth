<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="margin:50px">
        <form method="post" action="{{route('add.student')}}">
            @csrf
            <label style="padding:10px">Enter name</label>
            <input style="margin:20px" name="name" type="text" placeholder="Enter Name" value="{{$data->name ?? ""}}"><br>

            <label style="margin:20px">Enter Email</label>
            <input style="margin:20px" name="email" type="email" placeholder="Enter Email"><br>

            <label style="margin:20px">Enter adrress</label>
            <input style="margin:20px" name="address" type="text" placeholder="Enter address"><br>

            <label style="margin:20px">Enter Phone number</label>
            <input style="margin:20px" name="phone" type="numer" placeholder="Enter phone number"><br>

            <button style="margin:20px" type="submit">Submit</button>

        </form>
    </div>
</body>
</html>