<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head        
    <body>
        <h1>Blog Name</h1>
        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="title">
                <h2>title</h2>
                <input type="text" name="post[title]" placeholder="タイトル" value="{{ $post->title }}" />
               <p class="title__errow" style="color:red">{{ $errors->first('post.title') }}</p> 
            </div>
            <div class="body">
                <h2>body</h2>
                <textarea name="post[body]" placeholder="今日も１日お疲れ様でした。">{{ $post->body }}</textarea>
                <p class="body__errow" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <input type="submit" value="アップデート" />
        </form>
        <div class='footer'>
            <a href='/posts/{{ $post->id }}'>戻る</a>
        </div>
    </body>
</html>

