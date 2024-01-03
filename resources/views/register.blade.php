<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="getsession" method="POST">
        @csrf
        <label for="FirstName" >FirstName:</label>
        <input type="text" name="firstName"> 
        <br>
        <br>
        <label for="LastName" >LastName:</label>
        <input type="text" name="lastName"> 
        <br>
        <br>
        <label for="Email" >Email Address:</label>
        <input type="email" name="name"> 
        <br>
        <br>
        <label for="Password">Password:</label>
        <input type="password" name="password"> 
        <br>
        <br>
        <button type="submit">Login</button>
    </form>
</body>
</html>