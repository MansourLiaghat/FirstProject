<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="{{route('student.update' , $student->id)}}" method="POST">
    @csrf
<input type="text" name="name" value="{{$student->name}}"></br></br>
<input type="text" name="national_code" value="{{$student->national_code}}"></br></br>
<input type="text" name="email" value="{{$student->email}}"></br></br>
<input type="text" name="age" value="{{$student->age}}"></br></br>
<input type="text" name="phone" value="{{$student->phone}}"></br></br>
<input type="text" name="city" value="{{$student->city}}"></br></br></br></br>
<button type="submit">ذخیره</button></br></br>

</form>

<a href="{{route('student.index')}}"><button type="submit">صفحه نخست</button></a>

</body>
</html>