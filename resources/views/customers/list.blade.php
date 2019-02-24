<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="1px" cellspacing="0">
    <tr>
        <th width="40px" height="30px">Id</th>
        <th width="200px">name</th>
        <th width="200px">email</th>
        <th width="100px">dod</th>
        <th width="200px">created_up</th>
        <th width="200px">updated_up</th>
    </tr>
    @foreach($customers as $key => $value)
        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->name}}</td>
            <td>{{$value->email}}</td>
            <td>{{$value->dod}}</td>
            <td>{{$value->created_at}}</td>
            <td>{{$value->updated_at}}</td>
            <th width="50px"><a href="{{route('edit', $value->id)}}">Sua</a></th>
            <th><a href="{{route('destroy', $value->id)}}" onclick="return confirm('ban co chac muon xoa?')">Delete</a></th>
        </tr>
    @endforeach
</table>
<a href="{{route('create')}}">Them moi</a>
</body>
</html>