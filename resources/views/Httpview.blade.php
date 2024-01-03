
<h1 style="color:red;text-align:center">student records</h1>
<table border="1" style="margin-left:15%">
    <tr>
        <th>ID</th>
        <th>CLASSNAME</th>
        <th>LASTNAME</th>
        <th>FIRSTNAME</th>
        <th>OTHERNAME</th>
        <th>EMAIL</th>
        <th>STUDENT ID</th>
        <th>PHONE</th>
        <th>GENDER</th>
        
    </tr>
    
    <tr>
        {{$user->id}}
        <td>{{$user['id']}}</td>
        <td>lastname</td>
        <td>firstname</td>
        <td>othername</td>
        <td>student id</td>
        <td>email</td>
        <td>semester</td>
        <td>phone</td>
        <td>gender</td>
        
    </tr>
    @foreach ($users as $user)
    <tr>
        <td>$user->id</td>
        <td>lastname</td>
        <td>firstname</td>
        <td>othername</td>
        <td>student id</td>
        <td>eamil</td>
        <td>semester</td>
        <td>phone</td>
        <td>gender</td>
        
    </tr>
    <tr>
        <td>id</td>
        <td>lastname</td>
        <td>firstname</td>
        <td>othername</td>
        <td>student id</td>
        <td>eamil</td>
        <td>semester</td>
        <td>phone</td>
        <td>gender</td>
        
    </tr>
    <tr>
        <td>id</td>
        <td>lastname</td>
        <td>firstname</td>
        <td>othername</td>
        <td>student id</td>
        <td>eamil</td>
        <td>semester</td>
        <td>phone</td>
        <td>gender</td>
        
    </tr>
    <tr>
        <td>id</td>
        <td>lastname</td>
        <td>firstname</td>
        <td>othername</td>
        <td>student id</td>
        <td>eamil</td>
        <td>semester</td>
        <td>phone</td>
        <td>gender</td>
        
    </tr>
</table>
@endforeach