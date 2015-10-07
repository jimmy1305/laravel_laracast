@extends('app')
@section('content')
    <h1>Article</h1>
    <hr>
    <article>
        <h3>{{$article->title}}</h3>
        <div class="body">{{$article->body}}</div>
        <span>Published at: {{Carbon\Carbon::parse($article->published_at)->format('dd/MM/YYY')}}</span>
    </article>
@stop