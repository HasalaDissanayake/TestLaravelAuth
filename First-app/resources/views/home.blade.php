<html lang="eng">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>First App</title>
</head>
<body>

    @auth
        <p>You are logged in</p>
        <button>Log Out</button>
    @else
    <div style="border: 1px solid black; padding: 2rem">
        <h2>Register</h2>
        <form action="/register" method="post">
            @csrf
            <input type="text" name="name" placeholder="name">
            <input type="text" name="email" placeholder="email">
            <input type="password" name="password" placeholder="password">
            <button>Submit</button>
        </form>
    </div>
    @endauth

</body>
</html>
