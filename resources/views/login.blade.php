<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br>
        </div>

        <div>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" required><br>
        </div>

        <div>
            <input type="submit" value="Login">
        </div>
    </form>
</body>
</html>
