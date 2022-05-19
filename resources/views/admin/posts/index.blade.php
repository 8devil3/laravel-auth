@extends('layouts.app')

@section('title', 'Posts list')

@section('content')
   <div class="container">
      <h1>Posts list</h1>
      <table class="table table-hover">
         <thead>
            <tr>
               <th scope="col">Title</th>
               <th scope="col">Date</th>
               <th scope="col">Excerpt</th>
               <th scope="col">Actions</th>
            </tr>
         </thead>
         <tbody>
            @foreach ($posts as $post)
               <tr>
                  <td scope="row">{{ $post->title }}</th>
                  <td>{{ date('d/m/Y', strtotime($post->date)) }}</td>
                  <td>{{ substr($post->content, 0, 64) }}...</td>
                  <td>
                     <a href="{{ route('admin.posts.show', $post->slug) }}" class="btn btn-primary">View</a>
                     <a href="{{ route('admin.posts.edit', $post->slug) }}" class="btn btn-warning">Edit</a>
                     <a href="{{ route('admin.posts.destroy', $post->slug) }}" class="btn btn-danger">Delete</a>
                  </td>
               </tr>
            @endforeach
         </tbody>
      </table>
      {{ $posts->links() }}
   </div>
@endsection
