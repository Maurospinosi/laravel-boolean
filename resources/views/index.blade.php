<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Boolean</title>
</head>
<body>
    <table>
        <tr>
            <th>Name</th>
            <th>Lastname</th> 
            <th>Mail</th>
            <th>Gender</th>
            <th>Date of Birth</th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{$student->name}}</td>
                <td>{{$student->lastname}}</td>
                <td>{{$student->mail}}</td>
                <td>{{$student->gender}}</td>
                <td>{{$student->date_of_birth}}</td>
            </tr>
        @endforeach
    </table>
    
</body>
</html>