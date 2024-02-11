<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحه نخست</title>
</head>
<body>
    <h1>سامانه هوشمند کارنامه</h1>
    <h3>لطفا شناسه دانش آموز را وارد نمایید</h3>

    <form action="{{route('student.store')}}" method="POST">
        @csrf

        <input type="text" name="enterId" value="" placeholder="شناسه دانش آموز را وارد نمائید">
        <button type="submit">ذخیره</button>

    </form>

</br></br>

@foreach($students as $student)
{{$student->name .' از' .$student->city}}</br>
@endforeach

   
</body>
</html>