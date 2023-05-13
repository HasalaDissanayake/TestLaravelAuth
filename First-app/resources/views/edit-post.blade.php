<html lang="eng">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Post</title>
</head>
<body>
    <h2>Edit Post</h2>
    <form action="/edit-post/{{$post->id}}" method="post">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{$post->title}}">
        <textarea name="body" cols="30" rows="5" placeholder="post-body">{{$post->body}}</textarea>
        <button>Save Changes</button>
    </form>
</body>
</html>
