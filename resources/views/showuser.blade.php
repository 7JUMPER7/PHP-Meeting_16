<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show user</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        @if ($status['error'])
            <p class="message error">{{ $status['message'] }}</p>
        @else
            <div class="userInfo">
                <h3>Login:</h3>
                <p>{{ $login }}</p>
                <h3>Email:</h3>
                <p>{{ $email }}</p>
                <h3>Age:</h3>
                <p>{{ $age }}</p>
            </div>
            <p class="message success">{{ $status['message'] }}</p>
        @endif
    </div>
</body>
</html>
