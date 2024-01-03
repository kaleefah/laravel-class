<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body >
    <h1>List of Names</h1>
    <ul>
    @foreach($list as $name)
    <li>{{$name}}</li>
    @endforeach
    </ul>

</body>
<script>
    let people =<?php echo json_encode($list) ?>
    console.log(people);
    
</script>
</html>