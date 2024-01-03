<h1 style="color:red; text-align:center;">Students Record</h1>

<table border="2" style="margin-left: 25%;">
<tr>
    <th>ID</th>
    <th>Email</th>
    <th>FirstName</th>
    <th>LastName</th>
    <th>Avatar</th>
   
</tr>

@foreach($people as $person)

<tr>
    <th>{{$person['id']}}</th>
    <th>{{$person['email']}}</th>
    <th>{{$person['first_name']}}</th>
    <th>{{$person['last_name']}}</th>
    <th><img src="{{$person['avatar']}}" ></th>
    
  
</tr>
@endforeach
</table>