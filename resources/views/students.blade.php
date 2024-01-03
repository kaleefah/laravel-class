<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
</head>
<body>
    <h1>Student List</h1>

    <ul>
        @foreach($students as $student)
            <li>{{ $student }}</li>
        @endforeach
    </ul>
</body>
</html>
