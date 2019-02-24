<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    {{csrf_field()}}
    <input type="text" name="edit_name">
    <input type="text" name="edit_email">
    <input type="text" name="edit_dod">
    <input type="submit" value="Insert">
</form>
</body>
</html>