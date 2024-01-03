<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>{{$gender}} - {{$age}} - {{$state}}</p>

    @if($age > 20)
        <p>you are eligible for this product</p>
    @elseif($age < 16 )
    <p>you are not eligible for this product</p>
    @else 
    <p>you are human</p>
    @endif
    @unless($state == 'kogi')
    <p>you are not an indigene</p>
    @endunless

    @php
    $name ='husna';
    echo($name);
    @endphp

    @for($i = 0; $i < 5; $i++)
    <p>the value of i is {{$i}}</p>
    @endfor
    

</body>
</html>