<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User Form</title>
</head>
<body>
    <form action="/add-user" method="post">
        @csrf
        <input type="text" name="username" placeholder="enter user name">
        <br><br>
        <input type="text" name="phone" placeholder="enter user phone">
        <br><br>
        <input type="text" name="email" placeholder="enter user email">
        <br><br>
        <button>Add New User</button>
        <br><br>
    </form>
</body>
</html>