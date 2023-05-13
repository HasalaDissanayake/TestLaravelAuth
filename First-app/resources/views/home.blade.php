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
        <form action="/logout" method="post">
            @csrf
            <button>Log Out</button>
        </form>

        <div style="border: 1px solid black; padding: 2rem">
            <h2>Create a Post</h2>
            <form action="/create-post" method="post" style="display: flex; flex-direction: column; gap: 2rem">
                @csrf
                <input type="text" name="title" placeholder="post-title">
                <textarea name="body" cols="30" rows="5" placeholder="post-body"></textarea>
                <button>Save Post</button>
            </form>
        </div>
    @else
    <div style="border: 1px solid black; padding: 2rem">
        <h2>Register</h2>
        <form action="/register" method="post">
            @csrf
            <input type="text" name="name" placeholder="name">
            <input type="text" name="email" placeholder="email">
            <input type="password" name="password" placeholder="password">
            <button>Register</button>
        </form>
    </div>
    <div style="border: 1px solid black; padding: 2rem">
        <h2>Login</h2>
        <form action="/login" method="post">
            @csrf
            <input type="text" name="loginname" placeholder="name">
            <input type="password" name="loginpassword" placeholder="password">
            <button>Login</button>
        </form>
    </div>
    @endauth

</body>
</html>
