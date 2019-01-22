@extends('layouts.app')

@section('content')
<h2 class="text-center">Your Post</h2>
<section class="s-content">
    <div class="row entries-wrap wide">  
            <a class="btn btn-primary" href="/posts/create">Create post</a>
        <div class="entries">
            @if(count($posts)>0)
            @foreach ($posts as $post)
                        
            <article class="col-block">               
                <div class="item-entry" data-aos="zoom-in">
                    <div class="item-entry__thumb">
                        <a href="single-standard.html" class="item-entry__thumb-link">
                            <img src="images/thumbs/post/lamp-400.jpg" 
                                 srcset="images/thumbs/post/lamp-400.jpg 1x, images/thumbs/post/lamp-800.jpg 2x" alt="">
                        </a>
                    </div>
                    <div class="item-entry__text">   
                        <h1 class="item-entry__title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h1>     
                        <div class="item-entry__date">
                            <a href="single-standard.html">{{$post->created_at}}</a>
                        </div>
                    </div>
                </div> 
            </article>  
            @endforeach 
            @else
            <p>N0 post</p> 
            @endif
        </div>
    </div>
</section>
@endsection
