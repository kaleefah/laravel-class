<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@if(session()->has('error'))
        <span>
            <h3 style="color:green;text-align:center">
                {{session('error')}}
            </h3>
        </span>
    @endif
    <h1 style="color:red;text-align:center"> {{session('keyvalue')}} profile page</h1>
    <h2 style="color:red;text-align:center">welcome {{session('keyvalue')}} to your profile page</h2>
    <p style="color:red;text-align:center"><a href="/logout2">logout</a></p>
</body>
</html>