<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <form action="/home/showuser" method="POST">
            {{ csrf_field() }}
            <label for="login">Login:
                <input type="text" name="login" required>
            </label>
            <label for="email">Email:
                <input type="email" name="email" required>
            </label>
            <label for="age">Age:
                <input type="number" name="age" required>
            </label>
            <label for="pass1">Password:
                <input type="password" name="pass1" required>
            </label>
            <label for="pass2">Confirm password:
                <input type="password" name="pass2" required>
            </label>
            <input type="submit" value="Register">
        </form>
    </div>
</body>
</html>
