<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="">
    @csrf
<input type="text" name="name" value="{{$student->name}}"></br>
<input type="text" name="national_code" value="{{$student->national_code}}"></br>
<input type="text" name="email" value="{{$student->email}}"></br>
<input type="text" name="age" value="{{$student->age}}"></br>
<input type="text" name="phone" value="{{$student->phone}}"></br>
<input type="text" name="city" value="{{$student->city}}"></br>

</form>
    
</body>
</html>