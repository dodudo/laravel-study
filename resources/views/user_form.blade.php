<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>userform</title>
</head>
<body>
<form action="/user/10/12" method="get">
    @csrf
    <input type="checkbox" name="select[][a]" value="1">
    <input type="checkbox" name="select[][b]" value="2">
    <input type="checkbox" name="select[][c]" value="3">
    <button type="submit">发送</button>
</form>
</body>
</html>
