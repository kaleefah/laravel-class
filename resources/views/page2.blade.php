<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URl Generation</title>
</head>
<body >

@include('page1')
<x-HeaderComponent data="HELLO MY NAME IS PAGE TWO" />

    <h1>URL GENEREATION, PAGE TWO, URL TWO</h1>
    <a href="oneurl.com">URL TWO</a> <br>
    <a href="threeurl.com">URL THREE</a> <br>
    <h2 style="color: red;">FORM :{{URL::previous()}}</h2>
    <h3 style="color:green; ">My current url is: {{URL::current()}}</h3>
</body>
</html>