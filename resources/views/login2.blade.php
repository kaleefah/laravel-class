<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<h4>Registration Form</h4><hr>
                <form action="{{route('student.session')}}" method="POST">
                    @csrf
                <div class="form-group">
                    <label for="fname">First Name:</label>
                    <input type="text" class="form-control" name="FirstName" placeholder="Enter your First Name" value="{{old('FirstName')}}">
                    @error('FirstName') <span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="form-group">
                    <label for="lname">Last Name:</label>
                    <input type="text" class="form-control" name="LastName" placeholder="Enter your Last Name" value="{{old('LastName')}}">
                    @error('LastName') <span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="form-group">
                    <label for="email">Email Address:</label>
                    <input type="email" class="form-control" name="Email" placeholder="Enter your Email" value="{{old('Email')}}">
                    @error('Email') <span class="text-danger">{{$message}}</span>@enderror
                </div>
                <button class="btn btn-primary">Login</button>
         </form>

</body>
</html>