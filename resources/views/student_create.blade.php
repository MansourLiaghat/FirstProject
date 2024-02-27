<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ثبت دانش آموز</title>
</head>
<body>
    <form action="{{route('student.store')}}" method="POST">
        @csrf
        <input type="text" name="name" value="" placeholder="نام و نام خانوادگی"></br></br>
        <input type="text" name="national_code" value="" placeholder="کد ملی"></br></br>
        <input type="text" name="email" value="" placeholder="ایمیل"></br></br>
        <input type="text" name="age" value="" placeholder="سن"></br></br>
        <input type="text" name="phone" value="" placeholder="شماره همراه"></br></br>
        <input type="text" name="city" value="" placeholder="شهر سکونت"></br></br></br></br>
        <button type="submit">ذخیره</button></br></br>
    </form>
    <a href="{{route('student.index')}}"><button type="submit">صفحه نخست</button></a>
</body>
</html>