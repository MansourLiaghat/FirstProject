<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحه دانش آموز</title>
</head>
<body>
    <h1>اطلاعت دانش آموز به شرح زیر می باشد</h1>
    {{$student->name}}</br></br>
    {{$student->national_code}}</br></br>
    {{$student->email}}</br></br>
    {{$student->age}}</br></br>
    {{$student->phone}}</br></br>
    {{$student->city}}</br></br></br>
</body>


<a href="{{route('student.edit' , $student->id)}}"><button type="submit">ویرایش اطلاعات</button></a>
<a href="{{route('student.destroy' , $student->id)}}"><button type="submit">حذف اطلاعات</button></a></br></br>
<a href="{{route('student.index')}}"><button type="submit">صفحه نخست</button></a>
</html>