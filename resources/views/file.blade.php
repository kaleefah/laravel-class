<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<form action="{{route('file.upload')}}" method="POST" enctype="multipart/form-data">
          @csrf         
                <div class="form-group">
                    <label for="fname">First Name:</label>
                    <input type="text" class="form-control" name="FirstName" placeholder="Enter your First Name" >
                   
                </div>
                <div class="form-group">
                    <label for="lname">Last Name:</label>
                    <input type="text" class="form-control" name="LastName" placeholder="Enter your Last Name" >
                  
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter your Email" >
                    
                </div>
                <div class="form-group">
                    <label for="file">Choose File:</label>
                    <input type="file" class="form-control" name="photo" placeholder="Upload file" >
                    
                </div>
                <button class="btn btn-primary">Login</button>
</form>
                

</body>
</html>