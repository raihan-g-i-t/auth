<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .registration-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        .registration-form h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .registration-form label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        .registration-form input[type="text"],
        .registration-form input[type="email"],
        .registration-form input[type="password"] {
            width: 90%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        .registration-form input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        .registration-form input[type="submit"]:hover {
            background-color: #218838;
        }

        .registration-form .form-footer {
            text-align: center;
            margin-top: 10px;
            color: #666;
        }

        .registration-form .form-footer a {
            color: #28a745;
            text-decoration: none;
        }

        .registration-form .form-footer a:hover {
            text-decoration: underline;
            color: #28a745;
        }
    </style>
</head>
<body>

    <div class="registration-form">
        <h2>Register</h2>
        <form action="{{route('form.submit')}}" method="post">
        @csrf
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required placeholder="Enter Name">
            <span>
                @error('name')
                    {{$message}}
                @enderror
            </span>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required placeholder="Enter Email">
            <span>
                @error('email')
                    {{$message}}
                @enderror
            </span>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required placeholder="Enter Password">

            <input type="submit" value="Register">
        </form>
        <div class="form-footer">
            Already have an account? <a href="#">Login here</a>
        </div>
    </div>

</body>
</html>