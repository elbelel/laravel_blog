@extends('layouts.app')

@section('content')
@include('layouts.slider')
@include('inc.messages')
<section class="s-content">
    <div class="row entries-wrap wide">
        <div class="entries">
            @if(count($posts)>0)
            @foreach ($posts as $post)
                        
            <article class="col-block">               
                <div class="item-entry" data-aos="zoom-in">
                    <div class="item-entry__thumb">
                        <a href="single-standard.html" class="item-entry__thumb-link">
                            <img src="/storage/cover_images/{{$post->cover_image}}" 
                                  alt="">
                        </a>
                    </div>
                    <div class="item-entry__text">   
                        <h1 class="item-entry__title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h1>     
                        <div class="item-entry__date">
                            <a href="single-standard.html">{{$post->created_at}} BY{{$post->name}} </a>
                        </div>
                    </div>
                </div> 
            </article>  
            @endforeach 
            @else
            <p>N0 post</p> 
            @endif
@endsection