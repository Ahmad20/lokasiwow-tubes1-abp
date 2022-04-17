@extends('layouts.main')
@section('container')

<div class="container">

  <h1>Admin comen panel</h1>
  {{-- Komen ditambahkan lewat postingan --}}
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Post ID</th>
        <th scope="col">Text</th>
        <th scope="col">Created At</th>
        <th scope="col">Action</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($comments as $comment)
        <tr>
            <td>{{ $comment->post_id }}</td>
            <td>{{ $comment->comment_text }}</td>
            <td>{{ $comment->created_at }}</td>
            <td>
                @method('')
                <button class="btn btn-warning me-2" onclick="window.location.href='{{ route('comments.edit', $comment->id) }}';">Edit</button>
                <button class="btn btn-danger" onclick="window.location.href='admin/blog/{{ $comment->id }}';">Delete</button>
            </td>
          </tr>
        @endforeach
      
    </tbody>
  </table>
</div>

@endsection