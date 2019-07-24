<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>测试</h1>
<br>
<form class="" action="{{route('langjunit.store')}}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    姓名：<input type="text" value='' style="width:300px" name='name' placeholder
                年龄：<input type="text" name='age' placeholder="如：index "><br>
    <input type="submit" name="" value="测试"/>
</form>
</body>
</html>
