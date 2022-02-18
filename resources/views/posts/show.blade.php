@extends('layouts.app')
@section('content')
<section class="s-content s-content--top-padding s-content--narrow">

        <article class="row entry format-standard">

            <div class="entry__media col-full">
                <div class="entry__post-thumb">
                    <img src="/storage/cover_images/{{$post->cover_image}}" 
                         
                          alt="">
                </div>
            </div>
            @include('inc.messages')
            <div class="entry__header col-full">
                <h1 class="entry__header-title display-1">
                   {{$post->title}}
                </h1>
                <ul class="entry__header-meta">
                    <li class="date">{{$post->created_at}}</li>
                    <li class="byline">
                        By
                        <a href="#0">{{ Auth::user()->name }}</a>
                    </li>
                </ul>
            </div>

            <div class="col-full entry__main">

                <p class="lead drop-cap">{{$post->body}}</p>
                <div class="entry__author">
                    

                    <div class="entry__author-about">
                        <h5 class="entry__author-name">
                            <span>Posted by</span>
                            <b>{{ Auth::user()->name }}</b>
                        </h5>

                        <div class="entry__author-desc">
                            <p>
                            <!-- Alias aperiam at debitis deserunt dignissimos dolorem doloribus, fuga fugiat 
                            impedit laudantium magni maxime nihil nisi quidem quisquam sed ullam voluptas 
                            voluptatum. Lorem ipsum dolor sit. -->
                            </p>
                            <a href="\" class="btn btn-primary">Go Back</a>
                            @if (!auth::guest())
                            @if(auth::user()->id==$post->user_id)
                            <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
                            
                            {!!Form::open(['action' => ['PostsController@destroy',$post->id],'method'=>'POST','class'=> 'pull-right'])!!}
                                    {{Form::hidden('_method','DELETE')}}
                                    {{Form::submit('Delete',['class'=>'btn btn-danger' ])}}
                            {!!Form::close()!!}
                            @endif
                            @endif
                        </div>
                        
                    </div>
                </div>

            </div> <!-- s-entry__main -->

        </article> <!-- end entry/article -->
    </section> <!-- end s-content -->
@endsection