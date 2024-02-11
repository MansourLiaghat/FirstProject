<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحه دانش آموز</title>
</head>
<body>
    <h1>اطلاعت دانش آموز به شرح زیر می باشد</h1>
    {{$student->name}}</br>
    {{$student->national_code}}</br>
    {{$student->email}}</br>
    {{$student->age}}</br>
    {{$student->phone}}</br>
    {{$student->city}}</br>
</body>

<a href="{{route('student.index')}}"><button type="submit">صفحه نخست</button></a>
<a href="{{route('student.edit' , $student->id)}}"><button type="submit">ویرایش اطلاعات</button></a>
</html>