<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT</title>
</head>
<body>
    <!-- <h1>THIS IS THE CONTACT PAGE</h1> -->
    <!-- @for($i = 0; $i < count($details); $i++)
    <p>{{$details [$i] ['name']}}</p>
    @endfor -->
    @foreach($details as $details)
    <div>
     {{$loop->index}}   {{$details['name']}} - {{$details['age']}} - {{$details['state']}}
    </div>
    @if($loop->first)
    <span> - this is the first index</span>
    @endif
    @if($loop->last)
    <span> - this is the last index</span>
    @endif
    @endforeach
    
    
    
</body>
</html>