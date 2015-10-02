@extends('app')
@section('content')
    <h1>Article</h1>
    <hr>
    <article>
        <h3>{{$article->title}}</h3>
        <div class="body">{{$article->body}}</div>
        <span>Published at: {{$article->published_at}}</span>
    </article>
@stop