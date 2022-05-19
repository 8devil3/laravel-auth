@extends('layouts.app')

@section('title', $post->title)

@section('content')
   <div class="container">
      <h1>{{ $post->title }}</h1>
      <h4>{{ $post->author }}</h4>
      <time>{{ date('d/m/Y', strtotime($post->date)) }}</time>
      <p class="mt-4">{{ $post->content }}</p>
      <hr>
      <a href="{{ route('admin.posts.edit', $post->slug) }}" class="btn btn-warning">Edit</a>
      <a href="{{ route('admin.posts.destroy', $post->slug) }}" class="btn btn-danger">Delete</a>
   </div>
@endsection
