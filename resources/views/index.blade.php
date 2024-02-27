<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحه نخست</title>
</head>
<body>
    <h1>سامانه هوشمند کارنامه</h1></br>

    <form action="{{route('student.store')}}" method="POST">
        @csrf

        <input type="text" name="enterId" value="" placeholder="شناسه دانش آموز را وارد نمائید">
        <button type="submit">نمایش</button>

    </form>
    </br></br><a href="{{route('student.create')}}"><button type="submit">ثبت دانش آموز جدید</button></a>

</br></br>

@foreach($students as $student)
{{$student->name .' از' .$student->city}}</br>
@endforeach

   
</body>
</html>