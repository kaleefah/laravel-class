<h1 style="color:red; text-align:center;">Students Record</h1>

<table border="2" style="margin-left: 25%;">
<tr>
    <th>ID</th>
    <th>FirstName</th>
    <th>LastName</th>
    <th>OtherName</th>
    <th>Student ID</th>
    <th>Semester</th>
    <th>Email</th>
    <th>Gender</th>
    <th>Phone Number</th>
   
</tr>

@foreach($users as $user)

<tr>
    <th>{{$user['id']}}</th>
    <th>{{$user['FirstName']}}</th>
    <th>{{$user['LastName']}}</th>
    <th>{{$user['OtherName']}}</th>
    <th>{{$user['StudentId']}}</th>
    <th>{{$user['Semester']}}</th>
    <th>{{$user['Email']}}</th>
    <th>{{$user['Gender']}}</th>
    <th>{{$user['PhoneNo']}}</th>
  
</tr>
@endforeach
</table>