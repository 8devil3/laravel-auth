@extends('layouts.app')

@section('title', 'Add new post')


@section('content')
<form method="POST" action="{{ route('admin.posts.store') }}">
   <h1 class="mb-4">Add new post</h1>

   @csrf

   <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" aria-describedby="title" value="{{ old('title') }}">

      @error('title')
         <div class="alert alert-danger">{{ $message }}</div>
      @enderror
   </div>

   <div class="mb-3">
      <label for="author" class="form-label">Author</label>
      <input type="text" class="form-control @error('author') is-invalid @enderror" name="author" aria-describedby="author" value="{{ $posts->author }}">

      @error('author')
         <div class="alert alert-danger">{{ $message }}</div>
      @enderror
   </div>

   <div class="mb-3">
      <label for="slug" class="form-label">Slug</label>
      <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" aria-describedby="slug" value="{{ $posts->slug }}">

      @error('slug')
         <div class="alert alert-danger">{{ $message }}</div>
      @enderror
   </div>

   <div class="mb-3 d-flex flex-column">
      <label for="description" class="form-label">Content</label>
      <textarea name="description" cols="30" rows="10" class="form-control" aria-describedby="description">{{ old('description') }}</textarea>
   </div>

   <div class="mb-3">
      <label for="date" class="form-label">Post date</label>
      <input type="date" class="form-control @error('date') is-invalid @enderror" name="date" aria-describedby="post date" value="{{ $posts->date }}">

      @error('date')
         <div class="alert alert-danger">{{ $message }}</div>
      @enderror
   </div>


   <button type="submit" class="btn btn-primary">Add</button>

   <div class="btn btn-secondary" id="btn-add-reset">Clear fields</div>

   <a href="{{ route('admin.posts.index') }}" class="btn btn-link" id="btn-back">Back to all</a>

</form>
@endsection
