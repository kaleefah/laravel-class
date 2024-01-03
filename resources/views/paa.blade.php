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
            <h3 style="color:red;text-align:center">
                {{session('error')}}
            </h3>
        </span>
    @endif
    <h1>login</h1>
    <form action="sess" method="POST" >
        @csrf
        <input type="text" name="name">
        <input type="email" name="email">
        <button type="submit">login</button>
    </form>
</body>
</html>