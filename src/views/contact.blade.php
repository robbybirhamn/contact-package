<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
</head>
<body>
    <h1>Contact Us</h1>
    <form action="{{route('contact')}}" method="POST">
        @csrf
        <input type="text" name="name"> <br>
        <input type="text" name="email"> <br>
        <input type="text" name="message"> <br>
        <input type="submit" value="submit">
    </form>
</body>
</html>