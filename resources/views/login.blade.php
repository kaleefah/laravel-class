<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 mt-5">
                <h4>Registration Form</h4><hr>
                <form action="get" method="POST">
                    @method('PUT')
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
                    <label for="oname">Other Name:</label>
                    <input type="text" class="form-control" name="OtherName" placeholder="Enter your Other Name" value="{{old('OtherName')}}">
                    @error('OtherName') <span class="text-danger">{{$message}}</span>@enderror
                </div>

                <div class="form-group">
                    <label for="student-id">Student Id:</label>
                    <input type="text" class="form-control" name="StudentId" placeholder="Enter your Student Id" value="{{old('StudentId')}}">
                    @error('StudentId') <span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="form-group">
                    <label for="email">Email Address:</label>
                    <input type="email" class="form-control" name="Email" placeholder="Enter your Email" value="{{old('Email')}}">
                    @error('Email') <span class="text-danger">{{$message}}</span>@enderror
                </div>

                <div class="form-group">
                    <label for="semester">Semester:</label>
                    <input type="text" class="form-control" name="Semester" placeholder="Enter your Semester" value="{{old('Semester')}}">
                    @error('Semester') <span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="mb-3">
        <label for="gender" class="form-label">Gender</label>
        @error('Gender') <span class="text-danger">{{$message}}</span>@enderror
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" id="male" value="male">
            <label class="form-check-label" for="male">Male</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" id="female" value="female">
            <label class="form-check-label" for="female">Female</label>
           
        </div>
        
    </div>

             <button class="btn btn-primary">Login</button>
            </div>
        </div>
    </div>
    </form>
</body>
</html>