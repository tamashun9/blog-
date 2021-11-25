<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <h1 class="title">
            {{ $post->title }}
        </h1>
           <p class="edit">[<a href="/posts/{{ $post->id }}/edit">edit</a>]</p>
          <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}"method="post" style="display:inline">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <input type="submit" style="display:none"> 
                <p class="delete">[<span onclick="return deletePost(this);">delete</span>]</p>
            </form>
         
        <div class="content">
            <div class="content__post">
                <h3>本文</h3>
                <p>{{ $post->body }}</p>    
            </div>
        </div>
       
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
    
     <script>
            function deletePost(e) {
                'use strict';
                if(confirm('本当に削除しますか？')) {
                    document.getElementById("form_{{ $post->id }}").submit();
                }
                
            }
    </script>   
    
    
    
</html>